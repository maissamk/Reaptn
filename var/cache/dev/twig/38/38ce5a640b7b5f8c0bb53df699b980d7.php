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
        yield "<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 400px; padding-top: 80px;\">
    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">👥 Tous les utilisateurs</h1>

    <form id=\"searchForm\" class=\"mb-4 d-flex justify-content-center align-items-center flex-wrap\" method=\"get\" style=\"gap: 30px;margin-left: -100;margin-left: -130px;\">
        <div class=\"mb-3\">
            <input type=\"text\" id=\"searchInput\" name=\"search\" class=\"form-control w-100 w-md-25\" placeholder=\"Rechercher par email, nom...\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", ["search"], "method", false, false, false, 11), "html", null, true);
        yield "\">
        </div>

        <div class=\"mb-3\">
            <select name=\"role\" id=\"roleSelect\" class=\"form-control form-select w-100 w-md-25\">
                <option value=\"\">Tous les rôles</option>
                <option value=\"ROLE_ADMIN\" ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", ["role"], "method", false, false, false, 17) == "ROLE_ADMIN")) {
            yield "selected";
        }
        yield ">Admin</option>
                <option value=\"ROLE_CLIENT\" ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", ["role"], "method", false, false, false, 18) == "ROLE_CLIENT")) {
            yield "selected";
        }
        yield ">Client</option>
                <option value=\"ROLE_AGRICULTEUR\" ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", ["role"], "method", false, false, false, 19) == "ROLE_AGRICULTEUR")) {
            yield "selected";
        }
        yield ">Agriculteur</option>
            </select>
        </div>

        <div class=\"mb-3\">
            <select name=\"status\" id=\"statusSelect\" class=\"form-control  form-select w-100 w-md-25\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"active\" ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "get", ["status"], "method", false, false, false, 26) == "active")) {
            yield "selected";
        }
        yield ">Actif</option>
                <option value=\"inactive\" ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["status"], "method", false, false, false, 27) == "inactive")) {
            yield "selected";
        }
        yield ">Inactif</option>
                <option value=\"blocked\" ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["status"], "method", false, false, false, 28) == "blocked")) {
            yield "selected";
        }
        yield ">Bloqué</option>
            </select>
        </div>

        <div class=\"mb-3 ml-9\">
            <button type=\"submit\" class=\"btn btn-primary\">🔍 Rechercher</button>
            <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" id=\"clearSearchBtn\" class=\"btn btn-secondary\">🔄 Clear Recherche</a>
            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_pdf");
        yield "\" class=\"btn btn-success\">📥PDF</a>
        </div>
        
    </form>

   <div class=\"mb-3\">
    <button id=\"btnUserRoles\" class=\"btn btn-primary\">📊 Statistiques des Rôles</button>
    
    <button id=\"btnLoginAttempts\" class=\"btn btn-secondary\">📊 Statistiques de Connexion</button>
</div>

