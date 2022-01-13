<?php

namespace App\Repository;

use App\Entity\Recipe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Recipe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recipe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recipe[]    findAll()
 * @method Recipe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recipe::class);
    }

    /**
     * Returns recipes[]
     */
    public function findAllWithPagination($page, $limit, $user = null, $filter = null, $isIngredient = false)
    {
        $query = $this->createQueryBuilder('r') // alias pour recipe
            ->where('r.isPrivate = 0')
            ->orWhere('r.author = :user')
            ->setParameter('user', $user);
        if ($filter != null) {
            $query->andWhere('r.name LIKE :filter')
                ->setParameter('filter', '%' . $filter . '%');
            if ($isIngredient == true) {
                $query->innerJoin('r.ingredientLines', 'il')
                    ->innerJoin('il.ingredient', 'i')
                    ->orWhere('i.name LIKE :filter')
                    ->setParameter('filter', '%' . $filter . '%');
            }
        }
        $query
            ->orderBy('r.createdAt', 'DESC')
            ->setFirstResult(($page * $limit) - $limit)
            ->setMaxResults($limit);

        return $query->getQuery()->getResult();
    }

    /**
     * Returns number of Recipes, whith conditions (private or not, filter or not)
     */
    public function getTotalRecipe($user = null, $filter = null, $isIngredient = false)
    {
        $query = $this->createQueryBuilder('r')
            ->select('COUNT(r)')
            ->where('r.isPrivate = 0')
            ->orWhere('r.author = :user')
            ->setParameter('user', $user);
        if ($filter != null) {
            $query->andWhere('r.name LIKE :filter')
                ->setParameter('filter', '%' . $filter . '%');
            if ($isIngredient == true) {
                $query->innerJoin('r.ingredientLines', 'il')
                    ->innerJoin('il.ingredient', 'i')
                    ->orWhere('i.name LIKE :filter')
                    ->setParameter('filter', '%' . $filter . '%');
            }
        }
        return $query->getQuery()->getSingleScalarResult();
    }
}
