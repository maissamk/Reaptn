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

/* registration/register.html.twig */
class __TwigTemplate_3524e6644025ce487037d4d1bca48b1d extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container d-flex justify-content-center align-items-center mt-5\" style=\"min-height: 100vh; background-color: white; padding-top: 150px;\">
        <div class=\"col-md-6 col-lg-4\">
            <div class=\"card p-4 shadow\" style=\"background-color: #f1f1f1;\">
                <h1 class=\"text-center mb-4\">Inscription</h1>

                ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                    ";
        // line 15
        yield "                    <div class=\"mb-3\">
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'label', ["label" => "Nom"]);
        yield "
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 24
        yield "                    <div class=\"mb-3\">
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'label', ["label" => "Prénom"]);
        yield "
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre prénom"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 33
        yield "                    <div class=\"mb-3\">
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "telephone", [], "any", false, false, false, 34), 'label', ["label" => "Numéro de téléphone"]);
        yield "
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "telephone", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre numéro de téléphone"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "telephone", [], "any", false, false, false, 37), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 42
        yield "                    <div class=\"mb-3\">
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'label', ["label" => "Adresse email"]);
        yield "
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre email"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 51
        yield "                    <div class=\"mb-3\">
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "plainPassword", [], "any", false, false, false, 52), 'label', ["label" => "Mot de passe"]);
        yield "
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "plainPassword", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez un mot de passe"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "plainPassword", [], "any", false, false, false, 55), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 60
        yield "                    <div class=\"mb-3\">
                        <label for=\"roles\">Sélectionnez votre rôle</label>
                        <div class=\"d-flex justify-content-start flex-wrap\">
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 64
            yield "                                <div class=\"form-check mr-3\">
                                    ";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 66), "label", [], "any", false, false, false, 66), "html", null, true);
            yield "</label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "roles", [], "any", false, false, false, 71), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 76
        yield "                    <div class=\"mb-3 form-check\">
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "agreeTerms", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "agreeTerms", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "J'accepte les termes"]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "agreeTerms", [], "any", false, false, false, 80), 'errors');
        yield "
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>

                ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), 'form_end');
        yield "
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
        return "registration/register.html.twig";
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
        return array (  264 => 86,  255 => 80,  250 => 78,  246 => 77,  243 => 76,  236 => 71,  232 => 69,  223 => 66,  219 => 65,  216 => 64,  212 => 63,  207 => 60,  200 => 55,  195 => 53,  191 => 52,  188 => 51,  181 => 46,  176 => 44,  172 => 43,  169 => 42,  162 => 37,  157 => 35,  153 => 34,  150 => 33,  143 => 28,  138 => 26,  134 => 25,  131 => 24,  124 => 19,  119 => 17,  115 => 16,  112 => 15,  107 => 12,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <div class=\"container d-flex justify-content-center align-items-center mt-5\" style=\"min-height: 100vh; background-color: white; padding-top: 150px;\">
        <div class=\"col-md-6 col-lg-4\">
            <div class=\"card p-4 shadow\" style=\"background-color: #f1f1f1;\">
                <h1 class=\"text-center mb-4\">Inscription</h1>

                {{ form_start(registrationForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                    {# Nom Field #}
                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.nom, 'Nom') }}
                        {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre nom'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(registrationForm.nom) }}
                        </div>
                    </div>

                    {# Prenom Field #}
                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.prenom, 'Prénom') }}
                        {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre prénom'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(registrationForm.prenom) }}
                        </div>
                    </div>

                    {# Telephone Field #}
                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.telephone, 'Numéro de téléphone') }}
                        {{ form_widget(registrationForm.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre numéro de téléphone'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(registrationForm.telephone) }}
                        </div>
                    </div>

                    {# Email Field #}
                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.email, 'Adresse email') }}
                        {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre email'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(registrationForm.email) }}
                        </div>
                    </div>

                    {# Password Field #}
                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.plainPassword, 'Mot de passe') }}
                        {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Entrez un mot de passe'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(registrationForm.plainPassword) }}
                        </div>
                    </div>

                    {# Role Selection #}
                    <div class=\"mb-3\">
                        <label for=\"roles\">Sélectionnez votre rôle</label>
                        <div class=\"d-flex justify-content-start flex-wrap\">
                            {% for choice in registrationForm.roles %}
                                <div class=\"form-check mr-3\">
                                    {{ form_widget(choice, {'attr': {'class': 'form-check-input'}}) }}
                                    <label class=\"form-check-label\">{{ choice.vars.label }}</label>
                                </div>
                            {% endfor %}
                        </div>
                        <div class=\"text-danger\">
                            {{ form_errors(registrationForm.roles) }}
                        </div>
                    </div>

                    {# Agree to Terms #}
                    <div class=\"mb-3 form-check\">
                        {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                        {{ form_label(registrationForm.agreeTerms, 'J\\'accepte les termes', {'label_attr': {'class': 'form-check-label'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(registrationForm.agreeTerms) }}
                        </div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>

                {{ form_end(registrationForm) }}
            </div>
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\registration\\register.html.twig");
    }
}
