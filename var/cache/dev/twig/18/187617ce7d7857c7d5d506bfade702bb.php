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

/* materielvente/show.html.twig */
class __TwigTemplate_ce90ea9de0f24721826e875705afdae4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materielvente/show.html.twig", 1);
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

        yield "Détails du Matériel";
        
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
        yield "<div class=\"container\" style=\"margin-top: 180px;\">
    <div class=\"card shadow-lg p-4 rounded\">
        <div class=\"text-center\">
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10))), "html", null, true);
            yield "\" 
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
            yield "\" 
                     width=\"150\" height=\"150\">
            ";
        } else {
            // line 15
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.png"), "html", null, true);
            yield "\"
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"Image par défaut\" 
                     width=\"150\" height=\"150\">
            ";
        }
        // line 20
        yield "            <h2 class=\"mt-3 text-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        yield "</h2>
        </div>

        <div class=\"mt-4\">
            <h4 class=\"text-warning text-center\">Informations sur le matériel</h4>
            <table class=\"table table-bordered mt-3\">
                <tbody>
                    <tr>
                        <th class=\"bg-light\">Nom</th>
                        <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Catégorie</th>
                        <td>
                            ";
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 34, $this->source); })()), "categorie", [], "any", false, false, false, 34)) {
            // line 35
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 35, $this->source); })()), "categorie", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
            yield "
                            ";
        } else {
            // line 37
            yield "                                <span class=\"text-danger\">Aucune catégorie</span>
                            ";
        }
        // line 39
        yield "                        </td>
                    </tr>
                        <th class=\"bg-light\">Prix</th>
                        <td class=\"fw-bold text-primary\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 42, $this->source); })()), "prix", [], "any", false, false, false, 42), "html", null, true);
        yield " DT</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Description</th>
                        <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Disponibilité</th>
                        <td>
                            ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 51, $this->source); })()), "disponibilite", [], "any", false, false, false, 51)) {
            // line 52
            yield "                                <span class=\"badge bg-success\">Disponible</span>
                            ";
        } else {
            // line 54
            yield "                                <span class=\"badge bg-danger\">Non disponible</span>
                            ";
        }
        // line 56
        yield "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

 



        <div class=\"d-flex justify-content-center mt-4\">
            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_index");
        yield "\" class=\"btn btn-primary me-3\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
            <form id=\"analyze-form\">
\t\t\t\t\t<input type=\"hidden\" id=\"image-path\" value=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 71, $this->source); })()), "image", [], "any", false, false, false, 71), "html", null, true);
        yield "\">
\t\t\t\t\t<button type=\"submit\" id=\"analyze-btn\" class=\"btn btn-primary flex items-center gap-2\">
\t\t\t\t\t\t<i class=\"fa fa-circle-plus\"></i>
\t\t\t\t\t\tGenerate a description for the image
\t\t\t\t\t</button>
\t\t\t\t</form>

\t\t\t\t<div id=\"loading-spinner\" class=\"spinner-border text-primary mt-2\" style=\"display: none;\" role=\"status\">
\t\t\t\t\t<span class=\"visually-hidden\">Loading...</span>
\t\t\t\t</div>

\t\t\t\t<p id=\"analysis-result\" class=\"text-center text-success mt-2\"></p>
        </div>
    </div>
</div>


<style>
    .card {
        max-width: 700px;
        margin: auto;
        border-radius: 12px;
    }

    .table th {
        width: 30%;
    }

    .table td {
        width: 70%;
    }
</style>

