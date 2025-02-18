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

/* commande/index.html.twig */
class __TwigTemplate_6fa59afea79e1921a9ffa7302023884a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "commande/index.html.twig", 1);
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

        yield "Liste des commandes";
        
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
        yield "<div class=\"row justify-content-center\">
    <div class=\"container mt-5 pt-5\" style=\"width: 70%; margin-left: 27%; margin-top: 50px;\">
        <h1>Liste des commandes</h1>

        <table class=\"table table-bordered mt-3\">
            <thead class=\"table-dark\">
                <tr>
                    <th class=\"text-white\">ID</th>
                    <th class=\"text-white\">Date de commande</th>
                    <th class=\"text-white\">Total</th>
                    <th class=\"text-white\">Quantité</th>
                    <th class=\"text-white\">Paiement</th>
                    <th class=\"text-white\">Livraison</th>
                    <th class=\"text-white\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 24
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 24) || CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 24))) {
                // line 25
                yield "                        <tr>
                            <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
                            <td>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 27), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                            <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "totale", [], "any", false, false, false, 28), "html", null, true);
                yield " DT</td>
                            <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>

                            <!-- Paiement Section -->
                            <td>
                                ";
                // line 33
                if (CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 33)) {
                    // line 34
                    yield "                                    <div class=\"payment-card\">
                                        <div>
                                            <strong>Méthode:</strong> ";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 36), "methodePaiement", [], "any", false, false, false, 36), "html", null, true);
                    yield "<br>
                                            <small>Date: ";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 37), "datePaiement", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                    yield "</small>
                                        </div>
                                    </div>
                                ";
                } else {
                    // line 41
                    yield "                                    <div class=\"payment-card not-paid\">
                                        <h5>Non payé</h5>
                                    </div>
                                ";
                }
                // line 45
                yield "                            </td>

                            <!-- Livraison Section -->
                            <td>
                                ";
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 49)) {
                    // line 50
                    yield "                                    <div class=\"delivery-card\">
                                        <div>
                                            <strong>Status:</strong> ";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 52), "status", [], "any", false, false, false, 52), "html", null, true);
                    yield "<br>
                                            <strong>Adresse:</strong> ";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 53), "adresse", [], "any", false, false, false, 53), "html", null, true);
                    yield "<br>
                                            <small>Date: ";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 54), "dateLiv", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
                    yield "</small>
                                            <form action=\"";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_update_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
                    yield "\" method=\"POST\">
                                                <select name=\"status\" class=\"status-dropdown\">
                                                    <option value=\"Validation en cours\" ";
                    // line 57
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 57), "status", [], "any", false, false, false, 57) == "Validation en cours")) {
                        yield "selected";
                    }
                    yield ">Validation en cours</option>
                                                    <option value=\"En préparation\" ";
                    // line 58
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 58), "status", [], "any", false, false, false, 58) == "En préparation")) {
                        yield "selected";
                    }
                    yield ">En préparation</option>
                                                    <option value=\"Expédiée\" ";
                    // line 59
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 59), "status", [], "any", false, false, false, 59) == "Expédiée")) {
                        yield "selected";
                    }
                    yield ">Expédiée</option>
                                                    <option value=\"Livrée\" ";
                    // line 60
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 60), "status", [], "any", false, false, false, 60) == "Livrée")) {
                        yield "selected";
                    }
                    yield ">Livrée</option>
                                                </select>
                                                <button type=\"submit\" class=\"btn btn-warning btn-sm\">Mettre à jour</button>
                                            </form>
                                        </div>
                                    </div>
                                ";
                } else {
                    // line 67
                    yield "                                    <div class=\"delivery-card not-shipped\">
                                        <h5>Non livrée</h5>
                                    </div>
                                ";
                }
                // line 71
                yield "                            </td>

                            <!-- Actions -->
                            <td>
                                ";
                // line 75
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 75) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 75), "status", [], "any", false, false, false, 75) == "Livrée"))) {
                    // line 76
                    yield "                                    <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                    yield "\" method=\"POST\">
                                        <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')\">Supprimer</button>
                                    </form>
                                ";
                } else {
                    // line 80
                    yield "                                    <button class=\"btn btn-danger\" disabled>Suppression interdite</button>
                                ";
                }
                // line 82
                yield "                            </td>
                        </tr>
                    ";
            }
            // line 85
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "            </tbody>
        </table>
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
        return "commande/index.html.twig";
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
        return array (  267 => 86,  261 => 85,  256 => 82,  252 => 80,  244 => 76,  242 => 75,  236 => 71,  230 => 67,  218 => 60,  212 => 59,  206 => 58,  200 => 57,  195 => 55,  191 => 54,  187 => 53,  183 => 52,  179 => 50,  177 => 49,  171 => 45,  165 => 41,  158 => 37,  154 => 36,  150 => 34,  148 => 33,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  126 => 25,  123 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des commandes{% endblock %}

{% block body %}
<div class=\"row justify-content-center\">
    <div class=\"container mt-5 pt-5\" style=\"width: 70%; margin-left: 27%; margin-top: 50px;\">
        <h1>Liste des commandes</h1>

        <table class=\"table table-bordered mt-3\">
            <thead class=\"table-dark\">
                <tr>
                    <th class=\"text-white\">ID</th>
                    <th class=\"text-white\">Date de commande</th>
                    <th class=\"text-white\">Total</th>
                    <th class=\"text-white\">Quantité</th>
                    <th class=\"text-white\">Paiement</th>
                    <th class=\"text-white\">Livraison</th>
                    <th class=\"text-white\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for commande in commandes %}
                    {% if commande.paiement or commande.livraison %}
                        <tr>
                            <td>{{ commande.id }}</td>
                            <td>{{ commande.dateCommande|date('d/m/Y H:i') }}</td>
                            <td>{{ commande.totale }} DT</td>
                            <td>{{ commande.quantite }}</td>

                            <!-- Paiement Section -->
                            <td>
                                {% if commande.paiement %}
                                    <div class=\"payment-card\">
                                        <div>
                                            <strong>Méthode:</strong> {{ commande.paiement.methodePaiement }}<br>
                                            <small>Date: {{ commande.paiement.datePaiement|date('d/m/Y') }}</small>
                                        </div>
                                    </div>
                                {% else %}
                                    <div class=\"payment-card not-paid\">
                                        <h5>Non payé</h5>
                                    </div>
                                {% endif %}
                            </td>

                            <!-- Livraison Section -->
                            <td>
                                {% if commande.livraison %}
                                    <div class=\"delivery-card\">
                                        <div>
                                            <strong>Status:</strong> {{ commande.livraison.status }}<br>
                                            <strong>Adresse:</strong> {{ commande.livraison.adresse }}<br>
                                            <small>Date: {{ commande.livraison.dateLiv|date('d/m/Y') }}</small>
                                            <form action=\"{{ path('livraison_update_status', {'id': commande.livraison.id}) }}\" method=\"POST\">
                                                <select name=\"status\" class=\"status-dropdown\">
                                                    <option value=\"Validation en cours\" {% if commande.livraison.status == 'Validation en cours' %}selected{% endif %}>Validation en cours</option>
                                                    <option value=\"En préparation\" {% if commande.livraison.status == 'En préparation' %}selected{% endif %}>En préparation</option>
                                                    <option value=\"Expédiée\" {% if commande.livraison.status == 'Expédiée' %}selected{% endif %}>Expédiée</option>
                                                    <option value=\"Livrée\" {% if commande.livraison.status == 'Livrée' %}selected{% endif %}>Livrée</option>
                                                </select>
                                                <button type=\"submit\" class=\"btn btn-warning btn-sm\">Mettre à jour</button>
                                            </form>
                                        </div>
                                    </div>
                                {% else %}
                                    <div class=\"delivery-card not-shipped\">
                                        <h5>Non livrée</h5>
                                    </div>
                                {% endif %}
                            </td>

                            <!-- Actions -->
                            <td>
                                {% if commande.livraison and commande.livraison.status == 'Livrée' %}
                                    <form action=\"{{ path('commande_delete', {'id': commande.id}) }}\" method=\"POST\">
                                        <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')\">Supprimer</button>
                                    </form>
                                {% else %}
                                    <button class=\"btn btn-danger\" disabled>Suppression interdite</button>
                                {% endif %}
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "commande/index.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\PI2025\\Reaptn\\templates\\commande\\index.html.twig");
    }
}
