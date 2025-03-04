<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }
    public function searchUsers(?string $search, ?string $role, ?string $status)
    {
        // Initialize the QueryBuilder
        $qb = $this->createQueryBuilder('u');
    
        // If only the search term is provided, filter by email, nom, or prenom
        if ($search) {
            $qb->andWhere('u.email LIKE :search OR u.nom LIKE :search OR u.prenom LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }
    
        // If only the role is provided, filter by role (assuming roles are stored as a JSON array)
        if ($role) {
            $qb->andWhere('u.roles LIKE :role')
                ->setParameter('role', '%"' . $role . '"%');
        }
    
        // If only the status is provided, filter by status
        if ($status) {
            $qb->andWhere('u.status = :status')
                ->setParameter('status', $status);
        }
    
        // Execute the query and return the results
        return $qb->getQuery()->getResult();
    }
    
    public function countUsersByRole(): array
{
    $roles = ['ROLE_ADMIN', 'ROLE_CLIENT', 'ROLE_AGRICULTEUR']; // List of known roles
    $results = [];

    foreach ($roles as $role) {
        $count = $this->createQueryBuilder('u')
            ->select('COUNT(u.id) as user_count')
            ->where('u.roles LIKE :role')
            ->setParameter('role', '%"' . $role . '"%')
            ->getQuery()
            ->getSingleScalarResult();

        $results[] = ['role' => $role, 'user_count' => $count];
    }

    return $results;
}


    //    /**
    //     * @return User[] Returns an array of User objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('u.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?User
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
