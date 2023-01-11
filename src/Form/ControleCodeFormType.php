<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ControleCodeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeRdv', TextType::class, [
                'attr' => [
                    'class' => 'form-control'

                ]
            ]);
        // ->add('submit', SubmitType::class, [
        //     'label' => 'Vérifier le code',
        //     'attr' => [
        //         'class' => 'form-control'

        //     ]
        // ]);
    }
}
