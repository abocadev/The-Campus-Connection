<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PermissionDeniedController extends AbstractController
{
    #[Route('/permission/denied', name: 'app_permission_denied')]
    public function index(): Response
    {
        return $this->render('permission_denied/index.html.twig', [
            'controller_name' => 'PermissionDeniedController',
        ]);
    }
}
