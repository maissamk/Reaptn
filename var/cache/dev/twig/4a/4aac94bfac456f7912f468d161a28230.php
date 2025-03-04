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

/* @LexikTranslation/Translation/_ngGrid.html.twig */
class __TwigTemplate_fce7462b6ffabddebb6ed9c7233f1527 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/_ngGrid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LexikTranslation/Translation/_ngGrid.html.twig"));

        // line 162
        yield "
<div id=\"translation-grid\" ng-app=\"translationApp\" ng-controller=\"TranslationController\">
    <div ng-if=\"profilerTokens != null\">
        <div class=\"row\" ng-controller=\"DataSourceController\" >
            <div class=\"col-md-2\">
                <label>{{ labels.dataSource }}:&nbsp;</label>
                <div class=\"btn-group\" role=\"group\">
                    <button type=\"button\" class=\"btn\" ng-class=\"defaultSourceClass\" ng-click=\"resetSource()\">
                        {{ labels.allTranslations }}
                    </button>
                    <button type=\"button\" class=\"btn\" ng-class=\"tokenSourceClass\" ng-click=\"useTokenAsSource()\">
                        {{ labels.profiler }}
                    </button>
                </div>
            </div>
            <div class=\"col-md-5\" ng-show=\"showProfiles\">
                <label>{{ labels.latestProfiles }}:&nbsp;</label>
                <select ng-model=\"selectedToken\" ng-change=\"changeToken(selectedToken)\" ng-options=\"p.token as p.token+' - '+p.url for p in profilerTokens\" class=\"form-control\"></select>
            </div>
            <div class=\"col-md-2\" ng-show=\"showProfiles\">
                <label>{{ labels.profile }}:&nbsp;</label>
                <input type=\"text\" ng-model=\"selectedToken\" ng-change=\"changeToken(selectedToken)\" class=\"form-control\" />
            </div>
        </div>

        <hr  />
    </div>

    <div class=\"row margin-row grid-action-bar\">
        <div class=\"col-md-12\">
            <a ng-click=\"hideColumnsSelector = !hideColumnsSelector\" class=\"btn btn-default btn-sm btn-manage-col\">
                <span class=\"glyphicon glyphicon-eye-close\"></span>
                {{ labels.hideCol }}
            </a>
            <a ng-show=\"!autoCacheClean\" ng-click=\"invalidateCache()\" role=\"button\" class=\"btn btn-primary btn-sm btn-invalidate-cache\">
                <span class=\"glyphicon glyphicon-refresh\"></span>
                {{ labels.invalidateCache }}
            </a>
            <div ng-show=\"sharedMsg.content != ''\" class=\"pull-right label label-{{ sharedMsg.css }}\">
                <span>
                    <i class=\"glyphicon glyphicon-{{ sharedMsg.icon }}\"></i>
                    {{ sharedMsg.content }}
                </span>
            </div>
        </div>
    </div>

    <div ng-show=\"hideColumnsSelector\" class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"list-unstyled list-inline locales-list\">
                <li class=\"locale\">
                    <label for=\"toggle-all-columns\" class=\"locale\">
                        <input type=\"checkbox\" id=\"toggle-all-columns\" ng-model=\"areAllColumnsSelected\" ng-checked=\"areAllColumnsSelected\" ng-click=\"toggleAllColumns()\"/>
                        {{ labels.toggleAllCol }}
                    </label>
                </li>
            </ul>
            <ul class=\"list-unstyled list-inline locales-list\">
                <li ng-repeat=\"column in columns track by \$index\" class=\"locale\">
                    <label for=\"toggle-{{ column.index }}\">
                        <input type=\"checkbox\" id=\"toggle-{{ column.index }}\" ng-model=\"column.visible\" ng-click=\"toggleSimilar(column)\" />
                        {{ column.title }}
                    </label>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"row margin-row\">
        <div class=\"col-md-12\">
            <table ng-table=\"tableParams\" show-filter=\"true\" template-pagination=\"pager-template\" class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th ng-repeat=\"column in columns track by \$index\"
                            ng-show=\"column.visible\"
                            ng-click=\"sortGrid(column)\"
                            class=\"text-center sortable col-{{ column.index }}\">
                            {{ column.title }}
                            &nbsp;
                            <span ng-if=\"column.sortable\" class=\"glyphicon glyphicon-chevron-down\"></span>
                        </th>
                        <th class=\"col-save\"></th>
                    </tr>
                    <tr>
                        <th ng-repeat=\"column in columns track by \$index\" ng-show=\"column.visible\">
                            <input ng-if=\"column.filter != false\" ng-model=\"params.filter()[column.index]\" type=\"text\" name=\"{{ column.index }}\" value=\"\" class=\"form-control input-sm\" />
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr editable-row ng-repeat=\"translation in \$data track by \$index\" translation=\"translation\" columns=\"columns\" edit-type=\"editType\"></tr>
                </tbody>
            </table>
            <div class=\"alert alert-info\" role=\"alert\" ng-if=\"tableParams.total() < 1\">
                {{ labels.noTranslations }}
            </div>
        </div>
    </div>

    <script type=\"text/ng-template\" id=\"pager-template\">
        <div class=\"ng-cloak ng-table-pager\">
            <ul class=\"pagination ng-table-pagination pull-right\">
                <li ng-class=\"{'disabled': !page.active}\" ng-repeat=\"page in pages track by \$index\" ng-switch=\"page.type\">
                    <a ng-switch-when=\"prev\" ng-click=\"params.changePage(page.number)\" href=\"\">&laquo;</a>
                    <a ng-switch-when=\"first\" ng-click=\"params.changePage(page.number)\" href=\"\"><span ng-bind=\"page.number\"></span></a>
                    <a ng-switch-when=\"page\" ng-click=\"params.changePage(page.number)\" href=\"\"><span ng-bind=\"page.number\"></span></a>
                    <a ng-switch-when=\"more\" ng-click=\"params.changePage(page.number)\" href=\"\">&#8230;</a>
                    <a ng-switch-when=\"last\" ng-click=\"params.changePage(page.number)\" href=\"\"><span ng-bind=\"page.number\"></span></a>
                    <a ng-switch-when=\"next\" ng-click=\"params.changePage(page.number)\" href=\"\">&raquo;</a>
                </li>
            </ul>
        </div>
    </script>

    <script type=\"text/ng-template\" id=\"editable-row-template\">
        <td ng-repeat=\"column in columns track by \$index\" ng-show=\"column.visible\" ng-dblclick=\"enableMode('edit')\">
            <span ng-show=\"!column.edit || (column.edit && mode != 'edit')\">{{ translation[column.index] }}</span>
            <div ng-switch on=\"editType\">
                <textarea ng-switch-when=\"textarea\"
                       ng-if=\"column.edit\"
                       ng-show=\"mode == 'edit'\"
                       ng-model=\"translation[column.index]\"
                       ng-keydown=\"save(\$event, 'textarea')\"
                       name=\"column.index\"
                       class=\"form-control\">
                </textarea>
                <input ng-switch-default
                       ng-if=\"column.edit\"
                       ng-show=\"mode == 'edit'\"
                       ng-model=\"translation[column.index]\"
                       ng-keydown=\"save(\$event, 'input')\"
                       type=\"text\"
                       name=\"column.index\"
                       class=\"form-control input-sm\" />
            </div>
            <div class=\"text-center\">
                <button ng-show=\"mode == 'delete' && column.delete && translation[column.index]\" type=\"button\" class=\"btn btn-link delete\" ng-click=\"delete(column)\">
                    <i class=\"glyphicon glyphicon-remove text-danger\"></i>
                </button>
            </div>
        </td>
        <td class=\"text-center\">
            <div class=\"actions\">
                <button ng-show=\"!mode\" ng-click=\"enableMode('edit')\" type=\"button\" class=\"btn btn-primary btn-sm\">
                    <span class=\"glyphicon glyphicon-pencil\"></span>
                </button>
                <button ng-show=\"!mode\" ng-click=\"enableMode('delete')\" type=\"button\" class=\"btn btn-danger btn-sm\">
                    <span class=\"glyphicon glyphicon-trash\"></span>
                </button>
                <button ng-show=\"mode == 'edit'\" ng-click=\"save(\$event, 'btn-save')\" type=\"button\" class=\"btn btn-success btn-sm\">
                    <span class=\"glyphicon glyphicon-saved\"></span>
                </button>
                <button ng-show=\"mode != null\" ng-click=\"disableMode()\" type=\"button\" class=\"btn btn-warning btn-sm\">
                    <span class=\"glyphicon glyphicon-ban-circle\"></span>
                </button>
            </div>
        </td>
    </script>
