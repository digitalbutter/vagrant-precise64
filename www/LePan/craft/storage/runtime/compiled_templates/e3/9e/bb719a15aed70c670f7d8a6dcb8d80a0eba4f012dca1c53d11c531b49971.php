<?php

/* settings/assets/_layout */
class __TwigTemplate_e39ebb719a15aed70c670f7d8a6dcb8d80a0eba4f012dca1c53d11c531b49971 extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Asset Settings");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 9
        $context["tabs"] = array("sources" => array("label" => \Craft\Craft::t("Sources"), "url" => \Craft\UrlHelper::getUrl("settings/assets")), "transforms" => array("label" => \Craft\Craft::t("Image Transforms"), "url" => \Craft\UrlHelper::getUrl("settings/assets/transforms")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  149 => 41,  141 => 36,  137 => 34,  132 => 31,  122 => 28,  114 => 27,  103 => 26,  93 => 25,  84 => 24,  79 => 23,  74 => 20,  68 => 19,  60 => 18,  56 => 17,  51 => 14,  47 => 13,  44 => 12,  38 => 9,  30 => 8,  28 => 9,  26 => 4,  24 => 2,);
    }
}
