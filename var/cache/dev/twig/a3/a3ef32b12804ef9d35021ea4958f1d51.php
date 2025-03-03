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

/* admin/materielagricole/stats.html.twig */
class __TwigTemplate_4c40f9acfde40c416ba9954b7d9f1b06 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/stats.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/materielagricole/stats.html.twig", 1);
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

        yield "Statistiques des Matériels Agricoles";
        
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
        yield "<div class=\"container-fluid pt-5\" style=\"margin-left: 260px; min-height: 100vh;\">
    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-header bg-primary text-white text-center\">
                    <h2 class=\"mb-0\">📊 Statistiques des Matériels Agricoles</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <!-- Graphiques -->
                        <div class=\"col-md-6\">
                            <div class=\"card shadow-sm p-3\">
                                <h5 class=\"text-center\">Disponibilité des Matériels</h5>
                                <canvas id=\"disponibiliteChart\"></canvas>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card shadow-sm p-3\">
                                <h5 class=\"text-center\">Analyse des Prix</h5>
                                <canvas id=\"prixChart\"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Statistiques textuelles -->
                    <div class=\"row mt-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Total des Matériels</h5>
                                <p class=\"h4 text-primary\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMateriels"]) || array_key_exists("totalMateriels", $context) ? $context["totalMateriels"] : (function () { throw new RuntimeError('Variable "totalMateriels" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Total des Prix</h5>
                                <p class=\"h4 text-success\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrix"]) || array_key_exists("totalPrix", $context) ? $context["totalPrix"] : (function () { throw new RuntimeError('Variable "totalPrix" does not exist.', 41, $this->source); })()), "html", null, true);
        yield " DT</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 mt-3\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Moyenne des Prix</h5>
                                <p class=\"h4 text-warning\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["moyennePrix"]) || array_key_exists("moyennePrix", $context) ? $context["moyennePrix"] : (function () { throw new RuntimeError('Variable "moyennePrix" does not exist.', 47, $this->source); })()), 2), "html", null, true);
        yield " DT</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 mt-3\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Matériels Disponibles</h5>
                                <p class=\"h4 text-success\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 mt-3\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Matériels Non Disponibles</h5>
                                <p class=\"h4 text-danger\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nonDisponible"]) || array_key_exists("nonDisponible", $context) ? $context["nonDisponible"] : (function () { throw new RuntimeError('Variable "nonDisponible" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center mt-4\">
                        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tables");
        yield "\" class=\"btn btn-outline-primary btn-lg\">
                            <i class=\"fas fa-arrow-left\"></i> Retour à la gestion des matériels
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intégration de Chart.js -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Graphique des disponibilités (disponible vs non disponible)
        var disponibiliteChart = new Chart(document.getElementById('disponibiliteChart'), {
            type: 'doughnut',
            data: {
                labels: ['Disponible', 'Non Disponible'],
                datasets: [{
                    data: [";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["disponible"]) || array_key_exists("disponible", $context) ? $context["disponible"] : (function () { throw new RuntimeError('Variable "disponible" does not exist.', 85, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nonDisponible"]) || array_key_exists("nonDisponible", $context) ? $context["nonDisponible"] : (function () { throw new RuntimeError('Variable "nonDisponible" does not exist.', 85, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: ['#28a745', '#dc3545'],
                    borderColor: '#ffffff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });

        // Graphique des prix (total vs moyenne)
        var prixChart = new Chart(document.getElementById('prixChart'), {
            type: 'bar',
            data: {
                labels: ['Total Prix', 'Moyenne Prix'],
                datasets: [{
                    data: [";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPrix"]) || array_key_exists("totalPrix", $context) ? $context["totalPrix"] : (function () { throw new RuntimeError('Variable "totalPrix" does not exist.', 105, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["moyennePrix"]) || array_key_exists("moyennePrix", $context) ? $context["moyennePrix"] : (function () { throw new RuntimeError('Variable "moyennePrix" does not exist.', 105, $this->source); })()), 2), "html", null, true);
        yield "],
                    backgroundColor: ['#007bff', '#ffc107'],
                    borderColor: '#ffffff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
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
        return "admin/materielagricole/stats.html.twig";
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
        return array (  224 => 105,  199 => 85,  176 => 65,  167 => 59,  158 => 53,  149 => 47,  140 => 41,  131 => 35,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Statistiques des Matériels Agricoles{% endblock %}

{% block body %}
<div class=\"container-fluid pt-5\" style=\"margin-left: 260px; min-height: 100vh;\">
    <div class=\"row justify-content-center\">
        <div class=\"col-10\">
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-header bg-primary text-white text-center\">
                    <h2 class=\"mb-0\">📊 Statistiques des Matériels Agricoles</h2>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <!-- Graphiques -->
                        <div class=\"col-md-6\">
                            <div class=\"card shadow-sm p-3\">
                                <h5 class=\"text-center\">Disponibilité des Matériels</h5>
                                <canvas id=\"disponibiliteChart\"></canvas>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card shadow-sm p-3\">
                                <h5 class=\"text-center\">Analyse des Prix</h5>
                                <canvas id=\"prixChart\"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Statistiques textuelles -->
                    <div class=\"row mt-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Total des Matériels</h5>
                                <p class=\"h4 text-primary\">{{ totalMateriels }}</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Total des Prix</h5>
                                <p class=\"h4 text-success\">{{ totalPrix }} DT</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 mt-3\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Moyenne des Prix</h5>
                                <p class=\"h4 text-warning\">{{ moyennePrix|number_format(2) }} DT</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 mt-3\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Matériels Disponibles</h5>
                                <p class=\"h4 text-success\">{{ disponible }}</p>
                            </div>
                        </div>
                        <div class=\"col-md-6 mt-3\">
                            <div class=\"card shadow-sm p-3\">
                                <h5>Matériels Non Disponibles</h5>
                                <p class=\"h4 text-danger\">{{ nonDisponible }}</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-center mt-4\">
                        <a href=\"{{ path('app_tables') }}\" class=\"btn btn-outline-primary btn-lg\">
                            <i class=\"fas fa-arrow-left\"></i> Retour à la gestion des matériels
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intégration de Chart.js -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Graphique des disponibilités (disponible vs non disponible)
        var disponibiliteChart = new Chart(document.getElementById('disponibiliteChart'), {
            type: 'doughnut',
            data: {
                labels: ['Disponible', 'Non Disponible'],
                datasets: [{
                    data: [{{ disponible }}, {{ nonDisponible }}],
                    backgroundColor: ['#28a745', '#dc3545'],
                    borderColor: '#ffffff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });

        // Graphique des prix (total vs moyenne)
        var prixChart = new Chart(document.getElementById('prixChart'), {
            type: 'bar',
            data: {
                labels: ['Total Prix', 'Moyenne Prix'],
                datasets: [{
                    data: [{{ totalPrix }}, {{ moyennePrix|number_format(2) }}],
                    backgroundColor: ['#007bff', '#ffc107'],
                    borderColor: '#ffffff',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    });
</script>

{% endblock %}
", "admin/materielagricole/stats.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\materielagricole\\stats.html.twig");
    }
}
