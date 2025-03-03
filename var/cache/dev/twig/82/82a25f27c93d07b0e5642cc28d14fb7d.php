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

/* security/login.html.twig */
class __TwigTemplate_460e56bfea0e816cda903784489ba742 extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'footer' => [$this, 'block_footer'],
            'copyright' => [$this, 'block_copyright'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        yield "    <div style=\"display:none;\">
        <!-- Navbar content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 12
        yield "    <div style=\"display:none;\">
        <!-- Footer content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_copyright(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "copyright"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "copyright"));

        // line 18
        yield "    <div style=\"display:block;\">
        <!-- Copyright content -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "    <!-- Background Image -->
    <div class=\"background-container\" style=\"
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/backgroundlog.jpg"), "html", null, true);
        yield "');
        background-size: cover;
        background-position: center;
        filter: brightness(0.8); /* Darken the background slightly */
        z-index: -1;
    \"></div>

    <!-- Login Container -->
    <div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"card p-4 d-flex flex-row align-items-center shadow-lg\" style=\"
            background-color: rgba(241, 241, 241, 0.8); /* Semi-transparent grey background */
            max-width: 800px;
            width: 100%;
            border-radius: 15px;
            backdrop-filter: blur(5px); /* Add a blur effect for a frosted glass look */
        \">
            <!-- Logo Section -->
            <div class=\"col-md-5 d-flex justify-content-center align-items-center\">
                <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/logoapp.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"img-fluid\" style=\"max-width: 100%; height: auto; border-radius: 10px;\">
            </div>

            <!-- Vertical Divider -->
            <div style=\"height: 300px; width: 4px; background-color: #28a745; margin: 0 30px; border-radius: 10px;\"></div>

            <!-- Login Form Section -->
            <div class=\"col-md-6 p-3\">
                <h1 class=\"text-center mb-4\" style=\"color: #333; font-weight: bold;\">Se Connecter</h1>

                <!-- Login Form -->
                <form method=\"post\" action=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" novalidate>
                    <!-- Email Input -->
                    <div class=\"mb-3\">
                        <label for=\"inputEmail\" class=\"form-label\" style=\"color: #555;\">
                            <i class=\"fas fa-envelope\"></i> Address Email
                        </label>
                        <input type=\"email\" value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 66, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control ";
        yield (((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 66, $this->source); })())) ? ("is-invalid") : (""));
        yield "\" autocomplete=\"email\" required autofocus style=\"border-radius: 10px;\">
                        ";
        // line 67
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 67, $this->source); })())) {
            // line 68
            yield "                            <div class=\"invalid-feedback d-flex align-items-center mt-2\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>
                                ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 70, $this->source); })()), "messageKey", [], "any", false, false, false, 70), ["%username%" => (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 70, $this->source); })())], "security"), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 73
        yield "                    </div>

                    <!-- Password Input -->
                    <div class=\"mb-3\">
                        <label for=\"inputPassword\" class=\"form-label\" style=\"color: #555;\">
                            <i class=\"fas fa-lock\"></i> Mot De Passe
                        </label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required style=\"border-radius: 10px;\">
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class=\"mb-3 form-check d-flex justify-content-between align-items-center\">
                        <div>
                            <input type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\" class=\"form-check-input\">
                            <label class=\"form-check-label\" for=\"remember_me\" style=\"color: #555;\">Souviens-toi de moi</label>
                        </div>
                        <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" style=\"color: #28a745; text-decoration: none;\">Mot de passe oublié ?</a>
                    </div>

                    <!-- CSRF Token -->
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                    <!-- Submit Button -->
                    <button class=\"btn btn-primary w-100 mb-3\" type=\"submit\" style=\"background-color: #28a745; border: none; border-radius: 10px; padding: 10px;\">
                        <i class=\"fas fa-sign-in-alt\"></i> Se Connecter
                    </button>
                </form>

                <!-- Register Link -->
                <div class=\"mt-3 text-center\">
                    <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" style=\"color: #28a745; text-decoration: none;\">Vous n'avez pas de compte ? Inscrivez-vous</a>
                </div>

                <!-- Divider -->
                <div class=\"d-flex align-items-center my-4\">
                    <div style=\"flex: 1; height: 1px; background-color: #ccc;\"></div>
                    <span class=\"mx-2\" style=\"color: #777;\">OU</span>
                    <div style=\"flex: 1; height: 1px; background-color: #ccc;\"></div>
                </div>

                <!-- Google Login Button -->
                <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        yield "\" class=\"btn btn-outline-danger w-100\" style=\"border-radius: 10px; padding: 10px;\">
                    <img src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontoffice/img/googlelogo.png"), "html", null, true);
        yield "\" alt=\"Google Logo\" style=\"width: 20px; height: 20px; margin-right: 10px;\">
                    Se Connecter avec Google
                </a>
                <!-- Divider -->

<!-- Face Login Button -->
<div class=\"mt-3 text-center\">
    <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("face_login");
        yield "\" class=\"btn btn-face-login w-100\" style=\"
        background-color: #4a90e2;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease, transform 0.2s ease;
    \">
        <i class=\"fas fa-user-circle me-2\" style=\"font-size: 20px;\"></i>
        Login with Face
    </a>
