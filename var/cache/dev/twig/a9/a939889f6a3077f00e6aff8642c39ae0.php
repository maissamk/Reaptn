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

/* @LexikTranslation/Translation/overview.html.twig */
class __TwigTemplate_7a5e76939fb14866cba2b56fbd6a798e extends Template
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
            'lexik_javascript_footer' => [$this, 'block_lexik_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 1, $this->source); })()), "@LexikTranslation/Translation/overview.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/overview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/overview.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overview.page_title", [], "LexikTranslationBundle"), "html", null, true);
        
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
        // line 27
        yield "
        <p>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overview.msg_latest_translation", ["%date%" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["latestTrans"]) || array_key_exists("latestTrans", $context) ? $context["latestTrans"] : (function () { throw new RuntimeError('Variable "latestTrans" does not exist.', 28, $this->source); })()), "Y-m-d H:i")], "LexikTranslationBundle"), "html", null, true);
        yield "</p>

        <div id=\"translation-overview\">
            <div class=\"row margin-row\">
                <div class=\"col-md-12\">
                    ";
        // line 33
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 33, $this->source); })()))) {
            // line 34
            yield "                        <div class=\"alert alert-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overview.no_stats", [], "LexikTranslationBundle"), "html", null, true);
            yield "</div>
                    ";
        } else {
            // line 36
            yield "                        <table class=\"table table-bordered table-striped table-overview\">
                            <thead>
                                <tr>
                                    <th class=\"sortable col-0\">
                                        ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overview.domain", [], "LexikTranslationBundle"), "html", null, true);
            yield "
                                    </th>
                                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 42, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 43
                yield "                                        <th class=\"sortable col-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
                yield "\">
                                            ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $context["locale"]), "html", null, true);
                yield "
                                        </th>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "                                </tr>
                            </thead>
                            <tbody>
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new RuntimeError('Variable "domains" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 51
                yield "                                <tr columns=\"columns\">
                                    <td><a href=\"";
                // line 52
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_grid");
                yield "#?filter[_domain]=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode($context["domain"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["domain"], "html", null, true);
                yield "</a></td>
                                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 53, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 54
                    yield "                                        <td class=\"text-center\">
                                            <span class=\"text ";
                    // line 55
                    yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 55, $this->source); })()), $context["domain"], [], "array", false, false, false, 55), $context["locale"], [], "array", false, false, false, 55), "completed", [], "array", false, false, false, 55) == 100)) ? ("text-success") : ("text-danger"));
                    yield "\">
                                                ";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 56, $this->source); })()), $context["domain"], [], "array", false, false, false, 56), $context["locale"], [], "array", false, false, false, 56), "translated", [], "array", false, false, false, 56), "html", null, true);
                    yield " / ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), $context["domain"], [], "array", false, true, false, 56), $context["locale"], [], "array", false, true, false, 56), "keys", [], "array", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 56, $this->source); })()), $context["domain"], [], "array", false, false, false, 56), $context["locale"], [], "array", false, false, false, 56), "keys", [], "array", false, false, false, 56), 0)) : (0)), "html", null, true);
                    yield "
                                            </span>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar ";
                    // line 59
                    yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), $context["domain"], [], "array", false, false, false, 59), $context["locale"], [], "array", false, false, false, 59), "completed", [], "array", false, false, false, 59) == 100)) ? ("progress-bar-success") : ("progress-bar-danger"));
                    yield "\"
                                                     role=\"progressbar\"
                                                     aria-valuenow=\"";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 61, $this->source); })()), $context["domain"], [], "array", false, false, false, 61), $context["locale"], [], "array", false, false, false, 61), "completed", [], "array", false, false, false, 61), "html", null, true);
                    yield "\"
                                                     aria-valuemin=\"0\"
                                                     aria-valuemax=\"100\"
                                                     style=\"width: ";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 64, $this->source); })()), $context["domain"], [], "array", false, false, false, 64), $context["locale"], [], "array", false, false, false, 64), "completed", [], "array", false, false, false, 64), "html", null, true);
                    yield "%\">
                                                </div>
                                            </div>
                                        </td>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                yield "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['domain'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                            </tbody>
                        </table>
                    ";
        }
        // line 74
        yield "                </div>
            </div>
        </div>

    </div>
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
        yield "            <div class=\"page-header\">
                <h1>
                    ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overview.page_title", [], "LexikTranslationBundle"), "html", null, true);
        yield "
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_grid");
        yield "\" role=\"button\" class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-th\"></span>
                            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overview.show_grid", [], "LexikTranslationBundle"), "html", null, true);
        yield "
                        </a>
                    </div>
                </h1>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    ";
        yield from $this->yieldParentBlock("lexik_javascript_footer", $context, $blocks);
        yield "
    <script src=\"";
        // line 83
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
        return "@LexikTranslation/Translation/overview.html.twig";
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
        return array (  358 => 83,  353 => 82,  340 => 81,  323 => 21,  318 => 19,  313 => 17,  309 => 15,  296 => 14,  280 => 74,  275 => 71,  268 => 69,  257 => 64,  251 => 61,  246 => 59,  238 => 56,  234 => 55,  231 => 54,  227 => 53,  219 => 52,  216 => 51,  212 => 50,  207 => 47,  190 => 44,  185 => 43,  168 => 42,  163 => 40,  157 => 36,  151 => 34,  149 => 33,  141 => 28,  138 => 27,  136 => 14,  133 => 13,  120 => 12,  97 => 10,  84 => 7,  79 => 6,  66 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends layout %}

