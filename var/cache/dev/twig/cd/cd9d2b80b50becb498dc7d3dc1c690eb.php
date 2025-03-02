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

/* base.html.twig */
class __TwigTemplate_14456eb2a79074cceb2f979f3c2c4a7b extends Template
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
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
            'footer' => [$this, 'block_footer'],
            'copyright' => [$this, 'block_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        yield "\">

    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

        ";
        // line 11
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 31
        yield "
    </head>

    <body>
    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 105
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1031
        yield "    </body>
    ";
        // line 1032
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 1111
        yield "
";
        // line 1112
        yield from $this->unwrap()->yieldBlock('copyright', $context, $blocks);
        // line 1127
        yield "

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Fruitables - Vegetable Website Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        yield "        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\" rel=\"stylesheet\"> 

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 36
        yield "<!-- Navbar start -->
<div class=\"container-fluid fixed-top\">
    <div class=\"container topbar bg-primary d-none d-lg-block\">
        <div class=\"d-flex justify-content-between\">
            <div class=\"top-info ps-2\">
                <small class=\"me-3\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i> <a href=\"#\" class=\"text-white\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Esprit"), "html", null, true);
        yield "</a></small>
                <small class=\"me-3\"><i class=\"fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agrivision@Example.com"), "html", null, true);
        yield "</a></small>
            </div>
            <div class=\"top-link pe-2\">
                <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Privacy Policy"), "html", null, true);
        yield "</small>/</a>
                <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Terms of Use"), "html", null, true);
        yield "</small>/</a>
                <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sales and Refunds"), "html", null, true);
        yield "</small></a>
            </div>
        </div>
    </div>
    <div class=\"container px-0\">
        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
            <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"navbar-brand ms-auto\">
                <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/logoapp.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"img-fluid\" style=\"height: 80px; width: auto;\">
            </a>

            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"nav-item nav-link active\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accueil"), "html", null, true);
        yield "</a>
                    <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\" class=\"nav-item nav-link\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produits"), "html", null, true);
        yield "</a>
                    <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => 1]);
        yield "\" class=\"nav-item nav-link\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Produits Detail"), "html", null, true);
        yield "</a>
                    ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65)) {
            // line 66
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
            yield "\" class=\"nav-item nav-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parcelle"), "html", null, true);
            yield "</a>
                    ";
        }
        // line 68
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
            // line 69
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
            yield "\" class=\"nav-item nav-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Offres disponibles"), "html", null, true);
            yield "</a>
                    ";
        }
        // line 71
        yield "                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matériel Agricole"), "html", null, true);
        yield "</a>
                        <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                            <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_index");
        yield "\" class=\"dropdown-item\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matériel A Vendre"), "html", null, true);
        yield "</a>
                            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_index");
        yield "\" class=\"dropdown-item\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matériel A Louer"), "html", null, true);
        yield "</a>
                        </div>
                    </div>
                </div>
                <div class=\"d-flex m-3 me-0\">
                    ";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_afficher");
            yield "\" class=\"position-relative me-4 my-auto\">
                            <i class=\"fa fa-shopping-bag fa-2x\"></i>
                            <span class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">";
            // line 83
            yield ((array_key_exists("cartItemCount", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartItemCount"]) || array_key_exists("cartItemCount", $context) ? $context["cartItemCount"] : (function () { throw new RuntimeError('Variable "cartItemCount" does not exist.', 83, $this->source); })()), "html", null, true)) : (0));
            yield "</span>
                        </a>
                    ";
        }
        // line 86
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86)) {
            // line 87
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"my-auto\">
                            <i class=\"fas fa-user fa-2x\"></i>
                        </a>
                    ";
        }
        // line 91
        yield "                </div>
                <div class=\"ms-auto\">
                    <a href=\"/";
        // line 93
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93)) ? ("logout") : ("login"));
        yield "\" class=\"btn btn-warning text-white fw-bold px-4 py-2 rounded-pill\">
                        ";
        // line 94
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Déconnexion"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connexion"), "html", null, true)));
        yield "
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 105
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

        // line 106
        yield "

        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
            <div class=\"spinner-grow text-primary\" role=\"status\"></div>
        </div>
        <!-- Spinner End -->


       


        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


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
                                    <img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/hero-img-1.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                                </div>
                                <div class=\"carousel-item rounded\">
                                    <img src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/hero-img-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Vesitables</a>
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


        <!-- Featurs Section Start -->
        <div class=\"container-fluid featurs py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-car-side fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Free Shipping</h5>
                                <p class=\"mb-0\">Free on order over \$300</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-user-shield fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Security Payment</h5>
                                <p class=\"mb-0\">100% security payment</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-exchange-alt fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>30 Day Return</h5>
                                <p class=\"mb-0\">30 day money guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fa fa-phone-alt fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>24/7 Support</h5>
                                <p class=\"mb-0\">Support every time fast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->


        <!-- Fruits Shop Start-->
        <div class=\"container-fluid fruite py-5\">
            <div class=\"container py-5\">
                <div class=\"tab-class text-center\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-4 text-start\">
                            <h1>Our Organic Products</h1>
                        </div>
                        <div class=\"col-lg-8 text-end\">
                            <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">All Products</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex py-2 m-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-2\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Vegetables</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-3\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Fruits</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-4\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Bread</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-5\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Meat</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"tab-content\">
                        <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Banana</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-6.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apple</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-4\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-5\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Banana</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
        // line 566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->


        <!-- Featurs Start -->
        <div class=\"container-fluid service py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4 justify-content-center\">
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\">
                            <div class=\"service-item bg-secondary rounded border border-secondary\">
                                <img src=\"";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/featur-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom\">
                                    <div class=\"service-content bg-primary text-center p-4 rounded\">
                                        <h5 class=\"text-white\">Fresh Apples</h5>
                                        <h3 class=\"mb-0\">20% OFF</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\">
                            <div class=\"service-item bg-dark rounded border border-dark\">
                                <img src=\"";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/featur-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom\">
                                    <div class=\"service-content bg-light text-center p-4 rounded\">
                                        <h5 class=\"text-primary\">Tasty Fruits</h5>
                                        <h3 class=\"mb-0\">Free delivery</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\">
                            <div class=\"service-item bg-primary rounded border border-primary\">
                                <img src=\"";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/featur-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom\">
                                    <div class=\"service-content bg-secondary text-center p-4 rounded\">
                                        <h5 class=\"text-white\">Exotic Vegitable</h5>
                                        <h3 class=\"mb-0\">Discount 30\$</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->


    


        <!-- Banner Section Start-->
        <div class=\"container-fluid banner bg-secondary my-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4 align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"py-4\">
                            <h1 class=\"display-3 text-white\">Fresh Exotic Fruits</h1>
                            <p class=\"fw-normal display-3 text-dark mb-4\">in Our Store</p>
                            <p class=\"mb-4 text-dark\">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                            <a href=\"#\" class=\"banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5\">BUY</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"position-relative\">
                            <img src=\"";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/baner-1.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute\" style=\"width: 140px; height: 140px; top: 0; left: 0;\">
                                <h1 style=\"font-size: 100px;\">1</h1>
                                <div class=\"d-flex flex-column\">
                                    <span class=\"h2 mb-0\">50\$</span>
                                    <span class=\"h4 text-muted mb-0\">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
                <div class=\"text-center mx-auto mb-5\" style=\"max-width: 700px;\">
                    <h1 class=\"display-4\">Bestseller Products</h1>
                    <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 684
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/best-product-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/best-product-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/best-product-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/best-product-4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 768
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/best-product-5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"";
        // line 789
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/best-product-6.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 \$</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"";
        // line 825
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 \$</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"";
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 \$</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"";
        // line 859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/fruite-item-4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-2\">
                                <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 \$</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


        <!-- Fact Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"bg-light p-5 rounded\">
                    <div class=\"row g-4 justify-content-center\">
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- Tastimonial Start -->
        <div class=\"container-fluid testimonial py-5\">
            <div class=\"container py-5\">
                <div class=\"testimonial-header text-center\">
                    <h4 class=\"text-primary\">Our Testimonial</h4>
                    <h1 class=\"display-5 mb-5 text-dark\">Our Client Saying!</h1>
                </div>
                <div class=\"owl-carousel testimonial-carousel\">
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"";
        // line 937
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/testimonial-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Client Name</h4>
                                    <p class=\"m-0 pb-3\">Profession</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"";
        // line 962
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/testimonial-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Client Name</h4>
                                    <p class=\"m-0 pb-3\">Profession</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"";
        // line 987
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/testimonial-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Client Name</h4>
                                    <p class=\"m-0 pb-3\">Profession</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->


        



        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>   

        ";
        // line 1016
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 1028
        yield "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1016
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 1017
        yield "    <!-- JavaScript Libraries -->
    <script src=\"";
        // line 1018
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1019
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1020
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1021
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1022
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1023
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 1026
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1032
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1033
        yield "    <!-- Footer content -->
    <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
        <div class=\"container py-5\">

            <form id=\"localeForm\" method=\"get\" action=\"\">
                <select id=\"localeSelect\" name=\"locale\" onchange=\"changeLocale()\">
                    <option value=\"none\" ";
        // line 1039
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1039, $this->source); })()), "request", [], "any", false, false, false, 1039), "locale", [], "any", false, false, false, 1039) == "fake_locale")) ? ("selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Translation"), "html", null, true);
        yield "</option>
                    <option value=\"ar\" ";
        // line 1040
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1040, $this->source); })()), "request", [], "any", false, false, false, 1040), "locale", [], "any", false, false, false, 1040) == "ar")) ? ("selected") : (""));
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Arabic"), "html", null, true);
        yield "</option>
                </select>
            </form>

            <script>
                function changeLocale() {
                    var selectedLocale = document.getElementById(\"localeSelect\").value;
                    var actionUrl = \"";
        // line 1047
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => "REPLACE_LOCALE"]);
        yield "\";
                    actionUrl = actionUrl.replace(\"REPLACE_LOCALE\", selectedLocale);
                    document.getElementById(\"localeForm\").action = actionUrl;
                    document.getElementById(\"localeForm\").submit();
                }
            </script>

            <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5);\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-3\">
                        <a href=\"";
        // line 1057
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"navbar-brand ms-auto\">
                            <img src=\"";
        // line 1058
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/logoapp.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"img-fluid\" style=\"height: 80px; width: auto;\">
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"position-relative mx-auto\">
                            <input class=\"form-control border-0 w-100 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"";
        // line 1063
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your Email"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white\" style=\"top: 0; right: 0;\">";
        // line 1064
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subscribe Now"), "html", null, true);
        yield "</button>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div class=\"d-flex justify-content-end pt-3\">
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-secondary btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <!-- Empty column -->
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <!-- Additional footer content can go here -->
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">";
        // line 1088
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</h4>
                        <a class=\"btn-link\" href=\"\">";
        // line 1089
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Med Nour Romdhani"), "html", null, true);
        yield "</a>
                        <a class=\"btn-link\" href=\"\">";
        // line 1090
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maissa Khemiri"), "html", null, true);
        yield "</a>
                        <a class=\"btn-link\" href=\"\">";
        // line 1091
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Baligh Laouini"), "html", null, true);
        yield "</a>
                        <a class=\"btn-link\" href=\"\">";
        // line 1092
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yosr Sfaihi"), "html", null, true);
        yield "</a>
                        <a class=\"btn-link\" href=\"\">";
        // line 1093
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nihel Hassad"), "html", null, true);
        yield "</a>
                        <a class=\"btn-link\" href=\"\">";
        // line 1094
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Takoua Aouadi"), "html", null, true);
        yield "</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">";
        // line 1099
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact"), "html", null, true);
        yield "</h4>
                        <p>";
        // line 1100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Address"), "html", null, true);
        yield ": Esprit</p>
                        <p>";
        // line 1101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield ": Agrivision@gmail.com</p>
                        <p>";
        // line 1102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone"), "html", null, true);
        yield ": 56988796</p>
                        <p>";
        // line 1103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment Accepted"), "html", null, true);
        yield "</p>
                        <img src=\"";
        // line 1104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/payment.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
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

    // line 1112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_copyright(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "copyright"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "copyright"));

        // line 1113
        yield "    <!-- Copyright content -->
    <div class=\"container-fluid copyright bg-dark py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    <span class=\"text-light\"><a href=\"#\"><i class=\"fas fa-copyright text-light me-2\"></i>Reap.tn</a>, All right reserved.</span>
                </div>
                <div class=\"col-md-6 my-auto text-center text-md-end text-white\">
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
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
        return "base.html.twig";
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
        return array (  1647 => 1113,  1634 => 1112,  1616 => 1104,  1612 => 1103,  1608 => 1102,  1604 => 1101,  1600 => 1100,  1596 => 1099,  1588 => 1094,  1584 => 1093,  1580 => 1092,  1576 => 1091,  1572 => 1090,  1568 => 1089,  1564 => 1088,  1537 => 1064,  1533 => 1063,  1525 => 1058,  1521 => 1057,  1508 => 1047,  1496 => 1040,  1490 => 1039,  1482 => 1033,  1469 => 1032,  1456 => 1026,  1450 => 1023,  1446 => 1022,  1442 => 1021,  1438 => 1020,  1434 => 1019,  1430 => 1018,  1427 => 1017,  1414 => 1016,  1401 => 1028,  1399 => 1016,  1367 => 987,  1339 => 962,  1311 => 937,  1230 => 859,  1210 => 842,  1190 => 825,  1170 => 808,  1148 => 789,  1124 => 768,  1100 => 747,  1076 => 726,  1052 => 705,  1028 => 684,  997 => 656,  961 => 623,  945 => 610,  929 => 597,  895 => 566,  876 => 550,  857 => 534,  830 => 510,  811 => 494,  784 => 470,  765 => 454,  738 => 430,  719 => 414,  692 => 390,  673 => 374,  654 => 358,  635 => 342,  616 => 326,  597 => 310,  578 => 294,  559 => 278,  436 => 158,  429 => 154,  379 => 106,  366 => 105,  345 => 94,  341 => 93,  337 => 91,  329 => 87,  326 => 86,  320 => 83,  314 => 81,  312 => 80,  302 => 75,  296 => 74,  291 => 72,  288 => 71,  280 => 69,  277 => 68,  269 => 66,  267 => 65,  261 => 64,  255 => 63,  249 => 62,  238 => 54,  234 => 53,  225 => 47,  221 => 46,  217 => 45,  211 => 42,  207 => 41,  200 => 36,  187 => 35,  174 => 29,  168 => 26,  162 => 23,  158 => 22,  146 => 12,  133 => 11,  110 => 6,  96 => 1127,  94 => 1112,  91 => 1111,  89 => 1032,  86 => 1031,  83 => 105,  81 => 35,  75 => 31,  73 => 11,  65 => 6,  58 => 2,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">

    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %}Fruitables - Vegetable Website Template{% endblock %}</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

        {% block css %}
        <!-- Google Web Fonts -->
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\" rel=\"stylesheet\"> 

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link href=\"{{ asset('lib/lightbox/css/lightbox.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">

        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"{{ asset('frontoffice/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"{{ asset('frontoffice/css/style.css') }}\" rel=\"stylesheet\">
        {% endblock %}

    </head>

    <body>
    {% block navbar %}
<!-- Navbar start -->
<div class=\"container-fluid fixed-top\">
    <div class=\"container topbar bg-primary d-none d-lg-block\">
        <div class=\"d-flex justify-content-between\">
            <div class=\"top-info ps-2\">
                <small class=\"me-3\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i> <a href=\"#\" class=\"text-white\">{{ 'Esprit'|trans }}</a></small>
                <small class=\"me-3\"><i class=\"fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">{{ 'Agrivision@Example.com'|trans }}</a></small>
            </div>
            <div class=\"top-link pe-2\">
                <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">{{ 'Privacy Policy'|trans }}</small>/</a>
                <a href=\"#\" class=\"text-white\"><small class=\"text-white mx-2\">{{ 'Terms of Use'|trans }}</small>/</a>
                <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">{{ 'Sales and Refunds'|trans }}</small></a>
            </div>
        </div>
    </div>
    <div class=\"container px-0\">
        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
            <a href=\"{{ path('app_page') }}\" class=\"navbar-brand ms-auto\">
                <img src=\"{{ asset('frontoffice/img/logoapp.png') }}\" alt=\"Logo\" class=\"img-fluid\" style=\"height: 80px; width: auto;\">
            </a>

            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"{{ path('app_page') }}\" class=\"nav-item nav-link active\">{{ 'Accueil'|trans }}</a>
                    <a href=\"{{ path('app_temp_shop') }}\" class=\"nav-item nav-link\">{{ 'Produits'|trans }}</a>
                    <a href=\"{{ path('app_temp_shop_detail', {'id': 1}) }}\" class=\"nav-item nav-link\">{{ 'Produits Detail'|trans }}</a>
                    {% if app.user %}
                        <a href=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"nav-item nav-link\">{{ 'Parcelle'|trans }}</a>
                    {% endif %}
                    {% if app.user %}
                        <a href=\"{{ path('app_offre') }}\" class=\"nav-item nav-link\">{{ 'Offres disponibles'|trans }}</a>
                    {% endif %}
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">{{ 'Matériel Agricole'|trans }}</a>
                        <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                            <a href=\"{{ path('app_materielvente_index') }}\" class=\"dropdown-item\">{{ 'Matériel A Vendre'|trans }}</a>
                            <a href=\"{{ path('app_materiellocation_index') }}\" class=\"dropdown-item\">{{ 'Matériel A Louer'|trans }}</a>
                        </div>
                    </div>
                </div>
                <div class=\"d-flex m-3 me-0\">
                    {% if app.user %}
                        <a href=\"{{ path('panier_afficher') }}\" class=\"position-relative me-4 my-auto\">
                            <i class=\"fa fa-shopping-bag fa-2x\"></i>
                            <span class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">{{ cartItemCount is defined ? cartItemCount : 0 }}</span>
                        </a>
                    {% endif %}
                    {% if app.user %}
                        <a href=\"{{ path('app_profile') }}\" class=\"my-auto\">
                            <i class=\"fas fa-user fa-2x\"></i>
                        </a>
                    {% endif %}
                </div>
                <div class=\"ms-auto\">
                    <a href=\"/{{ app.user ? 'logout' : 'login' }}\" class=\"btn btn-warning text-white fw-bold px-4 py-2 rounded-pill\">
                        {{ app.user ? 'Déconnexion'|trans : 'Connexion'|trans }}
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

{# Ensure you are properly closing any open blocks here #}
{% endblock %}
    {% block body %}


        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
            <div class=\"spinner-grow text-primary\" role=\"status\"></div>
        </div>
        <!-- Spinner End -->


       


        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


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
                                    <img src=\"{{asset('frontoffice/img/hero-img-1.png')}}\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                                </div>
                                <div class=\"carousel-item rounded\">
                                    <img src=\"{{asset('frontoffice/img/hero-img-2.jpg')}}\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Vesitables</a>
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


        <!-- Featurs Section Start -->
        <div class=\"container-fluid featurs py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-car-side fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Free Shipping</h5>
                                <p class=\"mb-0\">Free on order over \$300</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-user-shield fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>Security Payment</h5>
                                <p class=\"mb-0\">100% security payment</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fas fa-exchange-alt fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>30 Day Return</h5>
                                <p class=\"mb-0\">30 day money guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"featurs-item text-center rounded bg-light p-4\">
                            <div class=\"featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto\">
                                <i class=\"fa fa-phone-alt fa-3x text-white\"></i>
                            </div>
                            <div class=\"featurs-content text-center\">
                                <h5>24/7 Support</h5>
                                <p class=\"mb-0\">Support every time fast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->


        <!-- Fruits Shop Start-->
        <div class=\"container-fluid fruite py-5\">
            <div class=\"container py-5\">
                <div class=\"tab-class text-center\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-4 text-start\">
                            <h1>Our Organic Products</h1>
                        </div>
                        <div class=\"col-lg-8 text-end\">
                            <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">All Products</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex py-2 m-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-2\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Vegetables</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-3\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Fruits</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-4\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Bread</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"d-flex m-2 py-2 bg-light rounded-pill\" data-bs-toggle=\"pill\" href=\"#tab-5\">
                                        <span class=\"text-dark\" style=\"width: 130px;\">Meat</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"tab-content\">
                        <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-5.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-5.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-2.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-4.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-3.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Banana</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-1.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-2.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-5.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-5.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-2.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-1.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-6.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apple</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-4\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-5.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-4.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Apricots</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-5\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"row g-4\">
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-3.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Banana</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-2.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{asset('frontoffice/img/fruite-item-1.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">Fruits</div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                                        <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->


        <!-- Featurs Start -->
        <div class=\"container-fluid service py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4 justify-content-center\">
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\">
                            <div class=\"service-item bg-secondary rounded border border-secondary\">
                                <img src=\"{{asset('frontoffice/img/featur-1.jpg')}}\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom\">
                                    <div class=\"service-content bg-primary text-center p-4 rounded\">
                                        <h5 class=\"text-white\">Fresh Apples</h5>
                                        <h3 class=\"mb-0\">20% OFF</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\">
                            <div class=\"service-item bg-dark rounded border border-dark\">
                                <img src=\"{{asset('frontoffice/img/featur-2.jpg')}}\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom\">
                                    <div class=\"service-content bg-light text-center p-4 rounded\">
                                        <h5 class=\"text-primary\">Tasty Fruits</h5>
                                        <h3 class=\"mb-0\">Free delivery</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-lg-4\">
                        <a href=\"#\">
                            <div class=\"service-item bg-primary rounded border border-primary\">
                                <img src=\"{{asset('frontoffice/img/featur-3.jpg')}}\" class=\"img-fluid rounded-top w-100\" alt=\"\">
                                <div class=\"px-4 rounded-bottom\">
                                    <div class=\"service-content bg-secondary text-center p-4 rounded\">
                                        <h5 class=\"text-white\">Exotic Vegitable</h5>
                                        <h3 class=\"mb-0\">Discount 30\$</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->


    


        <!-- Banner Section Start-->
        <div class=\"container-fluid banner bg-secondary my-5\">
            <div class=\"container py-5\">
                <div class=\"row g-4 align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"py-4\">
                            <h1 class=\"display-3 text-white\">Fresh Exotic Fruits</h1>
                            <p class=\"fw-normal display-3 text-dark mb-4\">in Our Store</p>
                            <p class=\"mb-4 text-dark\">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                            <a href=\"#\" class=\"banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5\">BUY</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"position-relative\">
                            <img src=\"{{asset('frontoffice/img/baner-1.png')}}\" class=\"img-fluid w-100 rounded\" alt=\"\">
                            <div class=\"d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute\" style=\"width: 140px; height: 140px; top: 0; left: 0;\">
                                <h1 style=\"font-size: 100px;\">1</h1>
                                <div class=\"d-flex flex-column\">
                                    <span class=\"h2 mb-0\">50\$</span>
                                    <span class=\"h4 text-muted mb-0\">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
                <div class=\"text-center mx-auto mb-5\" style=\"max-width: 700px;\">
                    <h1 class=\"display-4\">Bestseller Products</h1>
                    <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{asset('frontoffice/img/best-product-1.jpg')}}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{asset('frontoffice/img/best-product-2.jpg')}}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{asset('frontoffice/img/best-product-3.jpg')}}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{asset('frontoffice/img/best-product-4.jpg')}}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{asset('frontoffice/img/best-product-5.jpg')}}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"p-4 rounded bg-light\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-6\">
                                    <img src=\"{{asset('frontoffice/img/best-product-6.jpg')}}\" class=\"img-fluid rounded-circle w-100\" alt=\"\">
                                </div>
                                <div class=\"col-6\">
                                    <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                    <div class=\"d-flex my-3\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                    <h4 class=\"mb-3\">3.12 \$</h4>
                                    <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"{{asset('frontoffice/img/fruite-item-1.jpg')}}\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 \$</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"{{asset('frontoffice/img/fruite-item-2.jpg')}}\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 \$</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"{{asset('frontoffice/img/fruite-item-3.jpg')}}\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-4\">
                                <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 \$</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"text-center\">
                            <img src=\"{{asset('frontoffice/img/fruite-item-4.jpg')}}\" class=\"img-fluid rounded\" alt=\"\">
                            <div class=\"py-2\">
                                <a href=\"#\" class=\"h5\">Organic Tomato</a>
                                <div class=\"d-flex my-3 justify-content-center\">
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star text-primary\"></i>
                                    <i class=\"fas fa-star\"></i>
                                </div>
                                <h4 class=\"mb-3\">3.12 \$</h4>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


        <!-- Fact Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"bg-light p-5 rounded\">
                    <div class=\"row g-4 justify-content-center\">
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-6 col-xl-3\">
                            <div class=\"counter bg-white rounded p-5\">
                                <i class=\"fa fa-users text-secondary\"></i>
                                <h4>Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- Tastimonial Start -->
        <div class=\"container-fluid testimonial py-5\">
            <div class=\"container py-5\">
                <div class=\"testimonial-header text-center\">
                    <h4 class=\"text-primary\">Our Testimonial</h4>
                    <h1 class=\"display-5 mb-5 text-dark\">Our Client Saying!</h1>
                </div>
                <div class=\"owl-carousel testimonial-carousel\">
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"{{asset('frontoffice/img/testimonial-1.jpg')}}\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Client Name</h4>
                                    <p class=\"m-0 pb-3\">Profession</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"{{asset('frontoffice/img/testimonial-1.jpg')}}\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Client Name</h4>
                                    <p class=\"m-0 pb-3\">Profession</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item img-border-radius bg-light rounded p-4\">
                        <div class=\"position-relative\">
                            <i class=\"fa fa-quote-right fa-2x text-secondary position-absolute\" style=\"bottom: 30px; right: 0;\"></i>
                            <div class=\"mb-4 pb-4 border-bottom border-secondary\">
                                <p class=\"mb-0\">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class=\"d-flex align-items-center flex-nowrap\">
                                <div class=\"bg-secondary rounded\">
                                    <img src=\"{{asset('frontoffice/img/testimonial-1.jpg')}}\" class=\"img-fluid rounded\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                </div>
                                <div class=\"ms-4 d-block\">
                                    <h4 class=\"text-dark\">Client Name</h4>
                                    <p class=\"m-0 pb-3\">Profession</p>
                                    <div class=\"d-flex pe-5\">
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                        <i class=\"fas fa-star text-primary\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->


        



        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>   

        {% block js %}
    <!-- JavaScript Libraries -->
    <script src=\"{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js')}}\"></script>
    <script src=\"{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{asset('lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{asset('lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('lib/lightbox/js/lightbox.min.js')}}\"></script>
    <script src=\"{{asset('lib/owlcarousel/owl.carousel.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{asset('js/main.js')}}\"></script>
    {% endblock %}


    {% endblock %}
    </body>
    {% block footer %}
    <!-- Footer content -->
    <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
        <div class=\"container py-5\">

            <form id=\"localeForm\" method=\"get\" action=\"\">
                <select id=\"localeSelect\" name=\"locale\" onchange=\"changeLocale()\">
                    <option value=\"none\" {{ app.request.locale == 'fake_locale' ? 'selected' : '' }}>{{ 'No Translation'|trans }}</option>
                    <option value=\"ar\" {{ app.request.locale == 'ar' ? 'selected' : '' }}>{{ 'Arabic'|trans }}</option>
                </select>
            </form>

            <script>
                function changeLocale() {
                    var selectedLocale = document.getElementById(\"localeSelect\").value;
                    var actionUrl = \"{{ path('change_locale', {locale: 'REPLACE_LOCALE'}) }}\";
                    actionUrl = actionUrl.replace(\"REPLACE_LOCALE\", selectedLocale);
                    document.getElementById(\"localeForm\").action = actionUrl;
                    document.getElementById(\"localeForm\").submit();
                }
            </script>

            <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5);\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-3\">
                        <a href=\"{{ path('app_page') }}\" class=\"navbar-brand ms-auto\">
                            <img src=\"{{ asset('frontoffice/img/logoapp.png') }}\" alt=\"Logo\" class=\"img-fluid\" style=\"height: 80px; width: auto;\">
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"position-relative mx-auto\">
                            <input class=\"form-control border-0 w-100 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"{{ 'Your Email'|trans }}\">
                            <button type=\"submit\" class=\"btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white\" style=\"top: 0; right: 0;\">{{ 'Subscribe Now'|trans }}</button>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div class=\"d-flex justify-content-end pt-3\">
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-secondary btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <!-- Empty column -->
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <!-- Additional footer content can go here -->
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">{{ 'Team'|trans }}</h4>
                        <a class=\"btn-link\" href=\"\">{{ 'Med Nour Romdhani'|trans }}</a>
                        <a class=\"btn-link\" href=\"\">{{ 'Maissa Khemiri'|trans }}</a>
                        <a class=\"btn-link\" href=\"\">{{ 'Baligh Laouini'|trans }}</a>
                        <a class=\"btn-link\" href=\"\">{{ 'Yosr Sfaihi'|trans }}</a>
                        <a class=\"btn-link\" href=\"\">{{ 'Nihel Hassad'|trans }}</a>
                        <a class=\"btn-link\" href=\"\">{{ 'Takoua Aouadi'|trans }}</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">{{ 'Contact'|trans }}</h4>
                        <p>{{ 'Address'|trans }}: Esprit</p>
                        <p>{{ 'Email'|trans }}: Agrivision@gmail.com</p>
                        <p>{{ 'Phone'|trans }}: 56988796</p>
                        <p>{{ 'Payment Accepted'|trans }}</p>
                        <img src=\"{{asset('frontoffice/img/payment.png')}}\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block copyright %}
    <!-- Copyright content -->
    <div class=\"container-fluid copyright bg-dark py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    <span class=\"text-light\"><a href=\"#\"><i class=\"fas fa-copyright text-light me-2\"></i>Reap.tn</a>, All right reserved.</span>
                </div>
                <div class=\"col-md-6 my-auto text-center text-md-end text-white\">
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}


</html>
", "base.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\base.html.twig");
    }
}
