<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserAlumnType extends AbstractType
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $array = $this->em->getRepository(UserType::class)->findAll();

        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'width: 100%; height: 100%; font-size: 0.9rem;',
                    'placeholder' => 'Nombre'
                ]
            ])
            ->add('surname', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'width: 100%;height: 100%;font-size: 0.9rem;',
                    'placeholder' => 'Apellido'
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'width: 100%; height: 100%; font-size: 0.9rem;',
                    'placeholder' => 'Correo electronico'
                ]
            ])
            ->add('password', PasswordType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'width: 100%; height: 100%; font-size: 0.9rem',
                    'placeholder' => 'Contraseña'
                ]
            ])
            ->add('phone', TelType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'width: 100%;height: 100%;font-size: 0.9rem',
                    'placeholder' => 'Telefono'
                ]
            ])
            ->add('cvname', FileType::class, [
                'required' => false,
                'data_class' => null,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('img_url', FileType::class, [
                'required' => false,
                'data_class' => null,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('UserTypeID', ChoiceType::class, [
                'choices' => $array,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select pb2',
                    'style' => 'width: 100%; height: 100%; font-size: 0.9rem'
                ],
                'required' => true,
                'data' => 2
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Registrarse',
                'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'display:block; margin:0 auto;'
                ]
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
