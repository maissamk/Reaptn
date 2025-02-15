<?php

namespace App\Controller;
use App\Entity\User;  
use App\Form\ProfileType;  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;  
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;


final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/users', name: 'admin_users')]
    public function listUsers(EntityManagerInterface $em)
    {
        // Fetch all users from the database
        $users = $em->getRepository(User::class)->findAll();

        return $this->render('admin/user/users.html.twig', [
            'users' => $users,
        ]);
    }
    #[Route('/admin/user/edit/{id}', name: 'admin_user_edit')]
    public function editUser($id, Request $request, EntityManagerInterface $em, SluggerInterface $slugger)
    {
        // Fetch the user by ID
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            $this->addFlash('error', 'User not found');
            return $this->redirectToRoute('admin_users');
        }

        // Create the form for editing the user
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload for the avatar
            $avatarFile = $form->get('avatar')->getData();

            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

                try {
                    // Move the uploaded avatar to the desired directory
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'), // Directory from `services.yaml`
                        $newFilename
                    );
                    $user->setAvatar($newFilename); // Set the avatar filename in the user entity
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload the avatar.');
                }
            }

            // Save the updated user data
            $em->flush();
            $this->addFlash('success', 'User updated successfully!');
            return $this->redirectToRoute('admin_users');
        }

        // Render the form to edit the user
        return $this->render('admin/user/edit_user.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/admin/user/delete/{id}', name: 'admin_user_delete')]
public function deleteUser($id, EntityManagerInterface $em)
{
    $user = $em->getRepository(User::class)->find($id);

    if ($user) {
        $em->remove($user);
        $em->flush();
    }

    return $this->redirectToRoute('admin_users');
}

}
