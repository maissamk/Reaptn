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

/* base_back.html.twig */
class __TwigTemplate_ed94b3cc1a6a3e964b77d4f7770df79e extends Template
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
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t<title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 13
        yield "
</head>
<body>
<div class=\"wrapper\">
\t\t<div class=\"main-header\">
\t\t\t<div class=\"logo-header\">
\t\t\t\t<a href=\"index.html\" class=\"logo\">
\t\t\t\t\tReady Dashboard
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler sidenav-toggler ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"collapse\" aria-controls=\"sidebar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<button class=\"topbar-toggler more\"><i class=\"la la-ellipsis-v\"></i></button>
\t\t\t</div>
\t\t\t<nav class=\"navbar navbar-header navbar-expand-lg\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t
\t\t\t\t\t<form class=\"navbar-left navbar-form nav-search mr-md-3\" action=\"\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search ...\" class=\"form-control\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"la la-search search-icon\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<ul class=\"navbar-nav topbar-nav ml-md-auto align-items-center\">
\t\t\t\t\t\t<li class=\"nav-item dropdown hidden-caret\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"la la-envelope\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown hidden-caret\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"la la-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"notification\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu notif-box\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-title\">You have 4 new notification</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"notif-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-icon notif-primary\"> <i class=\"la la-user-plus\"></i> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNew user registered
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">5 minutes ago</span> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-icon notif-success\"> <i class=\"la la-comment\"></i> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\tRahmad commented on Admin
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">12 minutes ago</span> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-img\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"backoffice/img/profile2.jpg\" alt=\"Img Profile\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\tReza send messages to you
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">12 minutes ago</span> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-icon notif-danger\"> <i class=\"la la-heart\"></i> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFarrah liked Admin
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">17 minutes ago</span> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"see-all\" href=\"javascript:void(0);\"> <strong>See all notifications</strong> <i class=\"la la-angle-right\"></i> </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<div class=\"ms-auto\">
    <a href=\"/";
        // line 110
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110)) ? ("logout") : ("login"));
        yield "\" class=\"btn btn-warning text-white fw-bold px-4 py-2 rounded-pill\">";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110)) ? ("Logout") : ("Login"));
        yield "</a>
</div>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-user\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"user-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"u-img\"><img src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/img/profile.jpg"), "html", null, true);
        yield "\" alt=\"user\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"u-text\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">hello@themekita.com</p><a href=\"profile.html\" class=\"btn btn-rounded btn-danger btn-sm\">View Profile</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"ti-user\"></i> My Profile</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"></i> My Balance</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"ti-email\"></i> Inbox</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"ti-settings\"></i> Account Setting</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"fa fa-power-off\"></i> Logout</a>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- /.dropdown-user -->
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div class=\"sidebar\">
\t\t\t\t<div class=\"scrollbar-inner sidebar-wrapper\">
\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t<div class=\"photo\">
\t\t\t\t\t\t\t ";
        // line 139
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "avatar", [], "any", false, false, false, 139)) {
            // line 140
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "avatar", [], "any", false, false, false, 140))), "html", null, true);
            yield "\" class=\"rounded-circle mb-3\" width=\"150\" height=\"150\" alt=\"Avatar Utilisateur\">
                            ";
        } else {
            // line 142
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/avatars/default.png"), "html", null, true);
            yield "\" class=\"rounded-circle mb-3\" width=\"150\" height=\"150\" alt=\"Avatar par défaut\">
                            ";
        }
        // line 144
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<a class=\"\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "nom", [], "any", false, false, false, 148), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t<span class=\"user-level\">Administrator</span>
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<div class=\"collapse in\" id=\"collapseExample\" aria-expanded=\"true\" style=\"\">
\t\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#profile\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link-collapse\"><a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile");
        yield "\" class=\"btn btn-rounded btn-danger btn-sm\">Mon Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#edit\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link-collapse\"><a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_profile");
        yield "\" class=\"btn btn-rounded btn-danger btn-sm\">Modifier le Profil</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#settings\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link-collapse\">Settings</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-dashboard\"></i>
\t\t\t\t\t\t\t\t<p>Dashboard</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">5</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"components.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-table\"></i>
\t\t\t\t\t\t\t\t<p>Components</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">14</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li class=\"nav-item\">
    <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parcelle_proprietes_index");
        yield "\">

        <i class=\"la la-table\"></i>
        <p>shop_parcelles</p>
        <span class=\"badge badge-count\">14</span>
    </a>
