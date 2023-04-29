<?php

namespace App\DataFixtures;

use App\Entity\CategoriesOffers;
use App\Entity\Company;
use App\Entity\CompanyType;
use App\Entity\LocalitiesOffers;
use App\Entity\Modality;
use App\Entity\Offers;
use App\Entity\User;
use App\Entity\UserCompany;
use App\Entity\UserType;
use App\Entity\WeeklyHoursOffers;
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
        // Creacion de las categorias de informatica:
        //

        $category = new CategoriesOffers();
        $category->setName("Desarrollo de Software");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Administracion de sistemas");
        $manager->persist($category);
        $manager->flush();


        $category = new CategoriesOffers();
        $category->setName("Seguridad informatica");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Analisis de datos");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Diseño web");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Inteligencia Artificial");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Realidad Virtual y Aumentada");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Ciberseguridad");
        $manager->persist($category);
        $manager->flush();


        $category = new CategoriesOffers();
        $category->setName("Blockchain");
        $manager->persist($category);
        $manager->flush();


        $category = new CategoriesOffers();
        $category->setName("Cloud computing");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Desarrollo movil");
        $manager->persist($category);
        $manager->flush();


        $category = new CategoriesOffers();
        $category->setName("Bussiness Intelligence");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Robotica");
        $manager->persist($category);
        $manager->flush();

        $category = new CategoriesOffers();
        $category->setName("Sistemas embebidos");
        $manager->persist($category);
        $manager->flush();

        //
        // Creacion de las localidades de las ofertas de trabajo
        //

        $locaties = new LocalitiesOffers();
        $locaties->setName("Badalona");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Barcelona");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Blanes");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Cerdanyola del Valles");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Castelldefels");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Cornella de Llobregat");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("El Prat de Llobregat");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Figueres");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Girona");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Granollers");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Hospitalet de llobregat");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Igualada");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Lleida");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Manresa");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Mataro");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Mollet del Valles");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Reus");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Rubi");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Sabadell");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Santa Coloma de Gramanet");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Sant Adria de Besos");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Sant Boi de Llobregat");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Sant Cugat del Valles");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Sant Feliu de Llobregat");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Sitges");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Tarragona");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Terrassa");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Vic");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Vilafranca del penedes");
        $manager->persist($locaties);
        $manager->flush();

        $locaties = new LocalitiesOffers();
        $locaties->setName("Vilanova i la Geltru");
        $manager->persist($locaties);
        $manager->flush();

        $hour = new WeeklyHoursOffers();
        $hour->setName("< 12");
        $manager->persist($hour);
        $manager->flush();

        $hour = new WeeklyHoursOffers();
        $hour->setName("12 - 16");
        $manager->persist($hour);
        $manager->flush();

        $hour = new WeeklyHoursOffers();
        $hour->setName("16 - 20");
        $manager->persist($hour);
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

        //
        // CREA ALUMNOS
        //

        // Crea usuario albert que es un alumno
        $alumn = new User();
        $alumn->setName("Albert");
        $alumn->setSurname("Bocanegra Barreiro");
        $alumn->setEmail("albert.bocanegra2003@gmail.com");
        $alumn->setRoles(['ROLE_USER']);
        $alumn->setPassword(
            $this->passwordHasher->hashPassword(
                $alumn,
                "1234"
            )
        );
        $alumn->setUserTypeID($alumnType);
        $alumn->setPhone(608230454);
        $alumn->setCVName("CV-Abocanegra.pdf");
        $alumn->setConnecoins(4);
        $alumn->setActivate(true);
        $alumn->setImgUrl("img_albert_bocanegra_barreiro.png");
        $manager->persist($alumn);
        $manager->flush();

        // Crea usuario miguel angel que es un alumno
        $alumn = new User();
        $alumn->setName("Miguel Angel");
        $alumn->setSurname("Goyanes Rodriguez");
        $alumn->setEmail("mgoyanes92@gmail.com");
        $alumn->setRoles(['ROLE_USER']);
        $alumn->setPassword(
            $this->passwordHasher->hashPassword(
                $alumn,
                "1234"
            )
        );
        $alumn->setUserTypeID($alumnType);
        $alumn->setPhone(689699372);
        $alumn->setCVName("CV-Mgoyanes.pdf");
        $alumn->setConnecoins(4);
        $alumn->setActivate(true);
        $alumn->setImgUrl("img_miguel_angel_goyanes.png");

        $manager->persist($alumn);
        $manager->flush();


        //
        // CREAS USUARIOS DE EMPRESA
        //

        // Crea un usuario de Deloitte
        $company = new User();
        $company->setName("Punit");
        $company->setSurname("Renjen");
        $company->setEmail("prenjen@deloitte.com");
        $company->setRoles(['ROLE_USER']);
        $company->setPassword(
            $this->passwordHasher->hashPassword(
                $company,
                "1234"
            )
        );
        $company->setUserTypeID($companyType);
        $company->setPhone(932804040);
        $company->setCVName(null);
        $company->setConnecoins(null);
        $company->setActivate(true);
        $company->setImgUrl(null);
        $manager->persist($company);
        $manager->flush();

        // Crea un usuario de carmen jarque
        $company = new User();
        $company->setName("Carmen");
        $company->setSurname("Jarque");
        $company->setEmail("cjarque@ifp.es");
        $company->setRoles(['ROLE_USER']);
        $company->setPassword(
            $this->passwordHasher->hashPassword(
                $company,
                "1234"
            )
        );
        $company->setUserTypeID($companyType);
        $company->setPhone(688165854);
        $company->setCVName(null);
        $company->setConnecoins(null);
        $company->setActivate(true);
        $company->setImgUrl(null);
        $manager->persist($company);
        $manager->flush();

        // Crea un usuario de viajes para ti
        $company = new User();
        $company->setName("Luisa");
        $company->setSurname("García");
        $company->setEmail("lgarcia@viajesparati.com");
        $company->setRoles(['ROLE_USER']);
        $company->setPassword(
            $this->passwordHasher->hashPassword(
                $company,
                "1234"
            )
        );
        $company->setUserTypeID($companyType);
        $company->setPhone(911223344);
        $company->setCVName(null);
        $company->setConnecoins(null);
        $company->setActivate(true);
        $company->setImgUrl(null);
        $manager->persist($company);
        $manager->flush();

        // Crea otro usuario para viajes para ti
        $company = new User();
        $company->setName("Maria");
        $company->setSurname("González");
        $company->setEmail("mgonzalez@viajesparati.com");
        $company->setRoles(['ROLE_USER']);
        $company->setPassword(
            $this->passwordHasher->hashPassword(
                $company,
                "1234"
            )
        );
        $company->setUserTypeID($companyType);
        $company->setPhone(617123456);
        $company->setCVName(null);
        $company->setConnecoins(null);
        $company->setActivate(false);
        $company->setImgUrl(null);
        $manager->persist($company);
        $manager->flush();

        // Crea un usuario de Dolby
        $company = new User();
        $company->setName("Juan");
        $company->setSurname("Pérez");
        $company->setEmail("jperez@dolby.com");
        $company->setRoles(['ROLE_USER']);
        $company->setPassword(
            $this->passwordHasher->hashPassword(
                $company,
                "1234"
            )
        );
        $company->setUserTypeID($companyType);
        $company->setPhone(617123456);
        $company->setCVName(null);
        $company->setConnecoins(null);
        $company->setActivate(true);
        $company->setImgUrl(null);
        $manager->persist($company);
        $manager->flush();

        // Crea un usuario de grupo planeta
        $user = new User();
        $user->setName("Ana");
        $user->setSurname("García");
        $user->setEmail("ana.garcia@grupoplaneta.com");
        $user->setRoles(['ROLE_USER']);
        $user->setPassword(
            $this->passwordHasher->hashPassword(
                $user,
                "1234"
            )
        );
        $user->setUserTypeID($companyType);
        $user->setPhone(912345678);
        $user->setCVName(null);
        $user->setConnecoins(null);
        $user->setActivate(false);
        $user->setImgUrl(null);
        $manager->persist($user);
        $manager->flush();

        // Crea un usuario de admira
        $userType = $manager->getRepository(UserType::class)->find(2);
        $company = new User();
        $company->setName("María");
        $company->setSurname("García");
        $company->setEmail("mgarcia@admira.com");
        $company->setRoles(['ROLE_USER']);
        $company->setPassword(
            $this->passwordHasher->hashPassword(
                $company,
                "1234"
            )

        );
        $company->setUserTypeID($userType);
        $company->setPhone(610345678);
        $company->setCVName(null);
        $company->setConnecoins(null);
        $company->setActivate(true);
        $company->setImgUrl(null);
        $manager->persist($company);
        $manager->flush();

        //
        // CREA UN ADMINISTRADOR
        //
        $admin = new User();
        $admin->setName("Practiques");
        $admin->setSurname("Barcelona");
        $admin->setEmail("practicas.barcelona@ifp.es");
        $admin->setRoles(['ROLE_USER']);
        $admin->setPassword(
            $this->passwordHasher->hashPassword(
                $admin,
                "1234"
            )
        );
        $admin->setUserTypeID($adminType);
        $admin->setPhone(938875134);
        $admin->setCVName(null);
        $admin->setConnecoins(null);
        $admin->setActivate(true);
        $admin->setImgUrl(null);

        $manager->persist($admin);
        $manager->flush();


        //
        // CREACION DE EMPRESAS
        //

        // Creación deloitte
        $companyType = $manager->getRepository(CompanyType::class)->find(3);
        $company = new Company();
        $company->setName("Deloitte");
        $company->setDescription("¡Hola! Soy de Deloitte, una empresa global de servicios profesionales que ofrece una amplia gama de servicios a clientes en todo el mundo. Nuestro enfoque se centra en ayudar a nuestros clientes a abordar sus desafíos más complejos y a aprovechar las oportunidades de crecimiento.

Ofrecemos servicios de auditoría, consultoría, asesoramiento financiero, gestión de riesgos, impuestos y servicios relacionados a clientes en todo el mundo. Nuestro objetivo es ayudar a nuestros clientes a tomar decisiones informadas y a lograr sus objetivos empresariales.

En Deloitte, trabajamos en un ambiente dinámico y desafiante, donde se valora la diversidad, la inclusión y el trabajo en equipo. Nuestros líderes son apasionados por el desarrollo de talentos y ofrecen oportunidades de crecimiento y desarrollo profesional a todos los empleados.

Como empresa, Deloitte se enorgullece de su compromiso con la responsabilidad social y la sostenibilidad, y trabajamos para hacer una diferencia positiva en las comunidades donde operamos. Además, nuestra cultura de innovación y colaboración nos permite estar a la vanguardia de las tendencias y tecnologías emergentes, lo que nos permite ofrecer soluciones innovadoras y de vanguardia a nuestros clientes.

En resumen, en Deloitte estamos comprometidos con ayudar a nuestros clientes a alcanzar sus objetivos empresariales y a hacer una diferencia positiva en las comunidades donde operamos. Nos enorgullece nuestra cultura de trabajo en equipo, innovación y excelencia en el servicio al cliente.");
        $company->setUrlImage("deloitte-logo-6429d19d5b71e.jpg");
        $company->setLocation("Avinguda Diagonal, 654, 08034 Barcelona");
        $company->setCompanyTypeID($companyType);
        $company->setUrlWeb("https://www2.deloitte.com/");
        $manager->persist($company);
        $manager->flush();

        // Creacion iFP
        $companyType = $manager->getRepository(CompanyType::class)->find(9);
        $company = new Company();
        $company->setName("iFP");
        $company->setDescription("iFP (Innovación en Formación Profesional) es una institución educativa especializada en la formación profesional de alta calidad y en la enseñanza de habilidades prácticas y técnicas que se adaptan a las demandas del mercado laboral actual.

iFP se enfoca en ofrecer programas educativos innovadores y actualizados que preparan a sus estudiantes para el mundo laboral en diversos sectores, como negocios, tecnología, diseño, comunicación, turismo, entre otros.

Además, iFP cuenta con un equipo docente altamente calificado, que combina una amplia experiencia profesional con una sólida formación académica, lo que garantiza una educación de alta calidad.

La institución también se preocupa por proporcionar a sus estudiantes una experiencia educativa enriquecedora y práctica, ofreciendo prácticas laborales en empresas y organizaciones líderes en el mercado, así como actividades y eventos que fomentan el desarrollo personal y profesional.

En resumen, iFP es una institución educativa de vanguardia que ofrece una formación profesional de calidad, basada en la innovación y la práctica, para ayudar a sus estudiantes a alcanzar sus objetivos profesionales y personales.");
        $company->setUrlImage("images-6431b2c46afc4.png");
        $company->setLocation("Av. de Josep Tarradellas i Joan, 171, L'Hospitalet de Llobregat");
        $company->setCompanyTypeID($companyType);
        $company->setUrlWeb("https://www.ifp.es/");
        $manager->persist($company);
        $manager->flush();

        // creacion de dolby
        $companyType = $manager->getRepository(CompanyType::class)->find(9);
        $company = new Company();
        $company->setName("Dolby");
        $company->setDescription("Dolby Laboratories es una empresa especializada en tecnología de audio y video. Desde su fundación en 1965, Dolby ha sido pionera en el desarrollo de tecnologías de audio y video de alta calidad que mejoran la experiencia del usuario en el entretenimiento y la comunicación.

Dolby se enfoca en ofrecer soluciones innovadoras en audio y video para una amplia gama de industrias, desde el cine hasta la música, la televisión, los videojuegos y la realidad virtual. La empresa cuenta con un equipo de expertos altamente calificados y una sólida red de asociados y colaboradores en todo el mundo.

En resumen, Dolby es una empresa líder en tecnología de audio y video que se enfoca en mejorar la experiencia del usuario en el entretenimiento y la comunicación a través de soluciones innovadoras y de alta calidad.");
        $company->setUrlImage("dolby-logo.png");
        $company->setLocation("San Francisco, California, EE. UU.");
        $company->setCompanyTypeID($companyType);
        $company->setUrlWeb("https://www.dolby.com/");
        $manager->persist($company);
        $manager->flush();

        // creacion de viajes para ti
        $companyType = $manager->getRepository(CompanyType::class)->find(12);
        $company = new Company();
        $company->setName("Viajes Para Ti S.L.U");
        $company->setDescription("¡Hola! Somos Viajes Para Ti S.L.U, una agencia de viajes on-line, propietaria de las marcas Esquiades.com, BuscoUnChollo.com y Amimir.com.
        
¿Sabías que Esquiades.com es la marca líder en la venta de packs de esquí en España y que BuscoUnChollo.com lo es también en la venta flash de ofertas de viajes? Sumado a ellos, nustro buscador de hoteles Amimir.com hace de Viajes Para Ti una de las empresas referentes en el sector travel.
Además de estas marcas, recientemente hemos lanzado un nuevo proyecto internacional. Jump2spain.com, una web enfocada al cliente internacional, con ofertas flash de viajes por España.

Actualmente, nuestro equipo está formado por 110 empleados que trabajan a diario en diferentes departamentos distribuidos en nuestras oficinas de Reus.  Viajes Para Ti S.L.U se caracteriza por la pasión por los viajes y el turismo, y eso, sumado a nuestra amplia experiencia en el sector, nos hace esforzarnos todavía más en conseguir publicar las mejores ofertas de viajes y paquetes de esquí para nuestros clientes.
Si compartes nuestra pasión por lo viajes y eres una persona con ganas de aprender y crecer, paciente y que valora un proyecto estable y de crecimiento ¡este es tu sitio! ¿Quieres unirte a nuestro equipo? 
Escríbenos a personal@viajesparati.com

 ¡Te esperamos!");
        $company->setUrlImage("viajes-para-ti-logo.png");
        $company->setLocation("Reus, TARRAGONA");
        $company->setCompanyTypeID($companyType);
        $company->setUrlWeb("https://www.viajesparati.com/");
        $manager->persist($company);
        $manager->flush();

        // creacion de grupo planeta
        $companyType = $manager->getRepository(CompanyType::class)->find(9);
        $company = new Company();
        $company->setName("Grupo Planeta");
        $company->setDescription("Grupo Planeta es una empresa editorial española fundada en 1949, que se ha convertido en una de las editoriales líderes en España y en el mundo. La empresa cuenta con más de 100 sellos editoriales y ofrece una amplia variedad de productos culturales y educativos, como libros, revistas, periódicos y contenido digital.

Grupo Planeta se enfoca en ofrecer contenidos de calidad que informan, entretienen y educan a sus lectores y usuarios. La empresa también cuenta con una división de educación que ofrece soluciones educativas innovadoras y adaptadas a las necesidades del mercado.

Además, Grupo Planeta ha expandido sus actividades a otras áreas, como la producción de espectáculos y eventos, la gestión de infraestructuras culturales y la inversión en startups y empresas emergentes.

En resumen, Grupo Planeta es una empresa editorial líder en el mundo, que ofrece una amplia variedad de productos culturales y educativos de calidad, y que se ha expandido a otras áreas de actividad para ofrecer soluciones innovadoras a sus clientes y usuarios.");
        $company->setUrlImage("grupo-planeta-logo.png");
        $company->setLocation("Barcelona, España");
        $company->setCompanyTypeID($companyType);
        $company->setUrlWeb("https://www.planeta.es/");
        $manager->persist($company);
        $manager->flush();


        // creacion admira
        $companyType = $manager->getRepository(CompanyType::class)->find(3);
        $company = new Company();
        $company->setName("Admira");
        $company->setDescription("We connect Things, with special focus on People.

Admira connects the elements from the offline world to the online world, increasing its digital possibilities. Screens, opis, marquees, or any element from the city can become a platform to the electronic and mobile commerce.

+40.000 screens broadcasting
+250 satisfied clients
+50 connected countries
+25 international awards");
        $company->setUrlImage("admira-logo.png");
        $company->setLocation("Barcelona, España");
        $company->setCompanyTypeID($companyType);
        $company->setUrlWeb("https://www.admira.com/");
        $manager->persist($company);
        $manager->flush();

        // Deloitte con empleado
        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(3);
        $company = $manager->getRepository(Company::class)->find(1);
        $companyToUser->setUser($user);
        $companyToUser->setCompany($company);

        $manager->persist($companyToUser);
        $manager->flush();

        // iFP con empleado
        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(4);
        $company = $manager->getRepository(Company::class)->find(2);
        $companyToUser->setUser($user);
        $companyToUser->setCompany($company);
        $manager->persist($companyToUser);
        $manager->flush();

        // Viajes para ti con empleado
        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(5);
        $company = $manager->getRepository(Company::class)->find(4);
        $companyToUser->setUser($user);
        $companyToUser->setCompany($company);
        $manager->persist($companyToUser);
        $manager->flush();

        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(6);
        $company = $manager->getRepository(Company::class)->find(4);
        $companyToUser->setUser($user);
        $companyToUser->setCompany($company);
        $manager->persist($companyToUser);
        $manager->flush();

        // Dolby con empleado
        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(7);
        $company = $manager->getRepository(Company::class)->find(3);
        $companyToUser->setUser($user);
        $companyToUser->setCompany($company);
        $manager->persist($companyToUser);
        $manager->flush();

        // Grupo planeta con empleado
        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(8);
        $company = $manager->getRepository(Company::class)->find(5);
        $companyToUser->setUser($user);
        $companyToUser->setCompany($company);
        $manager->persist($companyToUser);
        $manager->flush();

        // Admira con empleado
        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(9);
        $company = $manager->getRepository(Company::class)->find(6);
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
        // Crear una oferta de Deloitte
        //
        $company = $manager->getRepository(Company::class)->find(1);
        $modality = $manager->getRepository(Modality::class)->find(2);
        $location = $manager->getRepository(LocalitiesOffers::class)->find(22);
        $category = $manager->getRepository(CategoriesOffers::class)->find(1);
        $hours = $manager->getRepository(WeeklyHoursOffers::class)->find(2);
        $offer = new Offers();
        $offer->setTitle("Consultor FrontEnd");
        $offer->setDescription("Buscamos gente con interés por la construcción de proyectos de ámbito digital, mayoritariamente orientado al desarrollo de frontales para clientes, donde la exigencia en la experiencia de usuario es uno de los factores clave de construcción.

Capacidad de análisis, desarrollo e implementación. Documentación y pruebas unitarias e integración con resto de módulos.

Requisitos:

    - Interés en desarrollarse en proyectos de canales digitales en equipos multi-disciplinares con roles de gestión, experiencia de usuario, negocio, products owner, etc…
    - Valorable conocimientos en Angular o React.
    - Valorable conocimientos en el desarrollo de aplicaciones móviles multiplataforma utilizando Ionic Framework, Capacitor y Cordova
    - Valorable conocimientos en el uso de librerías y herramientas front-end como NPM, Typescript, SCSS, RxJS
    - Valorable conocimientos en el uso de GIT o BitBucket como software de control de versiones.
    - Valorable conocimientos de los estándares HTML, CSS y EcmaScript.
    - Valorable conocimientos en el consumo de API Rest y haber participado en el diseño y definición de APIs.
    - Valorable conocimientos de desarrollo en entornos serverless sobre AWS, Azure o GCP.
    - Valorable conocimiento en la integración de soluciones del ecosistema digital, analítica, trazabilidad, a/b Testing, etc…
    - Valorable conocimiento sobre herramientas satélites a los proyectos cómo AndroidStudio, SQL Developer, PostgresSQL, Oracle, PgAdmin, OpenLdap u otras similares.

Ofrecemos:

Incorporación en Firma líder de servicios profesionales integrados
Desarrollo personal y profesional en un entorno exigente y multidisciplinar
Formación sólida continuada en habilidades y conocimientos técnicos
Excelente ambiente de trabajo
Trabajo con equipos internacionales
Integración en un equipo de trabajo cuyos valores comprenden la integridad, diversidad, compromiso, excelencia y generosidad
Contamos con un plan de beneficios sociales muy interesantes. Con nuestro Programa Dwellness, queremos que te relajes y desconectes con nuestras sesiones de mindfulness y fisioterapia, además contamos con servicio médico, enfermería, seguro médico privado y descuentos en gimnasios afiliados, viajes y restaurantes, entre otras muchas cosas…
Y además, te incorporarías en una de las empresas mejor valoradas en Forbes 2019, Actualidad Económica y Universum

¡No lo dudes, ven a Deloitte Digital!");
        $offer->setPositions(4);
        $offer->setActivated(true);
        $offer->setActivatedByAdmin(true);
        $offer->setCreationDate(new \DateTime());
        $offer->setUpdatedDate(new \DateTime());
        $offer->setCompany($company);
        $offer->setModality($modality);
        $offer->setCategory($category);
        $offer->setLocality($location);
        $offer->setWeeklyHours($hours);
        $manager->persist($offer);
        $manager->flush();

        $company = $manager->getRepository(Company::class)->find(1);
        $modality = $manager->getRepository(Modality::class)->find(2);
        $location = $manager->getRepository(LocalitiesOffers::class)->find(22);
        $category = $manager->getRepository(CategoriesOffers::class)->find(1);
        $hours = $manager->getRepository(WeeklyHoursOffers::class)->find(2);
        $offer = new Offers();
        $offer->setTitle("Junior Software Developer");
        $offer->setDescription("Who we are looking for:


Required professional background and skills:

University/college degree (preferred Computer Science)
Experience in software development in C#, .NET
Experience in working with relational databases (MS SQL)
Strong command of English language (both verbal and written)

Non-technical competencies:

Team player attitude and excellent interpersonal skills
Proactive, enthusiastic, self-driven personality, willingness to learn new technologies
Strong analytical and problem solving skills
Professional attitude and appearance

Advantages:

Experience with Agile development methodology
Experience with TFS, Visual Studio,
Knowledge of Data Visualization tools (preferred Power BI)
Experience in test automation, test-driven development, continuous integration and deployment
Ability to design basic user interfaces

Your future role:


Main tasks and responsibilities are:

Development of custom applications in C# (e.g. workflow automation, Excel Add-on)
Development of custom databases and data processing tools (MS SQL, SSIS, SSRS)
Work as an active SCRUM team member with high autonomy, as a cross-functional developer who takes ownership for the solution delivered
Proactively help in finding technical solutions to improve the efficiency of colleagues or to address the pains of our clients with innovative software products

What we offer:

The chance to be part of a newly forming team, where personal development and growth are encouraged. You will have the freedom to try new ideas and contribute to the realization of our ambitious technology strategy.
Training and coaching in SCRUM development
Support the acquisition of Microsoft certifications
Attractive and competitive salary including a wide range of benefits

About Deloitte:


Deloitte is a variety of people, experience, industries and services we deliver in 150 countries of the world. It is an intellectual challenge, a good starting point for your career, and an excellent opportunity for continuous development and gaining valuable life experiences. What you only must do is to take the first step – press the apply button and send us your CV, go through all the stages of the recruitment process and sign a contract with us. Deloitte is simply your best choice.

");
        $offer->setPositions(4);
        $offer->setActivated(true);
        $offer->setActivatedByAdmin(true);
        $offer->setCreationDate(new \DateTime());
        $offer->setUpdatedDate(new \DateTime());
        $offer->setCompany($company);
        $offer->setModality($modality);
        $offer->setCategory($category);
        $offer->setLocality($location);
        $offer->setWeeklyHours($hours);
        $manager->persist($offer);
        $manager->flush();

        //
        // Crear dos ofertas de Viajes para ti
        //
        $company = $manager->getRepository(Company::class)->find(4);
        $modality = $manager->getRepository(Modality::class)->find(1);
        $location = $manager->getRepository(LocalitiesOffers::class)->find(19);
        $category = $manager->getRepository(CategoriesOffers::class)->find(5);
        $hours = $manager->getRepository(WeeklyHoursOffers::class)->find(3);
        $offer = new Offers();
        $offer->setTitle("Frontend Developer");
        $offer->setDescription("¡Hola! Somos Viajes Para Ti S.L.U, una agencia de viajes especializada en la venta on-line, propietaria de las marcas Esquiades.com, BuscoUnChollo.com y Amimir.com. Nuestro equipo no ha dejado de crecer y es por eso que buscamos nuevos perfiles que se quieran unir a nosotros. Si estás leyendo esto es porque ¡esta puede ser tu oportunidad! ¿Te interesa?

¿Cuáles son los requisitos?

Titulados en Ingeniería Informática, Grado en Ingeniería Informática, Grado Multimedia, Ciclo Superior especializado en Desarrollo de Aplicaciones Web (DAW) o Ciclo Superior especializado en Aplicaciones multiplataforma (DAM).
Conocimientos de PHP, Javascript y HTML
Hojas de estilos CSS + preprocesadores (Less o Sass)
Control de versiones GIT
Persona detallista, con tacto, criterio e iniciativa a la hora de desarrollar una nueva funcionalidad.
Persona comunicativa, que sepa trabajar y colaborar de forma activa con el equipo.
Se valorarán conocimientos en:

Herramientas como Figma o cualquier herramienta de prototipado
Manejo de gestores de paquetes (NPM, Webpack)
Librerías de templates como Twig o Blade.
Webcomponents
Conceptos de SEO y Google Ads
¿Cuáles son las funciones a desempeñar?

Desarrollo de funcionalidades front-end en nuestras diferentes marcas comerciales.
Diseño de arquitectura, implementación y pruebas.
Trabajar usando herramientas como JIRA, GitLab, Slack y Sentry.
Comunicación directa con el equipo de diseño
Trabajar usando Metodologías Ágiles (SCRUM)
Debatir con los compañeros para tomar decisiones a la hora de realizar las tareas
Incorporación a la empresa

Formación inicial para conocer las distintas aplicaciones y servicios con los que trabajamos, así como las tecnologías, herramientas y metodologías que utilizarás en tu día a día.
Incorporación inmediata a un equipo Scrum. Allí tendrás un tutor o tutora que se encargará de guiarte y acompañarte en tus primeras semanas en la empresa.
Realización de tareas reales utilizando métodos como el pair programming, para que puedas empezar a familiarizarte con nuestros proyectos con el apoyo de un compañero o una compañera de equipo.
Reuniones quincenales y/o mensuales para conocer tus necesidades y asegurarnos de que estamos haciendo todo lo posible para que tu incorporación al departamento sea lo más cómoda posible.
Participación en las reuniones Scrum, ¡serás uno más del equipo desde el primer día y queremos escucharte!
En cuestión de meses, tendrás suficientes conocimientos sobre la lógica de negocio de la empresa como para realizar tareas complejas, proponer mejoras estructurales para los diferentes proyectos e incluso dar formaciones a nivel interno.
¿Qué harás?

Formar parte de un equipo Scrum de 6 a 8 personas que realiza sprints de dos semanas.
Asistir y participar en las diferentes reuniones Scrum: daily, valoración de tareas, sprint planning y retrospectiva.
Participar activamente en la toma de decisiones técnicas previa a la valoración, planificación y realización de las tareas para encontrar la solución más óptima y adecuada.
Implementar nuevas funcionalidades, así como realizar mantenimiento de los desarrollos nuevos y actuales, y corregir bugs en producción.
Code review de las pull requests de tus compañeros de equipo e incluso de departamento.
Comunicarse con el resto de departamentos para comprender mejor sus necesidades y aprender cómo trabajan para poder ofrecerles soluciones técnicas adecuadas, óptimas y de calidad.
¿Qué ofrecemos?

Incorporación inmediata, con 6 meses como período de prueba y proyección a posibilidad de contrato indefinido.
Servicio de catering subvencionado por la empresa
Posibilidad de formar parte de un proyecto consolidado y actualmente expandiéndose a nivel internacional.
Inmejorable ambiente laboral.
Teletrabajo de forma puntual para cuando lo necesites
Formación especializada a cargo de la empresa.
Posibilidad de promoción rápida dentro de la empresa.
Horario a jornada completa.
3 salidas de equipo (Esquí, playa… y cena de navidad).
Flexibilidad en la elección de días de vacaciones.
Precio reducido y/o gratuidades para viajes personales.
Fruta los miércoles
Si compartes nuestra pasión y eres una persona dinámica, creativa y con ganas de aprender, ¡éste es tu sitio!

¿Quieres unirte a nuestro equipo?");
        $offer->setPositions(1);
        $offer->setActivated(true);
        $offer->setActivatedByAdmin(true);
        $offer->setCreationDate(new \DateTime());
        $offer->setUpdatedDate(new \DateTime());
        $offer->setCompany($company);
        $offer->setModality($modality);
        $offer->setCategory($category);
        $offer->setLocality($location);
        $offer->setWeeklyHours($hours);
        $manager->persist($offer);
        $manager->flush();

        // segunda oferta
        $offer = new Offers();
        $offer->setTitle("Backend Developer");
        $offer->setDescription("¡Hola! Somos Viajes Para Ti S.L.U, una agencia de viajes especializada en la venta on-line, propietaria de las marcas Esquiades.com, BuscoUnChollo.com y Amimir.com. Nuestro equipo no ha dejado de crecer y es por eso que buscamos nuevos perfiles que se quieran unir a nosotros. Si estás leyendo esto es porque ¡esta puede ser tu oportunidad! ¿Te interesa?

        ¿Cuáles son los requisitos?

        Titulados en Ingeniería Informática, Grado en Ingeniería Informática, Grado Multimedia (DAM), Ciclo Superior especializado en Desarrollo de Aplicaciones Web (DAW)

Conocimientos en PHP o Kotlin
Experiencia con base de datos relacionales. (MySQL)
Control de versiones GIT
Persona comunicativa, que sepa trabajar en equipo
Persona resolutiva y que le guste involucrarse con negocio.
    Se valorarán conocimientos en:

Experiencia en proyectos realizados con Symfony o Ktor.
    Utilización de gestor de dependencias (Composer, Gradle)
Experiencia en trabajar con microservicios y APIs.
    Bases de datos no relacionales (DynamoDB, Redis)
Conocimientos en AWS.
    ¿Cuáles son las funciones a desempeñar?

        Desarrollar software de calidad para nuestras marcas comerciales.
    Diseño de arquitectura, implementación y pruebas.
    Trabajar con metodologías ágiles como Scrum.
    Trabajar usando herramientas como JIRA, GitLab, Slack y Sentry.
    Colaborar de forma activa en la mejora continua del equipo y el departamento.
    Incorporación a la empresa

Formación inicial para conocer las distintas aplicaciones y servicios con los que trabajamos, así como las tecnologías, herramientas y metodologías que utilizarás en tu día a día.
    Incorporación inmediata a un equipo Scrum. Allí tendrás un tutor o tutora que se encargará de guiarte y acompañarte en tus primeras semanas en la empresa.
    Realización de tareas reales utilizando métodos como el pair programming, para que puedas empezar a familiarizarte con nuestros proyectos con el apoyo de un compañero o una compañera de equipo.
    Reuniones quincenales y/o mensuales para conocer tus necesidades y asegurarnos de que estamos haciendo todo lo posible para que tu incorporación al departamento sea lo más cómoda posible.
    Participación en las reuniones Scrum, ¡serás uno más del equipo desde el primer día y queremos escucharte!
    En cuestión de meses, tendrás suficientes conocimientos sobre la lógica de negocio de la empresa como para realizar tareas complejas, proponer mejoras estructurales para los diferentes proyectos e incluso dar formaciones a nivel interno.
    ¿Qué harás?

        Formar parte de un equipo Scrum de 6 a 8 personas que realiza sprints de dos semanas.
    Asistir y participar en las diferentes reuniones Scrum: daily, valoración de tareas, sprint planning y retrospectiva.
    Participar activamente en la toma de decisiones técnicas previa a la valoración, planificación y realización de las tareas para encontrar la solución más óptima y adecuada.
    Implementar nuevas funcionalidades, así como realizar mantenimiento de los desarrollos nuevos y actuales, y corregir bugs en producción.
    Code review de las pull requests de tus compañeros de equipo e incluso de departamento.
    Comunicarte con el resto de departamentos para comprender mejor sus necesidades y aprender cómo trabajan para poder ofrecerles soluciones técnicas adecuadas, óptimas y de calidad.
    ¿Qué ofrecemos?

        Incorporación inmediata, con 6 meses como período de prueba y proyección a posibilidad de contrato indefinido.
    Servicio de catering subvencionado por la empresa
Posibilidad de formar parte de un proyecto consolidado y actualmente expandiéndose a nivel internacional.
    Inmejorable ambiente laboral.
    Teletrabajo de forma puntual para cuando lo necesites
Formación especializada a cargo de la empresa.
    Posibilidad de promoción rápida dentro de la empresa.
    Horario a jornada completa.
    3 salidas de equipo (Esquí, playa… y cena de navidad).
Flexibilidad en la elección de días de vacaciones.
    Precio reducido y/o gratuidades para viajes personales.
    Fruta los miércoles
Si compartes nuestra pasión y eres una persona dinámica, creativa y con ganas de aprender, ¡éste es tu sitio!

    ¿Quieres unirte a nuestro equipo?");
        $offer->setPositions(5);
        $offer->setActivated(true);
        $offer->setActivatedByAdmin(false);
        $offer->setCreationDate(new \DateTime());
        $offer->setUpdatedDate(new \DateTime());
        $offer->setCompany($company);
        $offer->setModality($modality);
        $offer->setCategory($category);
        $offer->setLocality($location);
        $offer->setWeeklyHours($hours);
        $manager->persist($offer);
        $manager->flush();

        //
        // Crear una oferta grupo planeta
        //

        $company = $manager->getRepository(Company::class)->find(5);
        $modality = $manager->getRepository(Modality::class)->find(2);
        $location = $manager->getRepository(LocalitiesOffers::class)->find(15);
        $category = $manager->getRepository(CategoriesOffers::class)->find(2);
        $hours = $manager->getRepository(WeeklyHoursOffers::class)->find(1);
        $offer = new Offers();
        $offer->setTitle("Tecnico informatico");
        $offer->setDescription("Grupo Planeta, una de las mayores editoriales del mundo, busca un estudiante de informática apasionado por la tecnología para unirse a nuestro equipo de tecnología. Como Técnico Informático, tendrás la oportunidad de trabajar en una variedad de proyectos emocionantes en un entorno dinámico y creativo. Además, tendrás la oportunidad de trabajar con algunos de los mejores profesionales en el campo de la informática y la tecnología.

Responsabilidades:

Brindar soporte técnico a los usuarios de la empresa en cuanto a problemas de hardware y software.
Administrar y mantener los sistemas informáticos de la empresa, incluyendo servidores, redes y dispositivos de almacenamiento.
Realizar diagnósticos y solucionar problemas técnicos en sistemas informáticos, hardware, software y redes.
Ayudar en la implementación y mantenimiento de sistemas de seguridad informática y en la prevención de ataques cibernéticos.
Asistir en el desarrollo y mantenimiento de aplicaciones informáticas y bases de datos.
Requisitos:

Estudiante de informática o carrera afín.
Conocimientos sólidos en sistemas operativos (Windows, Linux), redes informáticas, bases de datos y lenguajes de programación (Python, Java).
Capacidad para trabajar en equipo y excelente comunicación interpersonal.
Actitud proactiva, capacidad de aprendizaje y adaptación rápida a nuevos entornos.
Ofrecemos:

Una oportunidad única para trabajar en una de las mayores empresas editoriales del mundo y aprender de los mejores profesionales del sector.
Una experiencia enriquecedora en un entorno dinámico y creativo.
La posibilidad de obtener experiencia en áreas clave de la tecnología de la información, como la seguridad informática, la administración de redes y sistemas y la programación.
Una compensación económica acorde al mercado.
Si eres un apasionado de la tecnología y la informática y te gustaría trabajar en un entorno dinámico y en constante evolución, ¡esta es tu oportunidad! ¡Únete a Grupo Planeta y descubre un mundo de posibilidades!");
        $offer->setPositions(1);
        $offer->setActivated(true);
        $offer->setActivatedByAdmin(true);
        $offer->setCreationDate(new \DateTime());
        $offer->setUpdatedDate(new \DateTime());
        $offer->setCompany($company);
        $offer->setModality($modality);
        $offer->setCategory($category);
        $offer->setLocality($location);
        $offer->setWeeklyHours($hours);
        $manager->persist($offer);
        $manager->flush();

        //
        // Crear una oferta grupo planeta
        //

        $company = $manager->getRepository(Company::class)->find(6);
        $modality = $manager->getRepository(Modality::class)->find(3);
        $location = $manager->getRepository(LocalitiesOffers::class)->find(12);
        $category = $manager->getRepository(CategoriesOffers::class)->find(7);
        $hours = $manager->getRepository(WeeklyHoursOffers::class)->find(3);
        $offer = new Offers();
        $offer->setTitle("IT Project Manager");
        $offer->setDescription("The ideal candidate will be responsible for planning, coordinating, and implementing projects within the decided-upon budget, timeline, and scope. They will also effectively monitor and present project updates to relevant stakeholders, clients, or project team members.


Strong knowledge of AV / IT needed.

Job position based on Barcelona (Vila de Gràcia)


Responsibilities

Set project timeline
Monitor project deliverables
Update relevant stakeholders or team members on the project progress
Analyze information and components of the project in order to plan the best-suited development of the project.
Prime all Project Management activities with clients, including day-to-day communication on quotes, advising the client on best options and solutions for their needs. Keep the client informed on project status.

Qualifications

Bachelor's Degree or equivalent experience
Strong business acumen in project planning and management
Strong verbal, written, and organizational skills
English / Spanish
Based on Barcelona office.");
        $offer->setPositions(5);
        $offer->setActivated(true);
        $offer->setActivatedByAdmin(true);
        $offer->setCreationDate(new \DateTime());
        $offer->setUpdatedDate(new \DateTime());
        $offer->setCompany($company);
        $offer->setModality($modality);
        $offer->setCategory($category);
        $offer->setLocality($location);
        $offer->setWeeklyHours($hours);
        $manager->persist($offer);
        $manager->flush();
    }
}
