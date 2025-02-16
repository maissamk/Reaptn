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
class __TwigTemplate_55a364aacb4051e4ce6ee142a529dab9 extends Template
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
        yield "<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">Détails de la Parcelle</h1>

    <div class=\"card shadow-lg p-4\">
        <table class=\"table table-striped\">
            <tbody>
                <tr>
                    <th>Titre :</th>
                    <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Prix :</th>
                    <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 22, $this->source); })()), "prix", [], "any", false, false, false, 22), "html", null, true);
        yield " DT</td>
                </tr>
                <tr>
                    <th>Status :</th>
                    <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Emplacement :</th>
                    <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 30, $this->source); })()), "emplacement", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Taille :</th>
                    <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 34, $this->source); })()), "taille", [], "any", false, false, false, 34), "html", null, true);
        yield " m²</td>
                </tr>
                <tr>
                    <th>Date de création :</th>
                    <td>";
        // line 38
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 38, $this->source); })()), "dateCreationAnnonce", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 38, $this->source); })()), "dateCreationAnnonce", [], "any", false, false, false, 38), "d/m/Y H:i"), "html", null, true)) : ("Non spécifié"));
        yield "</td>
                </tr>
                <tr>
                    <th>Date de mise à jour :</th>
                    <td>";
        // line 42
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 42, $this->source); })()), "dateMisajourAnnonce", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 42, $this->source); })()), "dateMisajourAnnonce", [], "any", false, false, false, 42), "d/m/Y H:i"), "html", null, true)) : ("Non spécifié"));
        yield "</td>
                </tr>
                <tr>
                    <th>Propriétaire :</th>
                    <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 46, $this->source); })()), "nomProprietaire", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Contact :</th>
                    <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 50, $this->source); })()), "contactProprietaire", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_index");
        yield "\" class=\"btn btn-secondary me-2\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                <i class=\"fas fa-edit\"></i> Modifier
            </a>
            
            
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
        return array (  188 => 59,  182 => 56,  173 => 50,  166 => 46,  159 => 42,  152 => 38,  145 => 34,  138 => 30,  131 => 26,  124 => 22,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Détails de la Parcelle{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">Détails de la Parcelle</h1>

    <div class=\"card shadow-lg p-4\">
        <table class=\"table table-striped\">
            <tbody>
                <tr>
                    <th>Titre :</th>
                    <td>{{ parcelle_propriete.titre }}</td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td>{{ parcelle_propriete.description }}</td>
                </tr>
                <tr>
                    <th>Prix :</th>
                    <td>{{ parcelle_propriete.prix }} DT</td>
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
                    <th>Propriétaire :</th>
                    <td>{{ parcelle_propriete.nomProprietaire }}</td>
                </tr>
                <tr>
                    <th>Contact :</th>
                    <td>{{ parcelle_propriete.contactProprietaire }}</td>
                </tr>
            </tbody>
        </table>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('admin_parcelle_proprietes_index') }}\" class=\"btn btn-secondary me-2\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"{{ path('admin_parcelle_proprietes_edit', {'id': parcelle_propriete.id}) }}\" class=\"btn btn-warning me-2\">
                <i class=\"fas fa-edit\"></i> Modifier
            </a>
            
            
        </div>
    </div>
</div>
{% endblock %}
", "admin/parcelle_proprietes/show_back.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\admin\\parcelle_proprietes\\show_back.html.twig");
    }
}
