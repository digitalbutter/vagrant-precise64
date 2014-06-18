<?php

/* news/{{object.postDate.year}}/{{object.slug}} */
class __TwigTemplate_81ddc6d300181ec16e828b9bc96c89659edb427fcb93bd7e840582bceb15af37 extends Craft\BaseTemplate
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
        echo "news/";
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_object_, "postDate"), "year"), "html", null, true);
        echo "/";
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "news/{{object.postDate.year}}/{{object.slug}}";
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
