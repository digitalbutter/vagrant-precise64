<?php

/* entries/notes/{{object.id}}/drafts/{{object.draftId}} */
class __TwigTemplate_60cf27947441123d84b155cd0e004af03e08f34778ccfc73a86d08e35d7f9c9e extends Craft\BaseTemplate
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
        echo "entries/notes/";
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "id"), "html", null, true);
        echo "/drafts/";
        if (isset($context["object"])) { $_object_ = $context["object"]; } else { $_object_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_object_, "draftId"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "entries/notes/{{object.id}}/drafts/{{object.draftId}}";
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
