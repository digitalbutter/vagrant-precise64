<?php

/* settings/assets/sources/index */
class __TwigTemplate_dae558c15dd286f624ea280095a0eb067661b3a9e0d5545110ec364392bae283 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("settings/assets/_layout");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "settings/assets/_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["selectedTab"] = "sources";
        // line 4
        $context["docsUrl"] = "http://buildwithcraft.com/docs/assets";
        // line 7
        ob_start();
        // line 8
        echo "\t<p id=\"nosources\"";
        if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
        if (twig_length_filter($this->env, $_sources_)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("No sources exist yet."), "html", null, true);
        echo "
\t</p>

\t";
        // line 12
        if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
        if (twig_length_filter($this->env, $_sources_)) {
            // line 13
            echo "\t\t";
            if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
            $context["sortable"] = (twig_length_filter($this->env, $_sources_) > 1);
            // line 14
            echo "
\t\t<table id=\"sources\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 18
            if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
            if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
            if (($_CraftEdition_ == $_CraftPro_)) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "</th>";
            }
            // line 19
            echo "\t\t\t\t";
            if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
            if ($_sortable_) {
                echo "<td class=\"thin\"></td>";
            }
            // line 20
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 23
            if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_sources_);
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 24
                echo "\t\t\t\t\t<tr data-id=\"";
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_source_, "id"), "html", null, true);
                echo "\" data-name=\"";
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_source_, "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 25
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/assets/sources/" . $this->getAttribute($_source_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_source_, "name")), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t";
                // line 26
                if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
                if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
                if (($_CraftEdition_ == $_CraftPro_)) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                    echo "\">";
                    if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_source_, "getSourceType", array(), "method"), "getName", array(), "method"), "html", null, true);
                    echo "</td>";
                }
                // line 27
                echo "\t\t\t\t\t\t";
                if (isset($context["sortable"])) { $_sortable_ = $context["sortable"]; } else { $_sortable_ = null; }
                if ($_sortable_) {
                    echo "<td class=\"thin\"><a class=\"move icon\" title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                    echo "\" role=\"button\"></a></td>";
                }
                // line 28
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 34
        echo "
\t<div class=\"buttons\">
\t\t<a class=\"btn submit add icon\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/assets/sources/new"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Source"), "html", null, true);
        echo "</a>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        $context["js"] = ('' === $tmp = "\tvar adminTable = new Craft.AdminTable({
\t\ttableSelector: '#sources',
\t\tnoObjectsSelector: '#nosources',
\t\tsortable: true,
\t\treorderAction: 'assetSources/reorderSources',
\t\tdeleteAction: 'assetSources/deleteSource',
\t\tonDeleteObject: function()
\t\t{
\t\t\t// Hide the Assets tab if that was the last one
\t\t\tif (adminTable.totalObjects == 0)
\t\t\t{
\t\t\t\t\$('#nav-assets').remove();
\t\t\t}
\t\t}
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/sources/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  149 => 41,  141 => 36,  137 => 34,  132 => 31,  122 => 28,  114 => 27,  103 => 26,  93 => 25,  84 => 24,  79 => 23,  74 => 20,  68 => 19,  60 => 18,  56 => 17,  51 => 14,  47 => 13,  44 => 12,  38 => 9,  30 => 8,  28 => 7,  26 => 4,  24 => 2,);
    }
}
