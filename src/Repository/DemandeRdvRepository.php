<?php

namespace App\Repository;

use App\Entity\DemandeRdv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<DemandeRdv>
 *
 * @method DemandeRdv|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandeRdv|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandeRdv[]    findAll()
 * @method DemandeRdv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandeRdvRepository extends ServiceEntityRepository
{
    public const PAGINATOR_PER_PAGE = 10;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeRdv::class);
    }

    public function getDemandeRdvPaginator(DemandeRdv $demande, int $offset): Paginator
    {
        $query = $this->createQueryBuilder('c')
            ->andWhere('c.demande = :demande')
            ->setParameter('demande', $demande)
            ->orderBy('c.createdAt', 'DESC')
            ->setMaxResults(self::PAGINATOR_PER_PAGE)
            ->setFirstResult($offset)
            ->getQuery();

        return new Paginator($query);
    }

    public function save(DemandeRdv $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DemandeRdv $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // $query = $entityManager->createQueryBuilder()
    // ->select('e')
    // ->from('App\Entity\MyEntity', 'e')
    // ->where('e.code != :code')
    // ->setParameter('code', 1)
    // ->getQuery();

    //    /**
    //     * @return DemandeRdv[] Returns an array of DemandeRdv objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('d.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    public function findOneByFieldGest(string $etatDemandes = null, string $etatDemande = null): array
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

    public function findOneByFieldGest_2(string $etatDemandes = null, string $etatDemande = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 2)
            ->andWhere('d.direction = :direction')
            ->setParameter('direction', 2);

        return $queryBuilder
            ->getQuery()
            ->getResult();

        // ->where($queryBuilder->expr()->andX(
        //     $queryBuilder->expr()->neq('e.code', 2),
        //     $queryBuilder->expr()->neq('e.code', 3)
        // ));
    }

    public function findOneByFieldGest_3(string $etatDemandes = null, string $etatDemande = null): array
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

    public function findOneByFieldAccueil(string $etatDemandes = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 1);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    public function findOneByFieldAccueil_2(string $etatDemandes = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 8);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }
    // Repository pour le superviseur
    public function findSupRequeteByField(string $etatDemandes = null, string $etatDemande = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 2);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }

    // Repository pour le superviseur
    public function findSupValidRdvByField(string $etatDemandes = null, string $etatDemande = null): array
    {
        $queryBuilder =  $this->createQueryBuilder('d')
            ->where('d.etatDemandes = :etatDemandes')
            ->setParameter('etatDemandes', 2);

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }
}
