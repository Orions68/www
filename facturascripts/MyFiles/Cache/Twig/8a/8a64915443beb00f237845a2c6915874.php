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

/* SendMail.html.twig */
class __TwigTemplate_31c03a30b891fd34a1e7b1daee673e22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "SendMail.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <br/>
    <br/>
    <br/>
";
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"container\" style=\"margin-top: -60px;\">
        <div class=\"row\">
            <div class=\"col-12\">
                <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"action\" value=\"send\"/>
                    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 34), "newToken", [], "method", false, false, false, 34), "html", null, true);
        echo "\"/>
                    <div class=\"card shadow\">
                        <div class=\"card-body\">
                            <h1 class=\"h3 mb-3\">
                                <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "send-mail"], "method", false, false, false, 38), "html", null, true);
        echo "
                            </h1>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "from"], "method", false, false, false, 43), "html", null, true);
        echo "</span>
                                    </div>
                                    <select class=\"custom-select\" name=\"email-from\">
                                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 46), "getAvailableMailboxes", [], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["emailFrom"]) {
            // line 47
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["emailFrom"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["emailFrom"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailFrom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "to"], "method", false, false, false, 55), "html", null, true);
        echo "</span>
                                    </div>
                                    ";
        // line 57
        $context["emails"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 57), "getToAddresses", [], "method", false, false, false, 57))) ? ("") : ((twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 57), "getToAddresses", [], "method", false, false, false, 57), ",") . ", ")));
        // line 58
        echo "                                    <input type=\"text\" id=\"email\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, ($context["emails"] ?? null), "html", null, true);
        echo "\" class=\"form-control\"
                                           required=\"\" placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-to"], "method", false, false, false, 59), "html", null, true);
        echo "\"/>
                                    <div class=\"input-group-append\">
                                        <button type=\"button\" class=\"btn btn-outline-secondary\"
                                                title=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-cc"], "method", false, false, false, 62), "html", null, true);
        echo "\" onclick=\"\$('#fgCC').show();
                                                \$(this).hide();\">
                                            ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cc"], "method", false, false, false, 64), "html", null, true);
        echo "
                                        </button>
                                        <button type=\"button\" class=\"btn btn-outline-secondary\"
                                                title=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-bcc"], "method", false, false, false, 67), "html", null, true);
        echo "\" onclick=\"\$('#fgBCC').show();
                                                \$(this).hide();\">
                                            ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "bcc"], "method", false, false, false, 69), "html", null, true);
        echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"fgCC\" class=\"form-group\" style=\"display: none;\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cc"], "method", false, false, false, 77), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" id=\"email-cc\" name=\"email-cc\" class=\"form-control\"
                                           placeholder=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-cc"], "method", false, false, false, 80), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div id=\"fgBCC\" class=\"form-group\" style=\"display: none;\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "bcc"], "method", false, false, false, 86), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" id=\"email-bcc\" name=\"email-bcc\" class=\"form-control\"
                                           placeholder=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-bcc"], "method", false, false, false, 89), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subject"], "method", false, false, false, 95), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" name=\"subject\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 97), "title", [], "any", false, false, false, 97), "html", null, true);
        echo "\"
                                           class=\"form-control\" required=\"\" placeholder=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subject"], "method", false, false, false, 98), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"body\" rows=\"5\" class=\"form-control\">";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 102), "text", [], "any", false, false, false, 102), "html", null, true);
        echo "</textarea>
                            </div>
                            ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 104), "signature", [], "any", false, false, false, 104)) {
            // line 105
            echo "                                <div class=\"form-group\">
                                    ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-signature"], "method", false, false, false, 106), "html", null, true);
            echo "
                                    <textarea rows=\"3\" class=\"form-control\"
                                              readonly=\"true\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 108), "signature", [], "any", false, false, false, 108), "html", null, true);
            echo "</textarea>
                                </div>
                            ";
        }
        // line 111
        echo "                            <div class=\"form-group\">
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 112), "getAttachmentNames", [], "method", false, false, false, 112));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 113
            echo "                                    <p>
                                        <i class=\"fas fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
            // line 114
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
                                    </p>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                <input type=\"file\" name=\"uploads[]\" multiple=\"\"/>
                            </div>
                            <div class=\"row align-items-end\">
                                <div class=\"col-sm-6\">
                                    ";
        // line 121
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "email", 1 => "replytouseremail", 2 => "1"], "method", false, false, false, 121), [0 => "1", 1 => "0"])) {
            // line 122
            echo "                                        ";
            $context["check"] = (((twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "email", 1 => "replytouseremail"], "method", false, false, false, 122) == "1")) ? ("checked") : (""));
            // line 123
            echo "                                        <div class=\"form-check\">
                                            <input type=\"checkbox\" name=\"replyto\" value=\"1\" ";
            // line 124
            echo twig_escape_filter($this->env, ($context["check"] ?? null), "html", null, true);
            echo "
                                                   class=\"form-check-input\" id=\"replytoCheck\"/>
                                            <label class=\"form-check-label\" for=\"replytoCheck\">
                                                ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-replies-to", 1 => ["%email%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 127), "email", [], "any", false, false, false, 127)]], "method", false, false, false, 127), "html", null, true);
            echo "
                                            </label>
                                        </div>
                                    ";
        }
        // line 131
        echo "                                </div>
                                <div class=\"col-sm-6 text-right\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-envelope fa-fw\"
                                           aria-hidden=\"true\"></i> ";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "send"], "method", false, false, false, 135), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 147
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 152
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        function split(val) {
            return val.split(/,\\s*/);
        }

        function extractLast(term) {
            return split(term).pop();
        }

        \$(document).ready(function () {
            var cacheQuery = {};
            \$(\"#email,#email-cc,#email-bcc\").on(\"keydown\", function (event) {
                if (event.keyCode === \$.ui.keyCode.TAB && \$(this).autocomplete(\"instance\").menu.active) {
                    event.preventDefault();
                }
            }).autocomplete({
                minLength: 0,
                source: function (request, response) {
                    // Avoid re-query the same
                    var term = request.term;
                    if (term in cacheQuery) {
                        response(cacheQuery[term]);
                        return;
                    }

                    \$.getJSON(\"SendMail\", {
                        action: 'autocomplete',
                        source: 'contactos',
                        field: 'email',
                        title: 'email',
                        term: extractLast(request.term)
                    }, function (data) {
                        cacheQuery[term] = data;
                        response(data);
                    });
                },
                focus: function () {
                    // Prevent value inserted on focus
                    return false;
                },
                select: function (event, ui) {
                    var terms = split(this.value);
                    // Remove the current input
                    terms.pop();
                    // Add the selected item
                    terms.push(ui.item.value);
                    // Add placeholder to get the comma-and-space at the end
                    terms.push(\"\");
                    this.value = terms.join(\", \");
                    return false;
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SendMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 154,  316 => 153,  312 => 152,  306 => 149,  301 => 148,  297 => 147,  282 => 135,  276 => 131,  269 => 127,  263 => 124,  260 => 123,  257 => 122,  255 => 121,  249 => 117,  240 => 114,  237 => 113,  233 => 112,  230 => 111,  224 => 108,  219 => 106,  216 => 105,  214 => 104,  209 => 102,  202 => 98,  198 => 97,  193 => 95,  184 => 89,  178 => 86,  169 => 80,  163 => 77,  152 => 69,  147 => 67,  141 => 64,  136 => 62,  130 => 59,  125 => 58,  123 => 57,  118 => 55,  110 => 49,  99 => 47,  95 => 46,  89 => 43,  81 => 38,  74 => 34,  69 => 32,  64 => 29,  60 => 28,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "SendMail.html.twig", "C:\\Server\\www\\facturascripts\\Dinamic\\View\\SendMail.html.twig");
    }
}
