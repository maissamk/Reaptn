<?php
namespace App\Security;

use KnpU\OAuth2ClientBundle\Client\ClientInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class OAuthSuccessHandler
{
    private $tokenStorage;
    private $entityManager;

    public function __construct(TokenStorageInterface $tokenStorage, EntityManagerInterface $entityManager)
    {
        $this->tokenStorage = $tokenStorage;
        $this->entityManager = $entityManager;
    }

    public function handle(ClientInterface $client)
    {
        // Fetch the user information from OAuth
        $user = $client->fetchUser();
        $email = $user->getEmail();

        // Check the role you want to assign based on email, domain, or other criteria
        $role = $this->assignRoleBasedOnEmail($email);

        // Logic to save user to database or log them in
        // For example, fetch the user from the database or create a new one
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$existingUser) {
            $existingUser = new User();
            $existingUser->setEmail($email);
            $existingUser->setRoles([$role]); // Set the determined role
            $this->entityManager->persist($existingUser);
            $this->entityManager->flush();
        }

        // Set the authenticated token to indicate user is logged in
        $this->tokenStorage->setToken($existingUser);

        // Redirect to profile or homepage
        return new RedirectResponse('/profile');
    }

    private function assignRoleBasedOnEmail(string $email): string
    {
        // Example: assign roles based on email domain or some other condition
        if (strpos($email, '@admin.com') !== false) {
            return 'ROLE_ADMIN';
        } elseif (strpos($email, '@client.com') !== false) {
            return 'ROLE_CLIENT';
        } else {
            return 'ROLE_AGRICULTEUR';
        }
    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
{
    // Handle OAuth-specific redirects (after OAuth success)
    if ($this->isOAuthLogin($request)) {
        // Redirect OAuth users to their profile
        return new RedirectResponse('/profile');
    }

    // Regular form login redirection logic
    if (in_array('ROLE_ADMIN', $token->getUser()->getRoles())) {
        return new RedirectResponse($this->urlGenerator->generate('app_admin'));
    }

    // Default target path (e.g., homepage)
    if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
        return new RedirectResponse($targetPath);
    }

    return new RedirectResponse($this->urlGenerator->generate('app_page'));
}

    private function isOAuthLogin(Request $request): bool
{
    // Logic to check if this request is from an OAuth login (can be based on route, etc.)
    return in_array('oauth', $request->attributes->get('_route'), true);
}

}
