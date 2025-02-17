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

/* materiellocation/index.html.twig */
class __TwigTemplate_f6487b724c6e3f09d6eabf8417d0ce59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiellocation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiellocation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiellocation/index.html.twig", 1);
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

        yield "Materiel location";
        
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
        yield "<!-- Navbar Start -->
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
        // line 24
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
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop");
        yield "\" class=\"nav-item nav-link\">Shop</a>
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_detail");
        yield "\" class=\"nav-item nav-link\">Shop Detail</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" class=\"dropdown-item\">Cart</a>
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chackout");
        yield "\" class=\"dropdown-item\">Checkout</a>
                            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial");
        yield "\" class=\"dropdown-item\">Testimonial</a>
                            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_404");
        yield "\" class=\"dropdown-item\">404 Page</a>
                        </div>
                    </div>
                    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-item nav-link\">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<div class=\"container mt-5 pt-5\">
    <h1 class=\"mb-4\">Create New Contract</h1>





















    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Materiel agricole A louer</h1>

        <div class=\"card p-4 shadow-sm\">
            <h4 class=\"mb-4\">Materiellocations List</h4>

            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Disponibilite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiellocations"]) || array_key_exists("materiellocations", $context) ? $context["materiellocations"] : (function () { throw new RuntimeError('Variable "materiellocations" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materiellocation"]) {
            // line 94
            yield "                        <tr>
                            <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                            <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "nom", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                            <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "prix", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                            <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "description", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                            <td>";
            // line 99
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "disponibilite", [], "any", false, false, false, 99)) ? ("Yes") : ("No"));
            yield "</td>
                            <td>
                                <a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Show</a>
                                <a href=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiellocation"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 109
        if (!$context['_iterated']) {
            // line 106
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center\">No records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiellocation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                </tbody>
            </table>

            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiellocation_new");
        yield "\" class=\"btn btn-primary\">Create new</a>
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
        return "materiellocation/index.html.twig";
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
        return array (  274 => 114,  268 => 110,  259 => 106,  257 => 109,  249 => 102,  245 => 101,  240 => 99,  236 => 98,  232 => 97,  228 => 96,  224 => 95,  221 => 94,  216 => 93,  164 => 44,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  139 => 34,  135 => 33,  131 => 32,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Materiel location{% endblock %}

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
    <h1 class=\"mb-4\">Create New Contract</h1>





















    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Materiel agricole A louer</h1>

        <div class=\"card p-4 shadow-sm\">
            <h4 class=\"mb-4\">Materiellocations List</h4>

            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Disponibilite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for materiellocation in materiellocations %}
                        <tr>
                            <td>{{ materiellocation.id }}</td>
                            <td>{{ materiellocation.nom }}</td>
                            <td>{{ materiellocation.prix }}</td>
                            <td>{{ materiellocation.description }}</td>
                            <td>{{ materiellocation.disponibilite ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href=\"{{ path('app_materiellocation_show', {'id': materiellocation.id}) }}\" class=\"btn btn-info btn-sm\">Show</a>
                                <a href=\"{{ path('app_materiellocation_edit', {'id': materiellocation.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center\">No records found</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"{{ path('app_materiellocation_new') }}\" class=\"btn btn-primary\">Create new</a>
            </div>
        </div>
    </div>

{% endblock %}
", "materiellocation/index.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\materiellocation\\index.html.twig");
    }
}
