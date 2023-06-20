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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_ebf70353916e60a4a7827397e17e2095 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\"
      xml:lang=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\">
<head>
    ";
        // line 24
        $this->displayBlock('meta', $context, $blocks);
        // line 32
        echo "    ";
        $this->displayBlock('icons', $context, $blocks);
        // line 37
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 44
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 56
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 58);
        echo "
</head>
";
        // line 60
        $this->displayBlock('fullBody', $context, $blocks);
        // line 134
        echo "</html>
";
    }

    // line 24
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <title>";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 26);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("meta-description"), "html", null, true);
        echo "\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"generator\" content=\"FacturaScripts\"/>
        <meta name=\"robots\" content=\"noindex\"/>
    ";
    }

    // line 32
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"180x180\"
              href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 37
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        echo "?v=6\"/>
    ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.locales.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        echo "?v=6\"></script>
    ";
    }

    // line 60
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    <body>
    ";
        // line 62
        $this->displayBlock('navbar', $context, $blocks);
        // line 109
        echo "    <div class=\"pt-3\">
        ";
        // line 110
        $this->displayBlock('messages', $context, $blocks);
        // line 123
        echo "        ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 125
        echo "    </div>
    ";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 128
        echo "    <br/>
    <br/>
    <br/>
    ";
        // line 131
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 131);
        echo "
    </body>
";
    }

    // line 62
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        <nav class=\"navbar navbar-expand navbar-dark bg-primary sticky-top d-print-none\">
            ";
        // line 64
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 107
        echo "        </nav>
    ";
    }

    // line 64
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                <a class=\"navbar-brand d-none d-sm-inline\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("homepage"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/logo-white.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\"
                         class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                    <span class=\"d-none d-xl-inline-block\">";
        // line 68
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 68), "nombrecorto", [], "any", false, false, false, 68);
        echo "</span>
                </a>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"navbar-nav pt-1\">
                        ";
        // line 72
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 72)->unwrap();
        // line 73
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 74
            echo "                            ";
            echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 74, $context, $this->getSourceContext());
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </ul>
                    <ul class=\"navbar-nav flex-row ml-auto\">
                        <li class=\"nav-item";
        // line 78
        echo (((($context["template"] ?? null) == "MegaSearch.html.twig")) ? (" active") : (""));
        echo "\"
                            title=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
        echo "\">
                            <a class=\"nav-link\" href=\"MegaSearch\">
                                <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\" title=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("help"), "html", null, true);
        echo "\">
                            <a class=\"nav-link\" href=\"https://facturascripts.com/ayuda\" rel=\"nofollow\" target=\"_blank\">
                                <i class=\"fas fa-question-circle\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown\" title=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("user"), "html", null, true);
        echo "\">
                            <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                <a class=\"dropdown-item\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 95), "url", [], "method", false, false, false, 95), "html", null, true);
        echo "\">
                                    <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 96), "nick", [], "any", false, false, false, 96), "html", null, true);
        echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"?logout=TRUE\">
                                    <i class=\"fas fa-door-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("logout"), "html", null, true);
        echo "
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            ";
    }

    // line 110
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "            ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 111)->unwrap();
        // line 112
        echo "            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 115
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 115, $context, $this->getSourceContext());
        echo "
                        ";
        // line 116
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 116, $context, $this->getSourceContext());
        echo "
                        ";
        // line 117
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 117, $context, $this->getSourceContext());
        echo "
                        ";
        // line 118
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 118, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </div>
        ";
    }

    // line 123
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "        ";
    }

    // line 126
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 127,  384 => 126,  380 => 124,  376 => 123,  367 => 118,  363 => 117,  359 => 116,  355 => 115,  350 => 112,  347 => 111,  343 => 110,  332 => 100,  325 => 96,  321 => 95,  312 => 89,  304 => 84,  296 => 79,  292 => 78,  288 => 76,  279 => 74,  274 => 73,  272 => 72,  265 => 68,  260 => 66,  253 => 65,  249 => 64,  244 => 107,  242 => 64,  239 => 63,  235 => 62,  228 => 131,  223 => 128,  221 => 126,  218 => 125,  215 => 123,  213 => 110,  210 => 109,  208 => 62,  205 => 61,  201 => 60,  195 => 52,  191 => 51,  187 => 50,  183 => 49,  179 => 48,  174 => 47,  170 => 46,  164 => 40,  160 => 39,  155 => 38,  151 => 37,  145 => 35,  139 => 33,  135 => 32,  126 => 27,  122 => 26,  119 => 25,  115 => 24,  110 => 134,  108 => 60,  102 => 58,  93 => 56,  88 => 55,  86 => 54,  83 => 46,  74 => 44,  69 => 43,  67 => 42,  64 => 37,  61 => 32,  59 => 24,  54 => 22,  50 => 21,  47 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuTemplate.html.twig", "C:\\Server\\www\\facturascripts\\Dinamic\\View\\Master\\MenuTemplate.html.twig");
    }
}
