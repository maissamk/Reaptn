<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ProfileType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')] // Restricts access to logged-in users
    public function index(): Response
    {
        $user = $this->getUser();
    
        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/profile/edit', name: 'app_edit_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editProfile(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ProfileType::class, $user);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $avatarFile = $form->get('avatar')->getData();
    
            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();
    
                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'), // Directory defined in `services.yaml`
                        $newFilename
                    );
                    $user->setAvatar($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload avatar.');
                }
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'Profile updated successfully!');
            return $this->redirectToRoute('app_profile');
        }
    
        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,  // Pass the user object to the template
        ]);
    }


    #[Route('/admin/profile', name: 'admin_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')] // Restricts access to logged-in users
    public function indexprofile(): Response
    {
        $user = $this->getUser();
    
        return $this->render('admin/profile/index.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/admin/profile/edit', name: 'admin_edit_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editProfileadmin(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ProfileType::class, $user);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $avatarFile = $form->get('avatar')->getData();
    
            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();
    
                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'), // Directory defined in `services.yaml`
                        $newFilename
                    );
                    $user->setAvatar($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload avatar.');
                }
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'Profile updated successfully!');
            return $this->redirectToRoute('admin_profile');
        }
    
        return $this->render('admin/profile/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,  // Pass the user object to the template
        ]);
    }
}
