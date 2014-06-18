<?php

/* settings/sections/_entrytypes/edit */
class __TwigTemplate_6049c25f5fb7a764fe33ae477cafa68abe74a4d52f220bada1c5800d766b1f80 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 6
        ob_start();
        // line 7
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveEntryType\">
\t\t";
        // line 9
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($this->getAttribute($_section_, "type") == "single")) {
            // line 10
            echo "\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">
\t\t";
        } else {
            // line 12
            echo "\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections/";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_section_, "id"), "html", null, true);
            echo "/entrytypes\">
\t\t";
        }
        // line 14
        echo "\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "id"), "html", null, true);
        echo "\">
\t\t";
        // line 15
        if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
        if ($this->getAttribute($_entryType_, "id")) {
            echo "<input type=\"hidden\" name=\"entryTypeId\" value=\"";
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entryType_, "id"), "html", null, true);
            echo "\">";
        }
        // line 16
        echo "
\t\t";
        // line 17
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
        echo $_forms_->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this entry type will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute($_entryType_, "name"), "errors" => $this->getAttribute($_entryType_, "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true));
        // line 27
        echo "

\t\t";
        // line 29
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this entry type in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute($_entryType_, "handle"), "errors" => $this->getAttribute($_entryType_, "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 38
        echo "

\t\t";
        // line 40
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($this->getAttribute($_section_, "type") != "single")) {
            // line 41
            echo "\t\t\t<hr>

\t\t\t";
            // line 43
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Show title fields"), "name" => "hasTitleField", "toggle" => "titleLabel-container", "reverseToggle" => "titleFormat-container", "checked" => $this->getAttribute($_entryType_, "hasTitleField")));
            // line 49
            echo "

\t\t\t<div id=\"titleLabel-container\"";
            // line 51
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            if ((!$this->getAttribute($_entryType_, "hasTitleField"))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 52
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Title Field Label"), "instructions" => \Craft\Craft::t("What do you want the entries’ “Title” fields to be labeled?"), "id" => "titleLabel", "name" => "titleLabel", "value" => $this->getAttribute($_entryType_, "titleLabel"), "errors" => $this->getAttribute($_entryType_, "getErrors", array(0 => "titleLabel"), "method"), "required" => true));
            // line 60
            echo "
\t\t\t</div>

\t\t\t<div id=\"titleFormat-container\"";
            // line 63
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            if ($this->getAttribute($_entryType_, "hasTitleField")) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 64
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Title Format"), "instructions" => \Craft\Craft::t("What the auto-generated entry titles should look like. You can include tags that output entry properties, such as {ex}.", array("ex" => "<code>{myCustomField}</code>")), "id" => "titleFormat", "name" => "titleFormat", "value" => $this->getAttribute($_entryType_, "titleFormat"), "errors" => $this->getAttribute($_entryType_, "getErrors", array(0 => "titleFormat"), "method"), "required" => true));
            // line 72
            echo "
\t\t\t</div>
\t\t";
        }
        // line 75
        echo "
\t\t<hr>

\t\t";
        // line 78
        if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute($_entryType_, "getFieldLayout", array(), "method")));
        // line 81
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 91
        if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
        if ((!$this->getAttribute($_entryType_, "handle"))) {
            // line 92
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 92,  147 => 91,  140 => 85,  134 => 81,  131 => 78,  126 => 75,  121 => 72,  117 => 64,  110 => 63,  105 => 60,  101 => 52,  94 => 51,  90 => 49,  86 => 43,  82 => 41,  79 => 40,  75 => 38,  71 => 29,  67 => 27,  63 => 17,  60 => 16,  52 => 15,  46 => 14,  39 => 12,  35 => 10,  32 => 9,  28 => 7,  26 => 6,  24 => 3,);
    }
}
