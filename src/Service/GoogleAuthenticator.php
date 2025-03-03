<?php
namespace App\Service;

use KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class GoogleAuthenticator extends AbstractAuthenticator
{
    private GoogleClient $client;
    private RouterInterface $router;
    private EntityManagerInterface $entityManager;
    private UserRepository $userRepository;
    private SluggerInterface $slugger;
    private string $uploadsDirectory;

    public function __construct(
        GoogleClient $client, 
        RouterInterface $router, 
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        SluggerInterface $slugger,
        ParameterBagInterface $params
    ) {
        $this->client = $client;
        $this->router = $router;
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->slugger = $slugger;
        $this->uploadsDirectory = $params->get('avatars_directory');
    }

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'connect_google_check';
    }

    public function authenticate(Request $request): Passport
{
    $accessToken = $this->client->getAccessToken();
    $googleUser = $this->client->fetchUserFromToken($accessToken);
    $email = $googleUser->getEmail();

    return new SelfValidatingPassport(
        new UserBadge($email, function () use ($googleUser) {
            // Check if the user already exists in the database
            $user = $this->userRepository->findOneBy(['email' => $googleUser->getEmail()]);

            if (!$user) {
                // If the user doesn't exist, create a new one with minimal data
                $user = new User();
                $user->setGoogleId($googleUser->getId());
                $user->setEmail($googleUser->getEmail());

                // Split the full name into first name and last name
                $fullName = $googleUser->getName();
                $nameParts = explode(' ', $fullName, 2); // Split into at most 2 parts
                $prenom = $nameParts[0] ?? ''; // First name
                $nom = $nameParts[1] ?? ''; // Last name (if available)

                $user->setNom($nom);
                $user->setPrenom($prenom);

                // Set a default role (will be updated in the profile completion form)
                $user->setRoles(['ROLE_CLIENT']);

                // Set a temporary password (will be updated in the profile completion form)
                $temporaryPassword = bin2hex(random_bytes(8)); // Generates a random 16-character password
                $user->setPassword($temporaryPassword);

                // Set a default phone number (will be updated in the profile completion form)
                $user->setTelephone('00000000');


                $avatar = $googleUser->getAvatar();
                if ($avatar) {
                    $newFilename = uniqid() . '.jpg';
                    $imageData = file_get_contents($avatar);
                    file_put_contents($this->uploadsDirectory . '/' . $newFilename, $imageData);
                    $user->setAvatar($newFilename);
                }

                // Persist the new user in the database
                $this->entityManager->persist($user);
                $this->entityManager->flush();

                // Redirect to the profile completion page
                throw new CustomUserMessageAuthenticationException('Please complete your profile.');
            }

            return $user;
        })
    );
}

public function onAuthenticationSuccess(Request $request, $token, string $firewallName): ?RedirectResponse
{
    $user = $token->getUser();
    $user->incrementLoginAttempts();
    // Check if the user has completed their profile (e.g., if the telephone is still the default value)
    if ($user->getTelephone() === '00000000') {
        return new RedirectResponse($this->router->generate('complete_profile'));
    }

    return new RedirectResponse($this->router->generate('app_page'));
}

public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?RedirectResponse
{
    if ($exception instanceof CustomUserMessageAuthenticationException) {
        return new RedirectResponse($this->router->generate('complete_profile'));
    }

    return new RedirectResponse($this->router->generate('app_user_login'));
}
}