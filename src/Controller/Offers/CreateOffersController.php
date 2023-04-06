<?php

namespace App\Controller\Offers;

use App\Entity\Offers;
use App\Entity\UserCompany;
use App\Form\OffersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class CreateOffersController extends AbstractController
{
    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/create-offer', name: 'app_offers_create_offers')]
    public function index(Security $security, Request $request): Response
    {
        $user = $security->getUser();
        if($user == null || $user->getUserTypeID()->getId() != 2) {
            return $this->redirectToRoute('homepage');
        }

        $offer = new Offers();
        $form = $this->createForm(OffersType::class, $offer);
        $form->handleRequest($request);
        $company = "nothing";
        if($form->isSubmitted() && $form->isValid()){
            $company = $this->em->getRepository(UserCompany::class)->haveCompany($user->getId());
            $company = $company->getCompany();
            $offer->setActivated(true);
            $offer->setActivatedByAdmin(false);
            $offer->setCreationDate(new \DateTime());
            $offer->setUpdatedDate(new \DateTime());

            $offer->setCompany($company);

            $this->em->persist($offer);
            $this->em->flush();

            return $this->redirectToRoute('app_offers');
        }

        return $this->render('offers/create_offers/index.html.twig', [
            'controller_name' => 'CreateOffersController',
            'user' => $user,
            'form' => $form->createView()
        ]);
    }
}
