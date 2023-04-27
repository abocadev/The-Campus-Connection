<?php

namespace App\Controller\Offers;

use App\Entity\Offers;
use App\Entity\UserToOffer;
use App\Entity\UserType;
use App\Form\ApplyOfferType;
use App\Form\SearchOfferType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class OffersController extends AbstractController
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/offers', name: 'app_offers')]
    public function index(Security $security,  Request $request): Response
    {

        $form = $this->createForm(SearchOfferType::class);
        $form->handleRequest($request);

        $query = $this->em->getRepository(Offers::class)->createQueryBuilder('o');

        if($form->isSubmitted() && $form->isValid()){
            if(!empty($form->get('title')->getData())){
                $query->andWhere('o.title LIKE :title')
                    ->setParameter('title', '%'.$form->get('title')->getData().'%');
            }

            if(!empty($form->get('Locality')->getData())){
                $query->andWhere('o.Locality = :locality')
                    ->setParameter('locality', $form->get('Locality')->getData());
            }

            if(!empty($form->get('Modality')->getData())){
                $query->andWhere('o.Modality = :modality')
                    ->setParameter('modality', $form->get('Modality')->getData());
            }

            if(!empty($form->get('Category')->getData())){
                $query->andWhere('o.Category = :category')
                    ->setParameter('category', $form->get('Category')->getData());
            }

            if(!empty($form->get('WeeklyHours')->getData())) {
                $query->andWhere('o.WeeklyHours = :weeklyHours')
                    ->setParameter('weeklyHours', $form->get('WeeklyHours')->getData());
            }
        }

        $user = $security->getUser();
        if(!$user || $user->getUserTypeID()->getId() != 3) $query->andWhere('o.ActivatedByAdmin = true');

        $offers = $query->getQuery()->getResult();

        return $this->render('offers/index.html.twig', [
            'controller_name' => 'OffersController',
            'offers' => $offers,
            'form' => $form
        ]);
    }

    #[Route('/offers/{id}', name: 'app_individual_offer')]
    public function offer($id, Security $security, Request $request): Response
    {
        $user = $security->getUser();
        $lastOffer = $this->em->getRepository(Offers::class)->last();

        if($lastOffer == null || $id > $lastOffer->getId()) {
            return $this->redirectToRoute('app_offers');
        }

        $offer = $this->em->getRepository(Offers::class)->find($id);

        $userToOffer = new UserToOffer();

        $form = $this->createForm(ApplyOfferType::class, $userToOffer);
        $form->handleRequest($request);
        $userToOffers = $this->em->getRepository(UserToOffer::class)->findAll();
        $apuntado = 0;
        if($user != null && $userToOffers != null){
            foreach ($userToOffers as $x){
                if($x->getUser() == $user && $x->getOffer() == $offer){
                    $apuntado = 1;
                }
            }
        }

        if($user != null && $user->getUserTypeID()->getId() == 1 && $form->isSubmitted() && $form->isValid() && $user->getConnecoins() > 0){

            $user->setConnecoins($user->getConnecoins() - 1);

            $userToOffer->setOffer($offer);
            $userToOffer->setUser($user);
            $userToOffer->setDate(new \DateTime());

            $this->em->persist($userToOffer);
            $this->em->flush();

            return $this->redirectToRoute('app_individual_offer', ['id' => $id]);
        }

        return $this->render('offers/individual.html.twig', [
            'offer' => $offer,
            'form' => $form->createView(),
            'apuntado' => $apuntado
        ]);
    }

    #[Route('/activate-offer/{id}', name: 'app_activate_offer', methods: 'post')]
    public function activate($id, Security $security): Response
    {
        $user = $security->getUser();
        if($user->getUserTypeID()->getId() != 3) return $this->redirectToRoute('app_my_offers');
        $offer = $this->em->getRepository(Offers::class)->find($id);
        $offer->setActivatedByAdmin(true);
        $this->em->flush();
        return $this->redirectToRoute('app_offers');
    }

    #[Route('/desactivate-offer/{id}', name: 'app_desactivate_offer', methods: 'post')]
    public function desactivate($id, Security $security): Response
    {
        $user = $security->getUser();
        if($user->getUserTypeID()->getId() != 3) return $this->redirectToRoute('app_my_offers');
        $offer = $this->em->getRepository(Offers::class)->find($id);
        $offer->setActivatedByAdmin(false);
        $this->em->flush();
        return $this->redirectToRoute('app_offers');
    }
}
