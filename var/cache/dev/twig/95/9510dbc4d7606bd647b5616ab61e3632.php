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

/* admin/materielagricole/tables.html.twig */
class __TwigTemplate_5acbffd42b96c715f08a405beda99c71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/tables.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/tables.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/materielagricole/tables.html.twig", 1);
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

        yield "Gestion des Matériels Agricoles";
        
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
        yield "<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px;\">
    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">🚜 Matériels Agricoles A Vendre 🛠️</h1>

    <div class=\"table-responsive mt-4\" style=\"width: 90%;\">
        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix (DT)</th>
                    <th>Description</th>
                    <th>Disponibilité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 23, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["materielvente"]) {
            // line 24
            yield "                    <tr>
                        <td>
                            <img src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 26)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 26))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                                 class=\"rounded border border-secondary\" 
                                 alt=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 28), "html", null, true);
            yield "\" width=\"70\" height=\"70\">
                        </td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td class=\"fw-bold text-primary\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "prix", [], "any", false, false, false, 32), "html", null, true);
            yield " DT</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "description", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "disponibilite", [], "any", false, false, false, 35)) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "disponibilite", [], "any", false, false, false, 36)) {
                yield " Disponible ";
            } else {
                yield " Non disponible ";
            }
            // line 37
            yield "                            </span>
                        </td>
                        <td>
                            <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_aff", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_materielvente_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            ";
            // line 46
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/materielagricole/supprimer.html.twig");
            yield "
                        </td>
                    </tr>
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
        // line 49
        if (!$context['_iterated']) {
            // line 50
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucun matériel disponible pour le moment.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materielvente'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_materielvente_new");
        yield "\" class=\"btn btn-success\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter un matériel
        </a>
    </div>
</div>

<style>
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }
    .btn {
        margin: 2px;
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
        return "admin/materielagricole/tables.html.twig";
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
        return array (  233 => 59,  226 => 54,  217 => 50,  215 => 49,  199 => 46,  193 => 43,  187 => 40,  182 => 37,  176 => 36,  168 => 35,  163 => 33,  159 => 32,  155 => 31,  151 => 30,  146 => 28,  141 => 26,  137 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Matériels Agricoles{% endblock %}

{% block body %}
<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px;\">
    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">🚜 Matériels Agricoles A Vendre 🛠️</h1>

    <div class=\"table-responsive mt-4\" style=\"width: 90%;\">
        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix (DT)</th>
                    <th>Description</th>
                    <th>Disponibilité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for materielvente in materielventes %}
                    <tr>
                        <td>
                            <img src=\"{{ asset(materielvente.image ? 'uploads/images/' ~ materielvente.image : 'images/default.png') }}\" 
                                 class=\"rounded border border-secondary\" 
                                 alt=\"{{ materielvente.nom }}\" width=\"70\" height=\"70\">
                        </td>
                        <td>{{ materielvente.id }}</td>
                        <td>{{ materielvente.nom }}</td>
                        <td class=\"fw-bold text-primary\">{{ materielvente.prix }} DT</td>
                        <td>{{ materielvente.description }}</td>
                        <td>
                            <span class=\"badge {% if materielvente.disponibilite %}bg-success{% else %}bg-danger{% endif %}\">
                                {% if materielvente.disponibilite %} Disponible {% else %} Non disponible {% endif %}
                            </span>
                        </td>
                        <td>
                            <a href=\"{{ path('app_materielvente_aff', {'id': materielvente.id}) }}\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"{{ path('admin_materielvente_edit', {'id': materielvente.id}) }}\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            {{ include('admin/materielagricole/supprimer.html.twig') }}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucun matériel disponible pour le moment.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('admin_materielvente_new') }}\" class=\"btn btn-success\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter un matériel
        </a>
    </div>
</div>

<style>
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }
    .btn {
        margin: 2px;
    }
</style>
{% endblock %}
", "admin/materielagricole/tables.html.twig", "C:\\Users\\takou\\OneDrive\\Desktop\\Reaptn\\templates\\admin\\materielagricole\\tables.html.twig");
    }
}
