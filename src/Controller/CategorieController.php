<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CategorieRepository;

final class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    #[Route('/categorie/new', name: 'app_categorie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('app_categorie', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/categorie/{id}', name: 'app_categorie_show', methods: ['GET'])]
    public function show(int $id, CategorieRepository $categorieRepository): Response
    {
        $categorie = $categorieRepository->find($id);
        if (!$categorie) {
            throw $this->createNotFoundException('Catégorie introuvable.');
        }

        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/categorie/{id}/edit', name: 'app_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(int $id, Request $request, CategorieRepository $categorieRepository, EntityManagerInterface $entityManager): Response
    {
        $categorie = $categorieRepository->find($id);
        if (!$categorie) {
            throw $this->createNotFoundException('Catégorie introuvable.');
        }

        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_categorie', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/categorie/{id}', name: 'app_categorie_delete', methods: ['POST'])]
    public function delete(int $id, Request $request, CategorieRepository $categorieRepository, EntityManagerInterface $entityManager): Response
    {
        $categorie = $categorieRepository->find($id);
        if (!$categorie) {
            throw $this->createNotFoundException('Catégorie introuvable.');
        }

        if ($this->isCsrfTokenValid('delete'.$categorie->getId(), $request->request->get('_token'))) {
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categorie');
    }
}
