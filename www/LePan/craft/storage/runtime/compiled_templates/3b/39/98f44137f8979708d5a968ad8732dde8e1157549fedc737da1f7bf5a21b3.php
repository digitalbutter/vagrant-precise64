<?php

/* settings/sections/_entrytypes/index */
class __TwigTemplate_3b3998f44137f8979708d5a968ad8732dde8e1157549fedc737da1f7bf5a21b3 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        $context["entryTypes"] = $this->getAttribute($_section_, "getEntryTypes", array(), "method");
        // line 4
        if (isset($context["entryTypes"])) { $_entryTypes_ = $context["entryTypes"]; } else { $_entryTypes_ = null; }
        $context["multiple"] = (twig_length_filter($this->env, $_entryTypes_) > 1);
        // line 6
        ob_start();
        // line 7
        echo "\t<table id=\"entrytypes\" class=\"data fullwidth collapsible\">
\t\t<thead>
\t\t\t<th scope=\"col\">";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
        echo "</th>
\t\t\t<th scope=\"col\">";
        // line 10
        echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
        echo "</th>
\t\t\t";
        // line 11
        if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
        if ($_multiple_) {
            // line 12
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t";
        }
        // line 15
        echo "\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 17
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_section_, "getEntryTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
            // line 18
            echo "\t\t\t\t<tr data-id=\"";
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entryType_, "id"), "html", null, true);
            echo "\" data-name=\"";
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entryType_, "name"), "html", null, true);
            echo "\">
\t\t\t\t\t<th scope=\"row\" data-title=\"";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "\"><a href=\"";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(((("settings/sections/" . $this->getAttribute($_section_, "id")) . "/entrytypes/") . $this->getAttribute($_entryType_, "id"))), "html", null, true);
            echo "\">";
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entryType_, "name"), "html", null, true);
            echo "</a></th>
\t\t\t\t\t<td data-title=\"";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "\"><code>";
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entryType_, "handle"), "html", null, true);
            echo "</code></td>
\t\t\t\t\t";
            // line 21
            if (isset($context["multiple"])) { $_multiple_ = $context["multiple"]; } else { $_multiple_ = null; }
            if ($_multiple_) {
                // line 22
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 23
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</tbody>
\t</table>

\t";
        // line 30
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($this->getAttribute($_section_, "type") != "single")) {
            // line 31
            echo "\t\t<div class=\"buttons\">
\t\t\t<a href=\"";
            // line 32
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("settings/sections/" . $this->getAttribute($_section_, "id")) . "/entrytypes/new")), "html", null, true);
            echo "\" class=\"btn submit add icon\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry Type"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($this->getAttribute($_section_, "type") != "single")) {
            // line 39
            ob_start();
            // line 40
            echo "\t\tnew Craft.AdminTable({
\t\t\ttableSelector: '#entrytypes',
\t\t\tdeleteAction: 'sections/deleteEntryType',
\t\t\tminObjects: 1,
\t\t\tsortable: true,
\t\t\treorderAction: 'sections/reorderEntryTypes',
\t\t\tconfirmDeleteMessage: '";
            // line 46
            echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete “{name}” and all entries that use it?"), "html", null, true);
            echo "',
\t\t});
\t";
            $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 49
            if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
            \Craft\craft()->templates->includeJs($_js_);
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  142 => 46,  134 => 40,  132 => 39,  129 => 38,  119 => 32,  116 => 31,  113 => 30,  108 => 27,  101 => 25,  96 => 23,  91 => 22,  88 => 21,  81 => 20,  70 => 19,  61 => 18,  56 => 17,  52 => 15,  47 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  30 => 6,  27 => 4,  24 => 3,);
    }
}
