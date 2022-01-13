<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORY_REFERENCE = 'category';

    public const CATEGORIES = ['sablés', 'biscuits', 'tuiles', 'soufflés', 'tartes'];

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < count(self::CATEGORIES); $i++) {
            $category = new Category();
            $category->setName(self::CATEGORIES[$i]);

            $this->addReference(self::CATEGORY_REFERENCE . '_' . $i, $category);

            $manager->persist($category);
        }

        $manager->flush();
    }
}
