<?php

namespace App\Form;

use App\Entity\CategoriesOffers;
use App\Entity\LocalitiesOffers;
use App\Entity\Modality;
use App\Entity\Offers;
use App\Entity\WeeklyHoursOffers;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffersType extends AbstractType
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

        $modalities = $this->em->getRepository(Modality::class)->findAll();
        $categories = $this->em->getRepository(CategoriesOffers::class)->findAll();
        $localities = $this->em->getRepository(LocalitiesOffers::class)->findAll();
        $hours = $this->em->getRepository(WeeklyHoursOffers::class)->findAll();

        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'color: black'
                ]
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('Positions', NumberType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'color: black'
                ]
            ])
            ->add('Modality', ChoiceType::class, [
                'choices' => $modalities,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-control',
                    'style' => 'color: black'
                ]
            ])
            ->add('Category', ChoiceType::class, [
                'choices' => $categories,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select pb-2',
                    'style' => 'font-size: 0.9rem'
                ]
            ])
            ->add('Locality', ChoiceType::class, [
                'choices' => $localities,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select pb-2',
                    'style' => 'font-size: 0.9rem'
                ]
            ])
            ->add('WeeklyHours', ChoiceType::class, [
                'choices' => $hours,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select pb-2',
                    'style' => 'font-size: 0.9rem'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Subir la oferta',
                'attr' => [
                    'class' => 'btn btn-primary btn-light m-0 rounded-pill px-4',
                    'style' => 'min-width: 500px; color: #ffffff, bottom: 1;'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offers::class,
        ]);
    }
}
