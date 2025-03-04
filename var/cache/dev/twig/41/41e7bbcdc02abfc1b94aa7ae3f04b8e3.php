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

/* @LexikTranslation/Translation/new.html.twig */
class __TwigTemplate_40d4e5396f09921f5307f86f5a386e4f extends Template
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
            'lexik_content' => [$this, 'block_lexik_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 1, $this->source); })()), "@LexikTranslation/Translation/new.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/new.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_lexik_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_content"));

        // line 4
        yield "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.add_translation", [], "LexikTranslationBundle"), "html", null, true);
        yield "</h3>
                <hr />
            </div>

            <div class=\"col-md-6\">

                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_new"), "method" => "POST", "attr" => ["class" => "form form-vertical"]]);
        yield "

                <div class=\"form-group\">
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "key", [], "any", false, false, false, 16), 'label');
        yield "
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "key", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <span class=\"text-danger\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "key", [], "any", false, false, false, 18), 'errors');
        yield "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "domain", [], "any", false, false, false, 22), 'label');
        yield "
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "domain", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    <span class=\"text-danger\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "domain", [], "any", false, false, false, 24), 'errors');
        yield "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "translations", [], "any", false, false, false, 28), 'label');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "translations", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 33
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'label');
            yield "
                        ";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "content", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        <span class=\"text-danger\">";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "content", [], "any", false, false, false, 35), 'errors');
            yield "</span>
                        ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "locale", [], "any", false, false, false, 36), 'widget');
            yield "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                </div>

                <div class=\"form-group\">
                    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_grid");
        yield "\" class=\"btn btn-default\">
                        <span class=\"glyphicon glyphicon-arrow-left\"></span>
                        ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.back_to_list", [], "LexikTranslationBundle"), "html", null, true);
        yield "
                    </a>

                    <div class=\"btn-group pull-right\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "save", [], "any", false, false, false, 47), 'widget', ["attr" => ["id" => "trans-unit-submit", "name" => "trans-unit-submit", "class" => "btn btn-primary"]]);
        yield "
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "save_add", [], "any", false, false, false, 48), 'widget', ["attr" => ["id" => "trans-unit-submit-2", "name" => "trans-unit-submit-2", "class" => "btn btn-primary"]]);
        yield "
                    </div>
                </div>

                ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "

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
        return "@LexikTranslation/Translation/new.html.twig";
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
        return array (  185 => 52,  178 => 48,  174 => 47,  167 => 43,  162 => 41,  157 => 38,  149 => 36,  145 => 35,  141 => 34,  136 => 33,  132 => 32,  125 => 28,  118 => 24,  114 => 23,  110 => 22,  103 => 18,  99 => 17,  95 => 16,  89 => 13,  80 => 7,  75 => 4,  62 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends layout %}

{% block lexik_content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>{{ 'translations.add_translation'|trans({}, 'LexikTranslationBundle') }}</h3>
                <hr />
            </div>

            <div class=\"col-md-6\">

                {{ form_start(form, {'action': path('lexik_translation_new'), 'method': 'POST', 'attr': {'class': 'form form-vertical'}}) }}

                <div class=\"form-group\">
                    {{ form_label(form.key) }}
                    {{ form_widget(form.key, { 'attr': {'class': 'form-control'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.key) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.domain) }}
                    {{ form_widget(form.domain, { 'attr': {'class': 'form-control'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.domain) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.translations) }}
                </div>

                <div class=\"form-group\">
                    {% for translation in form.translations %}
                        {{ form_label(translation) }}
                        {{ form_widget(translation.content, { 'attr': {'class': 'form-control'} }) }}
                        <span class=\"text-danger\">{{ form_errors(translation.content) }}</span>
                        {{ form_widget(translation.locale) }}
                    {% endfor %}
                </div>

                <div class=\"form-group\">
                    <a href=\"{{ path('lexik_translation_grid') }}\" class=\"btn btn-default\">
                        <span class=\"glyphicon glyphicon-arrow-left\"></span>
                        {{ 'translations.back_to_list'|trans({}, 'LexikTranslationBundle') }}
                    </a>

                    <div class=\"btn-group pull-right\">
                        {{ form_widget(form.save, { 'attr': {'id': 'trans-unit-submit', 'name': 'trans-unit-submit', 'class': 'btn btn-primary'} }) }}
                        {{ form_widget(form.save_add, { 'attr': {'id': 'trans-unit-submit-2', 'name': 'trans-unit-submit-2', 'class': 'btn btn-primary'} }) }}
                    </div>
                </div>

                {{ form_end(form) }}

            </div>
        </div>
    </div>
{% endblock %}
", "@LexikTranslation/Translation/new.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\vendor\\lexik\\translation-bundle\\Resources\\views\\Translation\\new.html.twig");
    }
}
