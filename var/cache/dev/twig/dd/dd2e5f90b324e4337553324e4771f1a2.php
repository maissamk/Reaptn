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

/* admin/parcelle_proprietes/_form.html.twig */
class __TwigTemplate_336ffff80886d169fb53632e004bd7bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
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
        <div class=\"invalid-feedback\">";
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
        <div class=\"invalid-feedback\">";
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
        <div class=\"invalid-feedback\">";
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
        <div class=\"invalid-feedback\">";
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
        <div class=\"invalid-feedback\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "emplacement", [], "any", false, false, false, 30), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "taille", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taille (m²)"]);
        yield "
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "taille", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "taille", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35)) > 0)) ? (" is-invalid") : (""))), "min" => "1", "step" => "0.01"]]);
        yield "
        <div class=\"invalid-feedback\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "taille", [], "any", false, false, false, 36), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de création"]);
        yield "
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
        <div class=\"invalid-feedback\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 42), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de mise à jour"]);
        yield "
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
        <div class=\"invalid-feedback\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 48), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "estDisponible", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Disponible"]);
        yield "
    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "estDisponible", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
</div>

    <div class=\"mb-3\">
        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du propriétaire"]);
        yield "
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "errors", [], "any", false, false, false, 58)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
        <div class=\"invalid-feedback\">";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 59), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contact du propriétaire"]);
        yield "
        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64)) > 0)) ? (" is-invalid") : (""))), "pattern" => "^+?[0-9]*\$", "title" => "Numéro de téléphone valide requis"]]);
        yield "
        <div class=\"invalid-feedback\">";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 65), 'errors');
        yield "</div>
    </div>


  <div class=\"mb-3\">
    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "image", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image"]);
        yield "
    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "image", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "image", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback\">
        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73), 'errors');
        yield "
    </div>
</div>


    <button class=\"btn btn-primary\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 78, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'form_end');
        yield "
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
        return "admin/parcelle_proprietes/_form.html.twig";
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
        return array (  238 => 80,  233 => 78,  225 => 73,  220 => 71,  216 => 70,  208 => 65,  204 => 64,  200 => 63,  193 => 59,  189 => 58,  185 => 57,  178 => 53,  174 => 52,  167 => 48,  163 => 47,  159 => 46,  152 => 42,  148 => 41,  144 => 40,  137 => 36,  133 => 35,  129 => 34,  122 => 30,  118 => 29,  114 => 28,  107 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  77 => 12,  73 => 11,  69 => 10,  62 => 6,  58 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

    <div class=\"mb-3\">
        {{ form_label(form.titre, 'Titre', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.titre, {'attr': {'class': 'form-control' ~ (form.titre.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.titre) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.description, {'attr': {'class': 'form-control' ~ (form.description.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.description) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.prix, {'attr': {'class': 'form-control' ~ (form.prix.vars.errors|length > 0 ? ' is-invalid' : ''), 'pattern': '[0-9]+(\\.[0-9]{1,2})?', 'title': 'Entrer un prix valide'}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.prix) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.status, 'Statut', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.status, {'attr': {'class': 'form-control' ~ (form.status.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.status) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.emplacement, 'Emplacement', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.emplacement, {'attr': {'class': 'form-control' ~ (form.emplacement.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.emplacement) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.taille, 'Taille (m²)', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.taille, {'attr': {'class': 'form-control' ~ (form.taille.vars.errors|length > 0 ? ' is-invalid' : ''), 'min': '1', 'step': '0.01'}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.taille) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.date_creation_annonce, 'Date de création', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.date_creation_annonce, {'attr': {'class': 'form-control' ~ (form.date_creation_annonce.vars.errors|length > 0 ? ' is-invalid' : ''), 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.date_creation_annonce) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.date_misajour_annonce, 'Date de mise à jour', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.date_misajour_annonce, {'attr': {'class': 'form-control' ~ (form.date_misajour_annonce.vars.errors|length > 0 ? ' is-invalid' : ''), 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.date_misajour_annonce) }}</div>
    </div>

    <div class=\"mb-3\">
    {{ form_label(form.estDisponible, 'Disponible', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.estDisponible, {'attr': {'class': 'form-check-input'}}) }}
</div>

    <div class=\"mb-3\">
        {{ form_label(form.nom_proprietaire, 'Nom du propriétaire', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.nom_proprietaire, {'attr': {'class': 'form-control' ~ (form.nom_proprietaire.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.nom_proprietaire) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.contact_proprietaire, 'Contact du propriétaire', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.contact_proprietaire, {'attr': {'class': 'form-control' ~ (form.contact_proprietaire.vars.errors|length > 0 ? ' is-invalid' : ''), 'pattern': '^\\+?[0-9]*\$', 'title': 'Numéro de téléphone valide requis'}}) }}
        <div class=\"invalid-feedback\">{{ form_errors(form.contact_proprietaire) }}</div>
    </div>


  <div class=\"mb-3\">
    {{ form_label(form.image, 'Image', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.image, {'attr': {'class': 'form-control' ~ (form.image.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback\">
        {{ form_errors(form.image) }}
    </div>
</div>


    <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

{{ form_end(form) }}
", "admin/parcelle_proprietes/_form.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\PI2025\\Reaptn\\templates\\admin\\parcelle_proprietes\\_form.html.twig");
    }
}
