<?php

namespace App\Form;

use App\Entity\DemandeRdv;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DemandeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('codeDde')
            ->add('codeMotif')
            ->add('descriptDde')
            ->add('dateDde')
            ->add('dateDemande')
            ->add('dateModifDde')
            ->add('etatDemande')
            ->add('slug')
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeRdv::class,
        ]);
    }
}
