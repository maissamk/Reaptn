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

/* contrat/index.html.twig */
class __TwigTemplate_c11762caabd48c445d8f6c4af4e7a368 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/index.html.twig", 1);
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

        yield "Contrats";
        
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
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-file-contract\"></i> Liste des Contrats
    </h1>

    <div class=\"row mt-4\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 13
            yield "            <div class=\"col-md-6\">
                <div class=\"card shadow-lg mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center text-dark fw-bold\">
                            <i class=\"fas fa-handshake\"></i> Contrat N°";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "
                        </h5>
                       
                        <p><strong>Date Début :</strong> ";
            // line 20
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "dateDebutContrat", [], "any", false, false, false, 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "dateDebutContrat", [], "any", false, false, false, 20), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</p>
                        <p><strong>Date Fin :</strong> ";
            // line 21
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "datefinContrat", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "datefinContrat", [], "any", false, false, false, 21), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</p>
                        <p><strong>Acheteur :</strong> <span class=\"text-success fw-bold\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "nomAcheteur", [], "any", false, false, false, 22), "html", null, true);
            yield "</span></p>
                        <p><strong>Vendeur :</strong> <span class=\"text-danger fw-bold\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "nomVendeur", [], "any", false, false, false, 23), "html", null, true);
            yield "</span></p>
                        <p><strong>Informations :</strong> ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "informationContrat", [], "any", false, false, false, 24), 0, 100), "html", null, true);
            yield "...</p>
                        <p><strong>Créé le :</strong> ";
            // line 25
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "datecreationContrat", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "datecreationContrat", [], "any", false, false, false, 25), "d/m/Y H:i"), "html", null, true)) : ("-"));
            yield "</p>

                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm text-white\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm text-white\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_download", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-primary\" title=\"Télécharger le contrat (PDF)\">
    <i class=\"fas fa-download\"></i>
</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-danger fw-bold\">Aucun contrat trouvé.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "    </div>

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_new");
        yield "\" class=\"btn btn-success btn-lg shadow\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter un nouveau contrat
        </a>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.03);
    }
    .rounded-circle {
        border: 3px solid #007bff;
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
        return "contrat/index.html.twig";
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
        return array (  191 => 49,  186 => 46,  177 => 42,  175 => 41,  163 => 34,  157 => 31,  151 => 28,  145 => 25,  141 => 24,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  119 => 17,  113 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contrats{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-file-contract\"></i> Liste des Contrats
    </h1>

    <div class=\"row mt-4\">
        {% for contrat in contrats %}
            <div class=\"col-md-6\">
                <div class=\"card shadow-lg mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center text-dark fw-bold\">
                            <i class=\"fas fa-handshake\"></i> Contrat N°{{ contrat.id }}
                        </h5>
                       
                        <p><strong>Date Début :</strong> {{ contrat.dateDebutContrat ? contrat.dateDebutContrat|date('d/m/Y H:i') : '-' }}</p>
                        <p><strong>Date Fin :</strong> {{ contrat.datefinContrat ? contrat.datefinContrat|date('d/m/Y H:i') : '-' }}</p>
                        <p><strong>Acheteur :</strong> <span class=\"text-success fw-bold\">{{ contrat.nomAcheteur }}</span></p>
                        <p><strong>Vendeur :</strong> <span class=\"text-danger fw-bold\">{{ contrat.nomVendeur }}</span></p>
                        <p><strong>Informations :</strong> {{ contrat.informationContrat|slice(0, 100) }}...</p>
                        <p><strong>Créé le :</strong> {{ contrat.datecreationContrat ? contrat.datecreationContrat|date('d/m/Y H:i') : '-' }}</p>

                        <div class=\"d-flex justify-content-center gap-2\">
                            <a href=\"{{ path('app_contrat_show', {'id': contrat.id}) }}\" class=\"btn btn-info btn-sm text-white\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"{{ path('app_contrat_edit', {'id': contrat.id}) }}\" class=\"btn btn-warning btn-sm text-white\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <a href=\"{{ path('contrat_download', {'id': contrat.id}) }}\" class=\"btn btn-primary\" title=\"Télécharger le contrat (PDF)\">
    <i class=\"fas fa-download\"></i>
</a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-danger fw-bold\">Aucun contrat trouvé.</p>
            </div>
        {% endfor %}
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('app_contrat_new') }}\" class=\"btn btn-success btn-lg shadow\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter un nouveau contrat
        </a>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.03);
    }
    .rounded-circle {
        border: 3px solid #007bff;
    }
</style>

{% endblock %}
", "contrat/index.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\contrat\\index.html.twig");
    }
}
