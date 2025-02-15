<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\ParcelleProprietes;
use App\Form\ParcelleProprietesType;
use App\Repository\ParcelleProprietesRepository;
use App\Entity\Contrat;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
   
    //route vers parcelle prop
    #[Route('/admin/parcelle/proprietes', name: 'admin_parcelle_proprietes_index', methods: ['GET'])]
    public function adminIndex(ParcelleProprietesRepository $parcelleProprietesRepository): Response
    {
        return $this->render('admin/parcelle_proprietes/index_back.html.twig', [
            'parcelle_proprietes' => $parcelleProprietesRepository->findAll(),
        ]);
    }
 // route crud parcelle







///// new 
// new route

#[Route('/admin/parcelle/proprietes/new', name: 'admin_parcelle_proprietes_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $parcellePropriete = new ParcelleProprietes();  // Ensure you're creating a new instance here
    $form = $this->createForm(ParcelleProprietesType::class, $parcellePropriete);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $file */
        $file = $form->get('image')->getData();  // Get the uploaded file

        if ($file) {
            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            try {
                $directory = $this->getParameter('images_directory'); // Get directory parameter

                if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
                    throw new \RuntimeException(sprintf('Unable to create the directory "%s"', $directory));
                }

                $file->move($directory, $filename);  // Move the uploaded file
                $parcellePropriete->setImage($filename);  // Set the filename in the entity

            } catch (FileException $e) {
                $this->addFlash('error', 'Error uploading the image: ' . $e->getMessage());
                return $this->redirectToRoute('admin_parcelle_proprietes_new');
            } catch (\RuntimeException $e) {
                $this->addFlash('error', 'Error creating the images directory.');
                return $this->redirectToRoute('admin_parcelle_proprietes_new');
            }
        }

        // Persist the entity and save to the database
        $entityManager->persist($parcellePropriete);
        $entityManager->flush();

        $this->addFlash('success', 'Parcelle added successfully!');

        return $this->redirectToRoute('admin_parcelle_proprietes_index');
    }

    return $this->render('admin/parcelle_proprietes/new_back.html.twig', [
        'parcelle_propriete' => $parcellePropriete,
        'form' => $form->createView(),
    ]);
}






#[Route('/admin/parcelle/proprietes/{id}', name: 'admin_parcelle_proprietes_show', methods: ['GET'])]
public function showBack(ParcelleProprietes $parcellePropriete): Response {
    return $this->render('admin/parcelle_proprietes/show_back.html.twig', [
        'parcelle_propriete' => $parcellePropriete,
    ]);
}


// edit route 
#[Route('/admin/parcelle/proprietes/{id}/edit', name: 'admin_parcelle_proprietes_edit', methods: ['GET', 'POST'])]
public function editBack(Request $request, ParcelleProprietes $parcellePropriete, EntityManagerInterface $entityManager): Response {
    $form = $this->createForm(ParcelleProprietesType::class, $parcellePropriete);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $file */
        $file = $form->get('image')->getData(); // Assurez-vous d'avoir un champ 'image' dans votre formulaire

        if ($file) {
            $filename = md5(uniqid()) . '.' . $file->guessExtension(); // Générer un nom de fichier unique

            try {
                // Spécifiez le répertoire où les fichiers doivent être enregistrés
                $directory = $this->getParameter('images_directory'); // Définir ce paramètre dans votre configuration Symfony

                if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
                    throw new \RuntimeException(sprintf('Impossible de créer le répertoire "%s"', $directory));
                }

                // Déplacer le fichier dans le répertoire prévu
                $file->move($directory, $filename);
                $parcellePropriete->setImage($filename); // Assurez-vous que 'setImage' existe dans l'entité
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                return $this->redirectToRoute('admin_parcelle_proprietes_edit', ['id' => $parcellePropriete->getId()]);
            } catch (\RuntimeException $e) {
                $this->addFlash('error', 'Erreur lors de la création du dossier d\'images.');
                return $this->redirectToRoute('admin_parcelle_proprietes_edit', ['id' => $parcellePropriete->getId()]);
            }
        }

        // Sauvegarde des modifications dans la base de données
        $entityManager->flush();

        $this->addFlash('success', 'Parcelle modifiée avec succès !');

        // Redirection vers la liste des parcelles
        return $this->redirectToRoute('admin_parcelle_proprietes_index');
    }

    return $this->render('admin/parcelle_proprietes/edit_back.html.twig', [
        'parcelle_propriete' => $parcellePropriete,
        'form' => $form->createView(),
    ]);
}

// delete route
#[Route('/admin/parcelle/proprietes/{id}/delete', name: 'admin_parcelle_proprietes_delete', methods: ['POST'])]
public function deleteBack(Request $request, ParcelleProprietes $parcellePropriete, EntityManagerInterface $entityManager): Response {
    if ($this->isCsrfTokenValid('delete'.$parcellePropriete->getId(), $request->request->get('_token'))) {
        
        // Supprimer tous les contrats liés à cette parcelle
        $contrats = $entityManager->getRepository(Contrat::class)->findBy(['parcelle' => $parcellePropriete]);
        foreach ($contrats as $contrat) {
            $entityManager->remove($contrat);
        }

        // Maintenant, on peut supprimer la parcelle
        $entityManager->remove($parcellePropriete);
        $entityManager->flush();
    }

    return $this->redirectToRoute('admin_parcelle_proprietes_index');
}



    // route vers contrat

// new contrat 



#[Route('/admin/contrat/new', name: 'admin_contrat_new', methods: ['GET', 'POST'])]
public function newContrat(Request $request, EntityManagerInterface $entityManager): Response
{
    $contrat = new Contrat();
    $form = $this->createForm(ContratType::class, $contrat);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($contrat);
        $entityManager->flush();

        $this->addFlash('success', 'Contrat ajouté avec succès !');

        return $this->redirectToRoute('admin_contrat_index');
    }

    return $this->render('admin/contrat/new_back.html.twig', [
        'contrat' => $contrat,
        'form' => $form->createView(),
    ]);
}









    #[Route('/admin/contrat', name: 'admin_contrat_index', methods: ['GET'])]
    public function admincontratIndex(ContratRepository $contratRepository): Response
    {
        return $this->render('admin/contrat/index_back.html.twig', [
            'contrats' => $contratRepository->findAll(), // ✔️ Correct
        ]);
    }


    // route crud backoffice 


    #[Route('/admin/contrat', name: 'admin_contrat_index', methods: ['GET'])]
    public function indexBack(ContratRepository $contratRepository): Response
    {
        return $this->render('admin/contrat/index_back.html.twig', [
            'contrats' => $contratRepository->findAll(),
        ]);
    }



 

    #[Route('/admin/contrat/{id}', name: 'admin_contrat_show', methods: ['GET'])]
    public function showBackconrat(Contrat $contrat): Response
    {
        return $this->render('admin/contrat/show_back.html.twig', [
            'contrat' => $contrat, // Passez un seul contrat ici
        ]);
    }
    





    #[Route('/{id}/edit', name: 'admin_contrat_edit', methods: ['GET', 'POST'])]
    public function editBackconrat(Request $request, Contrat $contrat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('admin_contrat_index');
        }

        return $this->render('admin/contrat/edit_back.html.twig', [
            'contrat' => $contrat,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_contrat_delete', methods: ['POST'])]
    public function deleteBackconrat(Request $request, Contrat $contrat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $contrat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($contrat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_contrat_index');
    }

   
    
}
