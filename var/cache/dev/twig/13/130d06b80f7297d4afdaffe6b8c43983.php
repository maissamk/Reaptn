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

/* paiement/index.html.twig */
class __TwigTemplate_0320bce085df0f42e08dfd1352870890 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/index.html.twig", 1);
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

        yield "Paiement";
        
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
<!-- Single Page Header Start -->
<div class=\"container-fluid page-header py-5\">
    <h1 class=\"text-center text-white display-6\">Paiement</h1>
    <ol class=\"breadcrumb justify-content-center mb-0\">
        <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_afficher");
        yield "\">Panier</a></li>
        <li class=\"breadcrumb-item active text-white\">Paiement</li>
    </ol>
</div>
<!-- Single Page Header End -->

<!-- Checkout Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Détails du Paiement</h1>

        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <p><strong>Date de commande :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 24, $this->source); })()), "dateCommande", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
        yield "</p>
                <p><strong>Total :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 25, $this->source); })()), "totale", [], "any", false, false, false, 25), "html", null, true);
        yield " DT</p>
            </div>
        </div>

<form action=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_process", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        yield "\" method=\"post\" id=\"paymentForm\">
    <input type=\"hidden\" name=\"datePaiement\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "\">
                   <div class=\"row g-5\">
                    <div class=\"col-md-12 col-lg-6 col-xl-7\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-item\">
                                    <label class=\"form-label my-3\">Nom<sup>*</sup></label>
                                    <input type=\"text\" class=\"form-control\" name=\"nom\" required>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-item\">
                                    <label class=\"form-label my-3\">Prénom<sup>*</sup></label>
                                    <input type=\"text\" class=\"form-control\" name=\"prenom\" required>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Adresse<sup>*</sup></label>
                            <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"Numéro de maison, rue\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Ville<sup>*</sup></label>
                            <input type=\"text\" class=\"form-control\" name=\"ville\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Pays<sup>*</sup></label>
                            <input type=\"text\" class=\"form-control\" name=\"pays\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Code Postal<sup>*</sup></label>
                            <input type=\"text\" class=\"form-control\" name=\"codePostal\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Numéro de téléphone<sup>*</sup></label>
                            <input type=\"tel\" class=\"form-control\" name=\"telephone\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Adresse email<sup>*</sup></label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" required>
                        </div>

                        <div class=\"form-item\">
                            <textarea name=\"notes\" class=\"form-control\" spellcheck=\"false\" cols=\"30\" rows=\"5\" placeholder=\"Notes de commande (facultatif)\"></textarea>
                        </div>
                    </div>
        <div class=\"col-md-12 col-lg-6 col-xl-5\">
            <h3 class=\"mb-3\">Méthode de paiement</h3>
            <div class=\"inlineimage\">
                <img src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png\" alt=\"Mastercard\" style=\"height: 30px;\">
                <img src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png\" alt=\"Discover\" style=\"height: 30px;\">
                <img src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png\" alt=\"PayPal\" style=\"height: 30px;\">
                <img src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png\" alt=\"American Express\" style=\"height: 30px;\">
            </div>

            <div class=\"mt-3\">
                <input type=\"radio\" id=\"carte\" name=\"methodePaiement\" value=\"Carte Bancaire\" class=\"form-check-input\">
                <label for=\"carte\" class=\"form-check-label\">Carte Bancaire</label>
            </div>
            <div>
                <input type=\"radio\" id=\"paypal\" name=\"methodePaiement\" value=\"PayPal\" class=\"form-check-input\">
                <label for=\"paypal\" class=\"form-check-label\">PayPal</label>
            </div>
            <div>
                <input type=\"radio\" id=\"virement\" name=\"methodePaiement\" value=\"Virement Bancaire\" class=\"form-check-input\">
                <label for=\"virement\" class=\"form-check-label\">Virement Bancaire</label>
            </div>

            <div id=\"methodError\" class=\"text-danger mt-2\" style=\"display: none;\">
                Veuillez sélectionner une méthode de paiement.
            </div>

            <!-- Formulaire de carte bancaire -->
            <div id=\"formCarte\" class=\"payment-form mt-3\" style=\"display: none;\">
                <h4>Détails de la Carte Bancaire</h4>
                <input type=\"text\" class=\"form-control mb-2\" name=\"cardNumber\" placeholder=\"Numéro de carte\" id=\"cardNumber\">
                <div id=\"cardNumberError\" class=\"text-danger\" style=\"display: none;\">Veuillez entrer un numéro de carte valide (16 chiffres).</div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <input type=\"text\" class=\"form-control mb-2\" name=\"expirationDate\" placeholder=\"MM/YY\" id=\"expirationDate\">
                        <div id=\"expirationDateError\" class=\"text-danger\" style=\"display: none;\">Veuillez entrer une date d'expiration valide (MM/YY).</div>
                    </div>
                    <div class=\"col-md-6\">
                        <input type=\"text\" class=\"form-control mb-2\" name=\"cvv\" placeholder=\"CVV\" id=\"cvv\">
                        <div id=\"cvvError\" class=\"text-danger\" style=\"display: none;\">Veuillez entrer un CVV valide (3 chiffres).</div>
                    </div>
                </div>
                <input type=\"text\" class=\"form-control mb-2\" name=\"cardHolder\" placeholder=\"Nom du titulaire\" id=\"cardHolder\">
                <div id=\"cardHolderError\" class=\"text-danger\" style=\"display: none;\">Veuillez entrer le nom du titulaire de la carte.</div>
            </div>
 <!-- Formulaire PayPal -->
            <div id=\"formPaypal\" class=\"payment-form\">
                <h3>Connectez-vous à PayPal</h3>
                <div class=\"inlineimage\">
                    <img style=\"height: 30px; width: auto;\" src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png\" alt=\"PayPal\">
                </div>
                <p>Redirection vers la page de paiement sécurisée de PayPal après confirmation.</p>
            </div>

            <!-- Formulaire Virement Bancaire -->
            <div id=\"formVirement\" class=\"payment-form\">
                <h3>Détails pour le Virement Bancaire</h3>
                <div class=\"inlineimage\">
                    <img style=\"height: 30px; width: auto;\" src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png\" alt=\"Virement Bancaire\">
                </div>
                <p>Vous recevrez les instructions pour effectuer le virement une fois la commande validée.</p>
            </div>


            <div class=\"text-center pt-4\">
                <button type=\"submit\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\" id=\"submitButton\" disabled>
                    Confirmer le paiement
                </button>
            </div>

            
        </div>


        
    </div>
