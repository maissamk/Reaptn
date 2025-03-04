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
class __TwigTemplate_9509d47649b46b9ddc3427eaeab11ba0 extends Template
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

    <!-- Barre de recherche -->
    <form method=\"GET\" action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
        yield "\" class=\"mb-3 text-center\" id=\"search-form\">
        <div class=\"input-group\">
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher par titre ou description...\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", ["search"], "method", false, false, false, 14), "html", null, true);
        yield "\" class=\"form-control search-bar\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>

   <!-- Bouton pour afficher/masquer les filtres avancés -->
<button id=\"toggle-filters\" class=\"btn btn-secondary mb-3\">Filtres avancés</button>

<!-- Filtres avancés -->
<div id=\"filters\" class=\"filters-container hidden\">
    ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["method" => "GET"]);
        yield "
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "type_terrain", [], "any", false, false, false, 27), 'label');
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "type_terrain", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        ";
        // line 31
        yield "<div class=\"col-md-4 position-relative\">
    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "emplacement", [], "any", false, false, false, 32), 'label');
        yield "
    <input type=\"text\" id=\"autocomplete\" name=\"emplacement\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "query", [], "any", false, false, false, 33), "get", ["emplacement"], "method", false, false, false, 33), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"Rechercher un emplacement...\">
    <ul id=\"suggestions\" class=\"list-group position-absolute w-100\"></ul>
</div>


        <!-- Regroupement des champs Prix min et Prix max -->
        <div class=\"col-md-4\">
            <label>Prix (TND)</label>
            <div class=\"input-group\">
                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "prixMin", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "type" => "number", "step" => "1", "placeholder" => "Min", "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "query", [], "any", false, false, false, 42), "get", ["prixMin"], "method", false, false, false, 42)]]);
        yield "
                <span class=\"input-group-text\">-</span>
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "prixMax", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "type" => "number", "step" => "1", "placeholder" => "Max", "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "get", ["prixMax"], "method", false, false, false, 44)]]);
        yield "
            </div>
        </div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">Appliquer les filtres</button>
        </div>
    </div>
    ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
</div>

    <div class=\"row mt-4\">
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcelle_proprietes"]) || array_key_exists("parcelle_proprietes", $context) ? $context["parcelle_proprietes"] : (function () { throw new RuntimeError('Variable "parcelle_proprietes" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["parcelle_propriete"]) {
            // line 58
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm\">
                    ";
            // line 60
            if (CoreExtension::inFilter($context["parcelle_propriete"], (isset($context["recentes"]) || array_key_exists("recentes", $context) ? $context["recentes"] : (function () { throw new RuntimeError('Variable "recentes" does not exist.', 60, $this->source); })()))) {
                // line 61
                yield "                        <span class=\"badge bg-danger text-white position-absolute top-0 start-0 m-2\">Nouveau</span>
                    ";
            }
            // line 63
            yield "
                    <img src=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "image", [], "any", false, false, false, 64)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "image", [], "any", false, false, false, 64))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                         class=\"img-fluid card-img-fixed\" alt=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 65), "html", null, true);
            yield "\"
                         loading=\"lazy\">

                    <div class=\"terrain-type-band\" style=\"background-color: ";
            // line 68
            yield (((CoreExtension::getAttribute($this->env, $this->source,             // line 69
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 69) == "agricole")) ? ("#8BC34A") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 70
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 70) == "constructible")) ? ("#FFC107") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 71
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 71) == "foret")) ? ("#4CAF50") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 72
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 72) == "industriel")) ? ("#F44336") : ("#9E9E9E"))))))));
            yield "\">
                        <p class=\"text-center text-white fw-bold mb-0\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 73)), "html", null, true);
            yield "</p>
                    </div>

                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>
                            <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
                                ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 79), "html", null, true);
            yield "
                            </a>
                        </h4>
                        <p class=\"description\">
                            ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 83), 0, 50), "html", null, true);
            yield "<span class=\"dots\">...</span>
                            <span class=\"more-text\" style=\"display: none;\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 84), 100, null), "html", null, true);
            yield "</span>
                            <a href=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\" class=\"see-more\">plus</a>
                        </p>
                        <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "prix", [], "any", false, false, false, 87), "html", null, true);
            yield " DT </p>
                        <p class=\"text-dark fs-5 fw-bold mb-2\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "status", [], "any", false, false, false, 88), "html", null, true);
            yield " : Status Actuel</p>
                        <p class=\"text-dark fs-5 fw-bold mb-2\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "taille", [], "any", false, false, false, 89), "html", null, true);
            yield " (m²)</p>

                        <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcelles_par_type", ["type_terrain" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-info btn-sm text-white mt-2\">
                            <i class=\"fas fa-list\"></i> Afficher similaires
                        </a>

                        ";
            // line 96
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
                // line 97
                yield "                            <div class=\"text-center mt-3\">
                                <a href=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm text-white\"><i class=\"fas fa-edit\"></i> Modifier</a>
                                ";
                // line 99
                yield Twig\Extension\CoreExtension::include($this->env, $context, "parcelle_proprietes/_delete_form.html.twig");
                yield "
                            </div>
                        ";
            }
            // line 102
            yield "                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 105
        if (!$context['_iterated']) {
            // line 106
            yield "            <div class=\"col-12 text-center\">
                <p>Aucun enregistrement trouvé</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parcelle_propriete'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "    </div>

    ";
        // line 112
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 113
            yield "        <div class=\"d-flex justify-content-center mt-3\">
            <a href=\"";
            // line 114
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_new");
            yield "\" class=\"btn btn-success me-2\"><i class=\"fas fa-plus-circle\"></i> Créer une nouvelle Annonce</a>
            <a href=\"";
            // line 115
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_index");
            yield "\" class=\"btn btn-success me-2\"><i class=\"fas fa-file-contract\"></i> Créer un contrat</a>
        </div>
    ";
        }
        // line 118
        yield "</div>

