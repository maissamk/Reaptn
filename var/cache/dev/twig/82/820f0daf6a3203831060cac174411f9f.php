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

/* parcelle_proprietes/show.html.twig */
class __TwigTemplate_b75435e18977422f2d70b75b2bea8c0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parcelle_proprietes/show.html.twig", 1);
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

        yield "Détails de la Parcelle - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
    <h1 class=\"text-center mb-4\">Détails de la Parcelle</h1>

    <div class=\"card shadow-lg\">
        <!-- Image de la parcelle -->
        <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11))) : ("images/default.png"))), "html", null, true);
        yield "\" 
            class=\"card-img-top img-fluid parcelle-img\" 
            alt=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "\">

        <div class=\"card-body\">
            <h2 class=\"card-title text-center\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        yield "</h2>

            <table class=\"table table-striped mt-3\">
                <tbody>
                   
                    <tr>
                        <th>Description :</th>
                        <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Prix :</th>
                        <td><span class=\"fw-bold text-success\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), "html", null, true);
        yield " DT</span></td>
                    </tr>
                    <tr>
                        <th>Status :</th>
                        <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 31, $this->source); })()), "status", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Emplacement :</th>
                        <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 35, $this->source); })()), "emplacement", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Taille :</th>
                        <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 39, $this->source); })()), "taille", [], "any", false, false, false, 39), "html", null, true);
        yield " m²</td>
                    </tr>
                    <tr>
                        <th>Date de création :</th>
                        <td>";
        // line 43
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 43, $this->source); })()), "dateCreationAnnonce", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 43, $this->source); })()), "dateCreationAnnonce", [], "any", false, false, false, 43), "d/m/Y H:i"), "html", null, true)) : ("Non spécifié"));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Date de mise à jour :</th>
                        <td>";
        // line 47
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 47, $this->source); })()), "dateMisajourAnnonce", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 47, $this->source); })()), "dateMisajourAnnonce", [], "any", false, false, false, 47), "d/m/Y H:i"), "html", null, true)) : ("Non spécifié"));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Disponible :</th>
                        <td>
                            ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 52, $this->source); })()), "estDisponible", [], "any", false, false, false, 52)) {
            // line 53
            yield "                                <span class=\"badge bg-success\">Oui</span>
                            ";
        } else {
            // line 55
            yield "                                <span class=\"badge bg-danger\">Non</span>
                            ";
        }
        // line 57
        yield "                        </td>
                    </tr>
                    <tr>
                        <th>Propriétaire :</th>
                        <td>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 61, $this->source); })()), "nomProprietaire", [], "any", false, false, false, 61), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Contact :</th>
                        <td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 65, $this->source); })()), "contactProprietaire", [], "any", false, false, false, 65), "html", null, true);
        yield "</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Boutons d'action -->
        <div class=\"card-footer text-center\">
            <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
        yield "\" class=\"btn btn-primary me-3\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
            </a>
            ";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 77
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"btn btn-warning me-2\">
                <i class=\"fas fa-edit\"></i> Modifier
            </a>
            
            ";
            // line 81
            yield Twig\Extension\CoreExtension::include($this->env, $context, "parcelle_proprietes/_delete_form.html.twig");
            yield "
            ";
        }
        // line 83
        yield "        </div>
    </div>
</div>

<style>
    .parcelle-img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .table th {
        width: 30%;
        font-weight: bold;
        text-align: left;
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
        return "parcelle_proprietes/show.html.twig";
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
        return array (  234 => 83,  229 => 81,  221 => 77,  219 => 76,  213 => 73,  202 => 65,  195 => 61,  189 => 57,  185 => 55,  181 => 53,  179 => 52,  171 => 47,  164 => 43,  157 => 39,  150 => 35,  143 => 31,  136 => 27,  129 => 23,  119 => 16,  113 => 13,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Parcelle - {{ parcelle_propriete.titre }}{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">Détails de la Parcelle</h1>

    <div class=\"card shadow-lg\">
        <!-- Image de la parcelle -->
        <img src=\"{{ asset(parcelle_propriete.image ? 'uploads/images/' ~ parcelle_propriete.image : 'images/default.png') }}\" 
            class=\"card-img-top img-fluid parcelle-img\" 
            alt=\"{{ parcelle_propriete.titre }}\">

        <div class=\"card-body\">
            <h2 class=\"card-title text-center\">{{ parcelle_propriete.titre }}</h2>

            <table class=\"table table-striped mt-3\">
                <tbody>
                   
                    <tr>
                        <th>Description :</th>
                        <td>{{ parcelle_propriete.description }}</td>
                    </tr>
                    <tr>
                        <th>Prix :</th>
                        <td><span class=\"fw-bold text-success\">{{ parcelle_propriete.prix }} DT</span></td>
                    </tr>
                    <tr>
                        <th>Status :</th>
                        <td>{{ parcelle_propriete.status }}</td>
                    </tr>
                    <tr>
                        <th>Emplacement :</th>
                        <td>{{ parcelle_propriete.emplacement }}</td>
                    </tr>
                    <tr>
                        <th>Taille :</th>
                        <td>{{ parcelle_propriete.taille }} m²</td>
                    </tr>
                    <tr>
                        <th>Date de création :</th>
                        <td>{{ parcelle_propriete.dateCreationAnnonce ? parcelle_propriete.dateCreationAnnonce|date('d/m/Y H:i') : 'Non spécifié' }}</td>
                    </tr>
                    <tr>
                        <th>Date de mise à jour :</th>
                        <td>{{ parcelle_propriete.dateMisajourAnnonce ? parcelle_propriete.dateMisajourAnnonce|date('d/m/Y H:i') : 'Non spécifié' }}</td>
                    </tr>
                    <tr>
                        <th>Disponible :</th>
                        <td>
                            {% if parcelle_propriete.estDisponible %}
                                <span class=\"badge bg-success\">Oui</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Non</span>
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th>Propriétaire :</th>
                        <td>{{ parcelle_propriete.nomProprietaire }}</td>
                    </tr>
                    <tr>
                        <th>Contact :</th>
                        <td>{{ parcelle_propriete.contactProprietaire }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Boutons d'action -->
        <div class=\"card-footer text-center\">
            <a href=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"btn btn-primary me-3\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
            </a>
            {% if  is_granted('ROLE_AGRICULTEUR') %}
            <a href=\"{{ path('app_parcelle_proprietes_edit', {'id': parcelle_propriete.id}) }}\" class=\"btn btn-warning me-2\">
                <i class=\"fas fa-edit\"></i> Modifier
            </a>
            
            {{ include('parcelle_proprietes/_delete_form.html.twig') }}
            {% endif %}
        </div>
    </div>
</div>

<style>
    .parcelle-img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .table th {
        width: 30%;
        font-weight: bold;
        text-align: left;
    }
</style>

{% endblock %}
", "parcelle_proprietes/show.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\parcelle_proprietes\\show.html.twig");
    }
}
