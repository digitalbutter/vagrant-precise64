<?php

/* settings/sections/index */
class __TwigTemplate_e91d2ce67915e4fd210a4bf88a39582617370c30489f0adca3cbb93070bec658 extends Craft\BaseTemplate
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
        // line 2
        $context["title"] = \Craft\Craft::t("Sections");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 8
        $context["docsUrl"] = "http://buildwithcraft.com/docs/sections-and-entries#sections";
        // line 11
        ob_start();
        // line 12
        echo "\t<div id=\"nosections\"";
        if (isset($context["sections"])) { $_sections_ = $context["sections"]; } else { $_sections_ = null; }
        if ($_sections_) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, \Craft\Craft::t("No sections exist yet."), "html", null, true);
        echo "</p>
\t</div>

\t";
        // line 16
        if (isset($context["sections"])) { $_sections_ = $context["sections"]; } else { $_sections_ = null; }
        if (twig_length_filter($this->env, $_sections_)) {
            // line 17
            echo "\t\t<table id=\"sections\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 21
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("URL Format"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 23
            echo twig_escape_filter($this->env, \Craft\Craft::t("Entry Types"), "html", null, true);
            echo "</th>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 27
            if (isset($context["sections"])) { $_sections_ = $context["sections"]; } else { $_sections_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_sections_);
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 28
                echo "\t\t\t\t\t<tr data-id=\"";
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_section_, "id"), "html", null, true);
                echo "\" data-name=\"";
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_section_, "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 29
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/sections/" . $this->getAttribute($_section_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_section_, "name")), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t<td data-title=\"";
                // line 30
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_section_, "handle"), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 31
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "\">";
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t(twig_title_string_filter($this->env, $this->getAttribute($_section_, "type"))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td data-title=\"";
                // line 32
                echo twig_escape_filter($this->env, \Craft\Craft::t("URL Format"), "html", null, true);
                echo "\" dir=\"ltr\">";
                // line 33
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                if ($this->getAttribute($_section_, "isHomepage", array(), "method")) {
                    // line 34
                    echo "<div data-icon=\"home\" title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Homepage"), "html", null, true);
                    echo "\"></div>";
                } else {
                    // line 36
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_section_, "getUrlFormat", array(), "method"), "html", null, true);
                }
                // line 38
                echo "</td>
\t\t\t\t\t\t<td data-title=\"";
                // line 39
                echo twig_escape_filter($this->env, \Craft\Craft::t("Entry Types"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 40
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                if ((($this->getAttribute($_section_, "type") == "single") && (twig_length_filter($this->env, $this->getAttribute($_section_, "getEntryTypes", array(), "method")) == 1))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    $context["entryType"] = $this->getAttribute($this->getAttribute($_section_, "getEntryTypes", array(), "method"), 0, array(), "array");
                    // line 42
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entryType_, "getCpEditUrl", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Edit entry type"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("settings/sections/" . $this->getAttribute($_section_, "id")) . "/entrytypes")), "html", null, true);
                    echo "\">";
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Edit entry types ({count})", array("count" => twig_length_filter($this->env, $this->getAttribute($_section_, "getEntryTypes", array(), "method")))), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t<a class=\"menubtn\" title=\"";
                    // line 45
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Entry Types"), "html", null, true);
                    echo "\"></a>
\t\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
                    // line 48
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_section_, "getEntryTypes", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
                        // line 49
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_entryType_, "getCpEditUrl", array(), "method"), "html", null, true);
                        echo "\">";
                        if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_entryType_, "name"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 55
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 61
        echo "
\t<div id=\"newsectioncontainer\" class=\"buttons";
        // line 62
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPersonal"])) { $_CraftPersonal_ = $context["CraftPersonal"]; } else { $_CraftPersonal_ = null; }
        if (isset($context["sections"])) { $_sections_ = $context["sections"]; } else { $_sections_ = null; }
        if (isset($context["maxSections"])) { $_maxSections_ = $context["maxSections"]; } else { $_maxSections_ = null; }
        if ((($_CraftEdition_ == $_CraftPersonal_) && (twig_length_filter($this->env, $_sections_) >= $_maxSections_))) {
            echo " hidden";
        }
        echo "\">
\t\t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/sections/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Section"), "html", null, true);
        echo "</a>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        ob_start();
        // line 69
        echo "\tvar adminTable = new Craft.AdminTable({
\t\ttableSelector: '#sections',
\t\tnoObjectsSelector: '#nosections',
\t\tnewObjectBtnSelector: '#newsectioncontainer',
\t\tdeleteAction: 'sections/deleteSection',
\t\tconfirmDeleteMessage: '";
        // line 74
        echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete “{name}” and all its entries?"), "html", null, true);
        echo "',
\t\t";
        // line 75
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPersonal"])) { $_CraftPersonal_ = $context["CraftPersonal"]; } else { $_CraftPersonal_ = null; }
        if (($_CraftEdition_ == $_CraftPersonal_)) {
            echo "maxObjects: ";
            if (isset($context["maxSections"])) { $_maxSections_ = $context["maxSections"]; } else { $_maxSections_ = null; }
            echo twig_escape_filter($this->env, $_maxSections_, "html", null, true);
            echo ",";
        }
        // line 76
        echo "\t\tonDeleteObject: function()
\t\t{
\t\t\t// Hide the Entries tab if that was the last one
\t\t\tif (adminTable.totalObjects == 0)
\t\t\t{
\t\t\t\t\$('#nav-entries').remove();
\t\t\t}
\t\t}
\t});
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 86
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 86,  250 => 76,  241 => 75,  237 => 74,  230 => 69,  228 => 68,  220 => 63,  210 => 62,  207 => 61,  202 => 58,  193 => 55,  190 => 54,  185 => 51,  172 => 49,  167 => 48,  161 => 45,  152 => 44,  143 => 42,  139 => 41,  136 => 40,  132 => 39,  129 => 38,  125 => 36,  120 => 34,  117 => 33,  114 => 32,  107 => 31,  100 => 30,  90 => 29,  81 => 28,  76 => 27,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 17,  46 => 16,  40 => 13,  32 => 12,  30 => 11,  28 => 8,  26 => 4,  24 => 2,);
    }
}
