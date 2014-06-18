<?php

/* wines/{{object.postDate.year}}/{{object.slug}} */
class __TwigTemplate_2b08bdfb5f7a73f3bc444c4b9e94f9f4afb7ea044425972eff53d0ae3651e3d5 extends Craft\BaseTemplate
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
        echo "wines/";
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_object_, "postDate"), "year"), "html", null, true);
        echo "/";
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "wines/{{object.postDate.year}}/{{object.slug}}";
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
