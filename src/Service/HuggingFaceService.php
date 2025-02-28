<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HuggingFaceService
{
    private HttpClientInterface $client;
    private string $apiToken;

    public function __construct(HttpClientInterface $client, string $apiToken)
    {
        $this->client = $client;
        $this->apiToken = $apiToken;
    }

    public function compareCompetences(string $offreCompetence, string $employeCompetence): float
    {
        // 1️⃣ Normalize the input strings to lowercase and trim spaces
        $offreCompetence = strtolower(trim($offreCompetence));
        $employeCompetence = strtolower(trim($employeCompetence));

        // 2️⃣ Make the API request to Hugging Face to compare competences
        $response = $this->client->request('POST', 'https://api-inference.huggingface.co/models/sentence-transformers/all-MiniLM-L6-v2', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiToken,
            ],
            'json' => [
                'inputs' => [$offreCompetence, $employeCompetence]
            ],
        ]);

        // 3️⃣ Parse the response from Hugging Face API
        $data = $response->toArray();
        dump($data);  // Debugging: check what the API is returning

        // 4️⃣ Return the similarity score from the response (assuming it's in the first position of the array)
        return $data[0] ?? 0;
    }
}