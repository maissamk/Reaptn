<?php
namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Contrat;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;
use App\Service\PdfGeneratorService;

class YousignService
{
    private const PATHFILE = __DIR__ . '/../../public/';

    public function __construct(
        private HttpClientInterface $yousignClient,
        private PdfGeneratorService $pdfGeneratorService
    ){}

    public function SignatureRequest(): string
    {
        $response = $this->yousignClient->request(
            'POST',
            'signature_requests',
            [
                'body' => json_encode([
                    'name' => 'Signature Request',
                    'delivery_mode' => 'none',
                    'timezone' => 'Europe/Paris'
                ]),
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]
        );

        return $response->getContent();
    }

    public function generatePdfForContract(Contrat $contrat): string
    {
        $pdfContent = $this->pdfGeneratorService->generatePdf($contrat);
        $filePath = self::PATHFILE . 'contrat_' . $contrat->getId() . '.pdf';
        file_put_contents($filePath, $pdfContent);
        return $filePath;
    }

    public function uploadDocument(string $signatureRequestId, Contrat $contrat): array
    {
        $filePath = $this->generatePdfForContract($contrat);
        $fileName = basename($filePath);

        if (!file_exists($filePath)) {
            throw new \Exception("Le fichier n'existe pas à l'emplacement : " . $filePath);
        }

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

    public function addSignerToSignatureRequest(Contrat $contrat, string $signatureRequestId): string
    {
        // Prepare the signer's details
        $signerInfo = [
            'first_name' => $contrat->getUserIdContrat()->getNom(),
            'last_name' => $contrat->getUserIdContrat()->getPrenom(),
            'email' => $contrat->getUserIdContrat()->getEmail(),
            // You might need to add other required fields here like 'phone' or 'language' depending on Yousign's requirements.
        ];
    
        // Prepare the request body (only 'info' if no 'documents' are required)
        $body = [
            'info' => $signerInfo, // This is typically required for the signer.
        ];
    
        try {
            // Send the request to add the signer to the signature request
            $response = $this->yousignClient->request(
                'POST',
                sprintf('signature_requests/%s/signers', $signatureRequestId),
                [
                    'body' => json_encode($body),
                    'headers' => [
                        'Content-Type' => 'application/json',
                    ],
                ]
            );
    
            return $response->getContent();
        } catch (\Exception $e) {
            // Log or handle the exception accordingly
            error_log($e->getMessage());
            return 'Error: ' . $e->getMessage();
        }
    }
    

}
