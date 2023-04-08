<?php

namespace App\Form;

use App\Entity\UserToOffer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApplyOfferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('submit', SubmitType::class, [
                'label' => '<span style="display: block;">Solicitar oferta</span><span style="display: block;">-1<i class="fas fa-graduation-cap"></i></span>',
                'attr' => [
                    'class' => 'btn btn-primary btn-lg btn-block mt-3 rounded',
                    'style' => 'white-space: normal;'
                ],
                'row_attr' => [
                    'class' => 'text-center'
                ],
                'label_html' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserToOffer::class,
        ]);
    }
}
