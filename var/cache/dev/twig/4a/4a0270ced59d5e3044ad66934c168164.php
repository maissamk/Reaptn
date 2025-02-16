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

/* contrat/_form.html.twig */
class __TwigTemplate_c5189d00222d68a1bb576c5cc26b479d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/_form.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "container mt-4 p-4 bg-light rounded shadow"]]);
        yield "
   <div>
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 4), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), "Y-m-d H:i")) : (""))]);
        yield "

    <div class=\"text-danger\">";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 7), 'errors');
        yield "</div>
</div>

<div>
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 11), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "Y-m-d H:i")) : (""))]);
        yield "

    <div class=\"text-danger\">";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 15), 'errors');
        yield "</div>

</div>

<div class=\"mb-3\">
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 20), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger\">";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 22), 'errors');
        yield "</div>
</div>
<div class=\"mb-3\">
    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 25), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 27), 'errors');
        yield "</div>
</div>
<div class=\"mb-3\">
    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "information_Contrat", [], "any", false, false, false, 30), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "information_Contrat", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "information_Contrat", [], "any", false, false, false, 32), 'errors');
        yield "</div>
</div>

<div>
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 36), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
     ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "Y-m-d H:i")) : (""))]);
        yield "
    
    <div class=\"text-danger\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 39), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "parcelle", [], "any", false, false, false, 43), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "parcelle", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "parcelle", [], "any", false, false, false, 45), 'errors');
        yield "</div>
</div>
<button class=\"btn btn-primary w-100\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 47, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
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
        return "contrat/_form.html.twig";
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
        return array (  167 => 49,  162 => 47,  157 => 45,  153 => 44,  149 => 43,  142 => 39,  137 => 37,  133 => 36,  126 => 32,  122 => 31,  118 => 30,  112 => 27,  108 => 26,  104 => 25,  98 => 22,  94 => 21,  90 => 20,  82 => 15,  77 => 13,  72 => 11,  65 => 7,  60 => 5,  56 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'container mt-4 p-4 bg-light rounded shadow'}}) }}
   <div>
    {{ form_label(form.dateDebut_contrat, null, {'attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.dateDebut_contrat, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}, 'value': form.dateDebut_contrat.vars.value ? form.dateDebut_contrat.vars.value|date('Y-m-d H:i') : ''}) }}

    <div class=\"text-danger\">{{ form_errors(form.dateDebut_contrat) }}</div>
</div>

<div>
    {{ form_label(form.datefin_contrat, null, {'attr': {'class': 'form-label'}}) }}
    
    {{ form_widget(form.datefin_contrat, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}, 'value': form.datefin_contrat.vars.value ? form.datefin_contrat.vars.value|date('Y-m-d H:i') : ''}) }}

    <div class=\"text-danger\">{{ form_errors(form.datefin_contrat) }}</div>

</div>

<div class=\"mb-3\">
    {{ form_label(form.nom_Acheteur, null, {'attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.nom_Acheteur, {'attr': {'class': 'form-control'}}) }}
    <div class=\"text-danger\">{{ form_errors(form.nom_Acheteur) }}</div>
</div>
<div class=\"mb-3\">
    {{ form_label(form.nom_Vendeur, null, {'attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.nom_Vendeur, {'attr': {'class': 'form-control'}}) }}
    <div class=\"text-danger\">{{ form_errors(form.nom_Vendeur) }}</div>
</div>
<div class=\"mb-3\">
    {{ form_label(form.information_Contrat, null, {'attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.information_Contrat, {'attr': {'class': 'form-control'}}) }}
    <div class=\"text-danger\">{{ form_errors(form.information_Contrat) }}</div>
</div>

<div>
    {{ form_label(form.datecreation_contrat, null, {'attr': {'class': 'form-label'}}) }}
     {{ form_widget(form.datecreation_contrat, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}, 'value': form.datecreation_contrat.vars.value ? form.datecreation_contrat.vars.value|date('Y-m-d H:i') : ''}) }}
    
    <div class=\"text-danger\">{{ form_errors(form.datecreation_contrat) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.parcelle, null, {'attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.parcelle, {'attr': {'class': 'form-control'}}) }}
    <div class=\"text-danger\">{{ form_errors(form.parcelle) }}</div>
</div>
<button class=\"btn btn-primary w-100\">{{ button_label|default('Enregistrer') }}</button>

{{ form_end(form) }}
", "contrat/_form.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\contrat\\_form.html.twig");
    }
}
