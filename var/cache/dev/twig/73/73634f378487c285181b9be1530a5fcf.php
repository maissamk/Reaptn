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
class __TwigTemplate_32856d73cf8e10b0ffae551b3f3c0acf extends Template
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
        yield "\" class=\"mb-3 text-center\">
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "type_terrain", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "query", [], "any", false, false, false, 28), "get", ["type_terrain"], "method", false, false, false, 28)]]);
        yield "
            </div>
            <div class=\"col-md-4\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "emplacement", [], "any", false, false, false, 31), 'label');
        yield "
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "emplacement", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "query", [], "any", false, false, false, 32), "get", ["emplacement"], "method", false, false, false, 32)]]);
        yield "
            </div>
            <div class=\"col-md-4\">
                <label for=\"priceRange\">Prix:</label>
                <input type=\"number\" name=\"prixMin\" placeholder=\"Prix min\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "get", ["prixMin"], "method", false, false, false, 36), "html", null, true);
        yield "\" class=\"form-control\">
                <input type=\"number\" name=\"prixMax\" placeholder=\"Prix max\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "get", ["prixMax"], "method", false, false, false, 37), "html", null, true);
        yield "\" class=\"form-control\">
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 text-center\">
                <button type=\"submit\" class=\"btn btn-primary\">Appliquer les filtres</button>
            </div>
        </div>
        ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        yield "
    </div>

    <div class=\"row\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcelle_proprietes"]) || array_key_exists("parcelle_proprietes", $context) ? $context["parcelle_proprietes"] : (function () { throw new RuntimeError('Variable "parcelle_proprietes" does not exist.', 49, $this->source); })()));
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
            // line 50
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm\">
                    ";
            // line 52
            if (CoreExtension::inFilter($context["parcelle_propriete"], (isset($context["recentes"]) || array_key_exists("recentes", $context) ? $context["recentes"] : (function () { throw new RuntimeError('Variable "recentes" does not exist.', 52, $this->source); })()))) {
                // line 53
                yield "                        <span class=\"badge bg-danger text-white position-absolute top-0 start-0 m-2\">Nouveau</span>
                    ";
            }
            // line 55
            yield "
                    <img src=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "image", [], "any", false, false, false, 56)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "image", [], "any", false, false, false, 56))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                         class=\"img-fluid card-img-fixed\" alt=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 57), "html", null, true);
            yield "\"
                         loading=\"lazy\">

 <div class=\"terrain-type-band\" style=\"background-color: ";
            // line 60
            yield (((CoreExtension::getAttribute($this->env, $this->source,             // line 61
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 61) == "agricole")) ? ("#8BC34A") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 62
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 62) == "constructible")) ? ("#FFC107") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 63
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 63) == "foret")) ? ("#4CAF50") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 64) == "industriel")) ? ("#F44336") : ("#9E9E9E"))))))));
            yield "\">
    <p class=\"text-center text-white fw-bold mb-0\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 65)), "html", null, true);
            yield "</p>
</div>

                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>
                            <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
                                ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "titre", [], "any", false, false, false, 71), "html", null, true);
            yield "
                            </a>
                        </h4>
                        <p class=\"description\">
                            ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 75), 0, 50), "html", null, true);
            yield "<span class=\"dots\">...</span>
                            <span class=\"more-text\" style=\"display: none;\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "description", [], "any", false, false, false, 76), 100, null), "html", null, true);
            yield "</span>
                            <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"see-more\">plus</a>
                        </p>
                        <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "prix", [], "any", false, false, false, 79), "html", null, true);
            yield " DT </p>
                        <p class=\"text-dark fs-5 fw-bold mb-2\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "status", [], "any", false, false, false, 80), "html", null, true);
            yield " : Status Actuel</p>
                        <p class=\"text-dark fs-5 fw-bold mb-2\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "taille", [], "any", false, false, false, 81), "html", null, true);
            yield " (m²)</p>

                        <a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parcelles_par_type", ["type_terrain" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "typeTerrain", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-info btn-sm text-white mt-2\">
                            <i class=\"fas fa-list\"></i> Afficher similaires
                        </a>

                        ";
            // line 88
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
                // line 89
                yield "                            <div class=\"text-center mt-3\">
                                <a href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["parcelle_propriete"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm text-white\"><i class=\"fas fa-edit\"></i> Modifier</a>
                                ";
                // line 91
                yield Twig\Extension\CoreExtension::include($this->env, $context, "parcelle_proprietes/_delete_form.html.twig");
                yield "
                            </div>
                        ";
            }
            // line 94
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
        // line 97
        if (!$context['_iterated']) {
            // line 98
            yield "            <div class=\"col-12 text-center\">
                <p>Aucun enregistrement trouvé</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parcelle_propriete'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "    </div>

    ";
        // line 104
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 105
            yield "        <div class=\"d-flex justify-content-center mt-3\">
            <a href=\"";
            // line 106
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcelle_proprietes_new");
            yield "\" class=\"btn btn-success me-2\"><i class=\"fas fa-plus-circle\"></i> Créer une nouvelle Annonce</a>
            <a href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_index");
            yield "\" class=\"btn btn-success me-2\"><i class=\"fas fa-file-contract\"></i> Créer un contrat</a>
        </div>
    ";
        }
        // line 110
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
</script>
<script src=\"https://cdn.ckeditor.com/4.21.0/full-all/ckeditor.js\"></script>

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
        return array (  337 => 110,  331 => 107,  327 => 106,  324 => 105,  322 => 104,  318 => 102,  309 => 98,  307 => 97,  292 => 94,  286 => 91,  282 => 90,  279 => 89,  277 => 88,  269 => 83,  264 => 81,  260 => 80,  256 => 79,  251 => 77,  247 => 76,  243 => 75,  236 => 71,  232 => 70,  224 => 65,  220 => 64,  219 => 63,  218 => 62,  217 => 61,  216 => 60,  210 => 57,  206 => 56,  203 => 55,  199 => 53,  197 => 52,  193 => 50,  175 => 49,  168 => 45,  157 => 37,  153 => 36,  146 => 32,  142 => 31,  136 => 28,  132 => 27,  126 => 24,  113 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                {{ form_widget(form.type_terrain, { 'attr': {'class': 'form-control', 'value': app.request.query.get('type_terrain')} }) }}
            </div>
            <div class=\"col-md-4\">
                {{ form_label(form.emplacement) }}
                {{ form_widget(form.emplacement, { 'attr': {'class': 'form-control', 'value': app.request.query.get('emplacement')} }) }}
            </div>
            <div class=\"col-md-4\">
                <label for=\"priceRange\">Prix:</label>
                <input type=\"number\" name=\"prixMin\" placeholder=\"Prix min\" value=\"{{ app.request.query.get('prixMin') }}\" class=\"form-control\">
                <input type=\"number\" name=\"prixMax\" placeholder=\"Prix max\" value=\"{{ app.request.query.get('prixMax') }}\" class=\"form-control\">
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-12 text-center\">
                <button type=\"submit\" class=\"btn btn-primary\">Appliquer les filtres</button>
            </div>
        </div>
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
</script>
<script src=\"https://cdn.ckeditor.com/4.21.0/full-all/ckeditor.js\"></script>

{% endblock %}", "parcelle_proprietes/index.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\parcelle_proprietes\\index.html.twig");
    }
}
