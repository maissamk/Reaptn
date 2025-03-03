<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ProfileType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProfileController extends AbstractController
{
    private $httpClient;
    private $faceppApiKey;
    private $faceppApiSecret;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->faceppApiKey = 'r4zeyVpJYyZgY8FZpBUPzomn_177H5Wm'; // Replace with your Face++ API key
        $this->faceppApiSecret = 'aJxBvnCf820QWd9Hsppjmy-eI-Laq9uz'; // Replace with your Face++ API secret
    }
    #[Route('/profile', name: 'app_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')] // Restricts access to logged-in users
    public function index(): Response
    {
        $user = $this->getUser();
    
        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/profile/edit_profile', name: 'app_edit_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editProfile(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
{
    $user = $this->getUser();
    $form = $this->createForm(ProfileType::class, $user);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Handle avatar upload
        $avatarFile = $form->get('avatar')->getData();
        if ($avatarFile) {
            $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

            try {
                $avatarFile->move(
                    $this->getParameter('avatars_directory'), // Directory defined in `services.yaml`
                    $newFilename
                );
                $user->setAvatar($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Failed to upload avatar.');
            }
        }

        // Handle face image upload
        $faceImageFile = $form->get('faceImage')->getData();
        if ($faceImageFile) {
            // Generate a unique filename for the face image
            $originalFaceFilename = pathinfo($faceImageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFaceFilename = $slugger->slug($originalFaceFilename);
            $newFaceFilename = $safeFaceFilename . '-' . uniqid() . '.' . $faceImageFile->guessExtension();

            try {
                // Save the face image to the face images directory
                $faceImageFile->move(
                    $this->getParameter('face_images_directory'), // Directory defined in `services.yaml`
                    $newFaceFilename
                );

                // Set the face image path in the user entity
                $user->setFaceImagePath($newFaceFilename);

                // Send the image to Face++ API to get face_token
                $response = $this->httpClient->request('POST', 'https://api-us.faceplusplus.com/facepp/v3/detect', [
                    'headers' => [
                        'Content-Type' => 'multipart/form-data',
                    ],
                    'body' => [
                        'api_key' => $this->faceppApiKey,
                        'api_secret' => $this->faceppApiSecret,
                        'image_file' => fopen($this->getParameter('face_images_directory') . '/' . $newFaceFilename, 'r'),
                    ],
                ]);

                $result = $response->toArray();

                if (!empty($result['faces'])) {
                    $faceToken = $result['faces'][0]['face_token'];
                    $user->setFaceToken($faceToken);
                } else {
                    $this->addFlash('error', 'No face detected in the image.');
                }
            } catch (FileException $e) {
                $this->addFlash('error', 'Failed to upload face image.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Failed to process the image. Please try again.');
            }
        }

        // Save the updated user entity
        $entityManager->flush();
        $this->addFlash('success', 'Profile updated successfully!');
        return $this->redirectToRoute('app_profile');
    }

    return $this->render('profile/edit.html.twig', [
        'form' => $form->createView(),
        'user' => $user,
    ]);
}


    #[Route('/admin/profile', name: 'admin_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')] // Restricts access to logged-in users
    public function indexprofile(): Response
    {
        $user = $this->getUser();
    
        return $this->render('admin/profile/index.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/admin/profile/edit', name: 'admin_edit_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editProfileadmin(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ProfileType::class, $user);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $avatarFile = $form->get('avatar')->getData();
    
            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();
    
                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'), // Directory defined in `services.yaml`
                        $newFilename
                    );
                    $user->setAvatar($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload avatar.');
                }
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'Profile updated successfully!');
            return $this->redirectToRoute('admin_profile');
        }
    
        return $this->render('admin/profile/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,  // Pass the user object to the template
        ]);
    }
}
