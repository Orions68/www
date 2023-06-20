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

/* Tab/RefundFacturaProveedor.html.twig */
class __TwigTemplate_d8712c24cb02ce6333809cdb015a3282 extends Template
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
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 21));
        // line 22
        echo "
<script>
    function refundAll() {
        const refundableQty = document.getElementsByClassName(\"refundable\");
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = refundableQty.item(i).value;
        }
        return false;
    }

    function refundNone() {
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = 0;
        }
        return false;
    }
</script>

";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "count", [], "any", false, false, false, 42) > 0)) {
            // line 43
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover mb-5\">
            <thead>
            <tr>
                <th>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "code"], "method", false, false, false, 47), "html", null, true);
            echo "</th>
                <th>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "numsupplier"], "method", false, false, false, 48), "html", null, true);
            echo "</th>
                <th>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 49), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 50), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "date"], "method", false, false, false, 51), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["rectified"]) {
                // line 56
                echo "                <tr class=\"table-danger clickableRow\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rectified"], "url", [], "method", false, false, false, 56), "html", null, true);
                echo "\">
                    <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rectified"], "codigo", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>
                    <td>";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["rectified"], "numproveedor", [], "any", false, false, false, 58);
                echo "</td>
                    <td>";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["rectified"], "observaciones", [], "any", false, false, false, 59);
                echo "</td>
                    <td class=\"text-right\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 60), "coins", [], "method", false, false, false, 60), "format", [0 => twig_get_attribute($this->env, $this->source, $context["rectified"], "total", [], "any", false, false, false, 60)], "method", false, false, false, 60), "html", null, true);
                echo "</td>
                    <td class=\"text-right\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rectified"], "fecha", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rectified'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </tbody>
        </table>
    </div>
";
        }
        // line 68
        echo "
