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

/* admin/profile/edit.html.twig */
class __TwigTemplate_0b025e0b791fd3bcfaac7115939d26de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/profile/edit.html.twig", 1);
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
        yield "    <div class=\"container\" style=\"margin-right: 50px;\">
                <h1 class=\"text-center mb-4 text-warning\">Modifier le Profil</h1>

                <!-- Avatar -->
                <div class=\"text-center\">
                    ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "avatar", [], "any", false, false, false, 11)) {
            // line 12
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "avatar", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" class=\"rounded-circle mb-3\" width=\"120\" height=\"120\" alt=\"Avatar Utilisateur\">
                    ";
        } else {
            // line 14
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/avatars/default.png"), "html", null, true);
            yield "\" class=\"rounded-circle mb-3\" width=\"120\" height=\"120\" alt=\"Avatar par défaut\">
                    ";
        }
        // line 16
        yield "                </div>

                ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "

                    ";
        // line 21
        yield "                    <div class=\"mb-3\">
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'label', ["label" => "Prénom"]);
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre prénom"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 30
        yield "                    <div class=\"mb-3\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'label', ["label" => "Nom"]);
        yield "
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 39
        yield "                    <div class=\"mb-3\">
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'label', ["label" => "Adresse email"]);
        yield "
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre email"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 48
        yield "                    <div class=\"mb-3\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "telephone", [], "any", false, false, false, 49), 'label', ["label" => "Numéro de téléphone"]);
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "telephone", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre numéro de téléphone"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "telephone", [], "any", false, false, false, 52), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 57
        yield "                    <div class=\"mb-3\">
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "avatar", [], "any", false, false, false, 58), 'label', ["label" => "Télécharger un Nouvel Avatar"]);
        yield "
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "avatar", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger\">
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "avatar", [], "any", false, false, false, 61), 'errors');
        yield "
                        </div>
                    </div>

                    ";
        // line 66
        yield "                    <button type=\"submit\" class=\"btn btn-success w-100 mt-3\">Enregistrer les Modifications</button>

                ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
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
        return "admin/profile/edit.html.twig";
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
        return array (  229 => 68,  225 => 66,  218 => 61,  213 => 59,  209 => 58,  206 => 57,  199 => 52,  194 => 50,  190 => 49,  187 => 48,  180 => 43,  175 => 41,  171 => 40,  168 => 39,  161 => 34,  156 => 32,  152 => 31,  149 => 30,  142 => 25,  137 => 23,  133 => 22,  130 => 21,  125 => 18,  121 => 16,  115 => 14,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier le Profil{% endblock %}

{% block body %}
    <div class=\"container\" style=\"margin-right: 50px;\">
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
{% endblock %}
", "admin/profile/edit.html.twig", "C:\\Users\\takou\\OneDrive\\Desktop\\Reaptn\\templates\\admin\\profile\\edit.html.twig");
    }
}
