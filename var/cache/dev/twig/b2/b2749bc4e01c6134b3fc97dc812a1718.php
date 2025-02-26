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

/* admin/profile/edit.html.twig */
class __TwigTemplate_6dbdec4c0a64dcfd7d516cbf56183cfe extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "admin/profile/edit.html.twig", 1);
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

        yield "Modifier l'Utilisateur";
        
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
        yield "    <div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"col-md-8\">
            <h1 class=\"text-center mb-4\">Modifier l'Utilisateur</h1>

            <!-- Affichage des erreurs globales -->
            ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "errors", [], "any", false, false, false, 11)) > 0)) {
            // line 12
            yield "                <div class=\"alert alert-danger\">
                    <strong>Erreurs :</strong><br>
                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                yield "                        <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 15), "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "                </div>
            ";
        }
        // line 19
        yield "
            <!-- Formulaire de Modification de l'Utilisateur -->
            <div class=\"card p-4 shadow rounded\">
                <div class=\"text-center mb-4\">
                    <!-- Affichage de l'avatar actuel -->
                    ";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24), "avatar", [], "any", false, false, false, 24))) {
            // line 25
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25), "avatar", [], "any", false, false, false, 25))), "html", null, true);
            yield "\" 
                             alt=\"Avatar actuel\" 
                             class=\"rounded-circle img-thumbnail avatar-preview\">
                    ";
        } else {
            // line 29
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/avatars/default.png"), "html", null, true);
            yield "\" 
                             alt=\"Avatar par défaut\" 
                             class=\"rounded-circle img-thumbnail avatar-preview\">
                    ";
        }
        // line 33
        yield "                </div>

                ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "
                    <div class=\"form-group mb-3\">
                        <label for=\"prenom\" class=\"form-label\">Prénom</label>
                        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prenom", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            yield "                            <div class=\"text-danger\">
                                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 42
                yield "                                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 42), "html", null, true);
                yield "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                            </div>
                        ";
        }
        // line 46
        yield "                    </div>

                    <div class=\"form-group mb-3\">
                        <label for=\"nom\" class=\"form-label\">Nom</label>
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51)) > 0)) {
            // line 52
            yield "                            <div class=\"text-danger\">
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 54
                yield "                                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 54), "html", null, true);
                yield "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                            </div>
                        ";
        }
        // line 58
        yield "                    </div>

                    <div class=\"form-group mb-3\">
                        <label for=\"email\" class=\"form-label\">Email</label>
                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 63
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63)) > 0)) {
            // line 64
            yield "                            <div class=\"text-danger\">
                                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 66
                yield "                                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 66), "html", null, true);
                yield "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "                            </div>
                        ";
        }
        // line 70
        yield "                    </div>

                    <div class=\"form-group mb-3\">
                        <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "telephone", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "telephone", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "errors", [], "any", false, false, false, 75)) > 0)) {
            // line 76
            yield "                            <div class=\"text-danger\">
                                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "telephone", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 78
                yield "                                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 78), "html", null, true);
                yield "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "                            </div>
                        ";
        }
        // line 82
        yield "                    </div>

                    <!-- Avatar Upload Section -->
                    <div class=\"form-group mb-4\">
                        <label for=\"avatar\" class=\"form-label\">Changer l'Avatar</label>
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "avatar", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
                        ";
        // line 88
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "avatar", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88)) > 0)) {
            // line 89
            yield "                            <div class=\"text-danger\">
                                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "avatar", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "errors", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 91
                yield "                                    <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 91), "html", null, true);
                yield "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                            </div>
                        ";
        }
        // line 95
        yield "                    </div>

                    <!-- Bouton de Sauvegarde -->
                    <div class=\"text-center\">
                        <button class=\"btn btn-success btn-lg w-75 mt-4\">Enregistrer les Modifications</button>
                    </div>
                ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 108
        yield "    <style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border: none;
        }

        .avatar-preview {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 3px solid #ddd;
            padding: 5px;
            background: #fff;
        }

        .form-label {
            font-weight: 600;
            color: #555;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px;
            font-size: 1rem;
            transition: border-color 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        .btn {
            padding: 12px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
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
        return "admin/profile/edit.html.twig";
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
        return array (  358 => 108,  345 => 107,  329 => 101,  321 => 95,  317 => 93,  308 => 91,  304 => 90,  301 => 89,  299 => 88,  295 => 87,  288 => 82,  284 => 80,  275 => 78,  271 => 77,  268 => 76,  266 => 75,  262 => 74,  256 => 70,  252 => 68,  243 => 66,  239 => 65,  236 => 64,  234 => 63,  230 => 62,  224 => 58,  220 => 56,  211 => 54,  207 => 53,  204 => 52,  202 => 51,  198 => 50,  192 => 46,  188 => 44,  179 => 42,  175 => 41,  172 => 40,  170 => 39,  166 => 38,  160 => 35,  156 => 33,  148 => 29,  140 => 25,  138 => 24,  131 => 19,  127 => 17,  118 => 15,  114 => 14,  110 => 12,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Modifier l'Utilisateur{% endblock %}

{% block body %}
    <div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"col-md-8\">
            <h1 class=\"text-center mb-4\">Modifier l'Utilisateur</h1>

            <!-- Affichage des erreurs globales -->
            {% if form.vars.errors|length > 0 %}
                <div class=\"alert alert-danger\">
                    <strong>Erreurs :</strong><br>
                    {% for error in form.vars.errors %}
                        <p>{{ error.message }}</p>
                    {% endfor %}
                </div>
            {% endif %}

            <!-- Formulaire de Modification de l'Utilisateur -->
            <div class=\"card p-4 shadow rounded\">
                <div class=\"text-center mb-4\">
                    <!-- Affichage de l'avatar actuel -->
                    {% if form.vars.value.avatar is not empty %}
                        <img src=\"{{ asset('uploads/avatars/' ~ form.vars.value.avatar) }}\" 
                             alt=\"Avatar actuel\" 
                             class=\"rounded-circle img-thumbnail avatar-preview\">
                    {% else %}
                        <img src=\"{{ asset('uploads/avatars/default.png') }}\" 
                             alt=\"Avatar par défaut\" 
                             class=\"rounded-circle img-thumbnail avatar-preview\">
                    {% endif %}
                </div>

                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}
                    <div class=\"form-group mb-3\">
                        <label for=\"prenom\" class=\"form-label\">Prénom</label>
                        {{ form_widget(form.prenom, { 'attr': {'class': 'form-control'} }) }}
                        {% if form.prenom.vars.errors|length > 0 %}
                            <div class=\"text-danger\">
                                {% for error in form.prenom.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mb-3\">
                        <label for=\"nom\" class=\"form-label\">Nom</label>
                        {{ form_widget(form.nom, { 'attr': {'class': 'form-control'} }) }}
                        {% if form.nom.vars.errors|length > 0 %}
                            <div class=\"text-danger\">
                                {% for error in form.nom.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mb-3\">
                        <label for=\"email\" class=\"form-label\">Email</label>
                        {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
                        {% if form.email.vars.errors|length > 0 %}
                            <div class=\"text-danger\">
                                {% for error in form.email.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"form-group mb-3\">
                        <label for=\"telephone\" class=\"form-label\">Numéro de téléphone</label>
                        {{ form_widget(form.telephone, { 'attr': {'class': 'form-control'} }) }}
                        {% if form.telephone.vars.errors|length > 0 %}
                            <div class=\"text-danger\">
                                {% for error in form.telephone.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>

                    <!-- Avatar Upload Section -->
                    <div class=\"form-group mb-4\">
                        <label for=\"avatar\" class=\"form-label\">Changer l'Avatar</label>
                        {{ form_widget(form.avatar, { 'attr': {'class': 'form-control-file'} }) }}
                        {% if form.avatar.vars.errors|length > 0 %}
                            <div class=\"text-danger\">
                                {% for error in form.avatar.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>

                    <!-- Bouton de Sauvegarde -->
                    <div class=\"text-center\">
                        <button class=\"btn btn-success btn-lg w-75 mt-4\">Enregistrer les Modifications</button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border: none;
        }

        .avatar-preview {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 3px solid #ddd;
            padding: 5px;
            background: #fff;
        }

        .form-label {
            font-weight: 600;
            color: #555;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px;
            font-size: 1rem;
            transition: border-color 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        .btn {
            padding: 12px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
    </style>
{% endblock %}
", "admin/profile/edit.html.twig", "C:\\Games\\Reaptn\\templates\\admin\\profile\\edit.html.twig");
    }
}
