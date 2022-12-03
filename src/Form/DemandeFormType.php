<?php

namespace App\Form;

use App\Entity\MotifRdv;
use App\Entity\DemandeRdv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DemandeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('codeDde')
            ->add('codeMotif', EntityType::class, [
                'class' => MotifRdv::class,
                'attr' => [
                    'class' => 'form-control'

                ]
            ])
            ->add('descriptDde', TextareaType::class, [
                'attr' => ['class' => 'tinymce'],
            ])
            // ->add('dateDde')
            ->add('dateDemande', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => [
                    'class' => 'form-control'

                ]
            ])
            ->add('dateModifDde', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => [
                    'class' => 'form-control'

                ]
            ])
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
