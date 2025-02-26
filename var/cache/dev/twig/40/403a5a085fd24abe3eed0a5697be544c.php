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

/* admin/partials/_user_table_body.html.twig */
class __TwigTemplate_251dd119cddb8ed0a73fac39d643e26f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/_user_table_body.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/_user_table_body.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 4
            yield "    <tr>
        <td class=\"text-center\">
            ";
            // line 6
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 6)) {
                // line 7
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, false, 7))), "html", null, true);
                yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Avatar\">
            ";
            } else {
                // line 9
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Default Avatar\">
            ";
            }
            // line 11
            yield "        </td>
        <td class=\"text-center\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 12), "html", null, true);
            yield "</td>
        <td class=\"text-center\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 13), "html", null, true);
            yield "</td>
        <td class=\"text-center\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 14), "html", null, true);
            yield "</td>
        <td class=\"text-center\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
        <td class=\"text-center\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
        <td class=\"text-center\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 17), ", "), "html", null, true);
            yield "</td>
        <td class=\"text-center\">
            ";
            // line 19
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 19) == "active")) {
                // line 20
                yield "                <span class=\"badge bg-success text-white\">Actif</span>
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 21
$context["user"], "status", [], "any", false, false, false, 21) == "blocked")) {
                // line 22
                yield "                <span class=\"badge bg-danger text-white\">Bloqué</span>
            ";
            } else {
                // line 24
                yield "                <span class=\"badge bg-secondary text-white\">Inactif</span>
            ";
            }
            // line 26
            yield "        </td>
        <td class=\"text-center\">
            <div class=\"d-flex justify-content-center\">
                <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm mr-2\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr ?')\">
                    <i class=\"fas fa-trash-alt\"></i> Supprimer
                </a>
            </div>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
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
        return "admin/partials/_user_table_body.html.twig";
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
        return array (  127 => 32,  121 => 29,  116 => 26,  112 => 24,  108 => 22,  106 => 21,  103 => 20,  101 => 19,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  73 => 11,  67 => 9,  61 => 7,  59 => 6,  55 => 4,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/partials/_user_table_body.html.twig #}

{% for user in users %}
    <tr>
        <td class=\"text-center\">
            {% if user.avatar %}
                <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Avatar\">
            {% else %}
                <img src=\"{{ asset('images/default-avatar.png') }}\" width=\"50\" height=\"50\" class=\"rounded-circle\" alt=\"Default Avatar\">
            {% endif %}
        </td>
        <td class=\"text-center\">{{ user.id }}</td>
        <td class=\"text-center\">{{ user.email }}</td>
        <td class=\"text-center\">{{ user.nom }}</td>
        <td class=\"text-center\">{{ user.prenom }}</td>
        <td class=\"text-center\">{{ user.telephone }}</td>
        <td class=\"text-center\">{{ user.roles | join(', ') }}</td>
        <td class=\"text-center\">
            {% if user.status == 'active' %}
                <span class=\"badge bg-success text-white\">Actif</span>
            {% elseif user.status == 'blocked' %}
                <span class=\"badge bg-danger text-white\">Bloqué</span>
            {% else %}
                <span class=\"badge bg-secondary text-white\">Inactif</span>
            {% endif %}
        </td>
        <td class=\"text-center\">
            <div class=\"d-flex justify-content-center\">
                <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning btn-sm mr-2\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
                <a href=\"{{ path('admin_user_delete', {'id': user.id}) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr ?')\">
                    <i class=\"fas fa-trash-alt\"></i> Supprimer
                </a>
            </div>
        </td>
    </tr>
{% endfor %}
", "admin/partials/_user_table_body.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\partials\\_user_table_body.html.twig");
    }
}
