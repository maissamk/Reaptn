<?php
// src/Form/CompleteProfileFormType.php

// src/Form/CompleteProfileFormType.php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

class CompleteProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false, // This field is not mapped to the User entity
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a password.']),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Your password should be at least {{ limit }} characters.',
                    ]),
                    new Regex([
                        'pattern' => '/^(?=.*[A-Z])(?=.*\d).*$/',
                        'message' => 'Your password must contain at least one uppercase letter and one number.',
                    ]),
                ],
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Agriculteur' => 'ROLE_AGRICULTEUR',
                    'Client' => 'ROLE_CLIENT',
                ],
                'expanded' => true, // Use radio buttons for selection
                'multiple' => false, // Only allow one selection
                'label' => 'Select your role', 
                'placeholder' => 'Choose a role', // Optional placeholder
                'data' => 'ROLE_CLIENT', // Optional: Default value
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Phone Number',
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your phone number.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}