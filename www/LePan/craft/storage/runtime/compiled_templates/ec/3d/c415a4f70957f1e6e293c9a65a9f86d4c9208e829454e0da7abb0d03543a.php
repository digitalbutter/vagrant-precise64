<?php

/* _components/fieldtypes/Matrix/input */
class __TwigTemplate_ec3dc415a4f70957f1e6e293c9a65a9f86d4c9208e829454e0da7abb0d03543a extends Craft\BaseTemplate
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
        echo "<input type=\"hidden\" name=\"";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "\" value=\"\">

<div class=\"matrix\" id=\"";
        // line 3
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">
\t<div class=\"blocks\">
\t\t";
        // line 5
        $context["totalNewBlocks"] = 0;
        // line 6
        echo "\t\t";
        if (isset($context["blocks"])) { $_blocks_ = $context["blocks"]; } else { $_blocks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_blocks_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 7
            echo "\t\t\t";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            $context["blockId"] = $this->getAttribute($_block_, "id");
            // line 8
            echo "\t\t\t";
            if (isset($context["blockId"])) { $_blockId_ = $context["blockId"]; } else { $_blockId_ = null; }
            if ((!$_blockId_)) {
                // line 9
                echo "\t\t\t\t";
                if (isset($context["totalNewBlocks"])) { $_totalNewBlocks_ = $context["totalNewBlocks"]; } else { $_totalNewBlocks_ = null; }
                $context["totalNewBlocks"] = ($_totalNewBlocks_ + 1);
                // line 10
                echo "\t\t\t\t";
                if (isset($context["totalNewBlocks"])) { $_totalNewBlocks_ = $context["totalNewBlocks"]; } else { $_totalNewBlocks_ = null; }
                $context["blockId"] = ("new" . $_totalNewBlocks_);
                // line 11
                echo "\t\t\t";
            }
            // line 12
            echo "
\t\t\t<div class=\"matrixblock";
            // line 13
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if ((!$this->getAttribute($_block_, "enabled"))) {
                echo " disabled";
            }
            echo "\" data-id=\"";
            if (isset($context["blockId"])) { $_blockId_ = $context["blockId"]; } else { $_blockId_ = null; }
            echo twig_escape_filter($this->env, $_blockId_, "html", null, true);
            echo "\"";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if ($this->getAttribute($_block_, "collapsed")) {
                echo " data-collapsed=\"1\"";
            }
            echo ">
\t\t\t\t";
            // line 14
            if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
            if ((!$_static_)) {
                // line 15
                echo "\t\t\t\t\t<input type=\"hidden\" name=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "[";
                if (isset($context["blockId"])) { $_blockId_ = $context["blockId"]; } else { $_blockId_ = null; }
                echo twig_escape_filter($this->env, $_blockId_, "html", null, true);
                echo "][type]\" value=\"";
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "getType", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
                // line 16
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "[";
                if (isset($context["blockId"])) { $_blockId_ = $context["blockId"]; } else { $_blockId_ = null; }
                echo twig_escape_filter($this->env, $_blockId_, "html", null, true);
                echo "][enabled]\" value=\"";
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                if ($this->getAttribute($_block_, "enabled")) {
                    echo "1";
                }
                echo "\">
\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t<div class=\"status off\" title=\"";
                // line 18
                echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
                echo "\"></div>
\t\t\t\t\t\t<a class=\"settings icon menubtn\" title=\"";
                // line 19
                echo twig_escape_filter($this->env, \Craft\Craft::t("Actions"), "html", null, true);
                echo "\" role=\"button\"></a>
\t\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t<li><a data-icon=\"collapse\" data-action=\"collapse\">";
                // line 22
                echo twig_escape_filter($this->env, \Craft\Craft::t("Collapse"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\">";
                // line 23
                echo twig_escape_filter($this->env, \Craft\Craft::t("Expand"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li";
                // line 24
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                if ((!$this->getAttribute($_block_, "enabled"))) {
                    echo " class=\"hidden\"";
                }
                echo "><a data-icon=\"disabled\" data-action=\"disable\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Disable"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t<li";
                // line 25
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                if ($this->getAttribute($_block_, "enabled")) {
                    echo " class=\"hidden\"";
                }
                echo "><a data-icon=\"enabled\" data-action=\"enable\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Enable"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<hr class=\"padded\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t";
                // line 29
                if (isset($context["blockTypes"])) { $_blockTypes_ = $context["blockTypes"]; } else { $_blockTypes_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_blockTypes_);
                foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<li><a data-icon=\"+\" data-action=\"add\" data-type=\"";
                    if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "handle"), "html", null, true);
                    echo "\">";
                    if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Add {type} above", array("type" => \Craft\Craft::t($this->getAttribute($_blockType_, "name")))), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<hr class=\"padded\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t<li><a data-icon=\"remove\" data-action=\"delete\">";
                // line 35
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"move icon\" title=\"";
                // line 38
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t<div class=\"fields\">
\t\t\t\t\t";
            // line 42
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["blockId"])) { $_blockId_ = $context["blockId"]; } else { $_blockId_ = null; }
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
            $this->env->loadTemplate("_includes/fields")->display(array_merge($context, array("namespace" => ((($_name_ . "[") . $_blockId_) . "][fields]"), "element" => $_block_, "fields" => $this->getAttribute($this->getAttribute($this->getAttribute($_block_, "getType", array(), "method"), "getFieldLayout", array(), "method"), "getFields", array(), "method"), "static" => $_static_)));
            // line 48
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t</div>
\t";
        // line 52
        if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
        if ((!$_static_)) {
            // line 53
            echo "\t\t<div class=\"buttons\">
\t\t\t<div class=\"btngroup\">
\t\t\t\t";
            // line 55
            if (isset($context["blockTypes"])) { $_blockTypes_ = $context["blockTypes"]; } else { $_blockTypes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_blockTypes_);
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
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 56
                echo "\t\t\t\t\t<div class=\"btn";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ($this->getAttribute($_loop_, "first")) {
                    echo " add icon";
                }
                echo "\" data-type=\"";
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "handle"), "html", null, true);
                echo "\">";
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_blockType_, "name")), "html", null, true);
                echo "</div>
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t</div>

