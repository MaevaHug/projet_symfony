<?php

namespace App\DataFixtures;

use App\Entity\Unity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UnityFixtures extends Fixture
{
    public const UNITY_REFERENCE = 'unity';

    public const UNITIES = ["mg", "g", "kg", "ml", "l", "CC", "CS", "pincée", "goutte", "QS", "Quantité Suffisante", "TPT", "Tant Pour Tant"];

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < count(self::UNITIES); $i++) {
            $unity = new Unity();
            $unity->setName(self::UNITIES[$i]);

            $this->addReference(self::UNITY_REFERENCE . '_' . $i, $unity);

            $manager->persist($unity);
        }
        $manager->flush();
    }
}
