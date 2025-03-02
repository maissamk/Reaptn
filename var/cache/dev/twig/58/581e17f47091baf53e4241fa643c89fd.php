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
            <h1>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details D'Offre"), "html", null, true);
        yield "</h1>

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        yield "</th>
                        <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID A"), "html", null, true);
        yield "</th>
                        <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 18, $this->source); })()), "ida", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID E"), "html", null, true);
        yield "</th>
                        <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 22, $this->source); })()), "ide", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
                        <td>";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 26, $this->source); })()), "statut", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inactive"), "html", null, true)));
        yield "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        yield "</th>
                        <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "descr", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        yield "</th>
                        <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 34, $this->source); })()), "titre", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Competence"), "html", null, true);
        yield "</th>
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
                    <i class=\"fa fa-file-pdf\"></i> ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export to PDF"), "html", null, true);
        yield "
                </a>
            </div>
            
            <div class=\"d-flex justify-content-center mt-4\">
                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        yield "\" class=\"btn btn-primary me-3\">
                    <i class=\"fa fa-arrow-left\"></i> ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Retour"), "html", null, true);
        yield "
                </a>
            </div>

            <!-- Search Form for Employees -->
            <h3>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search Employees"), "html", null, true);
        yield "</h3>
            <form method=\"GET\" action=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\">
                <div class=\"form-group mb-3\">
                    <input type=\"text\" name=\"search\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search by user or competence"), "html", null, true);
        yield "\" class=\"form-control\" />
                </div>

                <div class=\"form-group mb-3\">
                    <select name=\"dispo\" class=\"form-control\">
                        <option value=\"\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter by Availability"), "html", null, true);
        yield "</option>
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

                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "</button>
                <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset Filters"), "html", null, true);
        yield "</a>
            </form>

            <hr>

            <!-- Employees List -->
            <h3>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employés inscrits"), "html", null, true);
        yield ":</h3>
            <ul class=\"list-group\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employes"]) || array_key_exists("employes", $context) ? $context["employes"] : (function () { throw new RuntimeError('Variable "employes" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 82
            yield "                    <li class=\"list-group-item ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "conf", [], "any", false, false, false, 82) == 1)) {
                yield "border border-success";
            }
            yield " p-3 mb-2\">
                        <strong>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User ID"), "html", null, true);
            yield ":</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "userIdentifier", [], "any", false, false, false, 83), "html", null, true);
            yield " - <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Competence"), "html", null, true);
            yield ":</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "comp", [], "any", false, false, false, 83), "html", null, true);
            yield " 
                        <br>
                        <strong>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disponibilité"), "html", null, true);
            yield ":</strong>
                        <span>
                            ";
            // line 87
            $context["daysOfWeek"] = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
            // line 88
            yield "                            ";
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
                yield "                                <span style=\"color: ";
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
                yield "                            ";
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
            yield "                        </span>
                        ";
            // line 95
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "suggested", [], "any", false, false, false, 95))) {
                // line 96
                yield "    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "suggested", [], "any", false, false, false, 96) == 1)) {
                    // line 97
                    yield "        <span class=\"badge bg-info\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suggested"), "html", null, true);
                    yield "</span>
    ";
                } else {
                    // line 99
                    yield "        <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Suggested"), "html", null, true);
                    yield "</span>
    ";
                }
            } else {
                // line 102
                yield "    <span class=\"badge bg-warning\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status Pending"), "html", null, true);
                yield "</span>
";
            }
            // line 104
            yield "                        
                        <!-- Confirmation Status -->
                        ";
            // line 106
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "conf", [], "any", false, false, false, 106) == 1)) {
                // line 107
                yield "                            <span class=\"badge bg-success\">✔ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirmed"), "html", null, true);
                yield "</span>
                        ";
            } else {
                // line 109
                yield "                            <!-- Confirm Button -->
                            <form action=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn btn-success\">✔ ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm"), "html", null, true);
                yield "</button>
                            </form>

                            <!-- Reject Button -->
                            <form action=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn btn-danger\">✖ ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reject"), "html", null, true);
                yield "</button>
                            </form>
                        ";
            }
            // line 119
            yield "                        
                        <br>
                        <strong>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date d'inscription"), "html", null, true);
            yield ":</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["employe"], "dateJoin", [], "any", false, false, false, 121), "Y-m-d H:i"), "html", null, true);
            yield " <!-- ✅ Display join date -->
                    </li>
                ";
            $context['_iterated'] = true;
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "                    <li class=\"list-group-item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun Employés Inscrits."), "html", null, true);
            yield "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "            </ul>

            <hr>

            <!-- Subscription Form -->
