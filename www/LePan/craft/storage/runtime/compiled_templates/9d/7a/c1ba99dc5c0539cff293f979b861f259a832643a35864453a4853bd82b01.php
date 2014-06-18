<?php

/* settings/general/_logo */
class __TwigTemplate_9d7ac1ba99dc5c0539cff293f979b861f259a832643a35864453a4853bd82b01 extends Craft\BaseTemplate
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
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (\Craft\craft()->getEdition() < $_CraftClient_)
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
<div class=\"cp-logo\">

\t<div class=\"current-logo\"
\t\t";
        // line 6
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($this->getAttribute($_craft_, "rebrand"), "isLogoUploaded")) {
            // line 7
            echo "style=\"background-image: url(";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "rebrand"), "logo"), "url"), "html", null, true);
            echo "); width: ";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "rebrand"), "logo"), "width"), "html", null, true);
            echo "px; height: ";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "rebrand"), "logo"), "height"), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo ">
\t</div>

\t<div class=\"logo-controls\">
\t\t";
        // line 12
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($this->getAttribute($_craft_, "rebrand"), "isLogoUploaded")) {
            // line 13
            echo "\t\t\t<div class=\"btn upload-logo\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Change logo"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"btn delete-logo\">";
            // line 14
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete logo"), "html", null, true);
            echo "</div>
\t\t";
        } else {
            // line 16
            echo "\t\t\t<div class=\"btn upload-logo\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upload a logo"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 18
        echo "\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "settings/general/_logo";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 16,  60 => 14,  55 => 13,  52 => 12,  34 => 7,  31 => 6,  25 => 2,  19 => 1,  135 => 82,  129 => 78,  125 => 76,  122 => 75,  119 => 74,  116 => 73,  114 => 72,  111 => 71,  108 => 70,  105 => 69,  102 => 68,  99 => 67,  96 => 66,  94 => 65,  91 => 64,  87 => 61,  83 => 59,  79 => 58,  72 => 54,  67 => 51,  62 => 45,  58 => 43,  54 => 35,  50 => 33,  46 => 8,  42 => 23,  38 => 15,  32 => 11,  30 => 10,  28 => 5,  26 => 3,  24 => 2,);
    }
}
