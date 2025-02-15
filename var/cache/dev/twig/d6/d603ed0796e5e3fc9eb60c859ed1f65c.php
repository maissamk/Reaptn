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
class __TwigTemplate_98e5adfa7535726b8f9775ecc732b2fb extends Template
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
        yield "<div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">

        <div class=\"table-container\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date de commande</th>
                        <th>Total</th>
                        <th>Quantité</th>
                        <th>Paiement</th>
                        <th>Livraison</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 23
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 23) || CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 23))) {
                // line 24
                yield "                            <tr>
                                <td>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 25), "html", null, true);
                yield "</td>
                                <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                <td>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "totale", [], "any", false, false, false, 27), "html", null, true);
                yield " DT</td>
                                <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>

                                <!-- Paiement Section -->
                                <td>
                                    ";
                // line 32
                if (CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 32)) {
                    // line 33
                    yield "                                        <div class=\"payment-card\">
                                            <div>
                                                <strong>Méthode:</strong> ";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 35), "methodePaiement", [], "any", false, false, false, 35), "html", null, true);
                    yield "<br>
                                                <small>Date: ";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "paiement", [], "any", false, false, false, 36), "datePaiement", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
                    yield "</small>
                                            </div>
                                        </div>
                                    ";
                } else {
                    // line 40
                    yield "                                        <div class=\"payment-card not-paid\">
                                            <h5>Non payé</h5>
                                        </div>
                                    ";
                }
                // line 44
                yield "                                </td>

                                <!-- Livraison Section -->
                                <td>
                                    ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 48)) {
                    // line 49
                    yield "                                        <div class=\"delivery-card\">
                                            <div>
                                                <strong>Status:</strong> ";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 51), "status", [], "any", false, false, false, 51), "html", null, true);
                    yield "<br>
                                                <strong>Adresse:</strong> ";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 52), "adresse", [], "any", false, false, false, 52), "html", null, true);
                    yield "<br>
                                                <small>Date: ";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 53), "dateLiv", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true);
                    yield "</small>
                                                <form action=\"";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_update_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54)]), "html", null, true);
                    yield "\" method=\"POST\">
                                                    <select name=\"status\" class=\"status-dropdown\">
                                                        <option value=\"Validation en cours\" ";
                    // line 56
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 56), "status", [], "any", false, false, false, 56) == "Validation en cours")) {
                        yield "selected";
                    }
                    yield ">Validation en cours</option>
                                                        <option value=\"En préparation\" ";
                    // line 57
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 57), "status", [], "any", false, false, false, 57) == "En préparation")) {
                        yield "selected";
                    }
                    yield ">En préparation</option>
                                                        <option value=\"Expédiée\" ";
                    // line 58
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 58), "status", [], "any", false, false, false, 58) == "Expédiée")) {
                        yield "selected";
                    }
                    yield ">Expédiée</option>
                                                        <option value=\"Livrée\" ";
                    // line 59
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 59), "status", [], "any", false, false, false, 59) == "Livrée")) {
                        yield "selected";
                    }
                    yield ">Livrée</option>
                                                    </select>
                                                    <button type=\"submit\" class=\"btn-update\">Mettre à jour</button>
                                                </form>
                                            </div>
                                        </div>
                                    ";
                } else {
                    // line 66
                    yield "                                        <div class=\"delivery-card not-shipped\">
                                            <h5>Non livrée</h5>
                                        </div>
                                    ";
                }
                // line 70
                yield "                                </td>

                                <!-- Actions -->
                                <td>
    ";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 74) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "livraison", [], "any", false, false, false, 74), "status", [], "any", false, false, false, 74) == "Livrée"))) {
                    // line 75
                    yield "        <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                    yield "\" method=\"POST\">
            <button type=\"submit\" class=\"btn-delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')\">Supprimer</button>
        </form>
    ";
                } else {
                    // line 79
                    yield "        <button class=\"btn-delete\" disabled>Suppression interdite</button>
    ";
                }
                // line 81
                yield "</td>

                            </tr>
                        ";
            }
            // line 85
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                </tbody>
            </table>
          

        </div>
    </div>

    <style>
        /* Global styles */
    /* Global styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa;
    color: #495057;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: center;  /* Centrer le contenu horizontalement */
    align-items: center;      /* Centrer le contenu verticalement */
    height: 100vh;            /* Prendre toute la hauteur de la fenêtre */
}

