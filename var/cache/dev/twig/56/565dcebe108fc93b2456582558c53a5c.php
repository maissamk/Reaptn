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
class __TwigTemplate_eefd56bb89a6467efdee78dab33fae26 extends Template
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
        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistics");
        yield "\"class=\"btn btn-primary\">📊 Statistiques des Rôles</a>
        <button id=\"btnLoginAttempts\" class=\"btn btn-secondary\">📊 Statistiques de Connexion</button>
    </div>

    <div id=\"statisticsResults\">
        <canvas id=\"chartCanvas\" width=\"400\" height=\"200\"></canvas>
    </div>

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
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 65
            yield "                    <tr>
                        <td class=\"text-center\">
                            ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 67)) {
                // line 68
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 68))), "html", null, true);
                yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Avatar\">
                            ";
            } else {
                // line 70
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Default Avatar\">
                            ";
            }
            // line 72
            yield "                        </td>
                        <td class=\"text-center\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 78), ", "), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            ";
            // line 80
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 80) == "active")) {
                // line 81
                yield "                                <span class=\"badge bg-success text-white\">Actif</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 82
$context["user"], "status", [], "any", false, false, false, 82) == "blocked")) {
                // line 83
                yield "                                <span class=\"badge bg-danger text-white\">Bloqué</span>
                            ";
            } else {
                // line 85
                yield "                                <span class=\"badge bg-secondary text-white\">Inactif</span>
                            ";
            }
            // line 87
            yield "                        </td>
                        <td class=\"text-center\">
                            <div class=\"d-flex justify-content-center\">
                                <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm mr-2\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 93)]), "html", null, true);
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
        // line 100
        yield "            </tbody>
        </table>
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
    let chartInstance = null; // To store the current chart instance

    function renderChart(data, type) {
        const ctx = document.getElementById('chartCanvas').getContext('2d');

        // Destroy the previous chart instance if it exists
        if (chartInstance) {
            chartInstance.destroy();
        }

        let chartData, chartOptions;

        if (type === 'roles') {
            // Pie chart for roles
            chartData = {
                labels: data.map(stat => stat.role),
                datasets: [{
                    label: 'Number of Users',
                    data: data.map(stat => stat.count),
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            chartOptions = {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            };
        } else if (type === 'loginAttempts') {
            // Bar chart for login attempts
            chartData = {
                
                labels: data.map(stat => `\${stat.email}: \${stat.loginAttempts} Attempts`),
                datasets: [{
                    label: 'Login Attempts',
                    data: data.map(stat => stat.loginAttempts),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            };

            chartOptions = {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'User: ' + tooltipItem.label + ' | Attempts: ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            };
        }

        // Create the new chart
        chartInstance = new Chart(ctx, {
            type: type === 'roles' ? 'pie' : 'bar',
            data: chartData,
            options: chartOptions
        });
    }

    function fetchStatistics(statType) {
        \$.ajax({
            url: '/admin/user/' + statType,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (statType === 'statistics') {
                    renderChart(response, 'roles');
                } else if (statType === 'LoginStats') {
                    renderChart(response, 'loginAttempts');
                }
            },
            error: function() {
                \$('#statisticsResults').html('<p>Erreur lors de la récupération des statistiques.</p>');
            }
        });
    }

    // Event listeners for button clicks to fetch data
    // document.getElementById('btnUserRoles').addEventListener('click', function() {
    //     fetchStatistics('statistics');
    // });

    document.getElementById('btnLoginAttempts').addEventListener('click', function() {
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
        return array (  291 => 100,  278 => 93,  272 => 90,  267 => 87,  263 => 85,  259 => 83,  257 => 82,  254 => 81,  252 => 80,  247 => 78,  243 => 77,  239 => 76,  235 => 75,  231 => 74,  227 => 73,  224 => 72,  218 => 70,  212 => 68,  210 => 67,  206 => 65,  202 => 64,  175 => 40,  167 => 35,  163 => 34,  152 => 28,  146 => 27,  140 => 26,  128 => 19,  122 => 18,  116 => 17,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
        <a href=\"{{ path('admin_statistics') }}\"class=\"btn btn-primary\">📊 Statistiques des Rôles</a>
        <button id=\"btnLoginAttempts\" class=\"btn btn-secondary\">📊 Statistiques de Connexion</button>
    </div>

    <div id=\"statisticsResults\">
        <canvas id=\"chartCanvas\" width=\"400\" height=\"200\"></canvas>
    </div>

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

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
    let chartInstance = null; // To store the current chart instance

    function renderChart(data, type) {
        const ctx = document.getElementById('chartCanvas').getContext('2d');

        // Destroy the previous chart instance if it exists
        if (chartInstance) {
            chartInstance.destroy();
        }

        let chartData, chartOptions;

        if (type === 'roles') {
            // Pie chart for roles
            chartData = {
                labels: data.map(stat => stat.role),
                datasets: [{
                    label: 'Number of Users',
                    data: data.map(stat => stat.count),
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            chartOptions = {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            };
        } else if (type === 'loginAttempts') {
            // Bar chart for login attempts
            chartData = {
                
                labels: data.map(stat => `\${stat.email}: \${stat.loginAttempts} Attempts`),
                datasets: [{
                    label: 'Login Attempts',
                    data: data.map(stat => stat.loginAttempts),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            };

            chartOptions = {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'User: ' + tooltipItem.label + ' | Attempts: ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            };
        }

        // Create the new chart
        chartInstance = new Chart(ctx, {
            type: type === 'roles' ? 'pie' : 'bar',
            data: chartData,
            options: chartOptions
        });
    }

    function fetchStatistics(statType) {
        \$.ajax({
            url: '/admin/user/' + statType,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (statType === 'statistics') {
                    renderChart(response, 'roles');
                } else if (statType === 'LoginStats') {
                    renderChart(response, 'loginAttempts');
                }
            },
            error: function() {
                \$('#statisticsResults').html('<p>Erreur lors de la récupération des statistiques.</p>');
            }
        });
    }

    // Event listeners for button clicks to fetch data
    // document.getElementById('btnUserRoles').addEventListener('click', function() {
    //     fetchStatistics('statistics');
    // });

    document.getElementById('btnLoginAttempts').addEventListener('click', function() {
        fetchStatistics('LoginStats');
    });
</script>

{% endblock %}
", "admin/user/users.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\admin\\user\\users.html.twig");
    }
}
