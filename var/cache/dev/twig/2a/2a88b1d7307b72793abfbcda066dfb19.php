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

/* materielvente/index.html.twig */
class __TwigTemplate_51d80edfc4572ad4521514de42c95486 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materielvente/index.html.twig", 1);
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

        yield "Matériel à vendre";
        
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
        yield "
<!-- Contenu -->
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\" style=\"
    margin-top: 120px;
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    background: linear-gradient(45deg, #ff8c00, #ff2d55);
    padding: 15px 30px;
    border-radius: 10px;
    display: inline-block;\">
    🚜 Matériel à vendre 🛠️
</h1>

    <div class=\"row\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["materielvente"]) {
            // line 24
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm card-container\">
                    <!-- Badge Catégorie -->
                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                        Matériel
                    </div>

                    <!-- Image du matériel -->
                    <img src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 32)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 32))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                         class=\"img-fluid card-img-fixed\" alt=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "\"
                         loading=\"lazy\">

                    <!-- Détails du matériel -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</h4>
                        <p>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "description", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "prix", [], "any", false, false, false, 42), "html", null, true);
            yield " DT</p>
                            <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier

                            </a>
                        </div>

                        <!-- Boutons \"Show\", \"Edit\" et \"Delete\" -->
                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-info btn-sm\">Plus de détails</a>
                            <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-warning btn-sm\">Modifier</a>
                               ";
            // line 55
            yield Twig\Extension\CoreExtension::include($this->env, $context, "materielvente/_delete_form.html.twig");
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 60
        if (!$context['_iterated']) {
            // line 61
            yield "            <div class=\"col-12 text-center\">
                <p>Aucun matériel disponible pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materielvente'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "    </div>
</div>

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>


<div class=\"d-flex justify-content-center\">
    <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_new");
        yield "\" class=\"btn btn-success\" title=\"Create New Property\">
        <i class=\"fas fa-plus-circle\"></i> Ajouter une nouvelle matériel
    </a>
</div>

<!-- Styles pour l'effet de zoom sur l'image -->
<style>
    /* Conteneur de la carte */
    .card-container {
        overflow: hidden;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    /* Image du matériel */
    .card-img-fixed {
        width: 100%;
        height: 300px; /* Hauteur uniforme */
        object-fit: cover; /* Remplit le conteneur sans déformation */
        transition: transform 0.3s ease-in-out; /* Animation fluide */
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    /* Effet de zoom au survol */
    .card-container:hover .card-img-fixed {
        transform: scale(1.1);
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
        return "materielvente/index.html.twig";
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
        return array (  235 => 75,  223 => 65,  214 => 61,  212 => 60,  194 => 55,  189 => 53,  184 => 51,  173 => 43,  169 => 42,  163 => 39,  159 => 38,  151 => 33,  147 => 32,  137 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Matériel à vendre{% endblock %}

{% block body %}

<!-- Contenu -->
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\" style=\"
    margin-top: 120px;
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    background: linear-gradient(45deg, #ff8c00, #ff2d55);
    padding: 15px 30px;
    border-radius: 10px;
    display: inline-block;\">
    🚜 Matériel à vendre 🛠️
</h1>

    <div class=\"row\">
        {% for materielvente in materielventes %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm card-container\">
                    <!-- Badge Catégorie -->
                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                        Matériel
                    </div>

                    <!-- Image du matériel -->
                    <img src=\"{{ asset(materielvente.image ? 'uploads/images/' ~ materielvente.image : 'images/default.png') }}\" 
                         class=\"img-fluid card-img-fixed\" alt=\"{{ materielvente.nom }}\"
                         loading=\"lazy\">

                    <!-- Détails du matériel -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>{{ materielvente.nom }}</h4>
                        <p>{{ materielvente.description }}</p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">{{ materielvente.prix }} DT</p>
                            <a href=\"{{ path('add_to_cart', { id: materielvente.id }) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier

                            </a>
                        </div>

                        <!-- Boutons \"Show\", \"Edit\" et \"Delete\" -->
                        <div class=\"d-flex justify-content-between mt-3\">
                            <a href=\"{{ path('app_materielvente_show', {'id': materielvente.id}) }}\" 
                               class=\"btn btn-info btn-sm\">Plus de détails</a>
                            <a href=\"{{ path('app_materielvente_edit', {'id': materielvente.id}) }}\" 
                               class=\"btn btn-warning btn-sm\">Modifier</a>
                               {{ include('materielvente/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p>Aucun matériel disponible pour le moment.</p>
            </div>
        {% endfor %}
    </div>
</div>

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>


<div class=\"d-flex justify-content-center\">
    <a href=\"{{ path('app_materielvente_new') }}\" class=\"btn btn-success\" title=\"Create New Property\">
        <i class=\"fas fa-plus-circle\"></i> Ajouter une nouvelle matériel
    </a>
</div>

<!-- Styles pour l'effet de zoom sur l'image -->
<style>
    /* Conteneur de la carte */
    .card-container {
        overflow: hidden;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    /* Image du matériel */
    .card-img-fixed {
        width: 100%;
        height: 300px; /* Hauteur uniforme */
        object-fit: cover; /* Remplit le conteneur sans déformation */
        transition: transform 0.3s ease-in-out; /* Animation fluide */
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    /* Effet de zoom au survol */
    .card-container:hover .card-img-fixed {
        transform: scale(1.1);
    }
</style>

{% endblock %}
", "materielvente/index.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\materielvente\\index.html.twig");
    }
}
