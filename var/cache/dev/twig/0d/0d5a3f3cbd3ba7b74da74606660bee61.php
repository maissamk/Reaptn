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

/* admin/employe/index_back.html.twig */
class __TwigTemplate_edebeceae20c859816b8873f5500203f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/employe/index_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/employe/index_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/employe/index_back.html.twig", 1);
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

        yield "Employees List";
        
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
        yield "<div class=\"container mt-5\" style=\"width: 70%; margin-left: 27%; padding-top: 50px;\">

     <h1>Liste des Employés</h1>
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistics_employe");
        yield "\" class=\"btn btn-primary\">View Employee Statistics</a>


    <table class=\"table\">
        <thead class=\"table-dark\">
            <tr>
                <th class=\"text-white\">ID</th>
                <th class=\"text-white\">User Identifier</th>
                <th class=\"text-white\">Competence</th>
                <th class=\"text-white\">Offer</th>
                <th class=\"text-white\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 24
            yield "                <tr>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "userIdentifier", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "comp", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "offre", [], "any", false, false, false, 28), "titre", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Détails</a>
                        <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                        <form method=\"post\" action=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 33))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </tbody>
    </table>
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
        return "admin/employe/index_back.html.twig";
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
        return array (  170 => 39,  158 => 33,  154 => 32,  150 => 31,  146 => 30,  141 => 28,  137 => 27,  133 => 26,  129 => 25,  126 => 24,  122 => 23,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Employees List{% endblock %}

{% block body %}
<div class=\"container mt-5\" style=\"width: 70%; margin-left: 27%; padding-top: 50px;\">

     <h1>Liste des Employés</h1>
    <a href=\"{{ path('statistics_employe') }}\" class=\"btn btn-primary\">View Employee Statistics</a>


    <table class=\"table\">
        <thead class=\"table-dark\">
            <tr>
                <th class=\"text-white\">ID</th>
                <th class=\"text-white\">User Identifier</th>
                <th class=\"text-white\">Competence</th>
                <th class=\"text-white\">Offer</th>
                <th class=\"text-white\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for employe in employes %}
                <tr>
                    <td>{{ employe.id }}</td>
                    <td>{{ employe.userIdentifier }}</td>
                    <td>{{ employe.comp }}</td>
                    <td>{{ employe.offre.titre }}</td>
                    <td>
                        <a href=\"{{ path('admin_employe_show', {'id': employe.id}) }}\" class=\"btn btn-info\">Détails</a>
                        <a href=\"{{ path('admin_employe_edit', {'id': employe.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                        <form method=\"post\" action=\"{{ path('admin_employe_delete', {'id': employe.id}) }}\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ employe.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "admin/employe/index_back.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\admin\\employe\\index_back.html.twig");
    }
}
