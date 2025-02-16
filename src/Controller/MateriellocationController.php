<?php

namespace App\Controller;

use App\Entity\Materiellocation;
use App\Form\MateriellocationType;
use App\Repository\MateriellocationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/materiellocation')]
final class MateriellocationController extends AbstractController
{
    #[Route(name: 'app_materiellocation_index', methods: ['GET'])]
    public function index(MateriellocationRepository $materiellocationRepository): Response
    {
        return $this->render('materiellocation/index.html.twig', [
            'materiellocations' => $materiellocationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_materiellocation_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $materiellocation = new Materiellocation();
    $form = $this->createForm(MateriellocationType::class, $materiellocation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $file */
        $file = $form->get('image')->getData();

        if ($file) {
            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            try {
                $directory = $this->getParameter('images_directory');

                // Vérifie si le dossier existe, sinon le créer
                if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
                    throw new \RuntimeException(sprintf('Impossible de créer le répertoire "%s"', $directory));
                }

                $file->move($directory, $filename);
                $materiellocation->setImage($filename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                return $this->redirectToRoute('app_materiellocation_new');
            } catch (\RuntimeException $e) {
                $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                return $this->redirectToRoute('app_materiellocation_new');
            }
        } else {
            // Image par défaut si aucune image n'est envoyée
            $materiellocation->setImage('default.jpg');
        }

        $entityManager->persist($materiellocation);
        $entityManager->flush();

        return $this->redirectToRoute('app_materiellocation_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('materiellocation/new.html.twig', [
        'materiellocation' => $materiellocation,
        'form' => $form,
    ]);
}


    #[Route('/{id}', name: 'app_materiellocation_show', methods: ['GET'])]
    public function show(Materiellocation $materiellocation): Response
    {
        return $this->render('materiellocation/show.html.twig', [
            'materiellocation' => $materiellocation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_materiellocation_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Materiellocation $materiellocation, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(MateriellocationType::class, $materiellocation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $file */
        $file = $form->get('image')->getData();

        if ($file) {
            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            try {
                $directory = $this->getParameter('images_directory');

                // Vérifie si le dossier existe, sinon le créer
                if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
                    throw new \RuntimeException(sprintf('Impossible de créer le répertoire "%s"', $directory));
                }

                // Déplace l'image dans le répertoire
                $file->move($directory, $filename);
                $materiellocation->setImage($filename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                return $this->redirectToRoute('app_materiellocation_edit', ['id' => $materiellocation->getId()]);
            } catch (\RuntimeException $e) {
                $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                return $this->redirectToRoute('app_materiellocation_edit', ['id' => $materiellocation->getId()]);
            }
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_materiellocation_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('materiellocation/edit.html.twig', [
        'materiellocation' => $materiellocation,
        'form' => $form->createView(),
    ]);
}


    #[Route('/{id}', name: 'app_materiellocation_delete', methods: ['POST'])]
    public function delete(Request $request, Materiellocation $materiellocation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiellocation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($materiellocation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_materiellocation_index', [], Response::HTTP_SEE_OTHER);
    }
}
