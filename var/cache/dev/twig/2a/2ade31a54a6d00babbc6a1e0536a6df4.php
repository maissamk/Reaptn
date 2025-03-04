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

/* offre/show.html.twig */
class __TwigTemplate_1ae6082a7ba5e2a0a02f9d60dd7c9f49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/show.html.twig", 1);
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

        yield "Offre";
        
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
        yield "    <div class=\"pt-5\">
        <div class=\"container mt-5 pt-5\">
            <h1>Details D'Offre </h1>

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>ID A</th>
                        <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 18, $this->source); })()), "ida", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>ID E</th>
                        <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 22, $this->source); })()), "ide", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 26, $this->source); })()), "statut", [], "any", false, false, false, 26)) ? ("Active") : ("Inactive"));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "descr", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 34, $this->source); })()), "titre", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Competence</th>
                        <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 38, $this->source); })()), "comp", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
                    </tr>
                </tbody>
            </table>
<div class=\"d-flex justify-content-center mt-4\">
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        yield "\" class=\"btn btn-primary me-3\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
           
        </div>

            
            <!-- Employees List -->
            <h3>Employés inscrits:</h3>
            <ul>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 53, $this->source); })()), "employes", [], "any", false, false, false, 53));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 54
            yield "                    <li>
                        User ID: ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "userIdentifier", [], "any", false, false, false, 55), "html", null, true);
            yield " - Competence: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "comp", [], "any", false, false, false, 55), "html", null, true);
            yield "
                    </li>
                ";
            $context['_iterated'] = true;
        }
        // line 57
        if (!$context['_iterated']) {
            // line 58
            yield "                    <li>Aucun Employés Inscrits.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "            </ul>

            <hr>

            <!-- Subscription Form -->
            ";
        // line 65
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
            // line 66
            yield "            <h3>Entrez vos détails</h3>
            <form action=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\" method=\"POST\">
                <div class=\"mb-3\">
                    <label for=\"employeId\" class=\"form-label\">Enter Your ID:</label>
                    <input type=\"number\" id=\"employeId\" name=\"employeId\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"comp\" class=\"form-label\">Entrez votre Competence:</label>
                    <input type=\"text\" id=\"comp\" name=\"comp\" class=\"form-control\" required>
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Joindre cette offre</button>
            </form>

            <hr>
            ";
        }
        // line 81
        yield "            <!-- Delete Offer Form -->
            ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 83
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "offre/_delete_form.html.twig");
            yield "
            ";
        }
        // line 85
        yield "        </div>
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
        return "offre/show.html.twig";
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
        return array (  239 => 85,  233 => 83,  231 => 82,  228 => 81,  211 => 67,  208 => 66,  206 => 65,  199 => 60,  192 => 58,  190 => 57,  181 => 55,  178 => 54,  173 => 53,  160 => 43,  152 => 38,  145 => 34,  138 => 30,  131 => 26,  124 => 22,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre{% endblock %}

{% block body %}
    <div class=\"pt-5\">
        <div class=\"container mt-5 pt-5\">
            <h1>Details D'Offre </h1>

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ offre.id }}</td>
                    </tr>
                    <tr>
                        <th>ID A</th>
                        <td>{{ offre.ida }}</td>
                    </tr>
                    <tr>
                        <th>ID E</th>
                        <td>{{ offre.ide }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ offre.statut ? 'Active' : 'Inactive' }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ offre.descr }}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{ offre.titre }}</td>
                    </tr>
                    <tr>
                        <th>Competence</th>
                        <td>{{ offre.comp }}</td>
                    </tr>
                </tbody>
            </table>
<div class=\"d-flex justify-content-center mt-4\">
            <a href=\"{{ path('app_offre_index') }}\" class=\"btn btn-primary me-3\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
           
        </div>

            
            <!-- Employees List -->
            <h3>Employés inscrits:</h3>
            <ul>
                {% for employe in offre.employes %}
                    <li>
                        User ID: {{ employe.userIdentifier }} - Competence: {{ employe.comp }}
                    </li>
                {% else %}
                    <li>Aucun Employés Inscrits.</li>
                {% endfor %}
            </ul>

            <hr>

            <!-- Subscription Form -->
            {% if  is_granted('ROLE_CLIENT') %}
            <h3>Entrez vos détails</h3>
            <form action=\"{{ path('app_employe_new', {'id': offre.id}) }}\" method=\"POST\">
                <div class=\"mb-3\">
                    <label for=\"employeId\" class=\"form-label\">Enter Your ID:</label>
                    <input type=\"number\" id=\"employeId\" name=\"employeId\" class=\"form-control\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"comp\" class=\"form-label\">Entrez votre Competence:</label>
                    <input type=\"text\" id=\"comp\" name=\"comp\" class=\"form-control\" required>
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Joindre cette offre</button>
            </form>

            <hr>
            {% endif %}
            <!-- Delete Offer Form -->
            {% if  is_granted('ROLE_AGRICULTEUR') %}
            {{ include('offre/_delete_form.html.twig') }}
            {% endif %}
        </div>
    </div>
{% endblock %}", "offre/show.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\offre\\show.html.twig");
    }
}
