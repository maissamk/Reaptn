<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ida', IntegerType::class, [
                'label' => 'Identifiant A',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Saisir l’identifiant A'],
            ])
            ->add('ide', IntegerType::class, [
                'label' => 'Identifiant E',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Saisir l’identifiant E (facultatif)'],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Actif' => true,
                    'Inactif' => false,
                ],
                'expanded' => true, // Displays radio buttons instead of dropdown
                'multiple' => false,
            ])
            ->add('descr', TextType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Entrez une description'],
            ])
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Titre de l’offre'],
            ])
            ->add('comp', TextType::class, [
                'label' => 'Compétence',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Compétences requises (facultatif)'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
