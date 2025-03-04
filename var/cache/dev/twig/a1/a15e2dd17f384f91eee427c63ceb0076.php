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

/* categorie/index.html.twig */
class __TwigTemplate_4ed8e2a341db844e22f5c488c53e2649 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
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

        yield "Catégories";
        
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
        yield "<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-list\"></i> Liste des Catégories
    </h1>

    <div class=\"row mt-4\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 13
            yield "            <div class=\"col-md-6\">
                <div class=\"card shadow-lg mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center text-dark fw-bold\">
                            <i class=\"fas fa-tag\"></i> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "
                        </h5>
                        
                        <p><strong>Description :</strong> ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 20), 0, 100), "html", null, true);
            yield "...</p>
                        
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm text-white\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm text-white\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 33
        if (!$context['_iterated']) {
            // line 34
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-danger fw-bold\">Aucune catégorie trouvée.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    </div>

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        yield "\" class=\"btn btn-success btn-lg shadow\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter une nouvelle catégorie
        </a>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.03);
    }
    .rounded-circle {
        border: 3px solid #007bff;
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
        return "categorie/index.html.twig";
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
        return array (  165 => 41,  160 => 38,  151 => 34,  149 => 33,  137 => 26,  131 => 23,  125 => 20,  119 => 17,  113 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catégories{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-list\"></i> Liste des Catégories
    </h1>

    <div class=\"row mt-4\">
        {% for categorie in categories %}
            <div class=\"col-md-6\">
                <div class=\"card shadow-lg mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center text-dark fw-bold\">
                            <i class=\"fas fa-tag\"></i> {{ categorie.nom }}
                        </h5>
                        
                        <p><strong>Description :</strong> {{ categorie.description|slice(0, 100) }}...</p>
                        
                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"{{ path('app_categorie_show', {'id': categorie.id}) }}\" class=\"btn btn-info btn-sm text-white\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"{{ path('app_categorie_edit', {'id': categorie.id}) }}\" class=\"btn btn-warning btn-sm text-white\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-danger fw-bold\">Aucune catégorie trouvée.</p>
            </div>
        {% endfor %}
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('app_categorie_new') }}\" class=\"btn btn-success btn-lg shadow\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter une nouvelle catégorie
        </a>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.03);
    }
    .rounded-circle {
        border: 3px solid #007bff;
    }
</style>

{% endblock %}", "categorie/index.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\categorie\\index.html.twig");
    }
}
