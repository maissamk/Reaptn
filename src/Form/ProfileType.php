<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints as Assert;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => 'Nom',
            'empty_data' => '',
        ])
        ->add('prenom', TextType::class, [
            'label' => 'Prénom',
            'empty_data' => '',
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email',
            'empty_data' => '',
        ])
        ->add('telephone', TextType::class, [
            'label' => 'Téléphone',
            'required' => true, // Missing comma fixed here
            'empty_data' => '',
        ])
            ->add('avatar', FileType::class, [
                'label' => 'Upload Avatar',
                'mapped' => false,  // Not mapped to the entity directly
                'required' => false,
                'attr' => ['accept' => 'image/*'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
