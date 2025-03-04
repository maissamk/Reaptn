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

/* admin/materielagricole/_search_results.html.twig */
class __TwigTemplate_c1be395b17bfce783f2213029eaa4ba9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/_search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/_search_results.html.twig"));

        // line 1
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    <div class=\"row\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 4
                yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm\">
                    <img src=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 6)), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 6), "html", null, true);
                yield "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 8), "html", null, true);
                yield "</h5>
                        <p class=\"card-text\">Prix: ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 9), "html", null, true);
                yield " €</p>
                        <p class=\"card-text\">Catégorie: ";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "categorie", [], "any", false, false, false, 10), "nom", [], "any", false, false, false, 10), "html", null, true);
                yield "</p>
                        <a href=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 11)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Voir détails</a>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "    </div>
";
        } else {
            // line 18
            yield "    <p class=\"text-center text-muted\">Aucun matériel trouvé.</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/materielagricole/_search_results.html.twig";
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
        return array (  95 => 18,  91 => 16,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  61 => 6,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if materielventes is not empty %}
    <div class=\"row\">
        {% for materiel in materielventes %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm\">
                    <img src=\"{{ asset(materiel.image) }}\" class=\"card-img-top\" alt=\"{{ materiel.nom }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ materiel.nom }}</h5>
                        <p class=\"card-text\">Prix: {{ materiel.prix }} €</p>
                        <p class=\"card-text\">Catégorie: {{ materiel.categorie.nom }}</p>
                        <a href=\"{{ path('app_materielvente_show', {'id': materiel.id}) }}\" class=\"btn btn-primary\">Voir détails</a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% else %}
    <p class=\"text-center text-muted\">Aucun matériel trouvé.</p>
{% endif %}
", "admin/materielagricole/_search_results.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\materielagricole\\_search_results.html.twig");
    }
}
