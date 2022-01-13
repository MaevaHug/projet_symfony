<?php

namespace App\DataFixtures;

use App\Entity\Unity;
use App\Entity\Ingredient;
use App\Entity\IngredientLine;
use App\Entity\Recipe;
use App\Entity\StepLine;
use App\Entity\User;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Provider\fr_FR\Text;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use faker\Factory;

class RecetteFixtures extends Fixture implements DependentFixtureInterface
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface  $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {
            $user = new User();
            $manager->persist($user);
            $user->setEmail($faker->email())
                ->setUsername($faker->userName())
                ->setPassword($this->passwordHasher->hashPassword($user, '123soleil'));
            $manager->persist($user);
            $users[] = $user;
        }
        for ($j = 0; $j < 5; $j++) {
            $recipe = new Recipe();
            $recipe->setName($faker->words(3, true))
                ->setAuthor($faker->randomElement($users))
                ->setCreatedAt($faker->dateTimeBetween('- 6 months'))
                ->setIsPrivate($faker->boolean())
                ->setNotes($faker->paragraphs(2, true))
                ->setCategory($this->getReference(CategoryFixtures::CATEGORY_REFERENCE . '_' . random_int(0, count(CategoryFixtures::CATEGORIES) - 1)));
            $manager->persist($recipe);

            // Création de 2 à 4 lignes d'ingrédient par recette
            for ($k = 0; $k < mt_rand(2, 4); $k++) {
                $ingredientLine = new IngredientLine;
                $ingredientLine->setAmount($faker->numberBetween(1, 100))
                    ->setIngredient($this->getReference(IngredientFixtures::INGREDIENT_REFERENCE . '_' . random_int(0, count(IngredientFixtures::INGREDIENTS) - 1)))
                    ->setUnity($this->getReference(UnityFixtures::UNITY_REFERENCE . '_' . random_int(0, count(UnityFixtures::UNITIES) - 1)))
                    ->setRecipe($recipe);
                $manager->persist($ingredientLine);
            }

            // Création de 2 à 4 étapes par recette
            for ($l = 0; $l < mt_rand(2, 4); $l++) {
                $stepLine = new StepLine;
                $stepLine //->setStepOrder($l + 1)
                    ->setContent($faker->realText())
                    ->setRecipe($recipe);
                $manager->persist($stepLine);
            }
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            UnityFixtures::class,
            IngredientFixtures::class,
        ];
    }
}
