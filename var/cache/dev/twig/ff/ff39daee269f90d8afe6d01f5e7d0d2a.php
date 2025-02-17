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

/* paiement/confirmation.html.twig */
class __TwigTemplate_2eb896a9707bce50fb939afd5b0119e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/confirmation.html.twig", 1);
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

        yield "Suivi de Commande";
        
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
        <h1 class=\"text-center text-white display-6\">Suivi de votre commande</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            
        </ol>
    </div>
    <!-- Single Page Header End -->
<div class=\"container mt-5\">
    
    <!-- Avancement de la commande -->
<!-- templates/paiement/confirmation.html.twig -->
<div class=\"progress-tracker mb-5\">
    <div class=\"row text-center\">
        <div class=\"col\">
            <div class=\"progress-step ";
        // line 40
        if (((isset($context["current_step"]) || array_key_exists("current_step", $context) ? $context["current_step"] : (function () { throw new RuntimeError('Variable "current_step" does not exist.', 40, $this->source); })()) == 1)) {
            yield "active";
        }
        yield "\">
                <span class=\"icon\">✔</span>
                <p>Validation en cours</p>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"progress-line ";
        // line 46
        if (((isset($context["current_step"]) || array_key_exists("current_step", $context) ? $context["current_step"] : (function () { throw new RuntimeError('Variable "current_step" does not exist.', 46, $this->source); })()) > 1)) {
            yield "completed";
        }
        yield "\"></div>
            <div class=\"progress-step ";
        // line 47
        if (((isset($context["current_step"]) || array_key_exists("current_step", $context) ? $context["current_step"] : (function () { throw new RuntimeError('Variable "current_step" does not exist.', 47, $this->source); })()) == 2)) {
            yield "active";
        }
        yield "\">
                <span class=\"icon\">📦</span>
                <p>Préparation</p>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"progress-line ";
        // line 53
        if (((isset($context["current_step"]) || array_key_exists("current_step", $context) ? $context["current_step"] : (function () { throw new RuntimeError('Variable "current_step" does not exist.', 53, $this->source); })()) > 2)) {
            yield "completed";
        }
        yield "\"></div>
            <div class=\"progress-step ";
        // line 54
        if (((isset($context["current_step"]) || array_key_exists("current_step", $context) ? $context["current_step"] : (function () { throw new RuntimeError('Variable "current_step" does not exist.', 54, $this->source); })()) == 3)) {
            yield "active";
        }
        yield "\">
                <span class=\"icon\">🚚</span>
                <p>Expédition</p>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"progress-line ";
        // line 60
        if (((isset($context["current_step"]) || array_key_exists("current_step", $context) ? $context["current_step"] : (function () { throw new RuntimeError('Variable "current_step" does not exist.', 60, $this->source); })()) > 3)) {
            yield "completed";
        }
        yield "\"></div>
            <div class=\"progress-step ";
        // line 61
        if (((isset($context["current_step"]) || array_key_exists("current_step", $context) ? $context["current_step"] : (function () { throw new RuntimeError('Variable "current_step" does not exist.', 61, $this->source); })()) == 4)) {
            yield "active";
        }
        yield "\">
                <span class=\"icon\">📍</span>
                <p>Livraison</p>
            </div>
        </div>
    </div>
</div>

   <!-- Détails de la livraison -->
<div class=\"card mb-5\">
    <div class=\"card-header text-center bg-warning text-white\">
        <h5 class=\"mb-0\">Détails de la Livraison</h5>
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"delivery-detail\">
                    <i class=\"fa fa-map-marker-alt fa-2x text-primary\"></i>
                    <p><strong>Adresse de livraison :</strong> ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 79, $this->source); })()), "adresse", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"delivery-detail\">
                    <i class=\"fa fa-calendar-alt fa-2x text-info\"></i>
                    <p><strong>Date estimée :</strong> ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 85, $this->source); })()), "dateLiv", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true);
        yield "</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"delivery-detail\">
                    <i class=\"fa fa-truck fa-2x text-success\"></i>
                    <p><strong>Statut :</strong> ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 91, $this->source); })()), "status", [], "any", false, false, false, 91), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Message de remerciement -->
    <div class=\"thank-you-message text-center mt-4\">
        <h3 class=\"text-success\">Merci pour votre commande !</h3>
        <p>Nous vous remercions pour votre confiance. Si vous avez des questions, n’hésitez pas à <a  class=\"text-primary\">nous contacter</a>.</p>
        <p>Nous espérons vous revoir bientôt ! 😊</p>
    </div>
</div>

<style>
    .progress-tracker {
        position: relative;
        margin-top: 30px;
    }
    
    .progress-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        position: relative;
        color: #888;
        transition: all 0.3s ease;
        text-align: center;
    }

    .progress-step.active {
        color: #4CAF50;
        font-weight: bold;
    }

    .progress-step .icon {
        font-size: 40px;
        border-radius: 50%;
        padding: 15px;
        background-color: #fff;
        box-shadow: 0px 6px 12px rgba(0,0,0,0.1);
    }

    .progress-step p {
        margin-top: 10px;
        font-size: 1.1rem;
        color: #444;
    }

    .progress-line {
        position: absolute;
        top: 50%;
        width: 100%;
        height: 2px;
        background-color: #ddd;
        z-index: -1;
        left: 50%;
        transform: translateX(-50%);
    }

    .progress-line.completed {
        background-color: #4CAF50;
    }

    /* Style for different active steps */
    .progress-step.active .icon {
        background-color: #4CAF50;
        color: white;
    }

     /* Styling for delivery detail card */
    .card {
        border-radius: 12px;
        box-shadow: 0px 6px 18px rgba(0,0,0,0.1);
    }

    .card-header {
        border-radius: 12px 12px 0 0;
    }

    .card-body {
        padding: 25px;
        color: #333;
    }

    .delivery-detail {
        text-align: center;
        margin-bottom: 20px;
    }

    .delivery-detail i {
        margin-bottom: 10px;
    }

    .delivery-detail p {
        font-size: 1rem;
        color: #555;
    }

    .card-header h5 {
        font-weight: bold;
    }

    /* Styling for the page header */
    h1 {
        color: #2D2D2D;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
    }



