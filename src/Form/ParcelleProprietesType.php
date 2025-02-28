<?php

namespace App\Form;

use App\Entity\ParcelleProprietes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ParcelleProprietesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre', null, [
            'required' => true,
            'empty_data' => '',
        ])
        
            ->add('description', null, [
                'required' => true,
                'empty_data' => '',
            ])
            ->add('prix')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Louer' => 'Louer',
                    'Acheter' => 'Acheter',
                ],
                'expanded' => false,  // Menu déroulant
                'multiple' => false,  // Un seul choix possible
            ])
           ->add('emplacement', TextType::class, [
            'required' => true, // ou false selon votre logique
            'attr' => [
                'id' => 'autocomplete',
                'placeholder' => 'Entrez un emplacement ou sélectionnez sur la carte'
            ]
        ])
            ->add('taille', null, [
                'required' => true,
                'empty_data' => '0',  // Définit une valeur par défaut
            ])
            ->add('date_creation_annonce', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => true,
                'empty_data' => (new \DateTime())->format('Y-m-d H:i:s'),
            ])
            ->add('date_misajour_annonce', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => true,
                'empty_data' => (new \DateTime())->format('Y-m-d H:i:s'),
            ])
            ->add('estDisponible', CheckboxType::class, [
                'label' => 'Disponible',
                'required' => false,
            ])
            ->add('nom_proprietaire', null, [
                'required' => true,
                'empty_data' => '',
            ])
            ->add('contact_proprietaire', null, [
                'required' => true,
                'empty_data' => '',
            ])
            ->add('type_terrain', ChoiceType::class, [
                'choices' => [
                    'Agricole' => 'agricole',
                    'Constructible' => 'constructible',
                    'Forêt' => 'foret',
                    'Industriel' => 'industriel',
                ],
                'placeholder' => 'Sélectionnez un type de terrain', // Optionnel
                'label' => 'Type de terrain',
                'required' => true,
            ])
            ->add('image', FileType::class, [
                'label' => 'Image de la parcelle',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG ou PNG).',
                    ])
                ],
                
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ParcelleProprietes::class,
        ]);
    }
}
