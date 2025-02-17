<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Paiement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('datePaiement', null, [
            'widget' => 'single_text',
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'La date de paiement est obligatoire.'
                ])
            ],
        ])
        ->add('methodePaiement', ChoiceType::class, [
            'choices' => [
                'Carte de Crédit' => 'Carte de Crédit',
                'PayPal' => 'PayPal',
                'Virement Bancaire' => 'Virement Bancaire',
            ],
            'constraints' => [
                new NotBlank(['message' => 'La méthode de paiement est obligatoire.']),
            ],
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Payer maintenant',
        ])
        ->add('commande', EntityType::class, [
            'class' => Commande::class,
            'choice_label' => 'id',
        ]);
}

public function configureOptions(OptionsResolver $resolver): void
{
    $resolver->setDefaults([
        'data_class' => Paiement::class,
    ]);
}
}