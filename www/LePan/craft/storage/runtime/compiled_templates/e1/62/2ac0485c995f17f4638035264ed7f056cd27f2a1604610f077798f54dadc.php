<?php

/* aa6f1ed38d785b7475f13e33e4250cb3 */
class __TwigTemplate_e1622ac0485c995f17f4638035264ed7f056cd27f2a1604610f077798f54dadc extends Craft\BaseTemplate
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
        echo "Hey ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "friendlyName"), "html", null, true);
        echo ",

To reset your ";
        // line 3
        if (isset($context["siteName"])) { $_siteName_ = $context["siteName"]; } else { $_siteName_ = null; }
        echo twig_escape_filter($this->env, $_siteName_, "html", null, true);
        echo " password, click on this link:

";
        // line 5
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        echo twig_escape_filter($this->env, $_link_, "html", null, true);
        echo "

If you weren't expecting this email, just ignore it.";
    }

    public function getTemplateName()
    {
        return "aa6f1ed38d785b7475f13e33e4250cb3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  39 => 7,  33 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
