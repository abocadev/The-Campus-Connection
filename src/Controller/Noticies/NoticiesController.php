<?php

namespace App\Controller\Noticies;

use jcobhams\NewsApi\NewsApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoticiesController extends AbstractController
{
    #[Route('/noticies', name: 'app_noticies')]
    public function index(): Response
    {
        $date =  strval(date('Y-m-d'));
        $daysAgo = strval(date('Y-m-d', strtotime('-10 days')));
        $newsApi = new NewsApi("cf5c937550d941228890cc63f1cd3d3d");
        $articles = $newsApi->getEverything(
            "Software",
            null,
            null,
            null,
            $daysAgo,
            $date,
            "es",
            "popularity",
            "25",
            "1"
        );

        $articles = $articles->articles;

        return $this->render('noticies/index.html.twig', [
            'controller_name' => 'NoticiesController',
            'noticias' => $articles
        ]);
    }
}
