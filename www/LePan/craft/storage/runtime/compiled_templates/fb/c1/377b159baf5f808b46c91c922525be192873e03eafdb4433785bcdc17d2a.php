<?php

/* settings/users/groups/_settings */
class __TwigTemplate_fbc1377b159baf5f808b46c91c922525be192873e03eafdb4433785bcdc17d2a extends Craft\BaseTemplate
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
        // line 1
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (\Craft\craft()->getEdition() < $_CraftPro_)
        {
            throw new \Craft\HttpException(404);
        }
        // line 4
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 6
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")), 1 => array("label" => \Craft\Craft::t("Users"), "url" => \Craft\UrlHelper::getUrl("settings/users")), 2 => array("label" => \Craft\Craft::t("User Groups"), "url" => \Craft\UrlHelper::getUrl("settings/users")));
        // line 12
        $context["docsUrl"] = "http://buildwithcraft.com/docs/users#user-groups";
        // line 15
        if (((!array_key_exists("group", $context)) && array_key_exists("groupId", $context))) {
            // line 16
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
            $context["group"] = $this->getAttribute($this->getAttribute($_craft_, "userGroups"), "getGroupById", array(0 => $_groupId_), "method");
            // line 17
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if ((!$_group_)) {
                throw new \Craft\HttpException(404);
            }
        }
        // line 21
        $context["isNewGroup"] = ((!array_key_exists("group", $context)) || (!array_key_exists("groupId", $context)));
        // line 24
        if (isset($context["isNewGroup"])) { $_isNewGroup_ = $context["isNewGroup"]; } else { $_isNewGroup_ = null; }
        if ($_isNewGroup_) {
            // line 25
            $context["title"] = \Craft\Craft::t("Create a new user group");
        } else {
            // line 27
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context["title"] = \Craft\Craft::t($this->getAttribute($_group_, "name"));
        }
        // line 31
        ob_start();
        // line 32
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"userSettings/saveGroup\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/users\">
\t\t";
        // line 35
        if (isset($context["isNewGroup"])) { $_isNewGroup_ = $context["isNewGroup"]; } else { $_isNewGroup_ = null; }
        if ((!$_isNewGroup_)) {
            echo "<input type=\"hidden\" name=\"groupId\" value=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "id"), "html", null, true);
            echo "\">";
        }
        // line 36
        echo "
\t\t";
        // line 37
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        echo $_forms_->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "id" => "name", "name" => "name", "value" => ((array_key_exists("group", $context)) ? ($this->getAttribute($_group_, "name")) : (null)), "errors" => ((array_key_exists("group", $context)) ? ($this->getAttribute($_group_, "getErrors", array(0 => "name"), "method")) : (null)), "autofocus" => true, "required" => true, "translatable" => true));
        // line 47
        echo "

\t\t";
        // line 49
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Handle"), "id" => "handle", "name" => "handle", "value" => ((array_key_exists("group", $context)) ? ($this->getAttribute($_group_, "handle")) : (null)), "errors" => ((array_key_exists("group", $context)) ? ($this->getAttribute($_group_, "getErrors", array(0 => "handle"), "method")) : (null)), "required" => true));
        // line 56
        echo "

\t\t<hr>

\t\t<h2>";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("Permissions"), "html", null, true);
        echo "</h2>

\t\t";
        // line 62
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        $this->env->loadTemplate("_includes/permissions")->display(array("userOrGroup" => ((array_key_exists("group", $context)) ? ($_group_) : (null))));
        // line 63
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 71
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        if (((!array_key_exists("group", $context)) || (!$this->getAttribute($_group_, "handle")))) {
            // line 72
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/users/groups/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 72,  115 => 71,  108 => 65,  104 => 63,  101 => 62,  96 => 60,  90 => 56,  86 => 49,  82 => 47,  78 => 37,  75 => 36,  67 => 35,  62 => 32,  60 => 31,  56 => 27,  53 => 25,  50 => 24,  48 => 21,  42 => 17,  38 => 16,  36 => 15,  34 => 12,  32 => 6,  30 => 4,  24 => 1,);
    }
}
