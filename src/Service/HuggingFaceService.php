<?php

// src/Service/HuggingFaceService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HuggingFaceService
{
    private $client;
    private $apiUrl;
    private $apiToken;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        // Set the model URL (update with your model's actual URL)
        $this->apiUrl = 'https://api-inference.huggingface.co/models/distilbert-base-uncased';
        
        // Replace with your Hugging Face API token
        $this->apiToken = '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'; // Set your API token here
    }

    public function compareCompFields(string $employeeComp, string $offerComp): bool
    {
        $response = $this->client->request('POST', $this->apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiToken, // Pass token in headers
            ],
            'json' => [
                'inputs' => [
                    'employee' => $employeeComp,
                    'offer' => $offerComp,
                ],
            ],
        ]);

        $data = $response->toArray();
        
        // Assuming the response has a boolean or numeric score to determine similarity
        return isset($data['result']) && $data['result'] === 'suggested'; // Adjust based on your model's response
    }
}
