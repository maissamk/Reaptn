<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\MaterielventeRepository;
use App\Entity\Materielvente;
use App\Repository\MateriellocationRepository;
use App\Entity\Materiellocation;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\Materielvente2Type;
use App\Form\MateriellocationType;




final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
   //Matériel de vente partie Admin
    #[Route('/admin/tables', name: 'app_tables')]
    public function tablesIndex(MaterielVenteRepository $materielVenteRepository): Response
    {
        $materielventes = $materielVenteRepository->findAll();
        
        return $this->render('admin/materielagricole/tables.html.twig', [
            'materielventes' => $materielventes,
        ]);
    }


    #[Route('/admin/materielvente/new', name: 'admin_materielvente_new', methods: ['GET', 'POST'])]
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
                    return $this->redirectToRoute('admin_materielvente_new');
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                    return $this->redirectToRoute('admin_materielvente_new');
                }
            }else {
                // Image par défaut si aucune image n'est envoyée
                $materielvente->setImage('default.jpg');
            }

            $entityManager->persist($materielvente);
            $entityManager->flush();

            $this->addFlash('success', 'Matériel ajouté avec succès !');

            return $this->redirectToRoute('app_tables', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/materielagricole/new.html.twig', [
            'materielvente' => $materielvente,
            'form' => $form,
        ]);
    }



    #[Route('/{id}/edit', name: 'admin_materielvente_edit', methods: ['GET', 'POST'])]
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
                    return $this->redirectToRoute('admin_materielvente_edit', ['id' => $materielvente->getId()]);
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                    return $this->redirectToRoute('admin_materielvente_edit', ['id' => $materielvente->getId()]);
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Matériel mis à jour avec succès !');

            return $this->redirectToRoute('app_tables', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/materielagricole/modifier.html.twig', [
            'materielvente' => $materielvente,
            'form' => $form,
        ]);
    }



    #[Route('/{id}', name: 'admin_materielvente_delete', methods: ['POST'])]
    public function delete(Request $request, Materielvente $materielvente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materielvente->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($materielvente);
            $entityManager->flush();

            $this->addFlash('success', 'Matériel supprimé avec succès !');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('app_tables', [], Response::HTTP_SEE_OTHER);
    }
    



    #[Route('/admin/materielvente/{id}', name: 'app_materielvente_aff', methods: ['GET'])]
    public function afficher(Materielvente $materielvente): Response
    {
        return $this->render('admin/materielagricole/afficher.html.twig', [
            'materielvente' => $materielvente,
        ]);
    }





// Matériel de Location partie admin 
#[Route('/admin/table', name: 'app_tableslocation')]
    public function tableslocationIndex(MateriellocationRepository $materiellocationRepository): Response
    {
        $materiellocations = $materiellocationRepository->findAll();
        
        return $this->render('admin/materiellocation/tables.html.twig', [
            'materiellocations' => $materiellocations,
        ]);
    }


    #[Route('/admin/materiellocation/new', name: 'admin_materiellocation_new', methods: ['GET', 'POST'])]
    public function newlocation(Request $request, EntityManagerInterface $entityManager): Response
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
                    return $this->redirectToRoute('admin_materiellocation_new');
                } catch (\RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                    return $this->redirectToRoute('admin_materiellocation_new');
                }
            } else {
                // Image par défaut si aucune image n'est envoyée
                $materiellocation->setImage('default.jpg');
            }
    
            $entityManager->persist($materiellocation);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_tableslocation', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('admin/materiellocation/new.html.twig', [
            'materiellocation' => $materiellocation,
            'form' => $form,
        ]);
    }


    #[Route('/{id}/modifier', name: 'admin_materiellocation_edit', methods: ['GET', 'POST'])]
public function editlocation(Request $request, Materiellocation $materiellocation, EntityManagerInterface $entityManager): Response
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
                return $this->redirectToRoute('admin_materiellocation_edit', ['id' => $materiellocation->getId()]);
            } catch (\RuntimeException $e) {
                $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                return $this->redirectToRoute('admin_materiellocation_edit', ['id' => $materiellocation->getId()]);
            }
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_tableslocation', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('admin/materiellocation/modifier.html.twig', [
        'materiellocation' => $materiellocation,
        'form' => $form->createView(),
    ]);
}

#[Route('/{id}/supprimer', name: 'admin_materiellocation_delete', methods: ['POST'])]
    public function deletelocation(Request $request, Materiellocation $materiellocation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiellocation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($materiellocation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_tableslocation', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/admin/location/{id}', name: 'admin_materiellocation_aff', methods: ['GET'])]
    public function afficherlocation(Materiellocation $materiellocation): Response
    {
        return $this->render('admin/materiellocation/afficher.html.twig', [
            'materiellocation' => $materiellocation,
        ]);
    } 
}
