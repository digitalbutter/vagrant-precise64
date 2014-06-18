<?php

/* _includes/forms/checkboxGroup */
class __TwigTemplate_745fde80a2c0d5b8cf722777128e883ccc13cc6ce035bbc57d9c88dca77689b0 extends Craft\BaseTemplate
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
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if ((array_key_exists("name", $context) && $_name_)) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["options"] = ((array_key_exists("options", $context)) ? ($_options_) : (array()));
        // line 6
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context["values"] = ((array_key_exists("values", $context)) ? ($_values_) : (array()));
        // line 7
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        $context["name"] = (((array_key_exists("name", $context) && $_name_)) ? (($_name_ . "[]")) : (null));
        // line 9
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_options_);
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
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 10
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            $context["optionLabel"] = (($this->getAttribute($_option_, "label", array(), "any", true, true)) ? ($this->getAttribute($_option_, "label")) : ($_option_));
            // line 11
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            $context["optionValue"] = (($this->getAttribute($_option_, "value", array(), "any", true, true)) ? ($this->getAttribute($_option_, "value")) : ($_key_));
            // line 12
            echo "<div>
\t\t";
            // line 13
            if (isset($context["optionLabel"])) { $_optionLabel_ = $context["optionLabel"]; } else { $_optionLabel_ = null; }
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["optionValue"])) { $_optionValue_ = $context["optionValue"]; } else { $_optionValue_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if (isset($context["autofocus"])) { $_autofocus_ = $context["autofocus"]; } else { $_autofocus_ = null; }
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $this->env->loadTemplate("_includes/forms/checkbox")->display(array("label" => $_optionLabel_, "id" => ((($this->getAttribute($_loop_, "first") && array_key_exists("id", $context))) ? ($_id_) : (null)), "name" => $_name_, "value" => $_optionValue_, "checked" => twig_in_filter($_optionValue_, $_values_), "autofocus" => (((array_key_exists("autofocus", $context) && $_autofocus_) && $this->getAttribute($_loop_, "first")) && (!$this->getAttribute($this->getAttribute($_craft_, "request"), "isMobileBrowser", array(0 => true), "method")))));
            // line 21
            echo "\t</div>";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxGroup";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  56 => 10,  22 => 2,  81 => 27,  58 => 21,  53 => 20,  46 => 17,  41 => 15,  39 => 13,  36 => 12,  34 => 11,  43 => 16,  32 => 6,  76 => 21,  70 => 6,  50 => 12,  30 => 8,  24 => 5,  80 => 15,  65 => 13,  49 => 7,  31 => 14,  23 => 2,  91 => 15,  67 => 13,  64 => 5,  59 => 11,  44 => 6,  26 => 5,  21 => 2,  19 => 1,  691 => 289,  687 => 287,  684 => 286,  678 => 283,  671 => 280,  665 => 276,  660 => 275,  655 => 272,  649 => 269,  646 => 268,  641 => 267,  635 => 263,  626 => 261,  622 => 260,  619 => 259,  603 => 257,  600 => 256,  597 => 255,  594 => 254,  590 => 253,  585 => 252,  582 => 251,  578 => 250,  574 => 249,  572 => 248,  564 => 246,  556 => 241,  546 => 235,  541 => 232,  534 => 227,  531 => 225,  527 => 223,  521 => 220,  514 => 217,  509 => 216,  503 => 212,  496 => 208,  493 => 206,  488 => 203,  482 => 201,  478 => 200,  473 => 199,  467 => 198,  464 => 196,  455 => 194,  448 => 189,  443 => 186,  436 => 183,  428 => 182,  422 => 178,  418 => 177,  415 => 176,  412 => 174,  408 => 172,  401 => 169,  397 => 168,  394 => 167,  390 => 166,  385 => 163,  381 => 161,  376 => 158,  373 => 157,  370 => 156,  363 => 152,  359 => 151,  356 => 150,  352 => 149,  349 => 148,  344 => 145,  339 => 140,  336 => 139,  332 => 138,  330 => 137,  327 => 136,  321 => 135,  317 => 134,  313 => 132,  308 => 125,  304 => 123,  299 => 116,  296 => 115,  292 => 113,  285 => 106,  281 => 105,  278 => 104,  274 => 102,  267 => 95,  263 => 94,  259 => 92,  254 => 85,  251 => 84,  247 => 82,  241 => 76,  238 => 75,  234 => 73,  231 => 72,  228 => 71,  224 => 69,  217 => 67,  211 => 65,  200 => 64,  195 => 58,  190 => 57,  186 => 56,  178 => 55,  173 => 54,  168 => 53,  165 => 52,  161 => 51,  158 => 50,  155 => 49,  145 => 46,  143 => 45,  137 => 42,  134 => 41,  130 => 39,  127 => 38,  124 => 37,  117 => 32,  113 => 29,  111 => 28,  105 => 16,  98 => 22,  95 => 21,  86 => 20,  78 => 19,  72 => 22,  69 => 17,  63 => 12,  60 => 8,  54 => 9,  51 => 296,  48 => 7,  45 => 11,  42 => 10,  38 => 9,  35 => 7,  29 => 5,  27 => 7,  25 => 2,);
    }
}
