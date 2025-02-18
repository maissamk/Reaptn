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

/* temp/partials/_footer.html.twig */
class __TwigTemplate_4a8f04cb8330aaa5559c4caf99e642d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/partials/_footer.html.twig"));

        // line 1
        yield "<!-- Footer Start -->
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
                    <p class=\"mb-4\">typesetting, remaining essentially unchanged. It was popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                    <a href=\"\" class=\"btn border-secondary py-2 px-4 rounded-pill text-primary\">Read More</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"d-flex flex-column text-start footer-item\">
                    <h4 class=\"text-light mb-3\">Product Info</h4>
                    <a class=\"btn-link\" href=\"\">Product details</a>
                    <a class=\"btn-link\" href=\"\">Shopping Cart</a>
                    <a class=\"btn-link\" href=\"\">Wishlist</a>
                    <a class=\"btn-link\" href=\"\">Order History</a>
                    <a class=\"btn-link\" href=\"\">International Orders</a>
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
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/payment.png"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
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
        return "temp/partials/_footer.html.twig";
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
        return array (  113 => 64,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Footer Start -->
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
                    <p class=\"mb-4\">typesetting, remaining essentially unchanged. It was popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                    <a href=\"\" class=\"btn border-secondary py-2 px-4 rounded-pill text-primary\">Read More</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"d-flex flex-column text-start footer-item\">
                    <h4 class=\"text-light mb-3\">Product Info</h4>
                    <a class=\"btn-link\" href=\"\">Product details</a>
                    <a class=\"btn-link\" href=\"\">Shopping Cart</a>
                    <a class=\"btn-link\" href=\"\">Wishlist</a>
                    <a class=\"btn-link\" href=\"\">Order History</a>
                    <a class=\"btn-link\" href=\"\">International Orders</a>
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
                    <img src=\"{{ asset('img/payment.png') }}\" class=\"img-fluid\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
", "temp/partials/_footer.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\PI2025\\Reaptn\\templates\\temp\\partials\\_footer.html.twig");
    }
}
