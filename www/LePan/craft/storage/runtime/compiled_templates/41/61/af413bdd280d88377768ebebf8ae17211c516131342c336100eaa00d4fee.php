<?php

/* settings/fields */
class __TwigTemplate_4161af413bdd280d88377768ebebf8ae17211c516131342c336100eaa00d4fee extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Fields");
        // line 4
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields";
        // line 6
        \Craft\craft()->templates->includeJsResource("js/fields.js");
        // line 8
        \Craft\craft()->templates->includeTranslations(
        	"What do you want to name your group?",
        	"Could not create the group:",
        	"Could not create the group:",
        	"Are you sure you want to delete this group and all its fields?",
        	"Could not delete the group.",
        	"Group renamed."
        );
        // line 17
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 22
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["groups"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getAllGroups", array(0 => "id"), "method");
        // line 24
        if (array_key_exists("groupId", $context)) {
            // line 25
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
            if ((!$this->getAttribute($_groups_, $_groupId_, array(), "array", true, true))) {
                // line 26
                throw new \Craft\HttpException(404);
            }
            // line 29
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
            $context["fields"] = $this->getAttribute($this->getAttribute($_groups_, $_groupId_, array(), "array"), "getFields", array(), "method");
        } else {
            // line 31
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context["fields"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getAllFields", array(), "method");
        }
        // line 35
        ob_start();
        // line 36
        echo "
\t<nav>
\t\t<ul id=\"groups\">
\t\t\t<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/fields"), "html", null, true);
        echo "\"";
        if ((!array_key_exists("groupId", $context))) {
            echo " class=\"sel\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All Fields"), "html", null, true);
        echo "</a></li>
\t\t\t";
        // line 40
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 41
            echo "\t\t\t\t<li><a href=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/" . $this->getAttribute($_group_, "id"))), "html", null, true);
            echo "\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
            if ((array_key_exists("groupId", $context) && ($this->getAttribute($_group_, "id") == $_groupId_))) {
                echo " class=\"sel\"";
            }
            echo " data-id=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</ul>
\t</nav>

\t<div class=\"buttons\">
\t\t<div id=\"newgroupbtn\" class=\"btn add icon\">";
        // line 47
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Group"), "html", null, true);
        echo "</div>

\t\t";
        // line 49
        if (array_key_exists("groupId", $context)) {
            // line 50
            echo "\t\t\t<div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"";
            echo "Settings";
            echo "\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a data-action=\"rename\" role=\"button\">";
            // line 53
            echo twig_escape_filter($this->env, \Craft\Craft::t("Rename selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a data-action=\"delete\" role=\"button\">";
            // line 54
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 58
        echo "\t</div>
";
        $context["sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        ob_start();
        // line 63
        echo "
\t<p id=\"nofields\"";
        // line 64
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        if ($_fields_) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 65
        if (array_key_exists("groupId", $context)) {
            // line 66
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("This group doesn’t have any fields yet."), "html", null, true);
            echo "
\t\t";
        } else {
            // line 68
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No fields exist yet."), "html", null, true);
            echo "
\t\t";
        }
        // line 70
        echo "\t</p>

\t";
        // line 72
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        if ($_fields_) {
            // line 73
            echo "\t\t<table id=\"fields\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 75
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 76
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 77
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 78
            if ((!array_key_exists("groupId", $context))) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                echo "</th>";
            }
            // line 79
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 82
            if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_fields_);
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 83
                echo "\t\t\t\t\t<tr data-id=\"";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "id"), "html", null, true);
                echo "\" data-name=\"";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_field_, "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 84
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/edit/" . $this->getAttribute($_field_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_field_, "name")), "html", null, true);
                echo "</a>";
                // line 85
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "required")) {
                    echo " <span class=\"required\"></span>";
                }
                // line 86
                echo "</th>
\t\t\t\t\t\t<td data-title=\"";
                // line 87
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "handle"), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 88
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 89
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                $context["fieldType"] = $this->getAttribute($_field_, "getFieldType", array(), "method");
                // line 90
                echo "\t\t\t\t\t\t\t";
                if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
                if ($_fieldType_) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_fieldType_, "name"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t<span class=\"error\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 96
                if ((!array_key_exists("groupId", $context))) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                    echo "\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "group"), "name"), "html", null, true);
                    echo "</td>";
                }
                // line 97
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 103
        echo "
\t";
        // line 104
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        if ($_groups_) {
            // line 105
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 106
            if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
            $context["newFieldUrl"] = \Craft\UrlHelper::getUrl("settings/fields/new", ((array_key_exists("groupId", $context)) ? (array("groupId" => $_groupId_)) : (null)));
            // line 107
            echo "\t\t\t<a href=\"";
            if (isset($context["newFieldUrl"])) { $_newFieldUrl_ = $context["newFieldUrl"]; } else { $_newFieldUrl_ = null; }
            echo twig_escape_filter($this->env, $_newFieldUrl_, "html", null, true);
            echo "\" class=\"submit btn add icon\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Field"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        // line 110
        echo "
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 114
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#fields',
\t\tnoObjectsSelector: '#nofields',
\t\tdeleteAction: 'fields/deleteField'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 121
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 121,  317 => 114,  313 => 110,  303 => 107,  300 => 106,  297 => 105,  294 => 104,  291 => 103,  286 => 100,  276 => 97,  267 => 96,  264 => 95,  257 => 93,  250 => 91,  246 => 90,  243 => 89,  239 => 88,  232 => 87,  229 => 86,  224 => 85,  215 => 84,  206 => 83,  201 => 82,  196 => 79,  190 => 78,  186 => 77,  182 => 76,  178 => 75,  174 => 73,  171 => 72,  167 => 70,  161 => 68,  155 => 66,  153 => 65,  146 => 64,  143 => 63,  141 => 62,  137 => 58,  130 => 54,  126 => 53,  119 => 50,  117 => 49,  112 => 47,  106 => 43,  84 => 41,  79 => 40,  69 => 39,  64 => 36,  62 => 35,  58 => 31,  53 => 29,  50 => 26,  46 => 25,  44 => 24,  41 => 22,  39 => 17,  30 => 8,  28 => 6,  26 => 4,  24 => 2,);
    }
}
