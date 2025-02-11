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

/* offre/index.html.twig */
class __TwigTemplate_194452f27360348310d7c036a08e3628 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/index.html.twig", 1);
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

        yield "Offre index";
        
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
        yield "    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center\">
                <h1>Our Organic Products</h1>
                <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                    <li class=\"nav-item\">
                        <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                            <span class=\"text-dark\" style=\"width: 130px;\">All Products</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"row g-4\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 20
            yield "                    <div class=\"col-lg-3\">
                        <div class=\"card shadow-sm border-0\">
                            <img src=\"/path/to/image.jpg\" class=\"card-img-top\" alt=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
                            <div class=\"card-body text-center\">
                                <span class=\"badge bg-warning text-dark\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "comp", [], "any", false, false, false, 24), "html", null, true);
            yield "</span>
                                <h5 class=\"card-title mt-2\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 25), "html", null, true);
            yield "</h5>
                                <p class=\"card-text\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "descr", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Show</a>
                                    <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 35
            yield "                    <div class=\"col-12 text-center\">
                        <p>No records found</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            </div>
            <div class=\"text-end mt-4\">
                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_new");
        yield "\" class=\"btn btn-success\">Create new</a>
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
        return "offre/index.html.twig";
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
        return array (  171 => 41,  167 => 39,  158 => 35,  156 => 38,  146 => 29,  142 => 28,  137 => 26,  133 => 25,  129 => 24,  124 => 22,  120 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre index{% endblock %}

{% block body %}
    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <div class=\"text-center\">
                <h1>Our Organic Products</h1>
                <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                    <li class=\"nav-item\">
                        <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                            <span class=\"text-dark\" style=\"width: 130px;\">All Products</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"row g-4\">
                {% for offre in offres %}
                    <div class=\"col-lg-3\">
                        <div class=\"card shadow-sm border-0\">
                            <img src=\"/path/to/image.jpg\" class=\"card-img-top\" alt=\"{{ offre.titre }}\">
                            <div class=\"card-body text-center\">
                                <span class=\"badge bg-warning text-dark\">{{ offre.comp }}</span>
                                <h5 class=\"card-title mt-2\">{{ offre.titre }}</h5>
                                <p class=\"card-text\">{{ offre.descr }}</p>
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"{{ path('app_offre_show', {'id': offre.id}) }}\" class=\"btn btn-primary btn-sm\">Show</a>
                                    <a href=\"{{ path('app_offre_edit', {'id': offre.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12 text-center\">
                        <p>No records found</p>
                    </div>
                {% endfor %}
            </div>
            <div class=\"text-end mt-4\">
                <a href=\"{{ path('app_offre_new') }}\" class=\"btn btn-success\">Create new</a>
            </div>
        </div>
    </div>
{% endblock %}
", "offre/index.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\offre\\index.html.twig");
    }
}
