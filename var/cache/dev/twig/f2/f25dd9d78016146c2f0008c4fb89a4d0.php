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

/* admin/user/users_pdf.html.twig */
class __TwigTemplate_2a00dafeabc390d92574ff2f6bc01548 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/users_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/users_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5b7b3f; /* Earthy green */
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #d1d1d1;
        }

        th {
            background-color: #7b9a65; /* Lighter green */
            color: white;
        }

        td {
            background-color: #f8f8f8;
        }

        .text-center {
            text-align: center;
        }

        .status-active {
            color: green;
        }

        .status-blocked {
            color: red;
        }

        .status-inactive {
            color: grey;
        }

        footer {
            background-color: #5b7b3f; /* Earthy green */
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Users List -Reap.tn</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th class=\"text-center\">ID</th>
                    <th class=\"text-center\">Email</th>
                    <th class=\"text-center\">Nom</th>
                    <th class=\"text-center\">Prénom</th>
                    <th class=\"text-center\">Téléphone</th>
                    <th class=\"text-center\">Rôles</th>
                    <th class=\"text-center\">Statut</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 97
            yield "                    <tr>
                        <td class=\"text-center\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 102), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 103), ", "), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            ";
            // line 105
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 105) == "active")) {
                // line 106
                yield "                                <span class=\"status-active\">Actif</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 107
$context["user"], "status", [], "any", false, false, false, 107) == "blocked")) {
                // line 108
                yield "                                <span class=\"status-blocked\">Bloqué</span>
                            ";
            } else {
                // line 110
                yield "                                <span class=\"status-inactive\">Inactif</span>
                            ";
            }
            // line 112
            yield "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "            </tbody>
        </table>
    </main>

   

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/user/users_pdf.html.twig";
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
        return array (  200 => 115,  192 => 112,  188 => 110,  184 => 108,  182 => 107,  179 => 106,  177 => 105,  172 => 103,  168 => 102,  164 => 101,  160 => 100,  156 => 99,  152 => 98,  149 => 97,  145 => 96,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Users List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5b7b3f; /* Earthy green */
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #d1d1d1;
        }

        th {
            background-color: #7b9a65; /* Lighter green */
            color: white;
        }

        td {
            background-color: #f8f8f8;
        }

        .text-center {
            text-align: center;
        }

        .status-active {
            color: green;
        }

        .status-blocked {
            color: red;
        }

        .status-inactive {
            color: grey;
        }

        footer {
            background-color: #5b7b3f; /* Earthy green */
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Users List -Reap.tn</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th class=\"text-center\">ID</th>
                    <th class=\"text-center\">Email</th>
                    <th class=\"text-center\">Nom</th>
                    <th class=\"text-center\">Prénom</th>
                    <th class=\"text-center\">Téléphone</th>
                    <th class=\"text-center\">Rôles</th>
                    <th class=\"text-center\">Statut</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td class=\"text-center\">{{ user.id }}</td>
                        <td class=\"text-center\">{{ user.email }}</td>
                        <td class=\"text-center\">{{ user.nom }}</td>
                        <td class=\"text-center\">{{ user.prenom }}</td>
                        <td class=\"text-center\">{{ user.telephone }}</td>
                        <td class=\"text-center\">{{ user.roles | join(', ') }}</td>
                        <td class=\"text-center\">
                            {% if user.status == 'active' %}
                                <span class=\"status-active\">Actif</span>
                            {% elseif user.status == 'blocked' %}
                                <span class=\"status-blocked\">Bloqué</span>
                            {% else %}
                                <span class=\"status-inactive\">Inactif</span>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </main>

   

</body>
</html>
", "admin/user/users_pdf.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\user\\users_pdf.html.twig");
    }
}
