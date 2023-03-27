<?php

namespace App\Form;

use App\Entity\Company;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
            ->add('name')
            ->add('description')
            ->add('url_image')
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
