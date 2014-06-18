<?php

/* 404 */
class __TwigTemplate_3d8e6a2f0e280e15cefe050454f5ed349025f3b3d29de14be3a19e7bc36d0ed4 extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Page Not Found");
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
            echo twig_escape_filter($this->env, \Craft\Craft::t("The requested URL was not found on this server."), "html", null, true);
            echo "
\t\t";
        }
        // line 12
        echo "\t</p>
";
    }

    public function getTemplateName()
    {
        return "404";
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
