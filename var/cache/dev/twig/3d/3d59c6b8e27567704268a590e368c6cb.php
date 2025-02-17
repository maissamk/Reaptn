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

/* admin/contrat/index_back.html.twig */
class __TwigTemplate_1947f7844ab70f90ffe0f2ede649c7d9 extends Template
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
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contrat/index_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/contrat/index_back.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/contrat/index_back.html.twig", 1);
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

        yield "Liste des Contrats";
        
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

    <div class=\"text-end mb-3\">
       
            <i class=\"fas fa-plus-circle\"></i> Ajouter un Contrat
        </a>
    </div>

    <table class=\"table table-bordered table-striped\">
        <thead class=\"table-dark text-center\">
            <tr>
                <th>ID</th>
                <th>Acheteur</th>
                <th>Vendeur</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 30
            yield "                <tr>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "nomAcheteur", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "nomVendeur", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                    <td>";
            // line 34
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "dateDebutContrat", [], "any", false, false, false, 34)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "dateDebutContrat", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                    <td>";
            // line 35
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "datefinContrat", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "datefinContrat", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">voir
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier
                            <i class=\"fas fa-edit\"></i>
                        </a>

<form method=\"post\" action=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette parcelle ?');\">

                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 46))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-danger\" type=\"submit\">Supprimer</button>
                        </form>



                       
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 55
        if (!$context['_iterated']) {
            // line 56
            yield "                <tr>
                    <td colspan=\"6\" class=\"text-center text-danger\">Aucun contrat trouvé.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "        </tbody>
    </table>





  <div class=\"d-flex justify-content-center\">
 <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_new");
        yield "\" class=\"btn btn-primary\">Ajouter un Contrat</a>
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
        return "admin/contrat/index_back.html.twig";
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
        return array (  208 => 69,  197 => 60,  188 => 56,  186 => 55,  172 => 46,  167 => 44,  160 => 40,  154 => 37,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  130 => 30,  125 => 29,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des Contrats{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-file-contract\"></i> Liste des Contrats
    </h1>

    <div class=\"text-end mb-3\">
       
            <i class=\"fas fa-plus-circle\"></i> Ajouter un Contrat
        </a>
    </div>

    <table class=\"table table-bordered table-striped\">
        <thead class=\"table-dark text-center\">
            <tr>
                <th>ID</th>
                <th>Acheteur</th>
                <th>Vendeur</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for contrat in contrats %}
                <tr>
                    <td>{{ contrat.id }}</td>
                    <td>{{ contrat.nomAcheteur }}</td>
                    <td>{{ contrat.nomVendeur }}</td>
                    <td>{{ contrat.dateDebutContrat ? contrat.dateDebutContrat|date('d/m/Y') : '-' }}</td>
                    <td>{{ contrat.datefinContrat ? contrat.datefinContrat|date('d/m/Y') : '-' }}</td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('admin_contrat_show', {'id': contrat.id}) }}\" class=\"btn btn-info btn-sm\">voir
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('admin_contrat_edit', {'id': contrat.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier
                            <i class=\"fas fa-edit\"></i>
                        </a>

<form method=\"post\" action=\"{{ path('admin_contrat_delete', {'id': contrat.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette parcelle ?');\">

                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contrat.id) }}\">
                            <button class=\"btn btn-danger\" type=\"submit\">Supprimer</button>
                        </form>



                       
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\" class=\"text-center text-danger\">Aucun contrat trouvé.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>





  <div class=\"d-flex justify-content-center\">
 <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"{{ path('admin_contrat_new') }}\" class=\"btn btn-primary\">Ajouter un Contrat</a>
        </div>



</div>




{% endblock %}
", "admin/contrat/index_back.html.twig", "C:\\Users\\takou\\OneDrive\\Desktop\\Reaptn\\templates\\admin\\contrat\\index_back.html.twig");
    }
}
