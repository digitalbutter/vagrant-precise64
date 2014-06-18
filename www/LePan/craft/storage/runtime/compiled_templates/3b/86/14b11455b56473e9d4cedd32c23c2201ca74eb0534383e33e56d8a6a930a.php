<?php

/* _includes/field */
class __TwigTemplate_3b8614b11455b56473e9d4cedd32c23c2201ca74eb0534383e33e56d8a6a930a extends Craft\BaseTemplate
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
        if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
        $context["static"] = ((array_key_exists("static", $context)) ? ($_static_) : (false));
        // line 2
        if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
        $context["element"] = ((array_key_exists("element", $context)) ? ($_element_) : (null));
        // line 3
        echo "
";
        // line 4
        if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        $context["value"] = (($_element_) ? ($this->getAttribute($_element_, $this->getAttribute($_field_, "handle"))) : (null));
        // line 5
        if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
        if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        $context["errors"] = ((($_element_ && (!$_static_))) ? ($this->getAttribute($_element_, "getErrors", array(0 => $this->getAttribute($_field_, "handle")), "method")) : (null));
        // line 6
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
        $context["fieldtype"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "populateFieldType", array(0 => $_field_, 1 => $_element_), "method");
        // line 7
        if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        $context["instructions"] = (((!$_static_)) ? (\Craft\Craft::t($this->getAttribute($_field_, "instructions"))) : (null));
        // line 8
        echo "
";
        // line 9
        if (isset($context["fieldtype"])) { $_fieldtype_ = $context["fieldtype"]; } else { $_fieldtype_ = null; }
        if ($_fieldtype_) {
            // line 10
            echo "\t";
            if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
            if ((!$_static_)) {
                // line 11
                echo "\t\t";
                if (isset($context["fieldtype"])) { $_fieldtype_ = $context["fieldtype"]; } else { $_fieldtype_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                $context["input"] = $this->getAttribute($_fieldtype_, "getInputHtml", array(0 => $this->getAttribute($_field_, "handle"), 1 => $_value_), "method");
                // line 12
                echo "\t";
            } else {
                // line 13
                echo "\t\t";
                if (isset($context["fieldtype"])) { $_fieldtype_ = $context["fieldtype"]; } else { $_fieldtype_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                $context["input"] = $this->getAttribute($_fieldtype_, "getStaticHtml", array(0 => $_value_), "method");
                // line 14
                echo "\t";
            }
        } else {
            // line 16
            echo "\t";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute($_field_, "type")))) . "</p>");
        }
        // line 18
        echo "
";
        // line 19
        if (isset($context["instructions"])) { $_instructions_ = $context["instructions"]; } else { $_instructions_ = null; }
        if (isset($context["input"])) { $_input_ = $context["input"]; } else { $_input_ = null; }
        if (($_instructions_ || $_input_)) {
            // line 20
            echo "\t";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if (isset($context["instructions"])) { $_instructions_ = $context["instructions"]; } else { $_instructions_ = null; }
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if (isset($context["input"])) { $_input_ = $context["input"]; } else { $_input_ = null; }
            $this->env->loadTemplate("_includes/forms/field")->display(array("label" => twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_field_, "name"))), "required" => (((!$_static_)) ? ($_required_) : (false)), "instructions" => $_instructions_, "id" => $this->getAttribute($_field_, "handle"), "errors" => $_errors_, "input" => $_input_));
        }
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  82 => 19,  79 => 18,  70 => 14,  62 => 12,  49 => 9,  46 => 8,  37 => 6,  32 => 5,  22 => 2,  116 => 29,  112 => 27,  108 => 26,  102 => 25,  99 => 24,  95 => 19,  90 => 18,  74 => 16,  68 => 25,  65 => 13,  61 => 19,  50 => 17,  38 => 14,  34 => 8,  23 => 3,  21 => 2,  19 => 1,  739 => 227,  736 => 226,  728 => 233,  719 => 231,  716 => 230,  713 => 229,  711 => 226,  708 => 225,  701 => 222,  698 => 221,  695 => 220,  684 => 219,  681 => 218,  678 => 217,  675 => 216,  672 => 215,  666 => 211,  662 => 210,  658 => 209,  654 => 208,  651 => 207,  645 => 201,  638 => 198,  635 => 197,  633 => 196,  630 => 195,  623 => 193,  620 => 192,  617 => 191,  612 => 188,  599 => 186,  594 => 185,  590 => 183,  586 => 182,  583 => 181,  574 => 267,  568 => 265,  565 => 264,  560 => 263,  554 => 260,  549 => 259,  545 => 257,  542 => 256,  537 => 253,  529 => 251,  524 => 250,  512 => 247,  501 => 245,  498 => 244,  491 => 243,  480 => 242,  474 => 238,  472 => 207,  467 => 204,  465 => 181,  459 => 177,  453 => 176,  443 => 174,  439 => 173,  434 => 172,  430 => 171,  420 => 163,  412 => 160,  406 => 158,  403 => 157,  400 => 156,  391 => 155,  385 => 154,  380 => 153,  367 => 149,  354 => 143,  346 => 141,  341 => 140,  335 => 139,  329 => 136,  325 => 134,  320 => 131,  313 => 129,  297 => 127,  292 => 126,  285 => 124,  280 => 123,  275 => 121,  267 => 118,  264 => 117,  261 => 116,  258 => 115,  255 => 114,  252 => 113,  249 => 112,  246 => 111,  238 => 107,  231 => 106,  223 => 105,  220 => 104,  216 => 103,  213 => 102,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  166 => 88,  161 => 87,  158 => 86,  152 => 82,  149 => 81,  146 => 80,  143 => 79,  139 => 77,  129 => 75,  124 => 74,  121 => 73,  117 => 72,  113 => 71,  110 => 70,  107 => 69,  101 => 67,  96 => 66,  93 => 65,  30 => 4,  28 => 4,  128 => 36,  122 => 35,  119 => 34,  111 => 30,  106 => 29,  94 => 27,  88 => 26,  84 => 17,  80 => 24,  76 => 23,  71 => 22,  66 => 21,  63 => 20,  56 => 11,  52 => 10,  48 => 13,  45 => 12,  42 => 7,  31 => 7,  29 => 6,  27 => 3,  25 => 3,);
    }
}
