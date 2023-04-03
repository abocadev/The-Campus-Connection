<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoticiesController extends AbstractController
{
    #[Route('/noticies', name: 'app_noticies')]
    public function index(): Response
    {
        return $this->render('noticies/index.html.twig', [
            'controller_name' => 'NoticiesController',
        ]);
    }
}
