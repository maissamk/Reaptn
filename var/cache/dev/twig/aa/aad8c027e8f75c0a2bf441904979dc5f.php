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

/* page/index.html.twig */
class __TwigTemplate_0cea2094902e6b8b109d9fd214043399 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
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

        yield "Home";
        
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
        yield "

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
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        yield "\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">Fruitables</h1></a>
                    <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                        <span class=\"fa fa-bars text-primary\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mx-auto\">
                        
                            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_new");
        yield "\" class=\"nav-item nav-link\">Shop</a>
                            <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_detail");
        yield "\" class=\"nav-item nav-link\">Shop Detail</a>
                            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        yield "\" class=\"nav-item nav-link\">Offres disponibles</a>
                            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscriptionoffre");
        yield "\" class=\"nav-item nav-link\">s'inscrire à un offre</a>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                                <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                    <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_index");
        yield "\" class=\"dropdown-item\">Cart</a>
                                    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chackout");
        yield "\" class=\"dropdown-item\">Chackout</a>
                                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                                    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                                </div>
                                
                            </div>
                            <a href=\"";
        // line 47
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
                        <!-- Refined \"s'inscrire\" Button -->
<!-- Refined \"s'inscrire\" Button -->
<div class=\"ms-auto\">
    <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_new");
        yield "\" class=\"btn btn-warning text-white fw-bold px-4 py-2 rounded-pill\">S'inscrire</a>
</div>

                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


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
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/hero-img-1.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                                </div>
                                <div class=\"carousel-item rounded\">
                                    <img src=\"";
        // line 116
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
        // line 236
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
        // line 252
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
        // line 268
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
        // line 284
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
        // line 300
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
        // line 316
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
        // line 332
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
        // line 348
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
        // line 372
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
        // line 388
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
        // line 412
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
        // line 428
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
        // line 452
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
        // line 468
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
        // line 492
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
        // line 508
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
        // line 524
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
        // line 555
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
        // line 568
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
        // line 581
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
        // line 604
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
        // line 618
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
        // line 632
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
        // line 646
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
        // line 660
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
        // line 674
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
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontofficeimg/vegetable-item-5.jpg"), "html", null, true);
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
        // line 702
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
        // line 734
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
        // line 762
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
        // line 783
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
        // line 804
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
        // line 825
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
        // line 846
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
        // line 867
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
        // line 886
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
        // line 903
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
        // line 920
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
        // line 937
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
        // line 1015
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
        // line 1040
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
        // line 1065
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
        // line 1152
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
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
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
        return "page/index.html.twig";
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
        return array (  1416 => 1152,  1326 => 1065,  1298 => 1040,  1270 => 1015,  1189 => 937,  1169 => 920,  1149 => 903,  1129 => 886,  1107 => 867,  1083 => 846,  1059 => 825,  1035 => 804,  1011 => 783,  987 => 762,  956 => 734,  921 => 702,  904 => 688,  887 => 674,  870 => 660,  853 => 646,  836 => 632,  819 => 618,  802 => 604,  776 => 581,  760 => 568,  744 => 555,  710 => 524,  691 => 508,  672 => 492,  645 => 468,  626 => 452,  599 => 428,  580 => 412,  553 => 388,  534 => 372,  507 => 348,  488 => 332,  469 => 316,  450 => 300,  431 => 284,  412 => 268,  393 => 252,  374 => 236,  251 => 116,  244 => 112,  192 => 63,  173 => 47,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  147 => 36,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

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
                            <a href=\"{{path('app_utilisateur_new')}}\" class=\"nav-item nav-link\">Shop</a>
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
                            <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>
                            <a href=\"#\" class=\"position-relative me-4 my-auto\">
                                <i class=\"fa fa-shopping-bag fa-2x\"></i>
                                <span class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\">3</span>
                            </a>
                            <a href=\"#\" class=\"my-auto\">
                                <i class=\"fas fa-user fa-2x\"></i>
                            </a>
                        </div>
                        <!-- Refined \"s'inscrire\" Button -->
<!-- Refined \"s'inscrire\" Button -->
<div class=\"ms-auto\">
    <a href=\"{{ path('app_utilisateur_new') }}\" class=\"btn btn-warning text-white fw-bold px-4 py-2 rounded-pill\">S'inscrire</a>
</div>

                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


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
                            <img src=\"{{asset('frontofficeimg/vegetable-item-5.jpg')}}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
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
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
                        Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


<!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>   












{% endblock %}
", "page/index.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\page\\index.html.twig");
    }
}
