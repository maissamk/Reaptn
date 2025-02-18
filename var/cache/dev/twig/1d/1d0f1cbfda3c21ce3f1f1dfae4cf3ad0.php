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

/* panier/index.html.twig */
class __TwigTemplate_357adc99820f85c988676bc598c7c8b0 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        yield "Votre Panier";
        
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
     


      

        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Panier</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a>Accueil</a></li>
            <li class=\"breadcrumb-item active text-white\">Panier</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Cart Page Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Image</th>
                            <th scope=\"col\">Nom</th>
                            <th scope=\"col\">Prix</th>
                            <th scope=\"col\">Quantité</th>
                            <th scope=\"col\">Total</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            yield "                            <tr id=\"item-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\">
                                 <th scope=\"row\">
            <div class=\"d-flex align-items-center\">
                ";
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 59)) {
                // line 60
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 60))), "html", null, true);
                yield "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 60), "html", null, true);
                yield "\">
                ";
            }
            // line 62
            yield "            </div>
        </th>
                                <td>
                                    <p class=\"mb-0 mt-4\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
                                </td>
                                <td>
                                    <p class=\"mb-0 mt-4\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 68), "html", null, true);
            yield " DT</p>
                                </td>
                                <td>
                                    <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" onclick=\"changeQuantity(";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 73), "html", null, true);
            yield ", -1)\">
                                                <i class=\"fa fa-minus\"></i>
                                            </button>
                                        </div>
                                        <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 77), "html", null, true);
            yield "\" id=\"quantity-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "\">
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\" onclick=\"changeQuantity(";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 79), "html", null, true);
            yield ", 1)\">
                                                <i class=\"fa fa-plus\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class=\"mb-0 mt-4\" id=\"total-";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 86) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 86)), "html", null, true);
            yield " DT</p>
                                </td>
                                <td>
                                 <form action=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\" method=\"post\">
    <button type=\"submit\" class=\"btn btn-md rounded-circle bg-light border mt-4\">
        <i class=\"fa fa-times text-danger\"></i>
    </button>
