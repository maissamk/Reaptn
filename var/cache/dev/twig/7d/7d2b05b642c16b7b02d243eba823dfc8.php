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
class __TwigTemplate_4dbfc3a27d9a3a75d633b48d65101a24 extends Template
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
            <div class=\"tab-class text-center\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-4 text-start\">
                        <h1>Our Organic Products</h1>
                    </div>
                </div>
                <div class=\"tab-content\">
                    <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                        <div class=\"row g-4 flex-column\">
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 18
            yield "                                <div class=\"card p-3 mb-3 d-flex flex-row align-items-center\" style=\"width: 100%;\">
                                    <div class=\"flex-grow-1\">
                                        <h4 class=\"fw-bold\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 20), "html", null, true);
            yield "</h4>
                                        <p><strong>Statut:</strong> ";
            // line 21
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 21)) ? ("Yes") : ("No"));
            yield "</p>
                                        <p><strong>Description:</strong> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "descr", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                                        <p><strong>Compétences demandées:</strong> ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "comp", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
                                    </div>
                                    <div class=\"text-end\">
                                        <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Show</a>
                                        <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                                    </div>
                                </div>
                            ";
            $context['_iterated'] = true;
        }
        // line 30
        if (!$context['_iterated']) {
            // line 31
            yield "                                <div class=\"text-center\">
                                    <p>No records found</p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                            <div class=\"text-end\">
                                <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_new");
        yield "\" class=\"btn btn-success\">Create new</a>
                            </div>
                        </div>
                    </div>
                </div>
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
        return array (  166 => 36,  163 => 35,  154 => 31,  152 => 30,  144 => 27,  140 => 26,  134 => 23,  130 => 22,  126 => 21,  122 => 20,  118 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre index{% endblock %}

{% block body %}
    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <div class=\"tab-class text-center\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-4 text-start\">
                        <h1>Our Organic Products</h1>
                    </div>
                </div>
                <div class=\"tab-content\">
                    <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                        <div class=\"row g-4 flex-column\">
                            {% for offre in offres %}
                                <div class=\"card p-3 mb-3 d-flex flex-row align-items-center\" style=\"width: 100%;\">
                                    <div class=\"flex-grow-1\">
                                        <h4 class=\"fw-bold\">{{ offre.titre }}</h4>
                                        <p><strong>Statut:</strong> {{ offre.statut ? 'Yes' : 'No' }}</p>
                                        <p><strong>Description:</strong> {{ offre.descr }}</p>
                                        <p><strong>Compétences demandées:</strong> {{ offre.comp }}</p>
                                    </div>
                                    <div class=\"text-end\">
                                        <a href=\"{{ path('app_offre_show', {'id': offre.id}) }}\" class=\"btn btn-primary btn-sm\">Show</a>
                                        <a href=\"{{ path('app_offre_edit', {'id': offre.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"text-center\">
                                    <p>No records found</p>
                                </div>
                            {% endfor %}
                            <div class=\"text-end\">
                                <a href=\"{{ path('app_offre_new') }}\" class=\"btn btn-success\">Create new</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "offre/index.html.twig", "C:\\Users\\takou\\OneDrive\\Desktop\\Reaptn\\templates\\offre\\index.html.twig");
    }
}
