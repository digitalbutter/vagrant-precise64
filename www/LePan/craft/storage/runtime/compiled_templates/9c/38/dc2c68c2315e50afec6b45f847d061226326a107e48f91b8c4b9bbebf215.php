<?php

/* _includes/forms/textarea */
class __TwigTemplate_9c38dc2c68c2315e50afec6b45f847d061226326a107e48f91b8c4b9bbebf215 extends Craft\BaseTemplate
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
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        if (isset($context["placeholder"])) { $_placeholder_ = $context["placeholder"]; } else { $_placeholder_ = null; }
        if (isset($context["size"])) { $_size_ = $context["size"]; } else { $_size_ = null; }
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((array_key_exists("class", $context) && $_class_)) ? ($_class_) : (null)), 2 => (((array_key_exists("placeholder", $context) && $_placeholder_)) ? ("nicetext") : (null)), 3 => (((array_key_exists("size", $context) && $_size_)) ? (null) : ("fullwidth")))), " ");
        // line 8
        if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
        $context["rows"] = ((array_key_exists("rows", $context)) ? ($_rows_) : (2));
        // line 9
        if (isset($context["cols"])) { $_cols_ = $context["cols"]; } else { $_cols_ = null; }
        $context["cols"] = ((array_key_exists("cols", $context)) ? ($_cols_) : (50));
        // line 11
        echo "<textarea class=\"";
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        echo twig_escape_filter($this->env, $_class_, "html", null, true);
        echo "\" rows=\"";
        if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
        echo twig_escape_filter($this->env, $_rows_, "html", null, true);
        echo "\" cols=\"";
        if (isset($context["cols"])) { $_cols_ = $context["cols"]; } else { $_cols_ = null; }
        echo twig_escape_filter($this->env, $_cols_, "html", null, true);
        echo "\"";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"";
        }
        // line 13
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"";
        }
        // line 14
        if (isset($context["autofocus"])) { $_autofocus_ = $context["autofocus"]; } else { $_autofocus_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (((array_key_exists("autofocus", $context) && $_autofocus_) && (!$this->getAttribute($this->getAttribute($_craft_, "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 15
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ((array_key_exists("disabled", $context) && $_disabled_)) {
            echo " disabled";
        }
        // line 16
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            if (isset($context["placeholder"])) { $_placeholder_ = $context["placeholder"]; } else { $_placeholder_ = null; }
            echo twig_escape_filter($this->env, $_placeholder_, "html", null, true);
            echo "\"";
        }
        echo ">";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? ($_value_) : (null)), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/textarea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  41 => 12,  24 => 8,  104 => 62,  89 => 53,  75 => 40,  67 => 33,  64 => 28,  58 => 25,  54 => 23,  51 => 17,  47 => 15,  39 => 8,  36 => 7,  87 => 23,  81 => 21,  77 => 19,  33 => 6,  86 => 49,  82 => 47,  79 => 42,  70 => 14,  62 => 12,  49 => 10,  46 => 9,  37 => 7,  32 => 5,  22 => 2,  116 => 29,  112 => 27,  108 => 26,  102 => 61,  99 => 24,  95 => 57,  90 => 18,  74 => 16,  68 => 15,  65 => 13,  61 => 15,  50 => 17,  38 => 14,  34 => 8,  23 => 3,  21 => 2,  19 => 1,  739 => 227,  736 => 226,  728 => 233,  719 => 231,  716 => 230,  713 => 229,  711 => 226,  708 => 225,  701 => 222,  698 => 221,  695 => 220,  684 => 219,  681 => 218,  678 => 217,  675 => 216,  672 => 215,  666 => 211,  662 => 210,  658 => 209,  654 => 208,  651 => 207,  645 => 201,  638 => 198,  635 => 197,  633 => 196,  630 => 195,  623 => 193,  620 => 192,  617 => 191,  612 => 188,  599 => 186,  594 => 185,  590 => 183,  586 => 182,  583 => 181,  574 => 267,  568 => 265,  565 => 264,  560 => 263,  554 => 260,  549 => 259,  545 => 257,  542 => 256,  537 => 253,  529 => 251,  524 => 250,  512 => 247,  501 => 245,  498 => 244,  491 => 243,  480 => 242,  474 => 238,  472 => 207,  467 => 204,  465 => 181,  459 => 177,  453 => 176,  443 => 174,  439 => 173,  434 => 172,  430 => 171,  420 => 163,  412 => 160,  406 => 158,  403 => 157,  400 => 156,  391 => 155,  385 => 154,  380 => 153,  367 => 149,  354 => 143,  346 => 141,  341 => 140,  335 => 139,  329 => 136,  325 => 134,  320 => 131,  313 => 129,  297 => 127,  292 => 126,  285 => 124,  280 => 123,  275 => 121,  267 => 118,  264 => 117,  261 => 116,  258 => 115,  255 => 114,  252 => 113,  249 => 112,  246 => 111,  238 => 107,  231 => 106,  223 => 105,  220 => 104,  216 => 103,  213 => 102,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  166 => 88,  161 => 87,  158 => 86,  152 => 82,  149 => 81,  146 => 80,  143 => 79,  139 => 77,  129 => 75,  124 => 74,  121 => 73,  117 => 72,  113 => 71,  110 => 70,  107 => 69,  101 => 67,  96 => 66,  93 => 65,  30 => 11,  28 => 4,  128 => 36,  122 => 35,  119 => 34,  111 => 30,  106 => 29,  94 => 27,  88 => 26,  84 => 17,  80 => 24,  76 => 23,  71 => 35,  66 => 16,  63 => 20,  56 => 12,  52 => 10,  48 => 13,  45 => 12,  42 => 9,  31 => 7,  29 => 5,  27 => 9,  25 => 4,);
    }
}
