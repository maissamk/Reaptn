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
class __TwigTemplate_b8041cb6ad935488ba8a92fc29ade137 extends Template
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
        yield "<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">

";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "container mt-4 p-4 bg-light rounded shadow"]]);
        yield "
   <div>
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 5), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "Y-m-d H:i")) : (""))]);
        yield "

    <div class=\"text-danger\">";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "dateDebut_contrat", [], "any", false, false, false, 8), 'errors');
        yield "</div>
</div>

<div>
    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 12), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    
    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "Y-m-d H:i")) : (""))]);
        yield "

    <div class=\"text-danger\">";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "datefin_contrat", [], "any", false, false, false, 16), 'errors');
        yield "</div>

</div>

<div class=\"mb-3\">
    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 21), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom_Acheteur", [], "any", false, false, false, 23), 'errors');
        yield "</div>
</div>
<div class=\"mb-3\">
    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 26), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom_Vendeur", [], "any", false, false, false, 28), 'errors');
        yield "</div>
</div>
<div class=\"mb-3\">
    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "information_Contrat", [], "any", false, false, false, 31), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "information_Contrat", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "information_Contrat", [], "any", false, false, false, 33), 'errors');
        yield "</div>
</div>

<div>
    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 37), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
     ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "Y-m-d H:i")) : (""))]);
        yield "
    
    <div class=\"text-danger\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "datecreation_contrat", [], "any", false, false, false, 40), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "parcelle", [], "any", false, false, false, 44), 'label', ["attr" => ["class" => "form-label"]]);
        yield "
    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "parcelle", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "parcelle", [], "any", false, false, false, 46), 'errors');
        yield "</div>
</div>
<button class=\"btn btn-primary w-100\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 48, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>

";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
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
        return array (  168 => 50,  163 => 48,  158 => 46,  154 => 45,  150 => 44,  143 => 40,  138 => 38,  134 => 37,  127 => 33,  123 => 32,  119 => 31,  113 => 28,  109 => 27,  105 => 26,  99 => 23,  95 => 22,  91 => 21,  83 => 16,  78 => 14,  73 => 12,  66 => 8,  61 => 6,  57 => 5,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">

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
", "contrat/_form.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\contrat\\_form.html.twig");
    }
}
