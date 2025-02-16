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
class __TwigTemplate_0ad19258e9111cf9d3afeec29aef55b6 extends Template
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
        <div class=\"text-danger\">";
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
        <div class=\"text-danger\">";
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prix", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "pattern" => "[0-9]+(.[0-9]{1,2})?", "title" => "Entrer un prix valide"]]);
        yield "
        <div class=\"text-danger\">";
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
        <div class=\"text-danger\">";
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "emplacement", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
        <div class=\"text-danger\">";
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "taille", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "1", "step" => "0.01"]]);
        yield "
        <div class=\"text-danger\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "taille", [], "any", false, false, false, 36), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 40), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "Y-m-d H:i")) : (""))]);
        yield "
        <div class=\"text-danger\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 42), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 46), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47), "Y-m-d H:i")) : (""))]);
        yield "
        <div class=\"text-danger\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 48), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "est_disponible", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Disponible ?"]);
        yield "
        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "est_disponible", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
        <div class=\"text-danger\">";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "est_disponible", [], "any", false, false, false, 54), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du propriétaire"]);
        yield "
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
        <div class=\"text-danger\">";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 60), 'errors');
        yield "</div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contact du propriétaire"]);
        yield "
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "pattern" => "^+?[0-9]*\$", "title" => "Numéro de téléphone valide requis"]]);
        yield "
        <div class=\"text-danger\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 66), 'errors');
        yield "</div>
    </div>

    <button class=\"btn btn-primary\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
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
        return array (  223 => 71,  218 => 69,  212 => 66,  208 => 65,  204 => 64,  197 => 60,  193 => 59,  189 => 58,  182 => 54,  178 => 53,  174 => 52,  167 => 48,  163 => 47,  159 => 46,  152 => 42,  148 => 41,  144 => 40,  137 => 36,  133 => 35,  129 => 34,  122 => 30,  118 => 29,  114 => 28,  107 => 24,  103 => 23,  99 => 22,  92 => 18,  88 => 17,  84 => 16,  77 => 12,  73 => 11,  69 => 10,  62 => 6,  58 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

    <div class=\"mb-3\">
        {{ form_label(form.titre, 'Titre', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.titre) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.description) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'required': 'required', 'pattern': '[0-9]+(\\.[0-9]{1,2})?', 'title': 'Entrer un prix valide'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.prix) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.status, 'Statut', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.status, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.status) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.emplacement, 'Emplacement', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.emplacement, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.emplacement) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.taille, 'Taille (m²)', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.taille, {'attr': {'class': 'form-control', 'required': 'required', 'min': '1', 'step': '0.01'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.taille) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.date_creation_annonce, null, {'attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.date_creation_annonce, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}, 'value': form.date_creation_annonce.vars.value ? form.date_creation_annonce.vars.value|date('Y-m-d H:i') : ''}) }}
        <div class=\"text-danger\">{{ form_errors(form.date_creation_annonce) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.date_misajour_annonce, null, {'attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.date_misajour_annonce, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}, 'value': form.date_misajour_annonce.vars.value ? form.date_misajour_annonce.vars.value|date('Y-m-d H:i') : ''}) }}
        <div class=\"text-danger\">{{ form_errors(form.date_misajour_annonce) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.est_disponible, 'Disponible ?', {'label_attr': {'class': 'form-check-label'}}) }}
        {{ form_widget(form.est_disponible, {'attr': {'class': 'form-check-input'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.est_disponible) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.nom_proprietaire, 'Nom du propriétaire', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.nom_proprietaire, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.nom_proprietaire) }}</div>
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.contact_proprietaire, 'Contact du propriétaire', {'label_attr': {'class': 'form-label'}}) }}
        {{ form_widget(form.contact_proprietaire, {'attr': {'class': 'form-control', 'required': 'required', 'pattern': '^\\+?[0-9]*\$', 'title': 'Numéro de téléphone valide requis'}}) }}
        <div class=\"text-danger\">{{ form_errors(form.contact_proprietaire) }}</div>
    </div>

    <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

{{ form_end(form) }}
", "parcelle_proprietes/_form.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\parcelle_proprietes\\_form.html.twig");
    }
}
