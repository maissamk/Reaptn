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

/* admin/parcelle_proprietes/index_back.html.twig */
class __TwigTemplate_0b13b364564247a15956cff99e8dd8e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/index_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/index_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/parcelle_proprietes/index_back.html.twig", 1);
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

        yield "Liste des Parcelles";
        
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
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-file-contract\"></i> Liste des parcelles
    </h1>
    <div class=\"card p-4 shadow-sm\">
        <table class=\"table table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                    <th class=\"text-white\">Image</th>
                    <th class=\"text-white\">ID</th>
                    <th class=\"text-white\">Titre</th>
                    <th class=\"text-white\">Description</th>
                    <th class=\"text-white\">Prix</th>
                    <th class=\"text-white\">Statut</th>
                    <th class=\"text-white\">Propriétaire</th>
                    <th class=\"text-white\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcelle_proprietes"]) || array_key_exists("parcelle_proprietes", $context) ? $context["parcelle_proprietes"] : (function () { throw new RuntimeError('Variable "parcelle_proprietes" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["parcelle"]) {
            // line 26
            yield "                    <tr>
                        <td>
                            ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "image", [], "any", false, false, false, 28)) {
                // line 29
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "image", [], "any", false, false, false, 29))), "html", null, true);
                yield "\" class=\"img-thumbnail\" width=\"100\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "titre", [], "any", false, false, false, 29), "html", null, true);
                yield "\">
                            ";
            } else {
                // line 31
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.png"), "html", null, true);
                yield "\" class=\"img-thumbnail\" width=\"100\" alt=\"Image par défaut\">
                            ";
            }
            // line 33
            yield "                        </td>
                        <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "titre", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "description", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                        <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "prix", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                        <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "status", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                        <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "nomProprietaire", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"d-flex gap-2\">
                                <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                    <i class=\"fas fa-eye\"></i> Voir
                                </a>
                                <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette parcelle ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "id", [], "any", false, false, false, 49))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                        <i class=\"fas fa-trash-alt\"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 57
        if (!$context['_iterated']) {
            // line 58
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucune parcelle trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parcelle'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "            </tbody>
        </table>
    </div>
    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_new");
        yield "\" class=\"btn btn-primary\">Ajouter</a>
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
        return "admin/parcelle_proprietes/index_back.html.twig";
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
        return array (  222 => 67,  215 => 62,  206 => 58,  204 => 57,  191 => 49,  187 => 48,  181 => 45,  175 => 42,  169 => 39,  165 => 38,  161 => 37,  157 => 36,  153 => 35,  149 => 34,  146 => 33,  140 => 31,  132 => 29,  130 => 28,  126 => 26,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des Parcelles{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-file-contract\"></i> Liste des parcelles
    </h1>
    <div class=\"card p-4 shadow-sm\">
        <table class=\"table table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                    <th class=\"text-white\">Image</th>
                    <th class=\"text-white\">ID</th>
                    <th class=\"text-white\">Titre</th>
                    <th class=\"text-white\">Description</th>
                    <th class=\"text-white\">Prix</th>
                    <th class=\"text-white\">Statut</th>
                    <th class=\"text-white\">Propriétaire</th>
                    <th class=\"text-white\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for parcelle in parcelle_proprietes %}
                    <tr>
                        <td>
                            {% if parcelle.image %}
                                <img src=\"{{ asset('uploads/images/' ~ parcelle.image) }}\" class=\"img-thumbnail\" width=\"100\" alt=\"{{ parcelle.titre }}\">
                            {% else %}
                                <img src=\"{{ asset('images/default.png') }}\" class=\"img-thumbnail\" width=\"100\" alt=\"Image par défaut\">
                            {% endif %}
                        </td>
                        <td>{{ parcelle.id }}</td>
                        <td>{{ parcelle.titre }}</td>
                        <td>{{ parcelle.description }}</td>
                        <td>{{ parcelle.prix }}</td>
                        <td>{{ parcelle.status }}</td>
                        <td>{{ parcelle.nomProprietaire }}</td>
                        <td>
                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('admin_parcelle_proprietes_show', {'id': parcelle.id}) }}\" class=\"btn btn-info btn-sm\">
                                    <i class=\"fas fa-eye\"></i> Voir
                                </a>
                                <a href=\"{{ path('admin_parcelle_proprietes_edit', {'id': parcelle.id}) }}\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('admin_parcelle_proprietes_delete', {'id': parcelle.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette parcelle ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ parcelle.id) }}\">
                                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                        <i class=\"fas fa-trash-alt\"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucune parcelle trouvée.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"{{ path('admin_parcelle_proprietes_new') }}\" class=\"btn btn-primary\">Ajouter</a>
        </div>
    </div>
</div>
{% endblock %}
", "admin/parcelle_proprietes/index_back.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\admin\\parcelle_proprietes\\index_back.html.twig");
    }
}
