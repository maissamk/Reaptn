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

/* parcelle_proprietes/_form.html.twig */
class __TwigTemplate_3098c22534aef85ebc7233cd448d2e38 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

<div class=\"mb-3\">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre"]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "errors", [], "any", false, false, false, 11)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "prix", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix"]);
        yield "
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prix", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prix", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) ? (" is-invalid") : (""))), "pattern" => "[0-9]+(.[0-9]{1,2})?", "title" => "Entrer un prix valide"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield "
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "emplacement", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Emplacement"]);
        yield "
    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "emplacement", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "emplacement", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "emplacement", [], "any", false, false, false, 30), 'errors');
        yield "</div>
</div>

<!-- Carte interactive -->
<div id=\"map\" style=\"height: 400px; margin-top: 20px;\"></div>

<div class=\"mb-3\">
    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "taille", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taille (m²)"]);
        yield "
    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "taille", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "taille", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38)) > 0)) ? (" is-invalid") : (""))), "min" => "1", "step" => "0.01"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "taille", [], "any", false, false, false, 39), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de création"]);
        yield "
    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "errors", [], "any", false, false, false, 44)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 45), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de mise à jour"]);
        yield "
    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 51), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "estDisponible", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Disponible"]);
        yield "
    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "estDisponible", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
</div>

<div class=\"mb-3\">
    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du propriétaire"]);
        yield "
    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 62), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contact du propriétaire"]);
        yield "
    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67)) > 0)) ? (" is-invalid") : (""))), "pattern" => "^+?[0-9]*\$", "title" => "Numéro de téléphone valide requis"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 68), 'errors');
        yield "</div>
</div>
<div class=\"mb-3\">
    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "email", [], "any", false, false, false, 73), 'errors');
        yield "</div>
</div>



<div class=\"mb-3\">
    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "image", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image"]);
        yield "
    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "image", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "image", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "errors", [], "any", false, false, false, 80)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "image", [], "any", false, false, false, 81), 'errors');
        yield "</div>
</div>


<div class=\"mb-3\">
    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "type_terrain", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type de terrain"]);
        yield "
    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "type_terrain", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "type_terrain", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "type_terrain", [], "any", false, false, false, 88), 'errors');
        yield "</div>
</div>

<button type=\"submit\" class=\"btn btn-primary\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 91, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        yield "

<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />

