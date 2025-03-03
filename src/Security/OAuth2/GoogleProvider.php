<?php
// src/Security/OAuth2/GoogleProvider.php

namespace App\Security\OAuth2;

use League\OAuth2\Client\Provider\Google;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class GoogleProvider
{
    private $googleProvider;
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;

        // Replace with your Google OAuth credentials
        $this->googleProvider = new Google([
            'clientId'     => 'YOUR_GOOGLE_CLIENT_ID',
            'clientSecret' => 'YOUR_GOOGLE_CLIENT_SECRET',
            'redirectUri'  => $this->router->generate('google_callback', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
    }

    public function getAuthorizationUrl()
    {
        return $this->googleProvider->getAuthorizationUrl();
    }

    public function getAccessToken($code)
    {
        return $this->googleProvider->getAccessToken('authorization_code', ['code' => $code]);
    }

    public function getUserData($accessToken)
    {
        try {
            return $this->googleProvider->getResourceOwner($accessToken);
        } catch (IdentityProviderException $e) {
            throw new \Exception('Error fetching user details', 0, $e);
        }
    }
}
