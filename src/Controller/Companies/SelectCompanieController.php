<?php

namespace App\Controller\Companies;

use App\Entity\UserCompany;
use App\Form\SelectCompanyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class SelectCompanieController extends AbstractController
{

    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/select-companie', name: 'app_select_companie')]
    public function index(Security $security, Request $request): Response
    {
        $user = $security->getUser();
        if($user == null || $user->getUserTypeID()->getId() != 2){
            return $this->redirectToRoute("app_permission_denied");
        }

        $haveCompany = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());

        if($haveCompany != null){
            return $this->redirectToRoute('app_my_company');
        }

        $selectCompany = new UserCompany();
        $formSelect = $this->createForm(SelectCompanyType::class, $selectCompany);
        $formSelect->handleRequest($request);

        if($formSelect->isSubmitted() && $formSelect->isValid()){
            $selectCompany->setUser($user);
            $this->em->persist($selectCompany);
            $this->em->flush();

            return $this->redirectToRoute('app_my_company');
        }

        return $this->render('company/select_companie/index.html.twig', [
            'controller_name' => 'SelectCompanieController',
            'form' => $formSelect->createView()
        ]);
    }
}
