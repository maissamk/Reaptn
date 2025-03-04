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

/* parcelle_proprietes/edit.html.twig */
class __TwigTemplate_b776352bb52fbf29f41b7e3748aec581 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parcelle_proprietes/edit.html.twig", 1);
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
        yield "<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center text-primary fw-bold mb-4\">Modifier une Parcelle ou Propriété</h1>

    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card p-4 shadow-lg border-0\">
                
                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

                <!-- Affichage de l'image actuelle -->
                <div class=\"text-center mb-4\">
                    ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17)) {
            // line 18
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18))), "html", null, true);
            yield "\" 
                             class=\"rounded shadow-sm border\" width=\"200\" height=\"150\" 
                             alt=\"Image de la parcelle\">
                    ";
        } else {
            // line 22
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/default.png"), "html", null, true);
            yield "\" 
                             class=\"rounded shadow-sm border\" width=\"200\" height=\"150\" 
                             alt=\"Image par défaut\">
                    ";
        }
        // line 26
        yield "                </div>

                <!-- Champs du formulaire avec erreurs en rouge -->
                <div class=\"mb-3\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "titre", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Titre"]);
        yield "
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                    <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "titre", [], "any", false, false, false, 32), 'errors');
        yield " </div>
                </div>

                <div class=\"mb-3\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Description"]);
        yield "
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control shadow-sm", "rows" => "3"]]);
        yield "
                    <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'errors');
        yield " </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "prix", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Prix"]);
        yield "
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "prix", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "prix", [], "any", false, false, false, 45), 'errors');
        yield " </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "status", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Status"]);
        yield "
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-select shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), 'errors');
        yield " </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "emplacement", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Emplacement"]);
        yield "
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "emplacement", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "emplacement", [], "any", false, false, false, 58), 'errors');
        yield " </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "taille", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Taille"]);
        yield "
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "taille", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "taille", [], "any", false, false, false, 63), 'errors');
        yield " </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Date de création"]);
        yield "
                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 71), 'errors');
        yield " </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Date de mise à jour"]);
        yield "
                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 76), 'errors');
        yield " </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Nom du propriétaire"]);
        yield "
                        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 84), 'errors');
        yield " </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Contact du propriétaire"]);
        yield "
                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 89), 'errors');
        yield " </div>
                    </div>
                </div>

                <!-- Upload image -->
                <!-- Upload image -->
<div class=\"mb-3\">
    ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "image", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "for" => "image"], "label" => "Image de la Parcelle"]);
        // line 101
        yield "
    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "image", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control shadow-sm", "id" => "image"]]);
        // line 107
        yield "
    <div class=\"invalid-feedback d-block text-danger\">
        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "image", [], "any", false, false, false, 109), 'errors');
        yield "
    </div>
</div>


                 <div class=\"mb-3\">
                        ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "type_terrain", [], "any", false, false, false, 115), 'label', ["label_attr" => ["class" => "form-label fw-semibold"], "label" => "Type De Terrain"]);
        yield "
                        ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "type_terrain", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control shadow-sm"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\"> ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "type_terrain", [], "any", false, false, false, 117), 'errors');
        yield " </div>
                    </div>
                  <div class=\"form-check mb-3\">
    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "estDisponible", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-check-input shadow-sm", "id" => "estDisponibleCheckbox"]]);
        // line 125
        yield "
    ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "estDisponible", [], "any", false, false, false, 126), 'label', ["label_attr" => ["class" => "form-check-label fw-semibold", "for" => "estDisponibleCheckbox"], "label" => "Disponible"]);
        // line 131
        yield "
    <div class=\"invalid-feedback d-block text-danger\">
        ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "estDisponible", [], "any", false, false, false, 133), 'errors');
        yield "
    </div>
</div>


                <!-- Bouton de mise à jour -->
                <div class=\"text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg shadow-sm\">
                        <i class=\"fas fa-save me-2\"></i>Mettre à jour
                    </button>
                </div>
                
                ";
        // line 145
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
        yield "  
            </div>
        </div>
    </div>
