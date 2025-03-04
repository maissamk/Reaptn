<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LanguageController extends AbstractController
{
    #[Route('/change-locale/{locale}', name: 'change_locale')]
    public function changeLocale(string $locale, Request $request, SessionInterface $session): RedirectResponse
    {
        // Only allow 'ar' (Arabic) or 'none' (No translation)
        if (!in_array($locale, ['ar', 'none'])) {
            $locale = 'none'; // Default: No translation
        }

        // Store the locale in the session
        $session->set('_locale', $locale);

        // Redirect to the previous page
        return $this->redirect($request->headers->get('referer') ?? $this->generateUrl('homepage'));
    }
}