<?php

/* settings/general/index */
class __TwigTemplate_5777fe1e4b85a96cbb37b6324381ffd9e628665fab2a95371672d8597e707d5c extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        $context["title"] = \Craft\Craft::t("General Settings");
        // line 5
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 10
        ob_start();
        // line 11
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"systemSettings/saveGeneralSettings\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">

\t\t";
        // line 15
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo $_forms_->getlightswitchField(array("first" => true, "label" => \Craft\Craft::t("System Status"), "id" => "on", "name" => "on", "on" => $this->getAttribute($_info_, "on"), "onLabel" => \Craft\Craft::t("On"), "offLabel" => \Craft\Craft::t("Off")));
        // line 23
        echo "

\t\t";
        // line 25
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Site Name"), "id" => "siteName", "name" => "siteName", "value" => $this->getAttribute($_info_, "siteName"), "autofocus" => true, "required" => true, "errors" => $this->getAttribute($_info_, "getErrors", array(0 => "siteName"), "method")));
        // line 33
        echo "

\t\t";
        // line 35
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Site URL"), "id" => "siteUrl", "class" => "ltr", "name" => "siteUrl", "value" => $this->getAttribute($_info_, "siteUrl"), "required" => true, "errors" => $this->getAttribute($_info_, "getErrors", array(0 => "siteUrl"), "method")));
        // line 43
        echo "

\t\t";
        // line 45
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
        if (isset($context["timezoneOptions"])) { $_timezoneOptions_ = $context["timezoneOptions"]; } else { $_timezoneOptions_ = null; }
        echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Timezone"), "id" => "timezone", "name" => "timezone", "value" => $this->getAttribute($_info_, "timezone"), "options" => $_timezoneOptions_));
        // line 51
        echo "

\t\t<div class=\"buttons\">
\t\t\t<input class=\"btn submit\" type=\"submit\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>

\t";
        // line 58
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (($_CraftEdition_ >= $_CraftClient_)) {
            // line 59
            echo "\t\t<hr>

\t\t";
            // line 61
            \Craft\craft()->templates->includeTranslations(
            	"Are you sure you want to delete the logo?"
            );
            // line 64
            echo "
\t\t";
            // line 65
            \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.ui.widget.js");
            // line 66
            echo "\t\t";
            \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.fileupload.js");
            // line 67
            echo "\t\t";
            \Craft\craft()->templates->includeJsResource("lib/imgareaselect/jquery.imgareaselect.pack.js");
            // line 68
            echo "\t\t";
            \Craft\craft()->templates->includeJsResource("js/rebrand.js");
            // line 69
            echo "\t\t";
            \Craft\craft()->templates->includeCssResource("lib/imgareaselect/imgareaselect-animated.css");
            // line 70
            echo "\t\t";
            \Craft\craft()->templates->includeCssResource("css/rebrand.css");
            // line 71
            echo "
\t\t";
            // line 72
            ob_start();
            // line 73
            echo "\t\t\t";
            $this->env->loadTemplate("settings/general/_logo")->display($context);
            // line 74
            echo "\t\t";
            $context["logoInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 75
            echo "
\t\t";
            // line 76
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["logoInput"])) { $_logoInput_ = $context["logoInput"]; } else { $_logoInput_ = null; }
            echo $_forms_->getfield(array("label" => \Craft\Craft::t("Logo")), $_logoInput_);
            // line 78
            echo "

\t\t<div class=\"clear\"></div>
\t";
        }
        // line 82
        echo "
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/general/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 82,  129 => 78,  125 => 76,  122 => 75,  119 => 74,  116 => 73,  114 => 72,  111 => 71,  108 => 70,  105 => 69,  102 => 68,  99 => 67,  96 => 66,  94 => 65,  91 => 64,  87 => 61,  83 => 59,  79 => 58,  72 => 54,  67 => 51,  62 => 45,  58 => 43,  54 => 35,  50 => 33,  46 => 25,  42 => 23,  38 => 15,  32 => 11,  30 => 10,  28 => 5,  26 => 3,  24 => 2,);
    }
}
