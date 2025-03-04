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

/* materiellocation/index.html.twig */
class __TwigTemplate_bf0baee9cd4f415019708fe9a85c348e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiellocation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiellocation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiellocation/index.html.twig", 1);
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

        yield "Materiel location";
        
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
        yield "<!-- Contenu -->
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
        🚜 Matériel agricole A louer 🛠️
    </h1>

    <div class=\"row\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiellocations"]) || array_key_exists("materiellocations", $context) ? $context["materiellocations"] : (function () { throw new RuntimeError('Variable "materiellocations" does not exist.', 22, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["materiellocation"]) {
            // line 23
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm card-container\">
                    <!-- Badge Catégorie -->
                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                        Location
                    </div>

                    <!-- Image du matériel -->
                    <img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "image", [], "any", false, false, false, 31)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "image", [], "any", false, false, false, 31))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                         class=\"img-fluid card-img-fixed\" alt=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "\"
                         loading=\"lazy\">

                    <!-- Détails du matériel -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "nom", [], "any", false, false, false, 37), "html", null, true);
            yield "</h4>
                        <p>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "description", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "prix", [], "any", false, false, false, 41), "html", null, true);
            yield " DT</p>
                            ";
            // line 42
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
                // line 43
                yield "                            <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Louer maintenant
                            </a>
                            ";
            }
            // line 47
            yield "                        </div>

                        <!-- Boutons \"Show\", \"Edit\" et \"Delete\" -->
<div class=\"d-flex flex-wrap gap-3 mt-3\">  
    <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" 
       class=\"btn btn-info btn-sm text-white\">
       <i class=\"fas fa-eye\"></i> Plus de détails
    </a>

    ";
            // line 56
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
                // line 57
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" 
           class=\"btn btn-warning btn-sm text-white\">
           <i class=\"fas fa-edit\"></i> Modifier
        </a>

        ";
                // line 62
                yield Twig\Extension\CoreExtension::include($this->env, $context, "materiellocation/_delete_form.html.twig");
                yield "
    ";
            }
            // line 64
            yield "</div>

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
        // line 69
        if (!$context['_iterated']) {
            // line 70
            yield "            <div class=\"col-12 text-center\">
                <p>Aucun matériel disponible pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiellocation'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "    </div>
</div>

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>
";
        // line 81
        if (CoreExtension::inFilter("ROLE_AGRICULTEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "roles", [], "any", false, false, false, 81))) {
            // line 82
            yield "<div class=\"d-flex justify-content-center mt-4\">
    <a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_new");
            yield "\" class=\"btn btn-success\" title=\"Ajouter un nouveau matériel\">
        <i class=\"fas fa-plus-circle\"></i> Ajouter un nouveau matériel
    </a>
</div>
";
        }
        // line 88
        yield "
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

    .back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
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
        return "materiellocation/index.html.twig";
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
        return array (  260 => 88,  252 => 83,  249 => 82,  247 => 81,  238 => 74,  229 => 70,  227 => 69,  210 => 64,  205 => 62,  196 => 57,  194 => 56,  186 => 51,  180 => 47,  174 => 43,  172 => 42,  168 => 41,  162 => 38,  158 => 37,  150 => 32,  146 => 31,  136 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Materiel location{% endblock %}

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
        🚜 Matériel agricole A louer 🛠️
    </h1>

    <div class=\"row\">
        {% for materiellocation in materiellocations %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm card-container\">
                    <!-- Badge Catégorie -->
                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                        Location
                    </div>

                    <!-- Image du matériel -->
                    <img src=\"{{ asset(materiellocation.image ? 'uploads/images/' ~ materiellocation.image : 'images/default.png') }}\" 
                         class=\"img-fluid card-img-fixed\" alt=\"{{ materiellocation.nom }}\"
                         loading=\"lazy\">

                    <!-- Détails du matériel -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>{{ materiellocation.nom }}</h4>
                        <p>{{ materiellocation.description }}</p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">{{ materiellocation.prix }} DT</p>
                            {% if  app.user %}
                            <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Louer maintenant
                            </a>
                            {% endif %}
                        </div>

                        <!-- Boutons \"Show\", \"Edit\" et \"Delete\" -->
<div class=\"d-flex flex-wrap gap-3 mt-3\">  
    <a href=\"{{ path('app_materiellocation_show', {'id': materiellocation.id}) }}\" 
       class=\"btn btn-info btn-sm text-white\">
       <i class=\"fas fa-eye\"></i> Plus de détails
    </a>

    {% if is_granted('ROLE_AGRICULTEUR') %}
        <a href=\"{{ path('app_materiellocation_edit', {'id': materiellocation.id}) }}\" 
           class=\"btn btn-warning btn-sm text-white\">
           <i class=\"fas fa-edit\"></i> Modifier
        </a>

        {{ include('materiellocation/_delete_form.html.twig') }}
    {% endif %}
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
{% if 'ROLE_AGRICULTEUR' in app.user.roles %}
<div class=\"d-flex justify-content-center mt-4\">
    <a href=\"{{ path('app_materiellocation_new') }}\" class=\"btn btn-success\" title=\"Ajouter un nouveau matériel\">
        <i class=\"fas fa-plus-circle\"></i> Ajouter un nouveau matériel
    </a>
</div>
{% endif %}

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

    .back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }
</style>

{% endblock %}
", "materiellocation/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\materiellocation\\index.html.twig");
    }
}
