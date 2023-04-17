<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserCompany;
use App\Entity\UserType;
use App\Repository\UserRepository;
use App\Repository\UserTypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AllsUsersController extends AbstractController
{

    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/alls-users', name: 'app_alls_users')]
    public function index(): Response
    {
        $alumnType = $this->em->getRepository(UserType::class)->find(1);
        $companyType = $this->em->getRepository(UserType::class)->find(2);
        $adminType = $this->em->getRepository(UserType::class)->find(3);
        $students = $this->em->getRepository(User::class)->getTypesUsers($alumnType);
        $usersCompanies = $this->em->getRepository(User::class)->getTypesUsers($companyType);
        $usersAdmin = $this->em->getRepository(User::class)->getTypesUsers($adminType);
        $usersToCompany = $this->em->getRepository(UserCompany::class)->findAll();

        return $this->render('alls_users/index.html.twig', [
            'usersToCompany' => $usersToCompany,
            'students' => $students,
            'userCompanies' => $usersCompanies,
            'usersAdmin' => $usersAdmin
        ]);
    }

    #[Route('/alls-users/desactivate/{id}', name: 'desactivate_user', methods: 'post')]
    public function desactivate($id)
    {
        $user = $this->em->getRepository(User::class)->find($id);
        $user->setActivate(false);
        $this->em->flush();
        return $this->redirectToRoute('app_alls_users');
    }

    #[Route('/alls-users/activate/{id}', name: 'activate_user', methods: 'post')]
    public function activate($id)
    {
        $user = $this->em->getRepository(User::class)->find($id);
        $user->setActivate(true);
        $this->em->flush();
        return $this->redirectToRoute('app_alls_users');
    }

    #[Route('/alls-users/reboot-connecoins/{id}', name: 'reboot_connecoins', methods: 'post')]
    public function rebootConnecoins($id)
    {
        $user = $this->em->getRepository(User::class)->find($id);
        if($user->getUserTypeID()->getId() == 1){
            $user->setConnecoins(4);
            $this->em->flush();
        }
        return $this->redirectToRoute('app_alls_users');
    }

    #[Route('/alls-users/change-password/{id}', name: 'change_password', methods: 'post')]
    public function changePassword($id, Request $request, UserPasswordHasherInterface $passwordHasher)
    {
        $user = $this->em->getRepository(User::class)->find($id);
        $plainTextPassword = $request->get('password');
        $encryptedPassword = $passwordHasher->hashPassword(
            $user,
            $plainTextPassword
        );
        $user->setPassword($encryptedPassword);
        $this->em->flush();
        return $this->redirectToRoute('app_alls_users');
    }
}
