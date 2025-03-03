<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class FaceLoginController extends AbstractController
{
    #[Route('/face-login', name: 'face_login')]
public function faceLogin(Request $request): Response
{
    $imagePath = $request->query->get('image');

    return $this->render('security/face_login.html.twig', [
        'imagePath' => $imagePath,
    ]);
}
    
// src/Controller/FaceLoginController.php
#[Route('/save_captured_image', name: 'save_captured_image', methods: ['POST'])]
public function saveCapturedImage(Request $request): JsonResponse
{
    try {
        $data = json_decode($request->getContent(), true);

        // Check if the image data is present
        if (!isset($data['image'])) {
            throw new \Exception('No image data received.');
        }

        $imageData = $data['image'];

        // Log the received image data
        error_log('Received image data: ' . substr($imageData, 0, 50) . '...');

        // Remove the base64 prefix
        $imageData = str_replace('data:image/png;base64,', '', $imageData);
        $imageData = str_replace(' ', '+', $imageData);
        $imageBinary = base64_decode($imageData);

        if ($imageBinary === false) {
            throw new \Exception('Failed to decode base64 image data.');
        }

        // Generate a unique filename
        $filename = uniqid('captured_image_', true) . '.png';
        $imagePath = $this->getParameter('captured_images_directory') . '/' . $filename;

        // Log the image path
        error_log('Saving image to: ' . $imagePath);

        // Ensure the directory exists
        if (!is_dir($this->getParameter('captured_images_directory'))) {
            mkdir($this->getParameter('captured_images_directory'), 0755, true);
        }

        // Save the image to the directory
        if (file_put_contents($imagePath, $imageBinary) === false) {
            throw new \Exception('Failed to save image to: ' . $imagePath);
        }

        return new JsonResponse([
            'success' => true,
            'imagePath' => $filename,
        ]);
    } catch (\Exception $e) {
        // Log the error
        error_log('Error in save_captured_image: ' . $e->getMessage());

        // Return a JSON response with the error message
        return new JsonResponse([
            'success' => false,
            'message' => $e->getMessage(),
        ], 500); // Return a 500 status code for server errors
    }
}
}