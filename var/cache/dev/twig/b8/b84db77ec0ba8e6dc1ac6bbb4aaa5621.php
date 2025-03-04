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
class __TwigTemplate_90e1db261b9be624a3272e48dacc2784 extends Template
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


<form action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tables");
        yield "\" method=\"get\" class=\"mb-4\">
    <div class=\"row g-3\">
        <div class=\"col-md-3\">
            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par nom\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\">
        </div>
        <div class=\"col-md-2\">
            <input type=\"number\" name=\"minPrice\" class=\"form-control\" placeholder=\"Prix min\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\">
        </div>
        <div class=\"col-md-2\">
            <input type=\"number\" name=\"maxPrice\" class=\"form-control\" placeholder=\"Prix max\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\">
        </div>
        <div class=\"col-md-3\">
            <select name=\"categorie\" class=\"form-control\">
                <option value=\"\">Toutes les catégories</option>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 25
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\" ";
            yield ((((isset($context["categorieId"]) || array_key_exists("categorieId", $context) ? $context["categorieId"] : (function () { throw new RuntimeError('Variable "categorieId" does not exist.', 25, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 25))) ? ("selected") : (""));
            yield ">
                        ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 26), "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "            </select>
        </div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-primary w-100\">
                <i class=\"fas fa-filter\"></i> Filtrer
            </button>
        </div>
    </div>
</form>




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
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 57, $this->source); })()));
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
            // line 58
            yield "                    <tr>
                        <td>
                            <img src=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 60)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 60))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                                 class=\"rounded border border-secondary\" 
                                 alt=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 62), "html", null, true);
            yield "\" width=\"70\" height=\"70\">
                        </td>
                        <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                        <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                        <td class=\"fw-bold text-primary\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "prix", [], "any", false, false, false, 66), "html", null, true);
            yield " DT</td>
                        <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "description", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                        
                        <td>
                            <span class=\"badge ";
            // line 70
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "disponibilite", [], "any", false, false, false, 70)) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                ";
            // line 71
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "disponibilite", [], "any", false, false, false, 71)) {
                yield " Disponible ";
            } else {
                yield " Non disponible ";
            }
            // line 72
            yield "                            </span>
                        </td>
                        <td>
                            ";
            // line 75
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "categorie", [], "any", false, false, false, 75)) {
                // line 76
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "categorie", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76), "html", null, true);
                yield "
                            ";
            } else {
                // line 78
                yield "                                <span class=\"text-danger\">Aucune catégorie</span>
                            ";
            }
            // line 80
            yield "                        </td>
                        <td>
                            <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_aff", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_materielvente_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            ";
            // line 88
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
        // line 91
        if (!$context['_iterated']) {
            // line 92
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucun matériel disponible pour le moment.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materielvente'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "            </tbody>
        </table>
    </div>

    
    <div class=\"text-center mt-4\">
    <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_materielagricole_stats");
        yield "\" class=\"btn btn-info\">
        <i class=\"fas fa-chart-line\"></i> Afficher les Statistiques
    </a>
</div>


    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 109
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
        return array (  324 => 109,  314 => 102,  306 => 96,  297 => 92,  295 => 91,  279 => 88,  273 => 85,  267 => 82,  263 => 80,  259 => 78,  253 => 76,  251 => 75,  246 => 72,  240 => 71,  232 => 70,  226 => 67,  222 => 66,  218 => 65,  214 => 64,  209 => 62,  204 => 60,  200 => 58,  182 => 57,  152 => 29,  143 => 26,  136 => 25,  132 => 24,  124 => 19,  118 => 16,  112 => 13,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Matériels Agricoles{% endblock %}

{% block body %}
<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px;\">
    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">🚜 Matériels Agricoles A Vendre 🛠️</h1>


<form action=\"{{ path('app_tables') }}\" method=\"get\" class=\"mb-4\">
    <div class=\"row g-3\">
        <div class=\"col-md-3\">
            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par nom\" value=\"{{ searchTerm }}\">
        </div>
        <div class=\"col-md-2\">
            <input type=\"number\" name=\"minPrice\" class=\"form-control\" placeholder=\"Prix min\" value=\"{{ minPrice }}\">
        </div>
        <div class=\"col-md-2\">
            <input type=\"number\" name=\"maxPrice\" class=\"form-control\" placeholder=\"Prix max\" value=\"{{ maxPrice }}\">
        </div>
        <div class=\"col-md-3\">
            <select name=\"categorie\" class=\"form-control\">
                <option value=\"\">Toutes les catégories</option>
                {% for categorie in categories %}
                    <option value=\"{{ categorie.id }}\" {{ categorieId == categorie.id ? 'selected' : '' }}>
                        {{ categorie.nom }}
                    </option>
                {% endfor %}
            </select>
        </div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-primary w-100\">
                <i class=\"fas fa-filter\"></i> Filtrer
            </button>
        </div>
    </div>
</form>




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
                    <th>Catégorie</th>
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
                            {% if materielvente.categorie %}
                                {{ materielvente.categorie.nom }}
                            {% else %}
                                <span class=\"text-danger\">Aucune catégorie</span>
                            {% endif %}
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
    <a href=\"{{ path('admin_materielagricole_stats') }}\" class=\"btn btn-info\">
        <i class=\"fas fa-chart-line\"></i> Afficher les Statistiques
    </a>
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
", "admin/materielagricole/tables.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\materielagricole\\tables.html.twig");
    }
}
