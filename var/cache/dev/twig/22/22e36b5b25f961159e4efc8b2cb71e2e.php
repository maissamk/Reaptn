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
class __TwigTemplate_97b74f43452557c199c8b7ee71a140e6 extends Template
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
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_index");
        yield "\" class=\"mb-3 text-center\">
    <input type=\"text\" name=\"search\" placeholder=\"Rechercher par titre ou description...\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", ["search"], "method", false, false, false, 14), "html", null, true);
        yield "\" class=\"search-bar\">
    <button type=\"submit\">🔍</button>
</form>


    <!-- Bouton pour afficher/masquer les filtres avancés -->
    <button id=\"toggle-filters\" class=\"btn btn-secondary mb-3\">Filtres avancés</button>

    <!-- Filtres avancés -->
   <div id=\"filters\" class=\"filters-container hidden\">
    ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["method" => "GET"]);
        yield "
    <div>
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "type_terrain", [], "any", false, false, false, 26), 'label');
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "type_terrain", [], "any", false, false, false, 27), 'widget', ["attr" => ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "query", [], "any", false, false, false, 27), "get", ["type_terrain"], "method", false, false, false, 27)]]);
        yield "
    </div>
    <div>
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "emplacement", [], "any", false, false, false, 30), 'label');
        yield "
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "emplacement", [], "any", false, false, false, 31), 'widget', ["attr" => ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "query", [], "any", false, false, false, 31), "get", ["emplacement"], "method", false, false, false, 31)]]);
        yield "
    </div>
    <div>
        <label for=\"priceRange\">Prix:</label>
        <input type=\"number\" name=\"prixMin\" placeholder=\"Prix min\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "query", [], "any", false, false, false, 35), "get", ["prixMin"], "method", false, false, false, 35), "html", null, true);
        yield "\">
        <input type=\"number\" name=\"prixMax\" placeholder=\"Prix max\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "get", ["prixMax"], "method", false, false, false, 36), "html", null, true);
        yield "\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Appliquer les filtres</button>
    ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        yield "
</div>


    <div class=\"row\">
       ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcelle_proprietes"]) || array_key_exists("parcelle_proprietes", $context) ? $context["parcelle_proprietes"] : (function () { throw new RuntimeError('Variable "parcelle_proprietes" does not exist.', 44, $this->source); })()));
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
            // line 45
            yield "        <div class=\"col-md-4 mb-4\">
            <div class=\"position-relative border border-secondary rounded shadow-sm\">
                ";
            // line 47
            if (CoreExtension::inFilter($context["parcelle_propriete"], (isset($context["recentes"]) || array_key_exists("recentes", $context) ? $context["recentes"] : (function () { throw new RuntimeError('Variable "recentes" does not exist.', 47, $this->source); })()))) {
                // line 48
                yield "                    <span class=\"badge bg-danger text-white position-absolute top-0 start-0 m-2\">Nouveau</span>
                ";
            }
            // line 50
            yield "
                <img src=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "image", [], "any", false, false, false, 51)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "image", [], "any", false, false, false, 51))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                     class=\"img-fluid card-img-fixed\" alt=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 52), "html", null, true);
            yield "\"
                     loading=\"lazy\">

                <div class=\"terrain-type-band\" style=\"background-color: ";
            // line 55
            yield (((CoreExtension::getAttribute($this->env, $this->source,             // line 56
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 56) == "agricole")) ? ("#8BC34A") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 57
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 57) == "constructible")) ? ("#FFC107") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 58
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 58) == "foret")) ? ("#4CAF50") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 59
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 59) == "industriel")) ? ("#F44336") : ("#9E9E9E"))))))));
            yield "\">
                    <p class=\"text-center text-white fw-bold mb-0\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 60)), "html", null, true);
            yield "</p>
                </div>

                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                    <h4>
                        <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
                            ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 66), "html", null, true);
            yield "
                        </a>
                    </h4>
                    <p class=\"description\">
                        ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 70), 0, 50), "html", null, true);
            yield "<span class=\"dots\">...</span>
                        <span class=\"more-text\" style=\"display: none;\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 71), 100, null), "html", null, true);
            yield "</span>
                        <a href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" class=\"see-more\">plus</a>
                    </p>
                    <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "prix", [], "any", false, false, false, 74), "html", null, true);
            yield " DT </p>
                    <p class=\"text-dark fs-5 fw-bold mb-2\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "status", [], "any", false, false, false, 75), "html", null, true);
            yield " : Status Actuel</p>
                    <p class=\"text-dark fs-5 fw-bold mb-2\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "taille", [], "any", false, false, false, 76), "html", null, true);
            yield " (m²)</p>

