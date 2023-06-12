<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Structure;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
    $builder

        ->add('structure', EntityType::class, [
            'class' => Structure::class,
            'placeholder' => "Sélectionnez votre structure",
            'attr' => [
                'class' => 'form-control',


            ]
        ])

        ->add('nom', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre nom"
            ]
        ])
        ->add('prenom', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre prénom"
            ]
        ])
        ->add('email', EmailType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre Email"
            ]
        ])
        ->add('matricule', HiddenType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre matricule"
            ],
            
            'required' => false,
        ])
        ->add('dateNaissance', DateType::class, [
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'attr' => [
                'class' => 'form-control'

            ]
        ])

        // ->add('lieuNaissance')
        // ->add('sexe')
        // ->add('ville')
        // ->add('numeroPiece')

        ->add('lieuNaissance', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre lieu de naissance"
            ]
        ])

        ->add('fonctionnaire', ChoiceType::class, [
            'choices' => [
                'Oui' => true,
                'Non' => false,
            ],

            'expanded' => true,
            'multiple' => false,
            'label_attr' => [
                'class' => 'd-flex',
            ],
        ])

        ->add('fonction', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre fonction"
            ]
        ])

        ->add('ville', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre ville "
            ]
        ])

        ->add('commune', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre commune "
            ]
        ])

        // ->add('quartier', TextType::class, [
        //     'attr' => [
        //         'class' => 'form-control',
        //         'placeholder' => "Entrer votre quartier "
        //     ]
        // ])


        ->add('contact', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => "Entrer votre contact"
            ]
        ])
        // ->add('structure')
        ->add('agreeTerms', CheckboxType::class, [
            'mapped' => false,
            'constraints' => [
                new IsTrue([
                    'message' => 'Je ne suis pas un robot.',
                ]),
            ],
            'label' => 'Je ne suis pas un robot.'
        ])
        ->add(
            'password',
            RepeatedType::class,
            [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => [
                    'label' => 'Mot de passe',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => "Entrer votre mot de passe"
                    ]
                ],
                'second_options' => [
                    'label' => 'Confirmation du mot de passe',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => "Confirmer votre mot de passe"
                    ]
                ],


            ],
        );


    // $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
    //     $form = $event->getForm();
    //     $data = $event->getData();

    //     if ($data->isFonctionnaire() === true) {
    //         $form->add('matricule', TextType::class, [
    //             'label' => 'Matricule',
    //             // Autres options de champ
    //         ]);
    //     }
    // });
}
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }    

}
