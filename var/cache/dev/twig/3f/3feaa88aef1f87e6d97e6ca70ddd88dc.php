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

/* parcelle_proprietes/_form.html.twig */
class __TwigTemplate_550c8bf05e83b0d30833464a2e10427d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcelle_proprietes/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "


<div class=\"mb-3\">
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre"]);
        yield "
    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "errors", [], "any", false, false, false, 6)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prix", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix"]);
        yield "
    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18)) > 0)) ? (" is-invalid") : (""))), "pattern" => "[0-9]+(.[0-9]{1,2})?", "title" => "Entrer un prix valide"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield "
    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "emplacement", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Emplacement"]);
        yield "
    
    <!-- Champ de saisie avec autocomplétion -->
    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "emplacement", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "emplacement", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34)) > 0)) ? (" is-invalid") : (""))), "id" => "autocomplete", "placeholder" => "Entrez un emplacement ou sélectionnez sur la carte"]]);
        // line 38
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "emplacement", [], "any", false, false, false, 39), 'errors');
        yield "</div>
    
    <!-- Carte interactive -->
    <div id=\"map\" style=\"height: 400px; margin-top: 20px;\"></div>
</div>


<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />

<script src=\"https://unpkg.com/leaflet-geosearch/dist/bundle.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet-geosearch/assets/css/leaflet.css\" />

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const map = L.map('map').setView([36.8065, 10.1815], 7); // Coordonnées par défaut : Tunis

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    let marker = null;

    // Fonction pour le géocodage inversé
    async function reverseGeocode(lat, lng) {
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?lat=\${lat}&lon=\${lng}&format=json`);
            if (response.ok) {
                const data = await response.json();
                return data.display_name || `Latitude: \${lat}, Longitude: \${lng}`;
            } else {
                console.error('Erreur lors du géocodage inversé.');
                return `Latitude: \${lat}, Longitude: \${lng}`;
            }
        } catch (error) {
            console.error('Erreur de connexion au service de géocodage inversé.');
            return `Latitude: \${lat}, Longitude: \${lng}`;
        }
    }

    // Géolocalisation sur la carte
    map.on('click', async (e) => {
        const { lat, lng } = e.latlng;
        if (marker) map.removeLayer(marker);

        marker = L.marker([lat, lng]).addTo(map);

        const input = document.getElementById('autocomplete');
        const address = await reverseGeocode(lat, lng);
        input.value = address;
        input.setAttribute('value', address); // Assurez-vous que la valeur soit correctement capturée par Symfony
    });

    // Autocomplétion avec GeoSearch
    const provider = new window.GeoSearch.OpenStreetMapProvider();

    const input = document.getElementById('autocomplete');
    input.addEventListener('input', async () => {
        const results = await provider.search({ query: input.value });
        if (results.length > 0) {
            const { x, y, label } = results[0];
            if (marker) map.removeLayer(marker);

            marker = L.marker([y, x]).addTo(map);
            map.setView([y, x], 10);

            // Mise à jour du champ emplacement avec l'adresse trouvée
            input.value = label;
            input.setAttribute('value', label); // Assurez-vous que la valeur soit bien envoyée au serveur
        }
    });
});


</script>






<div class=\"mb-3\">
    ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "taille", [], "any", false, false, false, 121), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taille (m²)"]);
        yield "
    ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "taille", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "taille", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "errors", [], "any", false, false, false, 122)) > 0)) ? (" is-invalid") : (""))), "min" => "1", "step" => "0.01"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "taille", [], "any", false, false, false, 123), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 127), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de création"]);
        yield "
    ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "errors", [], "any", false, false, false, 128)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "date_creation_annonce", [], "any", false, false, false, 129), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 133), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de mise à jour"]);
        yield "
    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "errors", [], "any", false, false, false, 134)) > 0)) ? (" is-invalid") : (""))), "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "date_misajour_annonce", [], "any", false, false, false, 135), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "estDisponible", [], "any", false, false, false, 139), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Disponible"]);
        yield "
    ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "estDisponible", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
</div>

<div class=\"mb-3\">
    ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 144), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du propriétaire"]);
        yield "
    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "errors", [], "any", false, false, false, 145)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "nom_proprietaire", [], "any", false, false, false, 146), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 150), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contact du propriétaire"]);
        yield "
    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "errors", [], "any", false, false, false, 151)) > 0)) ? (" is-invalid") : (""))), "pattern" => "^+?[0-9]*\$", "title" => "Numéro de téléphone valide requis"]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "contact_proprietaire", [], "any", false, false, false, 152), 'errors');
        yield "</div>
</div>

<div class=\"mb-3\">
    ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "image", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image"]);
        yield "
    ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "image", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "image", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "errors", [], "any", false, false, false, 157)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">
        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "image", [], "any", false, false, false, 159), 'errors');
        yield "
    </div>
    <div class=\"mb-3\">
    ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "type_terrain", [], "any", false, false, false, 162), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type de terrain"]);
        yield "
    ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "type_terrain", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "type_terrain", [], "any", false, false, false, 163), "vars", [], "any", false, false, false, 163), "errors", [], "any", false, false, false, 163)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback text-danger\">";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "type_terrain", [], "any", false, false, false, 164), 'errors');
        yield "</div>
</div>

</div>

<button type=\"submit\" class=\"btn btn-primary\">
    ";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 170, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
</button>




";
        // line 176
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), 'form_end');
        yield "
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
        return "parcelle_proprietes/_form.html.twig";
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
        return array (  339 => 176,  330 => 170,  321 => 164,  317 => 163,  313 => 162,  307 => 159,  302 => 157,  298 => 156,  291 => 152,  287 => 151,  283 => 150,  276 => 146,  272 => 145,  268 => 144,  261 => 140,  257 => 139,  250 => 135,  246 => 134,  242 => 133,  235 => 129,  231 => 128,  227 => 127,  220 => 123,  216 => 122,  212 => 121,  127 => 39,  124 => 38,  122 => 34,  121 => 32,  115 => 29,  108 => 25,  104 => 24,  100 => 23,  93 => 19,  89 => 18,  85 => 17,  78 => 13,  74 => 12,  70 => 11,  63 => 7,  59 => 6,  55 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}


<div class=\"mb-3\">
    {{ form_label(form.titre, 'Titre', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.titre, {'attr': {'class': 'form-control' ~ (form.titre.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.titre) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.description, {'attr': {'class': 'form-control' ~ (form.description.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.description) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.prix, {'attr': {'class': 'form-control' ~ (form.prix.vars.errors|length > 0 ? ' is-invalid' : ''), 'pattern': '[0-9]+(\\.[0-9]{1,2})?', 'title': 'Entrer un prix valide'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.prix) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.status, 'Statut', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.status, {'attr': {'class': 'form-control' ~ (form.status.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.status) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.emplacement, 'Emplacement', {'label_attr': {'class': 'form-label'}}) }}
    
    <!-- Champ de saisie avec autocomplétion -->
    {{ form_widget(form.emplacement, {
        'attr': {
            'class': 'form-control' ~ (form.emplacement.vars.errors|length > 0 ? ' is-invalid' : ''),
            'id': 'autocomplete',
            'placeholder': 'Entrez un emplacement ou sélectionnez sur la carte'
        }
    }) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.emplacement) }}</div>
    
    <!-- Carte interactive -->
    <div id=\"map\" style=\"height: 400px; margin-top: 20px;\"></div>
</div>


<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />

<script src=\"https://unpkg.com/leaflet-geosearch/dist/bundle.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet-geosearch/assets/css/leaflet.css\" />

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const map = L.map('map').setView([36.8065, 10.1815], 7); // Coordonnées par défaut : Tunis

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    let marker = null;

    // Fonction pour le géocodage inversé
    async function reverseGeocode(lat, lng) {
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/reverse?lat=\${lat}&lon=\${lng}&format=json`);
            if (response.ok) {
                const data = await response.json();
                return data.display_name || `Latitude: \${lat}, Longitude: \${lng}`;
            } else {
                console.error('Erreur lors du géocodage inversé.');
                return `Latitude: \${lat}, Longitude: \${lng}`;
            }
        } catch (error) {
            console.error('Erreur de connexion au service de géocodage inversé.');
            return `Latitude: \${lat}, Longitude: \${lng}`;
        }
    }

    // Géolocalisation sur la carte
    map.on('click', async (e) => {
        const { lat, lng } = e.latlng;
        if (marker) map.removeLayer(marker);

        marker = L.marker([lat, lng]).addTo(map);

        const input = document.getElementById('autocomplete');
        const address = await reverseGeocode(lat, lng);
        input.value = address;
        input.setAttribute('value', address); // Assurez-vous que la valeur soit correctement capturée par Symfony
    });

    // Autocomplétion avec GeoSearch
    const provider = new window.GeoSearch.OpenStreetMapProvider();

    const input = document.getElementById('autocomplete');
    input.addEventListener('input', async () => {
        const results = await provider.search({ query: input.value });
        if (results.length > 0) {
            const { x, y, label } = results[0];
            if (marker) map.removeLayer(marker);

            marker = L.marker([y, x]).addTo(map);
            map.setView([y, x], 10);

            // Mise à jour du champ emplacement avec l'adresse trouvée
            input.value = label;
            input.setAttribute('value', label); // Assurez-vous que la valeur soit bien envoyée au serveur
        }
    });
});