<a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcelles_par_type", ["type_terrain" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" 
   class=\"btn btn-info btn-sm text-white mt-2\">
    <i class=\"fas fa-list\"></i> Afficher similaires
</a>





                    ";
            // line 87
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
                // line 88
                yield "                        <div class=\"text-center mt-3\">
                            <a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm text-white\"><i class=\"fas fa-edit\"></i> Modifier</a>
                            





                            
                            <div class=\"text-center mt-3\">
                                ";
                // line 98
                yield Twig\Extension\CoreExtension::include($this->env, $context, "parcelle_proprietes/_delete_form.html.twig");
                yield "
                            </div>
                        </div>
                    ";
            }
            // line 102
            yield "                </div>
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

.hidden {
    display: none;
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


.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-info:hover {
    background-color: #138496;
    border-color: #117a8b;
}



.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-info:hover {
    background-color: #138496;
    border-color: #117a8b;
}

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
        return array (  345 => 118,  339 => 115,  335 => 114,  332 => 113,  330 => 112,  326 => 110,  317 => 106,  315 => 105,  300 => 102,  293 => 98,  281 => 89,  278 => 88,  276 => 87,  264 => 78,  259 => 76,  255 => 75,  251 => 74,  246 => 72,  242 => 71,  238 => 70,  231 => 66,  227 => 65,  219 => 60,  215 => 59,  214 => 58,  213 => 57,  212 => 56,  211 => 55,  205 => 52,  201 => 51,  198 => 50,  194 => 48,  192 => 47,  188 => 45,  170 => 44,  162 => 39,  156 => 36,  152 => 35,  145 => 31,  141 => 30,  135 => 27,  131 => 26,  126 => 24,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
    
<form method=\"GET\" action=\"{{ path('app_parcelle_proprietes_index') }}\" class=\"mb-3 text-center\">
    <input type=\"text\" name=\"search\" placeholder=\"Rechercher par titre ou description...\" value=\"{{ app.request.query.get('search') }}\" class=\"search-bar\">
    <button type=\"submit\">🔍</button>
</form>


    <!-- Bouton pour afficher/masquer les filtres avancés -->
    <button id=\"toggle-filters\" class=\"btn btn-secondary mb-3\">Filtres avancés</button>

    <!-- Filtres avancés -->
   <div id=\"filters\" class=\"filters-container hidden\">
    {{ form_start(form, { 'method': 'GET' }) }}
    <div>
        {{ form_label(form.type_terrain) }}
        {{ form_widget(form.type_terrain, { 'attr': {'value': app.request.query.get('type_terrain')} }) }}
    </div>
    <div>
        {{ form_label(form.emplacement) }}
        {{ form_widget(form.emplacement, { 'attr': {'value': app.request.query.get('emplacement')} }) }}
    </div>
    <div>
        <label for=\"priceRange\">Prix:</label>
        <input type=\"number\" name=\"prixMin\" placeholder=\"Prix min\" value=\"{{ app.request.query.get('prixMin') }}\">
        <input type=\"number\" name=\"prixMax\" placeholder=\"Prix max\" value=\"{{ app.request.query.get('prixMax') }}\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Appliquer les filtres</button>
    {{ form_end(form) }}
</div>


    <div class=\"row\">
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
                            





                            
                            <div class=\"text-center mt-3\">
                                {{ include('parcelle_proprietes/_delete_form.html.twig') }}
                            </div>
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

.hidden {
    display: none;
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


.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-info:hover {
    background-color: #138496;
    border-color: #117a8b;
}



.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-info:hover {
    background-color: #138496;
    border-color: #117a8b;
}

</script>


{% endblock %}
", "parcelle_proprietes/index.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\parcelle_proprietes\\index.html.twig");
    }
}
