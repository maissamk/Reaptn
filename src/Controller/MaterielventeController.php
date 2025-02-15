<?php

namespace App\Controller;

use App\Entity\Materielvente;
use App\Form\Materielvente2Type;
use App\Repository\MaterielventeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/materielvente')]
final class MaterielventeController extends AbstractController
{
    #[Route(name: 'app_materielvente_index', methods: ['GET'])]
    public function index(MaterielventeRepository $materielventeRepository): Response
    {
        return $this->render('materielvente/index.html.twig', [
            'materielventes' => $materielventeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_materielvente_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $materielvente = new Materielvente();
        $form = $this->createForm(Materielvente2Type::class, $materielvente);
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
                    $materielvente->setImage($filename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                    return $this->redirectToRoute('app_materielvente_new');
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                    return $this->redirectToRoute('app_materielvente_new');
                }
            }

            $entityManager->persist($materielvente);
            $entityManager->flush();

            $this->addFlash('success', 'Matériel ajouté avec succès !');

            return $this->redirectToRoute('app_materielvente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('materielvente/new.html.twig', [
            'materielvente' => $materielvente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materielvente_show', methods: ['GET'])]
    public function show(Materielvente $materielvente): Response
    {
        return $this->render('materielvente/show.html.twig', [
            'materielvente' => $materielvente,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_materielvente_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Materielvente $materielvente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Materielvente2Type::class, $materielvente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('image')->getData();

            if ($file) {
                $filename = md5(uniqid()) . '.' . $file->guessExtension();

                try {
                    $directory = $this->getParameter('images_directory');

                    if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
                        throw new \RuntimeException(sprintf('Impossible de créer le répertoire "%s"', $directory));
                    }

                    $file->move($directory, $filename);
                    $materielvente->setImage($filename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                    return $this->redirectToRoute('app_materielvente_edit', ['id' => $materielvente->getId()]);
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                    return $this->redirectToRoute('app_materielvente_edit', ['id' => $materielvente->getId()]);
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Matériel mis à jour avec succès !');

            return $this->redirectToRoute('app_materielvente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('materielvente/edit.html.twig', [
            'materielvente' => $materielvente,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materielvente_delete', methods: ['POST'])]
    public function delete(Request $request, Materielvente $materielvente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materielvente->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($materielvente);
            $entityManager->flush();

            $this->addFlash('success', 'Matériel supprimé avec succès !');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('app_materielvente_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/materiels', name: 'materiels_list')]
    public function showMateriels(): Response
    {
        $materiels = $this->getDoctrine()->getRepository(Materielvente::class)->findAll();
        
        return $this->render('panier/index.html.twig', [
            'materiels' => $materiels,
        ]);
    }
}
