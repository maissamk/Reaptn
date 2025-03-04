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
class __TwigTemplate_e20b6bd9f963a038927997cbe014dd69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Inscription";
        
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
        yield "    <div class=\"container d-flex justify-content-center align-items-center mt-5\" style=\"min-height: 100vh; background-color: white; padding-top: 150px;\">
        <div class=\"col-md-6 col-lg-4\">
            <div class=\"card p-4 shadow\" style=\"background-color: #f1f1f1;\">
                <h1 class=\"text-center mb-4\">Inscription</h1>

                ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                    ";
        // line 14
        yield "                    <div class=\"mb-3\">
                        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'label', ["label" => "Nom"]);
        yield "
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 23
        yield "                    <div class=\"mb-3\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'label', ["label" => "Prénom"]);
        yield "
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre prénom"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 32
        yield "                    <div class=\"mb-3\">
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), 'label', ["label" => "Numéro de téléphone"]);
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "telephone", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre numéro de téléphone"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 41
        yield "                    <div class=\"mb-3\">
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label', ["label" => "Adresse email"]);
        yield "
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre email"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 50
        yield "                    <div class=\"mb-3\">
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "plainPassword", [], "any", false, false, false, 51), 'label', ["label" => "Mot de passe"]);
        yield "
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "plainPassword", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez un mot de passe"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "plainPassword", [], "any", false, false, false, 54), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 59
        yield "                    <div class=\"mb-3\">
                        <label for=\"roles\">Sélectionnez votre rôle</label>
                        <div class=\"d-flex justify-content-start flex-wrap\">
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "roles", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 63
            yield "                                <div class=\"form-check mr-3\">
                                    ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
                                    <label class=\"form-check-label\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "vars", [], "any", false, false, false, 65), "label", [], "any", false, false, false, 65), "html", null, true);
            yield "</label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "roles", [], "any", false, false, false, 70), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 75
        yield "                    <div class=\"mb-3 form-check\">
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "agreeTerms", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "agreeTerms", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "J'accepte les termes"]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "agreeTerms", [], "any", false, false, false, 79), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 84
        yield "                    <div class=\"mb-3\">
<input type=\"hidden\" name=\"g-recaptcha-response\" id=\"g-recaptcha-response\">
                        <div class=\"text-muted small mt-2\">
                            <small>This site is protected by reCAPTCHA and the Google
                                <a href=\"https://policies.google.com/privacy\" target=\"_blank\">Privacy Policy</a> and
                                <a href=\"https://policies.google.com/terms\" target=\"_blank\">Terms of Service</a> apply.
                            </small>
                        </div>
                    </div>

                    ";
        // line 95
        yield "                    <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>

                ";
        // line 97
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 103
        yield "   <script src=\"https://www.google.com/recaptcha/api.js?render=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "\"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "', { action: 'submit' }).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
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
        return array (  293 => 106,  286 => 103,  278 => 97,  274 => 95,  262 => 84,  255 => 79,  250 => 77,  246 => 76,  243 => 75,  236 => 70,  232 => 68,  223 => 65,  219 => 64,  216 => 63,  212 => 62,  207 => 59,  200 => 54,  195 => 52,  191 => 51,  188 => 50,  181 => 45,  176 => 43,  172 => 42,  169 => 41,  162 => 36,  157 => 34,  153 => 33,  150 => 32,  143 => 27,  138 => 25,  134 => 24,  131 => 23,  124 => 18,  119 => 16,  115 => 15,  112 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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

                    {# reCAPTCHA Widget #}
                    <div class=\"mb-3\">
<input type=\"hidden\" name=\"g-recaptcha-response\" id=\"g-recaptcha-response\">
                        <div class=\"text-muted small mt-2\">
                            <small>This site is protected by reCAPTCHA and the Google
                                <a href=\"https://policies.google.com/privacy\" target=\"_blank\">Privacy Policy</a> and
                                <a href=\"https://policies.google.com/terms\" target=\"_blank\">Terms of Service</a> apply.
                            </small>
                        </div>
                    </div>

                    {# Submit Button #}
                    <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>

                {{ form_end(registrationForm) }}
            </div>
        </div>
    </div>

    {# Include the reCAPTCHA script #}
   <script src=\"https://www.google.com/recaptcha/api.js?render={{ recaptcha_site_key }}\"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ recaptcha_site_key }}', { action: 'submit' }).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
{% endblock %}", "registration/register.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\registration\\register.html.twig");
    }
}
