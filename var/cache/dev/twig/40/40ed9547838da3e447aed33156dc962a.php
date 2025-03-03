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

/* parcelle_proprietes/parcelles_par_type.html.twig */
class __TwigTemplate_21e8d68a9fe48816709a5e5e563a434a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/parcelles_par_type.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/parcelles_par_type.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parcelle_proprietes/parcelles_par_type.html.twig", 1);
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

        yield "Liste des parcelles de type ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type_terrain"]) || array_key_exists("type_terrain", $context) ? $context["type_terrain"] : (function () { throw new RuntimeError('Variable "type_terrain" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield "<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">Parcelles de type ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type_terrain"]) || array_key_exists("type_terrain", $context) ? $context["type_terrain"] : (function () { throw new RuntimeError('Variable "type_terrain" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h1>

    <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcelle_propriete"]) || array_key_exists("parcelle_propriete", $context) ? $context["parcelle_propriete"] : (function () { throw new RuntimeError('Variable "parcelle_propriete" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["parcelle"]) {
            // line 11
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "image", [], "any", false, false, false, 13)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "image", [], "any", false, false, false, 13))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                         class=\"card-img-top\" alt=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "titre", [], "any", false, false, false, 14), "html", null, true);
            yield "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "titre", [], "any", false, false, false, 16), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "description", [], "any", false, false, false, 17), 0, 100), "html", null, true);
            yield "...</p>
                        <a href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-primary\">Voir</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 23
        if (!$context['_iterated']) {
            // line 24
            yield "            <p>Aucune parcelle de type ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type_terrain"]) || array_key_exists("type_terrain", $context) ? $context["type_terrain"] : (function () { throw new RuntimeError('Variable "type_terrain" does not exist.', 24, $this->source); })()), "html", null, true);
            yield " trouvée.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parcelle'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "    </div>

    <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
        yield "\" class=\"btn btn-secondary mt-4\">Retour à toutes les parcelles</a>
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
        return "parcelle_proprietes/parcelles_par_type.html.twig";
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
        return array (  161 => 28,  157 => 26,  148 => 24,  146 => 23,  136 => 18,  132 => 17,  128 => 16,  123 => 14,  119 => 13,  115 => 11,  110 => 10,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des parcelles de type {{ type_terrain }}{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">Parcelles de type {{ type_terrain }}</h1>

    <div class=\"row\">
        {% for parcelle in parcelle_propriete %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset(parcelle.image ? 'uploads/images/' ~ parcelle.image : 'images/default.png') }}\" 
                         class=\"card-img-top\" alt=\"{{ parcelle.titre }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ parcelle.titre }}</h5>
                        <p class=\"card-text\">{{ parcelle.description[:100] }}...</p>
                        <a href=\"{{ path('app_parcelle_proprietes_show', {'id': parcelle.id}) }}\" 
                           class=\"btn btn-primary\">Voir</a>
                    </div>
                </div>
            </div>
        {% else %}
            <p>Aucune parcelle de type {{ type_terrain }} trouvée.</p>
        {% endfor %}
    </div>

    <a href=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"btn btn-secondary mt-4\">Retour à toutes les parcelles</a>
</div>
{% endblock %}
", "parcelle_proprietes/parcelles_par_type.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\parcelle_proprietes\\parcelles_par_type.html.twig");
    }
}
