<?php

namespace App\Repository;

use App\Entity\AboutDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AboutDetails>
 *
 * @method AboutDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method AboutDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method AboutDetails[]    findAll()
 * @method AboutDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AboutDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AboutDetails::class);
    }

//    /**
//     * @return AboutDetails[] Returns an array of AboutDetails objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AboutDetails
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
