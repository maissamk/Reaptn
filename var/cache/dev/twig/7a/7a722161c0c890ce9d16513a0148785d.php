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
class __TwigTemplate_9fcbb9a5fc6c1c464a47eef301fcf8d4 extends Template
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
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
<html lang=\"en\">

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
        // line 33
        yield "
        
    </head>

    <body>
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
                    <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        yield "\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">Fruitables</h1></a>
                    <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                        <span class=\"fa fa-bars text-primary\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mx-auto\">
                        
                            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"nav-item nav-link\">Shop</a>
                            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_detail");
        yield "\" class=\"nav-item nav-link\">Shop Detail</a>
                            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        yield "\" class=\"nav-item nav-link\">Offres disponibles</a>
                            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscriptionoffre");
        yield "\" class=\"nav-item nav-link\">s'inscrire à un offre</a>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                                <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                    <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_index");
        yield "\" class=\"dropdown-item\">Cart</a>
                                    <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chackout");
        yield "\" class=\"dropdown-item\">Chackout</a>
                                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                                </div>
                                
                            </div>
                            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link\">Contact</a>

                        </div>
                        <div class=\"d-flex m-3 me-0\">
    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\">
        <i class=\"fas fa-search text-primary\"></i>
    </button>
    <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_afficher");
        yield "\" class=\"position-relative me-4 my-auto\">
        <i class=\"fa fa-shopping-bag fa-2x\"></i>
       <span class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">";
        // line 86
        yield ((array_key_exists("cartItemCount", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartItemCount"]) || array_key_exists("cartItemCount", $context) ? $context["cartItemCount"] : (function () { throw new RuntimeError('Variable "cartItemCount" does not exist.', 86, $this->source); })()), "html", null, true)) : (0));
        yield "
</span>

    </a>
    <a href=\"#\" class=\"my-auto\">
        <i class=\"fas fa-user fa-2x\"></i>
    </a>
</div>

                        <!-- Refined \"s'inscrire\" Button -->
<!-- Refined \"s'inscrire\" Button -->
<div class=\"ms-auto\">
    <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"btn btn-warning text-white fw-bold px-4 py-2 rounded-pill\">S'inscrire</a>
</div>

                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
    ";
        // line 106
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1152
        yield "    </body>
    <!-- Footer Start -->
        <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
            <div class=\"container py-5\">
                <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;\">
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
        // line 1218
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
                        <!--/*** This template is free as long as y
                        keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <script>
        </script>

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

        <link rel=\"preconnect\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com"), "html", null, true);
        yield "\">
        <link rel=\"preconnect\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        yield "\" crossorigin>
        <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"), "html", null, true);
        yield "\" rel=\"stylesheet\"> 

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://use.fontawesome.com/releases/v5.15.4/css/all.css"), "html", null, true);
        yield "\"/>
        <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">


        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
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

        // line 107
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
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/hero-img-1.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                                </div>
                                <div class=\"carousel-item rounded\">
                                    <img src=\"";
        // line 159
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
        // line 279
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
        // line 295
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
        // line 311
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
        // line 327
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
        // line 343
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
        // line 359
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
        // line 375
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
        // line 391
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
        // line 415
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
        // line 431
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
        // line 455
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
        // line 471
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
        // line 495
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
        // line 511
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
        // line 535
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
        // line 551
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
        // line 567
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
        // line 598
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
        // line 611
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
        // line 624
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


        <!-- Vesitable Shop Start-->
        <div class=\"container-fluid vesitable py-5\">
            <div class=\"container py-5\">
                <h1 class=\"mb-0\">Fresh Organic Vegetables</h1>
                <div class=\"owl-carousel vegetable-carousel justify-content-center\">
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/vegetable-item-6.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/vegetable-item-1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/vegetable-item-3.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top bg-light\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Banana</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/vegetable-item-4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Bell Papper</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/vegetable-item-5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"";
        // line 717
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/vegetable-item-6.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/vegetable-item-5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/vegetable-item-6.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vesitable Shop End -->


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
        // line 777
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
        // line 805
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
        // line 826
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
        // line 847
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
        // line 868
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
        // line 889
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
        // line 910
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
        // line 929
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
        // line 946
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
        // line 963
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
        // line 980
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
        // line 1058
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
        // line 1083
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
        // line 1108
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
        // line 1137
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 1149
        yield "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1137
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

        // line 1138
        yield "    <!-- JavaScript Libraries -->
    <script src=\"";
        // line 1139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 1147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
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
        return array (  1627 => 1147,  1621 => 1144,  1617 => 1143,  1613 => 1142,  1609 => 1141,  1605 => 1140,  1601 => 1139,  1598 => 1138,  1585 => 1137,  1572 => 1149,  1570 => 1137,  1538 => 1108,  1510 => 1083,  1482 => 1058,  1401 => 980,  1381 => 963,  1361 => 946,  1341 => 929,  1319 => 910,  1295 => 889,  1271 => 868,  1247 => 847,  1223 => 826,  1199 => 805,  1168 => 777,  1133 => 745,  1116 => 731,  1099 => 717,  1082 => 703,  1065 => 689,  1048 => 675,  1031 => 661,  1014 => 647,  988 => 624,  972 => 611,  956 => 598,  922 => 567,  903 => 551,  884 => 535,  857 => 511,  838 => 495,  811 => 471,  792 => 455,  765 => 431,  746 => 415,  719 => 391,  700 => 375,  681 => 359,  662 => 343,  643 => 327,  624 => 311,  605 => 295,  586 => 279,  463 => 159,  456 => 155,  406 => 107,  393 => 106,  380 => 31,  374 => 28,  367 => 24,  363 => 23,  357 => 20,  353 => 19,  347 => 16,  343 => 15,  339 => 14,  335 => 12,  322 => 11,  299 => 6,  256 => 1218,  188 => 1152,  186 => 106,  175 => 98,  160 => 86,  155 => 84,  145 => 77,  138 => 73,  134 => 72,  130 => 71,  126 => 70,  119 => 66,  115 => 65,  111 => 64,  107 => 63,  103 => 62,  93 => 55,  69 => 33,  67 => 11,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %}Fruitables - Vegetable Website Template{% endblock %}</title>
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"keywords\">
        <meta content=\"\" name=\"description\">

         {% block css%}
        <!-- Google Web Fonts -->

        <link rel=\"preconnect\" href=\"{{asset('https://fonts.googleapis.com')}}\">
        <link rel=\"preconnect\" href=\"{{asset('https://fonts.gstatic.com')}}\" crossorigin>
        <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap')}}\" rel=\"stylesheet\"> 

        <!-- Icon Font Stylesheet -->
        <link rel=\"stylesheet\" href=\"{{asset('https://use.fontawesome.com/releases/v5.15.4/css/all.css')}}\"/>
        <link href=\"{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}\" rel=\"stylesheet\">

        <!-- Libraries Stylesheet -->
        <link href=\"{{asset('lib/lightbox/css/lightbox.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">


        <!-- Customized Bootstrap Stylesheet -->
        <link href=\"{{asset('frontoffice/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

        <!-- Template Stylesheet -->
        <link href=\"{{asset('frontoffice/css/style.css')}}\" rel=\"stylesheet\">
        {% endblock %}

        
    </head>

    <body>
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
                            <a href=\"{{path('app_page')}}\" class=\"nav-item nav-link\">Shop</a>
                            <a href=\"{{path('app_shop_detail')}}\" class=\"nav-item nav-link\">Shop Detail</a>
                            <a href=\"{{path('app_offre')}}\" class=\"nav-item nav-link\">Offres disponibles</a>
                            <a href=\"{{path('app_inscriptionoffre')}}\" class=\"nav-item nav-link\">s'inscrire à un offre</a>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                                <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                    <a href=\"{{path('app_materielvente_index')}}\" class=\"dropdown-item\">Cart</a>
                                    <a href=\"{{path('app_chackout')}}\" class=\"dropdown-item\">Chackout</a>
                                    <a href=\"{{path('app_testimonial')}}\" class=\"dropdown-item\">Testimonial</a>
                                    <a href=\"{{path('app_404')}}\" class=\"dropdown-item\">404 Page</a>
                                </div>
                                
                            </div>
                            <a href=\"{{path('app_contact')}}\" class=\"nav-item nav-link\">Contact</a>

                        </div>
                        <div class=\"d-flex m-3 me-0\">
    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\">
        <i class=\"fas fa-search text-primary\"></i>
    </button>
    <a href=\"{{ path('panier_afficher') }}\" class=\"position-relative me-4 my-auto\">
        <i class=\"fa fa-shopping-bag fa-2x\"></i>
       <span class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">{{ cartItemCount is defined ? cartItemCount : 0 }}
</span>

    </a>
    <a href=\"#\" class=\"my-auto\">
        <i class=\"fas fa-user fa-2x\"></i>
    </a>
</div>

                        <!-- Refined \"s'inscrire\" Button -->
<!-- Refined \"s'inscrire\" Button -->
<div class=\"ms-auto\">
    <a href=\"{{ path('app_page') }}\" class=\"btn btn-warning text-white fw-bold px-4 py-2 rounded-pill\">S'inscrire</a>
</div>

                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
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


        <!-- Vesitable Shop Start-->
        <div class=\"container-fluid vesitable py-5\">
            <div class=\"container py-5\">
                <h1 class=\"mb-0\">Fresh Organic Vegetables</h1>
                <div class=\"owl-carousel vegetable-carousel justify-content-center\">
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"{{asset('frontoffice/img/vegetable-item-6.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"{{asset('frontoffice/img/vegetable-item-1.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$4.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"{{asset('frontoffice/img/vegetable-item-3.png')}}\" class=\"img-fluid w-100 rounded-top bg-light\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Banana</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"{{asset('frontoffice/img/vegetable-item-4.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Bell Papper</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"{{asset('frontoffice/img/vegetable-item-5.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"{{asset('frontoffice/img/vegetable-item-6.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"{{asset('frontoffice/img/vegetable-item-5.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"{{asset('frontoffice/img/vegetable-item-6.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold mb-0\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vesitable Shop End -->


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
    <!-- Footer Start -->
        <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
            <div class=\"container py-5\">
                <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;\">
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
                        <!--/*** This template is free as long as y
                        keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <script>
        </script>

</html>
", "base.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\base.html.twig");
    }
}
