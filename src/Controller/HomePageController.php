<?php

namespace App\Controller;

use App\Entity\Offers;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use jcobhams\NewsApi\NewsApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/', name: 'homepage')]
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
            "3",
            "1"
        );

        $articles = $articles->articles;

        $sizeOffers = $this->em->getRepository(Offers::class)->findAll();
        $sizeOffers = sizeof($sizeOffers);
        $offers = [];
//        $imgs = [];

        for ($i = 0; $i < $sizeOffers; $i++){
            if($sizeOffers - $i >= 0){
                $offer = $this->em->getRepository(Offers::class)->find($sizeOffers - $i);
                $offers[] = $offer;

            }
        }

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'articles' => $articles,
            'offers' => $offers
        ]);
    }
}
