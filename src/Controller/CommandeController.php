<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Livraison;

#[Route('/commande')]
final class CommandeController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route(name: 'app_commande_index', methods: ['GET'])]
    public function index(CommandeRepository $commandeRepository): Response
    {
        $commandes = $commandeRepository->findAll();

        // Filtrer les commandes qui ont un statut de livraison dans les 4 statuts spécifiés
        $validStatuses = ['Validation en cours', 'En préparation', 'Expédiée', 'Livrée'];
        $filteredCommandes = array_filter($commandes, function ($commande) use ($validStatuses) {
            return $commande->getLivraison() !== null && in_array($commande->getLivraison()->getStatus(), $validStatuses);
        });

        // Passer les commandes filtrées à la vue
        return $this->render('commande/index.html.twig', [
            'commandes' => $filteredCommandes,
        ]);
    }

  // Route pour mettre à jour le statut de la livraison
  #[Route('/livraison/{id}/update-status', name: 'livraison_update_status')]
  public function updateLivraisonStatus(Request $request, Livraison $livraison): Response
  {
      // Récupérer le statut du formulaire
      $newStatus = $request->request->get('status');

      if ($newStatus) {
          // Logique pour définir les étapes
          switch ($newStatus) {
              case 'Validation en cours':
                  $current_step = 1;
                  break;
              case 'En préparation':
                  $current_step = 2;
                  break;
              case 'Expédiée':
                  $current_step = 3;
                  break;
              case 'Livrée':
                  $current_step = 4;
                  break;
              default:
                  $current_step = 0; // Statut invalide
                  break;
          }

          // Appliquer le nouveau statut
          $livraison->setStatus($newStatus);

          // Sauvegarder la modification
          $this->entityManager->flush(); // Utiliser l'EntityManager injecté pour sauvegarder

          $this->addFlash('success', 'Le statut de la livraison a été mis à jour avec succès.');
      } else {
          $this->addFlash('error', 'Le statut sélectionné est invalide.');
      }

      // Rediriger vers la page des commandes après la mise à jour
      return $this->redirectToRoute('app_commande_index');
  }
    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/paiement/{id}', name: 'paiement')]
    public function paiement(int $id, CommandeRepository $commandeRepository): Response
    {
        // Récupérer la commande depuis le repository injecté
        $commande = $commandeRepository->find($id);

        if (!$commande) {
            throw $this->createNotFoundException('Commande non trouvée.');
        }

        // Afficher la page de paiement
        return $this->render('paiement/index.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/commande/{id}/edit', name: 'commande_edit')]
    public function edit(Request $request, Commande $commande): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commande_index');
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/commande/{id}/delete', name: 'commande_delete')]
    public function delete(Commande $commande): Response
    {
        // Vérifier si la commande a une livraison et si son statut n'est pas "Livrée"
        if ($commande->getLivraison() && $commande->getLivraison()->getStatus() !== 'Livrée') {
            $this->addFlash('error', 'Vous ne pouvez supprimer une commande que si elle est livrée.');
            return $this->redirectToRoute('app_commande_index');
        }
    
        // Supprimer la commande
        $this->entityManager->remove($commande);
        $this->entityManager->flush();
    
        // Ajouter un message de succès
        $this->addFlash('success', 'Commande supprimée avec succès.');
    
        return $this->redirectToRoute('app_commande_index');
    }
    
    

    

    #[Route('/confirmation/{id}', name: 'confirmation_commande')]
    public function confirmation(Commande $commande): Response
    {
        if (!$commande) {
            throw $this->createNotFoundException('Commande non trouvée.');
        }

        return $this->render('commande/confirmation.html.twig', [
            'commande' => $commande,
        ]);
    }
}
