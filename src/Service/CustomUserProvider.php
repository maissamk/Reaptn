<?php

namespace App\Service;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class CustomUserProvider implements UserProviderInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Load user by identifier (email or username)
     */
    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        // Assuming the identifier is the email
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $identifier]);

        if (!$user) {
            throw new UserNotFoundException('User not found.');
        }

        return $user;
    }

    /**
     * Load user by face token
     */
    public function loadUserByFaceToken(string $faceToken): UserInterface
    {
        // Load user by face token
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['face_token' => $faceToken]);

        if (!$user) {
            throw new UserNotFoundException('User not found.');
        }

        return $user;
    }

    /**
     * Refresh the user (e.g., after serialization)
     */
    public function refreshUser(UserInterface $user): UserInterface
    {
        // Refresh the user from the database
        return $this->loadUserByIdentifier($user->getUserIdentifier());
    }

    /**
     * Return true if this provider supports the User class
     */
    public function supportsClass($class): bool
    {
        return User::class === $class || is_subclass_of($class, User::class);
    }
}