<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Tab/RoleAccess.html.twig */
class __TwigTemplate_62b668ce4b6816e3025edb482aeb683a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<style>
    .custom-control-lg .custom-control-label::before,
    .custom-control-lg .custom-control-label::after {
        top: 0.1rem !important;
        left: -2rem !important;
        width: 1.25rem !important;
        height: 1.25rem !important;
    }

    .custom-control-lg .custom-control-label {
        margin-left: 1rem !important;
        font-size: 1rem !important;
    }
</style>

<form action=\"\" method=\"post\">
    <input type=\"hidden\" name=\"action\" value=\"edit-rules\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 18), "getViewName", [], "method", false, false, false, 18), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 19), "newToken", [], "method", false, false, false, 19), "html", null, true);
        echo "\"/>
    <div class=\"card shadow\">
        <div class=\"card-body text-right\">
            <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                <i class=\"fas fa-save fa-fw\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 23), "html", null, true);
        echo "
            </button>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "menu"], "method", false, false, false, 30), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "show"], "method", false, false, false, 31), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "only-owner-data"], "method", false, false, false, 32), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "allow-update"], "method", false, false, false, 33), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "allow-import"], "method", false, false, false, 34), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "allow-export"], "method", false, false, false, 35), "html", null, true);
        echo "</th>
                    <th class=\"text-center\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "allow-delete"], "method", false, false, false, 36), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <tr class=\"table-warning\">
                    <td></td>
                    <td class=\"text-center\">
                        <div class=\"custom-control-lg custom-control custom-checkbox\">
                            <input class=\"all-permission custom-control-input\" id=\"checkbox-all-show\" value=\"show\"
                                   type=\"checkbox\"/>
                            <label class=\"custom-control-label\" for=\"checkbox-all-show\">&nbsp</label>
                        </div>
                    </td>
                    <td class=\"text-center\">
                        <div class=\"custom-control-lg custom-control custom-checkbox\">
                            <input class=\"all-permission custom-control-input\" id=\"checkbox-all-onlyOwner\"
                                   value=\"only-owner\" type=\"checkbox\"/>
                            <label class=\"custom-control-label\" for=\"checkbox-all-onlyOwner\">&nbsp</label>
                        </div>
                    </td>
                    <td class=\"text-center\">
                        <div class=\"custom-control-lg custom-control custom-checkbox\">
                            <input class=\"all-permission custom-control-input\" id=\"checkbox-all-update\" value=\"update\"
                                   type=\"checkbox\"/>
                            <label class=\"custom-control-label\" for=\"checkbox-all-update\">&nbsp</label>
                        </div>
                    </td>
                    <td class=\"text-center\">
                        <div class=\"custom-control-lg custom-control custom-checkbox\">
                            <input class=\"all-permission custom-control-input\" id=\"checkbox-all-import\" value=\"import\"
                                   type=\"checkbox\"/>
                            <label class=\"custom-control-label\" for=\"checkbox-all-import\">&nbsp</label>
                        </div>
                    </td>
                    <td class=\"text-center\">
                        <div class=\"custom-control-lg custom-control custom-checkbox\">
                            <input class=\"all-permission custom-control-input\" id=\"checkbox-all-export\" value=\"export\"
                                   type=\"checkbox\"/>
                            <label class=\"custom-control-label\" for=\"checkbox-all-export\">&nbsp</label>
                        </div>
                    </td>
                    <td class=\"text-center\">
                        <div class=\"custom-control-lg custom-control custom-checkbox\">
                            <input class=\"all-permission custom-control-input\" id=\"checkbox-all-delete\" value=\"delete\"
                                   type=\"checkbox\"/>
                            <label class=\"custom-control-label\" for=\"checkbox-all-delete\">&nbsp</label>
                        </div>
                    </td>
                </tr>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAccessRules", [], "method", false, false, false, 85));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["pageName"] => $context["rule"]) {
            // line 86
            echo "                    <tr>
                        <td>
                            ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "menu", [], "any", false, false, false, 88), "html", null, true);
            echo "
                            ";
            // line 89
            if (twig_in_filter("List", $context["pageName"])) {
                // line 90
                echo "                                <span class=\"badge badge-info ml-1\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "list"], "method", false, false, false, 90), "html", null, true);
                echo "</span>
                            ";
            }
            // line 92
            echo "                        </td>
                        <td class=\"text-center\">
                            <div class=\"custom-control-lg custom-control custom-checkbox\">
                                ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, $context["rule"], "show", [], "any", false, false, false, 95)) {
                // line 96
                echo "                                    <input class=\"show-permission custom-control-input\"
                                           id=\"checkbox-large-show-";
                // line 97
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"show[]\"
                                           value=\"";
                // line 98
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" checked=\"\"/>
                                ";
            } else {
                // line 100
                echo "                                    <input class=\"show-permission custom-control-input\"
                                           id=\"checkbox-large-show-";
                // line 101
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"show[]\"
                                           value=\"";
                // line 102
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\"/>
                                ";
            }
            // line 104
            echo "                                <label class=\"custom-control-label\"
                                       for=\"checkbox-large-show-";
            // line 105
            echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
            echo "\">&nbsp</label>
                            </div>
                        </td>
                        <td class=\"text-center\">
                            <div class=\"custom-control-lg custom-control custom-checkbox\">
                                ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["rule"], "onlyOwner", [], "any", false, false, false, 110)) {
                // line 111
                echo "                                    <input class=\"only-owner-permission custom-control-input\"
                                           id=\"checkbox-large-onlyOwner-";
                // line 112
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\"
                                           name=\"onlyOwner[]\" value=\"";
                // line 113
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" checked=\"\"/>
                                ";
            } else {
                // line 115
                echo "                                    <input class=\"only-owner-permission custom-control-input\"
                                           id=\"checkbox-large-onlyOwner-";
                // line 116
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\"
                                           name=\"onlyOwner[]\"
                                           value=\"";
                // line 118
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\"/>
                                ";
            }
            // line 120
            echo "                                <label class=\"custom-control-label\"
                                       for=\"checkbox-large-onlyOwner-";
            // line 121
            echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
            echo "\">&nbsp</label>
                            </div>
                        </td>
                        <td class=\"text-center\">
                            <div class=\"custom-control-lg custom-control custom-checkbox\">
                                ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, $context["rule"], "update", [], "any", false, false, false, 126)) {
                // line 127
                echo "                                    <input class=\"update-permission custom-control-input\"
                                           id=\"checkbox-large-update-";
                // line 128
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"update[]\"
                                           value=\"";
                // line 129
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" checked=\"\"/>
                                ";
            } else {
                // line 131
                echo "                                    <input class=\"update-permission custom-control-input\"
                                           id=\"checkbox-large-update-";
                // line 132
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"update[]\"
                                           value=\"";
                // line 133
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\"/>
                                ";
            }
            // line 135
            echo "                                <label class=\"custom-control-label\"
                                       for=\"checkbox-large-update-";
            // line 136
            echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
            echo "\">&nbsp</label>
                            </div>
                        </td>
                        <td class=\"text-center\">
                            <div class=\"custom-control-lg custom-control custom-checkbox\">
                                ";
            // line 141
            if (twig_get_attribute($this->env, $this->source, $context["rule"], "import", [], "any", false, false, false, 141)) {
                // line 142
                echo "                                    <input class=\"import-permission custom-control-input\"
                                           id=\"checkbox-large-import-";
                // line 143
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"import[]\"
                                           value=\"";
                // line 144
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" checked=\"\"/>
                                ";
            } else {
                // line 146
                echo "                                    <input class=\"import-permission custom-control-input\"
                                           id=\"checkbox-large-import-";
                // line 147
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"import[]\"
                                           value=\"";
                // line 148
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\"/>
                                ";
            }
            // line 150
            echo "                                <label class=\"custom-control-label\"
                                       for=\"checkbox-large-import-";
            // line 151
            echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
            echo "\">&nbsp</label>
                            </div>
                        </td>
                        <td class=\"text-center\">
                            <div class=\"custom-control-lg custom-control custom-checkbox\">
                                ";
            // line 156
            if (twig_get_attribute($this->env, $this->source, $context["rule"], "export", [], "any", false, false, false, 156)) {
                // line 157
                echo "                                    <input class=\"export-permission custom-control-input\"
                                           id=\"checkbox-large-export-";
                // line 158
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"export[]\"
                                           value=\"";
                // line 159
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" checked=\"\"/>
                                ";
            } else {
                // line 161
                echo "                                    <input class=\"export-permission custom-control-input\"
                                           id=\"checkbox-large-export-";
                // line 162
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"export[]\"
                                           value=\"";
                // line 163
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\"/>
                                ";
            }
            // line 165
            echo "                                <label class=\"custom-control-label\"
                                       for=\"checkbox-large-export-";
            // line 166
            echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
            echo "\">&nbsp</label>
                            </div>
                        </td>
                        <td class=\"text-center\">
                            <div class=\"custom-control-lg custom-control custom-checkbox\">
                                ";
            // line 171
            if (twig_get_attribute($this->env, $this->source, $context["rule"], "delete", [], "any", false, false, false, 171)) {
                // line 172
                echo "                                    <input class=\"delete-permission custom-control-input\"
                                           id=\"checkbox-large-delete-";
                // line 173
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"delete[]\"
                                           value=\"";
                // line 174
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" checked=\"\"/>
                                ";
            } else {
                // line 176
                echo "                                    <input class=\"delete-permission custom-control-input\"
                                           id=\"checkbox-large-delete-";
                // line 177
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\" type=\"checkbox\" name=\"delete[]\"
                                           value=\"";
                // line 178
                echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
                echo "\"/>
                                ";
            }
            // line 180
            echo "                                <label class=\"custom-control-label\"
                                       for=\"checkbox-large-delete-";
            // line 181
            echo twig_escape_filter($this->env, $context["pageName"], "html", null, true);
            echo "\">&nbsp</label>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 186
            echo "                    <tr class=\"table-warning\">
                        <td colspan=\"7\">
                            ";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 188), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['pageName'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                </tbody>
            </table>
        </div>
        <div class=\"card-body text-right\">
            <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                <i class=\"fas fa-save fa-fw\"></i> ";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 197), "html", null, true);
        echo "
            </button>
        </div>
    </div>
