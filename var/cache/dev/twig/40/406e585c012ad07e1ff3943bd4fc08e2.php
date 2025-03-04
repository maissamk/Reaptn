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

/* contrat/show.html.twig */
class __TwigTemplate_86bb6796c4e73d7eb913a7802f238997 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/show.html.twig", 1);
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

        yield "Contrat";
        
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
<div class=\"container mt-5 pt-5\">

    <h1 class=\"text-center\">Contrat</h1>

    <div class=\"row justify-content-center\"> <!-- Centrer la ligne -->
        <div class=\"col-md-8\"> <!-- Largeur de la colonne -->
            <table class=\"table table-bordered\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>DateDébut Contrat</th>
                        <td>";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 21, $this->source); })()), "dateDebutContrat", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 21, $this->source); })()), "dateDebutContrat", [], "any", false, false, false, 21), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                    <tr>
                        <th>DateFin Contrat</th>
                        <td>";
        // line 25
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 25, $this->source); })()), "datefinContrat", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 25, $this->source); })()), "datefinContrat", [], "any", false, false, false, 25), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Nom Acheteur</th>
                        <td><span class=\"text-primary\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 29, $this->source); })()), "nomAcheteur", [], "any", false, false, false, 29), "html", null, true);
        yield "</span></td>
                    </tr>
                    <tr>
                        <th>Nom Vendeur</th>
                        <td><span class=\"text-primary\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 33, $this->source); })()), "nomVendeur", [], "any", false, false, false, 33), "html", null, true);
        yield "</span></td>
                    </tr>
                    <tr>
                        <th>Information Contrat</th>
                        <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 37, $this->source); })()), "informationContrat", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Date Création Contrat</th>
                        <td>";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 41, $this->source); })()), "datecreationContrat", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 41, $this->source); })()), "datecreationContrat", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                    
                </tbody>
            </table>

            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                <a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Éditer</a>
                <!-- Bouton pour télécharger le contrat en PDF -->
<a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_download", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
    Télécharger le contrat (PDF)
</a>
            </div>

 ";
        // line 56
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 56, $this->source); })()), "signatureId", [], "any", false, false, false, 56))) {
            // line 57
            yield "                <div class=\"mt-4\">
                    <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_signature", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-success\">Envoyer pour signature</a>
                </div>
            ";
        } else {
            // line 61
            yield "                <div class=\"mt-4\">
                    <span class=\"badge bg-success\">Contrat envoyé pour signature</span>
                </div>
            ";
        }
        // line 65
        yield "


            <div class=\"mt-4\">
                ";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "contrat/_delete_form.html.twig");
        yield "
            </div>
            
        </div>
    </div>
</div>

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
        return "contrat/show.html.twig";
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
        return array (  205 => 69,  199 => 65,  193 => 61,  187 => 58,  184 => 57,  182 => 56,  174 => 51,  169 => 49,  165 => 48,  155 => 41,  148 => 37,  141 => 33,  134 => 29,  127 => 25,  120 => 21,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contrat{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
<div class=\"container mt-5 pt-5\">

    <h1 class=\"text-center\">Contrat</h1>

    <div class=\"row justify-content-center\"> <!-- Centrer la ligne -->
        <div class=\"col-md-8\"> <!-- Largeur de la colonne -->
            <table class=\"table table-bordered\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ contrat.id }}</td>
                    </tr>
                    <tr>
                        <th>DateDébut Contrat</th>
                        <td>{{ contrat.dateDebutContrat ? contrat.dateDebutContrat|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    <tr>
                        <th>DateFin Contrat</th>
                        <td>{{ contrat.datefinContrat ? contrat.datefinContrat|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Nom Acheteur</th>
                        <td><span class=\"text-primary\">{{ contrat.nomAcheteur }}</span></td>
                    </tr>
                    <tr>
                        <th>Nom Vendeur</th>
                        <td><span class=\"text-primary\">{{ contrat.nomVendeur }}</span></td>
                    </tr>
                    <tr>
                        <th>Information Contrat</th>
                        <td>{{ contrat.informationContrat }}</td>
                    </tr>
                    <tr>
                        <th>Date Création Contrat</th>
                        <td>{{ contrat.datecreationContrat ? contrat.datecreationContrat|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    
                </tbody>
            </table>

            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"{{ path('app_contrat_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                <a href=\"{{ path('app_contrat_edit', {'id': contrat.id}) }}\" class=\"btn btn-warning\">Éditer</a>
                <!-- Bouton pour télécharger le contrat en PDF -->
<a href=\"{{ path('contrat_download', {'id': contrat.id}) }}\" class=\"btn btn-primary\">
    Télécharger le contrat (PDF)
</a>
            </div>

 {% if contrat.signatureId is null %}
                <div class=\"mt-4\">
                    <a href=\"{{ path('app_contrat_signature', {'id': contrat.id}) }}\" class=\"btn btn-success\">Envoyer pour signature</a>
                </div>
            {% else %}
                <div class=\"mt-4\">
                    <span class=\"badge bg-success\">Contrat envoyé pour signature</span>
                </div>
            {% endif %}



            <div class=\"mt-4\">
                {{ include('contrat/_delete_form.html.twig') }}
            </div>
            
        </div>
    </div>
</div>

{% endblock %}
", "contrat/show.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\contrat\\show.html.twig");
    }
}
