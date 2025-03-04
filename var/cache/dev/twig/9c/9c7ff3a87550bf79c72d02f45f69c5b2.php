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

/* admin/user/statistics.html.twig */
class __TwigTemplate_b0da1cab2b976e550797ddad16de282e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/user/statistics.html.twig", 1);
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

        yield "User Statistics by Role";
        
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
        yield "<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Left Sidebar and Navbar -->
        <div class=\"col-md-2\">
            <!-- Include your left sidebar and navbar here -->
        </div>

        <!-- Main Content Section -->
        <div class=\"col-md-10\">
            <div class=\"container mt-4\">
                <h1 class=\"text-center text-light bg-primary p-3 rounded mb-4\">📊 Statistiques des utilisateurs par rôle</h1>

                <!-- Statistics Section -->
                <div class=\"d-flex justify-content-center\">
                    <div class=\"w-50\"> <!-- Set the width to 50% to make it smaller -->
                        <canvas id=\"userChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    var ctx = document.getElementById('userChart').getContext('2d');

    var statsData = {};

    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["role"] => $context["count"]) {
            // line 37
            yield "        statsData[\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "\"] = ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ";
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['role'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "
    var roles = Object.keys(statsData);
    var counts = Object.values(statsData);

    var userChart = new Chart(ctx, {
        type: 'pie',  
        data: {
            labels: roles,  
            datasets: [{
                label: 'Number of Users',
                data: counts,  
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
        },
        options: {
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
        }
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
        return "admin/user/statistics.html.twig";
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
        return array (  147 => 39,  136 => 37,  132 => 36,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}User Statistics by Role{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Left Sidebar and Navbar -->
        <div class=\"col-md-2\">
            <!-- Include your left sidebar and navbar here -->
        </div>

        <!-- Main Content Section -->
        <div class=\"col-md-10\">
            <div class=\"container mt-4\">
                <h1 class=\"text-center text-light bg-primary p-3 rounded mb-4\">📊 Statistiques des utilisateurs par rôle</h1>

                <!-- Statistics Section -->
                <div class=\"d-flex justify-content-center\">
                    <div class=\"w-50\"> <!-- Set the width to 50% to make it smaller -->
                        <canvas id=\"userChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    var ctx = document.getElementById('userChart').getContext('2d');

    var statsData = {};

    {% for role, count in stats %}
        statsData[\"{{ role }}\"] = {{ count }};
    {% endfor %}

    var roles = Object.keys(statsData);
    var counts = Object.values(statsData);

    var userChart = new Chart(ctx, {
        type: 'pie',  
        data: {
            labels: roles,  
            datasets: [{
                label: 'Number of Users',
                data: counts,  
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
        },
        options: {
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
        }
    });
</script>
{% endblock %}
", "admin/user/statistics.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\admin\\user\\statistics.html.twig");
    }
}
