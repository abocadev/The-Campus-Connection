<?php

namespace App\DataFixtures;

use App\Entity\CompanyType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CompaniesTypes extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $companyType = new CompanyType();
        $companyType->setName("Manufactureras");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Servicios financieros");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Tecnología");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Telecomunicaciones");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Energía renovable");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Ingeniería");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Construcción");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Transporte y logística");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Marketing digital");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Publicidad");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Diseño gráfico");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Consultoría empresarial");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Seguridad privada");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Limpieza y residuos");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Alimentación y bebidas");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Comercio minorista");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Turismo");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Entretenimiento");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Servicios médicos");
        $manager->persist($companyType);
        $manager->flush();

        $companyType = new CompanyType();
        $companyType->setName("Servicios legales");
        $manager->persist($companyType);
        $manager->flush();
    }
}