<!--back-->
<div class=\"d-flex justify-content-center mt-4\">
            <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
        yield "\" class=\"btn btn-primary me-3\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
           
        </div>
   
    <!-- Formulaire de suppression -->
    <div class=\"text-center mt-3\">
        ";
        // line 159
        yield Twig\Extension\CoreExtension::include($this->env, $context, "parcelle_proprietes/_delete_form.html.twig");
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
        return "parcelle_proprietes/edit.html.twig";
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
        return array (  376 => 159,  365 => 151,  356 => 145,  341 => 133,  337 => 131,  335 => 126,  332 => 125,  330 => 120,  324 => 117,  320 => 116,  316 => 115,  307 => 109,  303 => 107,  301 => 102,  298 => 101,  296 => 96,  286 => 89,  282 => 88,  278 => 87,  272 => 84,  268 => 83,  264 => 82,  255 => 76,  251 => 75,  247 => 74,  241 => 71,  237 => 70,  233 => 69,  224 => 63,  220 => 62,  216 => 61,  210 => 58,  206 => 57,  202 => 56,  193 => 50,  189 => 49,  185 => 48,  179 => 45,  175 => 44,  171 => 43,  163 => 38,  159 => 37,  155 => 36,  148 => 32,  144 => 31,  140 => 30,  134 => 26,  126 => 22,  118 => 18,  116 => 17,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier une Parcelle ou Propriété{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center text-primary fw-bold mb-4\">Modifier une Parcelle ou Propriété</h1>

    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card p-4 shadow-lg border-0\">
                
                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

                <!-- Affichage de l'image actuelle -->
                <div class=\"text-center mb-4\">
                    {% if parcelle_propriete.image %}
                        <img src=\"{{ asset('uploads/images/' ~ parcelle_propriete.image) }}\" 
                             class=\"rounded shadow-sm border\" width=\"200\" height=\"150\" 
                             alt=\"Image de la parcelle\">
                    {% else %}
                        <img src=\"{{ asset('uploads/images/default.png') }}\" 
                             class=\"rounded shadow-sm border\" width=\"200\" height=\"150\" 
                             alt=\"Image par défaut\">
                    {% endif %}
                </div>

                <!-- Champs du formulaire avec erreurs en rouge -->
                <div class=\"mb-3\">
                    {{ form_label(form.titre, 'Titre', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                    {{ form_widget(form.titre, {'attr': {'class': 'form-control shadow-sm'}}) }}
                    <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.titre) }} </div>
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control shadow-sm', 'rows': '3'}}) }}
                    <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.description) }} </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.prix, {'attr': {'class': 'form-control shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.prix) }} </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.status, 'Status', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.status, {'attr': {'class': 'form-select shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.status) }} </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.emplacement, 'Emplacement', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.emplacement, {'attr': {'class': 'form-control shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.emplacement) }} </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.taille, 'Taille', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.taille, {'attr': {'class': 'form-control shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.taille) }} </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.date_creation_annonce, 'Date de création', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.date_creation_annonce, {'attr': {'class': 'form-control shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.date_creation_annonce) }} </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.date_misajour_annonce, 'Date de mise à jour', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.date_misajour_annonce, {'attr': {'class': 'form-control shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.date_misajour_annonce) }} </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.nom_proprietaire, 'Nom du propriétaire', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.nom_proprietaire, {'attr': {'class': 'form-control shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.nom_proprietaire) }} </div>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        {{ form_label(form.contact_proprietaire, 'Contact du propriétaire', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.contact_proprietaire, {'attr': {'class': 'form-control shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.contact_proprietaire) }} </div>
                    </div>
                </div>

                <!-- Upload image -->
                <!-- Upload image -->
<div class=\"mb-3\">
    {{ form_label(form.image, 'Image de la Parcelle', {
        'label_attr': {
            'class': 'form-label fw-semibold',
            'for': 'image'
        }
    }) }}
    {{ form_widget(form.image, {
        'attr': {
            'class': 'form-control shadow-sm',
            'id': 'image'
        }
    }) }}
    <div class=\"invalid-feedback d-block text-danger\">
        {{ form_errors(form.image) }}
    </div>
</div>


                 <div class=\"mb-3\">
                        {{ form_label(form.type_terrain, 'Type De Terrain', {'label_attr': {'class': 'form-label fw-semibold'}}) }}
                        {{ form_widget(form.type_terrain, {'attr': {'class': 'form-control shadow-sm'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\"> {{ form_errors(form.type_terrain) }} </div>
                    </div>
                  <div class=\"form-check mb-3\">
    {{ form_widget(form.estDisponible, {
        'attr': {
            'class': 'form-check-input shadow-sm',
            'id': 'estDisponibleCheckbox'
        }
    }) }}
    {{ form_label(form.estDisponible, 'Disponible', {
        'label_attr': {
            'class': 'form-check-label fw-semibold',
            'for': 'estDisponibleCheckbox'
        }
    }) }}
    <div class=\"invalid-feedback d-block text-danger\">
        {{ form_errors(form.estDisponible) }}
    </div>
</div>


                <!-- Bouton de mise à jour -->
                <div class=\"text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg shadow-sm\">
                        <i class=\"fas fa-save me-2\"></i>Mettre à jour
                    </button>
                </div>
                
                {{ form_end(form) }}  
            </div>
        </div>
    </div>
<!--back-->
<div class=\"d-flex justify-content-center mt-4\">
            <a href=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"btn btn-primary me-3\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
           
        </div>
   
    <!-- Formulaire de suppression -->
    <div class=\"text-center mt-3\">
        {{ include('parcelle_proprietes/_delete_form.html.twig') }}
    </div>
</div>

{% endblock %}
", "parcelle_proprietes/edit.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\parcelle_proprietes\\edit.html.twig");
    }
}
