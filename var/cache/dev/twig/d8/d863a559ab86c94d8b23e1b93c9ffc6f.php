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

/* admin/materielagricole/materiellocation.html.twig */
class __TwigTemplate_fff6a05a55bbea7f3f2472ed8b57ef9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/materiellocation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/materiellocation.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/materielagricole/materiellocation.html.twig", 1);
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

        yield "Gestion du Matériel de Location";
        
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
        yield "<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px; \">

    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">🚜 Matériel Agricole à Louer 🛠️</h1>

    <div class=\"table-responsive mt-4\" style=\"width: 90%;\">
        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prix (DT/jour)</th>
                    <th>Description</th>
                    <th>Disponibilité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiellocations"]) || array_key_exists("materiellocations", $context) ? $context["materiellocations"] : (function () { throw new RuntimeError('Variable "materiellocations" does not exist.', 23, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["materiellocation"]) {
            // line 24
            yield "                    <tr>
                        <td>
                            <img src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "image", [], "any", false, false, false, 26)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "image", [], "any", false, false, false, 26))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                                 class=\"rounded border border-secondary\" 
                                 alt=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "nom", [], "any", false, false, false, 28), "html", null, true);
            yield "\" width=\"70\" height=\"70\">
                        </td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td class=\"fw-bold text-primary\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "prix", [], "any", false, false, false, 31), "html", null, true);
            yield " DT</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "description", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "disponibilite", [], "any", false, false, false, 34)) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "disponibilite", [], "any", false, false, false, 35)) {
                yield " Disponible ";
            } else {
                yield " Non disponible ";
            }
            // line 36
            yield "                            </span>
                        </td>
                        <td>
                            <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            ";
            // line 45
            yield Twig\Extension\CoreExtension::include($this->env, $context, "materiellocation/_delete_form.html.twig");
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
        // line 52
        if (!$context['_iterated']) {
            // line 49
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucun matériel disponible pour le moment.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiellocation'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_materiellocation_new");
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
        return "admin/materielagricole/materiellocation.html.twig";
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
        return array (  229 => 58,  222 => 53,  213 => 49,  211 => 52,  195 => 45,  189 => 42,  183 => 39,  178 => 36,  172 => 35,  164 => 34,  159 => 32,  155 => 31,  151 => 30,  146 => 28,  141 => 26,  137 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion du Matériel de Location{% endblock %}

{% block body %}
<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px; \">

    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">🚜 Matériel Agricole à Louer 🛠️</h1>

    <div class=\"table-responsive mt-4\" style=\"width: 90%;\">
        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prix (DT/jour)</th>
                    <th>Description</th>
                    <th>Disponibilité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for materiellocation in materiellocations %}
                    <tr>
                        <td>
                            <img src=\"{{ asset(materiellocation.image ? 'uploads/images/' ~ materiellocation.image : 'images/default.png') }}\" 
                                 class=\"rounded border border-secondary\" 
                                 alt=\"{{ materiellocation.nom }}\" width=\"70\" height=\"70\">
                        </td>
                        <td>{{ materiellocation.nom }}</td>
                        <td class=\"fw-bold text-primary\">{{ materiellocation.prix }} DT</td>
                        <td>{{ materiellocation.description }}</td>
                        <td>
                            <span class=\"badge {% if materiellocation.disponibilite %}bg-success{% else %}bg-danger{% endif %}\">
                                {% if materiellocation.disponibilite %} Disponible {% else %} Non disponible {% endif %}
                            </span>
                        </td>
                        <td>
                            <a href=\"{{ path('app_materiellocation_show', {'id': materiellocation.id}) }}\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"{{ path('app_materiellocation_edit', {'id': materiellocation.id}) }}\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            {{ include('materiellocation/_delete_form.html.twig') }}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center\">Aucun matériel disponible pour le moment.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('admin_materiellocation_new') }}\" class=\"btn btn-success\">
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
", "admin/materielagricole/materiellocation.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\materielagricole\\materiellocation.html.twig");
    }
}
