<?php

namespace App\DataFixtures;

use App\Entity\UserType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserTypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $userType = new UserType();
        $userType->setName("Alumno");
        $manager->persist($userType);
        $manager->flush();

        $userType = new UserType();
        $userType->setName("Company");
        $manager->persist($userType);
        $manager->flush();


        $userType = new UserType();
        $userType->setName("Tutor");
        $manager->persist($userType);
        $manager->flush();


        $userType = new UserType();
        $userType->setName("Administrator");
        $manager->persist($userType);
        $manager->flush();
    }
}
