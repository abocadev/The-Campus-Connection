<?php

namespace App\Repository;

use App\Entity\WeeklyHoursOffers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WeeklyHoursOffers>
 *
 * @method WeeklyHoursOffers|null find($id, $lockMode = null, $lockVersion = null)
 * @method WeeklyHoursOffers|null findOneBy(array $criteria, array $orderBy = null)
 * @method WeeklyHoursOffers[]    findAll()
 * @method WeeklyHoursOffers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeeklyHoursOffersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WeeklyHoursOffers::class);
    }

    public function save(WeeklyHoursOffers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(WeeklyHoursOffers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return WeeklyHoursOffers[] Returns an array of WeeklyHoursOffers objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WeeklyHoursOffers
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
