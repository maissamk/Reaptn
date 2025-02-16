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

/* offre/index.html.twig */
class __TwigTemplate_f7c4c89f31740793e3d73a5d2da52d2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/index.html.twig", 1);
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

        yield "Offre index";
        
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
        yield "    <!-- Navbar start -->
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
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" class=\"dropdown-item\">Cart</a>
                                <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chackout");
        yield "\" class=\"dropdown-item\">Chackout</a>
                                <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                            </div>
                        </div>
                        <a href=\"";
        // line 43
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

    <!-- Added padding-top to prevent overlap -->
    <div class=\"pt-5\">
    
    <div class=\"container mt-5 pt-5\">
        <h1>Offre index</h1>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ida</th>
                    <th>Ide</th>
                    <th>Statut</th>
                    <th>Descr</th>
                    <th>Titre</th>
                    <th>Comp</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 81
            yield "                <tr>
                    <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                    <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "ida", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                    <td>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "ide", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
                    <td>";
            // line 85
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "statut", [], "any", false, false, false, 85)) ? ("Yes") : ("No"));
            yield "</td>
                    <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "descr", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                    <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                    <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "comp", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\">show</a>
                        <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\">edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 94
        if (!$context['_iterated']) {
            // line 95
            yield "                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "            </tbody>
        </table>

        <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_new");
        yield "\">Create new</a>
    </div>

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5);\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-3\">
                        <a href=\"#\">
                            <h1 class=\"text-primary mb-0\">Fruitables</h1>
                            <p class=\"text-secondary mb-0\">Fresh products</p>
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"position-relative mx-auto\">
                            <input class=\"form-control border-0 w-100 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Your Email\">
                            <button type=\"submit\" class=\"btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white\" style=\"top: 0; right: 0;\">Subscribe Now</button>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div class=\"d-flex justify-content-end pt-3\">
                            <a class=\"btn  btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-secondary btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">Why People Like us!</h4>
                        <p class=\"mb-4\">typesetting, remaining essentially unchanged. It was 
                            popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                        <a href=\"\" class=\"btn border-secondary py-2 px-4 rounded-pill text-primary\">Read More</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">Shop Info</h4>
                        <a class=\"btn-link\" href=\"\">About Us</a>
                        <a class=\"btn-link\" href=\"\">Contact Us</a>
                        <a class=\"btn-link\" href=\"\">Privacy Policy</a>
                        <a class=\"btn-link\" href=\"\">Terms & Condition</a>
                        <a class=\"btn-link\" href=\"\">Return Policy</a>
                        <a class=\"btn-link\" href=\"\">FAQs & Help</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">Account</h4>
                        <a class=\"btn-link\" href=\"\">My Account</a>
                        <a class=\"btn-link\" href=\"\">Shop details</a>
                        <a class=\"btn-link\" href=\"\">Shopping Cart</a>
                        <a class=\"btn-link\" href=\"\">Wishlist</a>
                        <a class=\"btn-link\" href=\"\">Order History</a>
                        <a class=\"btn-link\" href=\"\">International Orders</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">Contact</h4>
                        <p>Address: 1429 Netus Rd, NY 48247</p>
                        <p>Email: Example@gmail.com</p>
                        <p>Phone: +0123 4567 8910</p>
                        <p>Payment Accepted</p>
                        <img src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/payment.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                    </div>
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
        return "offre/index.html.twig";
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
        return array (  342 => 170,  271 => 102,  266 => 99,  257 => 95,  255 => 94,  247 => 91,  243 => 90,  238 => 88,  234 => 87,  230 => 86,  226 => 85,  222 => 84,  218 => 83,  214 => 82,  211 => 81,  206 => 80,  166 => 43,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre index{% endblock %}

{% block body %}
    <!-- Navbar start -->
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

    <!-- Added padding-top to prevent overlap -->
    <div class=\"pt-5\">
    
    <div class=\"container mt-5 pt-5\">
        <h1>Offre index</h1>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ida</th>
                    <th>Ide</th>
                    <th>Statut</th>
                    <th>Descr</th>
                    <th>Titre</th>
                    <th>Comp</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            {% for offre in offres %}
                <tr>
                    <td>{{ offre.id }}</td>
                    <td>{{ offre.ida }}</td>
                    <td>{{ offre.ide }}</td>
                    <td>{{ offre.statut ? 'Yes' : 'No' }}</td>
                    <td>{{ offre.descr }}</td>
                    <td>{{ offre.titre }}</td>
                    <td>{{ offre.comp }}</td>
                    <td>
                        <a href=\"{{ path('app_offre_show', {'id': offre.id}) }}\">show</a>
                        <a href=\"{{ path('app_offre_edit', {'id': offre.id}) }}\">edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_offre_new') }}\">Create new</a>
    </div>

    <!-- Footer Start -->
    <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5);\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-3\">
                        <a href=\"#\">
                            <h1 class=\"text-primary mb-0\">Fruitables</h1>
                            <p class=\"text-secondary mb-0\">Fresh products</p>
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"position-relative mx-auto\">
                            <input class=\"form-control border-0 w-100 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Your Email\">
                            <button type=\"submit\" class=\"btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white\" style=\"top: 0; right: 0;\">Subscribe Now</button>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div class=\"d-flex justify-content-end pt-3\">
                            <a class=\"btn  btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-secondary btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-light mb-3\">Why People Like us!</h4>
                        <p class=\"mb-4\">typesetting, remaining essentially unchanged. It was 
                            popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                        <a href=\"\" class=\"btn border-secondary py-2 px-4 rounded-pill text-primary\">Read More</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">Shop Info</h4>
                        <a class=\"btn-link\" href=\"\">About Us</a>
                        <a class=\"btn-link\" href=\"\">Contact Us</a>
                        <a class=\"btn-link\" href=\"\">Privacy Policy</a>
                        <a class=\"btn-link\" href=\"\">Terms & Condition</a>
                        <a class=\"btn-link\" href=\"\">Return Policy</a>
                        <a class=\"btn-link\" href=\"\">FAQs & Help</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"d-flex flex-column text-start footer-item\">
                        <h4 class=\"text-light mb-3\">Account</h4>
                        <a class=\"btn-link\" href=\"\">My Account</a>
                        <a class=\"btn-link\" href=\"\">Shop details</a>
                        <a class=\"btn-link\" href=\"\">Shopping Cart</a>
                        <a class=\"btn-link\" href=\"\">Wishlist</a>
                        <a class=\"btn-link\" href=\"\">Order History</a>
                        <a class=\"btn-link\" href=\"\">International Orders</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
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
{% endblock %}", "offre/index.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\offre\\index.html.twig");
    }
}
