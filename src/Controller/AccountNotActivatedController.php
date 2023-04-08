<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountNotActivatedController extends AbstractController
{
    #[Route('/account-not-activated', name: 'app_account_not_activated')]
    public function index(): Response
    {
        return $this->render('account_not_activated/index.html.twig', [
            'controller_name' => 'AccountNotActivatedController',
        ]);
    }
}
