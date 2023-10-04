<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User;
        $user->setFirstname("admin");
        $user->setLastname("admin");
        $user->setEmail("admin@admin.com");
        $user->setPassword("$2y$13\$BWlEHDofPBzGFYmxQ2lyounw1qwjKq5jNKC0qr5MonoHf48ms3zAW");
        $manager->persist($user);
        $manager->flush();
    }
}
