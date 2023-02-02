<?php

namespace App\Form;

use App\Entity\MotifRdv;
use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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

            ->add(
                'fichier',
                FileType::class,
                [
                    'mapped' => false,
                    'required' => false,
                    'constraints' => [
                        new Image(['maxSize' => '3024k']),
                        // 'mimeTypes' => [
                        //     'image/jpg',
                        //     'image/jpeg',
                        //     'image/png',
                        //     'image/pdf',
                        // ],
                        // 'mimeTypesMessage' => 'Please upload a valid image',
                    ]
                ],

            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
