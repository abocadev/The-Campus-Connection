<?php

namespace App\Controller\Auth;

use App\Entity\User;
use App\Form\UserAlumnType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\String\Slugger\SluggerInterface;

class RegistrationController extends AbstractController
{

    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/registration', name: 'app_registration')]
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher, SluggerInterface $slugger): Response
    {
        $user = new User();
        $form = $this->createForm(UserAlumnType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $plainTextPassword = $form->get('password')->getData();
            $encryptedPassword = $passwordHasher->hashPassword(
                $user,
                $plainTextPassword
            );
            $user->setPassword($encryptedPassword);
            $user->setRoles(['ROLE_USER']);
            $user->setActivate(false);
            if($user->getUserTypeID()->getId() == 1) {
                $user->setConnecoins(4);
                $brochurefile = $form->get('cvname')->getData();
                if($brochurefile){
                    $originalFileName = pathinfo($brochurefile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFileName);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$brochurefile->guessExtension();
                    try{
                        $brochurefile->move(
                            $this->getParameter('cv_files'),
                            $newFilename
                        );
                    }catch (\Exception $e){
                    }
                    $user->setCVName($newFilename);
                }
            }else{
                $user->setConnecoins(null);
                $user->setCVName(null);
            }

            $fileImg = $form->get('img_url')->getData();
            if($fileImg){
                $originalFileName = pathinfo($fileImg->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFileName);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$fileImg->guessExtension();
                try{
                    $fileImg->move(
                        $this->getParameter('img_users'),
                        $newFilename
                    );
                }catch (\Exception $e){
                }
                $user->setImgUrl($newFilename);
            }else{
                $user->setImgUrl(null);
            }

            $this->em->persist($user);
            $this->em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('auth/registration/index.html.twig', [
            'controller_name' => 'RegistrationController',
            'form' => $form->createView()
        ]);
    }


}
