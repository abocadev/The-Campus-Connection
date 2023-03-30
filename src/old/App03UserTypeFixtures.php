<?php

namespace App\old;

use App\Entity\UserType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class App03UserTypeFixtures extends Fixture
{
    private $passwordHasher;

    /**
     * @param $passwordHasher
     */
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $userType = new UserType();
        $userType->setName("Alumno");
        $manager->persist($userType);
        $manager->flush();

        $userType = new UserType();
        $userType->setName("Company");
        $manager->persist($userType);
        $manager->flush();


        $userType = new UserType();
        $userType->setName("Administrator");
        $manager->persist($userType);
        $manager->flush();
    }
}
