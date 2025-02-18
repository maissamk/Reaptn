<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use App\Entity\Materielvente;

class CartService
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * Ajoute un produit au panier
     */
    public function addToCart(Materielvente $materielvente): void
    {
        $session = $this->requestStack->getSession();
        $cart = $session->get('cart', []); // Récupère le panier de la session ou un tableau vide s'il n'existe pas
    
        if (isset($cart[$materielvente->getId()])) {
            $cart[$materielvente->getId()]['quantity']++;
        } else {
            $cart[$materielvente->getId()] = [
                'id' => $materielvente->getId(),
                'nom' => $materielvente->getNom(),
                'prix' => $materielvente->getPrix(),
                'quantity' => 1,
                'image' => $materielvente->getImage(),  // Si vous avez une image pour le produit
            ];
        }
    
        $session->set('cart', $cart); // Sauvegarde le panier dans la session
    }
    


    /**
     * Récupère le panier
     */
    public function getCart()
    {
        $session = $this->requestStack->getSession();
        return $session->get('cart', []);  // Récupère le panier de la session
    }

    /**
     * Sauvegarde le panier dans la session
     */
    public function saveCart(array $cart)
    {
        $session = $this->requestStack->getSession();
        $session->set('cart', $cart);  // Sauvegarde le panier dans la session
    }

    /**
     * Vide complètement le panier
     */
    public function clearCart(): void
    {
        $session = $this->requestStack->getSession();
        $session->remove('cart');
    }

    /**
     * Supprime un produit du panier
     */
    public function removeFromCart(int $materielId): void
    {
        $cart = $this->getCart();
    
        foreach ($cart as $key => $item) {
            if ($item['id'] === $materielId) {
                unset($cart[$key]);
                break;  // Une fois trouvé et supprimé, on peut arrêter la boucle
            }
        }
    
        $this->saveCart(array_values($cart)); // Réindexe les clés du tableau pour éviter les problèmes
    }
    

public function updateQuantity(int $materielId, int $quantity): void
{
    $cart = $this->getCart();

    if (isset($cart[$materielId])) {
        $cart[$materielId]['quantity'] = $quantity; // Mettre à jour la quantité
        $this->saveCart($cart); // Sauvegarder les modifications dans la session
    }
}

    /**
     * Calcule le total du panier
     */
    public function getTotal(): float
    {
        $session = $this->requestStack->getSession();
        $cart = $session->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['prix'] * $item['quantity'];
        }

        return $total;
    }


    
    /**
     * Retourne la quantité totale d'articles dans le panier
     */
    public function getQuantity(): int
    {
        $session = $this->requestStack->getSession();
        $cart = $session->get('cart', []);
        $quantity = 0;

        foreach ($cart as $item) {
            $quantity += $item['quantity'];
        }

        return $quantity;
    }




}
