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

/* admin/materiellocation/_form.html.twig */
class __TwigTemplate_072cdbb45ef97f702fce120059fbd488 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materiellocation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materiellocation/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

<table class=\"table\">
    <tr>
        <td><label>";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'label');
        yield "</label></td>
        <td>
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 350px;"]]);
        yield "
            <div class=\"text-danger\">";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'errors');
        yield "</div>
        </td>
    </tr>
    <tr>
        <td><label>";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "prix", [], "any", false, false, false, 12), 'label');
        yield "</label></td>
        <td>
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prix", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 350px;"]]);
        yield "
            <div class=\"text-danger\">";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "prix", [], "any", false, false, false, 15), 'errors');
        yield "</div>
        </td>
    </tr>
    <tr>
        <td><label>";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'label');
        yield "</label></td>
        <td>
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 350px;"]]);
        yield "
            <div class=\"text-danger\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'errors');
        yield "</div>
        </td>
    </tr>
    <tr>
        <td><label>";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "disponibilite", [], "any", false, false, false, 26), 'label');
        yield "</label></td>
        <td>
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "disponibilite", [], "any", false, false, false, 28), 'widget');
        yield "
            <div class=\"text-danger\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "disponibilite", [], "any", false, false, false, 29), 'errors');
        yield "</div>
        </td>
    </tr>
    <tr>
        <td><label>";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33), 'label');
        yield "</label></td>
        <td>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "image", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 350px;"]]);
        yield "
            <div class=\"text-danger\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36), 'errors');
        yield "</div>
        </td>
    </tr>
    
    <tr>
        <td colspan=\"2\"  style=\"padding-top: 10px;\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 42, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
        </td>
    </tr>
</table>

";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
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
        return "admin/materiellocation/_form.html.twig";
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
        return array (  145 => 47,  137 => 42,  128 => 36,  124 => 35,  119 => 33,  112 => 29,  108 => 28,  103 => 26,  96 => 22,  92 => 21,  87 => 19,  80 => 15,  76 => 14,  71 => 12,  64 => 8,  60 => 7,  55 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, { 'attr': { 'novalidate': 'novalidate' } }) }}

<table class=\"table\">
    <tr>
        <td><label>{{ form_label(form.nom) }}</label></td>
        <td>
            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'style': 'width: 350px;'}}) }}
            <div class=\"text-danger\">{{ form_errors(form.nom) }}</div>
        </td>
    </tr>
    <tr>
        <td><label>{{ form_label(form.prix) }}</label></td>
        <td>
            {{ form_widget(form.prix, {'attr': {'class': 'form-control','style': 'width: 350px;'}}) }}
            <div class=\"text-danger\">{{ form_errors(form.prix) }}</div>
        </td>
    </tr>
    <tr>
        <td><label>{{ form_label(form.description) }}</label></td>
        <td>
            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'style': 'width: 350px;'}}) }}
            <div class=\"text-danger\">{{ form_errors(form.description) }}</div>
        </td>
    </tr>
    <tr>
        <td><label>{{ form_label(form.disponibilite) }}</label></td>
        <td>
            {{ form_widget(form.disponibilite) }}
            <div class=\"text-danger\">{{ form_errors(form.disponibilite) }}</div>
        </td>
    </tr>
    <tr>
        <td><label>{{ form_label(form.image) }}</label></td>
        <td>
            {{ form_widget(form.image, {'attr': {'class': 'form-control', 'style': 'width: 350px;'}}) }}
            <div class=\"text-danger\">{{ form_errors(form.image) }}</div>
        </td>
    </tr>
    
    <tr>
        <td colspan=\"2\"  style=\"padding-top: 10px;\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
        </td>
    </tr>
</table>

{{ form_end(form) }}
", "admin/materiellocation/_form.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\materiellocation\\_form.html.twig");
    }
}
