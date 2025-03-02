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

/* @LexikTranslation/Translation/grid.html.twig */
class __TwigTemplate_24a1bdfbaf2fd7131d14c017b7249a0d extends Template
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
            'lexik_stylesheets' => [$this, 'block_lexik_stylesheets'],
            'lexik_title' => [$this, 'block_lexik_title'],
            'lexik_content' => [$this, 'block_lexik_content'],
            'lexik_toolbar' => [$this, 'block_lexik_toolbar'],
            'lexik_data_grid' => [$this, 'block_lexik_data_grid'],
            'lexik_javascript_footer' => [$this, 'block_lexik_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 1, $this->source); })()), "@LexikTranslation/Translation/grid.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/grid.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_lexik_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("lexik_stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lexiktranslation/css/translation.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_lexik_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.page_title", [], "LexikTranslationBundle"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "    <div class=\"container\">
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('lexik_toolbar', $context, $blocks);
        // line 17
        yield "
        ";
        // line 18
        yield from $this->unwrap()->yieldBlock('lexik_data_grid', $context, $blocks);
        // line 21
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_lexik_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_toolbar"));

        // line 15
        yield "            ";
        yield from $this->loadTemplate("@LexikTranslationBundle/Translation/_gridToolbar.html.twig", "@LexikTranslation/Translation/grid.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_lexik_data_grid(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_data_grid"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_data_grid"));

        // line 19
        yield "            ";
        yield from $this->loadTemplate("@LexikTranslationBundle/Translation/_ngGrid.html.twig", "@LexikTranslation/Translation/grid.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_lexik_javascript_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lexik_javascript_footer"));

        // line 25
        yield "    ";
        yield from $this->yieldParentBlock("lexik_javascript_footer", $context, $blocks);
        yield "
    <script>
        var translationCfg = {
            locales: ";
        // line 28
        yield json_encode((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 28, $this->source); })()));
        yield ",
            inputType: '";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputType"]) || array_key_exists("inputType", $context) ? $context["inputType"] : (function () { throw new RuntimeError('Variable "inputType" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "',
            autoCacheClean: ";
        // line 30
        yield (((isset($context["autoCacheClean"]) || array_key_exists("autoCacheClean", $context) ? $context["autoCacheClean"] : (function () { throw new RuntimeError('Variable "autoCacheClean" does not exist.', 30, $this->source); })())) ? ("true") : ("false"));
        yield ",
            profilerTokens: ";
        // line 31
        yield (( !(null === (isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 31, $this->source); })()))) ? (json_encode((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new RuntimeError('Variable "tokens" does not exist.', 31, $this->source); })()))) : ("null"));
        yield ",
            toggleSimilar: '";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["toggleSimilar"]) || array_key_exists("toggleSimilar", $context) ? $context["toggleSimilar"] : (function () { throw new RuntimeError('Variable "toggleSimilar" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "',
            csrfToken: '";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("lexik-translation"), "html", null, true);
        yield "',
            url: {
                list: '";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_list");
        yield "',
                listByToken: '";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_profiler", ["token" => "-token-"]);
        yield "',
                update: '";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_update", ["id" => "-id-"]);
        yield "',
                delete: '";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_delete", ["id" => "-id-"]);
        yield "',
                deleteLocale: '";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_delete_locale", ["id" => "-id-", "locale" => "-locale-"]), "html", null, true);
        yield "',
                invalidateCache: '";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_invalidate_cache");
        yield "'
            },
            label: {
                hideCol: '";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.show_hide_columns", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                toggleAllCol: '";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.toggle_all_columns", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                invalidateCache: '";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.invalidate_cache", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                allTranslations: '";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.all_translations", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                profiler: '";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.profiler", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                dataSource: '";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.data_source", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                latestProfiles: '";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.latest_profiles", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                profile: '";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.profile", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                saveRow: '";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.save_row", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                domain: '";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.domain", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                key: '";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.key", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                save: '";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.save", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                updateSuccess: '";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.successfully_updated", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                updateFail: '";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.update_failed", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                deleteSuccess: '";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.successfully_deleted", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                deleteFail: '";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.delete_failed", [], "LexikTranslationBundle"), "html", null, true);
        yield "',
                noTranslations: '";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.no_translations", [], "LexikTranslationBundle"), "html", null, true);
        yield "'
            }
        };
    </script>
    <script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lexiktranslation/js/translation.js"), "html", null, true);
        yield "\"></script>
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
        return "@LexikTranslation/Translation/grid.html.twig";
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
        return array (  352 => 63,  345 => 59,  341 => 58,  337 => 57,  333 => 56,  329 => 55,  325 => 54,  321 => 53,  317 => 52,  313 => 51,  309 => 50,  305 => 49,  301 => 48,  297 => 47,  293 => 46,  289 => 45,  285 => 44,  281 => 43,  275 => 40,  271 => 39,  267 => 38,  263 => 37,  259 => 36,  255 => 35,  250 => 33,  246 => 32,  242 => 31,  238 => 30,  234 => 29,  230 => 28,  223 => 25,  210 => 24,  199 => 20,  196 => 19,  183 => 18,  172 => 16,  169 => 15,  156 => 14,  144 => 21,  142 => 18,  139 => 17,  137 => 14,  134 => 13,  121 => 12,  98 => 10,  85 => 7,  80 => 6,  67 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends layout %}

