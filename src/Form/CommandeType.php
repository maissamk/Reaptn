<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_commande', null, [
                'label' => 'Identifiant de la commande',
                'constraints' => [
                ],
                'attr' => ['placeholder' => 'Saisissez l’identifiant de la commande'],
            ])
            ->add('dateCommande', DateTimeType::class, [
                'label' => 'Date de la commande',
                'widget' => 'single_text',
                'required' => true,
                'empty_data' => (new \DateTime())->format('Y-m-d H:i'),
                'attr' => ['placeholder' => 'YYYY-MM-DD HH:mm'],
            ])
            ->add('totale', null, [
                'label' => 'Total de la commande',
                'constraints' => [
                ],
                'attr' => ['placeholder' => 'Saisissez le total'],
            ])
            ->add('quantite', null, [
                'label' => 'Quantité',
                'constraints' => [
                ],
                'attr' => ['placeholder' => 'Saisissez la quantité'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
