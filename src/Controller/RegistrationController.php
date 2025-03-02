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
use Symfony\Component\HttpClient\HttpClient;



class RegistrationController extends AbstractController
{
    #[Route('/register1', name: 'app_register')]
    #[Route('/register1', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Validate reCAPTCHA
            $recaptchaResponse = $request->request->get('g-recaptcha-response');
            $recaptchaSecret = $this->getParameter('recaptcha.secret_key');
    
            $httpClient = HttpClient::create();
            $response = $httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => [
                    'secret' => $recaptchaSecret,
                    'response' => $recaptchaResponse,
                ],
            ]);
    
            $responseData = $response->toArray();
    
            if (!$responseData['success']) {
                $this->addFlash('error', 'CAPTCHA validation failed. Please try again.');
                return $this->redirectToRoute('app_register');
            }
    
            // Hash the password
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));
    
            // Get the selected role
            $role = $form->get('roles')->getData();
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
            'registrationForm' => $form->createView(),
            'recaptcha_site_key' => $this->getParameter('recaptcha.site_key'),
        ]);
    }
}