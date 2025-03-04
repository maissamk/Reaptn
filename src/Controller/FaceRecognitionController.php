<?php

// src/Controller/FaceRecognitionController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FaceRecognitionController extends AbstractController
{
    #[Route(path: '/face-recognition', name: 'face_recognition')]
    public function index(): Response
    {
        return $this->render('face_recognition/index.html.twig');
    }

    #[Route("/upload_image", name: "upload_image", methods: ["POST"])]
public function uploadImage(Request $request): JsonResponse
{
    // Get the base64-encoded image from the request
    $data = json_decode($request->getContent(), true);

    if (!isset($data['image'])) {
        return new JsonResponse(['result' => 'No image data provided.'], 400);
    }

    $imageData = $data['image'];

    // Remove the "data:image/png;base64," part
    $imageData = str_replace('data:image/png;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);
    $imageData = base64_decode($imageData);

    if ($imageData === false) {
        return new JsonResponse(['result' => 'Invalid image data.'], 400);
    }

    // Save the image to a file
    $filename = 'captured_image.png';
    if (file_put_contents($filename, $imageData) === false) {
        return new JsonResponse(['result' => 'Failed to save the image.'], 500);
    }

    // Call the Python script for face recognition
    $pythonScriptPath = 'C:\\Users\\romdh\\AppData\\Local\\Programs\\Python\\Python310\\python.exe';
    $scriptPath = 'C:\\Games\\Reaptn\\face-recognition-python\\recognize_face.py'; // Update this path
    $knownFacePath = 'C:\\Downloads\\image1.png'; // Update this path
    //$command = "$pythonScriptPath $scriptPath $knownFacePath $filename";
    $command = "$pythonScriptPath $scriptPath $knownFacePath";

    alert("keelo");
  $output = shell_exec($command);

if ($output !== null) {
    return new JsonResponse(['result' => 'Failed to execute the Python script.'], 500);
 }

//     /// Return the result
 return new JsonResponse(['result' => $output]);
}
}