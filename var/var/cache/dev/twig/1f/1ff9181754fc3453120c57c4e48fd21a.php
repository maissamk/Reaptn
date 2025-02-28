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

/* admin/contrat/edit_back.html.twig */
class __TwigTemplate_1e702273edc983146a64c904b8f49513 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contrat/edit_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contrat/edit_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/contrat/edit_back.html.twig", 1);
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

        yield "Modifier Contrat";
        
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
        yield "
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center\">Modifier Contrat</h1>

    <div class=\"card shadow-lg p-4 mt-3\">
        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

        <div class=\"mb-3\">
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Début"]);
        yield "
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
            <div class=\"invalid-feedback d-block text-danger\">";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 16), 'errors');
        yield "</div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Fin"]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
            <div class=\"invalid-feedback d-block text-danger\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 22), 'errors');
        yield "</div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom Acheteur"]);
        yield "
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"invalid-feedback d-block text-danger\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 28), 'errors');
        yield "</div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom Vendeur"]);
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"invalid-feedback d-block text-danger\">";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 34), 'errors');
        yield "</div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "information_Contrat", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Information Contrat"]);
        yield "
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "information_Contrat", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"invalid-feedback d-block text-danger\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "information_Contrat", [], "any", false, false, false, 40), 'errors');
        yield "</div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Création"]);
        yield "
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
            <div class=\"invalid-feedback d-block text-danger\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 46), 'errors');
        yield "</div>
        </div>

        <div class=\"mb-3\">
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "parcelle", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Parcelle"]);
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "parcelle", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            <div class=\"invalid-feedback d-block text-danger\">";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "parcelle", [], "any", false, false, false, 52), 'errors');
        yield "</div>
        </div>

        <div class=\"text-center mt-3\">
            <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_index");
        yield "\" class=\"btn btn-secondary\">Retour à la Liste</a>
        </div>

        ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        yield "
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
        return "admin/contrat/edit_back.html.twig";
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
        return array (  225 => 60,  219 => 57,  211 => 52,  207 => 51,  203 => 50,  196 => 46,  192 => 45,  188 => 44,  181 => 40,  177 => 39,  173 => 38,  166 => 34,  162 => 33,  158 => 32,  151 => 28,  147 => 27,  143 => 26,  136 => 22,  132 => 21,  128 => 20,  121 => 16,  117 => 15,  113 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier Contrat{% endblock %}

{% block body %}

<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center\">Modifier Contrat</h1>

    <div class=\"card shadow-lg p-4 mt-3\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

        <div class=\"mb-3\">
            {{ form_label(form.dateDebut_contrat, 'Date de Début', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.dateDebut_contrat, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
            <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.dateDebut_contrat) }}</div>
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.datefin_contrat, 'Date de Fin', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.datefin_contrat, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
            <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.datefin_contrat) }}</div>
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.nom_Acheteur, 'Nom Acheteur', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.nom_Acheteur, {'attr': {'class': 'form-control'}}) }}
            <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.nom_Acheteur) }}</div>
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.nom_Vendeur, 'Nom Vendeur', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.nom_Vendeur, {'attr': {'class': 'form-control'}}) }}
            <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.nom_Vendeur) }}</div>
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.information_Contrat, 'Information Contrat', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.information_Contrat, {'attr': {'class': 'form-control'}}) }}
            <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.information_Contrat) }}</div>
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.datecreation_contrat, 'Date de Création', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.datecreation_contrat, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
            <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.datecreation_contrat) }}</div>
        </div>

        <div class=\"mb-3\">
            {{ form_label(form.parcelle, 'Parcelle', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.parcelle, {'attr': {'class': 'form-select'}}) }}
            <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.parcelle) }}</div>
        </div>

        <div class=\"text-center mt-3\">
            <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
            <a href=\"{{ path('admin_contrat_index') }}\" class=\"btn btn-secondary\">Retour à la Liste</a>
        </div>

        {{ form_end(form) }}
    </div>
</div>

{% endblock %}
", "admin/contrat/edit_back.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\admin\\contrat\\edit_back.html.twig");
    }
}
