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

/* offre/edit.html.twig */
class __TwigTemplate_e9a7c9e0c4803d47445a6abf2870491c extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Edit Offre";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <!-- Navbar Start -->
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
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        yield "\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">Fruitables</h1></a>
                <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars text-primary\"></span>
                </button>
                <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav mx-auto\">
                        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"nav-item nav-link\">Shop</a>
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_detail");
        yield "\" class=\"nav-item nav-link\">Shop Detail</a>
                        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        yield "\" class=\"nav-item nav-link\">Offres</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" class=\"dropdown-item\">Cart</a>
                                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chackout");
        yield "\" class=\"dropdown-item\">Chackout</a>
                                <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                            </div>
                        </div>
                        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link\">Contact</a>
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

    <div class=\"container mt-5 pt-5\">
        <h1 class=\"text-center\">Edit Offre</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <table class=\"table table-bordered mt-4\">
                    <tbody>
                        <tr>
                            <td class=\"fw-bold text-end\" style=\"width: 30%;\">Edit Form:</td>
                            <td>";
        // line 68
        yield Twig\Extension\CoreExtension::include($this->env, $context, "offre/_form.html.twig", ["button_label" => "Update"]);
        yield "</td>
                        </tr>
                        <tr>
                            <td class=\"fw-bold text-end\">Back to List:</td>
                            <td><a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        yield "\" class=\"btn btn-secondary\">Back</a></td>
                        </tr>
                        <tr>
                            <td class=\"fw-bold text-end\">Delete Offer:</td>
                            <td>";
        // line 76
        yield Twig\Extension\CoreExtension::include($this->env, $context, "offre/_delete_form.html.twig");
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-3\">Contact</h4>
                    <p>Address: 1429 Netus Rd, NY 48247</p>
                    <p>Email: Example@gmail.com</p>
                    <p>Phone: +0123 4567 8910</p>
                    <p>Payment Accepted</p>
                    <img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/payment.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class=\"container-fluid copyright bg-dark py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    <span class=\"text-light\"><a href=\"#\"><i class=\"fas fa-copyright text-light me-2\"></i>Your Site Name</a>, All right reserved.</span>
                </div>
                <div class=\"col-md-6 my-auto text-center text-md-end text-white\">
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>
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
        return "offre/edit.html.twig";
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
        return array (  229 => 94,  208 => 76,  201 => 72,  194 => 68,  165 => 42,  159 => 39,  155 => 38,  151 => 37,  147 => 36,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Offre{% endblock %}

{% block body %}
    <!-- Navbar Start -->
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
                <a href=\"{{asset('index.html')}}\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">Fruitables</h1></a>
                <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars text-primary\"></span>
                </button>
                <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav mx-auto\">
                        <a href=\"{{path('app_page')}}\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"{{path('app_shop')}}\" class=\"nav-item nav-link\">Shop</a>
                        <a href=\"{{path('app_shop_detail')}}\" class=\"nav-item nav-link\">Shop Detail</a>
                        <a href=\"{{path('app_offre')}}\" class=\"nav-item nav-link\">Offres</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                <a href=\"{{path('app_cart')}}\" class=\"dropdown-item\">Cart</a>
                                <a href=\"{{path('app_chackout')}}\" class=\"dropdown-item\">Chackout</a>
                                <a href=\"{{path('app_testimonial')}}\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"{{path('app_404')}}\" class=\"dropdown-item\">404 Page</a>
                            </div>
                        </div>
                        <a href=\"{{path('app_contact')}}\" class=\"nav-item nav-link\">Contact</a>
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

    <div class=\"container mt-5 pt-5\">
        <h1 class=\"text-center\">Edit Offre</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <table class=\"table table-bordered mt-4\">
                    <tbody>
                        <tr>
                            <td class=\"fw-bold text-end\" style=\"width: 30%;\">Edit Form:</td>
                            <td>{{ include('offre/_form.html.twig', {'button_label': 'Update'}) }}</td>
                        </tr>
                        <tr>
                            <td class=\"fw-bold text-end\">Back to List:</td>
                            <td><a href=\"{{ path('app_offre_index') }}\" class=\"btn btn-secondary\">Back</a></td>
                        </tr>
                        <tr>
                            <td class=\"fw-bold text-end\">Delete Offer:</td>
                            <td>{{ include('offre/_delete_form.html.twig') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <h4 class=\"text-light mb-3\">Contact</h4>
                    <p>Address: 1429 Netus Rd, NY 48247</p>
                    <p>Email: Example@gmail.com</p>
                    <p>Phone: +0123 4567 8910</p>
                    <p>Payment Accepted</p>
                    <img src=\"{{asset('frontoffice/img/payment.png')}}\" class=\"img-fluid\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class=\"container-fluid copyright bg-dark py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    <span class=\"text-light\"><a href=\"#\"><i class=\"fas fa-copyright text-light me-2\"></i>Your Site Name</a>, All right reserved.</span>
                </div>
                <div class=\"col-md-6 my-auto text-center text-md-end text-white\">
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>
{% endblock %}", "offre/edit.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\offre\\edit.html.twig");
    }
}
