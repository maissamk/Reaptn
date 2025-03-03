<?php

namespace App\Repository;

use App\Entity\Materielvente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;



/**
 * @extends ServiceEntityRepository<Materielvente>
 */
class MaterielventeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Materielvente::class);
    }

    //    /**
    //     * @return Materielvente[] Returns an array of Materielvente objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Materielvente
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }





    // src/Repository/MaterielventeRepository.php

    public function searchByFilters(?string $searchTerm, ?float $minPrice, ?float $maxPrice, ?int $categorieId): QueryBuilder
    {
        $qb = $this->createQueryBuilder('m');

        if ($searchTerm) {
            $qb->andWhere('m.nom LIKE :searchTerm OR m.description LIKE :searchTerm')
               ->setParameter('searchTerm', '%'.$searchTerm.'%');
        }

        if ($minPrice) {
            $qb->andWhere('m.prix >= :minPrice')
               ->setParameter('minPrice', $minPrice);
        }

        if ($maxPrice) {
            $qb->andWhere('m.prix <= :maxPrice')
               ->setParameter('maxPrice', $maxPrice);
        }

        if ($categorieId) {
            $qb->andWhere('m.categorie = :categorieId')
               ->setParameter('categorieId', $categorieId);
        }
         
        return $qb;
    }



    public function searchByFiltersadmin(?string $searchTerm, ?float $minPrice, ?float $maxPrice, ?int $categorieId): QueryBuilder
    {
        // Créer un QueryBuilder pour l'entité Materielvente
        $qb = $this->createQueryBuilder('m');

        // Appliquer les filtres dynamiquement
        if ($searchTerm) {
            $qb->andWhere('m.nom LIKE :searchTerm OR m.description LIKE :searchTerm')
               ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        if ($minPrice !== null) {
            $qb->andWhere('m.prix >= :minPrice')
               ->setParameter('minPrice', $minPrice);
        }

        if ($maxPrice !== null) {
            $qb->andWhere('m.prix <= :maxPrice')
               ->setParameter('maxPrice', $maxPrice);
        }

        if ($categorieId !== null) {
            $qb->andWhere('m.categorie = :categorieId')
               ->setParameter('categorieId', $categorieId);
        }

        // Retourner le QueryBuilder
        return $qb;
    }



    
}

    