</div>
";
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
        return "@LexikTranslation/Translation/_ngGrid.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 162,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Raw block to display the AngularJS template #}
{% verbatim %}
<div id=\"translation-grid\" ng-app=\"translationApp\" ng-controller=\"TranslationController\">
    <div ng-if=\"profilerTokens != null\">
        <div class=\"row\" ng-controller=\"DataSourceController\" >
            <div class=\"col-md-2\">
                <label>{{ labels.dataSource }}:&nbsp;</label>
                <div class=\"btn-group\" role=\"group\">
                    <button type=\"button\" class=\"btn\" ng-class=\"defaultSourceClass\" ng-click=\"resetSource()\">
                        {{ labels.allTranslations }}
                    </button>
                    <button type=\"button\" class=\"btn\" ng-class=\"tokenSourceClass\" ng-click=\"useTokenAsSource()\">
                        {{ labels.profiler }}
                    </button>
                </div>
            </div>
            <div class=\"col-md-5\" ng-show=\"showProfiles\">
                <label>{{ labels.latestProfiles }}:&nbsp;</label>
                <select ng-model=\"selectedToken\" ng-change=\"changeToken(selectedToken)\" ng-options=\"p.token as p.token+' - '+p.url for p in profilerTokens\" class=\"form-control\"></select>
            </div>
            <div class=\"col-md-2\" ng-show=\"showProfiles\">
                <label>{{ labels.profile }}:&nbsp;</label>
                <input type=\"text\" ng-model=\"selectedToken\" ng-change=\"changeToken(selectedToken)\" class=\"form-control\" />
            </div>
        </div>

        <hr  />
    </div>

    <div class=\"row margin-row grid-action-bar\">
        <div class=\"col-md-12\">
            <a ng-click=\"hideColumnsSelector = !hideColumnsSelector\" class=\"btn btn-default btn-sm btn-manage-col\">
                <span class=\"glyphicon glyphicon-eye-close\"></span>
                {{ labels.hideCol }}
            </a>
            <a ng-show=\"!autoCacheClean\" ng-click=\"invalidateCache()\" role=\"button\" class=\"btn btn-primary btn-sm btn-invalidate-cache\">
                <span class=\"glyphicon glyphicon-refresh\"></span>
                {{ labels.invalidateCache }}
            </a>
            <div ng-show=\"sharedMsg.content != ''\" class=\"pull-right label label-{{ sharedMsg.css }}\">
                <span>
                    <i class=\"glyphicon glyphicon-{{ sharedMsg.icon }}\"></i>
                    {{ sharedMsg.content }}
                </span>
            </div>
        </div>
    </div>

    <div ng-show=\"hideColumnsSelector\" class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"list-unstyled list-inline locales-list\">
                <li class=\"locale\">
                    <label for=\"toggle-all-columns\" class=\"locale\">
                        <input type=\"checkbox\" id=\"toggle-all-columns\" ng-model=\"areAllColumnsSelected\" ng-checked=\"areAllColumnsSelected\" ng-click=\"toggleAllColumns()\"/>
                        {{ labels.toggleAllCol }}
                    </label>
                </li>
            </ul>
            <ul class=\"list-unstyled list-inline locales-list\">
                <li ng-repeat=\"column in columns track by \$index\" class=\"locale\">
                    <label for=\"toggle-{{ column.index }}\">
                        <input type=\"checkbox\" id=\"toggle-{{ column.index }}\" ng-model=\"column.visible\" ng-click=\"toggleSimilar(column)\" />
                        {{ column.title }}
                    </label>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"row margin-row\">
        <div class=\"col-md-12\">
            <table ng-table=\"tableParams\" show-filter=\"true\" template-pagination=\"pager-template\" class=\"table table-bordered table-striped\">
                <thead>
                    <tr>
                        <th ng-repeat=\"column in columns track by \$index\"
                            ng-show=\"column.visible\"
                            ng-click=\"sortGrid(column)\"
                            class=\"text-center sortable col-{{ column.index }}\">
                            {{ column.title }}
                            &nbsp;
                            <span ng-if=\"column.sortable\" class=\"glyphicon glyphicon-chevron-down\"></span>
                        </th>
                        <th class=\"col-save\"></th>
                    </tr>
                    <tr>
                        <th ng-repeat=\"column in columns track by \$index\" ng-show=\"column.visible\">
                            <input ng-if=\"column.filter != false\" ng-model=\"params.filter()[column.index]\" type=\"text\" name=\"{{ column.index }}\" value=\"\" class=\"form-control input-sm\" />
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr editable-row ng-repeat=\"translation in \$data track by \$index\" translation=\"translation\" columns=\"columns\" edit-type=\"editType\"></tr>
                </tbody>
            </table>
            <div class=\"alert alert-info\" role=\"alert\" ng-if=\"tableParams.total() < 1\">
                {{ labels.noTranslations }}
            </div>
        </div>
    </div>

    <script type=\"text/ng-template\" id=\"pager-template\">
        <div class=\"ng-cloak ng-table-pager\">
            <ul class=\"pagination ng-table-pagination pull-right\">
                <li ng-class=\"{'disabled': !page.active}\" ng-repeat=\"page in pages track by \$index\" ng-switch=\"page.type\">
                    <a ng-switch-when=\"prev\" ng-click=\"params.changePage(page.number)\" href=\"\">&laquo;</a>
                    <a ng-switch-when=\"first\" ng-click=\"params.changePage(page.number)\" href=\"\"><span ng-bind=\"page.number\"></span></a>
                    <a ng-switch-when=\"page\" ng-click=\"params.changePage(page.number)\" href=\"\"><span ng-bind=\"page.number\"></span></a>
                    <a ng-switch-when=\"more\" ng-click=\"params.changePage(page.number)\" href=\"\">&#8230;</a>
                    <a ng-switch-when=\"last\" ng-click=\"params.changePage(page.number)\" href=\"\"><span ng-bind=\"page.number\"></span></a>
                    <a ng-switch-when=\"next\" ng-click=\"params.changePage(page.number)\" href=\"\">&raquo;</a>
                </li>
            </ul>
        </div>
    </script>

    <script type=\"text/ng-template\" id=\"editable-row-template\">
        <td ng-repeat=\"column in columns track by \$index\" ng-show=\"column.visible\" ng-dblclick=\"enableMode('edit')\">
            <span ng-show=\"!column.edit || (column.edit && mode != 'edit')\">{{ translation[column.index] }}</span>
            <div ng-switch on=\"editType\">
                <textarea ng-switch-when=\"textarea\"
                       ng-if=\"column.edit\"
                       ng-show=\"mode == 'edit'\"
                       ng-model=\"translation[column.index]\"
                       ng-keydown=\"save(\$event, 'textarea')\"
                       name=\"column.index\"
                       class=\"form-control\">
                </textarea>
                <input ng-switch-default
                       ng-if=\"column.edit\"
                       ng-show=\"mode == 'edit'\"
                       ng-model=\"translation[column.index]\"
                       ng-keydown=\"save(\$event, 'input')\"
                       type=\"text\"
                       name=\"column.index\"
                       class=\"form-control input-sm\" />
            </div>
            <div class=\"text-center\">
                <button ng-show=\"mode == 'delete' && column.delete && translation[column.index]\" type=\"button\" class=\"btn btn-link delete\" ng-click=\"delete(column)\">
                    <i class=\"glyphicon glyphicon-remove text-danger\"></i>
                </button>
            </div>
        </td>
        <td class=\"text-center\">
            <div class=\"actions\">
                <button ng-show=\"!mode\" ng-click=\"enableMode('edit')\" type=\"button\" class=\"btn btn-primary btn-sm\">
                    <span class=\"glyphicon glyphicon-pencil\"></span>
                </button>
                <button ng-show=\"!mode\" ng-click=\"enableMode('delete')\" type=\"button\" class=\"btn btn-danger btn-sm\">
                    <span class=\"glyphicon glyphicon-trash\"></span>
                </button>
                <button ng-show=\"mode == 'edit'\" ng-click=\"save(\$event, 'btn-save')\" type=\"button\" class=\"btn btn-success btn-sm\">
                    <span class=\"glyphicon glyphicon-saved\"></span>
                </button>
                <button ng-show=\"mode != null\" ng-click=\"disableMode()\" type=\"button\" class=\"btn btn-warning btn-sm\">
                    <span class=\"glyphicon glyphicon-ban-circle\"></span>
                </button>
            </div>
        </td>
    </script>
</div>
{% endverbatim %}
", "@LexikTranslation/Translation/_ngGrid.html.twig", "C:\\Users\\LENOVO\\Desktop\\PI2025\\Reaptn\\vendor\\lexik\\translation-bundle\\Resources\\views\\Translation\\_ngGrid.html.twig");
    }
}
