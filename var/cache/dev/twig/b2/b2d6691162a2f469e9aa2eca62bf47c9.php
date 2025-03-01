<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* materielvente/pdf_template.html.twig */
class __TwigTemplate_b9db254edceea04ce4c7a0fdfa84b0ec extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/pdf_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Fiche Matériel à vendre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            padding: 0;
            background: #f8f8f8;
        }

        .container {
            width: 100%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 120px;
            height: auto;
        }

        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            padding: 10px 0;
            border-bottom: 2px solid #007BFF;
            margin-bottom: 20px;
        }

        .content {
            padding: 20px;
        }

        .details {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .details th, .details td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .details th {
            background: #007BFF;
            color: white;
            font-weight: bold;
        }

        .image-container {
            text-align: center;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 300px;
            border-radius: 8px;
            border: 2px solid #ddd;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- Logo -->
        <div class=\"logo\">
<img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/logoreaptn.png")), "html", null, true);
        yield "\" alt=\"Logo de l'application\">
        </div>

        <!-- Titre -->
        <div class=\"header\">
            Fiche Matériel : ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 92, $this->source); })()), "nom", [], "any", false, false, false, 92), "html", null, true);
        yield "
        </div>

        <!-- Détails du matériel -->
        <div class=\"content\">
            <table class=\"details\">
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 100, $this->source); })()), "nom", [], "any", false, false, false, 100), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 104, $this->source); })()), "description", [], "any", false, false, false, 104), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 108, $this->source); })()), "prix", [], "any", false, false, false, 108), "html", null, true);
        yield " DT</td>
                </tr>
                <tr>
                    <th>Catégorie</th>
                    <td>";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 112, $this->source); })()), "categorie", [], "any", false, false, false, 112), "nom", [], "any", false, false, false, 112), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Disponibilité</th>
                    <td>";
        // line 116
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 116, $this->source); })()), "disponibilite", [], "any", false, false, false, 116)) ? ("Disponible") : ("Indisponible"));
        yield "</td>
                </tr>
            </table>

            <!-- Image du matériel -->
            <div class=\"image-container\">
                <p><strong>Image du matériel :</strong></p>
                <img src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 123, $this->source); })()), "image", [], "any", false, false, false, 123)))), "html", null, true);
        yield "\" alt=\"Image du matériel\">
            </div>
        </div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <p>Merci de votre intérêt pour notre matériel !</p>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "materielvente/pdf_template.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  193 => 123,  183 => 116,  176 => 112,  169 => 108,  162 => 104,  155 => 100,  144 => 92,  136 => 87,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Fiche Matériel à vendre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            padding: 0;
            background: #f8f8f8;
        }

        .container {
            width: 100%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 120px;
            height: auto;
        }

        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            padding: 10px 0;
            border-bottom: 2px solid #007BFF;
            margin-bottom: 20px;
        }

        .content {
            padding: 20px;
        }

        .details {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .details th, .details td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .details th {
            background: #007BFF;
            color: white;
            font-weight: bold;
        }

        .image-container {
            text-align: center;
            margin-top: 20px;
        }

        .image-container img {
            max-width: 300px;
            border-radius: 8px;
            border: 2px solid #ddd;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- Logo -->
        <div class=\"logo\">
<img src=\"{{ absolute_url(asset('uploads/images/logoreaptn.png')) }}\" alt=\"Logo de l'application\">
        </div>

        <!-- Titre -->
        <div class=\"header\">
            Fiche Matériel : {{ materielvente.nom }}
        </div>

        <!-- Détails du matériel -->
        <div class=\"content\">
            <table class=\"details\">
                <tr>
                    <th>Nom</th>
                    <td>{{ materielvente.nom }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ materielvente.description }}</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>{{ materielvente.prix }} DT</td>
                </tr>
                <tr>
                    <th>Catégorie</th>
                    <td>{{ materielvente.categorie.nom }}</td>
                </tr>
                <tr>
                    <th>Disponibilité</th>
                    <td>{{ materielvente.disponibilite ? 'Disponible' : 'Indisponible' }}</td>
                </tr>
            </table>

            <!-- Image du matériel -->
            <div class=\"image-container\">
                <p><strong>Image du matériel :</strong></p>
                <img src=\"{{ absolute_url(asset('uploads/images/' ~ materielvente.image)) }}\" alt=\"Image du matériel\">
            </div>
        </div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <p>Merci de votre intérêt pour notre matériel !</p>
        </div>
    </div>
</body>
</html>
", "materielvente/pdf_template.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\materielvente\\pdf_template.html.twig");
    }
}
