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

/* temp/partials/_header.html.twig */
class __TwigTemplate_289748db95340471278f4e460208c30f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/partials/_header.html.twig"));

        // line 1
        yield "<!-- Navbar start -->
<div class=\"container-fluid fixed-top\">
    <div class=\"container topbar bg-primary d-none d-lg-block\">
        <div class=\"d-flex justify-content-between\">
            <div class=\"top-info ps-2\">
                <small class=\"me-3\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i> <a href=\"#\" class=\"text-white\">123 Street, New York</a></small>
                <small class=\"me-3\"><i class=\"fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">Email@Example.com</a></small>
            </div>
            <div class=\"top-link pe-2\">
                <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">Privacy Policy</small>/</a>
                <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">Terms of Use</small>/</a>
                <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class=\"container px-0\">
        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">Fruitables</h1></a>
            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", ["_route"], "method", false, false, false, 24) == "app_temp_index")) ? ("active") : (""));
        yield "\">Home</a>
                    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25) == "app_temp_shop")) ? ("active") : (""));
        yield "\">Products</a>
                    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_cart");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26) == "app_temp_cart")) ? ("active") : (""));
        yield "\">cart</a>

                </div>
                <div class=\"d-flex m-3 me-0\">
                    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>
                    <a href=\"#\" class=\"position-relative me-4 my-auto\">
                        <i class=\"fa fa-shopping-bag fa-2x\"></i>
                        <span class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">3</span>
                    </a>
                    <a href=\"#\" class=\"my-auto\">
                        <i class=\"fas fa-user fa-2x\"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<!-- Modal Search Start -->
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-fullscreen\">
        <div class=\"modal-content rounded-0\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body d-flex align-items-center\">
                <div class=\"input-group w-75 mx-auto d-flex\">
                    <input type=\"search\" class=\"form-control p-3\" placeholder=\"Search for products\" aria-label=\"search\" aria-describedby=\"search-icon-1\">
                    <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->
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
        return "temp/partials/_header.html.twig";
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
        return array (  88 => 26,  82 => 25,  76 => 24,  67 => 18,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar start -->
<div class=\"container-fluid fixed-top\">
    <div class=\"container topbar bg-primary d-none d-lg-block\">
        <div class=\"d-flex justify-content-between\">
            <div class=\"top-info ps-2\">
                <small class=\"me-3\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i> <a href=\"#\" class=\"text-white\">123 Street, New York</a></small>
                <small class=\"me-3\"><i class=\"fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">Email@Example.com</a></small>
            </div>
            <div class=\"top-link pe-2\">
                <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">Privacy Policy</small>/</a>
                <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">Terms of Use</small>/</a>
                <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class=\"container px-0\">
        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
            <a href=\"{{ path('app_temp_index') }}\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">Fruitables</h1></a>
            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"{{ path('app_temp_index') }}\" class=\"nav-item nav-link {{ app.request.get('_route') == 'app_temp_index' ? 'active' : '' }}\">Home</a>
                    <a href=\"{{ path('app_temp_shop') }}\" class=\"nav-item nav-link {{ app.request.get('_route') == 'app_temp_shop' ? 'active' : '' }}\">Products</a>
                    <a href=\"{{ path('app_temp_cart') }}\" class=\"nav-item nav-link {{ app.request.get('_route') == 'app_temp_cart' ? 'active' : '' }}\">cart</a>

                </div>
                <div class=\"d-flex m-3 me-0\">
                    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>
                    <a href=\"#\" class=\"position-relative me-4 my-auto\">
                        <i class=\"fa fa-shopping-bag fa-2x\"></i>
                        <span class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">3</span>
                    </a>
                    <a href=\"#\" class=\"my-auto\">
                        <i class=\"fas fa-user fa-2x\"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<!-- Modal Search Start -->
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-fullscreen\">
        <div class=\"modal-content rounded-0\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body d-flex align-items-center\">
                <div class=\"input-group w-75 mx-auto d-flex\">
                    <input type=\"search\" class=\"form-control p-3\" placeholder=\"Search for products\" aria-label=\"search\" aria-describedby=\"search-icon-1\">
                    <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->
", "temp/partials/_header.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\temp\\partials\\_header.html.twig");
    }
}