\t\t\t<div class=\"btn add icon menubtn hidden\">";
            // line 60
            echo twig_escape_filter($this->env, \Craft\Craft::t("Add a block"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t";
            // line 63
            if (isset($context["blockTypes"])) { $_blockTypes_ = $context["blockTypes"]; } else { $_blockTypes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_blockTypes_);
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 64
                echo "\t\t\t\t\t\t<li><a data-type=\"";
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "handle"), "html", null, true);
                echo "\">";
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_blockType_, "name")), "html", null, true);
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 70
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 70,  300 => 66,  287 => 64,  282 => 63,  276 => 60,  272 => 58,  246 => 56,  221 => 52,  218 => 51,  202 => 48,  196 => 42,  193 => 41,  187 => 38,  181 => 35,  176 => 32,  163 => 30,  146 => 25,  133 => 23,  129 => 22,  123 => 19,  119 => 18,  93 => 15,  90 => 14,  75 => 13,  61 => 9,  57 => 8,  66 => 13,  56 => 10,  22 => 2,  81 => 27,  58 => 21,  53 => 7,  46 => 17,  41 => 15,  39 => 13,  36 => 12,  34 => 6,  43 => 16,  32 => 5,  76 => 21,  70 => 6,  50 => 12,  30 => 8,  24 => 5,  80 => 15,  65 => 10,  49 => 7,  31 => 14,  23 => 2,  91 => 15,  67 => 13,  64 => 5,  59 => 11,  44 => 6,  26 => 3,  21 => 2,  19 => 1,  691 => 289,  687 => 287,  684 => 286,  678 => 283,  671 => 280,  665 => 276,  660 => 275,  655 => 272,  649 => 269,  646 => 268,  641 => 267,  635 => 263,  626 => 261,  622 => 260,  619 => 259,  603 => 257,  600 => 256,  597 => 255,  594 => 254,  590 => 253,  585 => 252,  582 => 251,  578 => 250,  574 => 249,  572 => 248,  564 => 246,  556 => 241,  546 => 235,  541 => 232,  534 => 227,  531 => 225,  527 => 223,  521 => 220,  514 => 217,  509 => 216,  503 => 212,  496 => 208,  493 => 206,  488 => 203,  482 => 201,  478 => 200,  473 => 199,  467 => 198,  464 => 196,  455 => 194,  448 => 189,  443 => 186,  436 => 183,  428 => 182,  422 => 178,  418 => 177,  415 => 176,  412 => 174,  408 => 172,  401 => 169,  397 => 168,  394 => 167,  390 => 166,  385 => 163,  381 => 161,  376 => 158,  373 => 157,  370 => 156,  363 => 152,  359 => 151,  356 => 150,  352 => 149,  349 => 148,  344 => 145,  339 => 140,  336 => 139,  332 => 138,  330 => 137,  327 => 136,  321 => 135,  317 => 134,  313 => 132,  308 => 125,  304 => 123,  299 => 116,  296 => 115,  292 => 113,  285 => 106,  281 => 105,  278 => 104,  274 => 102,  267 => 95,  263 => 94,  259 => 92,  254 => 85,  251 => 84,  247 => 82,  241 => 76,  238 => 75,  234 => 73,  231 => 72,  228 => 55,  224 => 53,  217 => 67,  211 => 65,  200 => 64,  195 => 58,  190 => 57,  186 => 56,  178 => 55,  173 => 54,  168 => 53,  165 => 52,  161 => 51,  158 => 29,  155 => 49,  145 => 46,  143 => 45,  137 => 24,  134 => 41,  130 => 39,  127 => 38,  124 => 37,  117 => 32,  113 => 29,  111 => 28,  105 => 16,  98 => 22,  95 => 21,  86 => 20,  78 => 19,  72 => 12,  69 => 11,  63 => 12,  60 => 8,  54 => 9,  51 => 296,  48 => 7,  45 => 11,  42 => 10,  38 => 9,  35 => 7,  29 => 5,  27 => 7,  25 => 2,);
    }
}
