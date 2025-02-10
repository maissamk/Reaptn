<?php
namespace App\Controller;

use App\Entity\Materielvente;
use App\Entity\Materiellocation;
use App\Form\Materielvente2Type;
use App\Form\MateriellocationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/materiel')]
class MaterielController extends AbstractController
{
    // Afficher la liste des matériels
    #[Route('/', name: 'app_materiel_index')]
    public function index(EntityManagerInterface $em): Response
    {
        $ventes = $em->getRepository(MaterielVente::class)->findAll();
        $locations = $em->getRepository(MaterielLocation::class)->findAll();

        return $this->render('materiel/index.html.twig', [
            'ventes' => $ventes,
            'locations' => $locations,
        ]);
    }

    // Ajouter un matériel
    #[Route('/new', name: 'app_materiel_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $type = $request->query->get('type');

        // Vérifie le type de matériel
        if ($type === 'vente') {
            $materiel = new MaterielVente();
            $form = $this->createForm(MaterielVente2Type::class, $materiel);
        } else {
            $materiel = new MaterielLocation();
            $form = $this->createForm(MaterielLocationType::class, $materiel);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('image')->getData();

            if ($file) {
                $filename = md5(uniqid()) . '.' . $file->guessExtension();

                try {
                    $directory = $this->getParameter('images_directory');

                    // Vérifie si le dossier existe, sinon le créer
                    if (!is_dir($directory)) {
                        mkdir($directory, 0775, true);
                    }

                    $file->move($directory, $filename);
                    $materiel->setImage($filename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                    return $this->redirectToRoute('app_materiel_new', ['type' => $type]);
                }
            }

            $em->persist($materiel);
            $em->flush();

            $this->addFlash('success', 'Matériel ajouté avec succès !');

            return $this->redirectToRoute('app_materiel_index');
        }

        return $this->render('materiel/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

