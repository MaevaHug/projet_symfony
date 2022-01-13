<?php

namespace App\Repository;

use App\Entity\IngredientLine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IngredientLine|null find($id, $lockMode = null, $lockVersion = null)
 * @method IngredientLine|null findOneBy(array $criteria, array $orderBy = null)
 * @method IngredientLine[]    findAll()
 * @method IngredientLine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IngredientLineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IngredientLine::class);
    }

}
