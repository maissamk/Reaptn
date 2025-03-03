<?php
// src/EventListener/CheckUserStatusListener.php

namespace App\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;
use App\Entity\User;

class CheckUserStatusListener
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();

        if ($user instanceof User && $user->getStatus() === 'blocked') {
            throw new AccessDeniedException('Your account has been blocked. Please contact the administrator.');
        }
    }
}