";
        // line 131
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT")) {
            // line 132
            yield "    <div class=\"subscription-container\">
        ";
            // line 133
            if ((isset($context["existingEmploye"]) || array_key_exists("existingEmploye", $context) ? $context["existingEmploye"] : (function () { throw new RuntimeError('Variable "existingEmploye" does not exist.', 133, $this->source); })())) {
                // line 134
                yield "            <div class=\"alert alert-info\">
                <p>";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are already subscribed to this offer."), "html", null, true);
                yield "</p>
            </div>
            <form action=\"";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137)]), "html", null, true);
                yield "\" method=\"post\">
                <button type=\"submit\" class=\"btn btn-danger mt-3\">";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Subscription"), "html", null, true);
                yield "</button>
            </form>
        ";
            } else {
                // line 141
                yield "            ";
                if ( !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()))) {
                    // line 142
                    yield "                <div class=\"subscription-form\">
                    <h3>";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subscribe to this offer"), "html", null, true);
                    yield "</h3>
                    ";
                    // line 144
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_start');
                    yield "
                        <div class=\"form-group\">
                            ";
                    // line 146
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "comp", [], "any", false, false, false, 146), 'label');
                    yield "
                            ";
                    // line 147
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "comp", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-control"]]);
                    yield "
                        </div>
                        <div class=\"form-group\">
                            ";
                    // line 150
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "dispo", [], "any", false, false, false, 150), 'label');
                    yield "
                            ";
                    // line 151
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "dispo", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => "form-control"]]);
                    yield "
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success mt-3\">";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subscribe"), "html", null, true);
                    yield "</button>
                        </div>
                    ";
                    // line 156
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_end');
                    yield "
                </div>
            ";
                }
                // line 159
                yield "        ";
            }
            // line 160
            yield "    </div>
