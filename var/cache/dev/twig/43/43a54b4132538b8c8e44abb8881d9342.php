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

/* materiellocation/show.html.twig */
class __TwigTemplate_6a08655f47a7a88396da4a152c96716c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiellocation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiellocation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiellocation/show.html.twig", 1);
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

        yield "Détails du Materiellocation";
        
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiellocation"]) || array_key_exists("materiellocation", $context) ? $context["materiellocation"] : (function () { throw new RuntimeError('Variable "materiellocation" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiellocation"]) || array_key_exists("materiellocation", $context) ? $context["materiellocation"] : (function () { throw new RuntimeError('Variable "materiellocation" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10))), "html", null, true);
            yield "\" 
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiellocation"]) || array_key_exists("materiellocation", $context) ? $context["materiellocation"] : (function () { throw new RuntimeError('Variable "materiellocation" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiellocation"]) || array_key_exists("materiellocation", $context) ? $context["materiellocation"] : (function () { throw new RuntimeError('Variable "materiellocation" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</h2>
        </div>

        <div class=\"mt-4\">
            <h4 class=\"text-warning text-center\">Informations sur la location</h4>
            <table class=\"table table-bordered mt-3\">
                <tbody>
                    <tr>
                        <th class=\"bg-light\">Nom</th>
                        <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiellocation"]) || array_key_exists("materiellocation", $context) ? $context["materiellocation"] : (function () { throw new RuntimeError('Variable "materiellocation" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Prix</th>
                        <td class=\"fw-bold text-primary\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiellocation"]) || array_key_exists("materiellocation", $context) ? $context["materiellocation"] : (function () { throw new RuntimeError('Variable "materiellocation" does not exist.', 33, $this->source); })()), "prix", [], "any", false, false, false, 33), "html", null, true);
        yield " DT</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Description</th>
                        <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiellocation"]) || array_key_exists("materiellocation", $context) ? $context["materiellocation"] : (function () { throw new RuntimeError('Variable "materiellocation" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Disponibilité</th>
                        <td>
                            ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiellocation"]) || array_key_exists("materiellocation", $context) ? $context["materiellocation"] : (function () { throw new RuntimeError('Variable "materiellocation" does not exist.', 42, $this->source); })()), "disponibilite", [], "any", false, false, false, 42)) {
            // line 43
            yield "                                <span class=\"badge bg-success\">Disponible</span>
                            ";
        } else {
            // line 45
            yield "                                <span class=\"badge bg-danger\">Non disponible</span>
                            ";
        }
        // line 47
        yield "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-center mt-4\">
            <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_index");
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
        return "materiellocation/show.html.twig";
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
        return array (  182 => 54,  173 => 47,  169 => 45,  165 => 43,  163 => 42,  155 => 37,  148 => 33,  141 => 29,  128 => 20,  119 => 15,  113 => 12,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Materiellocation{% endblock %}

{% block body %}
<div class=\"container\" style=\"margin-top: 180px;\">
    <div class=\"card shadow-lg p-4 rounded\">
        <div class=\"text-center\">
            {% if materiellocation.image %}
                <img src=\"{{ asset('uploads/images/' ~ materiellocation.image) }}\" 
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"{{ materiellocation.nom }}\" 
                     width=\"150\" height=\"150\">
            {% else %}
                <img src=\"{{ asset('images/default.png') }}\"
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"Image par défaut\" 
                     width=\"150\" height=\"150\">
            {% endif %}
            <h2 class=\"mt-3 text-success\">{{ materiellocation.nom }}</h2>
        </div>

        <div class=\"mt-4\">
            <h4 class=\"text-warning text-center\">Informations sur la location</h4>
            <table class=\"table table-bordered mt-3\">
                <tbody>
                    <tr>
                        <th class=\"bg-light\">Nom</th>
                        <td>{{ materiellocation.nom }}</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Prix</th>
                        <td class=\"fw-bold text-primary\">{{ materiellocation.prix }} DT</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Description</th>
                        <td>{{ materiellocation.description }}</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Disponibilité</th>
                        <td>
                            {% if materiellocation.disponibilite %}
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
            <a href=\"{{ path('app_materiellocation_index') }}\" class=\"btn btn-primary me-3\">
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
", "materiellocation/show.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\materiellocation\\show.html.twig");
    }
}
