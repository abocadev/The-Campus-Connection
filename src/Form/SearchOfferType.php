<?php

namespace App\Form;

use App\Entity\CategoriesOffers;
use App\Entity\LocalitiesOffers;
use App\Entity\Modality;
use App\Entity\Offers;
use App\Entity\WeeklyHoursOffers;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class SearchOfferType extends AbstractType
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
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ej: Programacion'
                ]
            ])
            ->add('Locality', ChoiceType::class, [
                'required' => false,
                'choices' => $localities,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select',
                ],
                'placeholder' => '-- Selecciona una localidad --'
            ])
            ->add('Modality', ChoiceType::class, [
                'required' => false,
                'choices' => $modalities,
                'choice_label' => 'name',
                'expanded' => true,
                'multiple'=> false,
                'attr' => [
                    'class' => 'form-check ',
                    'style' => 'color: white'
                ],
                'placeholder' => 'Indiferente'
            ])
            ->add('Category', ChoiceType::class, [
                'required' => false,
                'choices' => $categories,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select',
                ],
                'placeholder' => '-- Selecciona una categoria  --'
            ])
            ->add('WeeklyHours', ChoiceType::class, [
                'required' => false,
                'choices' => $hours,
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select'
                ],
                'placeholder' => '-- Selecciona un horario --'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Buscar',
                'attr' => [
                    'style' => 'padding: 10px 20px; background-color: #007bff; color: #ffffff; border: none; border-radius: 5px;'
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
