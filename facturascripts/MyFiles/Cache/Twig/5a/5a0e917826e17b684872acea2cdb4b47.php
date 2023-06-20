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

/* Tab/AccountingEntry.html.twig */
class __TwigTemplate_ef583acec13f1d3acc558dd995689ded extends Template
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
        $context["model"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 1), "model", [], "any", false, false, false, 1);
        // line 2
        echo "
<script>
    let editLine = 0;
    findSubaccount = 0;

    function findSubaccountSearch(action, id, input) {
        findSubaccount++;
        return setTimeout(function () {
            accEntryFormAction(action, id, \$(input).parent().find('button'));
        }, 500);
    }

    function newLineAction(code) {
        document.getElementById(\"new_subaccount\").value = code;
        return accEntryFormAction('new-line', '0');
    }

    function recalculateLine(recalculate, idlinea) {
        editLine++;
        return setTimeout(function () {
            accEntryFormAction(recalculate, idlinea);
        }, 500);
    }

    function accEntryFormAction(action, selectedLine) {
        animateSpinner('add');

        if (editLine > 1) {
            editLine--;
            return false;
        }

        if (findSubaccount > 1) {
            findSubaccount--;
            return false;
        }

        editLine = 0;
        findSubaccount = 0;
        document.forms['accEntryForm']['action'].value = action;
        document.forms['accEntryForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['accEntryForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['accEntryForm']['code'].value);
        data.append('multireqtoken', document.forms['accEntryForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['accEntryForm']['selectedLine'].value);
        data.append('idasiento', document.forms['accEntryForm']['idasiento'].value);
        data.append('data', formDataJsonString);

        fetch('";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 56), "html", null, true);
        echo "', {
            method: 'POST',
            body: data
        }).then(function (response) {
            if (response.ok) {
                animateSpinner('remove', true);
                return response.json();
            }
            animateSpinner('remove', false);
            return Promise.reject(response);
        }).then(function (data) {
            if (data.header !== '') {
                document.getElementById(\"accEntryFormHeader\").innerHTML = data.header;
            }
            if (data.lines !== '') {
                document.getElementById(\"accEntryFormLines\").innerHTML = data.lines;
            }
            if (data.footer !== '') {
                document.getElementById(\"accEntryFormFooter\").innerHTML = data.footer;
            }
            if (data.list !== '') {
                document.getElementById(\"findSubaccountList\").innerHTML = data.list;
            }
            if (Array.isArray(data.messages) && data.messages.length > 0) {
                data.messages.forEach(item => alert(item.message));
                \$(\"#new_subaccount\").focus();
            } else if (document.forms['accEntryForm']['action'].value === 'new-line') {
                \$(\".line-debit:last\").focus().select();
            }
        }).catch(function (error) {
            alert('error');
            console.warn(error);
        });

        return false;
    };

    function accEntryFormSave(action, selectedLine) {
        animateSpinner('add');
        setOrdenLines();

        document.forms['accEntryForm']['action'].value = action;
        document.forms['accEntryForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['accEntryForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['accEntryForm']['code'].value);
        data.append('multireqtoken', document.forms['accEntryForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['accEntryForm']['selectedLine'].value);
        data.append('idasiento', document.forms['accEntryForm']['idasiento'].value);
        data.append('data', formDataJsonString);

        fetch('";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 112), "html", null, true);
        echo "', {
            method: 'POST',
            body: data
        }).then(function (response) {
            if (response.ok) {
                animateSpinner('remove', true);
                return response.json();
            }
            animateSpinner('remove', false);
            return Promise.reject(response);
        }).then(function (data) {
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            if (data.ok) {
                window.location.replace(data.newurl);
            }
        }).catch(function (error) {
            alert('error');
            console.warn(error);
        });

        return false;
    };

    function setOrdenLines() {
        let orderInputs = \$(\"input[name^='orden_']\");
        let count = orderInputs.length * 10;
        orderInputs.each(function (index) {
            \$(this).val(count - (index * 10));
        });
    }

    function sortableEnable() {
        \$(\"#accEntryFormLines\").sortable({
            update: function (event, ui) {
                setOrdenLines();
            }
        });
        \$(\"#accEntryFormLines\").sortable(\"option\", \"disabled\", false);
        \$(\"#accEntryFormLines\").disableSelection();
    }

    function sortableDisable() {
        \$(\"#accEntryFormLines\").sortable(\"disable\");
    }

    \$(document).ready(function () {
        ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "editable", [], "any", false, false, false, 160)) {
            // line 161
            echo "        let sortable = false;

        \$(document).on('click', '#sortableBtn', function () {
            if (sortable) {
                sortableDisable();
                sortable = false;
                \$(this).removeClass('btn-secondary').addClass('btn-light');
            } else {
                sortableEnable();
                sortable = true;
                \$(this).removeClass('btn-light').addClass('btn-secondary');
            }
        });
        ";
        }
        // line 175
        echo "    });
</script>

<form name=\"accEntryForm\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 180), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumn", [], "method", false, false, false, 181), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 181), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 182), "newToken", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 182), "logkey", [], "any", false, false, false, 182)], "method", false, false, false, 182), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"selectedLine\"/>
    ";
        // line 184
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "renderAccEntryForm", [0 => ($context["model"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getLines", [], "method", false, false, false, 184)], "method", false, false, false, 184);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "Tab/AccountingEntry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 184,  240 => 182,  234 => 181,  230 => 180,  223 => 175,  207 => 161,  205 => 160,  154 => 112,  95 => 56,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/AccountingEntry.html.twig", "C:\\Server\\www\\facturascripts\\Dinamic\\View\\Tab\\AccountingEntry.html.twig");
    }
}