<style>
.card-img-fixed {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.terrain-type-band {
    width: 100%;
    padding: 12px 0;
    margin-top: -10px;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    font-size: 1rem;
}

.badge {
    font-size: 0.8em;
    padding: 0.4em 0.6em;
    border-radius: 0.5em;
}

h4 a {
    text-decoration: none;
    transition: color 0.3s, border-bottom 0.3s;
    border-bottom: 2px solid transparent;
}

h4 a:hover {
    color: #007bff;
    border-bottom: 2px solid #007bff;
}

.hidden {
    display: none;
}

.search-bar {
    width: 60%;
    padding: 10px;
    margin-right: 10px;
}

#toggle-filters {
    background-color: #f04f4f;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
}

.filters-container {
    display: none;
    margin-top: 10px;
    padding: 15px;
    border: 1px solid #ddd;
}

#search-form {
    position: relative;
    z-index: 10; /* Ensure search bar is above other content */
}

#filters {
    position: relative;
    z-index: 5;
}

#suggestions {
    z-index: 9999; /* Higher value to ensure suggestions are above other content */
}
</style>

<script>
document.getElementById('toggle-filters').addEventListener('click', function() {
    let filtersDiv = document.getElementById('filters');
    if (filtersDiv.style.display === \"none\" || filtersDiv.style.display === \"\") {
        filtersDiv.style.display = \"block\";
    } else {
        filtersDiv.style.display = \"none\";
    }
});
</script>
<script src=\"https://cdn.ckeditor.com/4.21.0/full-all/ckeditor.js\"></script>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    let input = document.getElementById(\"autocomplete\");
    let suggestionsList = document.getElementById(\"suggestions\");

    input.addEventListener(\"input\", function() {
        let query = input.value.trim();
        if (query.length < 2) {
            suggestionsList.innerHTML = \"\";
            return;
        }

        fetch(`https://nominatim.openstreetmap.org/search?format=json&q=\${query}`)
            .then(response => response.json())
            .then(data => {
                suggestionsList.innerHTML = \"\";
                data.forEach(place => {
                    let item = document.createElement(\"li\");
                    item.classList.add(\"list-group-item\", \"list-group-item-action\");
                    item.textContent = place.display_name;
                    item.onclick = function() {
                        input.value = place.display_name;
                        suggestionsList.innerHTML = \"\";
                    };
                    suggestionsList.appendChild(item);
                });
            });
    });

    // Cacher les suggestions si on clique en dehors
    document.addEventListener(\"click\", function(event) {
        if (!input.contains(event.target) && !suggestionsList.contains(event.target)) {
            suggestionsList.innerHTML = \"\";
        }
    });
});
</script>

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
        return array (  346 => 118,  340 => 115,  336 => 114,  333 => 113,  331 => 112,  327 => 110,  318 => 106,  316 => 105,  301 => 102,  295 => 99,  291 => 98,  288 => 97,  286 => 96,  278 => 91,  273 => 89,  269 => 88,  265 => 87,  260 => 85,  256 => 84,  252 => 83,  245 => 79,  241 => 78,  233 => 73,  229 => 72,  228 => 71,  227 => 70,  226 => 69,  225 => 68,  219 => 65,  215 => 64,  212 => 63,  208 => 61,  206 => 60,  202 => 58,  184 => 57,  177 => 53,  165 => 44,  160 => 42,  148 => 33,  144 => 32,  141 => 31,  136 => 28,  132 => 27,  126 => 24,  113 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ParcelleProprietes index{% endblock %}

{% block body %}

<!-- ParcelleProprietes Content -->
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\">ParcelleProprietes index</h1>

    <!-- Barre de recherche -->
    <form method=\"GET\" action=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"mb-3 text-center\" id=\"search-form\">
        <div class=\"input-group\">
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher par titre ou description...\" value=\"{{ app.request.query.get('search') }}\" class=\"form-control search-bar\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>

   <!-- Bouton pour afficher/masquer les filtres avancés -->
<button id=\"toggle-filters\" class=\"btn btn-secondary mb-3\">Filtres avancés</button>

<!-- Filtres avancés -->
<div id=\"filters\" class=\"filters-container hidden\">
    {{ form_start(form, { 'method': 'GET' }) }}
    <div class=\"row\">
        <div class=\"col-md-4\">
            {{ form_label(form.type_terrain) }}
            {{ form_widget(form.type_terrain, { 'attr': {'class': 'form-control'} }) }}
        </div>
        {# Remplacez cette partie #}
<div class=\"col-md-4 position-relative\">
    {{ form_label(form.emplacement) }}
    <input type=\"text\" id=\"autocomplete\" name=\"emplacement\" value=\"{{ app.request.query.get('emplacement') }}\" class=\"form-control\" placeholder=\"Rechercher un emplacement...\">
    <ul id=\"suggestions\" class=\"list-group position-absolute w-100\"></ul>
</div>


        <!-- Regroupement des champs Prix min et Prix max -->
        <div class=\"col-md-4\">
            <label>Prix (TND)</label>
            <div class=\"input-group\">
                {{ form_widget(form.prixMin, { 'attr': {'class': 'form-control', 'type': 'number', 'step': '1', 'placeholder': 'Min', 'value': app.request.query.get('prixMin')} }) }}
                <span class=\"input-group-text\">-</span>
                {{ form_widget(form.prixMax, { 'attr': {'class': 'form-control', 'type': 'number', 'step': '1', 'placeholder': 'Max', 'value': app.request.query.get('prixMax')} }) }}
            </div>
        </div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">Appliquer les filtres</button>
        </div>
    </div>
    {{ form_end(form) }}
</div>

    <div class=\"row mt-4\">
        {% for parcelle_propriete in parcelle_proprietes %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm\">
                    {% if parcelle_propriete in recentes %}
                        <span class=\"badge bg-danger text-white position-absolute top-0 start-0 m-2\">Nouveau</span>
                    {% endif %}

                    <img src=\"{{ asset(parcelle_propriete.image ? 'uploads/images/' ~ parcelle_propriete.image : 'images/default.png') }}\" 
                         class=\"img-fluid card-img-fixed\" alt=\"{{ parcelle_propriete.titre }}\"
                         loading=\"lazy\">

                    <div class=\"terrain-type-band\" style=\"background-color: {{ 
                        parcelle_propriete.typeTerrain == 'agricole' ? '#8BC34A' : 
                        parcelle_propriete.typeTerrain == 'constructible' ? '#FFC107' : 
                        parcelle_propriete.typeTerrain == 'foret' ? '#4CAF50' : 
                        parcelle_propriete.typeTerrain == 'industriel' ? '#F44336' : '#9E9E9E' }}\">
                        <p class=\"text-center text-white fw-bold mb-0\">{{ parcelle_propriete.typeTerrain | capitalize }}</p>
                    </div>

                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>
                            <a href=\"{{ path('app_parcelle_proprietes_show', {'id': parcelle_propriete.id}) }}\" class=\"text-decoration-none text-dark\">
                                {{ parcelle_propriete.titre }}
                            </a>
                        </h4>
                        <p class=\"description\">
                            {{ parcelle_propriete.description[:50] }}<span class=\"dots\">...</span>
                            <span class=\"more-text\" style=\"display: none;\">{{ parcelle_propriete.description[100:] }}</span>
                            <a href=\"{{ path('app_parcelle_proprietes_show', {'id': parcelle_propriete.id}) }}\" class=\"see-more\">plus</a>
                        </p>
                        <p class=\"text-dark fs-5 fw-bold mb-0\">{{ parcelle_propriete.prix }} DT </p>
                        <p class=\"text-dark fs-5 fw-bold mb-2\">{{ parcelle_propriete.status }} : Status Actuel</p>
                        <p class=\"text-dark fs-5 fw-bold mb-2\">{{ parcelle_propriete.taille }} (m²)</p>

                        <a href=\"{{ path('parcelles_par_type', {'type_terrain': parcelle_propriete.typeTerrain}) }}\" 
                           class=\"btn btn-info btn-sm text-white mt-2\">
                            <i class=\"fas fa-list\"></i> Afficher similaires
                        </a>

                        {% if is_granted('ROLE_AGRICULTEUR') %}
                            <div class=\"text-center mt-3\">
                                <a href=\"{{ path('app_parcelle_proprietes_edit', {'id': parcelle_propriete.id}) }}\" class=\"btn btn-warning btn-sm text-white\"><i class=\"fas fa-edit\"></i> Modifier</a>
                                {{ include('parcelle_proprietes/_delete_form.html.twig') }}
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
    </div>

    {% if is_granted('ROLE_AGRICULTEUR') %}
        <div class=\"d-flex justify-content-center mt-3\">
            <a href=\"{{ path('app_parcelle_proprietes_new') }}\" class=\"btn btn-success me-2\"><i class=\"fas fa-plus-circle\"></i> Créer une nouvelle Annonce</a>
            <a href=\"{{ path('app_contrat_index') }}\" class=\"btn btn-success me-2\"><i class=\"fas fa-file-contract\"></i> Créer un contrat</a>
        </div>
    {% endif %}
</div>

<style>
.card-img-fixed {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.terrain-type-band {
    width: 100%;
    padding: 12px 0;
    margin-top: -10px;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    font-size: 1rem;
}

.badge {
    font-size: 0.8em;
    padding: 0.4em 0.6em;
    border-radius: 0.5em;
}

h4 a {
    text-decoration: none;
    transition: color 0.3s, border-bottom 0.3s;
    border-bottom: 2px solid transparent;
}

h4 a:hover {
    color: #007bff;
    border-bottom: 2px solid #007bff;
}

.hidden {
    display: none;
}

.search-bar {
    width: 60%;
    padding: 10px;
    margin-right: 10px;
}

#toggle-filters {
    background-color: #f04f4f;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
}

.filters-container {
    display: none;
    margin-top: 10px;
    padding: 15px;
    border: 1px solid #ddd;
}

#search-form {
    position: relative;
    z-index: 10; /* Ensure search bar is above other content */
}

