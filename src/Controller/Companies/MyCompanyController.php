<?php

namespace App\Controller\Companies;

use App\Entity\Company;
use App\Entity\UserCompany;
use App\Form\CompanyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class MyCompanyController extends AbstractController
{

    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/my-company', name: 'app_my_company')]
    public function index(Security $security, Request $request): Response
    {
        $user = $security->getUser();
        if($user == null){
            return $this->redirectToRoute('app_permission_denied');
        }

        $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());

        if($company == null){
            return $this->redirectToRoute('app__create_company');
        }

        $company = $this->em->getRepository(Company::class)->find($company);

        return $this->render('company/my_company/index.html.twig', [
            'controller_name' => 'MyCompanyController',
            'company' => $company
        ]);
    }

    #[Route('/my-company/edit', name: 'app_my_company_edit')]
    public function edit(Security $security, Request $request)
    {
        $user = $security->getUser();
        if($user == null){
            return $this->redirectToRoute('app_permission_denied');
        }

        $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());

        if($company == null){
            return $this->redirectToRoute('app__create_company');
        }

        $company = $this->em->getRepository(Company::class)->find($company);

        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('app_my_company');
        }

        return $this->render('company/my_company/edit.html.twig', [
            'controller_name' => 'MyCompanyController',
            'form' => $form->createView()
        ]);
    }

}