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

/* security/complete_profile.html.twig */
class __TwigTemplate_8483c522b85edf2e42160c31e561789a extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'footer' => [$this, 'block_footer'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/complete_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/complete_profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/complete_profile.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Complete Your Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 7
        yield "    <div style=\"display:none;\">
        <!-- Navbar content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 13
        yield "    <div style=\"display:none;\">
        <!-- Footer content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "    <!-- Background Image -->
    <div class=\"background-container\" style=\"
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/backgroundlog.jpg"), "html", null, true);
        yield "');
        background-size: cover;
        background-position: center;
        filter: brightness(0.8); /* Darken the background slightly */
        z-index: -1;
    \"></div>

    <!-- Profile Completion Container -->
    <div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"card p-4 shadow-lg\" style=\"
            background-color: rgba(241, 241, 241, 0.8); /* Semi-transparent grey background */
            max-width: 600px;
            width: 100%;
            border-radius: 15px;
            backdrop-filter: blur(5px); /* Add a blur effect for a frosted glass look */
        \">
            <h1 class=\"text-center mb-4\" style=\"color: #333; font-weight: bold;\">Complete Your Profile</h1>

            <!-- Profile Completion Form -->
            ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start');
        yield "
                <!-- Password Input -->
                <div class=\"mb-3\">
                    <label for=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "\" class=\"form-label\" style=\"color: #555;\">
                        <i class=\"fas fa-lock\"></i> Password
                    </label>
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 10px;"]]);
        yield "
                </div>

                <!-- Role Selection -->
                <div class=\"mb-3\">
                    <label for=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        yield "\" class=\"form-label\" style=\"color: #555;\">
                        <i class=\"fas fa-user-tag\"></i> Role
                    </label>
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "roles", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 10px;"]]);
        yield "
                </div>

                <!-- Telephone Input -->
                <div class=\"mb-3\">
                    <label for=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "telephone", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        yield "\" class=\"form-label\" style=\"color: #555;\">
                        <i class=\"fas fa-phone\"></i> Telephone Number
                    </label>
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "telephone", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 10px;"]]);
        yield "
                </div>

                <!-- Submit Button -->
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"background-color: #28a745; border: none; border-radius: 10px; padding: 10px;\">
                    <i class=\"fas fa-save\"></i> Save
                </button>
            ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>

    <!-- Font Awesome for Icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
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
        return "security/complete_profile.html.twig";
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
        return array (  237 => 73,  227 => 66,  221 => 63,  213 => 58,  207 => 55,  199 => 50,  193 => 47,  187 => 44,  165 => 25,  156 => 18,  143 => 17,  129 => 13,  116 => 12,  102 => 7,  89 => 6,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/security/complete_profile.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Complete Your Profile{% endblock %}
{% block navbar %}
    <div style=\"display:none;\">
        <!-- Navbar content -->
    </div>
{% endblock %}

{% block footer %}
    <div style=\"display:none;\">
        <!-- Footer content -->
    </div>
{% endblock %}
{% block body %}
    <!-- Background Image -->
    <div class=\"background-container\" style=\"
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('frontoffice/img/backgroundlog.jpg') }}');
        background-size: cover;
        background-position: center;
        filter: brightness(0.8); /* Darken the background slightly */
        z-index: -1;
    \"></div>

    <!-- Profile Completion Container -->
    <div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"card p-4 shadow-lg\" style=\"
            background-color: rgba(241, 241, 241, 0.8); /* Semi-transparent grey background */
            max-width: 600px;
            width: 100%;
            border-radius: 15px;
            backdrop-filter: blur(5px); /* Add a blur effect for a frosted glass look */
        \">
            <h1 class=\"text-center mb-4\" style=\"color: #333; font-weight: bold;\">Complete Your Profile</h1>

            <!-- Profile Completion Form -->
            {{ form_start(form) }}
                <!-- Password Input -->
                <div class=\"mb-3\">
                    <label for=\"{{ form.plainPassword.vars.id }}\" class=\"form-label\" style=\"color: #555;\">
                        <i class=\"fas fa-lock\"></i> Password
                    </label>
                    {{ form_widget(form.plainPassword, { 'attr': { 'class': 'form-control', 'style': 'border-radius: 10px;' } }) }}
                </div>

                <!-- Role Selection -->
                <div class=\"mb-3\">
                    <label for=\"{{ form.roles.vars.id }}\" class=\"form-label\" style=\"color: #555;\">
                        <i class=\"fas fa-user-tag\"></i> Role
                    </label>
                    {{ form_widget(form.roles, { 'attr': { 'class': 'form-control', 'style': 'border-radius: 10px;' } }) }}
                </div>

                <!-- Telephone Input -->
                <div class=\"mb-3\">
                    <label for=\"{{ form.telephone.vars.id }}\" class=\"form-label\" style=\"color: #555;\">
                        <i class=\"fas fa-phone\"></i> Telephone Number
                    </label>
                    {{ form_widget(form.telephone, { 'attr': { 'class': 'form-control', 'style': 'border-radius: 10px;' } }) }}
                </div>

                <!-- Submit Button -->
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"background-color: #28a745; border: none; border-radius: 10px; padding: 10px;\">
                    <i class=\"fas fa-save\"></i> Save
                </button>
            {{ form_end(form) }}
        </div>
    </div>

    <!-- Font Awesome for Icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
{% endblock %}", "security/complete_profile.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\security\\complete_profile.html.twig");
    }
}
