<?php

namespace App\Form;

use App\Entity\ParcelleProprietes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ParcelleProprietesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('prix')
            ->add('status')
            ->add('emplacement')
            ->add('taille')
            ->add('date_creation_annonce', DateTimeType::class, [
                'widget' => 'single_text', // This will render it as a single input field
                'required' => true,        // Make sure this field is required
                'empty_data' => (new \DateTime()),
           
            ])
            ->add('date_misajour_annonce', DateTimeType::class, [
                'widget' => 'single_text', // This will render it as a single input field
                'required' => true,        // Make sure this field is required
                'empty_data' => (new \DateTime()),
           
            
            ])
            ->add('est_disponible')
            ->add('nom_proprietaire')
            ->add('contact_proprietaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ParcelleProprietes::class,
        ]);
    }
}
