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

        // Access the user from the security context
        $user = $this->security->getUser();

        if ($user instanceof User) {
            // Set the user's status to 'inactive'
            $user->setStatus('inactive');

            // Persist the changes to the database
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }
    }
}

