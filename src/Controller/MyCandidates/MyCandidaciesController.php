<?php

namespace App\Controller\MyCandidates;

use App\Entity\UserToOffer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class MyCandidaciesController extends AbstractController
{

    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/my-candidacies', name: 'app_my_candidacies')]
    public function index(Security $security): Response
    {
        $user = $security->getUser();
        if($user == null || $user->getUserTypeId()->getId() != 1){
            return $this->redirectToRoute('homepage');
        }

        $myCandidances = $this->em->getRepository(UserToOffer::class)->getMyCandidances($user->getId());

        return $this->render('my_candidacies/index.html.twig', [
            'controller_name' => 'MyCandidaciesController',
            'candidances' => $myCandidances
        ]);
    }
}