/* Styling for the Thank you message */
    .thank-you-message {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        margin-top: 20px;
    }

    .thank-you-message h3 {
        font-weight: bold;
    }

    .thank-you-message p {
        font-size: 1rem;
        color: #555;
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
        return "paiement/confirmation.html.twig";
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
        return array (  228 => 91,  219 => 85,  210 => 79,  187 => 61,  181 => 60,  170 => 54,  164 => 53,  153 => 47,  147 => 46,  136 => 40,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Suivi de Commande{% endblock %}

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
        <h1 class=\"text-center text-white display-6\">Suivi de votre commande</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            
        </ol>
    </div>
    <!-- Single Page Header End -->
<div class=\"container mt-5\">
    
    <!-- Avancement de la commande -->
<!-- templates/paiement/confirmation.html.twig -->
<div class=\"progress-tracker mb-5\">
    <div class=\"row text-center\">
        <div class=\"col\">
            <div class=\"progress-step {% if current_step == 1 %}active{% endif %}\">
                <span class=\"icon\">✔</span>
                <p>Validation en cours</p>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"progress-line {% if current_step > 1 %}completed{% endif %}\"></div>
            <div class=\"progress-step {% if current_step == 2 %}active{% endif %}\">
                <span class=\"icon\">📦</span>
                <p>Préparation</p>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"progress-line {% if current_step > 2 %}completed{% endif %}\"></div>
            <div class=\"progress-step {% if current_step == 3 %}active{% endif %}\">
                <span class=\"icon\">🚚</span>
                <p>Expédition</p>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"progress-line {% if current_step > 3 %}completed{% endif %}\"></div>
            <div class=\"progress-step {% if current_step == 4 %}active{% endif %}\">
                <span class=\"icon\">📍</span>
                <p>Livraison</p>
            </div>
        </div>
    </div>
</div>

   <!-- Détails de la livraison -->
<div class=\"card mb-5\">
    <div class=\"card-header text-center bg-warning text-white\">
        <h5 class=\"mb-0\">Détails de la Livraison</h5>
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"delivery-detail\">
                    <i class=\"fa fa-map-marker-alt fa-2x text-primary\"></i>
                    <p><strong>Adresse de livraison :</strong> {{ livraison.adresse }}</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"delivery-detail\">
                    <i class=\"fa fa-calendar-alt fa-2x text-info\"></i>
                    <p><strong>Date estimée :</strong> {{ livraison.dateLiv|date('d/m/Y') }}</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"delivery-detail\">
                    <i class=\"fa fa-truck fa-2x text-success\"></i>
                    <p><strong>Statut :</strong> {{ livraison.status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Message de remerciement -->
    <div class=\"thank-you-message text-center mt-4\">
        <h3 class=\"text-success\">Merci pour votre commande !</h3>
        <p>Nous vous remercions pour votre confiance. Si vous avez des questions, n’hésitez pas à <a  class=\"text-primary\">nous contacter</a>.</p>
        <p>Nous espérons vous revoir bientôt ! 😊</p>
    </div>
</div>

<style>
    .progress-tracker {
        position: relative;
        margin-top: 30px;
    }
    
    .progress-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        position: relative;
        color: #888;
        transition: all 0.3s ease;
        text-align: center;
    }

    .progress-step.active {
        color: #4CAF50;
        font-weight: bold;
    }

    .progress-step .icon {
        font-size: 40px;
        border-radius: 50%;
        padding: 15px;
        background-color: #fff;
        box-shadow: 0px 6px 12px rgba(0,0,0,0.1);
    }

    .progress-step p {
        margin-top: 10px;
        font-size: 1.1rem;
        color: #444;
    }

    .progress-line {
        position: absolute;
        top: 50%;
        width: 100%;
        height: 2px;
        background-color: #ddd;
        z-index: -1;
        left: 50%;
        transform: translateX(-50%);
    }

    .progress-line.completed {
        background-color: #4CAF50;
    }

    /* Style for different active steps */
    .progress-step.active .icon {
        background-color: #4CAF50;
        color: white;
    }

     /* Styling for delivery detail card */
    .card {
        border-radius: 12px;
        box-shadow: 0px 6px 18px rgba(0,0,0,0.1);
    }

    .card-header {
        border-radius: 12px 12px 0 0;
    }

    .card-body {
        padding: 25px;
        color: #333;
    }

    .delivery-detail {
        text-align: center;
        margin-bottom: 20px;
    }

    .delivery-detail i {
        margin-bottom: 10px;
    }

    .delivery-detail p {
        font-size: 1rem;
        color: #555;
    }

    .card-header h5 {
        font-weight: bold;
    }

    /* Styling for the page header */
    h1 {
        color: #2D2D2D;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
    }



/* Styling for the Thank you message */
    .thank-you-message {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        margin-top: 20px;
    }

    .thank-you-message h3 {
        font-weight: bold;
    }

    .thank-you-message p {
        font-size: 1rem;
        color: #555;
    }

</style>



  


        
  

    
{% endblock %}
", "paiement/confirmation.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\paiement\\confirmation.html.twig");
    }
}
