<?php

namespace App\Form;

use App\Entity\Evaluation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EvaluationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('satisfaction', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],

                'expanded' => true,
                'multiple' => false,
                'attr' => [
                    'class' => 'form-check-inline mx-3'
                ]
            ])
            ->add('impression', TextareaType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('satisfactionSce', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],

                'expanded' => true,
                'multiple' => false,
                'attr' => [
                    'class' => 'form-check-inline mx-3'
                ]
            ])
            ->add('impressionSce', TextareaType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evaluation::class,
        ]);
    }
}
