<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Faker\Generator;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;;

class ArticleFixrures extends Fixture
{

    private Generator $faker;
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 50; $i++) {

            $user = new User();
            $user->setEmail("testEmail@gmail.com" . $i);
            $user->setRoles(['ROLE_USER']);
            $user->setPassword("password");
            $user->setSex(1);
            $user->setAge(18);

            $article = new Article();
            $article->setName('test Name ' . $i);
            $article->setUserId($user);
            $article->setDescription('test description ' . $i);
            $article->setContent('test content ' . $i);
            $manager->persist($article);
        }

        $manager->flush();
    }
}
