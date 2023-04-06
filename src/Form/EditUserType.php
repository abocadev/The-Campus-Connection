<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nombre'
                ]
            ])
            ->add('surname', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Surname'
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Correo electronico'
                ]
            ])
            ->add('phone', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numero de telefono'
                ]
            ])
            ->add('img_url', FileType::class, [
                'required' => false,
                'data_class' => null,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('cvname', FileType::class, [
                'required' => false,
                'data_class' => null,
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Editar perfil',
                'attr' => [
                    'class' => 'form-control btn btn-primary',
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
