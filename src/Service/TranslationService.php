<?php
// src/Service/LingvaTranslator.php

namespace App\Service;

use GuzzleHttp\Client;

class TranslationService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://lingva.ml/']);
    }

    public function translate($text, $targetLanguage)
    {
        $response = $this->client->post('api/v1/translate', [
            'json' => [
                'text' => $text,
                'target' => $targetLanguage,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        return $data['translatedText'] ?? $text; // Returns the original text if no translation is available
    }
}