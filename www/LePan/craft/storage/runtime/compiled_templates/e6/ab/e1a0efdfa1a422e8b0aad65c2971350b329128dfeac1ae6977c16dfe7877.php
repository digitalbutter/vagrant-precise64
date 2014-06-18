<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_e6abe1a0efdfa1a422e8b0aad65c2971350b329128dfeac1ae6977c16dfe7877 extends Craft\BaseTemplate
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
        if (isset($context["on"])) { $_on_ = $context["on"]; } else { $_on_ = null; }
        $context["on"] = ((array_key_exists("on", $context)) ? ($_on_) : (false));
        // line 2
        if (isset($context["small"])) { $_small_ = $context["small"]; } else { $_small_ = null; }
        $context["small"] = ((array_key_exists("small", $context)) ? ($_small_) : (false));
        // line 4
        echo "<div class=\"lightswitch";
        if (isset($context["on"])) { $_on_ = $context["on"]; } else { $_on_ = null; }
        if ($_on_) {
            echo " on";
        }
        if (isset($context["small"])) { $_small_ = $context["small"]; } else { $_small_ = null; }
        if ($_small_) {
            echo " small";
        }
        echo "\"";
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            if (isset($context["toggle"])) { $_toggle_ = $context["toggle"]; } else { $_toggle_ = null; }
            echo twig_escape_filter($this->env, $_toggle_, "html", null, true);
            echo "\"";
        }
        echo " tabindex=\"0\">
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t";
        // line 10
        if (array_key_exists("name", $context)) {
            // line 11
            echo "<input type=\"hidden\" name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" value=\"";
            if (isset($context["on"])) { $_on_ = $context["on"]; } else { $_on_ = null; }
            echo (($_on_) ? ("1") : (""));
            echo "\"";
            if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
            if ((array_key_exists("disabled", $context) && $_disabled_)) {
                echo " disabled";
            }
            echo ">";
        }
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  85 => 33,  52 => 23,  47 => 19,  37 => 13,  306 => 70,  300 => 66,  287 => 64,  282 => 63,  276 => 60,  272 => 58,  246 => 56,  221 => 52,  218 => 51,  202 => 48,  196 => 42,  193 => 41,  187 => 38,  181 => 35,  176 => 32,  163 => 30,  146 => 25,  133 => 23,  129 => 22,  123 => 19,  119 => 18,  93 => 15,  90 => 34,  75 => 31,  61 => 9,  57 => 25,  66 => 13,  56 => 10,  22 => 2,  81 => 27,  58 => 21,  53 => 7,  46 => 17,  41 => 15,  39 => 14,  36 => 12,  34 => 11,  43 => 16,  32 => 5,  76 => 21,  70 => 6,  50 => 12,  30 => 8,  24 => 5,  80 => 32,  65 => 13,  49 => 10,  31 => 14,  23 => 2,  91 => 15,  67 => 13,  64 => 5,  59 => 11,  44 => 18,  26 => 3,  21 => 2,  19 => 1,  691 => 289,  687 => 287,  684 => 286,  678 => 283,  671 => 280,  665 => 276,  660 => 275,  655 => 272,  649 => 269,  646 => 268,  641 => 267,  635 => 263,  626 => 261,  622 => 260,  619 => 259,  603 => 257,  600 => 256,  597 => 255,  594 => 254,  590 => 253,  585 => 252,  582 => 251,  578 => 250,  574 => 249,  572 => 248,  564 => 246,  556 => 241,  546 => 235,  541 => 232,  534 => 227,  531 => 225,  527 => 223,  521 => 220,  514 => 217,  509 => 216,  503 => 212,  496 => 208,  493 => 206,  488 => 203,  482 => 201,  478 => 200,  473 => 199,  467 => 198,  464 => 196,  455 => 194,  448 => 189,  443 => 186,  436 => 183,  428 => 182,  422 => 178,  418 => 177,  415 => 176,  412 => 174,  408 => 172,  401 => 169,  397 => 168,  394 => 167,  390 => 166,  385 => 163,  381 => 161,  376 => 158,  373 => 157,  370 => 156,  363 => 152,  359 => 151,  356 => 150,  352 => 149,  349 => 148,  344 => 145,  339 => 140,  336 => 139,  332 => 138,  330 => 137,  327 => 136,  321 => 135,  317 => 134,  313 => 132,  308 => 125,  304 => 123,  299 => 116,  296 => 115,  292 => 113,  285 => 106,  281 => 105,  278 => 104,  274 => 102,  267 => 95,  263 => 94,  259 => 92,  254 => 85,  251 => 84,  247 => 82,  241 => 76,  238 => 75,  234 => 73,  231 => 72,  228 => 55,  224 => 53,  217 => 67,  211 => 65,  200 => 64,  195 => 58,  190 => 57,  186 => 56,  178 => 55,  173 => 54,  168 => 53,  165 => 52,  161 => 51,  158 => 29,  155 => 49,  145 => 46,  143 => 45,  137 => 24,  134 => 41,  130 => 39,  127 => 38,  124 => 37,  117 => 32,  113 => 29,  111 => 28,  105 => 16,  98 => 22,  95 => 21,  86 => 20,  78 => 19,  72 => 12,  69 => 29,  63 => 27,  60 => 8,  54 => 24,  51 => 11,  48 => 7,  45 => 11,  42 => 17,  38 => 9,  35 => 7,  29 => 5,  27 => 7,  25 => 4,);
    }
}
