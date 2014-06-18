<?php

/* {{object.name}} */
class __TwigTemplate_0ce818a4f0608bf35d1253f7103930110fbb29faf9d1329b4b48ec40c6f2f75e extends Craft\BaseTemplate
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
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "name"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.name}}";
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
