<?php

/* {{object.etName}} */
class __TwigTemplate_24b958a2608d52017693b9a498701c8f92f85637fde67fa8e90f902e23f12ce4 extends Craft\BaseTemplate
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
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "etName"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.etName}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
