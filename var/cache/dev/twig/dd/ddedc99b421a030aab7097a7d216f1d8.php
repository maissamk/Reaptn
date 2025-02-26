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

/* admin/offre/new_back.html.twig */
class __TwigTemplate_cf239d7497051f3eb98f37ddc6a20ee1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/offre/new_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/offre/new_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/offre/new_back.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container mt-5\" style=\"width: 70%; margin-left: 27%; padding-top: 50px;\">
    <div class=\"container\">
        <h1 class=\"text-center\">Créer une nouvelle offre</h1>

        <div class=\"row\">
            <div class=\"col-md-7 offset-md-4 col-lg-6 offset-lg-3\"> ";
        // line 10
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 12
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12) != "_token")) {
                // line 13
                yield "                            <div class=\"mb-3\">
                                ";
                // line 14
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                yield "
                                ";
                // line 15
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                ";
                // line 16
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                yield "
                            </div>
                        ";
            }
            // line 19
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
                    <button class=\"btn btn-primary\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 21, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
                ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        yield "
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
        return "admin/offre/new_back.html.twig";
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
        return array (  125 => 22,  121 => 21,  118 => 20,  112 => 19,  106 => 16,  102 => 15,  98 => 14,  95 => 13,  92 => 12,  88 => 11,  83 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block body %}
<div class=\"container mt-5\" style=\"width: 70%; margin-left: 27%; padding-top: 50px;\">
    <div class=\"container\">
        <h1 class=\"text-center\">Créer une nouvelle offre</h1>

        <div class=\"row\">
            <div class=\"col-md-7 offset-md-4 col-lg-6 offset-lg-3\"> {# Adjusted positioning #}
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                    {% for field in form %}
                        {% if field.vars.name != '_token' %}
                            <div class=\"mb-3\">
                                {{ form_label(field) }}
                                {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(field) }}
                            </div>
                        {% endif %}
                    {% endfor %}

                    <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/offre/new_back.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\offre\\new_back.html.twig");
    }
}