{% trans_default_domain 'LexikTranslationBundle' %}

{% block lexik_stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lexiktranslation/css/translation.css') }}\">
{% endblock %}

{% block lexik_title %}{{ 'overview.page_title'|trans }}{% endblock %}

{% block lexik_content %}
    <div class=\"container\">
        {% block lexik_toolbar %}
            <div class=\"page-header\">
                <h1>
                    {{ 'overview.page_title'|trans }}
                    <div class=\"pull-right\">
                        <a href=\"{{ path('lexik_translation_grid') }}\" role=\"button\" class=\"btn btn-primary\">
                            <span class=\"glyphicon glyphicon-th\"></span>
                            {{ 'overview.show_grid'|trans }}
                        </a>
                    </div>
                </h1>
            </div>
        {% endblock lexik_toolbar %}

        <p>{{ 'overview.msg_latest_translation'|trans({'%date%': latestTrans|date('Y-m-d H:i')}) }}</p>

        <div id=\"translation-overview\">
            <div class=\"row margin-row\">
                <div class=\"col-md-12\">
                    {% if  not stats|length %}
                        <div class=\"alert alert-info\">{{ 'overview.no_stats'|trans }}</div>
                    {% else %}
                        <table class=\"table table-bordered table-striped table-overview\">
                            <thead>
                                <tr>
                                    <th class=\"sortable col-0\">
                                        {{ 'overview.domain'|trans }}
                                    </th>
                                    {% for locale in locales %}
                                        <th class=\"sortable col-{{ loop.index }}\">
                                            {{ locale|upper }}
                                        </th>
                                    {% endfor %}
                                </tr>
                            </thead>
                            <tbody>
                            {% for domain in domains %}
                                <tr columns=\"columns\">
                                    <td><a href=\"{{ path('lexik_translation_grid') }}#?filter[_domain]={{ domain | url_encode }}\">{{ domain }}</a></td>
                                    {% for locale in locales %}
                                        <td class=\"text-center\">
                                            <span class=\"text {{ stats[domain][locale]['completed'] == 100 ? 'text-success' : 'text-danger' }}\">
                                                {{ stats[domain][locale]['translated'] }} / {{ stats[domain][locale]['keys']|default(0) }}
                                            </span>
                                            <div class=\"progress\">
                                                <div class=\"progress-bar {{ stats[domain][locale]['completed'] == 100 ? 'progress-bar-success' : 'progress-bar-danger' }}\"
                                                     role=\"progressbar\"
                                                     aria-valuenow=\"{{ stats[domain][locale]['completed'] }}\"
                                                     aria-valuemin=\"0\"
                                                     aria-valuemax=\"100\"
                                                     style=\"width: {{ stats[domain][locale]['completed'] }}%\">
                                                </div>
                                            </div>
                                        </td>
                                    {% endfor %}
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            </div>
        </div>

    </div>
{% endblock %}

{% block lexik_javascript_footer %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/lexiktranslation/js/translation.js') }}\"></script>
{% endblock %}
", "@LexikTranslation/Translation/overview.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\vendor\\lexik\\translation-bundle\\Resources\\views\\Translation\\overview.html.twig");
    }
}
