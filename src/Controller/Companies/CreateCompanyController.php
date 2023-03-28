<?php

namespace App\Controller\Companies;

use App\Entity\Company;
use App\Entity\User;
use App\Entity\UserCompany;
use App\Form\CompanyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class CreateCompanyController extends AbstractController
{

    private $em;

    public function __construct ( EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/my-company/create', name: 'app__create_company')]
    public function index(Security $security, Request $request): Response
    {
        $user = $security->getUser();
        if($user == null || $user->getUserTypeID()->getId() != 2 || !$user->isActivate()){
            return $this->redirectToRoute('app_permission_denied');
        }
        $userHaveCompany = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());
        if($userHaveCompany != null) {
            echo "El usuario tiene una compañia";
            return $this->redirectToRoute('app_permission_denied');
        }
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->em->persist($company);
            $this->em->flush();
            $this->addUserToCompany($user);
            return $this->redirectToRoute('homepage');
        }
        return $this->render('company/create_company/index.html.twig', [
            'controller_name' => 'CreateCompanyController',
            'form' => $form->createView()
        ]);
    }

    public function addUserToCompany($user){
        $company = $this->em->getRepository(Company::class)->last();
        $company = $this->em->getRepository(Company::class)->find($company);
        $user = $this->em->getRepository(User::class)->find($user->getId());
        $userToCompany = new UserCompany();
        $userToCompany->setUser($user);
        $userToCompany->setCompany($company);
        $this->em->persist($userToCompany);
        $this->em->flush();
    }
}
