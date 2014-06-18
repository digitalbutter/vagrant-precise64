<?php

/* 403 */
class __TwigTemplate_83bf7b81acf2b9a7cae70a5b2963d858d8861c2398e3e8c5673f9448b4b4804d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/message");

        $this->blocks = array(
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Unauthorized");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>";
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h2>
\t<p>
\t\t";
        // line 7
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if ($_message_) {
            // line 8
            echo "\t\t\t";
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $_message_, "html", null, true);
            echo "
\t\t";
        } else {
            // line 10
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("You don’t have the proper credentials to access this page."), "html", null, true);
            echo "
\t\t";
        }
        // line 12
        echo "\t</p>
";
    }

    public function getTemplateName()
    {
        return "403";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  50 => 10,  43 => 8,  40 => 7,  33 => 5,  30 => 4,  25 => 2,);
    }
}
