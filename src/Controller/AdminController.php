<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\ProductType as ProductTypeEntity;
use App\Entity\Stock;
use App\Form\ProductType;
use App\Form\ProductTypeType;
use App\Form\StockType;
use App\Service\ExcelApiService;
use App\Service\PDFReportService;
use App\Service\ChartPDFService;
use App\Service\ReportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use FPDF;
use App\Repository\ProductRepository;
use App\Repository\StockRepository;

#[Route('/admin')]
class AdminController extends AbstractController
{
<<<<<<< HEAD
    private $excelService;
    private $entityManager;
    private $pdfService;
    private $chartPdfService;

    public function __construct(
        ExcelApiService $excelService, 
        EntityManagerInterface $entityManager, 
        PDFReportService $pdfService,
        ChartPDFService $chartPdfService
    ) {
        $this->excelService = $excelService;
        $this->entityManager = $entityManager;
        $this->pdfService = $pdfService;
        $this->chartPdfService = $chartPdfService;
    }

    #[Route('/', name: 'admin_dashboard')]
    public function index(EntityManagerInterface $entityManager): Response
=======
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

   //user
    
    #[Route('/admin/users', name: 'admin_users')]
    public function listUsers(EntityManagerInterface $em)
    {
        // Fetch all users from the database
        $users = $em->getRepository(User::class)->findAll();

        return $this->render('admin/user/users.html.twig', [
            'users' => $users,
        ]);
    }
    #[Route('/admin/user/edit/{id}', name: 'admin_user_edit')]
    public function editUser($id, Request $request, EntityManagerInterface $em, SluggerInterface $slugger)
    {
        // Fetch the user by ID
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            $this->addFlash('error', 'User not found');
            return $this->redirectToRoute('admin_users');
        }

        // Create the form for editing the user
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload for the avatar
            $avatarFile = $form->get('avatar')->getData();

            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

                try {
                    // Move the uploaded avatar to the desired directory
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'), // Directory from `services.yaml`
                        $newFilename
                    );
                    $user->setAvatar($newFilename); // Set the avatar filename in the user entity
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload the avatar.');
                }
            }

            // Save the updated user data
            $em->flush();
            $this->addFlash('success', 'User updated successfully!');
            return $this->redirectToRoute('admin_users');
        }

        // Render the form to edit the user
        return $this->render('admin/user/edit_user.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/admin/user/delete/{id}', name: 'admin_user_delete')]
public function deleteUser($id, EntityManagerInterface $em)
{
    $user = $em->getRepository(User::class)->find($id);

    if ($user) {
        $em->remove($user);
        $em->flush();
    }

    return $this->redirectToRoute('admin_users');
}
#adminproducts
#[Route('/product', name: 'admin_dashboard')]
    public function indexproduit(EntityManagerInterface $entityManager): Response
