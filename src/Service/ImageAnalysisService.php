<?php

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageAnalysisService
{
    private Client $client;
    private string $huggingFaceApiKey;
    private string $apiUrl = 'https://api-inference.huggingface.co/models/nlpconnect/vit-gpt2-image-captioning';

    public function __construct(string $huggingFaceApiKey)
    {
        $this->client = new Client();
        $this->huggingFaceApiKey = $huggingFaceApiKey;
    }

    public function analyzeImage(string $filePath): ?string
    {
        try {
            $imageData = file_get_contents($filePath);

            $response = $this->client->post($this->apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->huggingFaceApiKey,
                    'Content-Type'  => 'application/octet-stream',
                ],
                'body' => $imageData,
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            return $data[0]['generated_text'] ?? 'No description found';
        } catch (\Exception $e) {
            return 'Error analyzing image: ' . $e->getMessage();
        }
    }
}
