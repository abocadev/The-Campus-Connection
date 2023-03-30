<?php

namespace App\DataFixtures;

use App\Entity\Company;
use App\Entity\CompanyType;
use App\Entity\Modality;
use App\Entity\Offers;
use App\Entity\User;
use App\Entity\UserCompany;
use App\Entity\UserType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{private $passwordHasher;

    /**
     * @param $passwordHasher
     */
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Creación de los tipos de compañias
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

        //
        // Creación de los tipos de usuarios
        //

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

        //
        // Creación de los usuarios
        //
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

        $manager->persist($alumn);
        $manager->flush();

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

        $manager->persist($company);
        $manager->flush();

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

        $manager->persist($admin);
        $manager->flush();


        // Creación de compañias
        $companyType = $manager->getRepository(CompanyType::class)->find(3);
        $company = new Company();
        $company->setName("Compañia 1");
        $company->setDescription("Nuestra compañía de tecnología es una empresa innovadora y líder en el mercado, dedicada a proporcionar soluciones tecnológicas de vanguardia para empresas y consumidores en todo el mundo. Nos enfocamos en el desarrollo de software, hardware y servicios de tecnología de la información para satisfacer las necesidades de nuestros clientes.

Nuestro equipo de expertos en tecnología está comprometido con la excelencia y la innovación, y trabaja incansablemente para crear soluciones personalizadas y eficientes para cada uno de nuestros clientes. Nos enorgullece ofrecer productos y servicios de alta calidad que mejoran la eficiencia, la productividad y la rentabilidad de nuestros clientes.

Nos esforzamos por mantenernos a la vanguardia de la tecnología, y estamos constantemente investigando y desarrollando nuevas soluciones para satisfacer las necesidades cambiantes del mercado. Nuestra pasión por la tecnología y nuestro compromiso con la excelencia nos han permitido establecernos como líderes en la industria de la tecnología.

En resumen, nuestra compañía de tecnología es una empresa innovadora y líder en el mercado, dedicada a proporcionar soluciones tecnológicas de vanguardia para empresas y consumidores en todo el mundo. Nos enorgullece ofrecer productos y servicios de alta calidad que mejoran la eficiencia, la productividad y la rentabilidad de nuestros clientes, y estamos comprometidos con la excelencia y la innovación en todo lo que hacemos.");
        $company->setUrlImage("mi logo.jpg");
        $company->setLocation("Av. Josep Tarradellas, 151, Hospitalet de Llobregat");
        $company->setCompanyTypeID($companyType);
        $company->setUrlWeb("www.google.es");

        $manager->persist($company);
        $manager->flush();

        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(2);
        $company = $manager->getRepository(Company::class)->find(1);
        $companyToUser->setUser($user);
        $companyToUser->setCompany($company);

        $manager->persist($companyToUser);
        $manager->flush();


        //
        // Crear modalidades
        //

        $modality = new Modality();
        $modality->setName("Presencial");
        $manager->persist($modality);
        $manager->flush();

        $modality = new Modality();
        $modality->setName("Hibrido");
        $manager->persist($modality);
        $manager->flush();

        $modality = new Modality();
        $modality->setName("En remoto");
        $manager->persist($modality);
        $manager->flush();

        //
        // Crear una oferta
        //

        $company = $manager->getRepository(Company::class)->find(1);
        $modality = $manager->getRepository(Modality::class)->find(1);
        $offer = new Offers();
        $offer->setTitle("Primera oferta");
        $offer->setDescription("¡Estamos buscando un becario altamente motivado y entusiasta para unirse a nuestro equipo! Como becario, tendrás la oportunidad de aprender y desarrollar tus habilidades en un ambiente dinámico y desafiante, y de contribuir al éxito de nuestra empresa.

Buscamos a alguien que esté interesado en el área de [especificar el área de trabajo], y que tenga habilidades excepcionales en [especificar habilidades necesarias para el trabajo]. El candidato ideal debe ser un pensador creativo y estratégico, capaz de trabajar en equipo y de aprender rápidamente.

Ofrecemos una experiencia de aprendizaje única, en la que tendrás la oportunidad de trabajar en proyectos emocionantes y de colaborar con profesionales experimentados en el área de [especificar el área de trabajo]. Además, ofrecemos una compensación justa y un ambiente de trabajo agradable y colaborativo.

Si estás interesado en esta emocionante oportunidad de beca, envíanos tu currículum y una carta de presentación que destaque tus habilidades y experiencia en el área de [especificar el área de trabajo]. ¡Esperamos con interés recibir tu solicitud y ayudarte a desarrollar tus habilidades y experiencia en el área de [especificar el área de trabajo]!");
        $offer->setModality($modality);
        $offer->setCompany($company);
        $offer->setPositions(4);
        $offer->setLocation(null);
        $offer->setActivated(true);
        $offer->setActivatedByAdmin(false);
        $offer->setCreationDate(new \DateTime());
        $offer->setUpdatedDate(new \DateTime());
        $manager->persist($offer);
        $manager->flush();
    }
}