>>>>>>> cc59b7508dd341c527da5d751200b5fc854ce73a
    {
        // Fetch base data
        $products = $entityManager->getRepository(Product::class)->findAll();
        $productTypes = $entityManager->getRepository(ProductTypeEntity::class)->findAll();
        $stocks = $entityManager->getRepository(Stock::class)->findAll();

        // 1. Calculate total value and prepare category data
        $total_value = 0;
        $categories = [];
        foreach ($products as $product) {
            $total_value += $product->getPrice() * $product->getQuantity();
            $category = $product->getCategory();
            $categories[$category] = isset($categories[$category]) ? $categories[$category] + 1 : 1;
        }

        // 2. Process stock health data
        $stockHealth = [
            'optimal' => 0,
            'warning' => 0,
            'critical' => 0
        ];
        foreach ($stocks as $stock) {
            $ratio = $stock->getAvailableQuantity() / $stock->getStockMinimum();
            if ($ratio >= 1.2) {
                $stockHealth['optimal']++;
            } elseif ($ratio >= 0.8) {
                $stockHealth['warning']++;
            } else {
                $stockHealth['critical']++;
            }
        }

        // 3. Process product types data
        $productionMethods = [];
        $seasonalData = [];
        foreach ($productTypes as $type) {
            $method = $type->getProductionMethod();
            $season = $type->getSeason();
            
            // Count by production method
            $productionMethods[$method] = isset($productionMethods[$method]) ? $productionMethods[$method] + 1 : 1;
            
            // Count by season
            $seasonalData[$season] = isset($seasonalData[$season]) ? $seasonalData[$season] + 1 : 1;
        }

        // 4. Process stock levels data
        $stockLevels = [];
        foreach ($stocks as $stock) {
            $stockLevels[] = [
                'product' => $stock->getProduct()->getCategory(),
                'current' => $stock->getAvailableQuantity(),
                'minimum' => $stock->getStockMinimum(),
                'maximum' => $stock->getStockMaximum()
            ];
        }

        // Calculate overall stock health percentage
        $stock_health = $this->calculateStockHealth($stocks);

        // Get low stock alerts
        $low_stock_alerts = $this->getLowStockAlerts($stocks);
        $low_stock_count = count($low_stock_alerts);

        // Return all data to the view
        return $this->render('temp/admin/dashboard.html.twig', [
            // Original data
            'products' => $products,
            'productTypes' => $productTypes,
            'stocks' => $stocks,
            'total_value' => number_format($total_value, 2),
            'stock_health' => $stock_health,
            'low_stock_count' => $low_stock_count,
            'low_stock_alerts' => $low_stock_alerts,
            
            // Chart-specific data
            'categories_data' => $categories,
            'stock_health_data' => $stockHealth,
            'production_methods_data' => $productionMethods,
            'seasonal_data' => $seasonalData,
            'stock_levels_data' => $stockLevels
        ]);
    }

    private function calculateStockHealth(array $stocks): float
    {
        if (empty($stocks)) return 100.0;

        $healthy_count = 0;
        foreach ($stocks as $stock) {
            $ratio = $stock->getAvailableQuantity() / $stock->getStockMinimum();
            if ($ratio >= 1.0) $healthy_count++;
        }

        return round(($healthy_count / count($stocks)) * 100, 1);
    }

    private function getLowStockAlerts(array $stocks): array
    {
        $alerts = [];
        foreach ($stocks as $stock) {
            $current = $stock->getAvailableQuantity();
            $minimum = $stock->getStockMinimum();
            $ratio = $current / $minimum;

            if ($ratio < 1.0) {
                $alerts[] = [
                    'product' => $stock->getProduct()->getCategory(),
                    'current_stock' => $current,
                    'minimum_stock' => $minimum,
                    'status' => $ratio < 0.5 ? 'Critical' : 'Warning',
                    'status_class' => $ratio < 0.5 ? 'danger' : 'warning',
                    'action' => $ratio < 0.5 ? 'Immediate restock required' : 'Plan restock soon'
                ];
            }
        }

        return $alerts;
    }

    #[Route('/export/pdf/{type}', name: 'admin_export_pdf')]
    public function exportPDF(string $type): Response
    {
        // Get data based on type
        $data = match ($type) {
            'products' => $this->getProductsData(),
            'product-types' => $this->getProductTypesData(),
            'stocks' => $this->getStocksData(),
            default => throw $this->createNotFoundException('Invalid export type')
        };

        // Generate and return PDF
        return $this->pdfService->generateReport($data, $type);
    }

    private function getProductsData(): array
    {
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        return array_map(function($product) {
            return [
                'ID' => $product->getId(),
                'Category' => $product->getCategory(),
                'Type' => $product->getType()->getProductionMethod(),
                'Season' => $product->getType()->getSeason(),
                'Quantity' => $product->getQuantity(),
                'Weight' => $product->getWeight(),
                'Price' => $product->getPrice()
            ];
        }, $products);
    }

    private function getProductTypesData(): array
    {
        $types = $this->entityManager->getRepository(ProductTypeEntity::class)->findAll();
        return array_map(function($type) {
            return [
                'ID' => $type->getId(),
                'Season' => $type->getSeason(),
                'Production Method' => $type->getProductionMethod(),
                'Harvest Date' => $type->getHarvestDate()->format('Y-m-d'),
                'Preservation Duration' => $type->getPreservationDuration()
            ];
        }, $types);
    }

    private function getStocksData(): array
    {
        $stocks = $this->entityManager->getRepository(Stock::class)->findAll();
        return array_map(function($stock) {
            return [
                'ID' => $stock->getId(),
                'Product' => $stock->getProduct()->getCategory(),
                'Available Quantity' => $stock->getAvailableQuantity(),
                'Minimum Stock' => $stock->getMinimumStock(),
                'Maximum Stock' => $stock->getMaximumStock(),
                'Entry Date' => $stock->getEntryDate()->format('Y-m-d'),
                'Exit Date' => $stock->getExitDate() ? $stock->getExitDate()->format('Y-m-d') : 'N/A'
            ];
        }, $stocks);
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

    #[Route('/export-chart', name: 'admin_export_chart', methods: ['POST'])]
    public function exportChart(Request $request): Response
    {
        // Get chart image data from request
        $chartImage = $request->request->get('chartImage');
        $chartId = $request->request->get('chartId');

        // Remove data URL prefix to get raw base64 data
        $imageData = str_replace('data:image/png;base64,', '', $chartImage);
        $imageData = base64_decode($imageData);

        // Get title based on chart ID
        $title = match ($chartId) {
            'productsChart' => 'Products by Category',
            'productTypesChart' => 'Product Types by Production Method',
            'stocksChart' => 'Stock Status Distribution',
            'stockQuantityChart' => 'Stock Quantities by Product',
            default => 'Chart Export'
        };

        // Create PDF content
        $pdf = "
%PDF-1.4
1 0 obj
<< /Type /Catalog /Pages 2 0 R >>
endobj

2 0 obj
<< /Type /Pages /Kids [3 0 R] /Count 1 >>
endobj

3 0 obj
<< /Type /Page /Parent 2 0 R /MediaBox [0 0 595 842] /Contents 4 0 R >>
endobj

4 0 obj
<< /Length " . strlen($imageData) . " >>
stream
" . $imageData . "
endstream
endobj

xref
0 5
0000000000 65535 f
0000000010 00000 n
0000000056 00000 n
0000000111 00000 n
0000000178 00000 n

trailer
<< /Size 5 /Root 1 0 R >>
startxref
0
%%EOF
";

        // Create response
        $response = new Response($pdf);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $chartId . '.pdf"');

        return $response;
    }

    #[Route('/export-full-report', name: 'admin_export_full_report', methods: ['POST'])]
    public function exportFullReport(
        Request $request,
        ReportService $reportService,
        ProductRepository $productRepository,
        StockRepository $stockRepository
    ): Response {
        // Get chart images from request
        $charts = json_decode($request->request->get('charts', '[]'), true);
        
        // Prepare data for the report
        $products = $productRepository->findAll();
        $stocks = $stockRepository->findAll();
        
        $totalValue = array_reduce($products, function($carry, $product) {
            return $carry + ($product->getPrice() * $product->getQuantity());
        }, 0);
        
        $lowStockCount = array_reduce($stocks, function($carry, $stock) {
            return $carry + ($stock->getAvailableQuantity() < $stock->getStockMinimum() ? 1 : 0);
        }, 0);
        
        $stockHealth = array_reduce($stocks, function($carry, $stock) {
            $healthScore = ($stock->getAvailableQuantity() >= $stock->getStockMinimum()) ? 100 : 
                          ($stock->getAvailableQuantity() / $stock->getStockMinimum() * 100);
            return $carry + $healthScore;
        }, 0) / (count($stocks) ?: 1);
        
        // Prepare low stock alerts
        $lowStockAlerts = array_map(function($stock) {
            return [
                'product' => $stock->getProduct()->getCategory(),
                'current_stock' => $stock->getAvailableQuantity(),
                'minimum_stock' => $stock->getStockMinimum(),
                'status' => $stock->getAvailableQuantity() < $stock->getStockMinimum() ? 'Critical' : 'Normal',
                'action' => $stock->getAvailableQuantity() < $stock->getStockMinimum() ? 'Reorder Required' : 'Monitor'
            ];
        }, array_filter($stocks, fn($stock) => $stock->getAvailableQuantity() < $stock->getStockMinimum()));
        
        $data = [
            'stats' => [
                'total_products' => count($products),
                'total_value' => number_format($totalValue, 2),
                'stock_health' => round($stockHealth, 1),
                'low_stock_count' => $lowStockCount
            ],
            'low_stock_alerts' => $lowStockAlerts
        ];
        
        // Generate PDF
        $pdfContent = $reportService->generateFullReport($data, $charts);
        
        // Return response
        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="fruitables-report.pdf"');

        return $response;
    }

    #[Route('/export/dashboard-report', name: 'admin_export_dashboard_report')]
    public function exportDashboardReport(EntityManagerInterface $entityManager): Response
    {
        // Fetch all necessary data
        $products = $entityManager->getRepository(Product::class)->findAll();
        $productTypes = $entityManager->getRepository(ProductTypeEntity::class)->findAll();
        $stocks = $entityManager->getRepository(Stock::class)->findAll();

        // Prepare data in the correct format for PDF generation
        $formattedData = [];
        
        foreach ($products as $product) {
            $formattedData[] = [
                'ID' => $product->getId(),
                'Category' => $product->getCategory(),
                'Type' => $product->getType()->getProductionMethod(),
                'Season' => $product->getType()->getSeason(),
                'Quantity' => $product->getQuantity(),
                'Weight' => $product->getWeight(),
                'Price' => $product->getPrice(),
                'Total Value' => $product->getPrice() * $product->getQuantity()
            ];
        }

        // Calculate summary statistics
        $totalValue = array_sum(array_column($formattedData, 'Total Value'));
        $stockHealth = $this->calculateStockHealth($stocks);
        $lowStockAlerts = $this->getLowStockAlerts($stocks);

        // Add summary data
        $summaryData = [
            'Total Products' => count($products),
            'Total Value' => number_format($totalValue, 2),
            'Stock Health' => $stockHealth . '%',
            'Low Stock Alerts' => count($lowStockAlerts)
        ];

        // Prepare stock status data
        $stockStatusData = [];
        foreach ($stocks as $stock) {
            $stockStatusData[] = [
                'Product' => $stock->getProduct()->getCategory(),
                'Current Stock' => $stock->getAvailableQuantity(),
                'Minimum Stock' => $stock->getStockMinimum(),
                'Maximum Stock' => $stock->getStockMaximum(),
                'Status' => $this->getStockStatus($stock),
                'Action Required' => $this->getStockAction($stock)
            ];
        }

        // Prepare final data structure
        $reportData = [
            'summary' => $summaryData,
            'products' => $formattedData,
            'stock_status' => $stockStatusData,
            'low_stock_alerts' => $lowStockAlerts
        ];

        // Generate PDF
        $pdf = $this->pdfService->generateReport($reportData, 'dashboard');

        // Return PDF response
        $response = new Response($pdf);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="fruitables-dashboard-report.pdf"');

        return $response;
    }

    private function getStockStatus(Stock $stock): string
    {
        $ratio = $stock->getAvailableQuantity() / $stock->getStockMinimum();
        if ($ratio >= 1.2) return 'Optimal';
        if ($ratio >= 0.8) return 'Warning';
        return 'Critical';
    }

    private function getStockAction(Stock $stock): string
    {
        $ratio = $stock->getAvailableQuantity() / $stock->getStockMinimum();
        if ($ratio < 0.5) return 'Immediate restock required';
        if ($ratio < 1.0) return 'Plan restock soon';
        return 'Stock level adequate';
    }
}
