<?php

namespace App\Form;

use App\Entity\MotifRdv;
use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TraiteGestReclamFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


            // ->add('dateRdv', DateType::class, [
            //     'widget' => 'single_text',
            //     'format' => 'yyyy-MM-dd',
            //     'attr' => [
            //         'class' => 'form-control',
            //         // 'readonly' => true
            //     ],

            // ])
            ->add('codeMotif', EntityType::class, [
                'class' => MotifRdv::class,
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true
                ],

            ])
            ->add('descriptDde', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true
                ],

            ])
            // ->add('heureRdv', ChoiceType::class, [
            //     'choices' => array(
            //         '8h00' => '8h00',
            //         '9h00' => '9h00',
            //         '10h00' => '10h00',
            //         '11h00' => '11h00',
            //         '12h00' => '12h00',
            //         '14h00' => '14h00',
            //         '15h00' => '15h00',
            //         '16h00' => '16h00'
            //     ),
            //     'attr' => [
            //         'class' => 'form-control',

            //     ],


            // ])
            ->add('observationAc', TextareaType::class, [
                'attr' => ['class' => 'form-control'],

            ])

            ->add('observationGest', TextareaType::class, [
                'attr' => ['class' => 'form-control'],

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
