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
class __TwigTemplate_16fd2ebdba47d8bb7c4571d5333ff3e9 extends Template
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
        <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10))) : ("images/default.png"))), "html", null, true);
        yield "\" 
            class=\"card-img-top img-fluid parcelle-img\" 
            alt=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "html", null, true);
        yield "\">

        <div class=\"card-body\">
            <h2 class=\"card-title text-center\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        yield "</h2>

            <table class=\"table table-striped mt-3\">
                <tbody>
                    <tr>
                        <th>Description :</th>
                        <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Prix :</th>
                        <td><span class=\"fw-bold text-success\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 25, $this->source); })()), "prix", [], "any", false, false, false, 25), "html", null, true);
        yield " DT</span></td>
                    </tr>
                    <tr>
                        <th>Status :</th>
                        <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Emplacement :</th>
                        <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 33, $this->source); })()), "emplacement", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Taille :</th>
                        <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 37, $this->source); })()), "taille", [], "any", false, false, false, 37), "html", null, true);
        yield " m²</td>
                    </tr>
                    <tr>
                        <th>Date de création :</th>
                        <td>";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 41, $this->source); })()), "dateCreationAnnonce", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 41, $this->source); })()), "dateCreationAnnonce", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true)) : ("Non spécifié"));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Date de mise à jour :</th>
                        <td>";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 45, $this->source); })()), "dateMisajourAnnonce", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 45, $this->source); })()), "dateMisajourAnnonce", [], "any", false, false, false, 45), "d/m/Y H:i"), "html", null, true)) : ("Non spécifié"));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Disponible :</th>
                        <td>
                            ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 50, $this->source); })()), "estDisponible", [], "any", false, false, false, 50)) {
            // line 51
            yield "                                <span class=\"badge bg-success\">Oui</span>
                            ";
        } else {
            // line 53
            yield "                                <span class=\"badge bg-danger\">Non</span>
                            ";
        }
        // line 55
        yield "                        </td>
                    </tr>
                    <tr>
                        <th>Propriétaire :</th>
                        <td>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 59, $this->source); })()), "nomProprietaire", [], "any", false, false, false, 59), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Contact :</th>
                        <td>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 63, $this->source); })()), "contactProprietaire", [], "any", false, false, false, 63), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
    <th>Email de l'annonceur :</th>
    <td>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), "html", null, true);
        yield "</td>
</tr>
                </tbody>
            </table>
        </div>

        <!-- Début section boutons -->
        <div class=\"card-footer text-center\">
            <!-- Groupe 1 : Bouton retour -->
            <div class=\"mb-4\">
                <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
            </div>

            <!-- Groupe 2 : Boutons principaux avec séparation visuelle -->
            <div class=\"border-top border-bottom py-4 mb-4\">
                <div class=\"d-flex justify-content-center gap-3\">
                    <a href=\"#contact-form\" 
                       class=\"btn btn-lg text-white\" 
                       id=\"contact-btn\" 
                       style=\"background-color: #88C425;\">
                        Écrire à l'annonceur
                    </a>
                    <a href=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index", ["proprietaire" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 91, $this->source); })()), "nomProprietaire", [], "any", false, false, false, 91)]), "html", null, true);
        yield "\" 
                       class=\"btn btn-lg text-white\" 
                       style=\"background-color: #5A4033;\">
                        Voir ses autres annonces
                    </a>
                </div>
            </div>

            <!-- Groupe 3 : Boutons administration -->
            ";
        // line 100
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 101
            yield "                <div class=\"mt-3\">
                    <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\" 
                       class=\"btn btn-warning me-2\">
                        <i class=\"fas fa-edit\"></i> Modifier
                    </a>
                    ";
            // line 106
            yield Twig\Extension\CoreExtension::include($this->env, $context, "parcelle_proprietes/_delete_form.html.twig");
            yield "
                </div>
            ";
        }
        // line 109
        yield "        </div>
        <!-- Fin section boutons -->
    </div>
</div>

<!-- Section formulaire de contact -->
<div class=\"container mt-5\" id=\"contact-form\">
    <div class=\"card shadow-lg\">
        <div class=\"card-body\">
            <h3 class=\"card-title mb-4\">Envoyer un message</h3>
            ";
        // line 119
        if (array_key_exists("contactForm", $context)) {
            // line 120
            yield "                ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 120, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
            yield "
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            ";
            // line 123
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 123, $this->source); })()), "nom", [], "any", false, false, false, 123), 'row', ["attr" => ["class" => "form-control"], "label" => "Votre nom"]);
            yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
            // line 126
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126), 'row', ["attr" => ["class" => "form-control"], "label" => "Votre email"]);
            yield "
                        </div>
                        <div class=\"col-12\">
                            ";
            // line 129
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 129, $this->source); })()), "message", [], "any", false, false, false, 129), 'row', ["attr" => ["class" => "form-control", "rows" => 5], "label" => "Votre message"]);
            yield "
                        </div>
                        <div class=\"col-12 text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-paper-plane me-2\"></i>Envoyer
                            </button>
                        </div>
                    </div>
                ";
            // line 137
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 137, $this->source); })()), 'form_end');
            yield "
            ";
        }
        // line 139
        yield "        </div>
    </div>
