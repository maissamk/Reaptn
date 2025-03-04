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

/* materielvente/index.html.twig */
class __TwigTemplate_9ea719f06df13feabf1f451102cc7def extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materielvente/index.html.twig", 1);
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

        yield "Matériel à vendre";
        
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



<!-- Contenu -->
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\" style=\"
    margin-top: 120px;
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    background: linear-gradient(45deg, #ff8c00, #ff2d55);
    padding: 15px 30px;
    border-radius: 10px;
    display: inline-block;\">
    🚜 Matériel à vendre 🛠️
</h1>
<!-- Formulaire de recherche -->
    <form method=\"get\" class=\"mb-4\">
        <div class=\"d-flex gap-2\">
            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Nom du matériel\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\">
            <input type=\"number\" name=\"minPrice\" class=\"form-control\" placeholder=\"Prix min\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minPrice"]) || array_key_exists("minPrice", $context) ? $context["minPrice"] : (function () { throw new RuntimeError('Variable "minPrice" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">
            <input type=\"number\" name=\"maxPrice\" class=\"form-control\" placeholder=\"Prix max\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxPrice"]) || array_key_exists("maxPrice", $context) ? $context["maxPrice"] : (function () { throw new RuntimeError('Variable "maxPrice" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\">
          <select name=\"categorie\">
    <option value=\"\">Sélectionner une catégorie</option>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 33
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "\" ";
            if (((isset($context["categorieId"]) || array_key_exists("categorieId", $context) ? $context["categorieId"] : (function () { throw new RuntimeError('Variable "categorieId" does not exist.', 33, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 33))) {
                yield "selected";
            }
            yield ">
            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 34), "html", null, true);
            yield "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "</select>


            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>








<div class=\"d-flex justify-content-center mb-3\">
    <div class=\"input-group w-50\">
        <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un matériel...\" class=\"form-control\">
        <span class=\"input-group-text\" id=\"searchIcon\">
            <i class=\"fa fa-search\"></i>
        </span>
    </div>
</div>


<div id=\"materielList\">
    ";
        // line 62
        yield from $this->loadTemplate("materielvente/_search_results.html.twig", "materielvente/index.html.twig", 62)->unwrap()->yield(CoreExtension::merge($context, ["materielventes" => (isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 62, $this->source); })())]));
        // line 63
        yield "</div>













    <div class=\"row\">
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 78, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["materielvente"]) {
            // line 79
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm card-container\">
                    <!-- Badge Catégorie -->
                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                        Matériel
                    </div>

                    <!-- Image du matériel -->
                    <img src=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 87)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 87))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                         class=\"img-fluid card-img-fixed\" alt=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 88), "html", null, true);
            yield "\"
                         loading=\"lazy\">

                    <!-- Détails du matériel -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 93), "html", null, true);
            yield "</h4>
                        <p>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "description", [], "any", false, false, false, 94), "html", null, true);
            yield "</p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "prix", [], "any", false, false, false, 97), "html", null, true);
            yield " DT</p>
                            ";
            // line 98
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98)) {
                // line 99
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                            </a>
                            ";
            }
            // line 103
            yield "                        </div>

                       <!-- Boutons \"Show\", \"Edit\" et \"Delete\" -->
        <div class=\"d-flex flex-wrap gap-3 mt-3\">  
        <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\" 
       class=\"btn btn-info btn-sm text-white\">
        <i class=\"fas fa-eye\"></i> Plus de détails
         </a>
    
        ";
            // line 112
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
                // line 113
                yield "          <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" 
           class=\"btn btn-warning btn-sm text-white\">
           <i class=\"fas fa-edit\"></i> Modifier
         </a>
        
        ";
                // line 118
                yield Twig\Extension\CoreExtension::include($this->env, $context, "materielvente/_delete_form.html.twig");
                yield "
         ";
            }
            // line 120
            yield "

        <!-- Bouton de téléchargement du PDF -->
      <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_download_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" 
       class=\"btn btn-primary btn-sm text-white\">
       <i class=\"fas fa-download\"></i> Télécharger PDF
         </a>




        </div>

                    </div>
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
        // line 136
        if (!$context['_iterated']) {
            // line 137
            yield "            <div class=\"col-12 text-center\">
                <p>Aucun matériel disponible pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materielvente'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "    </div>


    
 







 




    <!-- Pagination -->
    <div class=\"pagination\">
        ";
        // line 160
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 160, $this->source); })()));
        yield "
    </div>

