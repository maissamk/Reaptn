<?php
// src/EventListener/OAuthSuccessListener.php

namespace App\EventListener;

use HWI\Bundle\OAuthBundle\Event\OAuthUserEvent;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class OAuthSuccessListener
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function onOAuthSuccess(OAuthUserEvent $event)
    {
        $user = $event->getUser();

        // Here you can modify the user or set additional roles
        // Example: Check the user's email and assign a role
        if ($user instanceof UserInterface) {
            $email = $user->getEmail();

            // Logic to assign roles or perform actions based on email
            if (strpos($email, '@admin.com') !== false) {
                $user->setRoles(['ROLE_ADMIN']);
            } else {
                $user->setRoles(['ROLE_USER']);
            }
        }

        // Redirect to the homepage or any other route
        $event->setResponse(new RedirectResponse($this->urlGenerator->generate('app_page')));
    }
}
