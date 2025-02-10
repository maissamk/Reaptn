<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('mdp', PasswordType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('tele')
            ->add('role', ChoiceType::class, [
                'label' => 'Rôle',
                'choices' => [
                    'Agriculteur' => 'agriculteur',
                    'Client' => 'client',
                    'Admin' => 'admin',
                ],
                'expanded' => false, // Set to false for a dropdown
                'multiple' => false, // Set to false to allow only one selection
                'placeholder' => 'Sélectionnez un rôle', // Optional: Adds a placeholder
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
