<?php

namespace App\Form;

use App\Entity\Contrat;
use App\Entity\ParcelleProprietes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder ->add('dateDebut_contrat', DateTimeType::class, [
            'widget' => 'single_text', // This will render it as a single input field
            'required' => true,        // Make sure this field is required
            'empty_data' => (new \DateTime()),
        ])
        
        ->add('datefin_contrat', DateTimeType::class, [
            'widget' => 'single_text', // This will render it as a single input field
            'required' => true,        // Make sure this field is required
            'empty_data' => (new \DateTime()),
            ])
            ->add('nom_Acheteur')
            ->add('nom_Vendeur')
            ->add('information_Contrat')
            ->add('datecreation_contrat', DateTimeType::class, [
                'widget' => 'single_text', // This will render it as a single input field
                'required' => true,        // Make sure this field is required
                'empty_data' => (new \DateTime()),
            ])
            ->add('parcelle', EntityType::class, [
                'class' => ParcelleProprietes::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contrat::class,
        ]);
    }
}