</li>

<li class=\"nav-item\">
    <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contrat_index");
        yield "\">

        <i class=\"la la-table\"></i>
        <p>inspecter_contrats</p>
        <span class=\"badge badge-count\">14</span>
    </a>
</li>





\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"forms.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-keyboard-o\"></i>
\t\t\t\t\t\t\t\t<p>Forms</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">50</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tables");
        yield "\">
\t\t\t\t\t\t\t\t<i class=\"la la-th\"></i>
\t\t\t\t\t\t\t\t<p>Matériel Agricole de Vente</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">6</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tableslocation");
        yield "\">
\t\t\t\t\t\t\t\t<i class=\"la la-th\"></i>
\t\t\t\t\t\t\t\t<p>Matériel Agricole de Location</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">6</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"notifications.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-bell\"></i>
\t\t\t\t\t\t\t\t<p>Notifications</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"typography.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-font\"></i>
\t\t\t\t\t\t\t\t<p>Typography</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">25</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"icons.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-fonticons\"></i>
\t\t\t\t\t\t\t\t<p>Icons</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item update-pro\">
\t\t\t\t\t\t\t<button  data-toggle=\"modal\" data-target=\"#modalUpdate\">
\t\t\t\t\t\t\t\t<i class=\"la la-hand-pointer-o\"></i>
\t\t\t\t\t\t\t\t<p>Update To Pro</p>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
";
        // line 264
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 788
        yield "</body>
";
        // line 789
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 805
        yield "</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Ready Bootstrap Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 8
        yield "\t<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/css/bootstrap.min.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/css/ready.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/css/demo.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 264
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

        // line 265
        yield "\t
