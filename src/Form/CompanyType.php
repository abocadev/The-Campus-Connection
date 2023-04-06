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
        $options = [
            'choices' => $array,
            'choice_label' => 'name'
        ];
        $builder
            ->add('name', TextType::class)
            ->add('description', TextareaType::class)
            ->add('url_image', FileType::class, [
                'data_class' => null
            ])
            ->add('location')
            ->add('url_web')
            ->add('CompanyTypeID', ChoiceType::class, $options)
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
