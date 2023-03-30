<?php

namespace App\Controller\Offers\Company;

use App\Entity\Company;
use App\Entity\Offers;
use App\Entity\UserCompany;
use App\Entity\UserToOffer;
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
        if($user == null || $user->getUserTypeID()->getId() != 2) return $this->redirectToRoute('homepage');
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

    #[Route('/my-offers/{id}', name: 'app_individual_my_offers')]
    public function individual($id, Security $security): Response
    {
        $user = $security->getUser();
        if($user == null || $user->getUserTypeID()->getId() != 2) return $this->redirectToRoute('homepage');
        $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());
        $offer = $this->em->getRepository(Offers::class)->find($id);
        if($offer->getCompany()->getId() != $company->getId()){
            return $this->redirectToRoute('app_my_offers');
        }

        $allCandidates = $this->em->getRepository(UserToOffer::class)->findAll();
        $candidates[] = null;
        if($allCandidates != null){
            foreach ($allCandidates as $x){
                if($x->getOffer()->getId() == $offer->getId()){
                    array_push($candidates, $x);
                }
            }
        }

        return $this->render('offers/my_offers/individual.html.twig', [
            'controller_name' => 'MyOffersController',
            'offer' => $offer,
            'candidates' => $candidates
        ]);
    }
}