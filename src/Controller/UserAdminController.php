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
use App\Service\UserStatisticsService; // ✅ Ensure this import is here
use Symfony\Component\HttpFoundation\JsonResponse;

final class UserAdminController extends AbstractController
{
    
   #[Route('/admin/users', name: 'admin_users')]
   public function listUsers(Request $request, EntityManagerInterface $em, UserRepository $userRepository)
   {
       $search = $request->query->get('search');
       $role = $request->query->get('role');
       $status = $request->query->get('status');
   
       $users = $userRepository->searchUsers($search, $role, $status);
   
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
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            $this->addFlash('error', 'User not found');
            return $this->redirectToRoute('admin_users');
        }

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
                        $this->getParameter('avatars_directory'), 
                        $newFilename
                    );
                    $user->setAvatar($newFilename); 
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload the avatar.');
                }
            }
        $em->persist($user);
        $em->flush();
            $em->flush();
            $this->addFlash('success', 'User updated successfully!');
            return $this->redirectToRoute('admin_users');
        }

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
    $users = $em->getRepository(User::class)->findAll();

    $html = $this->renderView('admin/user/users_pdf.html.twig', [
        'users' => $users,
    ]);

    $file = $pdf->getOutputFromHtml($html);

    return new Response(
        $file,
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment;filename="users.pdf"',
        ]
    );
}
#[Route('/admin/user/statistics', name: 'admin_statistics')]
public function statistics(UserStatisticsService $userStatisticsService, Request $request): Response
{
    if ($request->isXmlHttpRequest()) {
        $stats = $userStatisticsService->getUserStatisticsByRole();
        return new JsonResponse($stats); 
    }

    $stats = $userStatisticsService->getUserStatisticsByRole();
    return $this->render('admin/user/statistics.html.twig', [
        'stats' => $stats
    ]);
}

#[Route('/admin/user/LoginStats', name: 'admin_LoginStats')]
public function showLoginStats(EntityManagerInterface $entityManager, Request $request)
{
    if ($request->isXmlHttpRequest()) {
        $qb = $entityManager->createQueryBuilder();
        $qb->select('u.email', 'u.loginAttempts')
           ->from(User::class, 'u')
           ->orderBy('u.loginAttempts', 'ASC');

        $result = $qb->getQuery()->getResult();

        return new JsonResponse($result);
    }

    $qb = $entityManager->createQueryBuilder();
    $qb->select('u.email', 'u.loginAttempts')
       ->from(User::class, 'u')
       ->orderBy('u.loginAttempts', 'ASC');

    $result = $qb->getQuery()->getResult();

    return $this->render('admin/user/login_stats.html.twig', [
        'result' => $result,
    ]);
}

}



