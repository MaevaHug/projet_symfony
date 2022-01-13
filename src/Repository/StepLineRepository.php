<?php

namespace App\Repository;

use App\Entity\StepLine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StepLine|null find($id, $lockMode = null, $lockVersion = null)
 * @method StepLine|null findOneBy(array $criteria, array $orderBy = null)
 * @method StepLine[]    findAll()
 * @method StepLine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StepLineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StepLine::class);
    }

    

    // /**
    //  * @return StepLine[] Returns an array of StepLine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StepLine
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