</div>

<!-- Script pour le défilement fluide -->
<script>
document.getElementById('contact-btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#contact-form').scrollIntoView({ 
        behavior: 'smooth', 
        block: 'start' 
    });
});
</script>

<!-- Styles personnalisés -->
<style>
.parcelle-img {
    height: 400px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
}

#contact-form {
    scroll-margin-top: 100px; /* Espace pour la barre de navigation */
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
        return array (  316 => 139,  311 => 137,  300 => 129,  294 => 126,  288 => 123,  281 => 120,  279 => 119,  267 => 109,  261 => 106,  254 => 102,  251 => 101,  249 => 100,  237 => 91,  220 => 77,  207 => 67,  200 => 63,  193 => 59,  187 => 55,  183 => 53,  179 => 51,  177 => 50,  169 => 45,  162 => 41,  155 => 37,  148 => 33,  141 => 29,  134 => 25,  127 => 21,  118 => 15,  112 => 12,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Parcelle - {{ parcelle_propriete.titre }}{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">Détails de la Parcelle</h1>

    <div class=\"card shadow-lg\">
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
                    <tr>
    <th>Email de l'annonceur :</th>
    <td>{{ parcelle_propriete.email }}</td>
</tr>
                </tbody>
            </table>
        </div>

        <!-- Début section boutons -->
        <div class=\"card-footer text-center\">
            <!-- Groupe 1 : Bouton retour -->
            <div class=\"mb-4\">
                <a href=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
            </div>

            <!-- Groupe 2 : Boutons principaux avec séparation visuelle -->
            <div class=\"border-top border-bottom py-4 mb-4\">
                <div class=\"d-flex justify-content-center gap-3\">
                    <a href=\"#contact-form\" 
                       class=\"btn btn-lg text-white\" 
                       id=\"contact-btn\" 
                       style=\"background-color: #88C425;\">
                        Écrire à l'annonceur
                    </a>
                    <a href=\"{{ path('app_parcelle_proprietes_index', {'proprietaire': parcelle_propriete.nomProprietaire}) }}\" 
                       class=\"btn btn-lg text-white\" 
                       style=\"background-color: #5A4033;\">
                        Voir ses autres annonces
                    </a>
                </div>
            </div>

            <!-- Groupe 3 : Boutons administration -->
            {% if is_granted('ROLE_AGRICULTEUR') %}
                <div class=\"mt-3\">
                    <a href=\"{{ path('app_parcelle_proprietes_edit', {'id': parcelle_propriete.id}) }}\" 
                       class=\"btn btn-warning me-2\">
                        <i class=\"fas fa-edit\"></i> Modifier
                    </a>
                    {{ include('parcelle_proprietes/_delete_form.html.twig') }}
                </div>
            {% endif %}
        </div>
        <!-- Fin section boutons -->
    </div>
</div>

<!-- Section formulaire de contact -->
<div class=\"container mt-5\" id=\"contact-form\">
    <div class=\"card shadow-lg\">
        <div class=\"card-body\">
            <h3 class=\"card-title mb-4\">Envoyer un message</h3>
            {% if contactForm is defined %}
                {{ form_start(contactForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(contactForm.nom, {'attr': {'class': 'form-control'}, 'label': 'Votre nom'}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(contactForm.email, {'attr': {'class': 'form-control'}, 'label': 'Votre email'}) }}
                        </div>
                        <div class=\"col-12\">
                            {{ form_row(contactForm.message, {'attr': {'class': 'form-control', 'rows': 5}, 'label': 'Votre message'}) }}
                        </div>
                        <div class=\"col-12 text-center\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-paper-plane me-2\"></i>Envoyer
                            </button>
                        </div>
                    </div>
                {{ form_end(contactForm) }}
            {% endif %}
        </div>
    </div>
</div>

<!-- Script pour le défilement fluide -->
<script>
document.getElementById('contact-btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#contact-form').scrollIntoView({ 
        behavior: 'smooth', 
        block: 'start' 
    });
});
</script>

<!-- Styles personnalisés -->
<style>
.parcelle-img {
    height: 400px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
}

#contact-form {
    scroll-margin-top: 100px; /* Espace pour la barre de navigation */
}
</style>

{% endblock %}", "parcelle_proprietes/show.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\parcelle_proprietes\\show.html.twig");
    }
}