";
        }
        // line 162
        yield "
            <hr>

            <!-- Delete Offer Form -->
            ";
        // line 166
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGRICULTEUR")) {
            // line 167
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "offre/_delete_form.html.twig");
            yield "
            ";
        }
        // line 169
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
        return array (  543 => 169,  537 => 167,  535 => 166,  529 => 162,  525 => 160,  522 => 159,  516 => 156,  511 => 154,  505 => 151,  501 => 150,  495 => 147,  491 => 146,  486 => 144,  482 => 143,  479 => 142,  476 => 141,  470 => 138,  466 => 137,  461 => 135,  458 => 134,  456 => 133,  453 => 132,  451 => 131,  444 => 126,  435 => 124,  433 => 123,  424 => 121,  420 => 119,  414 => 116,  410 => 115,  403 => 111,  399 => 110,  396 => 109,  390 => 107,  388 => 106,  384 => 104,  378 => 102,  371 => 99,  365 => 97,  362 => 96,  360 => 95,  357 => 94,  343 => 93,  339 => 92,  334 => 90,  325 => 89,  307 => 88,  305 => 87,  300 => 85,  289 => 83,  282 => 82,  277 => 81,  272 => 79,  261 => 73,  257 => 72,  252 => 69,  237 => 67,  233 => 66,  229 => 65,  219 => 60,  214 => 58,  210 => 57,  202 => 52,  198 => 51,  190 => 46,  186 => 45,  176 => 38,  172 => 37,  166 => 34,  162 => 33,  156 => 30,  152 => 29,  146 => 26,  142 => 25,  136 => 22,  132 => 21,  126 => 18,  122 => 17,  116 => 14,  112 => 13,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre{% endblock %}

{% block body %}
    <div class=\"pt-5\">
        <div class=\"container mt-5 pt-5\">
            <h1>{{ 'Details D\\'Offre'|trans }}</h1>

            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>{{ 'ID'|trans }}</th>
                        <td>{{ offre.id }}</td>
                    </tr>
                    <tr>
                        <th>{{ 'ID A'|trans }}</th>
                        <td>{{ offre.ida }}</td>
                    </tr>
                    <tr>
                        <th>{{ 'ID E'|trans }}</th>
                        <td>{{ offre.ide }}</td>
                    </tr>
                    <tr>
                        <th>{{ 'Status'|trans }}</th>
                        <td>{{ offre.statut ? 'Active'|trans : 'Inactive'|trans }}</td>
                    </tr>
                    <tr>
                        <th>{{ 'Description'|trans }}</th>
                        <td>{{ offre.descr }}</td>
                    </tr>
                    <tr>
                        <th>{{ 'Title'|trans }}</th>
                        <td>{{ offre.titre }}</td>
                    </tr>
                    <tr>
                        <th>{{ 'Competence'|trans }}</th>
                        <td>{{ offre.comp }}</td>
                    </tr>
                </tbody>
            </table>

             <!-- Export to PDF Button -->
            <div class=\"d-flex justify-content-center mt-4\">
                <a href=\"{{ path('app_offre_export_pdf', { id: offre.id }) }}\" class=\"btn btn-success\">
                    <i class=\"fa fa-file-pdf\"></i> {{ 'Export to PDF'|trans }}
                </a>
            </div>
            
            <div class=\"d-flex justify-content-center mt-4\">
                <a href=\"{{ path('app_offre_index') }}\" class=\"btn btn-primary me-3\">
                    <i class=\"fa fa-arrow-left\"></i> {{ 'Retour'|trans }}
                </a>
            </div>

            <!-- Search Form for Employees -->
            <h3>{{ 'Search Employees'|trans }}</h3>
            <form method=\"GET\" action=\"{{ path('app_offre_show', { id: offre.id }) }}\">
                <div class=\"form-group mb-3\">
                    <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ 'Search by user or competence'|trans }}\" class=\"form-control\" />
                </div>

                <div class=\"form-group mb-3\">
                    <select name=\"dispo\" class=\"form-control\">
                        <option value=\"\">{{ 'Filter by Availability'|trans }}</option>
                        {% for day in ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] %}
                            <option value=\"{{ day }}\" {% if dispoFilter == day %}selected{% endif %}>{{ day }}</option>
                        {% endfor %}
                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">{{ 'Search'|trans }}</button>
                <a href=\"{{ path('app_offre_show', { id: offre.id }) }}\" class=\"btn btn-secondary\">{{ 'Reset Filters'|trans }}</a>
            </form>

            <hr>

            <!-- Employees List -->
            <h3>{{ 'Employés inscrits'|trans }}:</h3>
            <ul class=\"list-group\">
                {% for employe in employes %}
                    <li class=\"list-group-item {% if employe.conf == 1 %}border border-success{% endif %} p-3 mb-2\">
                        <strong>{{ 'User ID'|trans }}:</strong> {{ employe.userIdentifier }} - <strong>{{ 'Competence'|trans }}:</strong> {{ employe.comp }} 
                        <br>
                        <strong>{{ 'Disponibilité'|trans }}:</strong>
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
        <span class=\"badge bg-info\">{{ 'Suggested'|trans }}</span>
    {% else %}
        <span class=\"badge bg-secondary\">{{ 'Not Suggested'|trans }}</span>
    {% endif %}
{% else %}
    <span class=\"badge bg-warning\">{{ 'Status Pending'|trans }}</span>
{% endif %}
                        
                        <!-- Confirmation Status -->
                        {% if employe.conf == 1 %}
                            <span class=\"badge bg-success\">✔ {{ 'Confirmed'|trans }}</span>
                        {% else %}
                            <!-- Confirm Button -->
                            <form action=\"{{ path('employe_confirm', {'id': employe.id}) }}\" method=\"post\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn btn-success\">✔ {{ 'Confirm'|trans }}</button>
                            </form>

                            <!-- Reject Button -->
                            <form action=\"{{ path('employe_reject', {'id': employe.id}) }}\" method=\"post\" style=\"display:inline;\">
                                <button type=\"submit\" class=\"btn btn-danger\">✖ {{ 'Reject'|trans }}</button>
                            </form>
                        {% endif %}
                        
                        <br>
                        <strong>{{ 'Date d\\'inscription'|trans }}:</strong> {{ employe.dateJoin|date('Y-m-d H:i') }} <!-- ✅ Display join date -->
                    </li>
                {% else %}
                    <li class=\"list-group-item\">{{ 'Aucun Employés Inscrits.'|trans }}</li>
                {% endfor %}
            </ul>

            <hr>

            <!-- Subscription Form -->
{% if is_granted('ROLE_CLIENT') %}
    <div class=\"subscription-container\">
        {% if existingEmploye %}
            <div class=\"alert alert-info\">
                <p>{{ 'You are already subscribed to this offer.'|trans }}</p>
            </div>
            <form action=\"{{ path('app_employe_delete', { id: offre.id }) }}\" method=\"post\">
                <button type=\"submit\" class=\"btn btn-danger mt-3\">{{ 'Delete Subscription'|trans }}</button>
            </form>
        {% else %}
            {% if form is not null %}
                <div class=\"subscription-form\">
                    <h3>{{ 'Subscribe to this offer'|trans }}</h3>
                    {{ form_start(form) }}
                        <div class=\"form-group\">
                            {{ form_label(form.comp) }}
                            {{ form_widget(form.comp, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.dispo) }}
                            {{ form_widget(form.dispo, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success mt-3\">{{ 'Subscribe'|trans }}</button>
                        </div>
                    {{ form_end(form) }}
                </div>
            {% endif %}
        {% endif %}
    </div>
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
