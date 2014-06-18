<?php

/* _components/fieldtypes/RichText/settings */
class __TwigTemplate_4b7f063b30227868c3126edafd20df59c463a44d4494ec6f19139ee23268af62 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "

";
        // line 4
        if (isset($context["configOptions"])) { $_configOptions_ = $context["configOptions"]; } else { $_configOptions_ = null; }
        if ((twig_length_filter($this->env, $_configOptions_) > 1)) {
            // line 5
            echo "\t";
            ob_start();
            // line 6
            echo "\t\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["configOptions"])) { $_configOptions_ = $context["configOptions"]; } else { $_configOptions_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo $_forms_->getselect(array("id" => "configFle", "name" => "configFile", "options" => $_configOptions_, "value" => $this->getAttribute($_settings_, "configFile")));
            // line 11
            echo "
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } else {
            // line 14
            echo "\t";
            ob_start();
            // line 15
            echo "\t\t<p>";
            echo \Craft\Craft::t("You don’t have any <a href=\"http://buildwithcraft.com/docs/rich-text-fields#redactor-configs\" target=\"_blank\">Redactor configs</a> yet.");
            echo "</p>
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 18
        echo "
";
        // line 19
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["configInput"])) { $_configInput_ = $context["configInput"]; } else { $_configInput_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Config"), "instructions" => (((\Craft\Craft::t("You can save custom Redactor configs as .json files in craft/config/redactor/.") . " <a href=\"http://imperavi.com/redactor/docs/settings/\" target=\"_blank\">") . \Craft\Craft::t("View available settings")) . "</a>."), "id" => "configFile"), $_configInput_);
        // line 23
        echo "


";
        // line 26
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Clean up HTML?"), "instructions" => \Craft\Craft::t("Removes <code>&lt;span&gt;</code>’s, empty tags, and most <code>style</code> attributes on save."), "id" => "cleanupHtml", "name" => "cleanupHtml", "checked" => $this->getAttribute($_settings_, "cleanupHtml")));
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/RichText/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  45 => 15,  33 => 14,  68 => 32,  46 => 6,  43 => 7,  234 => 60,  231 => 59,  225 => 57,  220 => 56,  215 => 55,  212 => 54,  202 => 51,  195 => 49,  192 => 48,  176 => 42,  171 => 41,  167 => 40,  160 => 38,  146 => 36,  132 => 34,  119 => 25,  91 => 22,  86 => 21,  64 => 26,  55 => 19,  51 => 11,  25 => 4,  22 => 3,  81 => 40,  75 => 19,  72 => 31,  66 => 29,  63 => 16,  59 => 23,  54 => 24,  49 => 21,  42 => 14,  38 => 12,  31 => 6,  188 => 46,  179 => 13,  174 => 8,  166 => 4,  148 => 105,  143 => 97,  137 => 95,  133 => 93,  126 => 33,  120 => 85,  115 => 84,  108 => 83,  104 => 81,  100 => 73,  83 => 65,  73 => 12,  69 => 18,  65 => 54,  61 => 40,  57 => 33,  40 => 21,  36 => 19,  32 => 12,  29 => 12,  27 => 4,  21 => 2,  19 => 1,  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 144,  230 => 143,  219 => 142,  214 => 141,  209 => 53,  205 => 52,  198 => 129,  193 => 126,  189 => 124,  184 => 16,  181 => 44,  177 => 117,  173 => 108,  169 => 5,  165 => 96,  161 => 94,  157 => 84,  153 => 3,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 67,  116 => 24,  111 => 63,  109 => 62,  105 => 58,  102 => 57,  99 => 54,  95 => 23,  92 => 51,  90 => 66,  87 => 48,  84 => 44,  80 => 20,  78 => 62,  74 => 35,  71 => 31,  67 => 30,  62 => 26,  58 => 24,  56 => 23,  53 => 8,  50 => 32,  47 => 42,  44 => 28,  41 => 24,  37 => 11,  34 => 9,  30 => 8,  28 => 5,  26 => 5,  24 => 3,);
    }
}
