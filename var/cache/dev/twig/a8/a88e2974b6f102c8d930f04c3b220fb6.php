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

/* admin/user/edit_user.html.twig */
class __TwigTemplate_a869fc6453e8eb6db43b30a88e63cf09 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit_user.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/user/edit_user.html.twig", 1);
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

        yield "Modifier l'Utilisateur";
        
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
        yield "    <div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-primary text-white text-center\">
                        <h2>Modifier l'Utilisateur</h2>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
                            <!-- Champs du Formulaire -->
                            <div class=\"form-group mb-3\">
                                <label for=\"prenom\" class=\"form-label\">Prénom</label>
                                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <div class=\"form-group mb-3\">
                                <label for=\"nom\" class=\"form-label\">Nom</label>
                                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <div class=\"form-group mb-3\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <div class=\"form-group mb-3\">
                                <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <!-- Avatar Upload Section -->
                           <div class=\"form-group mb-4\">
                    <label for=\"avatar\" class=\"form-label\">Télécharger un Nouvel Avatar</label>
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "avatar", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control-file", "style" => "width: 350px; margin-top: 10px;"]]);
        yield "
                </div>
  <div class=\"form-group mb-4\">
                        <label for=\"status\" class=\"form-label\">Changer le status</label>
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
                    </div>
                            <!-- Bouton de Sauvegarde -->
                            <div class=\"text-center mt-4\">
                                <button class=\"btn btn-success btn-lg w-75\">Enregistrer les Modifications</button>
                            </div>
                        ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>

                <div class=\"text-center mt-4\">
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Retour à la liste des utilisateurs
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 64
        yield "    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control, .form-control-file {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-control-file {
            padding: 5px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        .text-right {
            text-align: right;
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }

        .card-header {
            padding: 15px;
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        .container h1 {
            margin-bottom: 20px;
        }

        .text-center {
            margin-top: 20px;
        }
    </style>
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
        return "admin/user/edit_user.html.twig";
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
        return array (  207 => 64,  194 => 63,  175 => 54,  167 => 49,  158 => 43,  151 => 39,  142 => 33,  134 => 28,  126 => 23,  118 => 18,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier l'Utilisateur{% endblock %}

{% block body %}
    <div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-primary text-white text-center\">
                        <h2>Modifier l'Utilisateur</h2>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(form) }}
                            <!-- Champs du Formulaire -->
                            <div class=\"form-group mb-3\">
                                <label for=\"prenom\" class=\"form-label\">Prénom</label>
                                {{ form_widget(form.prenom, { 'attr': {'class': 'form-control'} }) }}
                            </div>

                            <div class=\"form-group mb-3\">
                                <label for=\"nom\" class=\"form-label\">Nom</label>
                                {{ form_widget(form.nom, { 'attr': {'class': 'form-control'} }) }}
                            </div>

                            <div class=\"form-group mb-3\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
                            </div>

                            <div class=\"form-group mb-3\">
                                <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
                                {{ form_widget(form.telephone, { 'attr': {'class': 'form-control'} }) }}
                            </div>

                            <!-- Avatar Upload Section -->
                           <div class=\"form-group mb-4\">
                    <label for=\"avatar\" class=\"form-label\">Télécharger un Nouvel Avatar</label>
                    {{ form_widget(form.avatar, { 'attr': {'class': 'form-control-file', 'style': 'width: 350px; margin-top: 10px;'} }) }}
                </div>
  <div class=\"form-group mb-4\">
                        <label for=\"status\" class=\"form-label\">Changer le status</label>
                        {{ form_widget(form.status, { 'attr': {'class': 'form-control-file'} }) }}
                    </div>
                            <!-- Bouton de Sauvegarde -->
                            <div class=\"text-center mt-4\">
                                <button class=\"btn btn-success btn-lg w-75\">Enregistrer les Modifications</button>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>

                <div class=\"text-center mt-4\">
                    <a href=\"{{ path('admin_users') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left\"></i> Retour à la liste des utilisateurs
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control, .form-control-file {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-control-file {
            padding: 5px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        }

        .text-right {
            text-align: right;
        }

        .card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }

        .card-header {
            padding: 15px;
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        .container h1 {
            margin-bottom: 20px;
        }

        .text-center {
            margin-top: 20px;
        }
    </style>
{% endblock %}
", "admin/user/edit_user.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\user\\edit_user.html.twig");
    }
}