<form action=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 69), "url", [], "method", false, false, false, 69), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"action\" value=\"new-refund\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 71), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"idfactura\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 72), "primaryColumnValue", [], "method", false, false, false, 72), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 73), "newToken", [], "method", false, false, false, 73), "html", null, true);
        echo "\"/>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-warning shadow mb-4\">
                    <div class=\"card-header bg-warning\">
                        <i class=\"fas fa-share fa-fw\" aria-hidden=\"true\"></i> ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-refund"], "method", false, false, false, 79), "html", null, true);
        echo "
                    </div>
                    <div class=\"card-body\">
                        <p>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "rectified-invoice-p"], "method", false, false, false, 82), "html", null, true);
        echo "</p>
                        <div class=\"form-row align-items-end\">
                            <div class=\"col-sm\">
                                <div class=\"form-group\">
                                    ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "serie"], "method", false, false, false, 86), "html", null, true);
        echo "
                                    <select name=\"codserie\" class=\"form-control\">
                                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "series", [], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 89
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 89) == twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codserierec", 2 => "R"], "method", false, false, false, 89))) {
                // line 90
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 90), "html", null, true);
                echo "\" selected>
                                                    ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 91), "html", null, true);
                echo "
                                                </option>
                                            ";
            } else {
                // line 94
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 94), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 94), "html", null, true);
                echo "</option>
                                            ";
            }
            // line 96
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"form-group\">
                                    ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "date"], "method", false, false, false, 102), "html", null, true);
        echo "
                                    <input type=\"date\" name=\"fecha\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "end", [], "any", false, false, false, 103), "Y-m-d"), "html", null, true);
        echo "\"
                                           class=\"form-control\" required>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"form-group\">
                                    ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "numsupplier"], "method", false, false, false, 109), "html", null, true);
        echo "
                                    <input type=\"text\" name=\"numproveedor\" class=\"form-control\" maxlength=\"50\">
                                </div>
                            </div>
                            <div class=\"col-sm text-right\">
                                <div class=\"btn-group mb-3\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-check-square fa-fw\"></i> ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select"], "method", false, false, false, 118), "html", null, true);
        echo "
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-right\">
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundNone();\">
                                                <i class=\"far fa-square fa-fw\"></i> ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-none"], "method", false, false, false, 122), "html", null, true);
        echo "
                                            </a>
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundAll();\">
                                                <i class=\"fas fa-square fa-fw\"></i> ";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-all"], "method", false, false, false, 125), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"btn-group mb-3\">
                                    <button type=\"submit\" class=\"btn btn-warning ml-3\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 132), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover mb-0\">
                            <thead>
                            <tr>
                                <th>";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 142), "html", null, true);
        echo "</th>
                                <th class=\"text-right\">";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "quantity"], "method", false, false, false, 143), "html", null, true);
        echo "</th>
                                <th class=\"text-right\">";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "to-refund"], "method", false, false, false, 144), "html", null, true);
        echo "</th>
                                <th class=\"text-right\">";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refund-amount"], "method", false, false, false, 145), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 149), "getLines", [], "method", false, false, false, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 150
            echo "                                ";
            $context["refunded"] = twig_get_attribute($this->env, $this->source, $context["line"], "refundedQuantity", [], "method", false, false, false, 150);
            // line 151
            echo "                                <tr>
                                    <td class=\"align-middle\">
                                        <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "getProducto", [], "method", false, false, false, 153), "url", [], "method", false, false, false, 153), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 153), "html", null, true);
            echo "</a>
                                        ";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["line"], "descripcion", [], "any", false, false, false, 154);
            echo "
                                    </td>
                                    <td class=\"align-middle text-right\">
                                        ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 157), "numbers", [], "method", false, false, false, 157), "format", [0 => twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 157)], "method", false, false, false, 157), "html", null, true);
            echo "
                                    </td>
                                    <td class=\"table-warning\">
                                        <input type=\"hidden\" value=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 160), "html", null, true);
            echo "\" class=\"refundable\">
                                        ";
            // line 161
            if ((twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 161) > 0)) {
                // line 162
                echo "                                            <input type=\"number\" name=\"refund_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 162), "html", null, true);
                echo "\"
                                                   value=\"0\" min=\"0\" max=\"";
                // line 163
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 163) - ($context["refunded"] ?? null)), "html", null, true);
                echo "\" step=\"any\"
                                                   class=\"form-control text-right to_refund\" autocomplete=\"off\"/>
                                        ";
            } else {
                // line 166
                echo "                                            <input type=\"number\" name=\"refund_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 166), "html", null, true);
                echo "\"
                                                   value=\"0\" step=\"any\" class=\"form-control text-right to_refund\"
                                                   autocomplete=\"off\"/>
                                        ";
            }
            // line 170
            echo "                                    </td>
                                    <td class=\"align-middle table-warning text-right\">
                                        ";
            // line 172
            if ((($context["refunded"] ?? null) == 0)) {
                // line 173
                echo "                                            -
                                        ";
            } else {
                // line 175
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 175), "numbers", [], "method", false, false, false, 175), "format", [0 => ($context["refunded"] ?? null)], "method", false, false, false, 175), "html", null, true);
                echo "
                                        ";
            }
            // line 177
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"form-group\">
                                <textarea name=\"observaciones\" class=\"form-control\"
                                          placeholder=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 186), "html", null, true);
        echo "\"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "Tab/RefundFacturaProveedor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 186,  374 => 180,  366 => 177,  360 => 175,  356 => 173,  354 => 172,  350 => 170,  342 => 166,  336 => 163,  331 => 162,  329 => 161,  325 => 160,  319 => 157,  313 => 154,  307 => 153,  303 => 151,  300 => 150,  296 => 149,  289 => 145,  285 => 144,  281 => 143,  277 => 142,  264 => 132,  254 => 125,  248 => 122,  241 => 118,  229 => 109,  220 => 103,  216 => 102,  209 => 97,  203 => 96,  195 => 94,  189 => 91,  184 => 90,  181 => 89,  177 => 88,  172 => 86,  165 => 82,  159 => 79,  150 => 73,  146 => 72,  142 => 71,  137 => 69,  134 => 68,  128 => 64,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  103 => 57,  98 => 56,  94 => 55,  87 => 51,  83 => 50,  79 => 49,  75 => 48,  71 => 47,  65 => 43,  63 => 42,  41 => 22,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/RefundFacturaProveedor.html.twig", "C:\\Server\\www\\facturascripts\\Dinamic\\View\\Tab\\RefundFacturaProveedor.html.twig");
    }
}
