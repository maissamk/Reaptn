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
class __TwigTemplate_593e88c8d4a595ead162d7d72af622b2 extends Template
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
        yield "    <div class=\"container mt-5\">
        <!-- En-tête de la modification du profil -->
        <div class=\"row justify-content-center mb-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-4 text-warning\">Modifier le Profil</h1>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <!-- Formulaire de Modification du Profil -->
        <div class=\"card p-4 mt-4 shadow-lg rounded\">
            <!-- Avatar -->
            <div class=\"text-center\">
                <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "avatar", [], "any", false, false, false, 19))), "html", null, true);
        yield "\" class=\"rounded-circle mb-4\" width=\"150\" height=\"150\" alt=\"Avatar Utilisateur\">
            </div>

            ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        yield "
                <!-- Champs du Formulaire -->
                <div class=\"form-group mb-3\">
                    <label for=\"prenom\" class=\"form-label\">Prénom</label>
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"nom\" class=\"form-label\">Nom</label>
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"email\" class=\"form-label\">Email</label>
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "telephone", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                </div>

                <!-- Champ pour le téléchargement de l'avatar -->
                <div class=\"form-group mb-3\">
                    <label for=\"avatar\" class=\"form-label\">Télécharger un Nouvel Avatar</label>
                    <input type=\"file\" id=\"avatar\" name=\"user[avatar]\" class=\"form-control\" style=\"width: 350px;\">
                </div>

                <!-- Bouton de Sauvegarde -->
                <div class=\"text-center\">
                    <button class=\"btn btn-success btn-lg w-75 mt-4\">Enregistrer les Modifications</button>
                </div>
            ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
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
        return array (  168 => 54,  152 => 41,  144 => 36,  136 => 31,  128 => 26,  121 => 22,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Profil{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <!-- En-tête de la modification du profil -->
        <div class=\"row justify-content-center mb-5\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-4 text-warning\">Modifier le Profil</h1>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <!-- Formulaire de Modification du Profil -->
        <div class=\"card p-4 mt-4 shadow-lg rounded\">
            <!-- Avatar -->
            <div class=\"text-center\">
                <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" class=\"rounded-circle mb-4\" width=\"150\" height=\"150\" alt=\"Avatar Utilisateur\">
            </div>

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

                <!-- Champ pour le téléchargement de l'avatar -->
                <div class=\"form-group mb-3\">
                    <label for=\"avatar\" class=\"form-label\">Télécharger un Nouvel Avatar</label>
                    <input type=\"file\" id=\"avatar\" name=\"user[avatar]\" class=\"form-control\" style=\"width: 350px;\">
                </div>

                <!-- Bouton de Sauvegarde -->
                <div class=\"text-center\">
                    <button class=\"btn btn-success btn-lg w-75 mt-4\">Enregistrer les Modifications</button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "profile/edit.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\PI2025\\Reaptn\\templates\\profile\\edit.html.twig");
    }
}