#filters {
    position: relative;
    z-index: 5;
}

#suggestions {
    z-index: 9999; /* Higher value to ensure suggestions are above other content */
}
</style>

<script>
document.getElementById('toggle-filters').addEventListener('click', function() {
    let filtersDiv = document.getElementById('filters');
    if (filtersDiv.style.display === \"none\" || filtersDiv.style.display === \"\") {
        filtersDiv.style.display = \"block\";
    } else {
        filtersDiv.style.display = \"none\";
    }
});
</script>
<script src=\"https://cdn.ckeditor.com/4.21.0/full-all/ckeditor.js\"></script>

<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    let input = document.getElementById(\"autocomplete\");
    let suggestionsList = document.getElementById(\"suggestions\");

    input.addEventListener(\"input\", function() {
        let query = input.value.trim();
        if (query.length < 2) {
            suggestionsList.innerHTML = \"\";
            return;
        }

        fetch(`https://nominatim.openstreetmap.org/search?format=json&q=\${query}`)
            .then(response => response.json())
            .then(data => {
                suggestionsList.innerHTML = \"\";
                data.forEach(place => {
                    let item = document.createElement(\"li\");
                    item.classList.add(\"list-group-item\", \"list-group-item-action\");
                    item.textContent = place.display_name;
                    item.onclick = function() {
                        input.value = place.display_name;
                        suggestionsList.innerHTML = \"\";
                    };
                    suggestionsList.appendChild(item);
                });
            });
    });

    // Cacher les suggestions si on clique en dehors
    document.addEventListener(\"click\", function(event) {
        if (!input.contains(event.target) && !suggestionsList.contains(event.target)) {
            suggestionsList.innerHTML = \"\";
        }
    });
});
</script>

{% endblock %}
", "parcelle_proprietes/index.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\parcelle_proprietes\\index.html.twig");
    }
}