</div>
            </div>
        </div>
       
    </div>

    <!-- Font Awesome for Icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
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
        return "security/login.html.twig";
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
        return array (  321 => 122,  311 => 115,  307 => 114,  293 => 103,  280 => 93,  273 => 89,  255 => 73,  249 => 70,  245 => 68,  243 => 67,  237 => 66,  228 => 60,  214 => 49,  193 => 31,  184 => 24,  171 => 23,  157 => 18,  144 => 17,  130 => 12,  117 => 11,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block navbar %}
    <div style=\"display:none;\">
        <!-- Navbar content -->
    </div>
{% endblock %}

{% block footer %}
    <div style=\"display:none;\">
        <!-- Footer content -->
    </div>
{% endblock %}

{% block copyright %}
    <div style=\"display:block;\">
        <!-- Copyright content -->
    </div>
{% endblock %}

{% block body %}
    <!-- Background Image -->
    <div class=\"background-container\" style=\"
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('frontoffice/img/backgroundlog.jpg') }}');
        background-size: cover;
        background-position: center;
        filter: brightness(0.8); /* Darken the background slightly */
        z-index: -1;
    \"></div>

    <!-- Login Container -->
    <div class=\"container d-flex justify-content-center align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"card p-4 d-flex flex-row align-items-center shadow-lg\" style=\"
            background-color: rgba(241, 241, 241, 0.8); /* Semi-transparent grey background */
            max-width: 800px;
            width: 100%;
            border-radius: 15px;
            backdrop-filter: blur(5px); /* Add a blur effect for a frosted glass look */
        \">
            <!-- Logo Section -->
            <div class=\"col-md-5 d-flex justify-content-center align-items-center\">
                <img src=\"{{ asset('frontoffice/img/logoapp.png') }}\" alt=\"Logo\" class=\"img-fluid\" style=\"max-width: 100%; height: auto; border-radius: 10px;\">
            </div>

            <!-- Vertical Divider -->
            <div style=\"height: 300px; width: 4px; background-color: #28a745; margin: 0 30px; border-radius: 10px;\"></div>

            <!-- Login Form Section -->
            <div class=\"col-md-6 p-3\">
                <h1 class=\"text-center mb-4\" style=\"color: #333; font-weight: bold;\">Se Connecter</h1>

                <!-- Login Form -->
                <form method=\"post\" action=\"{{ path('app_login') }}\" novalidate>
                    <!-- Email Input -->
                    <div class=\"mb-3\">
                        <label for=\"inputEmail\" class=\"form-label\" style=\"color: #555;\">
                            <i class=\"fas fa-envelope\"></i> Address Email
                        </label>
                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control {{ error ? 'is-invalid' : '' }}\" autocomplete=\"email\" required autofocus style=\"border-radius: 10px;\">
                        {% if error %}
                            <div class=\"invalid-feedback d-flex align-items-center mt-2\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i>
                                {{ error.messageKey|trans({'%username%': last_username}, 'security') }}
                            </div>
                        {% endif %}
                    </div>

                    <!-- Password Input -->
                    <div class=\"mb-3\">
                        <label for=\"inputPassword\" class=\"form-label\" style=\"color: #555;\">
                            <i class=\"fas fa-lock\"></i> Mot De Passe
                        </label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required style=\"border-radius: 10px;\">
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class=\"mb-3 form-check d-flex justify-content-between align-items-center\">
                        <div>
                            <input type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\" class=\"form-check-input\">
                            <label class=\"form-check-label\" for=\"remember_me\" style=\"color: #555;\">Souviens-toi de moi</label>
                        </div>
                        <a href=\"{{ path('app_forgot_password_request') }}\" style=\"color: #28a745; text-decoration: none;\">Mot de passe oublié ?</a>
                    </div>

                    <!-- CSRF Token -->
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                    <!-- Submit Button -->
                    <button class=\"btn btn-primary w-100 mb-3\" type=\"submit\" style=\"background-color: #28a745; border: none; border-radius: 10px; padding: 10px;\">
                        <i class=\"fas fa-sign-in-alt\"></i> Se Connecter
                    </button>
                </form>

                <!-- Register Link -->
                <div class=\"mt-3 text-center\">
                    <a href=\"{{ path('app_register') }}\" style=\"color: #28a745; text-decoration: none;\">Vous n'avez pas de compte ? Inscrivez-vous</a>
                </div>

                <!-- Divider -->
                <div class=\"d-flex align-items-center my-4\">
                    <div style=\"flex: 1; height: 1px; background-color: #ccc;\"></div>
                    <span class=\"mx-2\" style=\"color: #777;\">OU</span>
                    <div style=\"flex: 1; height: 1px; background-color: #ccc;\"></div>
                </div>

                <!-- Google Login Button -->
                <a href=\"{{ path('connect_google') }}\" class=\"btn btn-outline-danger w-100\" style=\"border-radius: 10px; padding: 10px;\">
                    <img src=\"{{ asset('frontoffice/img/googlelogo.png') }}\" alt=\"Google Logo\" style=\"width: 20px; height: 20px; margin-right: 10px;\">
                    Se Connecter avec Google
                </a>
                <!-- Divider -->

<!-- Face Login Button -->
<div class=\"mt-3 text-center\">
    <a href=\"{{ path('face_login') }}\" class=\"btn btn-face-login w-100\" style=\"
        background-color: #4a90e2;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease, transform 0.2s ease;
    \">
        <i class=\"fas fa-user-circle me-2\" style=\"font-size: 20px;\"></i>
        Login with Face
    </a>
</div>
            </div>
        </div>
       
    </div>

    <!-- Font Awesome for Icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
{% endblock %}", "security/login.html.twig", "C:\\Games\\Reaptn\\templates\\security\\login.html.twig");
    }
}
