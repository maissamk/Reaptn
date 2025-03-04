<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => 'Last Name'
        ])
        ->add('prenom', TextType::class, [
            'label' => 'First Name'
        ])
        ->add('telephone', TelType::class, [
            'label' => 'Phone Number'
        ])
            ->add('email')
            
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
            new Assert\NotBlank(),
            new Assert\Length(['min' => 8]),
            new Assert\Regex([
                'pattern' => '/^(?=.*[A-Z])(?=.*\d).*$/', 
                'message' => 'Password must contain at least one uppercase letter and one number.'
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
            
            
            
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
