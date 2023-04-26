<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PoliticaPrivacidadController extends AbstractController
{
    #[Route('/politica-privacidad', name: 'app_politica_privacidad')]
    public function index(): Response
    {
        return $this->render('politica_privacidad/index.html.twig', [
            'controller_name' => 'PoliticaPrivacidadController',
        ]);
    }
}
