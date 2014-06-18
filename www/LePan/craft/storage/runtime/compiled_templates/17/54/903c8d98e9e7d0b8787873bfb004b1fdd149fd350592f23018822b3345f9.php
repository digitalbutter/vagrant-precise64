<?php

/* field_permissions */
class __TwigTemplate_1754903c8d98e9e7d0b8787873bfb004b1fdd149fd350592f23018822b3345f9 extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Field Permissions");
        // line 5
        $context["content"] = ('' === $tmp = "
<table id=\"fields\" class=\"data fullwidth collapsible\">

</table>

") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "field_permissions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  24 => 3,);
    }
}