</form>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const formCarte = document.getElementById(\"formCarte\");
    const submitButton = document.getElementById(\"submitButton\");
    const methodError = document.getElementById(\"methodError\");
    const paymentMethods = document.querySelectorAll(\"input[name='methodePaiement']\");

    const cardNumber = document.getElementById(\"cardNumber\");
    const expirationDate = document.getElementById(\"expirationDate\");
    const cvv = document.getElementById(\"cvv\");
    const cardHolder = document.getElementById(\"cardHolder\");

    const errors = {
        cardNumberError: document.getElementById(\"cardNumberError\"),
        expirationDateError: document.getElementById(\"expirationDateError\"),
        cvvError: document.getElementById(\"cvvError\"),
        cardHolderError: document.getElementById(\"cardHolderError\"),
    };

    paymentMethods.forEach(method => {
        method.addEventListener(\"change\", function () {
            methodError.style.display = \"none\";
            submitButton.disabled = false;

            if (this.value === \"Carte Bancaire\") {
                formCarte.style.display = \"block\";
            } else {
                formCarte.style.display = \"none\";
            }
        });
    });

    function validateField(input, regex, errorElement) {
        if (!regex.test(input.value.trim())) {
            errorElement.style.display = \"block\";
            return false;
        } else {
            errorElement.style.display = \"none\";
            return true;
        }
    }

    function validateCardForm() {
        return validateField(cardNumber, /^\\d{16}\$/, errors.cardNumberError) &&
               validateField(expirationDate, /^\\d{2}\\/\\d{2}\$/, errors.expirationDateError) &&
               validateField(cvv, /^\\d{3}\$/, errors.cvvError) &&
               validateField(cardHolder, /^[a-zA-Z\\s]+\$/, errors.cardHolderError);
    }

    submitButton.addEventListener(\"click\", function (event) {
        const selectedMethod = document.querySelector(\"input[name='methodePaiement']:checked\");

        if (!selectedMethod) {
            methodError.style.display = \"block\";
            submitButton.disabled = true;
            event.preventDefault();
            return;
        }

        if (selectedMethod.value === \"Carte Bancaire\" && !validateCardForm()) {
            event.preventDefault();
        }
    });
});
</script>


    </div>
</div>
<!-- Checkout Page End -->



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
        return "paiement/index.html.twig";
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
        return array (  138 => 30,  134 => 29,  127 => 25,  123 => 24,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiement{% endblock %}

{% block body %}

<!-- Single Page Header Start -->
<div class=\"container-fluid page-header py-5\">
    <h1 class=\"text-center text-white display-6\">Paiement</h1>
    <ol class=\"breadcrumb justify-content-center mb-0\">
        <li class=\"breadcrumb-item\"><a href=\"{{ path('panier_afficher') }}\">Panier</a></li>
        <li class=\"breadcrumb-item active text-white\">Paiement</li>
    </ol>
</div>
<!-- Single Page Header End -->

<!-- Checkout Page Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <h1 class=\"mb-4\">Détails du Paiement</h1>

        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <p><strong>Date de commande :</strong> {{ commande.dateCommande|date('d/m/Y') }}</p>
                <p><strong>Total :</strong> {{ commande.totale }} DT</p>
            </div>
        </div>

<form action=\"{{ path('paiement_process', { id: commande.id }) }}\" method=\"post\" id=\"paymentForm\">
    <input type=\"hidden\" name=\"datePaiement\" value=\"{{ 'now'|date('Y-m-d') }}\">
                   <div class=\"row g-5\">
                    <div class=\"col-md-12 col-lg-6 col-xl-7\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-item\">
                                    <label class=\"form-label my-3\">Nom<sup>*</sup></label>
                                    <input type=\"text\" class=\"form-control\" name=\"nom\" required>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-item\">
                                    <label class=\"form-label my-3\">Prénom<sup>*</sup></label>
                                    <input type=\"text\" class=\"form-control\" name=\"prenom\" required>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Adresse<sup>*</sup></label>
                            <input type=\"text\" class=\"form-control\" name=\"adresse\" placeholder=\"Numéro de maison, rue\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Ville<sup>*</sup></label>
                            <input type=\"text\" class=\"form-control\" name=\"ville\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Pays<sup>*</sup></label>
                            <input type=\"text\" class=\"form-control\" name=\"pays\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Code Postal<sup>*</sup></label>
                            <input type=\"text\" class=\"form-control\" name=\"codePostal\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Numéro de téléphone<sup>*</sup></label>
                            <input type=\"tel\" class=\"form-control\" name=\"telephone\" required>
                        </div>
                        <div class=\"form-item\">
                            <label class=\"form-label my-3\">Adresse email<sup>*</sup></label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" required>
                        </div>

                        <div class=\"form-item\">
                            <textarea name=\"notes\" class=\"form-control\" spellcheck=\"false\" cols=\"30\" rows=\"5\" placeholder=\"Notes de commande (facultatif)\"></textarea>
                        </div>
                    </div>
        <div class=\"col-md-12 col-lg-6 col-xl-5\">
            <h3 class=\"mb-3\">Méthode de paiement</h3>
            <div class=\"inlineimage\">
                <img src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png\" alt=\"Mastercard\" style=\"height: 30px;\">
                <img src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png\" alt=\"Discover\" style=\"height: 30px;\">
                <img src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png\" alt=\"PayPal\" style=\"height: 30px;\">
                <img src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png\" alt=\"American Express\" style=\"height: 30px;\">
            </div>

            <div class=\"mt-3\">
                <input type=\"radio\" id=\"carte\" name=\"methodePaiement\" value=\"Carte Bancaire\" class=\"form-check-input\">
                <label for=\"carte\" class=\"form-check-label\">Carte Bancaire</label>
            </div>
            <div>
                <input type=\"radio\" id=\"paypal\" name=\"methodePaiement\" value=\"PayPal\" class=\"form-check-input\">
                <label for=\"paypal\" class=\"form-check-label\">PayPal</label>
            </div>
            <div>
                <input type=\"radio\" id=\"virement\" name=\"methodePaiement\" value=\"Virement Bancaire\" class=\"form-check-input\">
                <label for=\"virement\" class=\"form-check-label\">Virement Bancaire</label>
            </div>

            <div id=\"methodError\" class=\"text-danger mt-2\" style=\"display: none;\">
                Veuillez sélectionner une méthode de paiement.
            </div>

            <!-- Formulaire de carte bancaire -->
            <div id=\"formCarte\" class=\"payment-form mt-3\" style=\"display: none;\">
                <h4>Détails de la Carte Bancaire</h4>
                <input type=\"text\" class=\"form-control mb-2\" name=\"cardNumber\" placeholder=\"Numéro de carte\" id=\"cardNumber\">
                <div id=\"cardNumberError\" class=\"text-danger\" style=\"display: none;\">Veuillez entrer un numéro de carte valide (16 chiffres).</div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <input type=\"text\" class=\"form-control mb-2\" name=\"expirationDate\" placeholder=\"MM/YY\" id=\"expirationDate\">
                        <div id=\"expirationDateError\" class=\"text-danger\" style=\"display: none;\">Veuillez entrer une date d'expiration valide (MM/YY).</div>
                    </div>
                    <div class=\"col-md-6\">
                        <input type=\"text\" class=\"form-control mb-2\" name=\"cvv\" placeholder=\"CVV\" id=\"cvv\">
                        <div id=\"cvvError\" class=\"text-danger\" style=\"display: none;\">Veuillez entrer un CVV valide (3 chiffres).</div>
                    </div>
                </div>
                <input type=\"text\" class=\"form-control mb-2\" name=\"cardHolder\" placeholder=\"Nom du titulaire\" id=\"cardHolder\">
                <div id=\"cardHolderError\" class=\"text-danger\" style=\"display: none;\">Veuillez entrer le nom du titulaire de la carte.</div>
            </div>
 <!-- Formulaire PayPal -->
            <div id=\"formPaypal\" class=\"payment-form\">
                <h3>Connectez-vous à PayPal</h3>
                <div class=\"inlineimage\">
                    <img style=\"height: 30px; width: auto;\" src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png\" alt=\"PayPal\">
                </div>
                <p>Redirection vers la page de paiement sécurisée de PayPal après confirmation.</p>
            </div>

            <!-- Formulaire Virement Bancaire -->
            <div id=\"formVirement\" class=\"payment-form\">
                <h3>Détails pour le Virement Bancaire</h3>
                <div class=\"inlineimage\">
                    <img style=\"height: 30px; width: auto;\" src=\"https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png\" alt=\"Virement Bancaire\">
                </div>
                <p>Vous recevrez les instructions pour effectuer le virement une fois la commande validée.</p>
            </div>


            <div class=\"text-center pt-4\">
                <button type=\"submit\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\" id=\"submitButton\" disabled>
                    Confirmer le paiement
                </button>
            </div>

            
        </div>


        
    </div>
</form>

<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const formCarte = document.getElementById(\"formCarte\");
    const submitButton = document.getElementById(\"submitButton\");
    const methodError = document.getElementById(\"methodError\");
    const paymentMethods = document.querySelectorAll(\"input[name='methodePaiement']\");

    const cardNumber = document.getElementById(\"cardNumber\");
    const expirationDate = document.getElementById(\"expirationDate\");
    const cvv = document.getElementById(\"cvv\");
    const cardHolder = document.getElementById(\"cardHolder\");

    const errors = {
        cardNumberError: document.getElementById(\"cardNumberError\"),
        expirationDateError: document.getElementById(\"expirationDateError\"),
        cvvError: document.getElementById(\"cvvError\"),
        cardHolderError: document.getElementById(\"cardHolderError\"),
    };

    paymentMethods.forEach(method => {
        method.addEventListener(\"change\", function () {
            methodError.style.display = \"none\";
            submitButton.disabled = false;

            if (this.value === \"Carte Bancaire\") {
                formCarte.style.display = \"block\";
            } else {
                formCarte.style.display = \"none\";
            }
        });
    });

    function validateField(input, regex, errorElement) {
        if (!regex.test(input.value.trim())) {
            errorElement.style.display = \"block\";
            return false;
        } else {
            errorElement.style.display = \"none\";
            return true;
        }
    }

    function validateCardForm() {
        return validateField(cardNumber, /^\\d{16}\$/, errors.cardNumberError) &&
               validateField(expirationDate, /^\\d{2}\\/\\d{2}\$/, errors.expirationDateError) &&
               validateField(cvv, /^\\d{3}\$/, errors.cvvError) &&
               validateField(cardHolder, /^[a-zA-Z\\s]+\$/, errors.cardHolderError);
    }

    submitButton.addEventListener(\"click\", function (event) {
        const selectedMethod = document.querySelector(\"input[name='methodePaiement']:checked\");

        if (!selectedMethod) {
            methodError.style.display = \"block\";
            submitButton.disabled = true;
            event.preventDefault();
            return;
        }

        if (selectedMethod.value === \"Carte Bancaire\" && !validateCardForm()) {
            event.preventDefault();
        }
    });
});
</script>


    </div>
</div>
<!-- Checkout Page End -->



{% endblock %}
", "paiement/index.html.twig", "C:\\Users\\asus\\Desktop\\PI2025\\pi2025\\templates\\paiement\\index.html.twig");
    }
}
