<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Entity\Commande;
use App\Entity\Paiement;
use App\Form\PaiementType;
use App\Repository\CommandeRepository;
use App\Repository\PaiementRepository;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaiementController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private CartService $cartService;

    public function __construct(EntityManagerInterface $entityManager, CartService $cartService)
    {
        $this->entityManager = $entityManager;
        $this->cartService = $cartService;
    }

    #[Route('/paiement/{id}', name: 'paiement_afficher', methods: ['GET', 'POST'])]
    public function showPaiement(int $id, CommandeRepository $commandeRepository, Request $request): Response
    {
        $commande = $commandeRepository->find($id);
        if (!$commande) {
            throw $this->createNotFoundException('Commande introuvable.');
        }

        $paiement = new Paiement();
        $paiement->setCommande($commande);
    
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paiement->setDatePaiement(new \DateTime());
            $this->entityManager->persist($paiement);
            $this->entityManager->flush();
    
            return $this->redirectToRoute('paiement_confirmation', ['id' => $paiement->getId()]);
        }

        return $this->render('paiement/index.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/paiement/{id}/traitement', name: 'paiement_process', methods: ['POST'])]
    public function processPaiement(int $id, Request $request, CommandeRepository $commandeRepository): Response
    {
        $commande = $commandeRepository->find($id);
        if (!$commande) {
            throw $this->createNotFoundException('Commande non trouvée.');
        }

        $methodePaiement = $request->request->get('methodePaiement');
        if (empty($methodePaiement)) {
            $this->addFlash('error', 'Veuillez sélectionner une méthode de paiement.');
            return $this->redirectToRoute('paiement_afficher', ['id' => $id]);
        }

        $paiement = new Paiement();
        $paiement->setCommande($commande);
        $paiement->setMethodePaiement($methodePaiement);
        $paiement->setDatePaiement(new \DateTime());

        $livraison = new Livraison();
        $livraison->setCommande($commande);
        $livraison->setAdresse('Adresse de livraison par défaut');
        $livraison->setDateLiv((new \DateTime())->modify('+3 days'));
        $livraison->setStatus('Validation en cours');

        $commande->setPaiement($paiement);
        $commande->setLivraison($livraison);

        $this->entityManager->persist($paiement);
        $this->entityManager->persist($livraison);
        $this->entityManager->flush();

        return $this->redirectToRoute('paiement_confirmation', ['id' => $paiement->getId()]);
    }

    #[Route('/paiement/confirmation/{id}', name: 'paiement_confirmation', methods: ['GET'])]
    public function confirmation(int $id, PaiementRepository $paiementRepository): Response
    {
        $paiement = $paiementRepository->find($id);
        if (!$paiement) {
            throw $this->createNotFoundException('Le paiement demandé n\'existe pas.');
        }

        $commande = $paiement->getCommande();
        $livraison = $commande->getLivraison();
        $current_step = match ($livraison->getStatus()) {
            'Validation en cours' => 1,
            'En préparation' => 2,
            'Expédiée' => 3,
            'Livrée' => 4,
            default => 0,
        };

        return $this->render('paiement/confirmation.html.twig', [
            'paiement' => $paiement,
            'livraison' => $livraison,
            'current_step' => $current_step,
        ]);
    }
}
