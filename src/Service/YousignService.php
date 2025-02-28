<?php
namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Contrat;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;

class YousignService
{
    private const PATHFILE = __DIR__ . '/../../public/';

    public function __construct(
        
    
private HttpClientInterface $yousignClient){
    
}

public function SignatureRequest(): string
    {
        $response = $this->yousignClient->request(
            'POST',
            'signature_requests', 
            [
              'body' => <<<JSON
                      {
                        "name": "The name of your Signature Request",
                        "delivery_mode": "none",
                        "timezone": "Europe/Paris"
                      }
                      JSON,
              'headers' => [
                  'Content-Type' => 'application/json',
              ],
        	]
        );

        return $response->getContent();
    }



    public function uploadDocument(string $signatureRequestId, Contrat $contrat): array
{
    $filePath = self::PATHFILE . 'contrat_' . $contrat->getId() . '.pdf'; // Adapter le chemin du fichier
    $fileName = 'contrat_' . $contrat->getId() . '.pdf';

    $formFields = [
        'nature' => 'signable_document',
        'file' => DataPart::fromPath($filePath, $fileName, 'application/pdf'),
    ];

    $formData = new FormDataPart($formFields);
    $headers = $formData->getPreparedHeaders()->toArray();

    $response = $this->yousignClient->request(
        'POST',
        sprintf('signature_requests/%s/documents', $signatureRequestId),
        [
            'headers' => $headers,
            'body' => $formData->bodyToIterable(),
        ]
    );

    return json_decode($response->getContent(), true);
}


    public function addSignerToSignatureRequest(Contrat $contrat, string $signatureRequestId, string $documentId): string
    {
        $signerFirstName = $contrat->getNomAcheteur();
        $signerLastName = $contrat->getNomVendeur(); // Utilisé ici comme exemple, à adapter selon le besoin réel
        $signerEmail = 'email@example.com'; // Remplacer par l'email réel du signataire s'il est disponible dans l'entité
    
        $response = $this->yousignClient->request(
            'POST',
            sprintf('signature_requests/%s/signers', $signatureRequestId),
            [
                'body' => json_encode([
                    'info' => [
                        'first_name' => $signerFirstName,
                        'last_name' => $signerLastName,
                        'email' => $signerEmail,
                        'locale' => 'fr'
                    ],
                    'fields' => [
                        [
                            'type' => 'signature',
                            'document_id' => $documentId,
                            'page' => 1,
                            'x' => 77,
                            'y' => 581
                        ]
                    ],
                    'signature_level' => 'electronic_signature',
                    'signature_authentication_mode' => 'no_otp'
                ]),
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]
        );
    
        return $response->getContent();
    }
    public function activateSignatureRequest(string $signatureRequestId): array
    {
        $response = $this->yousignClient->request(
            'POST',
            sprintf('signature_requests/%s/activate', $signatureRequestId)
        );
    
        return json_decode($response->getContent(), true);
    }
    
 }
