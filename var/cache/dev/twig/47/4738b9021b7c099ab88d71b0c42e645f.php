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

/* temp/index.html.twig */
class __TwigTemplate_be1a29846b8eeda39a92e42d351e96dc extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "temp/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <!-- Hero Start -->
    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-md-12 col-lg-7\">
                    <h4 class=\"mb-3 text-secondary\">100% Organic Foods</h4>
                    <h1 class=\"mb-5 display-3 text-primary\">Organic Veggies & Fruits Foods</h1>
                    <div class=\"position-relative mx-auto\">
                        <input class=\"form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Search\">
                        <button type=\"submit\" class=\"btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100\" style=\"top: 0; right: 25%;\">Submit Now</button>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"carousel-item active rounded\">
                                <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-img-1.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                            </div>
                            <div class=\"carousel-item rounded\">
                                <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-img-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                                <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Vegetables</a>
                            </div>
                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    ";
        // line 44
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/sections/_featured-products.html.twig", [], true, true);
        yield "
    ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/sections/_about.html.twig", [], true, true);
        yield "
    ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/sections/_facts.html.twig", [], true, true);
        yield "
    ";
        // line 47
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/sections/_features.html.twig", [], true, true);
        yield "
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
        return "temp/index.html.twig";
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
        return array (  136 => 47,  132 => 46,  128 => 45,  123 => 44,  101 => 24,  94 => 20,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <!-- Hero Start -->
    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-md-12 col-lg-7\">
                    <h4 class=\"mb-3 text-secondary\">100% Organic Foods</h4>
                    <h1 class=\"mb-5 display-3 text-primary\">Organic Veggies & Fruits Foods</h1>
                    <div class=\"position-relative mx-auto\">
                        <input class=\"form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Search\">
                        <button type=\"submit\" class=\"btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100\" style=\"top: 0; right: 25%;\">Submit Now</button>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"carousel-item active rounded\">
                                <img src=\"{{ asset('img/hero-img-1.png') }}\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                            </div>
                            <div class=\"carousel-item rounded\">
                                <img src=\"{{ asset('img/hero-img-2.jpg') }}\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                                <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Vegetables</a>
                            </div>
                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    {# Include sections from temp directory #}
    {{ include('temp/sections/_featured-products.html.twig', ignore_missing = true) }}
    {{ include('temp/sections/_about.html.twig', ignore_missing = true) }}
    {{ include('temp/sections/_facts.html.twig', ignore_missing = true) }}
    {{ include('temp/sections/_features.html.twig', ignore_missing = true) }}
{% endblock %}
", "temp/index.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\temp\\index.html.twig");
    }
}