\t\t\t<div class=\"main-panel\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<h4 class=\"page-title\">Dashboard</h4>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats card-warning\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Visitors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">1,294</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats card-success\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-bar-chart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Sales</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">\$ 1,345</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats card-danger\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-newspaper-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Subscribers</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">1303</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats card-primary\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-check-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Order</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">576</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
<!-- \t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center icon-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-pie-chart text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Number</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">150GB</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-bar-chart text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Revenue</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">\$ 1,345</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times-circle-o text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Errors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">23</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-heart-o text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Followers</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">+45K</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Task</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Complete</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div id=\"task-complete\" class=\"chart-circle mt-4 mb-3\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"legend\"><i class=\"la la-circle text-primary\"></i> Completed</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">World Map</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">
\t\t\t\t\t\t\t\t\t\tMap of the distribution of users around the world</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mapcontainer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"map\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Alternative content for the map</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row row-card-no-pd\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mt-1\">My Balance</p>
\t\t\t\t\t\t\t\t\t\t<h4><b>\$ 3,018</b></h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-full text-left mt-3 mb-3\"><i class=\"la la-plus\"></i> Add Balance</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"btn btn-default btn-link\" href=\"#\"><i class=\"la la-history\"></i> History</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item ml-auto\"><a class=\"btn btn-default btn-link\" href=\"#\"><i class=\"la la-refresh\"></i> Refresh</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Profit</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold\"> \$3K</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-2\" style=\"height: 7px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 78%\" aria-valuenow=\"78\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"78%\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Orders</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold\"> 576</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-2\" style=\"height: 7px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"65%\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Tasks Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold\"> 70%</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-2\" style=\"height: 7px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 70%\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"70%\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Open Rate</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold\"> 60%</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-2\" style=\"height: 7px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"60%\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mt-1\">Statistic</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center icon-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-pie-chart text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Number</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">150GB</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-heart-o text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Followers</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">+45K</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Users Statistics</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">
\t\t\t\t\t\t\t\t\t\tUsers statistics this month</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div id=\"monthlyChart\" class=\"chart chart-pie\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">2018 Sales</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">
\t\t\t\t\t\t\t\t\t\tNumber of products sold</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div id=\"salesChart\" class=\"chart\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header \">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Table</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Users Table</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-head-bg-success table-striped table-hover\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">First</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Last</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Handle</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Larry the Bird</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card card-tasks\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header \">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Tasks</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">To Do List</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-full-width\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input  select-all-checkbox\" type=\"checkbox\" data-select=\"checkbox\" data-target=\".task-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Task</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input task-select\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Planning new project structure</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Edit Task\" class=\"btn btn-link <btn-simple-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Remove\" class=\"btn btn-link btn-simple-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input task-select\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Update Fonts</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Edit Task\" class=\"btn btn-link <btn-simple-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Remove\" class=\"btn btn-link btn-simple-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input task-select\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Add new Post
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Edit Task\" class=\"btn btn-link <btn-simple-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Remove\" class=\"btn btn-link btn-simple-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input task-select\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Finalise the design proposal</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Edit Task\" class=\"btn btn-link <btn-simple-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Remove\" class=\"btn btn-link btn-simple-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer \">
\t\t\t\t\t\t\t\t\t\t<div class=\"stats\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"now-ui-icons loader_refresh spin\"></i> Updated 3 minutes ago
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<nav class=\"pull-left\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"http://www.themekita.com\">
\t\t\t\t\t\t\t\t\t\tThemeKita
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\tHelp
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://themewagon.com/license/#free-item\">
\t\t\t\t\t\t\t\t\t\tLicenses
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"copyright ml-auto\">
\t\t\t\t\t\t\t2018, made with <i class=\"la la-heart heart text-danger\"></i> by <a href=\"http://www.themekita.com\">ThemeKita</a>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"modalUpdate\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalUpdatePro\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header bg-primary\">
\t\t\t\t\t<h6 class=\"modal-title\"><i class=\"la la-frown-o\"></i> Under Development</h6>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body text-center\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>We'll let you know when it's done</b></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 789
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 790
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/core/jquery.3.2.1.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 791
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 793
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/core/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 794
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/chartist/chartist.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/bootstrap-notify/bootstrap-notify.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 797
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 799
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/jquery-mapael/maps/world_countries.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 800
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/chart-circle/circles.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/ready.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 803
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/demo.js"), "html", null, true);
        yield "\"></script>
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
        return "base_back.html.twig";
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
        return array (  1047 => 803,  1043 => 802,  1039 => 801,  1035 => 800,  1031 => 799,  1027 => 798,  1023 => 797,  1019 => 796,  1015 => 795,  1011 => 794,  1007 => 793,  1003 => 792,  999 => 791,  994 => 790,  981 => 789,  448 => 265,  435 => 264,  422 => 11,  418 => 10,  412 => 8,  399 => 7,  376 => 5,  365 => 805,  363 => 789,  360 => 788,  358 => 264,  319 => 228,  309 => 221,  286 => 201,  274 => 192,  243 => 164,  235 => 159,  221 => 148,  215 => 144,  209 => 142,  203 => 140,  201 => 139,  174 => 115,  164 => 110,  65 => 13,  63 => 7,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t<title>{% block title %}Ready Bootstrap Dashboard{% endblock %}</title>
\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    {% block css %}
\t<link rel=\"stylesheet\" href=\"{{ asset('backoffice/css/bootstrap.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\">
\t<link rel=\"stylesheet\" href=\"{{ asset('backoffice/css/ready.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('backoffice/css/demo.css') }}\">
{% endblock %}

</head>
<body>
<div class=\"wrapper\">
\t\t<div class=\"main-header\">
\t\t\t<div class=\"logo-header\">
\t\t\t\t<a href=\"index.html\" class=\"logo\">
\t\t\t\t\tReady Dashboard
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler sidenav-toggler ml-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"collapse\" aria-controls=\"sidebar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<button class=\"topbar-toggler more\"><i class=\"la la-ellipsis-v\"></i></button>
\t\t\t</div>
\t\t\t<nav class=\"navbar navbar-header navbar-expand-lg\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t
\t\t\t\t\t<form class=\"navbar-left navbar-form nav-search mr-md-3\" action=\"\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search ...\" class=\"form-control\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"la la-search search-icon\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<ul class=\"navbar-nav topbar-nav ml-md-auto align-items-center\">
\t\t\t\t\t\t<li class=\"nav-item dropdown hidden-caret\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"la la-envelope\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown hidden-caret\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"la la-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"notification\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu notif-box\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-title\">You have 4 new notification</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"notif-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-icon notif-primary\"> <i class=\"la la-user-plus\"></i> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNew user registered
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">5 minutes ago</span> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-icon notif-success\"> <i class=\"la la-comment\"></i> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\tRahmad commented on Admin
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">12 minutes ago</span> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-img\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"backoffice/img/profile2.jpg\" alt=\"Img Profile\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\tReza send messages to you
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">12 minutes ago</span> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-icon notif-danger\"> <i class=\"la la-heart\"></i> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notif-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFarrah liked Admin
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">17 minutes ago</span> 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"see-all\" href=\"javascript:void(0);\"> <strong>See all notifications</strong> <i class=\"la la-angle-right\"></i> </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<div class=\"ms-auto\">
    <a href=\"/{{app.user ? 'logout' : 'login' }}\" class=\"btn btn-warning text-white fw-bold px-4 py-2 rounded-pill\">{{app.user ? 'Logout' : 'Login' }}</a>
</div>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-user\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"user-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"u-img\"><img src=\"{{asset('backoffice/img/profile.jpg')}}\" alt=\"user\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"u-text\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">hello@themekita.com</p><a href=\"profile.html\" class=\"btn btn-rounded btn-danger btn-sm\">View Profile</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"ti-user\"></i> My Profile</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"></i> My Balance</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"ti-email\"></i> Inbox</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"ti-settings\"></i> Account Setting</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"fa fa-power-off\"></i> Logout</a>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- /.dropdown-user -->
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div class=\"sidebar\">
\t\t\t\t<div class=\"scrollbar-inner sidebar-wrapper\">
\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t<div class=\"photo\">
\t\t\t\t\t\t\t {% if app.user.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" class=\"rounded-circle mb-3\" width=\"150\" height=\"150\" alt=\"Avatar Utilisateur\">
                            {% else %}
                                <img src=\"{{ asset('uploads/avatars/default.png') }}\" class=\"rounded-circle mb-3\" width=\"150\" height=\"150\" alt=\"Avatar par défaut\">
                            {% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<a class=\"\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t{{app.user.nom}}
\t\t\t\t\t\t\t\t\t<span class=\"user-level\">Administrator</span>
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<div class=\"collapse in\" id=\"collapseExample\" aria-expanded=\"true\" style=\"\">
\t\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#profile\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link-collapse\"><a href=\"{{ path('admin_profile') }}\" class=\"btn btn-rounded btn-danger btn-sm\">Mon Profile</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#edit\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link-collapse\"><a href=\"{{ path('admin_edit_profile') }}\" class=\"btn btn-rounded btn-danger btn-sm\">Modifier le Profil</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#settings\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link-collapse\">Settings</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-dashboard\"></i>
\t\t\t\t\t\t\t\t<p>Dashboard</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">5</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"components.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-table\"></i>
\t\t\t\t\t\t\t\t<p>Components</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">14</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
<li class=\"nav-item\">
    <a href=\"{{ path('admin_parcelle_proprietes_index') }}\">

        <i class=\"la la-table\"></i>
        <p>shop_parcelles</p>
        <span class=\"badge badge-count\">14</span>
    </a>
</li>

<li class=\"nav-item\">
    <a href=\"{{ path('admin_contrat_index') }}\">

        <i class=\"la la-table\"></i>
        <p>inspecter_contrats</p>
        <span class=\"badge badge-count\">14</span>
    </a>
</li>





\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"forms.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-keyboard-o\"></i>
\t\t\t\t\t\t\t\t<p>Forms</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">50</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{path('app_tables')}}\">
\t\t\t\t\t\t\t\t<i class=\"la la-th\"></i>
\t\t\t\t\t\t\t\t<p>Matériel Agricole de Vente</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">6</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{path('app_tableslocation')}}\">
\t\t\t\t\t\t\t\t<i class=\"la la-th\"></i>
\t\t\t\t\t\t\t\t<p>Matériel Agricole de Location</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-count\">6</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"notifications.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-bell\"></i>
\t\t\t\t\t\t\t\t<p>Notifications</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">3</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"typography.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-font\"></i>
\t\t\t\t\t\t\t\t<p>Typography</p>
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\">25</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"icons.html\">
\t\t\t\t\t\t\t\t<i class=\"la la-fonticons\"></i>
\t\t\t\t\t\t\t\t<p>Icons</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item update-pro\">
\t\t\t\t\t\t\t<button  data-toggle=\"modal\" data-target=\"#modalUpdate\">
\t\t\t\t\t\t\t\t<i class=\"la la-hand-pointer-o\"></i>
\t\t\t\t\t\t\t\t<p>Update To Pro</p>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
{% block body %}
\t
\t\t\t<div class=\"main-panel\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<h4 class=\"page-title\">Dashboard</h4>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats card-warning\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Visitors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">1,294</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats card-success\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-bar-chart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Sales</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">\$ 1,345</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats card-danger\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-newspaper-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Subscribers</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">1303</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats card-primary\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-check-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Order</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">576</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
<!-- \t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center icon-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-pie-chart text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Number</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">150GB</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-bar-chart text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Revenue</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">\$ 1,345</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times-circle-o text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Errors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">23</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-heart-o text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Followers</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">+45K</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Task</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Complete</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div id=\"task-complete\" class=\"chart-circle mt-4 mb-3\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"legend\"><i class=\"la la-circle text-primary\"></i> Completed</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">World Map</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">
\t\t\t\t\t\t\t\t\t\tMap of the distribution of users around the world</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mapcontainer\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"map\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Alternative content for the map</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row row-card-no-pd\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mt-1\">My Balance</p>
\t\t\t\t\t\t\t\t\t\t<h4><b>\$ 3,018</b></h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-full text-left mt-3 mb-3\"><i class=\"la la-plus\"></i> Add Balance</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"btn btn-default btn-link\" href=\"#\"><i class=\"la la-history\"></i> History</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item ml-auto\"><a class=\"btn btn-default btn-link\" href=\"#\"><i class=\"la la-refresh\"></i> Refresh</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Profit</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold\"> \$3K</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-2\" style=\"height: 7px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 78%\" aria-valuenow=\"78\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"78%\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Orders</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold\"> 576</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-2\" style=\"height: 7px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"65%\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Tasks Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold\"> 70%</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-2\" style=\"height: 7px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 70%\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"70%\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Open Rate</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fw-bold\"> 60%</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-2\" style=\"height: 7px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"60%\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mt-1\">Statistic</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center icon-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-pie-chart text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Number</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">150GB</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-heart-o text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Followers</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">+45K</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Users Statistics</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">
\t\t\t\t\t\t\t\t\t\tUsers statistics this month</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div id=\"monthlyChart\" class=\"chart chart-pie\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">2018 Sales</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">
\t\t\t\t\t\t\t\t\t\tNumber of products sold</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div id=\"salesChart\" class=\"chart\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header \">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Table</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">Users Table</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-head-bg-success table-striped table-hover\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">First</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Last</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Handle</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Larry the Bird</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"card card-tasks\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header \">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">Tasks</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">To Do List</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t\t<div class=\"table-full-width\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input  select-all-checkbox\" type=\"checkbox\" data-select=\"checkbox\" data-target=\".task-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Task</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input task-select\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Planning new project structure</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Edit Task\" class=\"btn btn-link <btn-simple-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Remove\" class=\"btn btn-link btn-simple-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input task-select\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Update Fonts</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Edit Task\" class=\"btn btn-link <btn-simple-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Remove\" class=\"btn btn-link btn-simple-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input task-select\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Add new Post
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Edit Task\" class=\"btn btn-link <btn-simple-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Remove\" class=\"btn btn-link btn-simple-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input task-select\" type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-sign\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Finalise the design proposal</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-button-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Edit Task\" class=\"btn btn-link <btn-simple-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"Remove\" class=\"btn btn-link btn-simple-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer \">
\t\t\t\t\t\t\t\t\t\t<div class=\"stats\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"now-ui-icons loader_refresh spin\"></i> Updated 3 minutes ago
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<nav class=\"pull-left\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"http://www.themekita.com\">
\t\t\t\t\t\t\t\t\t\tThemeKita
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t\t\t\tHelp
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://themewagon.com/license/#free-item\">
\t\t\t\t\t\t\t\t\t\tLicenses
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"copyright ml-auto\">
\t\t\t\t\t\t\t2018, made with <i class=\"la la-heart heart text-danger\"></i> by <a href=\"http://www.themekita.com\">ThemeKita</a>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"modalUpdate\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalUpdatePro\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header bg-primary\">
\t\t\t\t\t<h6 class=\"modal-title\"><i class=\"la la-frown-o\"></i> Under Development</h6>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body text-center\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>We'll let you know when it's done</b></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
</body>
{% block js %}
<script src=\"{{asset('backoffice/js/core/jquery.3.2.1.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/core/popper.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/core/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/chartist/chartist.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/jquery-mapael/jquery.mapael.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/jquery-mapael/maps/world_countries.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/chart-circle/circles.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/ready.min.js')}}\"></script>
<script src=\"{{asset('backoffice/js/demo.js')}}\"></script>
{% endblock %}
</html>", "base_back.html.twig", "C:\\Users\\hassa\\OneDrive\\Bureau\\PI\\Reaptn\\templates\\base_back.html.twig");
    }
}
