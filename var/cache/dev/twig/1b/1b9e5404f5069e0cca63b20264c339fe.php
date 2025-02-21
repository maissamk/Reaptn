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

/* admin/materielagricole/afficher.html.twig */
class __TwigTemplate_b6c4666ef9827cd1e8b6dda8526290ba extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/afficher.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/materielagricole/afficher.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Détails du Matériel - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
    <div class=\"card shadow-sm p-4 rounded\" style=\"max-width: 600px; width: 100%;\">
        <div class=\"d-flex align-items-center mb-3 text-center\">
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10))), "html", null, true);
            yield "\" 
                     class=\"rounded border border-secondary me-3\" 
                     alt=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
            yield "\" width=\"100\" height=\"100\">
            ";
        } else {
            // line 14
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.png"), "html", null, true);
            yield "\"
                     class=\"rounded border border-secondary me-3\" 
                     alt=\"Image par défaut\" width=\"100\" height=\"100\">
            ";
        }
        // line 18
        yield "            <div>
                <h2 class=\"text-primary\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield "</h2>
                <span class=\"badge ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 20, $this->source); })()), "disponibilite", [], "any", false, false, false, 20)) {
            yield "bg-success";
        } else {
            yield "bg-danger";
        }
        yield "\">
                    ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 21, $this->source); })()), "disponibilite", [], "any", false, false, false, 21)) {
            yield " Disponible ";
        } else {
            yield " Non disponible ";
        }
        // line 22
        yield "                </span>
            </div>
        </div>

        <h4 class=\"text-warning text-center\">Détails du Matériel</h4>
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td class=\"fw-bold text-primary\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 35, $this->source); })()), "prix", [], "any", false, false, false, 35), "html", null, true);
        yield " DT</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tables");
        yield "\" class=\"btn btn-success\" style=\"background-color: #8CC63F; border: none;\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
            
        </div>
    </div>
</div>

<style>
    .table th {
        width: 30%;
        background-color: #f8f9fa;
    }

    .btn-success {
        font-weight: bold;
        color: white;
    }
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/materielagricole/afficher.html.twig";
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
        return array (  181 => 45,  172 => 39,  165 => 35,  158 => 31,  147 => 22,  141 => 21,  133 => 20,  129 => 19,  126 => 18,  118 => 14,  113 => 12,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Détails du Matériel - Admin{% endblock %}

{% block body %}
<div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
    <div class=\"card shadow-sm p-4 rounded\" style=\"max-width: 600px; width: 100%;\">
        <div class=\"d-flex align-items-center mb-3 text-center\">
            {% if materielvente.image %}
                <img src=\"{{ asset('uploads/images/' ~ materielvente.image) }}\" 
                     class=\"rounded border border-secondary me-3\" 
                     alt=\"{{ materielvente.nom }}\" width=\"100\" height=\"100\">
            {% else %}
                <img src=\"{{ asset('images/default.png') }}\"
                     class=\"rounded border border-secondary me-3\" 
                     alt=\"Image par défaut\" width=\"100\" height=\"100\">
            {% endif %}
            <div>
                <h2 class=\"text-primary\">{{ materielvente.nom }}</h2>
                <span class=\"badge {% if materielvente.disponibilite %}bg-success{% else %}bg-danger{% endif %}\">
                    {% if materielvente.disponibilite %} Disponible {% else %} Non disponible {% endif %}
                </span>
            </div>
        </div>

        <h4 class=\"text-warning text-center\">Détails du Matériel</h4>
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Nom</th>
                    <td>{{ materielvente.nom }}</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td class=\"fw-bold text-primary\">{{ materielvente.prix }} DT</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ materielvente.description }}</td>
                </tr>
            </tbody>
        </table>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"{{ path('app_tables') }}\" class=\"btn btn-success\" style=\"background-color: #8CC63F; border: none;\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
            
        </div>
    </div>
</div>

<style>
    .table th {
        width: 30%;
        background-color: #f8f9fa;
    }

    .btn-success {
        font-weight: bold;
        color: white;
    }
</style>

{% endblock %}
", "admin/materielagricole/afficher.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\materielagricole\\afficher.html.twig");
    }
}
