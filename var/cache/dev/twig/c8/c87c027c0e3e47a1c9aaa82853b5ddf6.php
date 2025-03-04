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

/* admin/employe/_form_back.html.twig */
class __TwigTemplate_42bbbe5bbfb185276a4401d5422cab8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/employe/_form_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/employe/_form_back.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => true, "class" => "needs-validation"]]);
        yield "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 4
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4) != "_token")) {
                // line 5
                yield "        <div class=\"mb-3\">
            ";
                // line 6
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "form-label"]]);
                yield "
            ";
                // line 7
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
            ";
                // line 8
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                yield "
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
<button class=\"btn btn-primary\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 13, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end');
        yield "
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
        return "admin/employe/_form_back.html.twig";
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
        return array (  89 => 15,  84 => 13,  81 => 12,  71 => 8,  67 => 7,  63 => 6,  60 => 5,  57 => 4,  53 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, { 'attr': { 'novalidate': true, 'class': 'needs-validation' } }) }}

{% for field in form %}
    {% if field.vars.name != '_token' %}
        <div class=\"mb-3\">
            {{ form_label(field, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(field) }}
        </div>
    {% endif %}
{% endfor %}

<button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

{{ form_end(form) }}
", "admin/employe/_form_back.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\admin\\employe\\_form_back.html.twig");
    }
}
