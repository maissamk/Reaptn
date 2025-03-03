<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PdfGeneratorService;
use App\Repository\ParcelleProprietesRepository;
use App\Service\YousignService; 


#[Route('/contrat')]
final class ContratController extends AbstractController
{
    #[Route(name: 'app_contrat_index', methods: ['GET'])]
    public function index(ContratRepository $contratRepository): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Filtrer les contrats pour n'afficher que ceux qui appartiennent à l'utilisateur connecté
        $contrats = $contratRepository->findBy(['user_id_contrat' => $user]);

        return $this->render('contrat/index.html.twig', [
            'contrats' => $contrats,
        ]);
    }



     //new:



     

    #[Route('/new/{id}', name: 'app_contrat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ParcelleProprietesRepository $parcelleProprietesRepository, int $id = null): Response
    {
        $contrat = new Contrat();

        // Si un ID de parcelle est passé, le pré-remplir dans le contrat
        if ($id) {
            $parcelle = $parcelleProprietesRepository->find($id);
            if ($parcelle) {
                $contrat->setParcelle($parcelle);
            }
        }

        // Assigner l'utilisateur connecté au contrat
        $contrat->setUserIdContrat($this->getUser());

        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contrat);
            $entityManager->flush();

            $this->addFlash('success', 'Contrat créé avec succès !');
            return $this->redirectToRoute('app_contrat_index');
        }

        return $this->render('contrat/new.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_show', methods: ['GET'])]
    public function show(Contrat $contrat): Response
    {
        // Vérifier que l'utilisateur connecté est bien le propriétaire du contrat
        if ($contrat->getUserIdContrat() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas voir ce contrat.');
        }

        return $this->render('contrat/show.html.twig', [
            'contrat' => $contrat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_contrat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contrat $contrat, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur connecté est bien le propriétaire du contrat
        if ($contrat->getUserIdContrat() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier ce contrat.');
        }

        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('contrat/edit.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_delete', methods: ['POST'])]
    public function delete(Request $request, Contrat $contrat, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur connecté est bien le propriétaire du contrat
        if ($contrat->getUserIdContrat() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas supprimer ce contrat.');
        }

        if ($this->isCsrfTokenValid('delete' . $contrat->getId(), $request->get('_token'))) {
            $entityManager->remove($contrat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
    }

    // Route pour télécharger le contrat en format PDF
    #[Route('/contrat/{id}/download', name: 'contrat_download', methods: ['GET'])]
    public function download(Contrat $contrat, PdfGeneratorService $pdfGeneratorService): Response
    {
        // Vérifier que l'utilisateur connecté est bien le propriétaire du contrat
        if ($contrat->getUserIdContrat() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas télécharger ce contrat.');
        }

        // Générer le PDF à partir du service
        $pdfContent = $pdfGeneratorService->generatePdf($contrat);

        // Créer une réponse avec le contenu du PDF
        $response = new Response($pdfContent);

        // Définir les en-têtes pour télécharger le PDF
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="contrat_' . $contrat->getId() . '.pdf"');

        return $response;
    }

    // route signature :

    #[Route('/{id}/signature', name: 'app_contrat_signature', methods: ['GET'])]
    public function signature(
        Contrat $contrat, 
        YousignService $yousignService, 
        EntityManagerInterface $entityManager
    ): Response {
        // Création de la demande de signature
        $signatureRequestResponse = json_decode($yousignService->SignatureRequest(), true);
        if (!isset($signatureRequestResponse['id'])) {
            $this->addFlash('error', 'Échec de la création de la demande de signature.');
            return $this->redirectToRoute('app_contrat_index');
        }
        
        // Stockage en base de données
        $contrat->setSignatureId($signatureRequestResponse['id']);
        $entityManager->persist($contrat);
        $entityManager->flush();
        
        // Téléchargement du document
        $uploadedDocument = $yousignService->uploadDocument($contrat->getSignatureId(), $contrat);
        if (!isset($uploadedDocument['id'])) {
            $this->addFlash('error', 'Échec du téléchargement du document.');
            return $this->redirectToRoute('app_contrat_index');
        }
        
        $contrat->setDocumentId($uploadedDocument['id']);
        $entityManager->persist($contrat);
        $entityManager->flush();
        
        // Ajout du signataire - pass the signatureRequestId and documentId
        $signerResponse = json_decode($yousignService->addSignerToSignatureRequest($contrat, $contrat->getSignatureId(), $contrat->getDocumentId()), true);
        if (!isset($signerResponse['id'])) {
            $this->addFlash('error', 'Échec de l\'ajout du signataire.');
            return $this->redirectToRoute('app_contrat_index');
        }
        
        // Activation de la demande de signature
        $activationResponse = $yousignService->activateSignatureRequest($contrat->getSignatureId());
        if (!isset($activationResponse['id'])) {
            $this->addFlash('error', 'Échec de l\'activation de la demande de signature.');
            return $this->redirectToRoute('app_contrat_index');
        }
        
        $this->addFlash('success', 'La demande de signature a été créée avec succès.');
        return $this->redirectToRoute('app_contrat_index');
    }
    
    
    

}
