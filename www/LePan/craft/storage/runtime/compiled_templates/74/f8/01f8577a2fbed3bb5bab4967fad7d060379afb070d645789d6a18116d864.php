<?php

/* entries/wines/{{object.id}} */
class __TwigTemplate_74f801f8577a2fbed3bb5bab4967fad7d060379afb070d645789d6a18116d864 extends Craft\BaseTemplate
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
        echo "entries/wines/";
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "id"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "entries/wines/{{object.id}}";
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
