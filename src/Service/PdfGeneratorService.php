<?php
// src/Service/PdfGeneratorService.php
namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Contrat;
use Twig\Environment;

class PdfGeneratorService
{
    private $twig;
    private $dompdf;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
        $this->dompdf = new Dompdf();
    }

    public function generatePdf(Contrat $contrat): string
    {
        // Générer le contenu HTML à partir d'un template Twig
        $html = $this->twig->render('contrat/pdf_template.html.twig', [
            'contrat' => $contrat
        ]);

        // Charger le HTML dans Dompdf
        $this->dompdf->loadHtml($html);

        // (Optionnel) Définir des options de taille de page, etc.
        $this->dompdf->setPaper('A4', 'portrait');

        // Rendre le PDF
        $this->dompdf->render();

        // Retourner le PDF sous forme de chaîne binaire
        return $this->dompdf->output();
    }
}
