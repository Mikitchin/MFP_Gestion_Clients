<?php

namespace App\Form;

use App\Entity\MotifRdv;
use App\Entity\DemandeRdv;
use App\Entity\UniteAdmin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TransfertFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


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
            ->add('direction', EntityType::class, [
                'class' => UniteAdmin::class,
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true
                ],

            ])
            ->add('observationGest', TextareaType::class, [
                'attr' => ['class' => 'form-control'],

            ])

            ->add('observationAc', TextareaType::class, [
                'attr' => ['class' => 'form-control'],

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeRdv::class,
        ]);
    }
}
