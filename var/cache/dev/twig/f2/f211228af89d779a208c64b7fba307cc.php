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

/* admin/parcelle_proprietes/new_back.html.twig */
class __TwigTemplate_52a72b1b599da93cc149a7f3a013af79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/new_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/new_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/parcelle_proprietes/new_back.html.twig", 1);
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

        yield "Modifier une Parcelle ou Propriété";
        
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
        yield "<div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white text-center\">
                    <h2>Modifier une Parcelle ou Propriété</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                    <div class=\"mb-3\">
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre"]);
        yield "
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prix", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix"]);
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prix", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "status", [], "any", false, false, false, 37), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "emplacement", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Emplacement"]);
        yield "
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "emplacement", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "emplacement", [], "any", false, false, false, 43), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "taille", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taille"]);
        yield "
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "taille", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "taille", [], "any", false, false, false, 49), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom Propriétaire"]);
        yield "
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 55), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contact Propriétaire"]);
        yield "
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 61), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de création de l'annonce"]);
        yield "
                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 68), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de mise à jour de l'annonce"]);
        yield "
                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 76), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "estDisponible", [], "any", false, false, false, 81), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Disponible"]);
        yield "
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "estDisponible", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "estDisponible", [], "any", false, false, false, 83), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3 text-center\">
                        <!-- Affichage de l'image actuelle -->
                        ";
        // line 88
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "vars", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88), "image", [], "any", false, false, false, 88))) {
            // line 89
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/parcelles/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "vars", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), "image", [], "any", false, false, false, 89))), "html", null, true);
            yield "\" 
                                 alt=\"Image actuelle\" 
                                 class=\"rounded img-thumbnail property-image-preview\">
                        ";
        } else {
            // line 93
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/parcelles/default.png"), "html", null, true);
            yield "\" 
                                 alt=\"Image par défaut\" 
                                 class=\"rounded img-thumbnail property-image-preview\">
                        ";
        }
        // line 97
        yield "                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "image", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image"]);
        yield "
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "image", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "image", [], "any", false, false, false, 102), 'errors');
        yield "</div>
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> Mettre à jour
                        </button>
                        <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour
                        </a>
                    </div>

                    ";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
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

        // line 123
        yield "    <style>
        .container {
            max-width: 800px;
            margin: auto;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border: none;
        }

        .card-header {
            font-weight: bold;
        }

        .form-label {
            font-weight: 600;
            color: #555;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn {
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .property-image-preview {
            width: 250px;
            height: 180px;
            object-fit: cover;
            border: 3px solid #ddd;
            padding: 5px;
            background: #fff;
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
        return "admin/parcelle_proprietes/new_back.html.twig";
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
        return array (  367 => 123,  354 => 122,  336 => 114,  328 => 109,  318 => 102,  314 => 101,  310 => 100,  305 => 97,  297 => 93,  289 => 89,  287 => 88,  279 => 83,  275 => 82,  271 => 81,  263 => 76,  258 => 74,  254 => 73,  246 => 68,  241 => 66,  237 => 65,  230 => 61,  226 => 60,  222 => 59,  215 => 55,  211 => 54,  207 => 53,  200 => 49,  196 => 48,  192 => 47,  185 => 43,  181 => 42,  177 => 41,  170 => 37,  166 => 36,  162 => 35,  155 => 31,  151 => 30,  147 => 29,  140 => 25,  136 => 24,  132 => 23,  125 => 19,  121 => 18,  117 => 17,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier une Parcelle ou Propriété{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white text-center\">
                    <h2>Modifier une Parcelle ou Propriété</h2>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                    <div class=\"mb-3\">
                        {{ form_label(form.titre, 'Titre', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.titre) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.description) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.prix) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.status, 'Statut', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.status, {'attr': {'class': 'form-select'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.status) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.emplacement, 'Emplacement', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.emplacement, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.emplacement) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.taille, 'Taille', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.taille, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.taille) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.nom_proprietaire, 'Nom Propriétaire', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.nom_proprietaire, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.nom_proprietaire) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.contact_proprietaire, 'Contact Propriétaire', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.contact_proprietaire, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.contact_proprietaire) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.date_creation_annonce, 'Date de création de l\\'annonce', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.date_creation_annonce, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">
                            {{ form_errors(form.date_creation_annonce) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.date_misajour_annonce, 'Date de mise à jour de l\\'annonce', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.date_misajour_annonce, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">
                            {{ form_errors(form.date_misajour_annonce) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.estDisponible, 'Disponible', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.estDisponible, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.estDisponible) }}</div>
                    </div>

                    <div class=\"mb-3 text-center\">
                        <!-- Affichage de l'image actuelle -->
                        {% if form.vars.value.image is not empty %}
                            <img src=\"{{ asset('uploads/parcelles/' ~ form.vars.value.image) }}\" 
                                 alt=\"Image actuelle\" 
                                 class=\"rounded img-thumbnail property-image-preview\">
                        {% else %}
                            <img src=\"{{ asset('uploads/parcelles/default.png') }}\" 
                                 alt=\"Image par défaut\" 
                                 class=\"rounded img-thumbnail property-image-preview\">
                        {% endif %}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(form.image, 'Image', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.image) }}</div>
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> Mettre à jour
                        </button>
                        <a href=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour
                        </a>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
    <style>
        .container {
            max-width: 800px;
            margin: auto;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border: none;
        }

        .card-header {
            font-weight: bold;
        }

        .form-label {
            font-weight: 600;
            color: #555;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn {
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .property-image-preview {
            width: 250px;
            height: 180px;
            object-fit: cover;
            border: 3px solid #ddd;
            padding: 5px;
            background: #fff;
        }
    </style>
{% endblock %}", "admin/parcelle_proprietes/new_back.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\admin\\parcelle_proprietes\\new_back.html.twig");
    }
}
