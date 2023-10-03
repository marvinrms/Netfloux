<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorie = new Categorie;
        $categorie->setType('Aventure');
        $manager->persist($categorie);
        $manager->flush();

        $categorie = new Categorie;
        $categorie->setType('Comedie');
        $manager->persist($categorie);
        $manager->flush();
        
        $categorie = new Categorie;
        $categorie->setType('Drame');
        $manager->persist($categorie);
        $manager->flush();
        
        $categorie = new Categorie;
        $categorie->setType('Policier');
        $manager->persist($categorie);
        $manager->flush();
        
        $categorie = new Categorie;
        $categorie->setType('Science Fiction');
        $manager->persist($categorie);
        $manager->flush();

        $categorie = new Categorie;
        $categorie->setType('Jeunesse');
        $manager->persist($categorie);
        $manager->flush();
    }
}