<script>
document.addEventListener('DOMContentLoaded', () => {
    const map = L.map('map').setView([36.8065, 10.1815], 7); // Coordonnées par défaut : Tunis
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    let marker = null;

    // Gestion du clic sur la carte
    map.on('click', async (e) => {
        const { lat, lng } = e.latlng;
        if (marker) map.removeLayer(marker);
        marker = L.marker([lat, lng]).addTo(map);

        // Appeler Nominatim pour le géocodage inversé
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=\${lat}&lon=\${lng}`);
            const data = await response.json();
            const address = data.display_name || `\${lat.toFixed(4)}, \${lng.toFixed(4)}`;

            // Stocker l'adresse dans le champ emplacement
            const emplacementInput = document.querySelector('#parcelle_proprietes_emplacement');
            emplacementInput.value = address;
        } catch (error) {
            console.error('Erreur lors du géocodage inversé:', error);
        }
    });
});






</script>
<script src=\"https://cdn.ckeditor.com/4.21.0/full-all/ckeditor.js\"></script>


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
        return "parcelle_proprietes/_form.html.twig";
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
        return array (  269 => 93,  264 => 91,  258 => 88,  254 => 87,  250 => 86,  242 => 81,  238 => 80,  234 => 79,  225 => 73,  221 => 72,  217 => 71,  211 => 68,  207 => 67,  203 => 66,  196 => 62,  192 => 61,  188 => 60,  181 => 56,  177 => 55,  170 => 51,  166 => 50,  162 => 49,  155 => 45,  151 => 44,  147 => 43,  140 => 39,  136 => 38,  132 => 37,  122 => 30,  118 => 29,  114 => 28,  107 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  77 => 12,  73 => 11,  69 => 10,  62 => 6,  58 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

<div class=\"mb-3\">
    {{ form_label(form.titre, 'Titre', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.titre, {'attr': {'class': 'form-control' ~ (form.titre.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.titre) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.description, {'attr': {'class': 'form-control' ~ (form.description.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.description) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.prix, {'attr': {'class': 'form-control' ~ (form.prix.vars.errors|length > 0 ? ' is-invalid' : ''), 'pattern': '[0-9]+(\\.[0-9]{1,2})?', 'title': 'Entrer un prix valide'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.prix) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.status, 'Statut', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.status, {'attr': {'class': 'form-control' ~ (form.status.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.status) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.emplacement, 'Emplacement', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.emplacement, {'attr': {'class': 'form-control' ~ (form.emplacement.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.emplacement) }}</div>
</div>

<!-- Carte interactive -->
<div id=\"map\" style=\"height: 400px; margin-top: 20px;\"></div>

<div class=\"mb-3\">
    {{ form_label(form.taille, 'Taille (m²)', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.taille, {'attr': {'class': 'form-control' ~ (form.taille.vars.errors|length > 0 ? ' is-invalid' : ''), 'min': '1', 'step': '0.01'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.taille) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.date_creation_annonce, 'Date de création', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.date_creation_annonce, {'attr': {'class': 'form-control' ~ (form.date_creation_annonce.vars.errors|length > 0 ? ' is-invalid' : ''), 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.date_creation_annonce) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.date_misajour_annonce, 'Date de mise à jour', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.date_misajour_annonce, {'attr': {'class': 'form-control' ~ (form.date_misajour_annonce.vars.errors|length > 0 ? ' is-invalid' : ''), 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.date_misajour_annonce) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.estDisponible, 'Disponible', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.estDisponible, {'attr': {'class': 'form-check-input'}}) }}
</div>

<div class=\"mb-3\">
    {{ form_label(form.nom_proprietaire, 'Nom du propriétaire', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.nom_proprietaire, {'attr': {'class': 'form-control' ~ (form.nom_proprietaire.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.nom_proprietaire) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.contact_proprietaire, 'Contact du propriétaire', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.contact_proprietaire, {'attr': {'class': 'form-control' ~ (form.contact_proprietaire.vars.errors|length > 0 ? ' is-invalid' : ''), 'pattern': '^\\+?[0-9]*\$', 'title': 'Numéro de téléphone valide requis'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.contact_proprietaire) }}</div>
</div>
<div class=\"mb-3\">
    {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.email, {'attr': {'class': 'form-control' ~ (form.email.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.email) }}</div>
</div>



<div class=\"mb-3\">
    {{ form_label(form.image, 'Image', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.image, {'attr': {'class': 'form-control' ~ (form.image.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.image) }}</div>
</div>


<div class=\"mb-3\">
    {{ form_label(form.type_terrain, 'Type de terrain', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.type_terrain, {'attr': {'class': 'form-control' ~ (form.type_terrain.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.type_terrain) }}</div>
</div>

<button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

{{ form_end(form) }}

<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />

<script>
document.addEventListener('DOMContentLoaded', () => {
    const map = L.map('map').setView([36.8065, 10.1815], 7); // Coordonnées par défaut : Tunis
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    let marker = null;

    // Gestion du clic sur la carte
    map.on('click', async (e) => {
        const { lat, lng } = e.latlng;
        if (marker) map.removeLayer(marker);
        marker = L.marker([lat, lng]).addTo(map);

        // Appeler Nominatim pour le géocodage inversé
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=\${lat}&lon=\${lng}`);
            const data = await response.json();
            const address = data.display_name || `\${lat.toFixed(4)}, \${lng.toFixed(4)}`;

            // Stocker l'adresse dans le champ emplacement
            const emplacementInput = document.querySelector('#parcelle_proprietes_emplacement');
            emplacementInput.value = address;
        } catch (error) {
            console.error('Erreur lors du géocodage inversé:', error);
        }
    });
});






</script>
<script src=\"https://cdn.ckeditor.com/4.21.0/full-all/ckeditor.js\"></script>


", "parcelle_proprietes/_form.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\parcelle_proprietes\\_form.html.twig");
    }
}
