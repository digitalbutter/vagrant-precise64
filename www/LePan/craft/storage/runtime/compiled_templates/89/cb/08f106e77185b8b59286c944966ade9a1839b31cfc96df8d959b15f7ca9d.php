<?php

/* settings/users/fields */
class __TwigTemplate_89cb08f106e77185b8b59286c944966ade9a1839b31cfc96df8d959b15f7ca9d extends Craft\BaseTemplate
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
        $context["selectedTab"] = "fields";
        // line 6
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields#field-layouts";
        // line 9
        ob_start();
        // line 10
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"users/saveFieldLayout\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">

\t\t";
        // line 14
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute($this->getAttribute($_craft_, "fields"), "getLayoutByType", array(0 => "User"), "method"), "customizableTabs" => false, "pretendTabName" => \Craft\Craft::t("Profile")));
        // line 19
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 21
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
        return "settings/users/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  45 => 19,  42 => 14,  36 => 10,  34 => 9,  32 => 6,  30 => 4,  24 => 1,);
    }
}
