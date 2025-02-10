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

/* land_properties/show.html.twig */
class __TwigTemplate_92d14122cd07f6d72f8985f580263d96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "land_properties/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "land_properties/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "land_properties/show.html.twig", 1);
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

        yield "LandProperties";
        
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
        yield "    <h1>LandProperties</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 28, $this->source); })()), "location", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Area</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 32, $this->source); })()), "area", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Is_available</th>
                <td>";
        // line 36
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 36, $this->source); })()), "isAvailable", [], "any", false, false, false, 36)) ? ("Yes") : ("No"));
        yield "</td>
            </tr>
            <tr>
                <th>Property_type</th>
                <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 40, $this->source); })()), "propertyType", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 48, $this->source); })()), "updatedAt", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 48, $this->source); })()), "updatedAt", [], "any", false, false, false, 48), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Owner_name</th>
                <td>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 52, $this->source); })()), "ownerName", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Owner_contact</th>
                <td>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 56, $this->source); })()), "ownerContact", [], "any", false, false, false, 56), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_land_properties_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_land_properties_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["land_property"]) || array_key_exists("land_property", $context) ? $context["land_property"] : (function () { throw new RuntimeError('Variable "land_property" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 65
        yield Twig\Extension\CoreExtension::include($this->env, $context, "land_properties/_delete_form.html.twig");
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
        return "land_properties/show.html.twig";
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
        return array (  203 => 65,  198 => 63,  193 => 61,  185 => 56,  178 => 52,  171 => 48,  164 => 44,  157 => 40,  150 => 36,  143 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LandProperties{% endblock %}

{% block body %}
    <h1>LandProperties</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ land_property.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ land_property.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ land_property.description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ land_property.price }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ land_property.location }}</td>
            </tr>
            <tr>
                <th>Area</th>
                <td>{{ land_property.area }}</td>
            </tr>
            <tr>
                <th>Is_available</th>
                <td>{{ land_property.isAvailable ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Property_type</th>
                <td>{{ land_property.propertyType }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ land_property.createdAt ? land_property.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>{{ land_property.updatedAt ? land_property.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Owner_name</th>
                <td>{{ land_property.ownerName }}</td>
            </tr>
            <tr>
                <th>Owner_contact</th>
                <td>{{ land_property.ownerContact }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_land_properties_index') }}\">back to list</a>

    <a href=\"{{ path('app_land_properties_edit', {'id': land_property.id}) }}\">edit</a>

    {{ include('land_properties/_delete_form.html.twig') }}
{% endblock %}
", "land_properties/show.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\land_properties\\show.html.twig");
    }
}
