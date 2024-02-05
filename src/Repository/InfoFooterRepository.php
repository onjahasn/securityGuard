<?php

namespace App\Repository;

use App\Entity\InfoFooter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InfoFooter>
 *
 * @method InfoFooter|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoFooter|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoFooter[]    findAll()
 * @method InfoFooter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoFooterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoFooter::class);
    }

//    /**
//     * @return InfoFooter[] Returns an array of InfoFooter objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InfoFooter
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
