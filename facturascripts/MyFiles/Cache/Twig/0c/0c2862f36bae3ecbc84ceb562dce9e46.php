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

/* Updater.html.twig */
class __TwigTemplate_1071a0d165147872a38394a1ce34689d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Updater.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Updater.html.twig", 23)->unwrap();
        // line 24
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 27
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 27, $context, $this->getSourceContext());
        echo "
                ";
        // line 28
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), [0 => "warning"], "warning"], 28, $context, $this->getSourceContext());
        echo "
                ";
        // line 29
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), [0 => "notice"], "success"], 29, $context, $this->getSourceContext());
        echo "
                ";
        // line 30
        echo twig_call_macro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), [0 => "info"], "info"], 30, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a href=\"AdminPlugins\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "plugins"], "method", false, false, false, 43), "html", null, true);
        echo " </span>
                    </a>
                    <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 45), "html", null, true);
        echo "\" class=\"btn btn-sm btn-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 45), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 49), "ready", [], "method", false, false, false, 49)) {
            // line 50
            echo "                    <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "manage-installation"], "method", false, false, false, 53), "html", null, true);
            echo " </span>
                    </button>
                ";
        } else {
            // line 56
            echo "                    <button class=\"btn btn-sm btn-warning\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation"], "method", false, false, false, 59), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 62
        echo "            </div>
            <div class=\"col-sm-6 text-right\">
                <h1 class=\"h3\">
                    ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "updater"], "method", false, false, false, 65), "html", null, true);
        echo "
                    <small class=\"text-info\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 66), "html", null, true);
        echo "</small>
                    <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th scope=\"col\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "component"], "method", false, false, false, 76), "html", null, true);
        echo "</th>
                <th scope=\"col\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 77), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-right\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "action"], "method", false, false, false, 78), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 82));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 83
            echo "                <tr class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "stable", [], "any", false, false, false, 83)) ? ("table-success") : ("table-warning"));
            echo "\">
                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                    <td class=\"text-right\">
                        ";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 87) > twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 87))) {
                // line 88
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "requires-core", 1 => ["%version%" => twig_get_attribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 88)]], "method", false, false, false, 88), "html", null, true);
                echo "
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 89
$context["item"], "downloaded", [], "any", false, false, false, 89)) {
                // line 90
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 90), "html", null, true);
                echo "?action=update&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 90), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\">
                                <i class=\"fas fa-rocket fa-fw\" aria-hidden=\"true\"></i> ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "update"], "method", false, false, false, 91), "html", null, true);
                echo "
                            </a>
                            <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 93), "html", null, true);
                echo "?action=cancel&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 93), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\">
                                <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i> ";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 94), "html", null, true);
                echo "
                            </a>
                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 96