<div id=\"statisticsResults\"></div>


    <div class=\"table-responsive mt-4 w-100\" style=\"overflow-x: hidden;\">
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
            <tbody id=\"userTableBody\">
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 66
            yield "                    <tr>
                        <td class=\"text-center\">
                            ";
            // line 68
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 68)) {
                // line 69
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 69))), "html", null, true);
                yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Avatar\">
                            ";
            } else {
                // line 71
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Default Avatar\">
                            ";
            }
            // line 73
            yield "                        </td>
                        <td class=\"text-center\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 79), ", "), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            ";
            // line 81
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 81) == "active")) {
                // line 82
                yield "                                <span class=\"badge bg-success text-white\">Actif</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 83
$context["user"], "status", [], "any", false, false, false, 83) == "blocked")) {
                // line 84
                yield "                                <span class=\"badge bg-danger text-white\">Bloqué</span>
                            ";
            } else {
                // line 86
                yield "                                <span class=\"badge bg-secondary text-white\">Inactif</span>
                            ";
            }
            // line 88
            yield "                        </td>
                        <td class=\"text-center\">
                            <div class=\"d-flex justify-content-center\">
                                <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm mr-2\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 94)]), "html", null, true);
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
        // line 101
        yield "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        // line 108
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
    function fetchStatistics(statType) {
        \$.ajax({
            url: '/admin/user/' + statType,  
            type: 'GET',
            dataType: 'json',  
            success: function(response) {
                let output = '';
                
                if (statType === 'statistics') {
                    output = '<h3>Statistiques des Rôles:</h3><ul>';
                    response.forEach(function(stat) {
                        output += '<li>' + stat.role + ': ' + stat.count + ' utilisateurs</li>';
                    });
                    output += '</ul>';
                } else if (statType === 'LoginStats') {
                    output = '<h3>Statistiques de Connexion:</h3><ul>';
                    response.forEach(function(stat) {
                        output += '<li>' + stat.email + ' : ' + stat.loginAttempts + ' tentatives</li>';
                    });
                    output += '</ul>';
                }

                \$('#statisticsResults').html(output);
            },
            error: function() {
                \$('#statisticsResults').html('<p>Erreur lors de la récupération des statistiques.</p>');
            }
        });
    }

    \$('#btnUserRoles').click(function() {
        console.log(\"Button clicked for user roles statistics\");
        fetchStatistics('statistics');
    });

    \$('#btnLoginAttempts').click(function() {
        console.log(\"Button clicked for login attempts statistics\");
        fetchStatistics('LoginStats');
    });
</script>

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
        return array (  318 => 108,  305 => 107,  290 => 101,  277 => 94,  271 => 91,  266 => 88,  262 => 86,  258 => 84,  256 => 83,  253 => 82,  251 => 81,  246 => 79,  242 => 78,  238 => 77,  234 => 76,  230 => 75,  226 => 74,  223 => 73,  217 => 71,  211 => 69,  209 => 68,  205 => 66,  201 => 65,  168 => 35,  164 => 34,  153 => 28,  147 => 27,  141 => 26,  129 => 19,  123 => 18,  117 => 17,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Tous les utilisateurs{% endblock %}

{% block body %}
<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 400px; padding-top: 80px;\">
    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">👥 Tous les utilisateurs</h1>

    <form id=\"searchForm\" class=\"mb-4 d-flex justify-content-center align-items-center flex-wrap\" method=\"get\" style=\"gap: 30px;margin-left: -100;margin-left: -130px;\">
        <div class=\"mb-3\">
            <input type=\"text\" id=\"searchInput\" name=\"search\" class=\"form-control w-100 w-md-25\" placeholder=\"Rechercher par email, nom...\" value=\"{{ app.request.get('search') }}\">
        </div>

        <div class=\"mb-3\">
            <select name=\"role\" id=\"roleSelect\" class=\"form-control form-select w-100 w-md-25\">
                <option value=\"\">Tous les rôles</option>
                <option value=\"ROLE_ADMIN\" {% if app.request.get('role') == 'ROLE_ADMIN' %}selected{% endif %}>Admin</option>
                <option value=\"ROLE_CLIENT\" {% if app.request.get('role') == 'ROLE_CLIENT' %}selected{% endif %}>Client</option>
                <option value=\"ROLE_AGRICULTEUR\" {% if app.request.get('role') == 'ROLE_AGRICULTEUR' %}selected{% endif %}>Agriculteur</option>
            </select>
        </div>

        <div class=\"mb-3\">
            <select name=\"status\" id=\"statusSelect\" class=\"form-control  form-select w-100 w-md-25\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"active\" {% if app.request.get('status') == 'active' %}selected{% endif %}>Actif</option>
                <option value=\"inactive\" {% if app.request.get('status') == 'inactive' %}selected{% endif %}>Inactif</option>
                <option value=\"blocked\" {% if app.request.get('status') == 'blocked' %}selected{% endif %}>Bloqué</option>
            </select>
        </div>

        <div class=\"mb-3 ml-9\">
            <button type=\"submit\" class=\"btn btn-primary\">🔍 Rechercher</button>
            <a href=\"{{ path('admin_users') }}\" id=\"clearSearchBtn\" class=\"btn btn-secondary\">🔄 Clear Recherche</a>
            <a href=\"{{ path('admin_users_pdf') }}\" class=\"btn btn-success\">📥PDF</a>
        </div>
        
    </form>

   <div class=\"mb-3\">
    <button id=\"btnUserRoles\" class=\"btn btn-primary\">📊 Statistiques des Rôles</button>
    
    <button id=\"btnLoginAttempts\" class=\"btn btn-secondary\">📊 Statistiques de Connexion</button>
</div>

<div id=\"statisticsResults\"></div>


    <div class=\"table-responsive mt-4 w-100\" style=\"overflow-x: hidden;\">
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
            <tbody id=\"userTableBody\">
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

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
    function fetchStatistics(statType) {
        \$.ajax({
            url: '/admin/user/' + statType,  
            type: 'GET',
            dataType: 'json',  
            success: function(response) {
                let output = '';
                
                if (statType === 'statistics') {
                    output = '<h3>Statistiques des Rôles:</h3><ul>';
                    response.forEach(function(stat) {
                        output += '<li>' + stat.role + ': ' + stat.count + ' utilisateurs</li>';
                    });
                    output += '</ul>';
                } else if (statType === 'LoginStats') {
                    output = '<h3>Statistiques de Connexion:</h3><ul>';
                    response.forEach(function(stat) {
                        output += '<li>' + stat.email + ' : ' + stat.loginAttempts + ' tentatives</li>';
                    });
                    output += '</ul>';
                }

                \$('#statisticsResults').html(output);
            },
            error: function() {
                \$('#statisticsResults').html('<p>Erreur lors de la récupération des statistiques.</p>');
            }
        });
    }

    \$('#btnUserRoles').click(function() {
        console.log(\"Button clicked for user roles statistics\");
        fetchStatistics('statistics');
    });

    \$('#btnLoginAttempts').click(function() {
        console.log(\"Button clicked for login attempts statistics\");
        fetchStatistics('LoginStats');
    });
</script>

{% endblock %}

", "admin/user/users.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\user\\users.html.twig");
    }
}
