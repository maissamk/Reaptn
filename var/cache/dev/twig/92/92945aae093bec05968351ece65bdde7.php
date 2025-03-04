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

/* admin/materielagricole/_materiel_table_body.html.twig */
class __TwigTemplate_1b501411ab389bdf0475413d66e80e99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/_materiel_table_body.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/materielagricole/_materiel_table_body.html.twig"));

        // line 1
        yield "<tbody>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materielventes"]) || array_key_exists("materielventes", $context) ? $context["materielventes"] : (function () { throw new RuntimeError('Variable "materielventes" does not exist.', 2, $this->source); })()));
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
            // line 3
            yield "        <tr>
            <td>
                <img src=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 5)) ? (("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "image", [], "any", false, false, false, 5))) : ("images/default.png"))), "html", null, true);
            yield "\" 
                     class=\"rounded border border-secondary\" 
                     alt=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 7), "html", null, true);
            yield "\" width=\"70\" height=\"70\">
            </td>
            <td>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 9), "html", null, true);
            yield "</td>
            <td>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "nom", [], "any", false, false, false, 10), "html", null, true);
            yield "</td>
            <td class=\"fw-bold text-primary\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "prix", [], "any", false, false, false, 11), "html", null, true);
            yield " DT</td>
            <td>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "description", [], "any", false, false, false, 12), "html", null, true);
            yield "</td>
            <td>
                <span class=\"badge ";
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "disponibilite", [], "any", false, false, false, 14)) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                    ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "disponibilite", [], "any", false, false, false, 15)) {
                yield " Disponible ";
            } else {
                yield " Non disponible ";
            }
            // line 16
            yield "                </span>
            </td>
            <td>
                ";
            // line 19
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "categorie", [], "any", false, false, false, 19)) {
                // line 20
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "categorie", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
                yield "
                ";
            } else {
                // line 22
                yield "                    <span class=\"text-danger\">Aucune catégorie</span>
                ";
            }
            // line 24
            yield "            </td>
            <td>
                <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materielvente_aff", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                    <i class=\"fas fa-eye\"></i> Voir
                </a>
                <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_materielvente_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materielvente"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                ";
            // line 32
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/materielagricole/supprimer.html.twig");
            yield "
            </td>
        </tr>
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
        // line 35
        if (!$context['_iterated']) {
            // line 36
            yield "        <tr>
            <td colspan=\"8\" class=\"text-center\">Aucun matériel trouvé.</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materielvente'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "</tbody>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/materielagricole/_materiel_table_body.html.twig";
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
        return array (  174 => 40,  165 => 36,  163 => 35,  147 => 32,  141 => 29,  135 => 26,  131 => 24,  127 => 22,  121 => 20,  119 => 19,  114 => 16,  108 => 15,  100 => 14,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  78 => 7,  73 => 5,  69 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tbody>
    {% for materielvente in materielventes %}
        <tr>
            <td>
                <img src=\"{{ asset(materielvente.image ? 'uploads/images/' ~ materielvente.image : 'images/default.png') }}\" 
                     class=\"rounded border border-secondary\" 
                     alt=\"{{ materielvente.nom }}\" width=\"70\" height=\"70\">
            </td>
            <td>{{ materielvente.id }}</td>
            <td>{{ materielvente.nom }}</td>
            <td class=\"fw-bold text-primary\">{{ materielvente.prix }} DT</td>
            <td>{{ materielvente.description }}</td>
            <td>
                <span class=\"badge {% if materielvente.disponibilite %}bg-success{% else %}bg-danger{% endif %}\">
                    {% if materielvente.disponibilite %} Disponible {% else %} Non disponible {% endif %}
                </span>
            </td>
            <td>
                {% if materielvente.categorie %}
                    {{ materielvente.categorie.nom }}
                {% else %}
                    <span class=\"text-danger\">Aucune catégorie</span>
                {% endif %}
            </td>
            <td>
                <a href=\"{{ path('app_materielvente_aff', {'id': materielvente.id}) }}\" class=\"btn btn-info btn-sm\">
                    <i class=\"fas fa-eye\"></i> Voir
                </a>
                <a href=\"{{ path('admin_materielvente_edit', {'id': materielvente.id}) }}\" class=\"btn btn-warning btn-sm\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                {{ include('admin/materielagricole/supprimer.html.twig') }}
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"8\" class=\"text-center\">Aucun matériel trouvé.</td>
        </tr>
    {% endfor %}
</tbody>
", "admin/materielagricole/_materiel_table_body.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\admin\\materielagricole\\_materiel_table_body.html.twig");
    }
}
