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

/* admin/offre/show_back.html.twig */
class __TwigTemplate_14bbe231ea303e89513cbec88002a798 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/offre/show_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/offre/show_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/offre/show_back.html.twig", 1);
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

        yield "Détails de l'Offre";
        
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
        <h2 class=\"text-primary text-center\">Détails de l'Offre</h2>
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Titre</th>
                    <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>";
        // line 17
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 17, $this->source); })()), "descr", [], "any", false, false, false, 17)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 17, $this->source); })()), "descr", [], "any", false, false, false, 17), "html", null, true)) : ("Aucune description"));
        yield "</td>
                </tr>
                <tr>
                    <th>Statut</th>
                    <td>
                        <span class=\"badge ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 22, $this->source); })()), "statut", [], "any", false, false, false, 22)) {
            yield "bg-success";
        } else {
            yield "bg-danger";
        }
        yield "\">
                            ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 23, $this->source); })()), "statut", [], "any", false, false, false, 23)) {
            yield " Active ";
        } else {
            yield " Inactive ";
        }
        // line 24
        yield "                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Compétences</th>
                    <td>";
        // line 29
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 29, $this->source); })()), "comp", [], "any", false, false, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 29, $this->source); })()), "comp", [], "any", false, false, false, 29), "html", null, true)) : ("Aucune compétence"));
        yield "</td>
                </tr>
                <tr>
                    <th>Identifiant A</th>
                    <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 33, $this->source); })()), "ida", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Identifiant E</th>
                    <td>";
        // line 37
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 37, $this->source); })()), "ide", [], "any", false, false, false, 37)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 37, $this->source); })()), "ide", [], "any", false, false, false, 37), "html", null, true)) : ("Non défini"));
        yield "</td>
                </tr>
            </tbody>
        </table>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_index");
        yield "\" class=\"btn btn-success\" style=\"background-color: #8CC63F; border: none;\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
            <a href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
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
        return "admin/offre/show_back.html.twig";
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
        return array (  174 => 46,  168 => 43,  159 => 37,  152 => 33,  145 => 29,  138 => 24,  132 => 23,  124 => 22,  116 => 17,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Détails de l'Offre{% endblock %}

{% block body %}
<div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
    <div class=\"card shadow-sm p-4 rounded\" style=\"max-width: 600px; width: 100%;\">
        <h2 class=\"text-primary text-center\">Détails de l'Offre</h2>
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Titre</th>
                    <td>{{ offre.titre }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ offre.descr ? offre.descr : 'Aucune description' }}</td>
                </tr>
                <tr>
                    <th>Statut</th>
                    <td>
                        <span class=\"badge {% if offre.statut %}bg-success{% else %}bg-danger{% endif %}\">
                            {% if offre.statut %} Active {% else %} Inactive {% endif %}
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Compétences</th>
                    <td>{{ offre.comp ? offre.comp : 'Aucune compétence' }}</td>
                </tr>
                <tr>
                    <th>Identifiant A</th>
                    <td>{{ offre.ida }}</td>
                </tr>
                <tr>
                    <th>Identifiant E</th>
                    <td>{{ offre.ide ? offre.ide : 'Non défini' }}</td>
                </tr>
            </tbody>
        </table>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"{{ path('admin_offre_index') }}\" class=\"btn btn-success\" style=\"background-color: #8CC63F; border: none;\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
            <a href=\"{{ path('admin_offre_edit', {id: offre.id}) }}\" class=\"btn btn-warning\">
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
{% endblock %}", "admin/offre/show_back.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\offre\\show_back.html.twig");
    }
}
