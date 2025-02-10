<?php

namespace App\Controller;

use App\Entity\ParcelleProprietes;
use App\Form\ParcelleProprietesType;
use App\Repository\ParcelleProprietesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/parcelle/proprietes')]
final class ParcelleProprietesController extends AbstractController
{
    #[Route(name: 'app_parcelle_proprietes_index', methods: ['GET'])]
    public function index(ParcelleProprietesRepository $parcelleProprietesRepository): Response
    {
        return $this->render('parcelle_proprietes/index.html.twig', [
            'parcelle_proprietes' => $parcelleProprietesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_parcelle_proprietes_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $parcellePropriete = new ParcelleProprietes();
        $form = $this->createForm(ParcelleProprietesType::class, $parcellePropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($parcellePropriete);
            $entityManager->flush();

            return $this->redirectToRoute('app_parcelle_proprietes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('parcelle_proprietes/new.html.twig', [
            'parcelle_propriete' => $parcellePropriete,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_parcelle_proprietes_show', methods: ['GET'])]
    public function show(ParcelleProprietes $parcellePropriete): Response
    {
        return $this->render('parcelle_proprietes/show.html.twig', [
            'parcelle_propriete' => $parcellePropriete,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_parcelle_proprietes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ParcelleProprietes $parcellePropriete, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParcelleProprietesType::class, $parcellePropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_parcelle_proprietes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('parcelle_proprietes/edit.html.twig', [
            'parcelle_propriete' => $parcellePropriete,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_parcelle_proprietes_delete', methods: ['POST'])]
    public function delete(Request $request, ParcelleProprietes $parcellePropriete, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$parcellePropriete->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($parcellePropriete);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_parcelle_proprietes_index', [], Response::HTTP_SEE_OTHER);
    }
}