$context["item"], "name", [], "any", false, false, false, 96) == "CORE") && twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 96))) {
                // line 97
                echo "                            <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\"
                                    data-target=\"#coreWarningModal\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "download"], "method", false, false, false, 98), "html", null, true);
                echo "
                            </button>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 100
$context["item"], "stable", [], "any", false, false, false, 100)) {
                // line 101
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 101), "html", null, true);
                echo "?action=download&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\"
                               class=\"btn btn-sm btn-secondary\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "download"], "method", false, false, false, 102), "html", null, true);
                echo "
                            </a>
                        ";
            } else {
                // line 105
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 105), "html", null, true);
                echo "?action=download&item=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 105), "html", null, true);
                echo "\"
                               class=\"btn btn-sm btn-outline-warning\">";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "beta"], "method", false, false, false, 106), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 109
            echo "                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "                <tr class=\"table-warning\">
                    <td colspan=\"3\"><b>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 113), "html", null, true);
            echo "</b></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "            </tbody>
        </table>
    </div>
    <div class=\"modal fade\" id=\"modalTelemetry\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 122), "ready", [], "method", false, false, false, 122)) {
            // line 123
            echo "                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "registered-installation", 1 => ["%number%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 124), "id", [], "method", false, false, false, 124)]], "method", false, false, false, 124), "html", null, true);
            echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 125), "html", null, true);
            echo "\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "registered-installation-p"], "method", false, false, false, 130), "html", null, true);
            echo "</p>
                        <p>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "telemetry-data-to-send"], "method", false, false, false, 131), "html", null, true);
            echo "</p>
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <a class=\"btn btn-primary\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 134), "html", null, true);
            echo "?action=claim-install\" target=\"_blank\">
                                    ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "manage"], "method", false, false, false, 135), "html", null, true);
            echo "
                                </a>
                            </div>
                            <div class=\"col text-right\">
                                <form action=\"";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 139), "html", null, true);
            echo "\" method=\"post\">
                                    <input type=\"hidden\" name=\"action\" value=\"unlink\"/>
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "unlink"], "method", false, false, false, 142), "html", null, true);
            echo "
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 149
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 149), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"action\" value=\"register\"/>
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation"], "method", false, false, false, 152), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 154), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation-p"], "method", false, false, false, 159), "html", null, true);
            echo "</p>
                            <p>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "telemetry-data-to-send"], "method", false, false, false, 160), "html", null, true);
            echo "</p>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "register-installation"], "method", false, false, false, 162), "html", null, true);
            echo "
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 167
        echo "            </div>
        </div>
    </div>
    ";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 170)) {
            // line 171
            echo "        <div class=\"modal fade\" id=\"coreWarningModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-exclamation-triangle mr-1\" aria-hidden=\"true\"></i>
                            ";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "core-update-warning"], "method", false, false, false, 177), "html", null, true);
            echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"mb-0\">
                            ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 185));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 186
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 191));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 192
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 192) == "CORE") && twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 192))) {
                    // line 193
                    echo "                                <div class=\"btn-group\">
                                    <a href=\"";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 194), "html", null, true);
                    echo "?action=download&item=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 194), "html", null, true);
                    echo "&disable=";
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 194)), ","), "html", null, true);
                    echo "\"
                                       class=\"btn btn-warning\">";
                    // line 195
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "download"], "method", false, false, false, 195), "html", null, true);
                    echo "
                                    </a>
                                    <button type=\"button\" class=\"btn btn-warning dropdown-toggle dropdown-toggle-split\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">";
                    // line 199
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 199), "html", null, true);
                    echo "</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a href=\"";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 202), "html", null, true);
                    echo "?action=download&item=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 202), "html", null, true);
                    echo "\"
                                           class=\"btn btn-warning\">";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "do-not-disable-plugins"], "method", false, false, false, 203), "html", null, true);
                    echo "
                                        </a>
                                    </div>
                                </div>
                            ";
                }
                // line 208
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "Updater.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 209,  463 => 208,  455 => 203,  449 => 202,  443 => 199,  436 => 195,  428 => 194,  425 => 193,  422 => 192,  418 => 191,  413 => 188,  404 => 186,  400 => 185,  389 => 177,  381 => 171,  379 => 170,  374 => 167,  366 => 162,  361 => 160,  357 => 159,  349 => 154,  344 => 152,  337 => 149,  327 => 142,  321 => 139,  314 => 135,  310 => 134,  304 => 131,  300 => 130,  292 => 125,  288 => 124,  285 => 123,  283 => 122,  275 => 116,  266 => 113,  263 => 112,  256 => 109,  250 => 106,  243 => 105,  237 => 102,  230 => 101,  228 => 100,  223 => 98,  220 => 97,  218 => 96,  213 => 94,  207 => 93,  202 => 91,  195 => 90,  193 => 89,  188 => 88,  186 => 87,  181 => 85,  177 => 84,  172 => 83,  167 => 82,  160 => 78,  156 => 77,  152 => 76,  139 => 66,  135 => 65,  130 => 62,  124 => 59,  119 => 56,  113 => 53,  108 => 50,  106 => 49,  97 => 45,  92 => 43,  84 => 37,  80 => 36,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  54 => 24,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Updater.html.twig", "C:\\Server\\www\\facturascripts\\Dinamic\\View\\Updater.html.twig");
    }
}
