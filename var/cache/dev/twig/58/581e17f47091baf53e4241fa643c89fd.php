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

/* offre/show.html.twig */
class __TwigTemplate_ad9d60e23b744b47a93b46f8cbe85065 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/show.html.twig", 1);
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

        yield "Offre";
        
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
        yield "    <div class=\"pt-5\">
        <div class=\"container mt-5 pt-5\">
            <h1>Details D'Offre </h1>

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>ID A</th>
                        <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 18, $this->source); })()), "ida", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>ID E</th>
                        <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 22, $this->source); })()), "ide", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 26, $this->source); })()), "statut", [], "any", false, false, false, 26)) ? ("Active") : ("Inactive"));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "descr", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 34, $this->source); })()), "titre", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Competence</th>
                        <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 38, $this->source); })()), "comp", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
                    </tr>
                </tbody>
            </table>

             <!-- Export to PDF Button -->
            <div class=\"d-flex justify-content-center mt-4\">
                <a href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_export_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\" class=\"btn btn-success\">
                    <i class=\"fa fa-file-pdf\"></i> Export to PDF
                </a>
            </div>
            
            <div class=\"d-flex justify-content-center mt-4\">
                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        yield "\" class=\"btn btn-primary me-3\">
                    <i class=\"fa fa-arrow-left\"></i> Retour
                </a>
            </div>

            <!-- Search Form for Employees -->
            <h3>Search Employees</h3>
            <form method=\"GET\" action=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\">
                <div class=\"form-group mb-3\">
                    <input type=\"text\" name=\"search\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search by user or competence\" class=\"form-control\" />
                </div>

                <div class=\"form-group mb-3\">
                    <select name=\"dispo\" class=\"form-control\">
                        <option value=\"\">Filter by Availability</option>
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]);
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 67
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "\" ";
            if (((isset($context["dispoFilter"]) || array_key_exists("dispoFilter", $context) ? $context["dispoFilter"] : (function () { throw new RuntimeError('Variable "dispoFilter" does not exist.', 67, $this->source); })()) == $context["day"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Reset Filters</a>
            </form>

            <hr>

            <!-- Employees List -->
<h3>Employés inscrits:</h3>
<ul class=\"list-group\">
    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 82
            yield "        <li class=\"list-group-item ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "conf", [], "any", false, false, false, 82) == 1)) {
                yield "border border-success";
            }
            yield " p-3 mb-2\">
            <strong>User ID:</strong> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "userIdentifier", [], "any", false, false, false, 83), "html", null, true);
            yield " - <strong>Competence:</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "comp", [], "any", false, false, false, 83), "html", null, true);
            yield " 
            <br>
            <strong>Disponibilité:</strong>
            <span>
                ";
            // line 87
            $context["daysOfWeek"] = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
            // line 88
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["daysOfWeek"]) || array_key_exists("daysOfWeek", $context) ? $context["daysOfWeek"] : (function () { throw new RuntimeError('Variable "daysOfWeek" does not exist.', 88, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 89
                yield "                    <span style=\"color: ";
                if (CoreExtension::inFilter($context["day"], CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "dispo", [], "any", false, false, false, 89))) {
                    yield "green";
                } else {
                    yield "red";
                }
                yield ";\">
                        ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
                yield "
                    </span>
                    ";
                // line 92
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 92)) {
                    yield ", ";
                }
                // line 93
                yield "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "            </span>
            ";
            // line 95
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "suggested", [], "any", false, false, false, 95))) {
                // line 96
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "suggested", [], "any", false, false, false, 96) == 1)) {
                    // line 97
                    yield "                <span class=\"badge bg-info\">Suggested</span>
            ";
                } else {
                    // line 99
                    yield "                <span class=\"badge bg-secondary\">Not Suggested</span>
            ";
                }
                // line 101
                yield "            ";
            } else {
                // line 102
                yield "                <span class=\"badge bg-warning\">Status Pending</span>
            ";
            }
            // line 104
            yield "            
            <!-- Confirmation Status -->
            ";
            // line 106
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "conf", [], "any", false, false, false, 106) == 1)) {
                // line 107
                yield "                <span class=\"badge bg-success\">✔ Confirmed</span>
            ";
            } else {
                // line 109
                yield "                <!-- Confirm Button -->
                <form action=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline;\">
                    <button type=\"submit\" class=\"btn btn-success\">✔ Confirm</button>
                </form>

                <!-- Reject Button -->
                <form action=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline;\">
                    <button type=\"submit\" class=\"btn btn-danger\">✖ Reject</button>
                </form>
            ";
            }
            // line 119
            yield "            
            <br>
            <strong>Date d'inscription:</strong> ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "dateJoin", [], "any", false, false, false, 121), "Y-m-d H:i"), "html", null, true);
            yield " <!-- ✅ Display join date -->
        </li>
    ";
            $context['_iterated'] = true;
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "        <li class=\"list-group-item\">Aucun Employés Inscrits.</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "</ul>

            <hr>

            <!-- Subscription Form -->
            ";
        // line 131
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
            // line 132
            yield "            ";
            if ((isset($context["existingEmploye"]) || array_key_exists("existingEmploye", $context) ? $context["existingEmploye"] : (function () { throw new RuntimeError('Variable "existingEmploye" does not exist.', 132, $this->source); })())) {
                // line 133
                yield "                <p>You are already subscribed to this offer.</p>
                <form action=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)]), "html", null, true);
                yield "\" method=\"post\">
                    <button type=\"submit\" class=\"btn btn-danger\">Delete Subscription</button>
                </form>
            ";
            } else {
                // line 138
                yield "                ";
                if ( !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()))) {
                    // line 139
                    yield "                    <h3>Subscribe to this offer</h3>
                    ";
                    // line 140
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'form_start');
                    yield "
                        ";
                    // line 141
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "comp", [], "any", false, false, false, 141), 'row');
                    yield "
                        ";
                    // line 142
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "dispo", [], "any", false, false, false, 142), 'row');
                    yield "
                    ";
                    // line 143
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_end');
                    yield "
                ";
                }
                // line 145
                yield "            ";
            }
            // line 146
            yield "            ";
        }
        // line 147
        yield "
            <hr>

            <!-- Delete Offer Form -->
            ";
        // line 151
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 152
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "offre/_delete_form.html.twig");
            yield "
            ";
        }
        // line 154
        yield "            
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
        return "offre/show.html.twig";
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
        return array (  440 => 154,  434 => 152,  432 => 151,  426 => 147,  423 => 146,  420 => 145,  415 => 143,  411 => 142,  407 => 141,  403 => 140,  400 => 139,  397 => 138,  390 => 134,  387 => 133,  384 => 132,  382 => 131,  375 => 126,  368 => 124,  366 => 123,  359 => 121,  355 => 119,  348 => 115,  340 => 110,  337 => 109,  333 => 107,  331 => 106,  327 => 104,  323 => 102,  320 => 101,  316 => 99,  312 => 97,  309 => 96,  307 => 95,  304 => 94,  290 => 93,  286 => 92,  281 => 90,  272 => 89,  254 => 88,  252 => 87,  243 => 83,  236 => 82,  231 => 81,  220 => 73,  214 => 69,  199 => 67,  195 => 66,  186 => 60,  181 => 58,  171 => 51,  162 => 45,  152 => 38,  145 => 34,  138 => 30,  131 => 26,  124 => 22,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre{% endblock %}

{% block body %}
    <div class=\"pt-5\">
        <div class=\"container mt-5 pt-5\">
            <h1>Details D'Offre </h1>

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ offre.id }}</td>
                    </tr>
                    <tr>
                        <th>ID A</th>
                        <td>{{ offre.ida }}</td>
                    </tr>
                    <tr>
                        <th>ID E</th>
                        <td>{{ offre.ide }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ offre.statut ? 'Active' : 'Inactive' }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ offre.descr }}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{ offre.titre }}</td>
                    </tr>
                    <tr>
                        <th>Competence</th>
                        <td>{{ offre.comp }}</td>
                    </tr>
                </tbody>
            </table>

             <!-- Export to PDF Button -->
            <div class=\"d-flex justify-content-center mt-4\">
                <a href=\"{{ path('app_offre_export_pdf', { id: offre.id }) }}\" class=\"btn btn-success\">
                    <i class=\"fa fa-file-pdf\"></i> Export to PDF
                </a>
            </div>
            
            <div class=\"d-flex justify-content-center mt-4\">
                <a href=\"{{ path('app_offre_index') }}\" class=\"btn btn-primary me-3\">
                    <i class=\"fa fa-arrow-left\"></i> Retour
                </a>
            </div>

            <!-- Search Form for Employees -->
            <h3>Search Employees</h3>
            <form method=\"GET\" action=\"{{ path('app_offre_show', { id: offre.id }) }}\">
                <div class=\"form-group mb-3\">
                    <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Search by user or competence\" class=\"form-control\" />
                </div>

                <div class=\"form-group mb-3\">
                    <select name=\"dispo\" class=\"form-control\">
                        <option value=\"\">Filter by Availability</option>
                        {% for day in ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] %}
                            <option value=\"{{ day }}\" {% if dispoFilter == day %}selected{% endif %}>{{ day }}</option>
                        {% endfor %}
                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                <a href=\"{{ path('app_offre_show', { id: offre.id }) }}\" class=\"btn btn-secondary\">Reset Filters</a>
            </form>

            <hr>

            <!-- Employees List -->