<script>
\t\tdocument.getElementById('analyze-form').addEventListener('submit', async function (event) {
    event.preventDefault();

    const imagePath = document.getElementById('image-path').value;
    const materielId = \"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materielvente"]) || array_key_exists("materielvente", $context) ? $context["materielvente"] : (function () { throw new RuntimeError('Variable "materielvente" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109), "html", null, true);
        yield "\"; // Get the material ID from Twig
    const analyzeBtn = document.getElementById('analyze-btn');
    const spinner = document.getElementById('loading-spinner');
    const resultElement = document.getElementById('analysis-result');

    // Show spinner and disable button
    analyzeBtn.disabled = true;
    spinner.style.display = \"block\";
    resultElement.innerText = \"\";

    try {
        const response = await fetch(`/materielvente/\${materielId}/analyze`, {  // Include ID in the URL
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ image: imagePath })
        });

        if (!response.ok) throw new Error(\"Server error\");

        const data = await response.json();
        resultElement.innerText = data.description;

    } catch (error) {
        console.error(\"Error:\", error);
        resultElement.innerText = \"Error processing image.\";
    } finally {
        // Hide spinner and enable button
        spinner.style.display = \"none\";
        analyzeBtn.disabled = false;
    }
});
\t</script>

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
        return "materielvente/show.html.twig";
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
        return array (  252 => 109,  211 => 71,  204 => 67,  191 => 56,  187 => 54,  183 => 52,  181 => 51,  173 => 46,  166 => 42,  161 => 39,  157 => 37,  151 => 35,  149 => 34,  141 => 29,  128 => 20,  119 => 15,  113 => 12,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Matériel{% endblock %}

{% block body %}
<div class=\"container\" style=\"margin-top: 180px;\">
    <div class=\"card shadow-lg p-4 rounded\">
        <div class=\"text-center\">
            {% if materielvente.image %}
                <img src=\"{{ asset('uploads/images/' ~ materielvente.image) }}\" 
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"{{ materielvente.nom }}\" 
                     width=\"150\" height=\"150\">
            {% else %}
                <img src=\"{{ asset('images/default.png') }}\"
                     class=\"rounded-circle border border-secondary\" 
                     alt=\"Image par défaut\" 
                     width=\"150\" height=\"150\">
            {% endif %}
            <h2 class=\"mt-3 text-success\">{{ materielvente.nom }}</h2>
        </div>

        <div class=\"mt-4\">
            <h4 class=\"text-warning text-center\">Informations sur le matériel</h4>
            <table class=\"table table-bordered mt-3\">
                <tbody>
                    <tr>
                        <th class=\"bg-light\">Nom</th>
                        <td>{{ materielvente.nom }}</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Catégorie</th>
                        <td>
                            {% if materielvente.categorie %}
                                {{ materielvente.categorie.nom }}
                            {% else %}
                                <span class=\"text-danger\">Aucune catégorie</span>
                            {% endif %}
                        </td>
                    </tr>
                        <th class=\"bg-light\">Prix</th>
                        <td class=\"fw-bold text-primary\">{{ materielvente.prix }} DT</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Description</th>
                        <td>{{ materielvente.description }}</td>
                    </tr>
                    <tr>
                        <th class=\"bg-light\">Disponibilité</th>
                        <td>
                            {% if materielvente.disponibilite %}
                                <span class=\"badge bg-success\">Disponible</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Non disponible</span>
                            {% endif %}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

 



        <div class=\"d-flex justify-content-center mt-4\">
            <a href=\"{{ path('app_materielvente_index') }}\" class=\"btn btn-primary me-3\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
            <form id=\"analyze-form\">
\t\t\t\t\t<input type=\"hidden\" id=\"image-path\" value=\"{{ materielvente.image }}\">
\t\t\t\t\t<button type=\"submit\" id=\"analyze-btn\" class=\"btn btn-primary flex items-center gap-2\">
\t\t\t\t\t\t<i class=\"fa fa-circle-plus\"></i>
\t\t\t\t\t\tGenerate a description for the image
\t\t\t\t\t</button>
\t\t\t\t</form>

\t\t\t\t<div id=\"loading-spinner\" class=\"spinner-border text-primary mt-2\" style=\"display: none;\" role=\"status\">
\t\t\t\t\t<span class=\"visually-hidden\">Loading...</span>
\t\t\t\t</div>

\t\t\t\t<p id=\"analysis-result\" class=\"text-center text-success mt-2\"></p>
        </div>
    </div>
</div>


<style>
    .card {
        max-width: 700px;
        margin: auto;
        border-radius: 12px;
    }

    .table th {
        width: 30%;
    }

    .table td {
        width: 70%;
    }
</style>

<script>
\t\tdocument.getElementById('analyze-form').addEventListener('submit', async function (event) {
    event.preventDefault();

    const imagePath = document.getElementById('image-path').value;
    const materielId = \"{{ materielvente.id }}\"; // Get the material ID from Twig
    const analyzeBtn = document.getElementById('analyze-btn');
    const spinner = document.getElementById('loading-spinner');
    const resultElement = document.getElementById('analysis-result');

    // Show spinner and disable button
    analyzeBtn.disabled = true;
    spinner.style.display = \"block\";
    resultElement.innerText = \"\";

    try {
        const response = await fetch(`/materielvente/\${materielId}/analyze`, {  // Include ID in the URL
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ image: imagePath })
        });

        if (!response.ok) throw new Error(\"Server error\");

        const data = await response.json();
        resultElement.innerText = data.description;

    } catch (error) {
        console.error(\"Error:\", error);
        resultElement.innerText = \"Error processing image.\";
    } finally {
        // Hide spinner and enable button
        spinner.style.display = \"none\";
        analyzeBtn.disabled = false;
    }
});
\t</script>

{% endblock %}
", "materielvente/show.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\materielvente\\show.html.twig");
    }
}
