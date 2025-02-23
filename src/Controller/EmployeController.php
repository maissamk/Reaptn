<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\Offre;
use App\Form\EmployeType;
use App\Repository\EmployeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/employe')]
final class EmployeController extends AbstractController
{
    // Front office functions
    #[Route('/', name: 'app_employe_index', methods: ['GET'])]
    public function index(EmployeRepository $employeRepository): Response
    {
        return $this->render('employe/index.html.twig', [
            'employes' => $employeRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_employe_new', methods: ['POST'])]
public function new(Request $request, int $id, EntityManagerInterface $entityManager, Security $security): Response
{
    $offre = $entityManager->getRepository(Offre::class)->find($id);
    if (!$offre) {
        throw $this->createNotFoundException('Offer not found.');
    }

    // Get the logged-in user's ID
    $user = $security->getUser();
    if (!$user) {
        $this->addFlash('error', 'You must be logged in to subscribe.');
        return $this->redirectToRoute('app_offre_show', ['id' => $id]);
    }
    $userId = $user->getId(); // Only change here

    $competence = $request->request->get('comp');

    // Check if this user is already subscribed
    $existingEmploye = $entityManager->getRepository(Employe::class)
        ->findOneBy(['userIdentifier' => $userId, 'offre' => $offre]);

    if ($existingEmploye) {
        $this->addFlash('error', 'You are already subscribed to this offer.');
        return $this->redirectToRoute('app_offre_show', ['id' => $id]);
    }

    // Create new employee record
    $employe = new Employe();
    $employe->setUserIdentifier($userId);
    $employe->setComp($competence);
    $employe->setOffre($offre);

    $entityManager->persist($employe);
    $entityManager->flush();

    $this->addFlash('success', 'You have successfully subscribed to this offer!');
    return $this->redirectToRoute('app_offre_show', ['id' => $id]);
}

    #[Route('/{id}', name: 'app_employe_show', methods: ['GET'])]
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' => $employe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_employe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/edit.html.twig', [
            'employe' => $employe,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_employe_delete', methods: ['POST'])]
    public function delete(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $employe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($employe);
            $entityManager->flush();
            $this->addFlash('success', 'Employee deleted successfully.');
        }

        return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
    }

    // Back office functions





   

    #[Route('/admin/employe', name: 'admin_employe_index')]
    public function indexBack(EntityManagerInterface $entityManager): Response
    {
    $employes = $entityManager->getRepository(Employe::class)->findAll();

    return $this->render('admin/employe/index_back.html.twig', [
        'employes' => $employes,
    ]);
    }


    #[Route('/new', name: 'admin_employe_new')]
    public function newBack(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $employe = new Employe();
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $errors = $validator->validate($employe);
            if (count($errors) > 0) {
                return $this->render('admin/employe/new_back.html.twig', [
                    'form' => $form->createView(),
                    'errors' => $errors,
                ]);
            }

            $entityManager->persist($employe);
            $entityManager->flush();

            return $this->redirectToRoute('admin_employe_index');
        }

        return $this->render('admin/employe/new_back.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/admin/employe/{id}', name: 'admin_employe_show')]
    public function showBack(Employe $employe): Response
    {
        return $this->render('admin/employe/show_back.html.twig', [
            'employe' => $employe,
        ]);
    }

     // Edit an employee (back office) without changing the 'offre' ID
     #[Route('/{id}/edit', name: 'admin_employe_edit', requirements: ['id' => '\d+'])]
     #[Route('/admin/employe/{id}/edit', name: 'admin_employe_edit', methods: ['GET', 'POST'])]
     public function editBack(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
     {
         $form = $this->createForm(EmployeType::class, $employe);
         $form->handleRequest($request);
     
         if ($form->isSubmitted() && $form->isValid()) {
             $entityManager->flush();
             return $this->redirectToRoute('admin_employe_index'); // Make sure this is the correct back-office route
         }
     
         return $this->render('admin/employe/edit_back.html.twig', [
             'employe' => $employe,
             'form' => $form->createView(),
         ]);
     }

    #[Route('/admin/employe/{id}/delete', name: 'admin_employe_delete')]
    public function deleteBack(Employe $employe, EntityManagerInterface $entityManager): Response
    {
        // Using the injected entity manager
        $entityManager->remove($employe);
        $entityManager->flush();

        return $this->redirectToRoute('admin_employe_index');
    }
}
