<?php

/* settings/users/settings */
class __TwigTemplate_636ce9043e8b64495ff27eb17159cab7a0459d767b6f6000d451f15b98fe7d6c extends Craft\BaseTemplate
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
        $context["selectedTab"] = "settings";
        // line 6
        $context["docsUrl"] = "http://buildwithcraft.com/docs/users";
        // line 8
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 11
        if ((!array_key_exists("settings", $context))) {
            // line 12
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context["settings"] = $this->getAttribute($this->getAttribute($_craft_, "systemSettings"), "users");
        }
        // line 16
        ob_start();
        // line 17
        echo "\t<form id=\"settings-form\" method=\"post\" class=\"centered\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"userSettings/saveUserSettings\">

\t\t\t";
        // line 20
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Verify email addresses?"), "instructions" => \Craft\Craft::t("Should new email addresses be verified before getting saved to user accounts? (This also affects new user registration.)"), "name" => "requireEmailVerification", "checked" => $this->getAttribute($_settings_, "requireEmailVerification")));
        // line 25
        echo "

\t\t\t";
        // line 27
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getcheckboxField(array("first" => true, "label" => \Craft\Craft::t("Allow public registration?"), "name" => "allowPublicRegistration", "checked" => $this->getAttribute($_settings_, "allowPublicRegistration"), "toggle" => "publicRegistrationSettings"));
        // line 33
        echo "

\t\t\t<div id=\"publicRegistrationSettings\"";
        // line 35
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((!$this->getAttribute($_settings_, "allowPublicRegistration"))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t\t\t";
        // line 36
        $context["groups"] = array(0 => array("label" => \Craft\Craft::t("None"), "value" => ""));
        // line 37
        echo "\t\t\t\t";
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "userGroups"), "getAllGroups", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 38
            echo "\t\t\t\t\t";
            if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context["groups"] = twig_array_merge($_groups_, array(0 => array("label" => $this->getAttribute($_group_, "name"), "value" => $this->getAttribute($_group_, "id"))));
            // line 39
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t\t\t\t";
        // line 41
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Default User Group"), "instructions" => \Craft\Craft::t("Choose a user group that publicly-registered members will be added to by default."), "name" => "defaultGroup", "options" => $_groups_, "value" => $this->getAttribute($_settings_, "defaultGroup")));
        // line 47
        echo "
\t\t\t</div>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/users/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 51,  99 => 47,  94 => 41,  91 => 40,  85 => 39,  80 => 38,  74 => 37,  72 => 36,  65 => 35,  61 => 33,  57 => 27,  53 => 25,  49 => 20,  44 => 17,  42 => 16,  38 => 12,  36 => 11,  34 => 8,  32 => 6,  30 => 4,  24 => 1,);
    }
}
