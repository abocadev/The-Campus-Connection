<?php

namespace App\Controller\Offers\Company;

use App\Entity\Company;
use App\Entity\Offers;
use App\Entity\UserCompany;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class MyOffersController extends AbstractController
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/my-offers', name: 'app_my_offers')]
    public function index(Security $security): Response
    {
        $user = $security->getUser();
        $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());
        if( !$user->isActivate() || $company == null){
            return $this->redirectToRoute('app_permission_denied');
        }
        $company = $company->getCompany();
        $myOffers = $this->em->getRepository(Offers::class)->allOffersCompany($company);

        return $this->render('offers/my_offers/index.html.twig', [
            'controller_name' => 'MyOffersController',
            'my_offers' => $myOffers
        ]);
    }
}
