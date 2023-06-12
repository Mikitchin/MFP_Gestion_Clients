<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public const PAGINATOR_PER_PAGE = 2;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    public function save(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function findReclaAccueil(string $etatDemandes = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 1);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    // Repository pour le gestionnaire numéro 1
    public function findRecByFieldGest(string $etatDemandes = null, string $etatDemande = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 2)
            ->andWhere('d.direction = :direction')
            ->setParameter('direction', 1);

        return $queryBuilder
            ->getQuery()
            ->getResult();

        // ->where($queryBuilder->expr()->andX(
        //     $queryBuilder->expr()->neq('e.code', 2),
        //     $queryBuilder->expr()->neq('e.code', 3)
        // ));
    }

    // Repository pour le gestionnaire numéro 1
    public function findRecByFieldGest_2(string $etatDemandes = null, string $etatDemande = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 2)
            ->andWhere('d.direction = :direction')
            ->setParameter('direction', 2);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    // Repository pour le gestionnaire numéro 1
    public function findRecByFieldGest_3(string $etatDemandes = null, string $etatDemande = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 2)
            ->andWhere('d.direction = :direction')
            ->setParameter('direction', 3);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    // Repository pour le superviseur
    public function findSupByField(string $etatDemandes = null, string $etatDemande = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 2);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }


    //    /**
    //     * @return Reclamation[] Returns an array of Reclamation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reclamation
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
