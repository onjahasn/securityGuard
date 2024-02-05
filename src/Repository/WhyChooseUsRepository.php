<?php

namespace App\Repository;

use App\Entity\WhyChooseUs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WhyChooseUs>
 *
 * @method WhyChooseUs|null find($id, $lockMode = null, $lockVersion = null)
 * @method WhyChooseUs|null findOneBy(array $criteria, array $orderBy = null)
 * @method WhyChooseUs[]    findAll()
 * @method WhyChooseUs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WhyChooseUsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WhyChooseUs::class);
    }

//    /**
//     * @return WhyChooseUs[] Returns an array of WhyChooseUs objects
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

//    public function findOneBySomeField($value): ?WhyChooseUs
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
