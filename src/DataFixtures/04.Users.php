<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\UserType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Users extends Fixture
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
        $alumnType = $manager->getRepository(UserType::class)->find(1);
        $companyType = $manager->getRepository(UserType::class)->find(2);
        $adminType = $manager->getRepository(UserType::class)->find(3);

        $alumn = new User();
        $alumn->setName("Alumno1");
        $alumn->setSurname("IFP");
        $alumn->setEmail("alumno1@ifp.es");
        $alumn->setRoles(['ROLE_USER']);
        $alumn->setPassword(
            $this->passwordHasher->hashPassword(
                $alumn,
                "1234"
            )
        );
        $alumn->setUserTypeID($alumnType);
        $alumn->setPhone(987654321);
        $alumn->setCVName("cv.pdf");
        $alumn->setConnecoins(4);
        $alumn->setActivate(true);


        $company = new User();
        $company->setName("Company1");
        $company->setSurname("IFP");
        $company->setEmail("company1@ifp.es");
        $company->setRoles(['ROLE_USER']);
        $company->setPassword(
            $this->passwordHasher->hashPassword(
                $company,
                "1234"
            )
        );
        $company->setUserTypeID($companyType);
        $company->setPhone(987654321);
        $company->setCVName(null);
        $company->setConnecoins(null);
        $company->setActivate(true);


        $admin = new User();
        $admin->setName("Admin1");
        $admin->setSurname("IFP");
        $admin->setEmail("admin1@ifp.es");
        $admin->setRoles(['ROLE_USER']);
        $admin->setPassword(
            $this->passwordHasher->hashPassword(
                $admin,
                "1234"
            )
        );
        $admin->setUserTypeID($adminType);
        $admin->setPhone(987654321);
        $admin->setCVName(null);
        $admin->setConnecoins(null);
        $admin->setActivate(true);


        $manager->persist($alumn);
        $manager->persist($company);
        $manager->persist($admin);
        $manager->flush();

    }
}
