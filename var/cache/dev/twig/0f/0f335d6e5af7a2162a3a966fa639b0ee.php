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

/* profile/index.html.twig */
class __TwigTemplate_f96fd86ad5dec0f1566f23f7c3133a69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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

        yield "Mon Profil";
        
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
        <!-- En-tête du Profil -->
        <div class=\"row justify-content-center mb-4\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-4 text-primary mb-3\">Mon Profil</h1>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <!-- Carte d'Informations du Profil -->
        <div class=\"card p-5 mt-4 shadow-lg rounded-lg\">
            <div class=\"row\">
                <!-- Colonne de l'Avatar -->
                <div class=\"col-md-4 text-center\">
                    <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "avatar", [], "any", false, false, false, 20))), "html", null, true);
        yield "\" class=\"rounded-circle mb-4\" width=\"150\" height=\"150\" alt=\"Avatar Utilisateur\">
                    <h3 class=\"text-primary\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3>
                </div>

                <!-- Colonne des Informations Personnelles -->
                <div class=\"col-md-8\">
                    <h4 class=\"text-secondary mb-4\">Informations Personnelles</h4>
                    <div class=\"mb-3\">
                        <p><strong>Prénom :</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
                        <p><strong>Nom :</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
                        <p><strong>Email :</strong> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                        <p><strong>Téléphone :</strong> ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Boutons -->
        <div class=\"mt-5 text-center\">
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_profile");
        yield "\" class=\"btn btn-warning btn-lg px-5 py-2 mx-2 text-white\"><i class=\"fas fa-edit\"></i>Modifier le Profil</a>
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
        return "profile/index.html.twig";
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
        return array (  156 => 40,  144 => 31,  140 => 30,  136 => 29,  132 => 28,  120 => 21,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <!-- En-tête du Profil -->
        <div class=\"row justify-content-center mb-4\">
            <div class=\"col-12 text-center\">
                <h1 class=\"display-4 text-primary mb-3\">Mon Profil</h1>
                <hr class=\"w-25 mx-auto\">
            </div>
        </div>

        <!-- Carte d'Informations du Profil -->
        <div class=\"card p-5 mt-4 shadow-lg rounded-lg\">
            <div class=\"row\">
                <!-- Colonne de l'Avatar -->
                <div class=\"col-md-4 text-center\">
                    <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" class=\"rounded-circle mb-4\" width=\"150\" height=\"150\" alt=\"Avatar Utilisateur\">
                    <h3 class=\"text-primary\">{{ user.prenom }} {{ user.nom }}</h3>
                </div>

                <!-- Colonne des Informations Personnelles -->
                <div class=\"col-md-8\">
                    <h4 class=\"text-secondary mb-4\">Informations Personnelles</h4>
                    <div class=\"mb-3\">
                        <p><strong>Prénom :</strong> {{ user.prenom }}</p>
                        <p><strong>Nom :</strong> {{ user.nom }}</p>
                        <p><strong>Email :</strong> {{ user.email }}</p>
                        <p><strong>Téléphone :</strong> {{ user.telephone }}</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Boutons -->
        <div class=\"mt-5 text-center\">
            <a href=\"{{ path('app_edit_profile') }}\" class=\"btn btn-warning btn-lg px-5 py-2 mx-2 text-white\"><i class=\"fas fa-edit\"></i>Modifier le Profil</a>
        </div>
    </div>
{% endblock %}
", "profile/index.html.twig", "C:\\Games\\Reaptn\\templates\\profile\\index.html.twig");
    }
}
