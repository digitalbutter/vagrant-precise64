<?php

/* _includes/forms/file */
class __TwigTemplate_02ffaa4d36510b789b573c2f2f125111b83b3bc56d87c2ec108af4238ea8a938 extends Craft\BaseTemplate
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
        echo "<input type=\"file\"";
        // line 2
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"";
        }
        // line 3
        if (array_key_exists("class", $context)) {
            echo " class=\"";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\"";
        }
        // line 4
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"";
        }
        // line 5
        if (isset($context["autofocus"])) { $_autofocus_ = $context["autofocus"]; } else { $_autofocus_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (((array_key_exists("autofocus", $context) && $_autofocus_) && (!$this->getAttribute($this->getAttribute($_craft_, "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 6
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ((array_key_exists("disabled", $context) && $_disabled_)) {
            echo " disabled";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/file";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  103 => 24,  83 => 21,  72 => 19,  60 => 17,  53 => 16,  35 => 4,  26 => 7,  55 => 14,  41 => 12,  24 => 8,  104 => 62,  89 => 53,  75 => 40,  67 => 33,  64 => 28,  58 => 25,  54 => 23,  51 => 17,  47 => 15,  39 => 8,  36 => 7,  87 => 23,  81 => 21,  77 => 20,  33 => 6,  86 => 49,  82 => 47,  79 => 42,  70 => 14,  62 => 12,  49 => 15,  46 => 9,  37 => 7,  32 => 9,  22 => 2,  116 => 29,  112 => 27,  108 => 26,  102 => 61,  99 => 24,  95 => 23,  90 => 18,  74 => 16,  68 => 15,  65 => 18,  61 => 15,  50 => 17,  38 => 11,  34 => 8,  23 => 3,  21 => 2,  19 => 1,  739 => 227,  736 => 226,  728 => 233,  719 => 231,  716 => 230,  713 => 229,  711 => 226,  708 => 225,  701 => 222,  698 => 221,  695 => 220,  684 => 219,  681 => 218,  678 => 217,  675 => 216,  672 => 215,  666 => 211,  662 => 210,  658 => 209,  654 => 208,  651 => 207,  645 => 201,  638 => 198,  635 => 197,  633 => 196,  630 => 195,  623 => 193,  620 => 192,  617 => 191,  612 => 188,  599 => 186,  594 => 185,  590 => 183,  586 => 182,  583 => 181,  574 => 267,  568 => 265,  565 => 264,  560 => 263,  554 => 260,  549 => 259,  545 => 257,  542 => 256,  537 => 253,  529 => 251,  524 => 250,  512 => 247,  501 => 245,  498 => 244,  491 => 243,  480 => 242,  474 => 238,  472 => 207,  467 => 204,  465 => 181,  459 => 177,  453 => 176,  443 => 174,  439 => 173,  434 => 172,  430 => 171,  420 => 163,  412 => 160,  406 => 158,  403 => 157,  400 => 156,  391 => 155,  385 => 154,  380 => 153,  367 => 149,  354 => 143,  346 => 141,  341 => 140,  335 => 139,  329 => 136,  325 => 134,  320 => 131,  313 => 129,  297 => 127,  292 => 126,  285 => 124,  280 => 123,  275 => 121,  267 => 118,  264 => 117,  261 => 116,  258 => 115,  255 => 114,  252 => 113,  249 => 112,  246 => 111,  238 => 107,  231 => 106,  223 => 105,  220 => 104,  216 => 103,  213 => 102,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  166 => 88,  161 => 87,  158 => 86,  152 => 82,  149 => 81,  146 => 80,  143 => 79,  139 => 77,  129 => 75,  124 => 74,  121 => 73,  117 => 72,  113 => 71,  110 => 70,  107 => 69,  101 => 67,  96 => 66,  93 => 65,  30 => 11,  28 => 3,  128 => 36,  122 => 35,  119 => 34,  111 => 30,  106 => 29,  94 => 27,  88 => 22,  84 => 17,  80 => 24,  76 => 23,  71 => 35,  66 => 16,  63 => 20,  56 => 12,  52 => 10,  48 => 6,  45 => 13,  42 => 5,  31 => 7,  29 => 8,  27 => 9,  25 => 4,);
    }
}
