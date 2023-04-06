<?php

namespace App\Repository;

use App\Entity\CategoriesOffers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategoriesOffers>
 *
 * @method CategoriesOffers|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoriesOffers|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoriesOffers[]    findAll()
 * @method CategoriesOffers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesOffersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoriesOffers::class);
    }

    public function save(CategoriesOffers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CategoriesOffers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CategoriesOffers[] Returns an array of CategoriesOffers objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CategoriesOffers
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
