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

/* admin/user/users.html.twig */
class __TwigTemplate_0ea1431e1d568171133cce6d21551bbb extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/users.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/user/users.html.twig", 1);
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

        yield "Tous les utilisateurs";
        
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
        yield "<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px; padding-top: 80px;\">
    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">👥 Tous les utilisateurs</h1>

    <div class=\"table-responsive mt-4\" style=\"width: 100%; overflow-x: hidden;\">
        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                    <th class=\"text-white\">Avatar</th>
                    <th class=\"text-white\">ID</th>
                    <th class=\"text-white\">Email</th>
                    <th class=\"text-white\">Nom</th>
                    <th class=\"text-white\">Prénom</th>
                    <th class=\"text-white\">Téléphone</th>
                    <th class=\"text-white\">Rôles</th>
                    <th class=\"text-white\">Statut</th>
                    <th class=\"text-white\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            yield "                    <tr>
                        <td class=\"text-center\">
                            ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 28)) {
                // line 29
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 29))), "html", null, true);
                yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Avatar\">
                            ";
            } else {
                // line 31
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Default Avatar\">
                            ";
            }
            // line 33
            yield "                        </td>
                        <td class=\"text-center\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 39), ", "), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            ";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 41) == "active")) {
                // line 42
                yield "                                <span class=\"badge bg-success text-white\">Actif</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 43
$context["user"], "status", [], "any", false, false, false, 43) == "blocked")) {
                // line 44
                yield "                                <span class=\"badge bg-danger text-white\">Bloqué</span>
                            ";
            } else {
                // line 46
                yield "                                <span class=\"badge bg-secondary text-white\">Inactif</span>
                            ";
            }
            // line 48
            yield "                        </td>
                        <td class=\"text-center\">
                            <div class=\"d-flex justify-content-center\">
                                <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm mr-2\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr ?')\">
                                    <i class=\"fas fa-trash-alt\"></i> Supprimer
                                </a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "            </tbody>
        </table>
    </div>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 70
        yield "    <style>
        .table th, .table td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table td img {
            border-radius: 50%;
        }

        .d-flex a {
            margin-right: 10px;
        }

        .badge {
            padding: 5px 10px;
            font-size: 14px;
        }

        .table-responsive {
            width: 100%; /* Full width to avoid horizontal scrolling */
            overflow-x: hidden; /* Remove horizontal scrollbar */
        }

        .mt-4 {
            margin-top: 30px; /* Space between the table and other content */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
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
        return "admin/user/users.html.twig";
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
        return array (  304 => 111,  291 => 110,  242 => 70,  229 => 69,  212 => 61,  199 => 54,  193 => 51,  188 => 48,  184 => 46,  180 => 44,  178 => 43,  175 => 42,  173 => 41,  168 => 39,  164 => 38,  160 => 37,  156 => 36,  152 => 35,  148 => 34,  145 => 33,  139 => 31,  133 => 29,  131 => 28,  127 => 26,  123 => 25,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Tous les utilisateurs{% endblock %}

{% block body %}
<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px; padding-top: 80px;\">
    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">👥 Tous les utilisateurs</h1>

    <div class=\"table-responsive mt-4\" style=\"width: 100%; overflow-x: hidden;\">
        <table class=\"table table-striped table-bordered\">
            <thead class=\"table-dark\">
                <tr>
                    <th class=\"text-white\">Avatar</th>
                    <th class=\"text-white\">ID</th>
                    <th class=\"text-white\">Email</th>
                    <th class=\"text-white\">Nom</th>
                    <th class=\"text-white\">Prénom</th>
                    <th class=\"text-white\">Téléphone</th>
                    <th class=\"text-white\">Rôles</th>
                    <th class=\"text-white\">Statut</th>
                    <th class=\"text-white\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td class=\"text-center\">
                            {% if user.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Avatar\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Default Avatar\">
                            {% endif %}
                        </td>
                        <td class=\"text-center\">{{ user.id }}</td>
                        <td class=\"text-center\">{{ user.email }}</td>
                        <td class=\"text-center\">{{ user.nom }}</td>
                        <td class=\"text-center\">{{ user.prenom }}</td>
                        <td class=\"text-center\">{{ user.telephone }}</td>
                        <td class=\"text-center\">{{ user.roles | join(', ') }}</td>
                        <td class=\"text-center\">
                            {% if user.status == 'active' %}
                                <span class=\"badge bg-success text-white\">Actif</span>
                            {% elseif user.status == 'blocked' %}
                                <span class=\"badge bg-danger text-white\">Bloqué</span>
                            {% else %}
                                <span class=\"badge bg-secondary text-white\">Inactif</span>
                            {% endif %}
                        </td>
                        <td class=\"text-center\">
                            <div class=\"d-flex justify-content-center\">
                                <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning btn-sm mr-2\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"{{ path('admin_user_delete', {'id': user.id}) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr ?')\">
                                    <i class=\"fas fa-trash-alt\"></i> Supprimer
                                </a>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

</div>

{% endblock %}

{% block stylesheets %}
    <style>
        .table th, .table td {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table td img {
            border-radius: 50%;
        }

        .d-flex a {
            margin-right: 10px;
        }

        .badge {
            padding: 5px 10px;
            font-size: 14px;
        }

        .table-responsive {
            width: 100%; /* Full width to avoid horizontal scrolling */
            overflow-x: hidden; /* Remove horizontal scrollbar */
        }

        .mt-4 {
            margin-top: 30px; /* Space between the table and other content */
        }
    </style>
{% endblock %}

{% block javascripts %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
{% endblock %}
", "admin/user/users.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\user\\users.html.twig");
    }
}
