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

/* profile/edit.html.twig */
class __TwigTemplate_9f4d71831697773db4f5ce1b1a800f7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/edit.html.twig", 1);
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

        yield "Modifier le Profil";
        
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
        yield "    <div class=\"container d-flex justify-content-center align-items-center mt-5\" style=\"min-height: 100vh; background-color: white; padding-top: 100px;\">
        <div class=\"col-md-6 col-lg-5\">
            <div class=\"card p-4 shadow\" style=\"background-color: #f1f1f1;\">
                <h1 class=\"text-center mb-4 text-warning\">Modifier le Profil</h1>

                <!-- Avatar -->
                <div class=\"text-center\">
                    ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "avatar", [], "any", false, false, false, 13)) {
            // line 14
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "avatar", [], "any", false, false, false, 14))), "html", null, true);
            yield "\" class=\"rounded-circle mb-3\" width=\"120\" height=\"120\" alt=\"Avatar Utilisateur\">
                    ";
        } else {
            // line 16
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/avatars/default.png"), "html", null, true);
            yield "\" class=\"rounded-circle mb-3\" width=\"120\" height=\"120\" alt=\"Avatar par défaut\">
                    ";
        }
        // line 18
        yield "                </div>

                ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

                    ";
        // line 23
        yield "                    <div class=\"mb-3\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'label', ["label" => "Prénom"]);
        yield "
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre prénom"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 32
        yield "                    <div class=\"mb-3\">
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'label', ["label" => "Nom"]);
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 41
        yield "                    <div class=\"mb-3\">
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label', ["label" => "Adresse email"]);
        yield "
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre email"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 50
        yield "                    <div class=\"mb-3\">
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "telephone", [], "any", false, false, false, 51), 'label', ["label" => "Numéro de téléphone"]);
        yield "
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "telephone", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre numéro de téléphone"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "telephone", [], "any", false, false, false, 54), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 59
        yield "                    <div class=\"mb-3\">
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "avatar", [], "any", false, false, false, 60), 'label', ["label" => "Télécharger un Nouvel Avatar"]);
        yield "
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "avatar", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "avatar", [], "any", false, false, false, 63), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 68
        yield "                    <button type=\"submit\" class=\"btn btn-success w-100 mt-3\">Enregistrer les Modifications</button>

                ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
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
        return "profile/edit.html.twig";
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
        return array (  231 => 70,  227 => 68,  220 => 63,  215 => 61,  211 => 60,  208 => 59,  201 => 54,  196 => 52,  192 => 51,  189 => 50,  182 => 45,  177 => 43,  173 => 42,  170 => 41,  163 => 36,  158 => 34,  154 => 33,  151 => 32,  144 => 27,  139 => 25,  135 => 24,  132 => 23,  127 => 20,  123 => 18,  117 => 16,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Profil{% endblock %}

{% block body %}
    <div class=\"container d-flex justify-content-center align-items-center mt-5\" style=\"min-height: 100vh; background-color: white; padding-top: 100px;\">
        <div class=\"col-md-6 col-lg-5\">
            <div class=\"card p-4 shadow\" style=\"background-color: #f1f1f1;\">
                <h1 class=\"text-center mb-4 text-warning\">Modifier le Profil</h1>

                <!-- Avatar -->
                <div class=\"text-center\">
                    {% if user.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" class=\"rounded-circle mb-3\" width=\"120\" height=\"120\" alt=\"Avatar Utilisateur\">
                    {% else %}
                        <img src=\"{{ asset('uploads/avatars/default.png') }}\" class=\"rounded-circle mb-3\" width=\"120\" height=\"120\" alt=\"Avatar par défaut\">
                    {% endif %}
                </div>

                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

                    {# Prénom Field #}
                    <div class=\"mb-3\">
                        {{ form_label(form.prenom, 'Prénom') }}
                        {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre prénom'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(form.prenom) }}
                        </div>
                    </div>

                    {# Nom Field #}
                    <div class=\"mb-3\">
                        {{ form_label(form.nom, 'Nom') }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre nom'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(form.nom) }}
                        </div>
                    </div>

                    {# Email Field #}
                    <div class=\"mb-3\">
                        {{ form_label(form.email, 'Adresse email') }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre email'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(form.email) }}
                        </div>
                    </div>

                    {# Numéro de Téléphone Field #}
                    <div class=\"mb-3\">
                        {{ form_label(form.telephone, 'Numéro de téléphone') }}
                        {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre numéro de téléphone'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(form.telephone) }}
                        </div>
                    </div>

                    {# Avatar Upload Field #}
                    <div class=\"mb-3\">
                        {{ form_label(form.avatar, 'Télécharger un Nouvel Avatar') }}
                        {{ form_widget(form.avatar, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger\">
                            {{ form_errors(form.avatar) }}
                        </div>
                    </div>

                    {# Submit Button #}
                    <button type=\"submit\" class=\"btn btn-success w-100 mt-3\">Enregistrer les Modifications</button>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "profile/edit.html.twig", "C:\\Users\\takou\\OneDrive\\Desktop\\Reaptn\\templates\\profile\\edit.html.twig");
    }
}
