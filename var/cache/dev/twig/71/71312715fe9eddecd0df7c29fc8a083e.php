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

/* admin/contrat/show_back.html.twig */
class __TwigTemplate_5029138c615b618b7110b4585a5ccfbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contrat/show_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contrat/show_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/contrat/show_back.html.twig", 1);
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

        yield "Détails du Contrat";
        
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
        yield "<div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">
    <h1 class=\"text-center mb-4\">Détails du Contrat</h1>

    <div class=\"card p-4 shadow-sm\">
        <h4 class=\"mb-4\">Informations du Contrat</h4>

        <table class=\"table table-bordered\">
            <tr>
                <th>ID</th>
                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Acheteur</th>
                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 19, $this->source); })()), "nomAcheteur", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Vendeur</th>
                <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 23, $this->source); })()), "nomVendeur", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date Début</th>
                <td>";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 27, $this->source); })()), "dateDebutContrat", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 27, $this->source); })()), "dateDebutContrat", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true)) : ("N/A"));
        yield "</td>
            </tr>
            <tr>
                <th>Date Fin</th>
                <td>";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 31, $this->source); })()), "datefinContrat", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 31, $this->source); })()), "datefinContrat", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true)) : ("N/A"));
        yield "</td>
            </tr>
        </table>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
            
            <form method=\"post\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
            </form>
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
        return "admin/contrat/show_back.html.twig";
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
        return array (  156 => 39,  152 => 38,  147 => 36,  139 => 31,  132 => 27,  125 => 23,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Détails du Contrat{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">
    <h1 class=\"text-center mb-4\">Détails du Contrat</h1>

    <div class=\"card p-4 shadow-sm\">
        <h4 class=\"mb-4\">Informations du Contrat</h4>

        <table class=\"table table-bordered\">
            <tr>
                <th>ID</th>
                <td>{{ contrat.id }}</td>
            </tr>
            <tr>
                <th>Acheteur</th>
                <td>{{ contrat.nomAcheteur }}</td>
            </tr>
            <tr>
                <th>Vendeur</th>
                <td>{{ contrat.nomVendeur }}</td>
            </tr>
            <tr>
                <th>Date Début</th>
                <td>{{ contrat.dateDebutContrat ? contrat.dateDebutContrat|date('Y-m-d') : 'N/A' }}</td>
            </tr>
            <tr>
                <th>Date Fin</th>
                <td>{{ contrat.datefinContrat ? contrat.datefinContrat|date('Y-m-d') : 'N/A' }}</td>
            </tr>
        </table>

        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"{{ path('admin_contrat_edit', {'id': contrat.id}) }}\" class=\"btn btn-warning\">Modifier</a>
            
            <form method=\"post\" action=\"{{ path('admin_contrat_delete', {'id': contrat.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contrat.id) }}\">
                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "admin/contrat/show_back.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\PI2025\\Reaptn\\templates\\admin\\contrat\\show_back.html.twig");
    }
}
