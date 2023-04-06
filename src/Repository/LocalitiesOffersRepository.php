<?php

namespace App\Repository;

use App\Entity\LocalitiesOffers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LocalitiesOffers>
 *
 * @method LocalitiesOffers|null find($id, $lockMode = null, $lockVersion = null)
 * @method LocalitiesOffers|null findOneBy(array $criteria, array $orderBy = null)
 * @method LocalitiesOffers[]    findAll()
 * @method LocalitiesOffers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocalitiesOffersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LocalitiesOffers::class);
    }

    public function save(LocalitiesOffers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LocalitiesOffers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return LocalitiesOffers[] Returns an array of LocalitiesOffers objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LocalitiesOffers
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
