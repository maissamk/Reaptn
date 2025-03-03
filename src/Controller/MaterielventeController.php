<?php

namespace App\Controller;

use App\Service\ImageAnalysisService;
use App\Entity\Materielvente;
use App\Form\Materielvente2Type;
use App\Repository\MaterielventeRepository;
use App\Repository\CategorieRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;


use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpKernel\KernelInterface;
use Knp\Snappy\Pdf;







#[Route('/materielvente')]
final class MaterielventeController extends AbstractController
{
    #[Route('/', name: 'app_materielvente_index', methods: ['GET'])]
    public function index(
        Request $request,
        MaterielventeRepository $materielventeRepository,
        CategorieRepository $categorieRepository,
        PaginatorInterface $paginator
    ): Response {
        $searchTerm = $request->query->get('search', '');
        $categories = $categorieRepository->findAll();

        
        $minPrice = $request->query->get('minPrice');
        $maxPrice = $request->query->get('maxPrice');
        
        
        $minPrice = $minPrice !== null && is_numeric($minPrice) ? (float) $minPrice : null;
        $maxPrice = $maxPrice !== null && is_numeric($maxPrice) ? (float) $maxPrice : null;
        
        
        $categorieId = $request->query->get('categorie');
        $categorieId = $categorieId !== null && is_numeric($categorieId) ? (int) $categorieId : null;
        
        $queryBuilder = $materielventeRepository->searchByFilters($searchTerm, $minPrice, $maxPrice, $categorieId);
    
        $materielventes = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            9 
        );
    
       
        return $this->render('materielvente/index.html.twig', [
            'materielventes' => $materielventes,
            'searchTerm' => $searchTerm,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'categorieId' => $categorieId,
            'categories' => $categories, 

            
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

                    if (!is_dir($directory) && !mkdir($directory, 0775, true) && !is_dir($directory)) {
                        throw new \RuntimeException(sprintf('Impossible de créer le répertoire "%s"', $directory));
                    }

                    $file->move($directory, $filename);
                    $materielvente->setImage($filename);
                } catch (FileException | \RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                    return $this->redirectToRoute('app_materielvente_new');
                }
            } else {
                $materielvente->setImage('default.jpg');
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

    #[Route('/materielvente/{id}', name: 'app_materielvente_show', methods: ['GET'])]
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
                } catch (FileException | \RuntimeException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
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

    #[Route('/materiels', name: 'materiels_list', methods: ['GET'])]
    public function showMateriels(MaterielventeRepository $materielventeRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $materielventeRepository->createQueryBuilder('m')->getQuery();

        $materiels = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), // Page actuelle
            1 // Nombre d'éléments par page
        );

        return $this->render('panier/index.html.twig', [
            'materiels' => $materiels,
        ]);
    }





////////////Recherche ajax://////////////
    #[Route('/search', name: 'app_materielvente_search', methods: ['GET'])]
    public function search(
        Request $request,
        MaterielventeRepository $materielventeRepository
    ): Response {
        $searchTerm = $request->query->get('search', '');
        $materielventes = $materielventeRepository->searchByFilters($searchTerm, null, null, null)->getQuery()->getResult();
    
        return $this->render('materielvente/_search_results.html.twig', [
            'materielventes' => $materielventes
        ]);
    }




    


    #[Route('/materielvente/{id}/download', name: 'app_materielvente_download_pdf')]
    public function downloadPdf(Materielvente $materielvente): Response
    {
        
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        
        $dompdf = new Dompdf($options);
        
        $html = $this->renderView('materielvente/pdf_template.html.twig', [
            'materielvente' => $materielvente,
        ]);

        
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4');

        $dompdf->render();

        // Télécharger le PDF
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="materielvente_' . $materielvente->getId() . '.pdf"',
            ]
        );
    }




    private ImageAnalysisService $imageAnalysisService;

    public function __construct(ImageAnalysisService $imageAnalysisService)
    {
        $this->imageAnalysisService = $imageAnalysisService;
    }

    #[Route('/{id}/analyze', name: 'analyze_image', methods: ['POST'])]
    public function analyze(Request $request, int $id): Response
    {
        $data = json_decode($request->getContent(), true);
        $imageName = $data['image'] ?? null;
    
        if (!$imageName) {
            return $this->json(['error' => 'No image specified'], Response::HTTP_BAD_REQUEST);
        }
    
        $imagePath = $this->getParameter('images_directory') . '/' . $imageName;
    
        if (!file_exists($imagePath)) {
            return $this->json(['error' => 'Image not found'], Response::HTTP_NOT_FOUND);
        }
    
        // Call Hugging Face API or local AI model
        $description = $this->imageAnalysisService->analyzeImage($imagePath);
    
        return $this->json(['description' => $description]);
    }





}
