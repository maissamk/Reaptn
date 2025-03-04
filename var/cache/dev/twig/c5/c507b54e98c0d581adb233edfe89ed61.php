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

/* materielvente/_search_results.html.twig */
class __TwigTemplate_51f709d21704eb730d01aab9f481fe39 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/_search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materielvente/_search_results.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 1, $this->source); })()));
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
            // line 2
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"position-relative border border-secondary rounded shadow-sm card-container\">
                    <!-- Badge Catégorie -->
                    <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                        Matériel
                    </div>

                    <!-- Image du matériel -->
                    <img src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 10)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 10))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                         class=\"img-fluid card-img-fixed\" alt=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 11), "html", null, true);
            yield "\"
                         loading=\"lazy\">

                    <!-- Détails du matériel -->
                    <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                        <h4>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 16), "html", null, true);
            yield "</h4>
                        <p>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "description", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "prix", [], "any", false, false, false, 20), "html", null, true);
            yield " DT</p>
                            ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
                // line 22
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                            </a>
                            ";
            }
            // line 26
            yield "                        </div>

                       <!-- Boutons \"Show\", \"Edit\" et \"Delete\" -->
<div class=\"d-flex flex-wrap gap-3 mt-3\">  
    <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" 
       class=\"btn btn-info btn-sm text-white\">
       <i class=\"fas fa-eye\"></i> Plus de détails
    </a>
    
    ";
            // line 35
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
                // line 36
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\" 
           class=\"btn btn-warning btn-sm text-white\">
           <i class=\"fas fa-edit\"></i> Modifier
        </a>
        
        ";
                // line 41
                yield Twig\Extension\CoreExtension::include($this->env, $context, "materielvente/_delete_form.html.twig");
                yield "
    ";
            }
            // line 43
            yield "</div>

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
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "            <div class=\"col-12 text-center\">
                <p>Aucun matériel disponible pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materielvente'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "materielvente/_search_results.html.twig";
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
        return array (  161 => 49,  159 => 48,  142 => 43,  137 => 41,  128 => 36,  126 => 35,  118 => 30,  112 => 26,  104 => 22,  102 => 21,  98 => 20,  92 => 17,  88 => 16,  80 => 11,  76 => 10,  66 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for materielvente in materielventes %}
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
</div>

                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p>Aucun matériel disponible pour le moment.</p>
            </div>
        {% endfor %}", "materielvente/_search_results.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\New folder\\Reaptn\\templates\\materielvente\\_search_results.html.twig");
    }
}
