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

/* materiel/index.html.twig */
class __TwigTemplate_4d2d7ad7aa27f3b138e22a082569de63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/index.html.twig", 1);
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

        yield "Liste des Matériels";
        
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
        yield "<div class=\"container mt-5\">
    <h1>Liste des Matériels</h1>

<a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new", ["type" => "vente"]);
        yield "\">Ajouter un matériel à vendre</a>
<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new", ["type" => "location"]);
        yield "\">Ajouter un matériel à louer</a>

<h2>À Vendre</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Prix</th>
        <th>Disponibilité</th>
    </tr>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ventes"]) || array_key_exists("ventes", $context) ? $context["ventes"] : (function () { throw new RuntimeError('Variable "ventes" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 20
            yield "        <tr>
            <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
            <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 22), "html", null, true);
            yield " €</td>
            <td>";
            // line 23
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "disponibilite", [], "any", false, false, false, 23)) ? ("Disponible") : ("Indisponible"));
            yield "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "</table>

<h2>À Louer</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Prix/Jour</th>
        <th>Disponibilité</th>
    </tr>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 36
            yield "        <tr>
            <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
            <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 38), "html", null, true);
            yield " €/jour</td>
            <td>";
            // line 39
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "disponibilite", [], "any", false, false, false, 39)) ? ("Disponible") : ("Indisponible"));
            yield "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "</table>

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
        return "materiel/index.html.twig";
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
        return array (  180 => 42,  171 => 39,  167 => 38,  163 => 37,  160 => 36,  156 => 35,  145 => 26,  136 => 23,  132 => 22,  128 => 21,  125 => 20,  121 => 19,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Matériels{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1>Liste des Matériels</h1>

<a href=\"{{ path('app_materiel_new', {'type': 'vente'}) }}\">Ajouter un matériel à vendre</a>
<a href=\"{{ path('app_materiel_new', {'type': 'location'}) }}\">Ajouter un matériel à louer</a>

<h2>À Vendre</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Prix</th>
        <th>Disponibilité</th>
    </tr>
    {% for materiel in ventes %}
        <tr>
            <td>{{ materiel.nom }}</td>
            <td>{{ materiel.prix }} €</td>
            <td>{{ materiel.disponibilite ? 'Disponible' : 'Indisponible' }}</td>
        </tr>
    {% endfor %}
</table>

<h2>À Louer</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Prix/Jour</th>
        <th>Disponibilité</th>
    </tr>
    {% for materiel in locations %}
        <tr>
            <td>{{ materiel.nom }}</td>
            <td>{{ materiel.prix }} €/jour</td>
            <td>{{ materiel.disponibilite ? 'Disponible' : 'Indisponible' }}</td>
        </tr>
    {% endfor %}
</table>

</div>
{% endblock %}
", "materiel/index.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\materiel\\index.html.twig");
    }
}
