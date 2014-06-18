<?php

/* _components/fieldtypes/Number/settings */
class __TwigTemplate_bb66b2bd597c95664519e68d240cf65790b36aff8b1f94d504ca886fdfea5fa7 extends Craft\BaseTemplate
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
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Min Value"), "id" => "min", "name" => "min", "value" => $this->getAttribute($_settings_, "min"), "size" => 5, "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "min"), "method")));
        // line 10
        echo "

";
        // line 12
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Max Value"), "id" => "max", "name" => "max", "value" => $this->getAttribute($_settings_, "max"), "size" => 5, "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "max"), "method")));
        // line 19
        echo "

";
        // line 21
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Decimal Points"), "id" => "decimals", "name" => "decimals", "value" => $this->getAttribute($_settings_, "decimals"), "size" => 1, "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "decimals"), "method")));
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Number/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  46 => 6,  43 => 7,  234 => 60,  231 => 59,  225 => 57,  220 => 56,  215 => 55,  212 => 54,  202 => 51,  195 => 49,  192 => 48,  176 => 42,  171 => 41,  167 => 40,  160 => 38,  146 => 36,  132 => 34,  119 => 25,  91 => 22,  86 => 21,  64 => 17,  55 => 9,  51 => 11,  25 => 4,  22 => 3,  81 => 40,  75 => 19,  72 => 31,  66 => 29,  63 => 16,  59 => 14,  54 => 24,  49 => 21,  42 => 14,  38 => 12,  31 => 5,  188 => 46,  179 => 13,  174 => 8,  166 => 4,  148 => 105,  143 => 97,  137 => 95,  133 => 93,  126 => 33,  120 => 85,  115 => 84,  108 => 83,  104 => 81,  100 => 73,  83 => 65,  73 => 12,  69 => 18,  65 => 54,  61 => 10,  57 => 50,  40 => 21,  36 => 19,  32 => 12,  29 => 5,  27 => 4,  21 => 2,  19 => 1,  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 144,  230 => 143,  219 => 142,  214 => 141,  209 => 53,  205 => 52,  198 => 129,  193 => 126,  189 => 124,  184 => 16,  181 => 44,  177 => 117,  173 => 108,  169 => 5,  165 => 96,  161 => 94,  157 => 84,  153 => 3,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 67,  116 => 24,  111 => 63,  109 => 62,  105 => 58,  102 => 57,  99 => 54,  95 => 23,  92 => 51,  90 => 66,  87 => 48,  84 => 44,  80 => 20,  78 => 62,  74 => 35,  71 => 31,  67 => 30,  62 => 26,  58 => 24,  56 => 23,  53 => 8,  50 => 8,  47 => 42,  44 => 28,  41 => 9,  37 => 10,  34 => 9,  30 => 8,  28 => 10,  26 => 5,  24 => 3,);
    }
}
