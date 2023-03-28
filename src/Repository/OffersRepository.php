<?php

namespace App\Repository;

use App\Entity\Company;
use App\Entity\Offers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class OffersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offers::class);
    }

    public function last()
    {
        return $this->getEntityManager()->createQuery('
            SELECT c FROM App\Entity\Offers c ORDER BY c.id DESC
            ')->setMaxResults(1)->getOneOrNullResult();
    }

    public function save(Offers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Offers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function allOffersCompany(Company $company): array
    {
        return $this->getEntityManager()->createQuery('
            SELECT o FROM App\Entity\Offers o WHERE o.Company=:company
        ')->setParameter('company', $company->getId())->getResult();
    }

//    /**
//     * @return Offers[] Returns an array of Offers objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Offers
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
