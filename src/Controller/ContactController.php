<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact-me', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $email = (new Email())
                ->from('tccproject23@gmail.com')
                ->to($form->get('email')->getData())
                ->replyTo('albert.bocanegra2003@gmail.com')
                ->subject('Mensaje enviado de: '.$form->get('name')->getData())
                ->html('Nombre de la persona: '.$form->get('name')->getData().
                    '<br>Correo de la persona: '.$form->get('email')->getData().
                    '<br>nNumero de telefono: '.$form->get('phone')->getData().
                    '<br>Mensaje:'.$form->get('message')->getData());
           $mailer->send($email);
           $this->addFlash('contact', '¡Se ha enviado correctamente!');
           return $this->redirectToRoute('app_contact');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
