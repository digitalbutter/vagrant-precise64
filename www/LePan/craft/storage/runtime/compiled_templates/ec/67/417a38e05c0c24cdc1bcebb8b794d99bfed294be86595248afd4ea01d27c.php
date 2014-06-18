<?php

/*  */
class __TwigTemplate_ec67417a38e05c0c24cdc1bcebb8b794d99bfed294be86595248afd4ea01d27c extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl("dashboard"));
    }

    public function getTemplateName()
    {
        return "";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
