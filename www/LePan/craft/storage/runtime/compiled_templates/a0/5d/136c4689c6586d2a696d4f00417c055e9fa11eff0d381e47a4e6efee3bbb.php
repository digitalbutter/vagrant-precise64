<?php

/* notes/{{object.slug}} */
class __TwigTemplate_a05d136c4689c6586d2a696d4f00417c055e9fa11eff0d381e47a4e6efee3bbb extends Craft\BaseTemplate
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
        echo "notes/";
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "notes/{{object.slug}}";
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
