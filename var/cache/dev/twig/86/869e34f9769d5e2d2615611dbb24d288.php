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

/* admin/user/login_stats.html.twig */
class __TwigTemplate_e6889c7c7e1dee45d14657b2e52a313c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/login_stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/login_stats.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login Attempts Stats</title>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <style>
        /* Optional: Add styling to make the chart container responsive */
        .chart-container {
            max-width: 600px;  /* Set a maximum width */
            margin: 0 auto;    /* Center the chart */
        }
    </style>
</head>
<body>
    <h2>User Login Attempts Statistics</h2>

    <!-- Chart Container with smaller canvas -->
    <div class=\"chart-container\">
        <canvas id=\"loginAttemptsChart\" width=\"400\" height=\"300\"></canvas>  <!-- Reduced size -->
    </div>

    <script>
        const ctx = document.getElementById('loginAttemptsChart').getContext('2d');

        const loginAttemptsData = {
            labels: [
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 29, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 30
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "email", [], "any", false, false, false, 30), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "loginAttempts", [], "any", false, false, false, 30), "html", null, true);
                yield " Attempts'";
            } else {
                yield ",
                    '";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "email", [], "any", false, false, false, 31), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "loginAttempts", [], "any", false, false, false, 31), "html", null, true);
                yield " Attempts'
                ";
            }
            // line 33
            yield "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            ],
            datasets: [{
                label: 'Login Attempts',
                data: [
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 38, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 39
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "loginAttempts", [], "any", false, false, false, 39), "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 39)) {
                yield ",";
            }
            // line 40
            yield "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: loginAttemptsData,
            options: {
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
            }
        };

        const loginAttemptsChart = new Chart(ctx, config);
    </script>
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
        return "admin/user/login_stats.html.twig";
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
        return array (  170 => 41,  156 => 40,  150 => 39,  133 => 38,  127 => 34,  113 => 33,  106 => 31,  95 => 30,  78 => 29,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login Attempts Stats</title>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <style>
        /* Optional: Add styling to make the chart container responsive */
        .chart-container {
            max-width: 600px;  /* Set a maximum width */
            margin: 0 auto;    /* Center the chart */
        }
    </style>
</head>
<body>
    <h2>User Login Attempts Statistics</h2>

    <!-- Chart Container with smaller canvas -->
    <div class=\"chart-container\">
        <canvas id=\"loginAttemptsChart\" width=\"400\" height=\"300\"></canvas>  <!-- Reduced size -->
    </div>

    <script>
        const ctx = document.getElementById('loginAttemptsChart').getContext('2d');

        const loginAttemptsData = {
            labels: [
                {% for entry in result %}
                    {% if loop.first %}'{{ entry.email }}: {{ entry.loginAttempts }} Attempts'{% else %},
                    '{{ entry.email }}: {{ entry.loginAttempts }} Attempts'
                {% endif %}
                {% endfor %}
            ],
            datasets: [{
                label: 'Login Attempts',
                data: [
                    {% for entry in result %}
                        {{ entry.loginAttempts }}{% if not loop.last %},{% endif %}
                    {% endfor %}
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: loginAttemptsData,
            options: {
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
            }
        };

        const loginAttemptsChart = new Chart(ctx, config);
    </script>
</body>
</html>
", "admin/user/login_stats.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\user\\login_stats.html.twig");
    }
}
