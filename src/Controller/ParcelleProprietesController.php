<?php

namespace App\Controller;

use App\Entity\ParcelleProprietes;
use App\Form\ParcelleProprietesType;
use App\Repository\ParcelleProprietesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;

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

        // Vérifier si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();  // Récupérer l'image

            // Si un fichier a été téléchargé
            if ($file) {
                // Validation de la taille et des dimensions de l'image
                $errors = $this->validateImage($file);

                if (!empty($errors)) {
                    // Si des erreurs de validation existent, afficher un message d'erreur
                    return $this->render('parcelle_proprietes/new.html.twig', [
                        'form' => $form->createView(),
                        'error_message' => $errors,
                    ]);
                }

                // Générer un nom de fichier unique pour éviter les conflits
                $filename = uniqid() . '.' . $file->guessExtension();

                try {
                    // Déplacer le fichier dans le répertoire uploads
                    $file->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads/images/',
                        $filename
                    );
                    // Sauvegarder le nom du fichier dans la base de données
                    $parcellePropriete->setImage($filename);
                } catch (FileException $e) {
                    // Gérer les erreurs de déplacement du fichier
                    return $this->render('parcelle_proprietes/new.html.twig', [
                        'form' => $form->createView(),
                        'error_message' => 'Une erreur est survenue lors de l\'enregistrement de l\'image.',
                    ]);
                }
            }else {
                // Image par défaut si aucune image n'est envoyée
                $parcellePropriete->setImage('default.jpg');
            }
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
                    $parcellePropriete->setImage($filename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                    return $this->redirectToRoute('app_parcelle_proprietes_edit', ['id' => $parcellePropriete->getId()]);
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                    return $this->redirectToRoute('app_parcelle_proprietes_edit', ['id' => $parcellePropriete->getId()]);
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Parcelle mise à jour avec succès !');

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
        if ($this->isCsrfTokenValid('delete' . $parcellePropriete->getId(), $request->request->get('_token'))) {
            $entityManager->remove($parcellePropriete);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_parcelle_proprietes_index', [], Response::HTTP_SEE_OTHER);
    }

    // Validation de l'image (taille et dimensions)
    private function validateImage(UploadedFile $file): array
    {
        $errors = [];

        // Vérification de la taille (2 Mo max)
        $maxSize = 2 * 1024 * 1024; // 2 Mo
        if ($file->getSize() > $maxSize) {
            $errors[] = 'L\'image ne doit pas dépasser 2 Mo.';
        }

        // Vérification des dimensions (2000x2000 pixels max)
        $image = getimagesize($file->getPathname());
        if ($image) {
            $width = $image[0];
            $height = $image[1];
            $maxWidth = 2000;
            $maxHeight = 2000;
            if ($width > $maxWidth || $height > $maxHeight) {
                $errors[] = "L'image ne doit pas dépasser {$maxWidth}x{$maxHeight} pixels.";
            }
        }

        return $errors;
    }


}