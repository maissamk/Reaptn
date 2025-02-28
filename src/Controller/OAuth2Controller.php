<?php
// src/Controller/OAuth2Controller.php

namespace App\Controller;

use App\Security\OAuth2\GoogleProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OAuth2Controller extends AbstractController
{
    private $googleProvider;

    public function __construct(GoogleProvider $googleProvider)
    {
        $this->googleProvider = $googleProvider;
    }

    
    #[Route("/login/google", name: "google_login")]
    public function googleLogin()
    {
        // Generate Google authorization URL
        $authorizationUrl = $this->googleProvider->getAuthorizationUrl();
        return new RedirectResponse($authorizationUrl);
    }

    
    #[Route("/login/google/callback", name: "google_callback")]
    public function googleCallback(Request $request)
    {
        $code = $request->query->get('code');
        if (!$code) {
            throw $this->createNotFoundException('Authorization code not provided.');
        }

        // Get the access token using the code
        $accessToken = $this->googleProvider->getAccessToken($code);

        // Get user data using the access token
        $user = $this->googleProvider->getUserData($accessToken);

        // Here you would typically store the user data in the session and/or database
        // For example:
        $this->get('session')->set('user', $user);

        return $this->redirectToRoute('home');
    }
}
