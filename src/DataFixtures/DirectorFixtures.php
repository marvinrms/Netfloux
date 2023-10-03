<?php

namespace App\DataFixtures;

use App\Entity\Director;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class DirectorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $director = new Director;
        $director->setFirstname('Jeffrey Jacob');
        $director->setLastname('Abrams');
        $manager->persist($director);
        $manager->flush();

        $director = new Director;
        $director->setFirstname('Anthony');
        $director->setLastname('Russo');
        $manager->persist($director);
        $manager->flush();

        $director = new Director;
        $director->setFirstname('Hayao');
        $director->setLastname('Miyazaki');
        $manager->persist($director);
        $manager->flush();

        $director = new Director;
        $director->setFirstname('Peter');
        $director->setLastname('Jackson');
        $manager->persist($director);
        $manager->flush();

        $director = new Director;
        $director->setFirstname('David');
        $director->setLastname('Yates');
        $manager->persist($director);
        $manager->flush();

        $director = new Director;
        $director->setFirstname('Mark');
        $director->setLastname('Mylod');
        $manager->persist($director);
        $manager->flush();

        $director = new Director;
        $director->setFirstname('Matthew Abram');
        $director->setLastname('Groening');
        $manager->persist($director);
        $manager->flush();

        $director = new Director;
        $director->setFirstname('Vince');
        $director->setLastname('Gilligan');
        $manager->persist($director);
        $manager->flush();
    }
}
