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


        // Creación de compañias
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

        $companyToUser = new UserCompany();
        $user = $manager->getRepository(User::class)->find(3);
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
    }
}
