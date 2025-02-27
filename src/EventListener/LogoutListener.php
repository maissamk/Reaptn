<?php

// src/EventListener/LogoutListener.php

namespace App\EventListener;
use Psr\Log\LoggerInterface;

use Symfony\Component\Security\Http\Event\LogoutEvent;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;

class LogoutListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            LogoutEvent::class => 'onLogout',
        ];
    }
    
    private $entityManager;
    private $logger;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->logger = $logger;
        $this->security = $security;
    }

    public function onLogout(LogoutEvent $event): void
    {
        $this->logger->info('Logout event triggered');

        $user = $this->security->getUser();

        if ($user instanceof User) {
            $user->setStatus('inactive');

            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }
    }
}

