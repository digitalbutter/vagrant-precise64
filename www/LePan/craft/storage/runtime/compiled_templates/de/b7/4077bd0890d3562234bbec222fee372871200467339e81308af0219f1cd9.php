<?php

/* settings/users/groups */
class __TwigTemplate_deb74077bd0890d3562234bbec222fee372871200467339e81308af0219f1cd9 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("settings/users/_layout");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "settings/users/_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (\Craft\craft()->getEdition() < $_CraftPro_)
        {
            throw new \Craft\HttpException(404);
        }
        // line 4
        $context["selectedTab"] = "groups";
        // line 6
        $context["docsUrl"] = "http://buildwithcraft.com/docs/users#user-groups";
        // line 9
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["groups"] = $this->getAttribute($this->getAttribute($_craft_, "userGroups"), "getAllGroups");
        // line 12
        ob_start();
        // line 13
        echo "\t<p id=\"nogroups\"";
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        if (twig_length_filter($this->env, $_groups_)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 14
        echo twig_escape_filter($this->env, \Craft\Craft::t("No groups exist yet."), "html", null, true);
        echo "
\t</p>

\t";
        // line 17
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        if (twig_length_filter($this->env, $_groups_)) {
            // line 18
            echo "\t\t<table id=\"groups\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 21
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 25
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_groups_);
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 26
                echo "\t\t\t\t\t<tr data-id=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "id"), "html", null, true);
                echo "\" data-name=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_group_, "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 27
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/users/groups/" . $this->getAttribute($_group_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_group_, "name")), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t<td data-title=\"";
                // line 28
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "handle"), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 29
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 35
        echo "
\t<div class=\"buttons\">
\t\t<a href=\"";
        // line 37
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/users/groups/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Group"), "html", null, true);
        echo "</a>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#groups',
\t\tnoObjectsSelector: '#nogroups',
\t\tdeleteAction: 'userSettings/deleteGroup'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/users/groups";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  128 => 42,  120 => 37,  116 => 35,  111 => 32,  102 => 29,  95 => 28,  85 => 27,  76 => 26,  71 => 25,  64 => 21,  60 => 20,  56 => 18,  53 => 17,  47 => 14,  39 => 13,  37 => 12,  34 => 9,  32 => 6,  30 => 4,  24 => 1,);
    }
}
