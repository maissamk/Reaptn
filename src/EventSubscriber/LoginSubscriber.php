<?php

namespace App\EventSubscriber;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginSubscriber implements EventSubscriberInterface
{
    private $entityManager;

    // Inject the EntityManager into the constructor
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Handle the event when the login is successful
    public function onLoginSuccessEvent(LoginSuccessEvent $event): void
    {
        // Get the logged-in user
        $user = $event->getUser();

        if ($user instanceof User) {
            // Set the user's status to 'active'
            $user->setStatus('active');

            // Persist the changes to the database
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }
    }

    // Define the event(s) that this subscriber listens to
    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class => 'onLoginSuccessEvent',
        ];
    }
}
