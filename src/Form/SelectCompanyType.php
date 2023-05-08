<?php

namespace App\Form;

use App\Entity\Company;
use App\Entity\UserCompany;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class SelectCompanyType extends AbstractType
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
        $companies = $this->em->getRepository(Company::class)->findAll();
        $builder
            ->add('Company',  ChoiceType::class, [
                'required' => 'true',
                'choices' => $companies,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select',
                    'style' => 'margin-top: 10px;'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Añadir',
                'attr' => [
                    'class' => 'btn m-0 rounded-pill px-4',
                    'style' => 'min-width: 150px; color: #ffffff; background-color: #007AFF'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserCompany::class,
        ]);
    }
}