</form>


                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 98
        if (!$context['_iterated']) {
            // line 99
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center\">Votre panier est vide.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                    </tbody>
                </table>
            </div>

            <!-- Coupon Code Section -->
            <div class=\"mt-5\">
                <input type=\"text\" class=\"border-0 border-bottom rounded me-5 py-3 mb-4\" placeholder=\"Code promo\">
                <button class=\"btn border-secondary rounded-pill px-4 py-3 text-primary\" type=\"button\">Appliquer le code</button>
            </div>

            <!-- Cart Summary -->
            <div class=\"row g-4 justify-content-end\">
                <div class=\"col-8\"></div>
                <div class=\"col-sm-8 col-md-7 col-lg-6 col-xl-4\">
                    <div class=\"bg-light rounded\">
                        <div class=\"p-4\">
                            <h1 class=\"display-6 mb-4\">Total du Panier</h1>
                            <div class=\"d-flex justify-content-between mb-4\">
                                <h5 class=\"mb-0 me-4\">Sous-total:</h5>
                                <p class=\"mb-0\" id=\"cart-total\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 122, $this->source); })()), "html", null, true);
        yield " DT</p>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <h5 class=\"mb-0 me-4\">Livraison</h5>
                                <p class=\"mb-0\">Forfait: 7.000 DT</p>
                            </div>
                            <p class=\"mb-0 text-end\">Livraison en Tunisie.</p>
                        </div>
                        <div class=\"py-4 mb-4 border-top border-bottom d-flex justify-content-between\">
                            <h5 class=\"mb-0 ps-4 me-4\">Total</h5>
                            <p class=\"mb-0 pe-4\" id=\"final-total\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 132, $this->source); })()) + 7), "html", null, true);
        yield " DT</p>
                        </div>
";
        // line 134
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 134, $this->source); })())) > 0)) {
            // line 135
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "\" 
       class=\"btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4\">
        Passer à la caisse
    </a>
";
        } else {
            // line 140
            yield "    <button class=\"btn border-secondary rounded-pill px-4 py-3 text-secondary text-uppercase mb-4 ms-4 disabled\" disabled>
        Passer à la caisse
    </button>
";
        }
        // line 144
        yield "

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->

    


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 159
        yield "    <script>
        // Fonction pour changer la quantité d'un produit
 function changeQuantity(itemId, change) {
    console.log(\"Button clicked for item:\", itemId, \"Change:\", change);

    // Récupérer la quantité actuelle
    var quantityField = document.getElementById('quantity-' + itemId);
    if (!quantityField) {
        console.error(\"Quantity field not found for item:\", itemId);
        return;
    }

    var currentQuantity = parseInt(quantityField.value);
    var newQuantity = currentQuantity + change;
    if (newQuantity < 1) {
        newQuantity = 1; // Empêche une quantité inférieure à 1
    }

    // Mettre à jour la valeur de la quantité dans le DOM
    quantityField.value = newQuantity;

    // Mettre à jour le total pour cet article dans le DOM
    var price = parseFloat(document.querySelector(`#item-\${itemId} td:nth-child(3)`).textContent.replace(' DT', '').trim());
    var total = price * newQuantity;
    document.getElementById('total-' + itemId).textContent = total.toFixed(2) + ' DT';

    // Mettre à jour le total du panier
    updateCartTotal();

    // Envoyer la mise à jour au serveur
    fetch(`/panier/mettre-a-jour-quantite/\${itemId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ quantity: newQuantity }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.status !== 'success') {
            console.error(\"Erreur lors de la mise à jour de la quantité sur le serveur\");
        }
    })
    .catch(error => {
        console.error(\"Erreur lors de l'appel AJAX :\", error);
    });
}



function updateCartTotal() {
    // Calculer le total du panier
    let total = 0;
    document.querySelectorAll('.table tbody tr').forEach(function(row) {
        var itemTotal = parseFloat(row.querySelector('td:nth-child(5) p').textContent.replace(' DT', '').trim());
        total += itemTotal;
    });

    // Ajouter la livraison
    total += 7; // Livraison forfaitaire

    // Mettre à jour le total dans la page
    document.getElementById('cart-total').textContent = total.toFixed(2) + ' DT';
    document.getElementById('final-total').textContent = total.toFixed(2) + ' DT';
}





       // Fonction pour supprimer un matériel du panier
// Supprimer l'élément du panier (serveur + DOM)
function removeItem(itemId) {
    // Faire une requête DELETE pour supprimer du serveur
    fetch(`/panier/supprimer/\${itemId}`, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Supprimer l'élément du DOM
            const itemRow = document.getElementById('item-' + itemId);
            if (itemRow) {
                itemRow.remove();
            }

            // Mettre à jour le total du panier
            updateCartTotal();
        }
    })
    .catch(error => {
        console.error('Erreur lors de la suppression:', error);
    });
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
        return "panier/index.html.twig";
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
        return array (  342 => 159,  329 => 158,  306 => 144,  300 => 140,  291 => 135,  289 => 134,  284 => 132,  271 => 122,  250 => 103,  241 => 99,  239 => 98,  225 => 89,  217 => 86,  207 => 79,  200 => 77,  193 => 73,  185 => 68,  179 => 65,  174 => 62,  166 => 60,  164 => 59,  157 => 56,  152 => 55,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre Panier{% endblock %}

{% block body %}

     


      

        <!-- Modal Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"input-group w-75 mx-auto d-flex\">
                            <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                            <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Panier</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a>Accueil</a></li>
            <li class=\"breadcrumb-item active text-white\">Panier</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Cart Page Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Image</th>
                            <th scope=\"col\">Nom</th>
                            <th scope=\"col\">Prix</th>
                            <th scope=\"col\">Quantité</th>
                            <th scope=\"col\">Total</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in cart %}
                            <tr id=\"item-{{ item.id }}\">
                                 <th scope=\"row\">
            <div class=\"d-flex align-items-center\">
                {% if item.image %}
                    <img src=\"{{ asset('uploads/images/' ~ item.image) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"{{ item.nom }}\">
                {% endif %}
            </div>
        </th>
                                <td>
                                    <p class=\"mb-0 mt-4\">{{ item.nom }}</p>
                                </td>
                                <td>
                                    <p class=\"mb-0 mt-4\">{{ item.prix }} DT</p>
                                </td>
                                <td>
                                    <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" onclick=\"changeQuantity({{ item.id }}, -1)\">
                                                <i class=\"fa fa-minus\"></i>
                                            </button>
                                        </div>
                                        <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"{{ item.quantity }}\" id=\"quantity-{{ item.id }}\">
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\" onclick=\"changeQuantity({{ item.id }}, 1)\">
                                                <i class=\"fa fa-plus\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class=\"mb-0 mt-4\" id=\"total-{{ item.id }}\">{{ item.prix * item.quantity }} DT</p>
                                </td>
                                <td>
                                 <form action=\"{{ path('panier_supprimer', {'id': item.id}) }}\" method=\"post\">
    <button type=\"submit\" class=\"btn btn-md rounded-circle bg-light border mt-4\">
        <i class=\"fa fa-times text-danger\"></i>
    </button>
</form>


                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center\">Votre panier est vide.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            <!-- Coupon Code Section -->
            <div class=\"mt-5\">
                <input type=\"text\" class=\"border-0 border-bottom rounded me-5 py-3 mb-4\" placeholder=\"Code promo\">
                <button class=\"btn border-secondary rounded-pill px-4 py-3 text-primary\" type=\"button\">Appliquer le code</button>
            </div>

            <!-- Cart Summary -->
            <div class=\"row g-4 justify-content-end\">
                <div class=\"col-8\"></div>
                <div class=\"col-sm-8 col-md-7 col-lg-6 col-xl-4\">
                    <div class=\"bg-light rounded\">
                        <div class=\"p-4\">
                            <h1 class=\"display-6 mb-4\">Total du Panier</h1>
                            <div class=\"d-flex justify-content-between mb-4\">
                                <h5 class=\"mb-0 me-4\">Sous-total:</h5>
                                <p class=\"mb-0\" id=\"cart-total\">{{ total }} DT</p>
                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <h5 class=\"mb-0 me-4\">Livraison</h5>
                                <p class=\"mb-0\">Forfait: 7.000 DT</p>
                            </div>
                            <p class=\"mb-0 text-end\">Livraison en Tunisie.</p>
                        </div>
                        <div class=\"py-4 mb-4 border-top border-bottom d-flex justify-content-between\">
                            <h5 class=\"mb-0 ps-4 me-4\">Total</h5>
                            <p class=\"mb-0 pe-4\" id=\"final-total\">{{ total + 7 }} DT</p>
                        </div>
{% if cart|length > 0 %}
    <a href=\"{{ path('paiement', {'id': commande.id}) }}\" 
       class=\"btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4\">
        Passer à la caisse
    </a>
{% else %}
    <button class=\"btn border-secondary rounded-pill px-4 py-3 text-secondary text-uppercase mb-4 ms-4 disabled\" disabled>
        Passer à la caisse
    </button>
{% endif %}


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->

    


{% endblock %}

{% block javascripts %}
    <script>
        // Fonction pour changer la quantité d'un produit
 function changeQuantity(itemId, change) {
    console.log(\"Button clicked for item:\", itemId, \"Change:\", change);

    // Récupérer la quantité actuelle
    var quantityField = document.getElementById('quantity-' + itemId);
    if (!quantityField) {
        console.error(\"Quantity field not found for item:\", itemId);
        return;
    }

    var currentQuantity = parseInt(quantityField.value);
    var newQuantity = currentQuantity + change;
    if (newQuantity < 1) {
        newQuantity = 1; // Empêche une quantité inférieure à 1
    }

    // Mettre à jour la valeur de la quantité dans le DOM
    quantityField.value = newQuantity;

    // Mettre à jour le total pour cet article dans le DOM
    var price = parseFloat(document.querySelector(`#item-\${itemId} td:nth-child(3)`).textContent.replace(' DT', '').trim());
    var total = price * newQuantity;
    document.getElementById('total-' + itemId).textContent = total.toFixed(2) + ' DT';

    // Mettre à jour le total du panier
    updateCartTotal();

    // Envoyer la mise à jour au serveur
    fetch(`/panier/mettre-a-jour-quantite/\${itemId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ quantity: newQuantity }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.status !== 'success') {
            console.error(\"Erreur lors de la mise à jour de la quantité sur le serveur\");
        }
    })
    .catch(error => {
        console.error(\"Erreur lors de l'appel AJAX :\", error);
    });
}



function updateCartTotal() {
    // Calculer le total du panier
    let total = 0;
    document.querySelectorAll('.table tbody tr').forEach(function(row) {
        var itemTotal = parseFloat(row.querySelector('td:nth-child(5) p').textContent.replace(' DT', '').trim());
        total += itemTotal;
    });

    // Ajouter la livraison
    total += 7; // Livraison forfaitaire

    // Mettre à jour le total dans la page
    document.getElementById('cart-total').textContent = total.toFixed(2) + ' DT';
    document.getElementById('final-total').textContent = total.toFixed(2) + ' DT';
}





       // Fonction pour supprimer un matériel du panier
// Supprimer l'élément du panier (serveur + DOM)
function removeItem(itemId) {
    // Faire une requête DELETE pour supprimer du serveur
    fetch(`/panier/supprimer/\${itemId}`, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Supprimer l'élément du DOM
            const itemRow = document.getElementById('item-' + itemId);
            if (itemRow) {
                itemRow.remove();
            }

            // Mettre à jour le total du panier
            updateCartTotal();
        }
    })
    .catch(error => {
        console.error('Erreur lors de la suppression:', error);
    });
}

    </script>
{% endblock %}
", "panier/index.html.twig", "C:\\Users\\romdh\\OneDrive\\Bureau\\PI2025\\Reaptn\\templates\\panier\\index.html.twig");
    }
}
