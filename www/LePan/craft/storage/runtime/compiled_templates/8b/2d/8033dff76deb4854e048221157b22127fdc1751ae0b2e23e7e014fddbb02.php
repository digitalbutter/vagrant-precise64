<?php

/* _components/widgets/Updates/body */
class __TwigTemplate_8b2d8033dff76deb4854e048221157b22127fdc1751ae0b2e23e7e014fddbb02 extends Craft\BaseTemplate
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
        if (isset($context["total"])) { $_total_ = $context["total"]; } else { $_total_ = null; }
        if ($_total_) {
            // line 2
            echo "\t<p class=\"centeralign\">
\t\t";
            // line 3
            if (isset($context["total"])) { $_total_ = $context["total"]; } else { $_total_ = null; }
            if (($_total_ == 1)) {
                // line 4
                echo "\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("One update available!"), "html", null, true);
                echo "
\t\t";
            } else {
                // line 6
                echo "\t\t\t";
                if (isset($context["total"])) { $_total_ = $context["total"]; } else { $_total_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t("{total} updates available!", array("total" => $_total_)), "html", null, true);
                echo "
\t\t";
            }
            // line 8
            echo "\t\t<a class=\"go\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Go to Updates"), "html", null, true);
            echo "</a>
\t</p>
";
        } else {
            // line 11
            echo "\t<p class=\"centeralign\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Congrats! You’re up-to-date."), "html", null, true);
            echo "</p>
\t<p class=\"centeralign\"><a class=\"btn\" data-icon=\"refresh\">";
            // line 12
            echo twig_escape_filter($this->env, \Craft\Craft::t("Check again"), "html", null, true);
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/Updates/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  50 => 11,  41 => 8,  34 => 6,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
