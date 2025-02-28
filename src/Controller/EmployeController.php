<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\Offre;
use App\Form\EmployeType;
use App\Repository\EmployeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;

use App\Service\HuggingFaceService;


#[Route('/employe')]
final class EmployeController extends AbstractController
{
    // Front office functions
    #[Route('/employe/{id}/confirm', name: 'employe_confirm')]
public function confirmAction(int $id, EntityManagerInterface $entityManager): Response
{
    $employe = $entityManager->getRepository(Employe::class)->find($id);

    if (!$employe) {
        throw $this->createNotFoundException('Employé non trouvé.');
    }

    $employe->setConf(1); // Set conf to confirmed
    $entityManager->persist($employe);
    $entityManager->flush();

    return $this->redirectToRoute('app_offre_show', ['id' => $employe->getOffre()->getId()]);
}
#[Route('/employe/{id}/reject', name: 'employe_reject', methods: ['POST'])]
public function rejectEmploye(Employe $employe, EntityManagerInterface $entityManager): Response
{
    $offreId = $employe->getOffre()->getId(); // Get the offer ID before deletion
    $entityManager->remove($employe);
    $entityManager->flush();

    $this->addFlash('danger', 'Employee rejected and removed!');
    return $this->redirectToRoute('app_offre_show', ['id' => $offreId]);
}

#[Route('/update-suggested/{id}', name: 'update_suggested')]
public function updateSuggestedForEmployes(int $id, HttpClientInterface $client, EntityManagerInterface $entityManager): Response
    {
        // 1️⃣ Retrieve the Offre by ID
        $offre = $entityManager->getRepository(Offre::class)->find($id);

        if (!$offre) {
            return new Response("Offre not found", 404);
        }

        // 2️⃣ Retrieve the competence from the Offre
        $offreCompetence = $offre->getComp(); // Assuming 'competence' is the field in the Offre entity

        // 3️⃣ Get Hugging Face API Token from environment
        $apiToken = getenv('HUGGING_FACE_API_TOKEN');


        // 4️⃣ Loop through each employee linked to the Offre
        foreach ($offre->getEmployes() as $employe) {
            $competence = $employe->getComp(); // Assuming 'comp' is the field in the Employe entity

            // 5️⃣ Make API request to Hugging Face to compare the competences
            $response = $client->request('POST', 'https://api-inference.huggingface.co/models/sentence-transformers/all-MiniLM-L6-v2', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiToken,
                ],
                'json' => [
                    'inputs' => [$offreCompetence, $competence]
                ],
            ]);

            // 6️⃣ Parse the API response
            $data = $response->toArray();
            $similarityScore = $data[0] ?? 0; // Assuming similarity score is returned in the first position

            // 7️⃣ Compare the similarity score and update the 'suggested' field
            if ($similarityScore > 0.7) {
                $employe->setSuggested(1); // Mark as suggested
            } else {
                $employe->setSuggested(0); // Mark as not suggested
            }

            // 8️⃣ Save the updated employe entity
            $entityManager->flush();
        }

        return new Response("Updated suggested for employees successfully.");
    }

    //not using this
    #[Route('/', name: 'app_employe_index', methods: ['GET'])]
    public function index(EmployeRepository $employeRepository): Response
    {
        return $this->render('employe/index.html.twig', [
            'employes' => $employeRepository->findAll(),
        ]);
    }

    
    #[Route('/{id}', name: 'app_employe_show', methods: ['GET'])]
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' => $employe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_employe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/edit.html.twig', [
            'employe' => $employe,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_employe_delete', methods: ['POST'])]
public function delete(int $id, EntityManagerInterface $entityManager, Security $security): Response
{
    $user = $security->getUser();
    if (!$user) {
        $this->addFlash('error', 'You must be logged in to delete your subscription.');
        return $this->redirectToRoute('app_offre_show', ['id' => $id]);
    }

    // Find the subscription (Employe entity)
    $employe = $entityManager->getRepository(Employe::class)
        ->findOneBy(['userIdentifier' => $user->getId(), 'offre' => $entityManager->getReference(Offre::class, $id)]);

    if (!$employe) {
        $this->addFlash('error', 'You are not subscribed to this offer.');
        return $this->redirectToRoute('app_offre_show', ['id' => $id]);
    }

    // Remove the subscription
    $entityManager->remove($employe);
    $entityManager->flush();

    $this->addFlash('success', 'Your subscription has been deleted.');
    return $this->redirectToRoute('app_offre_show', ['id' => $id]);
}






    // Back office functions





   

    #[Route('/admin/employe', name: 'admin_employe_index')]
    public function indexBack(EntityManagerInterface $entityManager): Response
    {
    $employes = $entityManager->getRepository(Employe::class)->findAll();

    return $this->render('admin/employe/index_back.html.twig', [
        'employes' => $employes,
    ]);
    }


    #[Route('/new', name: 'admin_employe_new')]
    public function newBack(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $employe = new Employe();
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $errors = $validator->validate($employe);
            if (count($errors) > 0) {
                return $this->render('admin/employe/new_back.html.twig', [
                    'form' => $form->createView(),
                    'errors' => $errors,
                ]);
            }

            $entityManager->persist($employe);
            $entityManager->flush();

            return $this->redirectToRoute('admin_employe_index');
        }

        return $this->render('admin/employe/new_back.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/admin/employe/{id}', name: 'admin_employe_show')]
    public function showBack(Employe $employe): Response
    {
        return $this->render('admin/employe/show_back.html.twig', [
            'employe' => $employe,
        ]);
    }

     // Edit an employee (back office) without changing the 'offre' ID
     #[Route('/{id}/edit', name: 'admin_employe_edit', requirements: ['id' => '\d+'])]
     #[Route('/admin/employe/{id}/edit', name: 'admin_employe_edit', methods: ['GET', 'POST'])]
     public function editBack(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
     {
         $form = $this->createForm(EmployeType::class, $employe);
         $form->handleRequest($request);
     
         if ($form->isSubmitted() && $form->isValid()) {
             $entityManager->flush();
             return $this->redirectToRoute('admin_employe_index'); // Make sure this is the correct back-office route
         }
     
         return $this->render('admin/employe/edit_back.html.twig', [
             'employe' => $employe,
             'form' => $form->createView(),
         ]);
     }

    #[Route('/admin/employe/{id}/delete', name: 'admin_employe_delete')]
    public function deleteBack(Employe $employe, EntityManagerInterface $entityManager): Response
    {
        // Using the injected entity manager
        $entityManager->remove($employe);
        $entityManager->flush();

        return $this->redirectToRoute('admin_employe_index');
    }




}
