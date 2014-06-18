<?php

/* _components/widgets/RecentEntries/body */
class __TwigTemplate_bdf3be2932578b386967eae441e04ce53c5e73b7347c7d00ffcfd4d3d4517314 extends Craft\BaseTemplate
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
        echo "<div class=\"recententries-container\">
\t";
        // line 2
        if (isset($context["entries"])) { $_entries_ = $context["entries"]; } else { $_entries_ = null; }
        if (twig_length_filter($this->env, $_entries_)) {
            // line 3
            echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
            // line 4
            if (isset($context["entries"])) { $_entries_ = $context["entries"]; } else { $_entries_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_entries_);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 5
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 7
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "title"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<span class=\"light\">
\t\t\t\t\t\t\t";
                // line 9
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if ($this->getAttribute($_entry_, "postDate")) {
                    // line 10
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "postDate"), "localeDate", array(), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t\t\t\t";
                if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
                if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
                if (($_CraftEdition_ >= $_CraftClient_)) {
                    // line 13
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_entry_, "author")) ? (\Craft\Craft::t("by {author}", array("author" => $this->getAttribute($this->getAttribute($_entry_, "author"), "username")))) : ("")), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</table>
\t";
        } else {
            // line 21
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No entries exist yet."), "html", null, true);
            echo "</p>
\t";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  81 => 21,  77 => 19,  33 => 5,  86 => 20,  82 => 19,  79 => 18,  70 => 14,  62 => 12,  49 => 10,  46 => 9,  37 => 7,  32 => 5,  22 => 2,  116 => 29,  112 => 27,  108 => 26,  102 => 25,  99 => 24,  95 => 19,  90 => 18,  74 => 16,  68 => 15,  65 => 13,  61 => 13,  50 => 17,  38 => 14,  34 => 8,  23 => 3,  21 => 2,  19 => 1,  739 => 227,  736 => 226,  728 => 233,  719 => 231,  716 => 230,  713 => 229,  711 => 226,  708 => 225,  701 => 222,  698 => 221,  695 => 220,  684 => 219,  681 => 218,  678 => 217,  675 => 216,  672 => 215,  666 => 211,  662 => 210,  658 => 209,  654 => 208,  651 => 207,  645 => 201,  638 => 198,  635 => 197,  633 => 196,  630 => 195,  623 => 193,  620 => 192,  617 => 191,  612 => 188,  599 => 186,  594 => 185,  590 => 183,  586 => 182,  583 => 181,  574 => 267,  568 => 265,  565 => 264,  560 => 263,  554 => 260,  549 => 259,  545 => 257,  542 => 256,  537 => 253,  529 => 251,  524 => 250,  512 => 247,  501 => 245,  498 => 244,  491 => 243,  480 => 242,  474 => 238,  472 => 207,  467 => 204,  465 => 181,  459 => 177,  453 => 176,  443 => 174,  439 => 173,  434 => 172,  430 => 171,  420 => 163,  412 => 160,  406 => 158,  403 => 157,  400 => 156,  391 => 155,  385 => 154,  380 => 153,  367 => 149,  354 => 143,  346 => 141,  341 => 140,  335 => 139,  329 => 136,  325 => 134,  320 => 131,  313 => 129,  297 => 127,  292 => 126,  285 => 124,  280 => 123,  275 => 121,  267 => 118,  264 => 117,  261 => 116,  258 => 115,  255 => 114,  252 => 113,  249 => 112,  246 => 111,  238 => 107,  231 => 106,  223 => 105,  220 => 104,  216 => 103,  213 => 102,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  166 => 88,  161 => 87,  158 => 86,  152 => 82,  149 => 81,  146 => 80,  143 => 79,  139 => 77,  129 => 75,  124 => 74,  121 => 73,  117 => 72,  113 => 71,  110 => 70,  107 => 69,  101 => 67,  96 => 66,  93 => 65,  30 => 4,  28 => 4,  128 => 36,  122 => 35,  119 => 34,  111 => 30,  106 => 29,  94 => 27,  88 => 26,  84 => 17,  80 => 24,  76 => 23,  71 => 22,  66 => 21,  63 => 20,  56 => 12,  52 => 10,  48 => 13,  45 => 12,  42 => 7,  31 => 7,  29 => 6,  27 => 3,  25 => 3,);
    }
}
