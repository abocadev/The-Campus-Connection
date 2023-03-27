<?php

namespace App\Controller\Offers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class CreateOffersController extends AbstractController
{
    #[Route('/offers/create', name: 'app_offers_create_offers')]
    public function index(Security $security): Response
    {
         $user = $security->getUser()->getUserTypeID()->getId();
         if($user != 2) return $this->redirectToRoute('homepage');

        return $this->render('offers/create_offers/index.html.twig', [
            'controller_name' => 'CreateOffersController',
            'user' => $user
        ]);
    }
}
