<?php

namespace App\Controller;

use App\Entity\ParcelleProprietes;
use App\Entity\Contrat;
use App\Form\ParcelleProprietesType;
use App\Form\ParcelleFilterType;
use App\Repository\ParcelleProprietesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use App\Form\ContactType;
use App\Service\EmailMessage;
use App\Service\EmailMessageHandler;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


#[Route('/parcelle/proprietes')]
final class ParcelleProprietesController extends AbstractController
{
    #[Route(name: 'app_parcelle_proprietes_index', methods: ['GET'])]
    public function index(Request $request, ParcelleProprietesRepository $parcelleProprietesRepository, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParcelleFilterType::class);
        $form->handleRequest($request);

        $queryBuilder = $entityManager->getRepository(ParcelleProprietes::class)->createQueryBuilder('p');

        // Gestion de la barre de recherche
        $search = $request->query->get('search');
        if (!empty($search)) {
            $queryBuilder->andWhere('p.titre LIKE :search OR p.description LIKE :search')
                         ->setParameter('search', '%' . $search . '%');
        }

        // Gestion des filtres avancés
        if ($form->isSubmitted() || $request->query->has('type_terrain')) {  
            $data = $form->getData();

            if (!empty($data['type_terrain'])) {
                $queryBuilder->andWhere('p.type_terrain = :type')
                             ->setParameter('type', $data['type_terrain']);
            }

            if (!empty($data['prixMin'])) {
                $queryBuilder->andWhere('p.prix >= :prixMin')
                             ->setParameter('prixMin', $data['prixMin']);
            }

            if (!empty($data['prixMax'])) {
                $queryBuilder->andWhere('p.prix <= :prixMax')
                             ->setParameter('prixMax', $data['prixMax']);
            }
        }

        $parcelles = $queryBuilder->getQuery()->getResult();

        // Récupérer les 3 annonces les plus récentes
        $recentes = $parcelleProprietesRepository->findBy([], ['date_creation_annonce' => 'DESC'], 3);

        return $this->render('parcelle_proprietes/index.html.twig', [
            'parcelle_proprietes' => $parcelles,
            'recentes' => $recentes,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'app_parcelle_proprietes_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $parcellePropriete = new ParcelleProprietes();
        $form = $this->createForm(ParcelleProprietesType::class, $parcellePropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du fichier image
            $file = $form->get('image')->getData();

            if ($file instanceof UploadedFile) {
                $filename = uniqid() . '.' . $file->guessExtension();

                try {
                    // Déplacez l'image vers le dossier de destination
                    $file->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads/images/',
                        $filename
                    );
                    $parcellePropriete->setImage($filename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                    return $this->redirectToRoute('app_parcelle_proprietes_new');
                }
            } else {
                // Si aucune image n'est téléchargée, définir une image par défaut
                $parcellePropriete->setImage('default.jpg');
            }

            $entityManager->persist($parcellePropriete);
            $entityManager->flush();

            // Message flash et redirection vers la page de confirmation
            $this->addFlash('success', 'Parcelle ajoutée avec succès !');
            return $this->redirectToRoute('app_parcelle_proprietes_confirm', [
                'id' => $parcellePropriete->getId(),
            ]);
        }

        return $this->render('parcelle_proprietes/new.html.twig', [
            'parcelle_propriete' => $parcellePropriete,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/confirm', name: 'app_parcelle_proprietes_confirm', methods: ['GET'])]
    public function confirm(int $id): Response
    {
        return $this->render('parcelle_proprietes/msg.html.twig', [
            'id' => $id,
        ]);
    }


    
    #[Route('/{id}', name: 'app_parcelle_proprietes_show', methods: ['GET', 'POST'])]
    public function show(
        ParcelleProprietes $parcellePropriete,
        Request $request,
        MailerInterface $mailer
    ): Response {
        $contactForm = $this->createForm(ContactType::class);
        $contactForm->handleRequest($request);

        if ($contactForm->isSubmitted() && $contactForm->isValid()) {
            $data = $contactForm->getData();
            
            try {
                $email = (new Email())
                    ->from($data['email'])
                    ->to($parcellePropriete->getContactProprietaire())
                    ->subject('Message concernant votre parcelle : ' . $parcellePropriete->getTitre())
                    ->html($this->renderView(
                        'emails/contact.html.twig',
                        [
                            'data' => $data,
                            'parcelle' => $parcellePropriete
                        ]
                    ));

                $mailer->send($email);
                $this->addFlash('success', 'Votre message a été envoyé avec succès !');
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Une erreur est survenue lors de l\'envoi du message.');
            }

            return $this->redirectToRoute('app_parcelle_proprietes_show', [
                'id' => $parcellePropriete->getId()
            ]);
        }

        return $this->render('parcelle_proprietes/show.html.twig', [
            'parcelle_propriete' => $parcellePropriete,
            'contactForm' => $contactForm->createView(),
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

    #[Route('/{id}/confirm-delete', name: 'app_parcelle_proprietes_delete', methods: ['POST'])]
    public function confirmDelete(Request $request, ParcelleProprietes $parcelleProprietes, EntityManagerInterface $entityManager): Response
    {
        // Vérifier le contrat associé à la parcelle
        $contrat = $entityManager->getRepository(Contrat::class)->findOneBy(['parcelle' => $parcelleProprietes]);
    
        // Si un contrat est trouvé et que l'utilisateur soumet la suppression, on supprime d'abord le contrat
        if ($contrat) {
            $entityManager->remove($contrat);
        }
    
        // Ensuite, supprimer la parcelle
        $entityManager->remove($parcelleProprietes);
        $entityManager->flush();
    
        // Ajouter un message flash pour informer l'utilisateur
        $this->addFlash('success', 'Parcelle et contrat associés supprimés.');
    
        // Rediriger vers la liste des parcelles
        return $this->redirectToRoute('app_parcelle_proprietes_index');
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

    #[Route('/parcelles/type/{type_terrain}', name: 'parcelles_par_type', methods: ['GET'])]
    public function parcellesParType(string $type_terrain, ParcelleProprietesRepository $repository): Response
    {
        // Fetch parcels by the given type_terrain
        $parcellePropriete = $repository->findBy(['type_terrain' => $type_terrain]);

        // Render the view with the correct variable name
        return $this->render('parcelle_proprietes/parcelles_par_type.html.twig', [
            'parcelle_propriete' => $parcellePropriete, // Corrected variable name
            'type_terrain' => $type_terrain,
        ]);
    }
}
