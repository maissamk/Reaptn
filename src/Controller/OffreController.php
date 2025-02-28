<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Entity\Employe;
use App\Form\OffreType;
use App\Form\EmployeType;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

use Dompdf\Dompdf;
use Dompdf\Options;



#[Route('/offre')]
final class OffreController extends AbstractController
{
    #[Route(name: 'app_offre_index', methods: ['GET'])]
    public function index(OffreRepository $offreRepository): Response
    {
        return $this->render('offre/index.html.twig', [
            'offres' => $offreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_offre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('offre/new.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_offre_show', methods: ['GET', 'POST'])]
    public function show(Request $request, Offre $offre, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();
        $existingEmploye = null;
        $form = null;
        $search = $request->query->get('search');
        $dispoFilter = $request->query->get('dispo');

        // Query employees with search and dispo filter
        $queryBuilder = $entityManager->getRepository(Employe::class)->createQueryBuilder('e')
            ->where('e.offre = :offre')
            ->setParameter('offre', $offre);

        if ($search) {
            $queryBuilder->andWhere('e.userIdentifier LIKE :search OR e.comp LIKE :search')
                ->setParameter('search', '%'.$search.'%');
        }

        if ($dispoFilter) {
            $queryBuilder->andWhere('e.dispo LIKE :dispo')
                ->setParameter('dispo', '%'.$dispoFilter.'%');
        }

        $employes = $queryBuilder->getQuery()->getResult();

        if ($user) {
            // Check if the user is already subscribed
            $existingEmploye = $entityManager->getRepository(Employe::class)
                ->findOneBy(['userIdentifier' => $user->getId(), 'offre' => $offre]);

            if (!$existingEmploye) {
                $employe = new Employe();
                $form = $this->createForm(EmployeType::class, $employe);
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $employe->setUserIdentifier($user->getId());
                    $employe->setOffre($offre);
                    $employe->setDateJoin(new \DateTime()); // ✅ Automatically set today's date

                    $entityManager->persist($employe);
                    $entityManager->flush();

                    $this->addFlash('success', 'You have successfully subscribed to this offer!');
                    return $this->redirectToRoute('app_offre_show', ['id' => $offre->getId()]);
                }
            }
        }

        return $this->render('offre/show.html.twig', [
            'offre' => $offre,
            'form' => isset($form) ? $form->createView() : null,
            'existingEmploye' => $existingEmploye,
            'employes' => $employes,
            'search' => $search,
            'dispoFilter' => $dispoFilter,
        ]);
    }
    

    #[Route('/{id}/edit', name: 'app_offre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Offre $offre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('offre/edit.html.twig', [
            'offre' => $offre,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_offre_delete', methods: ['POST'])]
    public function delete(Request $request, Offre $offre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offre_index', [], Response::HTTP_SEE_OTHER);
    }

    // ====== BACK OFFICE ROUTES ======

    #[Route('/admin/offre', name: 'admin_offre_index', methods: ['GET'])]
    public function indexBack(OffreRepository $offreRepository): Response
    {
        return $this->render('admin/offre/index_back.html.twig', [
            'offres' => $offreRepository->findAll(),
        ]);
    }

    #[Route('/admin/offre/new', name: 'admin_offre_new', methods: ['GET', 'POST'])]
    public function newBack(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offre = new Offre(); // ✅ Creating a new empty object
        $form = $this->createForm(OffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('admin_offre_index');
        }

        return $this->render('admin/offre/new_back.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/offre/{id}', name: 'admin_offre_show', methods: ['GET'])]
    public function showBack(Offre $offre): Response
    {
        return $this->render('admin/offre/show_back.html.twig', [
            'offre' => $offre,
        ]);
    }

    #[Route('/admin/offre/{id}/edit', name: 'admin_offre_edit', methods: ['GET', 'POST'])]
public function editBack(Request $request, Offre $offre, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(OffreType::class, $offre);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();
        return $this->redirectToRoute('admin_offre_index');
    }

    return $this->render('admin/offre/edit_back.html.twig', [
        'form' => $form->createView(), // Ensure this is correct
        'offre' => $offre,
    ]);
}

    #[Route('/admin/offre/{id}/delete', name: 'admin_offre_delete', methods: ['POST'])]
    public function deleteBack(Request $request, Offre $offre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $offre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_offre_index');
    }





    #[Route('/offre/{id}/export', name: 'app_offre_export_pdf', methods: ['GET'])]
public function exportToPdf(Offre $offre): Response
{
    // Create PDF options
    $options = new Options();
    $options->set('defaultFont', 'Arial');
    $options->set('isHtml5ParserEnabled', true);

    // Create Dompdf instance
    $dompdf = new Dompdf($options);

    // Render the HTML template for the offer details
    $html = $this->renderView('offre/pdf_offre_details.html.twig', [
        'offre' => $offre
    ]);

    // Load HTML content into Dompdf
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Get the generated PDF as a string
    $pdfOutput = $dompdf->output();

    // Return a Response to force download with a file dialog
    return new Response($pdfOutput, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="offre_'.$offre->getId().'.pdf"',
    ]);
}

}
