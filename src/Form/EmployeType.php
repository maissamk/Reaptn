<?php

namespace App\Form;

use App\Entity\Employe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userIdentifier', NumberType::class, [
                'label' => 'User Identifier'
            ])
            ->add('comp', TextType::class, [
                'label' => 'Compétence',
                'required' => false
            ])
            // Don't add the 'offre' field here to prevent modification
            ->add('save', SubmitType::class, [
                'label' => 'Save Employe'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}
