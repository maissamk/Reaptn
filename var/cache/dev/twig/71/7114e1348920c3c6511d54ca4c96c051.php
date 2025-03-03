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
class __TwigTemplate_dc69b9eed54cfa1a8d9f2a9451cd8f86 extends Template
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
        yield "<div class=\"row justify-content-center\"><div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px; \">
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-file-contract\"></i> Liste des Contrats
    </h1>

    

    <table class=\"table table-bordered table-striped\">
        <thead class=\"table-dark text-center\">
            <tr>
                <th class=\"text-white\">ID</th>
                <th class=\"text-white\">Acheteur</th>
                <th class=\"text-white\">Vendeur</th>
                <th class=\"text-white\">Date Début</th>
                <th class=\"text-white\">Date Fin</th>
                <th class=\"text-white\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 26
            yield "                <tr>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "nomAcheteur", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "nomVendeur", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                    <td>";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "dateDebutContrat", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "dateDebutContrat", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                    <td>";
            // line 31
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "datefinContrat", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "datefinContrat", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">voir
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"post\" action=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce contrat ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 40))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                <i class=\"fas fa-trash-alt\"></i> Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "                <tr>
                    <td colspan=\"6\" class=\"text-center text-danger\">Aucun contrat trouvé.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </tbody>
    </table>
<div class=\"text-end mb-3\">
        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_new");
        yield "\" class=\"btn btn-success\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter un Contrat
        </a>
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
        return array (  194 => 55,  189 => 52,  180 => 48,  178 => 47,  166 => 40,  162 => 39,  156 => 36,  150 => 33,  145 => 31,  141 => 30,  137 => 29,  133 => 28,  129 => 27,  126 => 26,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des Contrats{% endblock %}

{% block body %}
<div class=\"row justify-content-center\"><div class=\"container d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; margin-left: 260px; \">
    <h1 class=\"text-center text-primary fw-bold\">
        <i class=\"fas fa-file-contract\"></i> Liste des Contrats
    </h1>

    

    <table class=\"table table-bordered table-striped\">
        <thead class=\"table-dark text-center\">
            <tr>
                <th class=\"text-white\">ID</th>
                <th class=\"text-white\">Acheteur</th>
                <th class=\"text-white\">Vendeur</th>
                <th class=\"text-white\">Date Début</th>
                <th class=\"text-white\">Date Fin</th>
                <th class=\"text-white\">Actions</th>
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
                        <form method=\"post\" action=\"{{ path('admin_contrat_delete', {'id': contrat.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce contrat ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ contrat.id) }}\">
                            <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                <i class=\"fas fa-trash-alt\"></i> Supprimer
                            </button>
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
<div class=\"text-end mb-3\">
        <a href=\"{{ path('admin_contrat_new') }}\" class=\"btn btn-success\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter un Contrat
        </a>
    </div>
</div>
{% endblock %}
", "admin/contrat/index_back.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\contrat\\index_back.html.twig");
    }
}
