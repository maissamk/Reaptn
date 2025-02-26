<?php

namespace App\Controller;
use App\Entity\Employe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;

use App\Repository\MaterielventeRepository;
use App\Entity\Materielvente;
use App\Repository\MateriellocationRepository;
use App\Entity\Materiellocation;
use App\Form\Materielvente2Type;
use App\Form\MateriellocationType;

use App\Entity\ParcelleProprietes;
use App\Form\ParcelleProprietesType;
use App\Repository\ParcelleProprietesRepository;

use App\Entity\Contrat;
use App\Form\ContratType;
use App\Repository\ContratRepository;

use App\Entity\User;
use App\Form\ProfileType;

use App\Entity\Order;
use App\Entity\Product;
use App\Entity\ProductType as ProductTypeEntity;
use App\Entity\Stock;
use App\Form\ProductType;
use App\Form\ProductTypeType;
use App\Form\StockType;
use App\Repository\OrderRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Repository\UserRepository;


/*ghhghgggghhghghghggggghghggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg*/
#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[Route('/admin/offre', name: 'admin_offre_index')]
    public function offreIndex(): Response
    {
        return $this->render('admin/offre/index_back.html.twig');
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
    public function newmv(Request $request, EntityManagerInterface $entityManager): Response
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



    #[Route('/{id}/edit1', name: 'admin_materielvente_edit', methods: ['GET', 'POST'])]
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



    #[Route('/materiel/{id}', name: 'admin_materielvente_delete', methods: ['POST'])]
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
        }else {
            // Image par défaut si aucune image n'est envoyée
            $parcellePropriete->setImage('default.jpg');
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
    





    #[Route('admin/{id}/edit', name: 'admin_contrat_edit', methods: ['GET', 'POST'])]
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






#adminproducts
#[Route('/product', name: 'admin_dashboard')]
    public function indexproduit(EntityManagerInterface $entityManager): Response
    {
        $products = $entityManager->getRepository(Product::class)->findAll();
        $productTypes = $entityManager->getRepository(ProductTypeEntity::class)->findAll();
        $stocks = $entityManager->getRepository(Stock::class)->findAll();
        $orders = $entityManager->getRepository(Order::class)->findAll();  // Updated to use Order::class

        return $this->render('temp/admin/dashboard.html.twig', [
            'products' => $products,
            'productTypes' => $productTypes,
            'stocks' => $stocks,
            'orders' => $orders,
        ]);
    }

    #[Route('/products', name: 'admin_products')]
    public function products(EntityManagerInterface $entityManager): Response
    {
        $products = $entityManager->getRepository(Product::class)->findAll();
        return $this->render('temp/admin/products.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/product/new', name: 'admin_product_new')]
    public function newProduct(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('product_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Error uploading image');
                    return $this->redirectToRoute('admin_products');
                }

                $product->setImage('uploads/products/'.$newFilename);
            }

            $entityManager->persist($product);
            $entityManager->flush();

            $this->addFlash('success', 'Product created successfully!');
            return $this->redirectToRoute('admin_products');
        }

        return $this->render('temp/admin/product_form.html.twig', [
            'form' => $form->createView(),
            'product' => null,
        ]);
    }

    #[Route('/product/edit/{id}', name: 'admin_product_edit')]
    public function editProduct(int $id, Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    // Delete old image if exists
                    $oldImage = $product->getImage();
                    if ($oldImage) {
                        $oldImagePath = $this->getParameter('kernel.project_dir').'/public/'.$oldImage;
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    $imageFile->move(
                        $this->getParameter('product_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Error uploading image');
                    return $this->redirectToRoute('admin_products');
                }

                $product->setImage('uploads/products/'.$newFilename);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Product updated successfully!');
            return $this->redirectToRoute('admin_products');
        }

        return $this->render('temp/admin/product_form.html.twig', [
            'form' => $form->createView(),
            'product' => $product,
        ]);
    }

    #[Route('/product/delete/{id}', name: 'admin_product_delete')]
    public function deleteProduct(int $id, EntityManagerInterface $entityManager): Response
    {
        $product = $entityManager->getRepository(Product::class)->find($id);
        if ($product) {
            $entityManager->remove($product);
            $entityManager->flush();
            $this->addFlash('success', 'Product deleted successfully!');
        }

        return $this->redirectToRoute('admin_products');
    }

    #[Route('/product-types', name: 'admin_product_types')]
    public function productTypes(EntityManagerInterface $entityManager): Response
    {
        $types = $entityManager->getRepository(ProductTypeEntity::class)->findAll();
        return $this->render('temp/admin/product_types.html.twig', [
            'types' => $types,
        ]);
    }

    #[Route('/product-type/new', name: 'admin_product_type_new')]
    public function newProductType(Request $request, EntityManagerInterface $entityManager): Response
    {
        $type = new ProductTypeEntity();
        $form = $this->createForm(ProductTypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($type);
            $entityManager->flush();

            $this->addFlash('success', 'Product type created successfully!');
            return $this->redirectToRoute('admin_product_types');
        }

        return $this->render('temp/admin/product_type_form.html.twig', [
            'form' => $form->createView(),
            'type' => null,
        ]);
    }

    #[Route('/product-type/edit/{id}', name: 'admin_product_type_edit')]
    public function editProductType(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $type = $entityManager->getRepository(ProductTypeEntity::class)->find($id);
        if (!$type) {
            throw $this->createNotFoundException('Product type not found');
        }

        $form = $this->createForm(ProductTypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Product type updated successfully!');
            return $this->redirectToRoute('admin_product_types');
        }

        return $this->render('temp/admin/product_type_form.html.twig', [
            'form' => $form->createView(),
            'type' => $type,
        ]);
    }

    #[Route('/product-type/delete/{id}', name: 'admin_product_type_delete')]
    public function deleteProductType(int $id, EntityManagerInterface $entityManager): Response
    {
        $type = $entityManager->getRepository(ProductTypeEntity::class)->find($id);
        if ($type) {
            $entityManager->remove($type);
            $entityManager->flush();
            $this->addFlash('success', 'Product type deleted successfully!');
        }

        return $this->redirectToRoute('admin_product_types');
    }

    #[Route('/stocks', name: 'admin_stocks')]
    public function stocks(EntityManagerInterface $entityManager): Response
    {
        $stocks = $entityManager->getRepository(Stock::class)->findAll();
        return $this->render('temp/admin/stocks.html.twig', [
            'stocks' => $stocks,
        ]);
    }

    #[Route('/stock/new', name: 'admin_stock_new')]
    public function newStock(Request $request, EntityManagerInterface $entityManager): Response
    {
        $stock = new Stock();
        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($stock);
            $entityManager->flush();

            $this->addFlash('success', 'Stock entry created successfully!');
            return $this->redirectToRoute('admin_stocks');
        }

        return $this->render('temp/admin/stock_form.html.twig', [
            'form' => $form->createView(),
            'stock' => null,
        ]);
    }

    #[Route('/stock/edit/{id}', name: 'admin_stock_edit')]
    public function editStock(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $stock = $entityManager->getRepository(Stock::class)->find($id);
        if (!$stock) {
            throw $this->createNotFoundException('Stock not found');
        }

        $form = $this->createForm(StockType::class, $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Stock entry updated successfully!');
            return $this->redirectToRoute('admin_stocks');
        }

        return $this->render('temp/admin/stock_form.html.twig', [
            'form' => $form->createView(),
            'stock' => $stock,
        ]);
    }

    #[Route('/stock/delete/{id}', name: 'admin_stock_delete')]
    public function deleteStock(int $id, EntityManagerInterface $entityManager): Response
    {
        $stock = $entityManager->getRepository(Stock::class)->find($id);
        if ($stock) {
            $entityManager->remove($stock);
            $entityManager->flush();
            $this->addFlash('success', 'Stock entry deleted successfully!');
        }

        return $this->redirectToRoute('admin_stocks');
    }

    #[Route('/orders', name: 'app_admin_orders')]
    public function orders(OrderRepository $orderRepository): Response
    {
        return $this->render('temp/admin/order.html.twig', [
            'orders' => $orderRepository->findAll(),
        ]);
    }

    #[Route('/order/{id}', name: 'app_admin_order_detail')]
    public function orderDetail(Order $order): Response
    {
        return $this->render('temp/admin/order_detail.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/order/{id}/status', name: 'app_admin_order_status', methods: ['POST'])]
    public function updateOrderStatus(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        $status = $request->request->get('status');
        if ($status) {
            $order->setStatus($status);
            $entityManager->flush();
            $this->addFlash('success', 'Order status updated successfully');
        }
        
        return $this->redirectToRoute('app_admin_orders');
    }
}

