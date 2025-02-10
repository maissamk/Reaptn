<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/shop', name: 'app_shop')]
    public function shop(): Response
    {
        return $this->render('page/buyland.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/shopdetail', name: 'app_shop_detail')]
    public function shopdetail(): Response
    {
        return $this->render('page/shop-detail.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/cart', name: 'app_cart')]
    public function cart(): Response
    {
        return $this->render('page/cart.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/chackout', name: 'app_chackout')]
    public function chackout(): Response
    {
        return $this->render('page/chackout.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/testimonial', name: 'app_testimonial')]
    public function testimonial(): Response
    {
        return $this->render('page/testimonial.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/404', name: 'app_404')]
    public function error(): Response
    {
        return $this->render('page/404.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    #[Route('/offre', name: 'app_offre')]
    public function offre(): Response
    {
        return $this->render('offre/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    
}
