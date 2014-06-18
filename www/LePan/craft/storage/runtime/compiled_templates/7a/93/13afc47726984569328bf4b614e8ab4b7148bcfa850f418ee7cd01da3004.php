<?php

/* settings/users/_layout */
class __TwigTemplate_7a9313afc47726984569328bf4b614e8ab4b7148bcfa850f418ee7cd01da3004 extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Users");
        // line 6
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 10
        $context["tabs"] = array("groups" => array("label" => \Craft\Craft::t("User Groups"), "url" => \Craft\UrlHelper::getUrl("settings/users")), "fields" => array("label" => \Craft\Craft::t("Fields"), "url" => \Craft\UrlHelper::getUrl("settings/users/fields")), "settings" => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings/users/settings")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/users/_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  128 => 42,  120 => 37,  116 => 35,  111 => 32,  102 => 29,  95 => 28,  85 => 27,  76 => 26,  71 => 25,  64 => 21,  60 => 20,  56 => 18,  53 => 17,  47 => 14,  39 => 13,  37 => 12,  34 => 10,  32 => 6,  30 => 4,  24 => 1,);
    }
}
