<?php

namespace App\Repository;

use App\Entity\PersonnelReseauSocial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonnelReseauSocial>
 *
 * @method PersonnelReseauSocial|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonnelReseauSocial|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonnelReseauSocial[]    findAll()
 * @method PersonnelReseauSocial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonnelReseauSocialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonnelReseauSocial::class);
    }

//    /**
//     * @return PersonnelReseauSocial[] Returns an array of PersonnelReseauSocial objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PersonnelReseauSocial
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
