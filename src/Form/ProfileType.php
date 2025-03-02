<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\Image;

class ProfileType extends AbstractType
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

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
                'required' => true,
                'empty_data' => '',
            ])
            ->add('avatar', FileType::class, [
                'label' => 'Upload Avatar',
                'mapped' => false, // Not mapped to the entity directly
                'required' => false,
                'attr' => ['accept' => 'image/*'],
            ])
            ->add('faceImage', FileType::class, [
                'label' => 'Upload Face Image',
                'mapped' => false, // This field is not mapped to the User entity
                'required' => false, // The field is optional
                'constraints' => [
                    new Image([
                        'maxSize' => '5M', // Maximum file size
                        'mimeTypes' => ['image/jpeg', 'image/png'], // Allowed file types
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image.',
                    ]),
                ],
            ]);
            
            

        // ✅ Only allow admins to modify the status field
        if ($this->security->isGranted('ROLE_ADMIN') ) {
            $builder->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Actif' => 'active',
                    'Inactif' => 'inactive',
                    'Bloqué' => 'blocked',
                ],
                'required' => true,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
