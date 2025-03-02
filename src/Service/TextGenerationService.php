<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TextGenerationService
{
    private $client;
    private $apiKey;

    public function __construct(HttpClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function generateText(string $prompt): string
    {
        $response = $this->client->request('POST', 'https://api.deepai.org/api/text-generator', [
            'headers' => [
                'Api-Key' => $this->apiKey,
            ],
            'json' => [
                'text' => $prompt,
            ],
        ]);

        $data = $response->toArray();
        return $data['output'] ?? 'No description generated.';
    }
}