<?php

namespace App\Form;

use App\Entity\Materielvente;
use App\Entity\Categorie;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class Materielvente2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prix', NumberType::class)
            ->add('description', TextType::class)
            ->add('disponibilite', CheckboxType::class)
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false, // Important : ce champ ne sera pas directement lié à la base de données
                'required' => false, // Si vous souhaitez que l'image soit optionnelle
                'constraints' => [
                    new File([
                        'maxSize' => '5M', // Taille maximale de l'image
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Please upload a valid image (JPEG or PNG).',
                        ])
                        ]
                    ])
                    ->add('categorie', EntityType::class, [
                        'class' => Categorie::class, // Classe de l'entité Category
                        'choice_label' => 'nom',   // Afficher le nom de la catégorie dans la liste déroulante
                        'placeholder' => 'Choisir une catégorie', // Texte affiché avant la sélection
                    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materielvente::class,
        ]);
    }
}
