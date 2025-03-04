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

/* admin/parcelle_proprietes/edit_back.html.twig */
class __TwigTemplate_d1015ddbc8078575538f945fd0c2410b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/edit_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/parcelle_proprietes/edit_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/parcelle_proprietes/edit_back.html.twig", 1);
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
        yield "<div class=\"container mt-5\" style=\"width: 70%; margin-left: 27%; padding-top: 50px;\">


    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-lg\">
            <div class=\"container mt-5 pt-5\">
                <div class=\"card-header bg-primary text-white text-center\">
                
                    <h2>Modifier une Parcelle ou Propriété</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                    <div class=\"mb-3\">
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre"]);
        yield "
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "titre", [], "any", false, false, false, 23), 'errors');
        yield "</div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'errors');
        yield "</div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix"]);
        yield "
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prix", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prix", [], "any", false, false, false, 33), 'errors');
        yield "</div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield "
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "status", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), 'errors');
        yield "</div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "emplacement", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"], "label" => "emplacement"]);
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
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "taille", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taille"]);
        yield "
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "taille", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "taille", [], "any", false, false, false, 48), 'errors');
        yield "</div>
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom Propriétaire"]);
        yield "
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 53), 'errors');
        yield "</div>
                    </div>
                     <div class=\"mb-3\">
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contact Propriétaire"]);
        yield "
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 58), 'errors');
        yield "</div>
                    </div>
<div class=\"mb-3\">
    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de création de l'annonce"]);
        yield "
    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"invalid-feedback d-block text-danger\">
        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 64), 'errors');
        yield "
    </div>
</div>

<div class=\"mb-3\">
    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Mis a jour Annonce"]);
        yield "
    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"invalid-feedback d-block text-danger\">
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 72), 'errors');
        yield "
    </div>
</div>
                    <div class=\"mb-3\">
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "estDisponible", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Disponible"]);
        yield "
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "estDisponible", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "estDisponible", [], "any", false, false, false, 78), 'errors');
        yield "</div>
                    </div>
                  




                    <div class=\"mb-3\">
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "image", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image"]);
        yield "
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "image", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"invalid-feedback d-block text-danger\">";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "image", [], "any", false, false, false, 88), 'errors');
        yield "</div>
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                        <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
                    </div>





                    ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/parcelle_proprietes/edit_back.html.twig";
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
        return array (  310 => 100,  300 => 93,  292 => 88,  288 => 87,  284 => 86,  273 => 78,  269 => 77,  265 => 76,  258 => 72,  253 => 70,  249 => 69,  241 => 64,  236 => 62,  232 => 61,  226 => 58,  222 => 57,  218 => 56,  212 => 53,  208 => 52,  204 => 51,  198 => 48,  194 => 47,  190 => 46,  184 => 43,  180 => 42,  176 => 41,  170 => 38,  166 => 37,  162 => 36,  156 => 33,  152 => 32,  148 => 31,  142 => 28,  138 => 27,  134 => 26,  128 => 23,  124 => 22,  120 => 21,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier une Parcelle ou Propriété{% endblock %}

{% block body %}
<div class=\"container mt-5\" style=\"width: 70%; margin-left: 27%; padding-top: 50px;\">


    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-lg\">
            <div class=\"container mt-5 pt-5\">
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
                        {{ form_label(form.emplacement, 'emplacement', {'label_attr': {'class': 'form-label'}}) }}
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
    {{ form_label(form.date_misajour_annonce, 'Date de Mis a jour Annonce', {'label_attr': {'class': 'form-label'}}) }}
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
                  




                    <div class=\"mb-3\">
                        {{ form_label(form.image, 'Image', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"invalid-feedback d-block text-danger\">{{ form_errors(form.image) }}</div>
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                        <a href=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"btn btn-secondary\">Retour</a>
                    </div>





                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/parcelle_proprietes/edit_back.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\parcelle_proprietes\\edit_back.html.twig");
    }
}
