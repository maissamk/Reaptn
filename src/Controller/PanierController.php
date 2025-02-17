<?php
namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Materielvente;
use App\Service\CartService;
use App\Entity\Commande;


class PanierController extends AbstractController
{
    private CartService $cartService;

    private EntityManagerInterface $entityManager;

    public function __construct(CartService $cartService, EntityManagerInterface $entityManager)
    {
        $this->cartService = $cartService;
        $this->entityManager = $entityManager;
    }


    #[Route('/ajouter/{id}', name: 'add_to_cart')]
    public function addToCart(Materielvente $materielvente, SessionInterface $session): RedirectResponse
    {
        $cart = $session->get('cart', []);
    
        // Vérifie si le produit est déjà dans le panier
        $found = false;
        foreach ($cart as &$item) {
            if ($item['id'] === $materielvente->getId()) {
                $item['quantity']++; // Augmente la quantité
                $found = true;
                break;
            }
        }
    
        // Si l'article n'existe pas, on l'ajoute
        if (!$found) {
            $cart[] = [
                'id' => $materielvente->getId(),
                'nom' => $materielvente->getNom(),
                'prix' => $materielvente->getPrix(),
                'image' => $materielvente->getImage(),
                'quantity' => 1  
            ];
        }
    
        $session->set('cart', $cart);
        $this->addFlash('success', 'Produit ajouté au panier !');
    
        return $this->redirectToRoute('panier_afficher');
    }
    
 
    
    #[Route('/panier', name: 'panier_afficher')]
    public function showCart(): Response
    {
        // Récupère le panier et le total
        $cart = $this->cartService->getCart();  
        $total = $this->cartService->getTotal();  
        $cartQuantity = $this->cartService->getQuantity(); // Récupération correcte
    
        // Crée une commande fictive pour cet exemple
        $commande = new Commande();
        $commande->setDateCommande(new \DateTime());
        $commande->setTotale($total);
        $commande->setQuantite($cartQuantity); // Utilisation correcte de la quantité
    
        // Sauvegarde la commande
        $this->entityManager->persist($commande);
        $this->entityManager->flush();  
    
        // Passe les données nécessaires à la vue
        return $this->render('panier/index.html.twig', [
            'cart' => $cart,  // Passe le panier à la vue
            'total' => $total,  // Passe le total à la vue
            'cartItemCount' => $cartQuantity, // Ajout de la variable
            'commande' => $commande,  // Passe la commande à la vue
        ]);
    }
    
    

    #[Route('/panier/mettre-a-jour-quantite/{id}', name: 'panier_update_quantity', methods: ['POST'])]
    public function updateQuantity(int $id, Request $request, CartService $cartService): JsonResponse
    {
        $quantity = (int) $request->get('quantity');
    
        // Validation de la quantité
        if ($quantity <= 0) {
            return $this->json(['status' => 'error', 'message' => 'Quantité invalide'], 400);
        }
    
        $cartService->updateQuantity($id, $quantity);
    
        return $this->json(['status' => 'success']);
    }
    

    
    #[Route('/panier/supprimer/{id}', name: 'panier_supprimer', methods: ['POST'])]
    public function removeFromCart(int $id, CartService $cartService): RedirectResponse
    {
        $cartService->removeFromCart($id);
        return $this->redirectToRoute('panier_afficher');
    }
    



    
}
