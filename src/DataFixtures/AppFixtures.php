<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // $user = new User();
        // $user->setEmail("testEmail@gmail.com");
        // $user->setPassword("password");
        // $user->setSex(1);
        // $user->setAge(18);



        $manager->flush();
    }
}
