<?php

namespace App\Controller\Perfil;

use App\Form\EditUserType;
use App\Form\UserAlumnType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\String\Slugger\SluggerInterface;

class MyPerfilController extends AbstractController
{
    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/my-perfil', name: 'app_my_perfil')]
    public function index(Security $security, SluggerInterface $slugger, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $security->getUser();

        if($user == null) {
            return $this->redirectToRoute('homepage');
        }

        $img = $user->getImgUrl();
        $cv = $user->getCVName();

        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $imgFile = $form->get('img_url')->getData();
            $cvFile = $form->get('cvname')->getData();

            if($imgFile){
                $originalFileName = pathinfo($imgFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFileName);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imgFile->guessExtension();
                $imgFile->move(
                    $this->getParameter('img_users'),
                    $newFilename
                );
                $user->setImgUrl($newFilename);
            }else{
                $user->setImgUrl($img);
            }

            if($cvFile){
                $originalFileName = pathinfo($cvFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFileName);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$cvFile->guessExtension();
                $cvFile->move(
                    $this->getParameter('cv_files'),
                    $newFilename
                );
                $user->setCVName($newFilename);
            }else{
                $user->setCVName($cv);
            }

            $this->em->flush();
            return $this->redirectToRoute('app_my_perfil');
        }

        return $this->render('perfil/my_perfil/index.html.twig', [
            'controller_name' => 'MyPerfilController',
            'form' => $form->createView()
        ]);
    }
}
