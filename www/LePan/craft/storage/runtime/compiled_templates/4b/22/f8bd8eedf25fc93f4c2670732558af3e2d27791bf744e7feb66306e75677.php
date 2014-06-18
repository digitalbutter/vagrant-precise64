<?php

/* _elements/modalbody */
class __TwigTemplate_4b22f8bd8eedf25fc93f4c2670732558af3e2d27791bf744e7feb66306e75677 extends Craft\BaseTemplate
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
        echo "<div class=\"content";
        if (isset($context["showSidebar"])) { $_showSidebar_ = $context["showSidebar"]; } else { $_showSidebar_ = null; }
        if ($_showSidebar_) {
            echo " has-sidebar";
        }
        echo "\">
\t<div class=\"sidebar";
        // line 2
        if (isset($context["showSidebar"])) { $_showSidebar_ = $context["showSidebar"]; } else { $_showSidebar_ = null; }
        if ((!$_showSidebar_)) {
            echo " hidden";
        }
        echo "\">
\t\t<nav>
\t\t\t";
        // line 4
        $this->env->loadTemplate("_elements/sources")->display($context);
        // line 5
        echo "\t\t</nav>
\t</div>

\t";
        // line 8
        $this->env->loadTemplate("_elements/indexcontainer")->display($context);
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/modalbody";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  42 => 8,  37 => 5,  35 => 4,  27 => 2,  19 => 1,);
    }
}