<h3>Employés inscrits:</h3>
<ul class=\"list-group\">
    {% for employe in employes %}
        <li class=\"list-group-item {% if employe.conf == 1 %}border border-success{% endif %} p-3 mb-2\">
            <strong>User ID:</strong> {{ employe.userIdentifier }} - <strong>Competence:</strong> {{ employe.comp }} 
            <br>
            <strong>Disponibilité:</strong>
            <span>
                {% set daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] %}
                {% for day in daysOfWeek %}
                    <span style=\"color: {% if day in employe.dispo %}green{% else %}red{% endif %};\">
                        {{ day }}
                    </span>
                    {% if not loop.last %}, {% endif %}
                {% endfor %}
            </span>
            {% if employe.suggested is not null %}
                {% if employe.suggested == 1 %}
                <span class=\"badge bg-info\">Suggested</span>
            {% else %}
                <span class=\"badge bg-secondary\">Not Suggested</span>
            {% endif %}
            {% else %}
                <span class=\"badge bg-warning\">Status Pending</span>
            {% endif %}
            
            <!-- Confirmation Status -->
            {% if employe.conf == 1 %}
                <span class=\"badge bg-success\">✔ Confirmed</span>
            {% else %}
                <!-- Confirm Button -->
                <form action=\"{{ path('employe_confirm', {'id': employe.id}) }}\" method=\"post\" style=\"display:inline;\">
                    <button type=\"submit\" class=\"btn btn-success\">✔ Confirm</button>
                </form>

                <!-- Reject Button -->
                <form action=\"{{ path('employe_reject', {'id': employe.id}) }}\" method=\"post\" style=\"display:inline;\">
                    <button type=\"submit\" class=\"btn btn-danger\">✖ Reject</button>
                </form>
            {% endif %}
            
            <br>
            <strong>Date d'inscription:</strong> {{ employe.dateJoin|date('Y-m-d H:i') }} <!-- ✅ Display join date -->
        </li>
    {% else %}
        <li class=\"list-group-item\">Aucun Employés Inscrits.</li>
    {% endfor %}
</ul>

            <hr>

            <!-- Subscription Form -->
            {% if is_granted('ROLE_CLIENT') %}
            {% if existingEmploye %}
                <p>You are already subscribed to this offer.</p>
                <form action=\"{{ path('app_employe_delete', { id: offre.id }) }}\" method=\"post\">
                    <button type=\"submit\" class=\"btn btn-danger\">Delete Subscription</button>
                </form>
            {% else %}
                {% if form is not null %}
                    <h3>Subscribe to this offer</h3>
                    {{ form_start(form) }}
                        {{ form_row(form.comp) }}
                        {{ form_row(form.dispo) }}
                    {{ form_end(form) }}
                {% endif %}
            {% endif %}
            {% endif %}

            <hr>

            <!-- Delete Offer Form -->
            {% if is_granted('ROLE_AGRICULTEUR') %}
                {{ include('offre/_delete_form.html.twig') }}
            {% endif %}
            
        </div>
    </div>
{% endblock %}
", "offre/show.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\templates\\offre\\show.html.twig");
    }
}
