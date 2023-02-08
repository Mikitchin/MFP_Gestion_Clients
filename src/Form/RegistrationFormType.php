<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Structure;
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
                'attr' => [
                    'class' => 'form-control'

                ]
            ])

            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('prenom', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('matricule', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
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
                    'class' => 'form-control'
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
                    'class' => 'form-control'
                ]
            ])

            ->add('ville', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])



            ->add('contact', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            // ->add('structure')
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Acceptez-vous nos conditions ?.',
                    ]),
                ],
                'label' => 'Accepter nos conditions'
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
                            'class' => 'form-control'
                        ]
                    ],
                    'second_options' => [
                        'label' => 'Confirmation du mot de passe',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ],


                ],
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
