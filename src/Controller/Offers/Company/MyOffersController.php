<?php

namespace App\Controller\Offers\Company;

use App\Entity\Company;
use App\Entity\Offers;
use App\Entity\UserCompany;
use App\Entity\UserToOffer;
use App\Form\OffersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
        if( $company == null){
            return $this->redirectToRoute('app_permission_denied');
        }
        $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());
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
        if($user == null || $user->getUserTypeID()->getId() != 2) {
            return $this->redirectToRoute('homepage');
        }

        $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());
        $offer = $this->em->getRepository(Offers::class)->find($id);
        if($offer == null || $company == null|| $offer->getCompany() !=  $company->getCompany()){
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

    #[Route('/my-offers/{id}/edit', name: 'app_individual_edit_my_offers')]
    public function edit($id, Security $security, Request $request): Response
    {
        $user = $security->getUser();
        if($user == null || $user->getUserTypeID()->getId() != 2) {
            return $this->redirectToRoute('homepage');
        }
        $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());
        $offer = $this->em->getRepository(Offers::class)->find($id);
        if($offer == null || $offer->getCompany() !=  $company->getCompany()){
            return $this->redirectToRoute('app_my_offers');
        }

        $form = $this->createForm(OffersType::class, $offer);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $offer->setUpdatedDate(new \DateTime());
            $this->em->flush();
        }

        return $this->render('offers/edit_offers/index.html.twig', [
           'form' => $form,
            'offer' => $offer
        ]);
    }

    #[Route('/my-offers/{id}/delete', name: 'app_individual_delete_my_offers', methods: 'POST|DELETE')]
    public function delete($id, Security $security, Request $request): Response
    {
        $user = $security->getUser();

        if($user == null || $user->getUserTypeID()->getId() != 2) {
            return $this->redirectToRoute('homepage');
        }
        $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());
        $offer = $this->em->getRepository(Offers::class)->find($id);
        if($offer == null || $offer->getCompany() !=  $company->getCompany()){
            return $this->redirectToRoute('app_my_offers');
        }

        $usersToOffers = $this->em->getRepository(UserToOffer::class)->findAll();
        for($i = 1; $i <= sizeof($usersToOffers); $i++){
            $userToOffer = $this->em->getRepository(UserToOffer::class)->find($i);
            if ($userToOffer->getOffer() != null &&  $userToOffer->getOffer() == $offer){
                $this->em->remove($userToOffer);
                $this->em->flush();
            }
        }

        $this->em->remove($offer);
        $this->em->flush();

        return $this->redirectToRoute('app_my_offers');
    }
}