</form>

<script>
    \$(document).ready(function () {
        \$('input.only-owner-permission, input.update-permission, input.import-permission, input.export-permission, input.delete-permission')
            .change(function () {
                if (this.checked) {
                    \$(this).parent().parent().parent().find('input.show-permission').prop('checked', true);
                }
            });

        \$('input.show-permission').change(function () {
            if (!this.checked) {
                \$(this).parent().parent().parent().find('input.only-owner-permission').prop('checked', false);
                \$(this).parent().parent().parent().find('input.update-permission').prop('checked', false);
                \$(this).parent().parent().parent().find('input.import-permission').prop('checked', false);
                \$(this).parent().parent().parent().find('input.export-permission').prop('checked', false);
                \$(this).parent().parent().parent().find('input.delete-permission').prop('checked', false);
            }
        });

        \$('input.all-permission').change(function () {
            \$('input.' + this.value + '-permission').prop('checked', this.checked).change();
            if (!this.checked && this.value === 'show') {
                \$('input.all-permission').prop('checked', false);
            }
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "Tab/RoleAccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 197,  418 => 192,  408 => 188,  404 => 186,  394 => 181,  391 => 180,  386 => 178,  382 => 177,  379 => 176,  374 => 174,  370 => 173,  367 => 172,  365 => 171,  357 => 166,  354 => 165,  349 => 163,  345 => 162,  342 => 161,  337 => 159,  333 => 158,  330 => 157,  328 => 156,  320 => 151,  317 => 150,  312 => 148,  308 => 147,  305 => 146,  300 => 144,  296 => 143,  293 => 142,  291 => 141,  283 => 136,  280 => 135,  275 => 133,  271 => 132,  268 => 131,  263 => 129,  259 => 128,  256 => 127,  254 => 126,  246 => 121,  243 => 120,  238 => 118,  233 => 116,  230 => 115,  225 => 113,  221 => 112,  218 => 111,  216 => 110,  208 => 105,  205 => 104,  200 => 102,  196 => 101,  193 => 100,  188 => 98,  184 => 97,  181 => 96,  179 => 95,  174 => 92,  168 => 90,  166 => 89,  162 => 88,  158 => 86,  153 => 85,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  67 => 23,  60 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/RoleAccess.html.twig", "C:\\Server\\www\\facturascripts\\Dinamic\\View\\Tab\\RoleAccess.html.twig");
    }
}
