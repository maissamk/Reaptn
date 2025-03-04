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

/* @LexikTranslation/Translation/_gridToolbar.html.twig */
class __TwigTemplate_4d3504c4ceb22d91a36e5d19fd50ba40 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/_gridToolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/_gridToolbar.html.twig"));

        // line 1
        yield "<div class=\"page-header\">
    <h1>
        ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.page_title", [], "LexikTranslationBundle"), "html", null, true);
        yield "
        <div class=\"pull-right\">
            <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_new");
        yield "\" role=\"button\" class=\"btn btn-success\">
                <span class=\"glyphicon glyphicon-plus\"></span>
                ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("translations.new_translation", [], "LexikTranslationBundle"), "html", null, true);
        yield "
            </a>
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lexik_translation_overview");
        yield "\" role=\"button\" class=\"btn btn-primary\">
                <span class=\"glyphicon glyphicon-tasks\"></span>
                ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("overview.page_title", [], "LexikTranslationBundle"), "html", null, true);
        yield "
            </a>
        </div>
    </h1>
</div>
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
        return "@LexikTranslation/Translation/_gridToolbar.html.twig";
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
        return array (  72 => 11,  67 => 9,  62 => 7,  57 => 5,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"page-header\">
    <h1>
        {{ 'translations.page_title'|trans({}, 'LexikTranslationBundle') }}
        <div class=\"pull-right\">
            <a href=\"{{ path('lexik_translation_new') }}\" role=\"button\" class=\"btn btn-success\">
                <span class=\"glyphicon glyphicon-plus\"></span>
                {{ 'translations.new_translation'|trans({}, 'LexikTranslationBundle') }}
            </a>
            <a href=\"{{ path('lexik_translation_overview') }}\" role=\"button\" class=\"btn btn-primary\">
                <span class=\"glyphicon glyphicon-tasks\"></span>
                {{ 'overview.page_title'|trans({}, 'LexikTranslationBundle') }}
            </a>
        </div>
    </h1>
</div>
", "@LexikTranslation/Translation/_gridToolbar.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\vendor\\lexik\\translation-bundle\\Resources\\views\\Translation\\_gridToolbar.html.twig");
    }
}
