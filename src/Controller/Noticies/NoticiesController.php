<?php

namespace App\Controller\Noticies;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoticiesController extends AbstractController
{
    #[Route('/noticies/noticies', name: 'app_noticies_noticies')]
    public function index(): Response
    {
        return $this->render('noticies/noticies/index.html.twig', [
            'controller_name' => 'NoticiesController',
        ]);
    }
}
