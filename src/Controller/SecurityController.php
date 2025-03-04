<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Service\GoogleAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\CompleteProfileFormType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;




class SecurityController extends AbstractController

{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // Last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Symfony will intercept this method
    }

    // Admin login page (same as regular login but for admin)
    #[Route(path: '/admin/login', name: 'admin_login')]
    public function adminLogin(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    // Admin logout page
    #[Route(path: '/admin/logout', name: 'admin_logout')]
    public function adminLogout(): void
    {
        // Symfony will handle this
    }
    #[Route('/connect/google', name: 'connect_google')]
    public function connectGoogle(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry->getClient('google')->redirect(
            ['email', 'profile'], // Scopes
            [] // Options (empty array if not needed)
        );
    }
    
    #[Route('/connect/google/check', name: 'connect_google_check', methods: ['GET', 'POST'])]
    public function connectGoogleCheck(Request $request): void
    {
        // This method should never be executed because the GoogleAuthenticator
        // intercepts requests to this route.
        throw new \LogicException('This route is handled by the GoogleAuthenticator.');
    }
    #[Route('/complete-profile', name: 'complete_profile')]
    public function completeProfile(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        // Get the currently logged-in user
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Create the form
        $form = $this->createForm(CompleteProfileFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash the password
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));

            // Set the selected role
            $role = $form->get('roles')->getData();
            if ($role) {
                $user->setRoles([$role]);
            }

            // Save the updated user
            $entityManager->flush();

            // Redirect to the home page or another route
            return $this->redirectToRoute('app_page');
        }

        // Render the form
        return $this->render('security/complete_profile.html.twig', [
            'form' => $form->createView(),
        ]);
    }
   
}