</script>






<div class=\"mb-3\">
    {{ form_label(form.taille, 'Taille (m²)', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.taille, {'attr': {'class': 'form-control' ~ (form.taille.vars.errors|length > 0 ? ' is-invalid' : ''), 'min': '1', 'step': '0.01'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.taille) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.date_creation_annonce, 'Date de création', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.date_creation_annonce, {'attr': {'class': 'form-control' ~ (form.date_creation_annonce.vars.errors|length > 0 ? ' is-invalid' : ''), 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.date_creation_annonce) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.date_misajour_annonce, 'Date de mise à jour', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.date_misajour_annonce, {'attr': {'class': 'form-control' ~ (form.date_misajour_annonce.vars.errors|length > 0 ? ' is-invalid' : ''), 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.date_misajour_annonce) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.estDisponible, 'Disponible', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.estDisponible, {'attr': {'class': 'form-check-input'}}) }}
</div>

<div class=\"mb-3\">
    {{ form_label(form.nom_proprietaire, 'Nom du propriétaire', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.nom_proprietaire, {'attr': {'class': 'form-control' ~ (form.nom_proprietaire.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.nom_proprietaire) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.contact_proprietaire, 'Contact du propriétaire', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.contact_proprietaire, {'attr': {'class': 'form-control' ~ (form.contact_proprietaire.vars.errors|length > 0 ? ' is-invalid' : ''), 'pattern': '^\\+?[0-9]*\$', 'title': 'Numéro de téléphone valide requis'}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.contact_proprietaire) }}</div>
</div>

<div class=\"mb-3\">
    {{ form_label(form.image, 'Image', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.image, {'attr': {'class': 'form-control' ~ (form.image.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">
        {{ form_errors(form.image) }}
    </div>
    <div class=\"mb-3\">
    {{ form_label(form.type_terrain, 'Type de terrain', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.type_terrain, {'attr': {'class': 'form-control' ~ (form.type_terrain.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback text-danger\">{{ form_errors(form.type_terrain) }}</div>
</div>

</div>

<button type=\"submit\" class=\"btn btn-primary\">
    {{ button_label|default('Enregistrer') }}
</button>




{{ form_end(form) }}
", "parcelle_proprietes/_form.html.twig", "C:\\Users\\DELL\\Downloads\\projet\\Reaptn\\templates\\parcelle_proprietes\\_form.html.twig");
    }
}
