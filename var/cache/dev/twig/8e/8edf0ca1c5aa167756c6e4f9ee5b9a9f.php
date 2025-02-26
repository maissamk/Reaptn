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
class __TwigTemplate_6aa7efec6ac88820644713b5dbeb9262 extends Template
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

    <!-- Search Form Section -->
    <form id=\"searchForm\" class=\"mb-4 d-flex justify-content-center align-items-center flex-wrap\" method=\"get\" style=\"gap: 30px;margin-left: -100;margin-left: -130px;\">
        
        <!-- Search Input Field -->
        <div class=\"mb-3\">
            <input type=\"text\" id=\"searchInput\" name=\"search\" class=\"form-control w-100 w-md-25\" placeholder=\"Rechercher par email, nom...\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["search"], "method", false, false, false, 14), "html", null, true);
        yield "\">
        </div>

        <!-- Role Selection Dropdown -->
        <div class=\"mb-3\">
            <select name=\"role\" id=\"roleSelect\" class=\"form-control form-select w-100 w-md-25\">
                <option value=\"\">Tous les rôles</option>
                <option value=\"ROLE_ADMIN\" ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", ["role"], "method", false, false, false, 21) == "ROLE_ADMIN")) {
            yield "selected";
        }
        yield ">Admin</option>
                <option value=\"ROLE_CLIENT\" ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["role"], "method", false, false, false, 22) == "ROLE_CLIENT")) {
            yield "selected";
        }
        yield ">Client</option>
                <option value=\"ROLE_AGRICULTEUR\" ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "get", ["role"], "method", false, false, false, 23) == "ROLE_AGRICULTEUR")) {
            yield "selected";
        }
        yield ">Agriculteur</option>
            </select>
        </div>

        <!-- Status Selection Dropdown -->
        <div class=\"mb-3\">
            <select name=\"status\" id=\"statusSelect\" class=\"form-control  form-select w-100 w-md-25\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"active\" ";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "get", ["status"], "method", false, false, false, 31) == "active")) {
            yield "selected";
        }
        yield ">Actif</option>
                <option value=\"inactive\" ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", ["status"], "method", false, false, false, 32) == "inactive")) {
            yield "selected";
        }
        yield ">Inactif</option>
                <option value=\"blocked\" ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", ["status"], "method", false, false, false, 33) == "blocked")) {
            yield "selected";
        }
        yield ">Bloqué</option>
            </select>
        </div>

        <!-- Search and Clear Buttons -->
        <div class=\"mb-3 ml-9\">
            <button type=\"submit\" class=\"btn btn-primary\">🔍 Rechercher</button>
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" id=\"clearSearchBtn\" class=\"btn btn-secondary\">🔄 Clear Recherche</a>
            <!-- Button to Download PDF -->
            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_pdf");
        yield "\" class=\"btn btn-success\">📥PDF</a>
        </div>
        
    </form>

    <!-- Table Section -->
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
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

        // line 107
        yield "<script>
    document.getElementById(\"searchForm\").addEventListener(\"submit\", function(event) {
        let searchValue = document.getElementById(\"searchInput\").value;
        let roleValue = document.getElementById(\"roleSelect\").value;
        let statusValue = document.getElementById(\"statusSelect\").value;

        let url = new URL(window.location.href);
        let params = new URLSearchParams(url.search);

        if (searchValue) {
            params.set('search', searchValue);
        } else {
            params.delete('search');
        }

        if (roleValue) {
            params.set('role', roleValue);
        } else {
            params.delete('role');
        }

        if (statusValue) {
            params.set('status', statusValue);
        } else {
            params.delete('status');
        }

        url.search = params.toString();

        window.location.href = url.toString(); // Navigate to the updated URL with filters
        event.preventDefault(); // Prevent form submission if necessary
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
        return array (  317 => 107,  304 => 106,  289 => 100,  276 => 93,  270 => 90,  265 => 87,  261 => 85,  257 => 83,  255 => 82,  252 => 81,  250 => 80,  245 => 78,  241 => 77,  237 => 76,  233 => 75,  229 => 74,  225 => 73,  222 => 72,  216 => 70,  210 => 68,  208 => 67,  204 => 65,  200 => 64,  175 => 42,  170 => 40,  158 => 33,  152 => 32,  146 => 31,  133 => 23,  127 => 22,  121 => 21,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Tous les utilisateurs{% endblock %}

{% block body %}
<div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 400px; padding-top: 80px;\">
    <h1 class=\"text-center text-light bg-primary p-3 rounded\" style=\"width: 100%;\">👥 Tous les utilisateurs</h1>

    <!-- Search Form Section -->
    <form id=\"searchForm\" class=\"mb-4 d-flex justify-content-center align-items-center flex-wrap\" method=\"get\" style=\"gap: 30px;margin-left: -100;margin-left: -130px;\">
        
        <!-- Search Input Field -->
        <div class=\"mb-3\">
            <input type=\"text\" id=\"searchInput\" name=\"search\" class=\"form-control w-100 w-md-25\" placeholder=\"Rechercher par email, nom...\" value=\"{{ app.request.get('search') }}\">
        </div>

        <!-- Role Selection Dropdown -->
        <div class=\"mb-3\">
            <select name=\"role\" id=\"roleSelect\" class=\"form-control form-select w-100 w-md-25\">
                <option value=\"\">Tous les rôles</option>
                <option value=\"ROLE_ADMIN\" {% if app.request.get('role') == 'ROLE_ADMIN' %}selected{% endif %}>Admin</option>
                <option value=\"ROLE_CLIENT\" {% if app.request.get('role') == 'ROLE_CLIENT' %}selected{% endif %}>Client</option>
                <option value=\"ROLE_AGRICULTEUR\" {% if app.request.get('role') == 'ROLE_AGRICULTEUR' %}selected{% endif %}>Agriculteur</option>
            </select>
        </div>

        <!-- Status Selection Dropdown -->
        <div class=\"mb-3\">
            <select name=\"status\" id=\"statusSelect\" class=\"form-control  form-select w-100 w-md-25\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"active\" {% if app.request.get('status') == 'active' %}selected{% endif %}>Actif</option>
                <option value=\"inactive\" {% if app.request.get('status') == 'inactive' %}selected{% endif %}>Inactif</option>
                <option value=\"blocked\" {% if app.request.get('status') == 'blocked' %}selected{% endif %}>Bloqué</option>
            </select>
        </div>

        <!-- Search and Clear Buttons -->
        <div class=\"mb-3 ml-9\">
            <button type=\"submit\" class=\"btn btn-primary\">🔍 Rechercher</button>
            <a href=\"{{ path('admin_users') }}\" id=\"clearSearchBtn\" class=\"btn btn-secondary\">🔄 Clear Recherche</a>
            <!-- Button to Download PDF -->
            <a href=\"{{ path('admin_users_pdf') }}\" class=\"btn btn-success\">📥PDF</a>
        </div>
        
    </form>

    <!-- Table Section -->
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
<script>
    document.getElementById(\"searchForm\").addEventListener(\"submit\", function(event) {
        let searchValue = document.getElementById(\"searchInput\").value;
        let roleValue = document.getElementById(\"roleSelect\").value;
        let statusValue = document.getElementById(\"statusSelect\").value;

        let url = new URL(window.location.href);
        let params = new URLSearchParams(url.search);

        if (searchValue) {
            params.set('search', searchValue);
        } else {
            params.delete('search');
        }

        if (roleValue) {
            params.set('role', roleValue);
        } else {
            params.delete('role');
        }

        if (statusValue) {
            params.set('status', statusValue);
        } else {
            params.delete('status');
        }

        url.search = params.toString();

        window.location.href = url.toString(); // Navigate to the updated URL with filters
        event.preventDefault(); // Prevent form submission if necessary
    });
</script>
{% endblock %}
", "admin/user/users.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\user\\users.html.twig");
    }
}
