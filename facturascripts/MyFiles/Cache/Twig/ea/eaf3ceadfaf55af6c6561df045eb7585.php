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

/* Tab/AttachedFilePreview.html.twig */
class __TwigTemplate_33452f34f70e1572ffa545461920d8b3 extends Template
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
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 1));
        // line 2
        $context["file"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 2);
        // line 3
        echo "
<div class=\"card shadow mb-3\">
    <div class=\"card-body\">
        <a class=\"btn btn-outline-primary\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "url", [0 => "download"], "method", false, false, false, 6)), "html", null, true);
        echo "\">
            <i class=\"fas fa-cloud-download-alt\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "download"], "method", false, false, false, 7), "html", null, true);
        echo "
        </a>
    </div>
    ";
        // line 10
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "mimetype", [], "any", false, false, false, 10), [0 => "image/gif", 1 => "image/jpeg", 2 => "image/png"])) {
            // line 11
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "url", [0 => "download"], "method", false, false, false, 11)), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "filename", [], "any", false, false, false, 11), "html", null, true);
            echo "\" />
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 12
($context["file"] ?? null), "getExtension", [], "method", false, false, false, 12) == "mp4")) {
            // line 13
            echo "        <div class=\"embed-responsive embed-responsive-16by9\">
            <video width=\"320\" height=\"240\" controls>
                <source src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "url", [0 => "download"], "method", false, false, false, 15)), "html", null, true);
            echo "\" type=\"video/mp4\" />
            </video>
        </div>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 18
($context["file"] ?? null), "getExtension", [], "method", false, false, false, 18) == "pdf")) {
            // line 19
            echo "        <div class=\"embed-responsive embed-responsive-16by9\">
            <embed src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "url", [0 => "download"], "method", false, false, false, 20)), "html", null, true);
            echo "\" type=\"application/pdf\" />
        </div>
    ";
        }
        // line 23
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "Tab/AttachedFilePreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  82 => 20,  79 => 19,  77 => 18,  71 => 15,  67 => 13,  65 => 12,  58 => 11,  56 => 10,  50 => 7,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/AttachedFilePreview.html.twig", "C:\\Server\\www\\facturascripts\\Dinamic\\View\\Tab\\AttachedFilePreview.html.twig");
    }
}
