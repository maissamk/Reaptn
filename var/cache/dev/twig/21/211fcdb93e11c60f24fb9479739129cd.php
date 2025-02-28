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

/* contrat/pdf_template.html.twig */
class __TwigTemplate_9dd64ffcf5a1a5ab806b9d4556e56ea7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/pdf_template.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Contrat - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #0066cc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        td {
            color: #555;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .contract-info {
            margin-bottom: 20px;
        }

        .contract-info span {
            font-weight: bold;
        }

        .contract-details {
            margin-top: 20px;
            border-top: 2px solid #0066cc;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Contrat #";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "</h1>

    <div class=\"contract-info\">
        <p><span>Date Début Contrat:</span> ";
        // line 63
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 63, $this->source); })()), "dateDebutContrat", [], "any", false, false, false, 63)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 63, $this->source); })()), "dateDebutContrat", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true)) : (""));
        yield "</p>
        <p><span>Date Fin Contrat:</span> ";
        // line 64
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 64, $this->source); })()), "datefinContrat", [], "any", false, false, false, 64)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 64, $this->source); })()), "datefinContrat", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true)) : (""));
        yield "</p>
        <p><span>Nom Acheteur:</span> ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 65, $this->source); })()), "nomAcheteur", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
        <p><span>Nom Vendeur:</span> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 66, $this->source); })()), "nomVendeur", [], "any", false, false, false, 66), "html", null, true);
        yield "</p>
    </div>

    <div class=\"contract-details\">
        <h2>Détails du Contrat</h2>
        <table>
            <tr>
                <th>Information Contrat</th>
                <td>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 74, $this->source); })()), "informationContrat", [], "any", false, false, false, 74), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date Création Contrat</th>
                <td>";
        // line 78
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 78, $this->source); })()), "datecreationContrat", [], "any", false, false, false, 78)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 78, $this->source); })()), "datecreationContrat", [], "any", false, false, false, 78), "d/m/Y H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
        </table>
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
        return "contrat/pdf_template.html.twig";
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
        return array (  147 => 78,  140 => 74,  129 => 66,  125 => 65,  121 => 64,  117 => 63,  111 => 60,  53 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/contrat/pdf_template.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <title>Contrat - {{ contrat.id }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #0066cc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        td {
            color: #555;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .contract-info {
            margin-bottom: 20px;
        }

        .contract-info span {
            font-weight: bold;
        }

        .contract-details {
            margin-top: 20px;
            border-top: 2px solid #0066cc;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Contrat #{{ contrat.id }}</h1>

    <div class=\"contract-info\">
        <p><span>Date Début Contrat:</span> {{ contrat.dateDebutContrat ? contrat.dateDebutContrat|date('d/m/Y') : '' }}</p>
        <p><span>Date Fin Contrat:</span> {{ contrat.datefinContrat ? contrat.datefinContrat|date('d/m/Y') : '' }}</p>
        <p><span>Nom Acheteur:</span> {{ contrat.nomAcheteur }}</p>
        <p><span>Nom Vendeur:</span> {{ contrat.nomVendeur }}</p>
    </div>

    <div class=\"contract-details\">
        <h2>Détails du Contrat</h2>
        <table>
            <tr>
                <th>Information Contrat</th>
                <td>{{ contrat.informationContrat }}</td>
            </tr>
            <tr>
                <th>Date Création Contrat</th>
                <td>{{ contrat.datecreationContrat ? contrat.datecreationContrat|date('d/m/Y H:i:s') : '' }}</td>
            </tr>
        </table>
    </div>

</body>
</html>
", "contrat/pdf_template.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\contrat\\pdf_template.html.twig");
    }
}
