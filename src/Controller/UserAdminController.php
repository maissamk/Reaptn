<?php

namespace App\Controller;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Snappy\Pdf;

final class UserAdminController extends AbstractController
{
    //user
    
   #[Route('/admin/users', name: 'admin_users')]
   public function listUsers(Request $request, EntityManagerInterface $em, UserRepository $userRepository)
   {
       // Get filters from query parameters
       $search = $request->query->get('search');
       $role = $request->query->get('role');
       $status = $request->query->get('status');
   
       // Fetch users based on filters
       $users = $userRepository->searchUsers($search, $role, $status);
   
       // If the request is an AJAX request, return only the table body
       if ($request->isXmlHttpRequest()) {
           return $this->render('admin/partials/_user_table_body.html.twig', [
               'users' => $users
           ]);
       }
   
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
            // Save changes (including status)
        $em->persist($user);
        $em->flush();
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


#[Route('/admin/users/pdf', name: 'admin_users_pdf')]
public function downloadPdf(Pdf $pdf, EntityManagerInterface $em): Response
{
    // Fetch the user data using the injected EntityManager
    $users = $em->getRepository(User::class)->findAll();

    // Render the HTML content for the PDF
    $html = $this->renderView('admin/user/users_pdf.html.twig', [
        'users' => $users,
    ]);

    // Generate PDF from the HTML
    $file = $pdf->getOutputFromHtml($html);

    // Return the PDF for download
    return new Response(
        $file,
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment;filename="users.pdf"',
        ]
    );
}

}
