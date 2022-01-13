<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class IngredientFixtures extends Fixture
{
    public const INGREDIENT_REFERENCE = 'ingredient';

    public const INGREDIENTS = ['lait', 'oeuf', 'farine', 'sel', 'sucre'];

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < count(self::INGREDIENTS); $i++) {
            $ingredient = new Ingredient();
            $ingredient->setName(self::INGREDIENTS[$i]);

            $this->addReference(self::INGREDIENT_REFERENCE . '_' . $i, $ingredient);

            $manager->persist($ingredient);
        }

        $manager->flush();
    }
}
