<?php

namespace App\Controller\Companies;

use App\Entity\Company;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{

    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/companies', name: 'app_companies')]
    public function index(): Response
    {
        $companies = $this->em->getRepository(Company::class)->findAll();
        return $this->render('company/index.html.twig', [
            'controller_name' => 'CompanyController',
            'companies' => $companies
        ]);
    }
}
