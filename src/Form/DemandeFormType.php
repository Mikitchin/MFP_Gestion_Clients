<?php

namespace App\Form;

use App\Entity\MotifRdv;
use App\Entity\DemandeRdv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DemandeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('codeDde')
            ->add('nature', ChoiceType::class, [
                'choices' => [
                    'Demande de rdv' => true,
                    'Demande d\'information' => false,
                ],

                'expanded' => true,
                'multiple' => false,
                'attr' => [
                    'class' => 'form-check-inline mx-3'
                ]
            ])
            ->add('codeMotif', EntityType::class, [
                'class' => MotifRdv::class,
                'attr' => [
                    'class' => 'form-control'

                ]
            ])
            ->add('descriptDde', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'label' => 'Motif de la demande de rendez-vous'
                ],
            ])
            // ->add('dateDde')
            // ->add('dateDemande', DateType::class, [
            //     'widget' => 'single_text',
            //     'format' => 'yyyy-MM-dd',
            //     'attr' => [
            //         'class' => 'form-control'

            //     ]
            // ])
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
            //         'class' => 'form-control'

            //     ]

            // ])
            // ->add('etatDemande')
            // ->add('slug')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeRdv::class,
        ]);
    }
}
