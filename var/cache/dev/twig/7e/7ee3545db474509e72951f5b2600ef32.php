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

/* admin/parcelle_proprietes/show_back.html.twig */
class __TwigTemplate_98a2a9bc503faee3430d8db3e1dd1d31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/show_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/show_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/parcelle_proprietes/show_back.html.twig", 1);
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

        yield "Détails de la Parcelle";
        
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
        <div class=\"text-center mb-3\">
            <h2 class=\"text-primary\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h2>
        </div>
        
        <h4 class=\"text-warning text-center\">Détails de la Parcelle</h4>
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Titre</th>
                    <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td class=\"fw-bold text-primary\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 25, $this->source); })()), "prix", [], "any", false, false, false, 25), "html", null, true);
        yield " DT</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Emplacement</th>
                    <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 33, $this->source); })()), "emplacement", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Taille</th>
                    <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 37, $this->source); })()), "taille", [], "any", false, false, false, 37), "html", null, true);
        yield " m²</td>
                </tr>
                <tr>
                    <th>Date de création</th>
                    <td>";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 41, $this->source); })()), "dateCreationAnnonce", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 41, $this->source); })()), "dateCreationAnnonce", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true)) : ("Non spécifié"));
        yield "</td>
                </tr>
                <tr>
                    <th>Date de mise à jour</th>
                    <td>";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 45, $this->source); })()), "dateMisajourAnnonce", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 45, $this->source); })()), "dateMisajourAnnonce", [], "any", false, false, false, 45), "d/m/Y H:i"), "html", null, true)) : ("Non spécifié"));
        yield "</td>
                </tr>
                <tr>
                    <th>Propriétaire</th>
                    <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 49, $this->source); })()), "nomProprietaire", [], "any", false, false, false, 49), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 53, $this->source); })()), "contactProprietaire", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_index");
        yield "\" class=\"btn btn-success\" style=\"background-color: #8CC63F; border: none;\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
            <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit\"></i> Modifier
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
        return "admin/parcelle_proprietes/show_back.html.twig";
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
        return array (  194 => 62,  188 => 59,  179 => 53,  172 => 49,  165 => 45,  158 => 41,  151 => 37,  144 => 33,  137 => 29,  130 => 25,  123 => 21,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Détails de la Parcelle{% endblock %}

{% block body %}
<div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
    <div class=\"card shadow-sm p-4 rounded\" style=\"max-width: 600px; width: 100%;\">
        <div class=\"text-center mb-3\">
            <h2 class=\"text-primary\">{{ parcelle_propriete.titre }}</h2>
        </div>
        
        <h4 class=\"text-warning text-center\">Détails de la Parcelle</h4>
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Titre</th>
                    <td>{{ parcelle_propriete.titre }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ parcelle_propriete.description }}</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td class=\"fw-bold text-primary\">{{ parcelle_propriete.prix }} DT</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ parcelle_propriete.status }}</td>
                </tr>
                <tr>
                    <th>Emplacement</th>
                    <td>{{ parcelle_propriete.emplacement }}</td>
                </tr>
                <tr>
                    <th>Taille</th>
                    <td>{{ parcelle_propriete.taille }} m²</td>
                </tr>
                <tr>
                    <th>Date de création</th>
                    <td>{{ parcelle_propriete.dateCreationAnnonce ? parcelle_propriete.dateCreationAnnonce|date('d/m/Y H:i') : 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <th>Date de mise à jour</th>
                    <td>{{ parcelle_propriete.dateMisajourAnnonce ? parcelle_propriete.dateMisajourAnnonce|date('d/m/Y H:i') : 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <th>Propriétaire</th>
                    <td>{{ parcelle_propriete.nomProprietaire }}</td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td>{{ parcelle_propriete.contactProprietaire }}</td>
                </tr>
            </tbody>
        </table>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"{{ path('admin_parcelle_proprietes_index') }}\" class=\"btn btn-success\" style=\"background-color: #8CC63F; border: none;\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
            <a href=\"{{ path('admin_parcelle_proprietes_edit', {'id': parcelle_propriete.id}) }}\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit\"></i> Modifier
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

{% endblock %}", "admin/parcelle_proprietes/show_back.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\parcelle_proprietes\\show_back.html.twig");
    }
}