</div>

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>

";
        // line 170
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 171
            yield "<div class=\"d-flex justify-content-center\">
    <a href=\"";
            // line 172
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_new");
            yield "\" class=\"btn btn-success me-2\" title=\"Create New Property\">
        <i class=\"fas fa-plus-circle\"></i> Ajouter une nouvelle matériel
    </a>
    <a href=\"";
            // line 175
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie");
            yield "\" class=\"btn btn-success me-2\" title=\"Create New Contract\">
         <i class=\"fas fas fa-list\"></i> Créer une catégorie
    </a>
</div>";
        }
        // line 179
        yield "
<!-- Styles pour l'effet de zoom sur l'image -->
<style>
    /* Conteneur de la carte */
    .card-container {
        overflow: hidden;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    /* Image du matériel */
    .card-img-fixed {
        width: 100%;
        height: 300px; /* Hauteur uniforme */
        object-fit: cover; /* Remplit le conteneur sans déformation */
        transition: transform 0.3s ease-in-out; /* Animation fluide */
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    /* Effet de zoom au survol */
    .card-container:hover .card-img-fixed {
        transform: scale(1.1);
    }
</style>



<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let searchTerm = this.value;

        fetch('";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_search");
        yield "?search=' + encodeURIComponent(searchTerm), {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById('materielList').innerHTML = html;
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
        return "materielvente/index.html.twig";
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
        return array (  427 => 211,  393 => 179,  386 => 175,  380 => 172,  377 => 171,  375 => 170,  362 => 160,  341 => 141,  332 => 137,  330 => 136,  304 => 123,  299 => 120,  294 => 118,  285 => 113,  283 => 112,  275 => 107,  269 => 103,  261 => 99,  259 => 98,  255 => 97,  249 => 94,  245 => 93,  237 => 88,  233 => 87,  223 => 79,  205 => 78,  188 => 63,  186 => 62,  159 => 37,  150 => 34,  141 => 33,  137 => 32,  131 => 29,  127 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Matériel à vendre{% endblock %}

{% block body %}




<!-- Contenu -->
<div class=\"container mt-5 pt-5\">
    <h1 class=\"text-center mb-4\" style=\"
    margin-top: 120px;
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    background: linear-gradient(45deg, #ff8c00, #ff2d55);
    padding: 15px 30px;
    border-radius: 10px;
    display: inline-block;\">
    🚜 Matériel à vendre 🛠️
</h1>
<!-- Formulaire de recherche -->
    <form method=\"get\" class=\"mb-4\">
        <div class=\"d-flex gap-2\">
            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Nom du matériel\" value=\"{{ searchTerm }}\">
            <input type=\"number\" name=\"minPrice\" class=\"form-control\" placeholder=\"Prix min\" value=\"{{ minPrice }}\">
            <input type=\"number\" name=\"maxPrice\" class=\"form-control\" placeholder=\"Prix max\" value=\"{{ maxPrice }}\">
          <select name=\"categorie\">
    <option value=\"\">Sélectionner une catégorie</option>
    {% for categorie in categories %}
        <option value=\"{{ categorie.id }}\" {% if categorieId == categorie.id %}selected{% endif %}>
            {{ categorie.nom }}
        </option>
    {% endfor %}
</select>


            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>








<div class=\"d-flex justify-content-center mb-3\">
    <div class=\"input-group w-50\">
        <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un matériel...\" class=\"form-control\">
        <span class=\"input-group-text\" id=\"searchIcon\">
            <i class=\"fa fa-search\"></i>
        </span>
    </div>
</div>


<div id=\"materielList\">
    {% include 'materielvente/_search_results.html.twig' with {'materielventes': materielventes} %}
</div>













    <div class=\"row\">
        {% for materielvente in materielventes %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm card-container\">
                    <!-- Badge Catégorie -->
                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                        Matériel
                    </div>

                    <!-- Image du matériel -->
                    <img src=\"{{ asset(materielvente.image ? 'uploads/images/' ~ materielvente.image : 'images/default.png') }}\" 
                         class=\"img-fluid card-img-fixed\" alt=\"{{ materielvente.nom }}\"
                         loading=\"lazy\">

                    <!-- Détails du matériel -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>{{ materielvente.nom }}</h4>
                        <p>{{ materielvente.description }}</p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">{{ materielvente.prix }} DT</p>
                            {% if  app.user %}
                            <a href=\"{{ path('add_to_cart', { id: materielvente.id }) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                            </a>
                            {% endif %}
                        </div>

                       <!-- Boutons \"Show\", \"Edit\" et \"Delete\" -->
        <div class=\"d-flex flex-wrap gap-3 mt-3\">  
        <a href=\"{{ path('app_materielvente_show', {'id': materielvente.id}) }}\" 
       class=\"btn btn-info btn-sm text-white\">
        <i class=\"fas fa-eye\"></i> Plus de détails
         </a>
    
        {% if is_granted('ROLE_AGRICULTEUR') %}
          <a href=\"{{ path('app_materielvente_edit', {'id': materielvente.id}) }}\" 
           class=\"btn btn-warning btn-sm text-white\">
           <i class=\"fas fa-edit\"></i> Modifier
         </a>
        
        {{ include('materielvente/_delete_form.html.twig') }}
         {% endif %}


        <!-- Bouton de téléchargement du PDF -->
      <a href=\"{{ path('app_materielvente_download_pdf', {'id': materielvente.id}) }}\" 
       class=\"btn btn-primary btn-sm text-white\">
       <i class=\"fas fa-download\"></i> Télécharger PDF
         </a>




        </div>

                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p>Aucun matériel disponible pour le moment.</p>
            </div>
        {% endfor %}
    </div>


    
 







 




    <!-- Pagination -->
    <div class=\"pagination\">
        {{ knp_pagination_render(materielventes) }}
    </div>

</div>

<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>

{% if  is_granted('ROLE_AGRICULTEUR') %}
<div class=\"d-flex justify-content-center\">
    <a href=\"{{ path('app_materielvente_new') }}\" class=\"btn btn-success me-2\" title=\"Create New Property\">
        <i class=\"fas fa-plus-circle\"></i> Ajouter une nouvelle matériel
    </a>
    <a href=\"{{ path('app_categorie') }}\" class=\"btn btn-success me-2\" title=\"Create New Contract\">
         <i class=\"fas fas fa-list\"></i> Créer une catégorie
    </a>
</div>{% endif %}

<!-- Styles pour l'effet de zoom sur l'image -->
<style>
    /* Conteneur de la carte */
    .card-container {
        overflow: hidden;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    /* Image du matériel */
    .card-img-fixed {
        width: 100%;
        height: 300px; /* Hauteur uniforme */
        object-fit: cover; /* Remplit le conteneur sans déformation */
        transition: transform 0.3s ease-in-out; /* Animation fluide */
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    /* Effet de zoom au survol */
    .card-container:hover .card-img-fixed {
        transform: scale(1.1);
    }
</style>



<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let searchTerm = this.value;

        fetch('{{ path(\"app_materielvente_search\") }}?search=' + encodeURIComponent(searchTerm), {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById('materielList').innerHTML = html;
        });
    });
</script>








{% endblock %}
", "materielvente/index.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\materielvente\\index.html.twig");
    }
}
