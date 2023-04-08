<?php

namespace App\Form;

use App\Entity\Company;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyType extends AbstractType
{

    private $em;

    /**
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $array = $this->em->getRepository(\App\Entity\CompanyType::class)->findAll();
        $builder
            ->add('name', TextType::class, [
                'required' => 'true',

                'attr' => [
                    'class' => 'form-control',
                    'style' => 'margin-top: 10px; color: #ffffff; background-color: #6e6e6e',
                    'placeholder'=> 'Nombre de la empresa',
                ]
            ])
            ->add('description', TextareaType::class, [
                'required' => 'true',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'margin-top: 10px; background: #6e6e6e; color: white; min-height: 200px'
                ]
            ])
            ->add('url_image', FileType::class, [
                'required' => 'true',
                'data_class' => null,
                'attr' => [
                    'accept' => '.png, .jpg, .jpeg',
                    'class' => 'form-control',
                    'style' => 'margin-top: 10px; color: white; background-color: #6e6e6e',
                ]
            ])
            ->add('location', TextType::class, [
                'required' => 'true',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'margin-top: 10px; color: white; background-color: #6e6e6e'
                ]
            ])
            ->add('url_web', TextType::class, [
                'required' => 'true',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'margin-top: 10px; color: #ffffff; background: #6e6e6e'
                ]
            ])
            ->add('CompanyTypeID', ChoiceType::class, [
                'required' => 'true',
                'choices' => $array,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'margin-top: 10px; color: #ffffff; background: #6e6e6e'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Crear',
                'attr' => [
                    'class' => 'btn m-0 rounded-pill px-4',
                    'style' => 'min-width: 250px; color: #ffffff; background-color: #007AFF'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
