<?php

/* settings/globals/_edit */
class __TwigTemplate_a8332af8292f2bf0654226fc54b4e7aa36f57b5bb741d25bed50edefae2edf67 extends Craft\BaseTemplate
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/globals";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 8
        ob_start();
        // line 9
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"globals/saveSet\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/globals\">
\t\t";
        // line 12
        if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
        if ($this->getAttribute($_globalSet_, "id")) {
            echo "<input type=\"hidden\" name=\"setId\" value=\"";
            if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_globalSet_, "id"), "html", null, true);
            echo "\">";
        }
        // line 13
        echo "
\t\t<div id=\"set-settings\">
\t\t\t";
        // line 15
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
        echo $_forms_->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this global set will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute($_globalSet_, "name"), "errors" => $this->getAttribute($_globalSet_, "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 26
        echo "

\t\t\t";
        // line 28
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this global set in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute($_globalSet_, "handle"), "errors" => $this->getAttribute($_globalSet_, "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 37
        echo "

\t\t</div>

\t\t<div id=\"set-fieldlayout\" class=\"hidden\">
\t\t\t";
        // line 42
        if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute($_globalSet_, "getFieldLayout", array(), "method"), "customizableTabs" => false, "tab" => "fieldlayout"));
        // line 47
        echo "\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
        if ((!$this->getAttribute($_globalSet_, "handle"))) {
            // line 59
            $context["js"] = ('' === $tmp = "\t\tnew Craft.HandleGenerator('#name', '#handle');
\t") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 62
            if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
            \Craft\craft()->templates->includeJs($_js_);
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/globals/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 62,  86 => 59,  83 => 58,  76 => 52,  69 => 47,  66 => 42,  59 => 37,  55 => 28,  51 => 26,  47 => 15,  43 => 13,  35 => 12,  30 => 9,  28 => 8,  26 => 5,  24 => 3,);
    }
}
