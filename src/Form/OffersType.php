<?php

namespace App\Form;

use App\Entity\Modality;
use App\Entity\Offers;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffersType extends AbstractType
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
        public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $array = $this->em->getRepository(Modality::class)->findAll();
        $options = [
            'choices' => $array,
            'choice_label' => 'name'
        ];
        $builder
            ->add('title')
            ->add('description')
            ->add('Positions')
            ->add('Location')
            ->add('Activated', CheckboxType::class) // El indentifica si quiere mantener su oferta activa o no
            ->add('Modality', ChoiceType::class, $options) // Esto es un desplegable
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offers::class,
        ]);
    }
}
