<?php

/* 2573b8b4f24d9bca67a8981e6b815f3d */
class __TwigTemplate_850a0b223997a88a563d106896ab3a8f75792beb085180c08a42f558df81dea4 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_special/email");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_special/email";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "<p>Hey ";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "friendlyName"), "html", null, true);
        echo ",</p>

<p>To reset your ";
        // line 5
        if (isset($context["siteName"])) { $_siteName_ = $context["siteName"]; } else { $_siteName_ = null; }
        echo twig_escape_filter($this->env, $_siteName_, "html", null, true);
        echo " password, click on this link:</p>

<p>";
        // line 7
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        echo twig_escape_filter($this->env, $_link_, "html", null, true);
        echo "</p>

<p>If you weren't expecting this email, just ignore it.</p>
";
        $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "2573b8b4f24d9bca67a8981e6b815f3d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
