<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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
    #[Route(path: '/login/google/callback', name: 'google_redirect')]
    public function googleRedirect(): RedirectResponse
    {
        // The OAuth2 client bundle handles the OAuth process
        // Once the user successfully logs in with Google, this route will be called

        // You can fetch the OAuth user info here if needed, and handle login logic
        // Redirect to a different page after successful login (e.g., profile page)
        return $this->redirectToRoute('profile'); // Change this route to your desired target
    }
    
}
