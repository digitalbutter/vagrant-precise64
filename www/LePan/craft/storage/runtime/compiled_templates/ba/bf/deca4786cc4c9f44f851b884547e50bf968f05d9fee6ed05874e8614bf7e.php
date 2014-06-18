<?php

/* _components/fieldtypes/elementfieldsettings */
class __TwigTemplate_babfdeca4786cc4c9f44f851b884547e50bf968f05d9fee6ed05874e8614bf7e extends Craft\BaseTemplate
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
        // line 3
        if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
        if ($_sources_) {
            // line 4
            echo "\t";
            if (isset($context["allowMultipleSources"])) { $_allowMultipleSources_ = $context["allowMultipleSources"]; } else { $_allowMultipleSources_ = null; }
            if ($_allowMultipleSources_) {
                // line 5
                echo "\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_forms_->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env, $_type_))), "id" => "sources", "name" => "sources", "options" => $_sources_, "values" => $this->getAttribute($_settings_, "sources")));
                // line 12
                echo "
\t";
            } else {
                // line 14
                echo "\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Source"), "instructions" => \Craft\Craft::t("Which source do you want to select {type} from?", array("type" => twig_lower_filter($this->env, $_type_))), "id" => "source", "name" => "source", "options" => $_sources_, "value" => $this->getAttribute($_settings_, "source")));
                // line 21
                echo "
\t";
            }
        } else {
            // line 24
            echo "\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["allowMultipleSources"])) { $_allowMultipleSources_ = $context["allowMultipleSources"]; } else { $_allowMultipleSources_ = null; }
            echo $_forms_->getfield(array("label" => (($_allowMultipleSources_) ? (\Craft\Craft::t("Sources")) : (\Craft\Craft::t("Source")))), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 26
            echo "
";
        }
        // line 28
        echo "
";
        // line 29
        if (isset($context["targetLocaleField"])) { $_targetLocaleField_ = $context["targetLocaleField"]; } else { $_targetLocaleField_ = null; }
        echo twig_escape_filter($this->env, $_targetLocaleField_, "html", null, true);
        echo "

";
        // line 31
        if (isset($context["allowLimit"])) { $_allowLimit_ = $context["allowLimit"]; } else { $_allowLimit_ = null; }
        if ($_allowLimit_) {
            // line 32
            echo "\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env, $_type_))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute($_settings_, "limit"), "size" => 2, "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "limit"), "method")));
            // line 40
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  75 => 32,  72 => 31,  66 => 29,  63 => 28,  59 => 26,  54 => 24,  49 => 21,  42 => 14,  38 => 12,  31 => 5,  188 => 22,  179 => 13,  174 => 8,  166 => 4,  148 => 105,  143 => 97,  137 => 95,  133 => 93,  126 => 91,  120 => 85,  115 => 84,  108 => 83,  104 => 81,  100 => 73,  83 => 65,  73 => 58,  69 => 56,  65 => 54,  61 => 52,  57 => 50,  40 => 41,  36 => 39,  32 => 30,  29 => 29,  27 => 4,  21 => 2,  19 => 1,  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 144,  230 => 143,  219 => 142,  214 => 141,  209 => 140,  205 => 138,  198 => 129,  193 => 126,  189 => 124,  184 => 16,  181 => 119,  177 => 117,  173 => 108,  169 => 5,  165 => 96,  161 => 94,  157 => 84,  153 => 3,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 67,  116 => 66,  111 => 63,  109 => 62,  105 => 58,  102 => 57,  99 => 54,  95 => 70,  92 => 51,  90 => 66,  87 => 48,  84 => 44,  80 => 42,  78 => 62,  74 => 35,  71 => 31,  67 => 30,  62 => 26,  58 => 24,  56 => 23,  53 => 22,  50 => 43,  47 => 42,  44 => 16,  41 => 15,  37 => 10,  34 => 9,  30 => 8,  28 => 7,  26 => 5,  24 => 3,);
    }
}
