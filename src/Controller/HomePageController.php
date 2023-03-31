<?php

namespace App\Controller;

use jcobhams\NewsApi\NewsApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {

        $today = date('Y-m-d', strtotime('2023-03-10'));
        $date = date('Y-m-d', strtotime('2023-03-01'));
        $newsApi = new NewsApi("cf5c937550d941228890cc63f1cd3d3d");
        $articles = $newsApi->getEverything("Internship", "content", "", "", $date, $today, "es", "relevancy",50, 1);

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'articles' => $articles
        ]);
    }
}
