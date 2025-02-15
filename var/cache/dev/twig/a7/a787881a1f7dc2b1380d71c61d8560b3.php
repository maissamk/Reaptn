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

/* utilisateur/_form.html.twig */
class __TwigTemplate_5f11e841ab8cb4ea59d45b07d99440bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

<div class=\"container\" style=\"margin-top: 30px;\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header text-center\">
                    <h3>Inscription</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <label for=\"nom\" class=\"form-label\">";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'label');
        yield "</label>
                        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger\">";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"prenom\" class=\"form-label\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'label');
        yield "</label>
                        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger\">";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'label');
        yield "</label>
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger\">";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'errors');
        yield "</div>
                    </div>

            <div class=\"mb-3\">
    <label for=\"mdp\" class=\"form-label\">Mot de Passe</label>
    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "mdp", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "type" => "password"]]);
        yield "
    <div class=\"text-danger\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "mdp", [], "any", false, false, false, 32), 'errors');
        yield "</div>
</div>

                    <div class=\"mb-3\">
                        <label for=\"tele\" class=\"form-label\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "tele", [], "any", false, false, false, 36), 'label');
        yield "</label>
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "tele", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "tele", [], "any", false, false, false, 38), 'errors');
        yield "</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"role\" class=\"form-label\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42), 'label');
        yield "</label>
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "role", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <div class=\"text-danger\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "role", [], "any", false, false, false, 44), 'errors');
        yield "</div>
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 48, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
                    </div>

                    <!-- Back to List Button -->
                    <div class=\"text-center\" style=\"margin-top: 15px;\">
                        <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        yield "\" class=\"btn btn-secondary w-100\">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
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
        return "utilisateur/_form.html.twig";
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
        return array (  168 => 61,  157 => 53,  149 => 48,  142 => 44,  138 => 43,  134 => 42,  127 => 38,  123 => 37,  119 => 36,  112 => 32,  108 => 31,  100 => 26,  96 => 25,  92 => 24,  85 => 20,  81 => 19,  77 => 18,  70 => 14,  66 => 13,  62 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

<div class=\"container\" style=\"margin-top: 30px;\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 col-lg-6\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header text-center\">
                    <h3>Inscription</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-3\">
                        <label for=\"nom\" class=\"form-label\">{{ form_label(form.nom) }}</label>
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger\">{{ form_errors(form.nom) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"prenom\" class=\"form-label\">{{ form_label(form.prenom) }}</label>
                        {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger\">{{ form_errors(form.prenom) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">{{ form_label(form.email) }}</label>
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger\">{{ form_errors(form.email) }}</div>
                    </div>

            <div class=\"mb-3\">
    <label for=\"mdp\" class=\"form-label\">Mot de Passe</label>
    {{ form_widget(form.mdp, {'attr': {'class': 'form-control', 'type': 'password'}}) }}
    <div class=\"text-danger\">{{ form_errors(form.mdp) }}</div>
</div>

                    <div class=\"mb-3\">
                        <label for=\"tele\" class=\"form-label\">{{ form_label(form.tele) }}</label>
                        {{ form_widget(form.tele, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger\">{{ form_errors(form.tele) }}</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"role\" class=\"form-label\">{{ form_label(form.role) }}</label>
                        {{ form_widget(form.role, {'attr': {'class': 'form-select'}}) }}
                        <div class=\"text-danger\">{{ form_errors(form.role) }}</div>
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">{{ button_label|default('Save') }}</button>
                    </div>

                    <!-- Back to List Button -->
                    <div class=\"text-center\" style=\"margin-top: 15px;\">
                        <a href=\"{{ path('app_utilisateur_index') }}\" class=\"btn btn-secondary w-100\">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{ form_end(form) }}
", "utilisateur/_form.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\utilisateur\\_form.html.twig");
    }
}
