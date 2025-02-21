<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Materielvente;

class RegistrationController extends AbstractController
{
    #[Route('/register1', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Hash the password
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));
    
            // Get the selected role (this should return just one role, e.g., 'ROLE_AGRICULTEUR' or 'ROLE_CLIENT')
            $role = $form->get('roles')->getData();
    
            // Assign the role as an array (even if it's just one role)
            if ($role) {
                $user->setRoles([$role]);
            }
            if (!$user->getAvatar()) {
                $user->setAvatar('defaultavatar.png');
            }
    
            // Persist the user entity to the database
            $entityManager->persist($user);
            $entityManager->flush();
    
            // Redirect to another page after successful registration
            return $this->redirectToRoute('app_page');
        }
    
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }
    

    

}
