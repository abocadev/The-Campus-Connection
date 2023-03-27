<?php

namespace App\Controller\Offers;

use App\Entity\Offers;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffersController extends AbstractController
{

    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/offers', name: 'app_offers')]
    public function index(): Response
    {
        $offers = $this->em->getRepository(Offers::class)->findAll();
        return $this->render('offers/index.html.twig', [
            'controller_name' => 'OffersController',
            'offers' => $offers
        ]);
    }

    #[Route('/offers/{id}', name: 'app_individual_offer')]
    public function offer($id): Response
    {
        $offers = $this->em->getRepository(Offers::class)->findAll();

        if( sizeof($offers) <= 0) {
            return $this->redirectToRoute('app_offers');
        }

        $lastOffer = $this->em->getRepository(Offers::class)->last()->getId();

        if($id > $lastOffer) {
            return $this->redirectToRoute('app_offers');
        }

        $offer = $this->em->getRepository(Offers::class)->find($id);

        return $this->render('offers/individual.html.twig', [
            'offer' => $offer
        ]);
    }
}
