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

/* commande/detail.html.twig */
class __TwigTemplate_53b525a8a8438ad18a49828893b80b13 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/detail.html.twig", 1);
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

        yield "Détails de la Commande";
        
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
        yield "    <h1>Détails de la Commande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 6, $this->source); })()), "id_commande", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

    <div class=\"commande-details\">
        <h3>Date de Commande: ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 9, $this->source); })()), "dateCommande", [], "any", false, false, false, 9), "d/m/Y H:i"), "html", null, true);
        yield "</h3>
        <h4>Total: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 10, $this->source); })()), "totale", [], "any", false, false, false, 10), "html", null, true);
        yield " €</h4>
        <h4>Quantité: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 11, $this->source); })()), "quantite", [], "any", false, false, false, 11), "html", null, true);
        yield "</h4>

        <h3>Matériels Commandés:</h3>
        <ul>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 15, $this->source); })()), "materiels", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 16
            yield "                <li>
                    <strong>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "</strong><br>
                    Description: ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "description", [], "any", false, false, false, 18), "html", null, true);
            yield "<br>
                    Prix: ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 19), "html", null, true);
            yield " €
                    ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "disponibilite", [], "any", false, false, false, 20)) {
                // line 21
                yield "                        <span class=\"available\">Disponible</span>
                    ";
            } else {
                // line 23
                yield "                        <span class=\"unavailable\">Indisponible</span>
                    ";
            }
            // line 25
            yield "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "        </ul>

        <h3>Informations de Livraison:</h3>
        ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 30, $this->source); })()), "livraison", [], "any", false, false, false, 30)) {
            // line 31
            yield "            <p>Adresse: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 31, $this->source); })()), "livraison", [], "any", false, false, false, 31), "adresse", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
            <p>Date de Livraison: ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 32, $this->source); })()), "livraison", [], "any", false, false, false, 32), "dateLiv", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
            yield "</p>
            <p>Status: ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 33, $this->source); })()), "livraison", [], "any", false, false, false, 33), "status", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
        ";
        } else {
            // line 35
            yield "            <p>Aucune information de livraison disponible.</p>
        ";
        }
        // line 37
        yield "
        <h3>Informations de Paiement:</h3>
        ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 39, $this->source); })()), "paiement", [], "any", false, false, false, 39)) {
            // line 40
            yield "            <p>Date du Paiement: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 40, $this->source); })()), "paiement", [], "any", false, false, false, 40), "datePaiement", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
            yield "</p>
            <p>Méthode de Paiement: ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 41, $this->source); })()), "paiement", [], "any", false, false, false, 41), "methodePaiement", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
        ";
        } else {
            // line 43
            yield "            <p>Aucune information de paiement disponible.</p>
        ";
        }
        // line 45
        yield "    </div>
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
        return "commande/detail.html.twig";
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
        return array (  203 => 45,  199 => 43,  194 => 41,  189 => 40,  187 => 39,  183 => 37,  179 => 35,  174 => 33,  170 => 32,  165 => 31,  163 => 30,  158 => 27,  151 => 25,  147 => 23,  143 => 21,  141 => 20,  137 => 19,  133 => 18,  129 => 17,  126 => 16,  122 => 15,  115 => 11,  111 => 10,  107 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de la Commande{% endblock %}

{% block body %}
    <h1>Détails de la Commande #{{ commande.id_commande }}</h1>

    <div class=\"commande-details\">
        <h3>Date de Commande: {{ commande.dateCommande|date('d/m/Y H:i') }}</h3>
        <h4>Total: {{ commande.totale }} €</h4>
        <h4>Quantité: {{ commande.quantite }}</h4>

        <h3>Matériels Commandés:</h3>
        <ul>
            {% for materiel in commande.materiels %}
                <li>
                    <strong>{{ materiel.nom }}</strong><br>
                    Description: {{ materiel.description }}<br>
                    Prix: {{ materiel.prix }} €
                    {% if materiel.disponibilite %}
                        <span class=\"available\">Disponible</span>
                    {% else %}
                        <span class=\"unavailable\">Indisponible</span>
                    {% endif %}
                </li>
            {% endfor %}
        </ul>

        <h3>Informations de Livraison:</h3>
        {% if commande.livraison %}
            <p>Adresse: {{ commande.livraison.adresse }}</p>
            <p>Date de Livraison: {{ commande.livraison.dateLiv|date('d/m/Y') }}</p>
            <p>Status: {{ commande.livraison.status }}</p>
        {% else %}
            <p>Aucune information de livraison disponible.</p>
        {% endif %}

        <h3>Informations de Paiement:</h3>
        {% if commande.paiement %}
            <p>Date du Paiement: {{ commande.paiement.datePaiement|date('d/m/Y') }}</p>
            <p>Méthode de Paiement: {{ commande.paiement.methodePaiement }}</p>
        {% else %}
            <p>Aucune information de paiement disponible.</p>
        {% endif %}
    </div>
{% endblock %}
", "commande/detail.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\commande\\detail.html.twig");
    }
}