/* Table container and layout */
.table-container {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%; /* S'assurer que la table utilise toute la largeur possible dans .container */
    overflow-x: auto; /* Pour gérer les grandes tables */
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    background-color: #007bff;
    color: white;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

/* Payment and Delivery card */
.payment-card, .delivery-card {
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
    background-color: #f1f1f1;
    margin-bottom: 15px;
}

.payment-card h5, .delivery-card h5 {
    color: #007bff;
}

.payment-card.not-paid, .delivery-card.not-shipped {
    background-color: #ffe6e6;
}

.payment-card h5, .delivery-card h5 {
    font-size: 1.2em;
    font-weight: bold;
}

.payment-card small, .delivery-card small {
    color: #6c757d;
    font-size: 0.9em;
}

/* Buttons */
.btn-update, .btn-delete {
    padding: 8px 15px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

.btn-update {
    background-color: #28a745;
    color: white;
}

.btn-update:hover {
    background-color: #218838;
}

.btn-delete {
    background-color: #dc3545;
    color: white;
}

.btn-delete:hover {
    background-color: #c82333;
}

/* Status Dropdown */
.status-dropdown {
    padding: 8px;
    font-size: 0.9em;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-top: 10px;
}

    </style>
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
        return array (  267 => 86,  261 => 85,  255 => 81,  251 => 79,  243 => 75,  241 => 74,  235 => 70,  229 => 66,  217 => 59,  211 => 58,  205 => 57,  199 => 56,  194 => 54,  190 => 53,  186 => 52,  182 => 51,  178 => 49,  176 => 48,  170 => 44,  164 => 40,  157 => 36,  153 => 35,  149 => 33,  147 => 32,  140 => 28,  136 => 27,  132 => 26,  128 => 25,  125 => 24,  122 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des commandes{% endblock %}

{% block body %}
<div class=\"container mt-5 pt-5\" style=\"margin-left: 250px;\">

        <div class=\"table-container\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date de commande</th>
                        <th>Total</th>
                        <th>Quantité</th>
                        <th>Paiement</th>
                        <th>Livraison</th>
                        <th>Actions</th>
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
                                                    <button type=\"submit\" class=\"btn-update\">Mettre à jour</button>
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
            <button type=\"submit\" class=\"btn-delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')\">Supprimer</button>
        </form>
    {% else %}
        <button class=\"btn-delete\" disabled>Suppression interdite</button>
    {% endif %}
</td>

                            </tr>
                        {% endif %}
                    {% endfor %}
                </tbody>
            </table>
          

        </div>
    </div>

    <style>
        /* Global styles */
    /* Global styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa;
    color: #495057;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: center;  /* Centrer le contenu horizontalement */
    align-items: center;      /* Centrer le contenu verticalement */
    height: 100vh;            /* Prendre toute la hauteur de la fenêtre */
}

/* Table container and layout */
.table-container {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%; /* S'assurer que la table utilise toute la largeur possible dans .container */
    overflow-x: auto; /* Pour gérer les grandes tables */
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    background-color: #007bff;
    color: white;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

/* Payment and Delivery card */
.payment-card, .delivery-card {
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
    background-color: #f1f1f1;
    margin-bottom: 15px;
}

.payment-card h5, .delivery-card h5 {
    color: #007bff;
}

.payment-card.not-paid, .delivery-card.not-shipped {
    background-color: #ffe6e6;
}

.payment-card h5, .delivery-card h5 {
    font-size: 1.2em;
    font-weight: bold;
}

.payment-card small, .delivery-card small {
    color: #6c757d;
    font-size: 0.9em;
}

/* Buttons */
.btn-update, .btn-delete {
    padding: 8px 15px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

.btn-update {
    background-color: #28a745;
    color: white;
}

.btn-update:hover {
    background-color: #218838;
}

.btn-delete {
    background-color: #dc3545;
    color: white;
}

.btn-delete:hover {
    background-color: #c82333;
}

/* Status Dropdown */
.status-dropdown {
    padding: 8px;
    font-size: 0.9em;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-top: 10px;
}

    </style>
{% endblock %}
", "commande/index.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\commande\\index.html.twig");
    }
}
