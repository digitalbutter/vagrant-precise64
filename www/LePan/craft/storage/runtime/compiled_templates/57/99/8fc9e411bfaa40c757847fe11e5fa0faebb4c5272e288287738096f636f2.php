<?php

/* _includes/forms/radio */
class __TwigTemplate_57998fc9e411bfaa40c757847fe11e5fa0faebb4c5272e288287738096f636f2 extends Craft\BaseTemplate
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
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        $context["value"] = ((array_key_exists("value", $context)) ? ($_value_) : ("1"));
        // line 3
        echo "<label>
\t<input type=\"radio\" value=\"";
        // line 4
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "\"";
        // line 5
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"";
        }
        // line 6
        if (array_key_exists("class", $context)) {
            echo " class=\"";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\"";
        }
        // line 7
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"";
        }
        // line 8
        if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
        if ((array_key_exists("checked", $context) && $_checked_)) {
            echo " checked";
        }
        // line 9
        if (isset($context["autofocus"])) { $_autofocus_ = $context["autofocus"]; } else { $_autofocus_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (((array_key_exists("autofocus", $context) && $_autofocus_) && (!$this->getAttribute($this->getAttribute($_craft_, "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 10
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ((array_key_exists("disabled", $context) && $_disabled_)) {
            echo " disabled";
        }
        echo ">
\t";
        // line 11
        if (array_key_exists("label", $context)) {
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo $_label_;
        }
        // line 12
        echo "</label>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/radio";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  46 => 6,  43 => 7,  234 => 60,  231 => 59,  225 => 57,  220 => 56,  215 => 55,  212 => 54,  202 => 51,  195 => 49,  192 => 48,  176 => 42,  171 => 41,  167 => 40,  160 => 38,  146 => 36,  132 => 34,  119 => 25,  91 => 22,  86 => 21,  64 => 17,  55 => 9,  51 => 11,  25 => 4,  22 => 3,  81 => 40,  75 => 19,  72 => 31,  66 => 29,  63 => 16,  59 => 14,  54 => 24,  49 => 21,  42 => 14,  38 => 12,  31 => 5,  188 => 46,  179 => 13,  174 => 8,  166 => 4,  148 => 105,  143 => 97,  137 => 95,  133 => 93,  126 => 33,  120 => 85,  115 => 84,  108 => 83,  104 => 81,  100 => 73,  83 => 65,  73 => 12,  69 => 18,  65 => 54,  61 => 10,  57 => 50,  40 => 41,  36 => 6,  32 => 30,  29 => 5,  27 => 4,  21 => 2,  19 => 1,  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 144,  230 => 143,  219 => 142,  214 => 141,  209 => 53,  205 => 52,  198 => 129,  193 => 126,  189 => 124,  184 => 16,  181 => 44,  177 => 117,  173 => 108,  169 => 5,  165 => 96,  161 => 94,  157 => 84,  153 => 3,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 67,  116 => 24,  111 => 63,  109 => 62,  105 => 58,  102 => 57,  99 => 54,  95 => 23,  92 => 51,  90 => 66,  87 => 48,  84 => 44,  80 => 20,  78 => 62,  74 => 35,  71 => 31,  67 => 30,  62 => 26,  58 => 24,  56 => 23,  53 => 8,  50 => 8,  47 => 42,  44 => 16,  41 => 9,  37 => 10,  34 => 9,  30 => 8,  28 => 5,  26 => 5,  24 => 3,);
    }
}
