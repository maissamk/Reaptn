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
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;

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

#[Route('/evaluate-local/{id}', name: 'evaluate_employe_local')]
public function evaluateLocal(Employe $employe, EntityManagerInterface $entityManager): Response
{
    $offreComp = strtolower($employe->getOffre()->getComp());  
    $employeComp = strtolower($employe->getComp());

    // Tokenize manually (split by whitespace)
    $tokenizer = new WhitespaceTokenizer();
    $offreWords = $tokenizer->tokenize($offreComp);
    $employeWords = $tokenizer->tokenize($employeComp);

    // Find common words (case insensitive match)
    $commonWords = array_intersect($offreWords, $employeWords);
    $similarityScore = count($commonWords);  

    // Define a threshold for "suitability"
    $threshold = 2;
    $suggested = $similarityScore >= $threshold;

    // Save result
    $employe->setSuggested($suggested);
    $entityManager->flush();

    // Redirect to the same page where employee is displayed, to update badge
    return $this->redirectToRoute('employe_show', ['id' => $employe->getId()]);
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
