<?php

/* {{object.type}} */
class __TwigTemplate_74e08fead49cf7d832ddac7aa2bbeb3b5f51e1b0c8f9fbcec3e971fe916b066b extends Craft\BaseTemplate
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
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "type"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{{object.type}}";
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
