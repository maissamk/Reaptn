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
class __TwigTemplate_d36fd07ef9fd71b20c8256774d20b8f1 extends Template
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
<!-- ParcelleProprietes Content -->
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">ParcelleProprietes index</h1>

    <div class=\"row\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcelle_proprietes"]) || array_key_exists("parcelle_proprietes", $context) ? $context["parcelle_proprietes"] : (function () { throw new RuntimeError('Variable "parcelle_proprietes" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["parcelle_propriete"]) {
            // line 13
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm\">
                    
                    <!-- Image of property -->
                    <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "image", [], "any", false, false, false, 17)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "image", [], "any", false, false, false, 17))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                         class=\"img-fluid card-img-fixed\" alt=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 18), "html", null, true);
            yield "\"
                         loading=\"lazy\">

                    <!-- Property Details -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 23), "html", null, true);
            yield "</h4>

                        <p class=\"description\">
                            ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 26), 0, 50), "html", null, true);
            yield "<span class=\"dots\">...</span>
                            <span class=\"more-text\" style=\"display: none;\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 27), 100, null), "html", null, true);
            yield "</span>
                            <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"see-more\">plus</a>
                        </p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "prix", [], "any", false, false, false, 32), "html", null, true);
            yield " DT </p>
                        </div>

                        <p class=\"text-dark fs-5 fw-bold mb-2\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "status", [], "any", false, false, false, 35), "html", null, true);
            yield " : Status Actuel</p>
                        <p class=\"text-dark fs-5 fw-bold mb-2\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "taille", [], "any", false, false, false, 36), "html", null, true);
            yield " (m²)</p>

                        <!-- Edit Button -->
                        ";
            // line 39
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
                // line 40
                yield "    <div class=\"text-center mt-3\">
        <a href=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                yield "\"  class=\"btn btn-info btn-sm text-white\" title=\"View Property\"><i class=\"fas fa-eye\"></i>Voir</a>
        <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm text-white\" title=\"Edit Property\"><i class=\"fas fa-edit\"></i> Modifier</a>
    </div>
";
            }
            // line 45
            yield "                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "            <div class=\"col-12 text-center\">
                <p>Aucun enregistrement trouvé</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parcelle_propriete'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 54
            yield "        <div class=\"d-flex justify-content-center mt-3\">
            <a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_new");
            yield "\" class=\"btn btn-success me-2\" title=\"Create New Property\">
                <i class=\"fas fa-plus-circle\"></i> Créer une nouvelle propriété
            </a>
            <a href=\"";
            // line 58
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_index");
            yield "\" class=\"btn btn-success me-2\" title=\"Create New Contract\">
                <i class=\"fas fa-file-contract\"></i> Créer un contrat
            </a>
        </div>
        ";
        }
        // line 63
        yield "    </div>
</div>

<style>
.card-img-fixed {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
</style>

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
        return array (  220 => 63,  212 => 58,  206 => 55,  203 => 54,  201 => 53,  192 => 49,  190 => 48,  183 => 45,  177 => 42,  173 => 41,  170 => 40,  168 => 39,  162 => 36,  158 => 35,  152 => 32,  145 => 28,  141 => 27,  137 => 26,  131 => 23,  123 => 18,  119 => 17,  113 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ParcelleProprietes index{% endblock %}

{% block body %}

<!-- ParcelleProprietes Content -->
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">ParcelleProprietes index</h1>

    <div class=\"row\">
        {% for parcelle_propriete in parcelle_proprietes %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm\">
                    
                    <!-- Image of property -->
                    <img src=\"{{ asset(parcelle_propriete.image ? 'uploads/images/' ~ parcelle_propriete.image : 'images/default.png') }}\" 
                         class=\"img-fluid card-img-fixed\" alt=\"{{ parcelle_propriete.titre }}\"
                         loading=\"lazy\">

                    <!-- Property Details -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>{{ parcelle_propriete.titre }}</h4>

                        <p class=\"description\">
                            {{ parcelle_propriete.description[:50] }}<span class=\"dots\">...</span>
                            <span class=\"more-text\" style=\"display: none;\">{{ parcelle_propriete.description[100:] }}</span>
                            <a href=\"{{ path('app_parcelle_proprietes_show', {'id': parcelle_propriete.id}) }}\" class=\"see-more\">plus</a>
                        </p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">{{ parcelle_propriete.prix }} DT </p>
                        </div>

                        <p class=\"text-dark fs-5 fw-bold mb-2\">{{ parcelle_propriete.status }} : Status Actuel</p>
                        <p class=\"text-dark fs-5 fw-bold mb-2\">{{ parcelle_propriete.taille }} (m²)</p>

                        <!-- Edit Button -->
                        {% if  is_granted('ROLE_AGRICULTEUR') %}
    <div class=\"text-center mt-3\">
        <a href=\"{{ path('app_parcelle_proprietes_show', {'id': parcelle_propriete.id}) }}\"  class=\"btn btn-info btn-sm text-white\" title=\"View Property\"><i class=\"fas fa-eye\"></i>Voir</a>
        <a href=\"{{ path('app_parcelle_proprietes_edit', {'id': parcelle_propriete.id}) }}\" class=\"btn btn-warning btn-sm text-white\" title=\"Edit Property\"><i class=\"fas fa-edit\"></i> Modifier</a>
    </div>
{% endif %}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p>Aucun enregistrement trouvé</p>
            </div>
        {% endfor %}
{% if  is_granted('ROLE_AGRICULTEUR') %}
        <div class=\"d-flex justify-content-center mt-3\">
            <a href=\"{{ path('app_parcelle_proprietes_new') }}\" class=\"btn btn-success me-2\" title=\"Create New Property\">
                <i class=\"fas fa-plus-circle\"></i> Créer une nouvelle propriété
            </a>
            <a href=\"{{ path('app_contrat_index') }}\" class=\"btn btn-success me-2\" title=\"Create New Contract\">
                <i class=\"fas fa-file-contract\"></i> Créer un contrat
            </a>
        </div>
        {% endif %}
    </div>
</div>

<style>
.card-img-fixed {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
</style>

{% endblock %}
", "parcelle_proprietes/index.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\parcelle_proprietes\\index.html.twig");
    }
}