{% trans_default_domain 'LexikTranslationBundle' %}

{% block lexik_stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lexiktranslation/css/translation.css') }}\">
{% endblock %}

{% block lexik_title %}{{ 'translations.page_title'|trans({}, 'LexikTranslationBundle') }}{% endblock %}

{% block lexik_content %}
    <div class=\"container\">
        {% block lexik_toolbar %}
            {% include '@LexikTranslationBundle/Translation/_gridToolbar.html.twig' %}
        {% endblock lexik_toolbar %}

        {% block lexik_data_grid %}
            {% include '@LexikTranslationBundle/Translation/_ngGrid.html.twig' %}
        {% endblock lexik_data_grid %}
    </div>
{% endblock %}

{% block lexik_javascript_footer %}
    {{ parent() }}
    <script>
        var translationCfg = {
            locales: {{ locales | json_encode | raw }},
            inputType: '{{ inputType }}',
            autoCacheClean: {{ autoCacheClean ? 'true' : 'false' }},
            profilerTokens: {{ tokens is not null ? (tokens | json_encode | raw) : 'null' }},
            toggleSimilar: '{{ toggleSimilar }}',
            csrfToken: '{{ csrf_token('lexik-translation') }}',
            url: {
                list: '{{ path('lexik_translation_list') }}',
                listByToken: '{{ path('lexik_translation_profiler', {'token': '-token-'}) }}',
                update: '{{ path('lexik_translation_update', {'id': '-id-'}) }}',
                delete: '{{ path('lexik_translation_delete', {'id': '-id-'}) }}',
                deleteLocale: '{{ path('lexik_translation_delete_locale', {'id': '-id-', 'locale': '-locale-'}) }}',
                invalidateCache: '{{ path('lexik_translation_invalidate_cache') }}'
            },
            label: {
                hideCol: '{{ 'translations.show_hide_columns'|trans }}',
                toggleAllCol: '{{ 'translations.toggle_all_columns'|trans }}',
                invalidateCache: '{{ 'translations.invalidate_cache'|trans }}',
                allTranslations: '{{ 'translations.all_translations'|trans }}',
                profiler: '{{ 'translations.profiler'|trans }}',
                dataSource: '{{ 'translations.data_source'|trans }}',
                latestProfiles: '{{ 'translations.latest_profiles'|trans }}',
                profile: '{{ 'translations.profile'|trans }}',
                saveRow: '{{ 'translations.save_row'|trans }}',
                domain: '{{ 'translations.domain'|trans }}',
                key: '{{ 'translations.key'|trans }}',
                save: '{{ 'translations.save'|trans }}',
                updateSuccess: '{{ 'translations.successfully_updated'|trans }}',
                updateFail: '{{ 'translations.update_failed'|trans }}',
                deleteSuccess: '{{ 'translations.successfully_deleted'|trans }}',
                deleteFail: '{{ 'translations.delete_failed'|trans }}',
                noTranslations: '{{ 'translations.no_translations'|trans }}'
            }
        };
    </script>
    <script src=\"{{ asset('bundles/lexiktranslation/js/translation.js') }}\"></script>
{% endblock %}
", "@LexikTranslation/Translation/grid.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\vendor\\lexik\\translation-bundle\\Resources\\views\\Translation\\grid.html.twig");
    }
}
