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

/* materielvente/show.html.twig */
class __TwigTemplate_80cfb411bc5afb4f24c100c4e30778a2 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materielvente/show.html.twig", 1);
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

        yield "Détails du Matériel";
        
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
        yield "<div class=\"container\" style=\"margin-top: 180px;\">
    <div class=\"card shadow-lg p-4 rounded\">
        <div class=\"text-center\">
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10))), "html", null, true);
            yield "\" 
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
            yield "\" 
                     width=\"150\" height=\"150\">
            ";
        } else {
            // line 15
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.png"), "html", null, true);
            yield "\"
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"Image par défaut\" 
                     width=\"150\" height=\"150\">
            ";
        }
        // line 20
        yield "            <h2 class=\"mt-3 text-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</h2>
        </div>

        <div class=\"mt-4\">
            <h4 class=\"text-warning text-center\">Informations sur le matériel</h4>
            <table class=\"table table-bordered mt-3\">
                <tbody>
                    
                    <tr>
                        <th class=\"bg-light\">Nom</th>
                        <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Prix</th>
                        <td class=\"fw-bold text-primary\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 34, $this->source); })()), "prix", [], "any", false, false, false, 34), "html", null, true);
        yield " DT</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Description</th>
                        <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Disponibilité</th>
                        <td>
                            ";
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 43, $this->source); })()), "disponibilite", [], "any", false, false, false, 43)) {
            // line 44
            yield "                                <span class=\"badge bg-success\">Disponible</span>
                            ";
        } else {
            // line 46
            yield "                                <span class=\"badge bg-danger\">Non disponible</span>
                            ";
        }
        // line 48
        yield "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_index");
        yield "\" class=\"btn btn-primary me-3\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
           
        </div>

        
    </div>
</div>

<style>
    .card {
        max-width: 700px;
        margin: auto;
        border-radius: 12px;
    }

    .table th {
        width: 30%;
    }

    .table td {
        width: 70%;
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
        return "materielvente/show.html.twig";
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
        return array (  183 => 55,  174 => 48,  170 => 46,  166 => 44,  164 => 43,  156 => 38,  149 => 34,  142 => 30,  128 => 20,  119 => 15,  113 => 12,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Matériel{% endblock %}

{% block body %}
<div class=\"container\" style=\"margin-top: 180px;\">
    <div class=\"card shadow-lg p-4 rounded\">
        <div class=\"text-center\">
            {% if materielvente.image %}
                <img src=\"{{ asset('uploads/images/' ~ materielvente.image) }}\" 
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"{{ materielvente.nom }}\" 
                     width=\"150\" height=\"150\">
            {% else %}
                <img src=\"{{ asset('images/default.png') }}\"
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"Image par défaut\" 
                     width=\"150\" height=\"150\">
            {% endif %}
            <h2 class=\"mt-3 text-success\">{{ materielvente.nom }}</h2>
        </div>

        <div class=\"mt-4\">
            <h4 class=\"text-warning text-center\">Informations sur le matériel</h4>
            <table class=\"table table-bordered mt-3\">
                <tbody>
                    
                    <tr>
                        <th class=\"bg-light\">Nom</th>
                        <td>{{ materielvente.nom }}</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Prix</th>
                        <td class=\"fw-bold text-primary\">{{ materielvente.prix }} DT</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Description</th>
                        <td>{{ materielvente.description }}</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Disponibilité</th>
                        <td>
                            {% if materielvente.disponibilite %}
                                <span class=\"badge bg-success\">Disponible</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Non disponible</span>
                            {% endif %}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            <a href=\"{{ path('app_materielvente_index') }}\" class=\"btn btn-primary me-3\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
           
        </div>

        
    </div>
</div>

<style>
    .card {
        max-width: 700px;
        margin: auto;
        border-radius: 12px;
    }

    .table th {
        width: 30%;
    }

    .table td {
        width: 70%;
    }
</style>

{% endblock %}
", "materielvente/show.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\materielvente\\show.html.twig");
    }
}
