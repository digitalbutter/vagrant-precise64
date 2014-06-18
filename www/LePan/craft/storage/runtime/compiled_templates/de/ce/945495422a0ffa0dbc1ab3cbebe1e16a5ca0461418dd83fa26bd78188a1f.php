<?php

/* _components/fieldtypes/PlainText/input */
class __TwigTemplate_dece945495422a0ffa0dbc1ab3cbebe1e16a5ca0461418dd83fa26bd78188a1f extends Craft\BaseTemplate
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
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["config"] = array("id" => $_name_, "name" => $_name_, "value" => $_value_, "class" => "nicetext", "placeholder" => $this->getAttribute($_settings_, "placeholder"), "rows" => $this->getAttribute($_settings_, "initialRows"));
        // line 11
        echo "
";
        // line 12
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "multiline")) {
            // line 13
            echo "\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $_forms_->gettextarea($_config_);
            echo "
";
        } else {
            // line 15
            echo "\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo $_forms_->gettext($_config_);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  32 => 12,  76 => 12,  70 => 6,  50 => 12,  30 => 4,  24 => 3,  80 => 15,  65 => 13,  49 => 7,  31 => 14,  23 => 2,  91 => 15,  67 => 13,  64 => 5,  59 => 10,  44 => 6,  26 => 5,  21 => 2,  19 => 1,  691 => 289,  687 => 287,  684 => 286,  678 => 283,  671 => 280,  665 => 276,  660 => 275,  655 => 272,  649 => 269,  646 => 268,  641 => 267,  635 => 263,  626 => 261,  622 => 260,  619 => 259,  603 => 257,  600 => 256,  597 => 255,  594 => 254,  590 => 253,  585 => 252,  582 => 251,  578 => 250,  574 => 249,  572 => 248,  564 => 246,  556 => 241,  546 => 235,  541 => 232,  534 => 227,  531 => 225,  527 => 223,  521 => 220,  514 => 217,  509 => 216,  503 => 212,  496 => 208,  493 => 206,  488 => 203,  482 => 201,  478 => 200,  473 => 199,  467 => 198,  464 => 196,  455 => 194,  448 => 189,  443 => 186,  436 => 183,  428 => 182,  422 => 178,  418 => 177,  415 => 176,  412 => 174,  408 => 172,  401 => 169,  397 => 168,  394 => 167,  390 => 166,  385 => 163,  381 => 161,  376 => 158,  373 => 157,  370 => 156,  363 => 152,  359 => 151,  356 => 150,  352 => 149,  349 => 148,  344 => 145,  339 => 140,  336 => 139,  332 => 138,  330 => 137,  327 => 136,  321 => 135,  317 => 134,  313 => 132,  308 => 125,  304 => 123,  299 => 116,  296 => 115,  292 => 113,  285 => 106,  281 => 105,  278 => 104,  274 => 102,  267 => 95,  263 => 94,  259 => 92,  254 => 85,  251 => 84,  247 => 82,  241 => 76,  238 => 75,  234 => 73,  231 => 72,  228 => 71,  224 => 69,  217 => 67,  211 => 65,  200 => 64,  195 => 58,  190 => 57,  186 => 56,  178 => 55,  173 => 54,  168 => 53,  165 => 52,  161 => 51,  158 => 50,  155 => 49,  145 => 46,  143 => 45,  137 => 42,  134 => 41,  130 => 39,  127 => 38,  124 => 37,  117 => 32,  113 => 29,  111 => 28,  105 => 16,  98 => 22,  95 => 21,  86 => 20,  78 => 19,  72 => 18,  69 => 17,  63 => 16,  60 => 8,  54 => 9,  51 => 296,  48 => 7,  45 => 11,  42 => 10,  38 => 5,  35 => 13,  29 => 11,  27 => 3,  25 => 2,);
    }
}
