<?php

/* _includes/tabs */
class __TwigTemplate_517eb915845fb7b0a2a37d1792f948ff15dd035a1c8aff919175636f15bfc244 extends Craft\BaseTemplate
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
        $context["title"] = ((array_key_exists("title", $context)) ? (array_key_exists("title", $context)) : (null));
        // line 2
        echo "
<nav id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 5
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tabs_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
            // line 6
            echo "\t\t\t";
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            if ($_tab_) {
                // line 7
                echo "\t\t\t\t";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (isset($context["selectedTab"])) { $_selectedTab_ = $context["selectedTab"]; } else { $_selectedTab_ = null; }
                if (isset($context["tabId"])) { $_tabId_ = $context["tabId"]; } else { $_tabId_ = null; }
                $context["tabIsSelected"] = (((!array_key_exists("selectedTab", $context)) && $this->getAttribute($_loop_, "first")) || (array_key_exists("selectedTab", $context) && ($_selectedTab_ == $_tabId_)));
                // line 9
                if (isset($context["tabIsSelected"])) { $_tabIsSelected_ = $context["tabIsSelected"]; } else { $_tabIsSelected_ = null; }
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                if (($_tabIsSelected_ && ($_title_ != $this->getAttribute($_tab_, "label")))) {
                    // line 10
                    echo "\t\t\t\t\t";
                    if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                    if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                    $context["title"] = (($_title_ . " - ") . $this->getAttribute($_tab_, "label"));
                    // line 11
                    echo "\t\t\t\t";
                }
                // line 13
                echo "<li><a id=\"tab-";
                if (isset($context["tabId"])) { $_tabId_ = $context["tabId"]; } else { $_tabId_ = null; }
                echo twig_escape_filter($this->env, $_tabId_, "html", null, true);
                echo "\" class=\"tab";
                if (isset($context["tabIsSelected"])) { $_tabIsSelected_ = $context["tabIsSelected"]; } else { $_tabIsSelected_ = null; }
                if ($_tabIsSelected_) {
                    echo " sel";
                }
                if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                if ($this->getAttribute($_tab_, "class", array(), "any", true, true)) {
                    echo " ";
                    if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tab_, "class"), "html", null, true);
                }
                echo "\" href=\"";
                if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tab_, "url"), "html", null, true);
                echo "\">";
                if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tab_, "label"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            // line 15
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  67 => 13,  64 => 11,  59 => 10,  44 => 6,  26 => 5,  21 => 2,  19 => 1,  691 => 289,  687 => 287,  684 => 286,  678 => 283,  671 => 280,  665 => 276,  660 => 275,  655 => 272,  649 => 269,  646 => 268,  641 => 267,  635 => 263,  626 => 261,  622 => 260,  619 => 259,  603 => 257,  600 => 256,  597 => 255,  594 => 254,  590 => 253,  585 => 252,  582 => 251,  578 => 250,  574 => 249,  572 => 248,  564 => 246,  556 => 241,  546 => 235,  541 => 232,  534 => 227,  531 => 225,  527 => 223,  521 => 220,  514 => 217,  509 => 216,  503 => 212,  496 => 208,  493 => 206,  488 => 203,  482 => 201,  478 => 200,  473 => 199,  467 => 198,  464 => 196,  455 => 194,  448 => 189,  443 => 186,  436 => 183,  428 => 182,  422 => 178,  418 => 177,  415 => 176,  412 => 174,  408 => 172,  401 => 169,  397 => 168,  394 => 167,  390 => 166,  385 => 163,  381 => 161,  376 => 158,  373 => 157,  370 => 156,  363 => 152,  359 => 151,  356 => 150,  352 => 149,  349 => 148,  344 => 145,  339 => 140,  336 => 139,  332 => 138,  330 => 137,  327 => 136,  321 => 135,  317 => 134,  313 => 132,  308 => 125,  304 => 123,  299 => 116,  296 => 115,  292 => 113,  285 => 106,  281 => 105,  278 => 104,  274 => 102,  267 => 95,  263 => 94,  259 => 92,  254 => 85,  251 => 84,  247 => 82,  241 => 76,  238 => 75,  234 => 73,  231 => 72,  228 => 71,  224 => 69,  217 => 67,  211 => 65,  200 => 64,  195 => 58,  190 => 57,  186 => 56,  178 => 55,  173 => 54,  168 => 53,  165 => 52,  161 => 51,  158 => 50,  155 => 49,  145 => 46,  143 => 45,  137 => 42,  134 => 41,  130 => 39,  127 => 38,  124 => 37,  117 => 32,  113 => 29,  111 => 28,  105 => 16,  98 => 22,  95 => 21,  86 => 20,  78 => 19,  72 => 18,  69 => 17,  63 => 16,  60 => 15,  54 => 9,  51 => 296,  48 => 7,  45 => 11,  42 => 10,  38 => 7,  35 => 6,  29 => 5,  27 => 4,  25 => 2,);
    }
}
