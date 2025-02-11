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

/* parcelle_proprietes/index.html.twig */
class __TwigTemplate_d6d78c602148b542adda3da63d35d043 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parcelle_proprietes/index.html.twig", 1);
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

        yield "ParcelleProprietes index";
        
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
            <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        yield "\" class=\"navbar-brand\">
                <h1 class=\"text-primary display-6\">Fruitables</h1>
            </a>
            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"nav-item nav-link\">Shop</a>
                    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_detail");
        yield "\" class=\"nav-item nav-link\">Shop Detail</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" class=\"dropdown-item\">Cart</a>
                            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chackout");
        yield "\" class=\"dropdown-item\">Checkout</a>
                            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                        </div>
                    </div>
                    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link\">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<div class=\"container mt-5 pt-5\">
        <h1 class=\"text-center\">ParcelleProprietes index</h1>

        <table class=\"table table-striped table-hover mt-3\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Status</th>
                    <th>Emplacement</th>
                    <th>Taille</th>
                    <th>Date de création</th>
                    <th>Date de mise à jour</th>
                    <th>Disponible</th>
                    <th>Propriétaire</th>
                    <th>Contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcelle_proprietes"]) || array_key_exists("parcelle_proprietes", $context) ? $context["parcelle_proprietes"] : (function () { throw new RuntimeError('Variable "parcelle_proprietes" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["parcelle_propriete"]) {
            // line 76
            yield "                <tr>
                    <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                    <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                    <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                    <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "prix", [], "any", false, false, false, 80), "html", null, true);
            yield " €</td>
                    <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "status", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                    <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "emplacement", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                    <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "taille", [], "any", false, false, false, 83), "html", null, true);
            yield " m²</td>
                    <td>";
            // line 84
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "dateCreationAnnonce", [], "any", false, false, false, 84)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "dateCreationAnnonce", [], "any", false, false, false, 84), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 85
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "dateMisajourAnnonce", [], "any", false, false, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "dateMisajourAnnonce", [], "any", false, false, false, 85), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 86
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "estDisponible", [], "any", false, false, false, 86)) ? ("Oui") : ("Non"));
            yield "</td>
                    <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "nomProprietaire", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                    <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "contactProprietaire", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                        <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 98
        if (!$context['_iterated']) {
            // line 95
            yield "                <tr>
                    <td colspan=\"13\" class=\"text-center\">Aucun enregistrement trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parcelle_propriete'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "            </tbody>
        </table>

        <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_new");
        yield "\" class=\"btn btn-success\">Créer une nouvelle propriété</a>
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
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-secondary btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

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
        return "parcelle_proprietes/index.html.twig";
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
        return array (  283 => 102,  278 => 99,  269 => 95,  267 => 98,  259 => 91,  255 => 90,  250 => 88,  246 => 87,  242 => 86,  238 => 85,  234 => 84,  230 => 83,  226 => 82,  222 => 81,  218 => 80,  214 => 79,  210 => 78,  206 => 77,  203 => 76,  198 => 75,  165 => 45,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  140 => 35,  136 => 34,  132 => 33,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ParcelleProprietes index{% endblock %}

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
            <a href=\"{{ asset('index.html') }}\" class=\"navbar-brand\">
                <h1 class=\"text-primary display-6\">Fruitables</h1>
            </a>
            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"{{ path('app_page') }}\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"{{ path('app_shop') }}\" class=\"nav-item nav-link\">Shop</a>
                    <a href=\"{{ path('app_shop_detail') }}\" class=\"nav-item nav-link\">Shop Detail</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                            <a href=\"{{ path('app_cart') }}\" class=\"dropdown-item\">Cart</a>
                            <a href=\"{{ path('app_chackout') }}\" class=\"dropdown-item\">Checkout</a>
                            <a href=\"{{ path('app_testimonial') }}\" class=\"dropdown-item\">Testimonial</a>
                            <a href=\"{{ path('app_404') }}\" class=\"dropdown-item\">404 Page</a>
                        </div>
                    </div>
                    <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link\">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<div class=\"container mt-5 pt-5\">
        <h1 class=\"text-center\">ParcelleProprietes index</h1>

        <table class=\"table table-striped table-hover mt-3\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Status</th>
                    <th>Emplacement</th>
                    <th>Taille</th>
                    <th>Date de création</th>
                    <th>Date de mise à jour</th>
                    <th>Disponible</th>
                    <th>Propriétaire</th>
                    <th>Contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for parcelle_propriete in parcelle_proprietes %}
                <tr>
                    <td>{{ parcelle_propriete.id }}</td>
                    <td>{{ parcelle_propriete.titre }}</td>
                    <td>{{ parcelle_propriete.description }}</td>
                    <td>{{ parcelle_propriete.prix }} €</td>
                    <td>{{ parcelle_propriete.status }}</td>
                    <td>{{ parcelle_propriete.emplacement }}</td>
                    <td>{{ parcelle_propriete.taille }} m²</td>
                    <td>{{ parcelle_propriete.dateCreationAnnonce ? parcelle_propriete.dateCreationAnnonce|date('Y-m-d H:i:s') : '' }}</td>
                    <td>{{ parcelle_propriete.dateMisajourAnnonce ? parcelle_propriete.dateMisajourAnnonce|date('Y-m-d H:i:s') : '' }}</td>
                    <td>{{ parcelle_propriete.estDisponible ? 'Oui' : 'Non' }}</td>
                    <td>{{ parcelle_propriete.nomProprietaire }}</td>
                    <td>{{ parcelle_propriete.contactProprietaire }}</td>
                    <td>
                        <a href=\"{{ path('app_parcelle_proprietes_show', {'id': parcelle_propriete.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                        <a href=\"{{ path('app_parcelle_proprietes_edit', {'id': parcelle_propriete.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"13\" class=\"text-center\">Aucun enregistrement trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_parcelle_proprietes_new') }}\" class=\"btn btn-success\">Créer une nouvelle propriété</a>
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
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-secondary btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>
{% endblock %}
", "parcelle_proprietes/index.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\PI2025\\Reaptn\\templates\\parcelle_proprietes\\index.html.twig");
    }
}
