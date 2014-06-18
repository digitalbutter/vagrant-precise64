<?php

/* _includes/forms/select */
class __TwigTemplate_2c8d8891ef297c339a40859aee60b9b751267e68883624fc3521174b03e28621 extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "select", 1 => ((array_key_exists("class", $context)) ? ($_class_) : (null)))), " ");
        // line 6
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["options"] = ((array_key_exists("options", $context)) ? ($_options_) : (array()));
        // line 7
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        $context["value"] = ((array_key_exists("value", $context)) ? ($_value_) : (null));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        echo "<div class=\"";
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        echo twig_escape_filter($this->env, $_class_, "html", null, true);
        echo "\">
\t<select";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"";
        }
        // line 13
        if (isset($context["toggle"])) { $_toggle_ = $context["toggle"]; } else { $_toggle_ = null; }
        if ((array_key_exists("toggle", $context) && $_toggle_)) {
            echo " class=\"fieldtoggle\"";
        }
        // line 14
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"";
        }
        // line 15
        if (isset($context["autofocus"])) { $_autofocus_ = $context["autofocus"]; } else { $_autofocus_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (((array_key_exists("autofocus", $context) && $_autofocus_) && (!$this->getAttribute($this->getAttribute($_craft_, "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 16
        if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
        if ((array_key_exists("disabled", $context) && $_disabled_)) {
            echo " disabled";
        }
        // line 17
        if (array_key_exists("targetPrefix", $context)) {
            echo " data-target-prefix=\"";
            if (isset($context["targetPrefix"])) { $_targetPrefix_ = $context["targetPrefix"]; } else { $_targetPrefix_ = null; }
            echo twig_escape_filter($this->env, $_targetPrefix_, "html", null, true);
            echo "\"";
        }
        echo ">
\t\t";
        // line 18
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_options_);
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 19
            echo "\t\t\t";
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if ($this->getAttribute($_option_, "optgroup", array(), "any", true, true)) {
                // line 20
                echo "\t\t\t\t";
                if (isset($context["hasOptgroups"])) { $_hasOptgroups_ = $context["hasOptgroups"]; } else { $_hasOptgroups_ = null; }
                if ($_hasOptgroups_) {
                    // line 21
                    echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["hasOptgroups"] = true;
                    // line 24
                    echo "\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t<optgroup label=\"";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_option_, "optgroup"), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                $context["optionLabel"] = (($this->getAttribute($_option_, "label", array(), "any", true, true)) ? ($this->getAttribute($_option_, "label")) : ($_option_));
                // line 28
                echo "\t\t\t\t";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                $context["optionValue"] = (($this->getAttribute($_option_, "value", array(), "any", true, true)) ? ($this->getAttribute($_option_, "value")) : ($_key_));
                // line 29
                echo "\t\t\t\t";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                $context["optionDisabled"] = (($this->getAttribute($_option_, "disabled", array(), "any", true, true)) ? ($this->getAttribute($_option_, "disabled")) : (false));
                // line 30
                echo "\t\t\t\t<option value=\"";
                if (isset($context["optionValue"])) { $_optionValue_ = $context["optionValue"]; } else { $_optionValue_ = null; }
                echo twig_escape_filter($this->env, $_optionValue_, "html", null, true);
                echo "\"";
                if (isset($context["optionValue"])) { $_optionValue_ = $context["optionValue"]; } else { $_optionValue_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (($_optionValue_ == $_value_)) {
                    echo " selected";
                }
                if (isset($context["optionDisabled"])) { $_optionDisabled_ = $context["optionDisabled"]; } else { $_optionDisabled_ = null; }
                if ($_optionDisabled_) {
                    echo " disabled";
                }
                echo ">";
                if (isset($context["optionLabel"])) { $_optionLabel_ = $context["optionLabel"]; } else { $_optionLabel_ = null; }
                echo twig_escape_filter($this->env, $_optionLabel_, "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 32
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t";
        if (isset($context["hasOptgroups"])) { $_hasOptgroups_ = $context["hasOptgroups"]; } else { $_hasOptgroups_ = null; }
        if ($_hasOptgroups_) {
            // line 34
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 36
        echo "\t</select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 36,  144 => 33,  118 => 30,  114 => 29,  109 => 28,  105 => 27,  95 => 24,  88 => 21,  84 => 20,  75 => 18,  66 => 17,  61 => 16,  55 => 15,  43 => 13,  36 => 12,  25 => 7,  22 => 6,  19 => 1,  700 => 86,  696 => 78,  693 => 77,  690 => 76,  678 => 75,  666 => 72,  662 => 66,  659 => 65,  656 => 64,  644 => 63,  625 => 59,  619 => 58,  615 => 57,  610 => 54,  603 => 52,  592 => 49,  588 => 48,  585 => 47,  582 => 46,  572 => 44,  567 => 43,  564 => 42,  557 => 40,  554 => 39,  541 => 38,  536 => 37,  533 => 36,  527 => 33,  522 => 32,  518 => 30,  515 => 29,  512 => 28,  509 => 27,  506 => 26,  501 => 25,  488 => 24,  474 => 21,  469 => 18,  462 => 12,  455 => 11,  452 => 10,  446 => 9,  443 => 8,  428 => 7,  422 => 286,  415 => 281,  412 => 280,  409 => 279,  403 => 278,  397 => 276,  392 => 275,  386 => 274,  381 => 273,  376 => 272,  373 => 271,  367 => 270,  365 => 269,  358 => 263,  354 => 261,  350 => 259,  345 => 254,  341 => 253,  336 => 250,  330 => 246,  326 => 238,  319 => 235,  310 => 233,  303 => 232,  297 => 230,  288 => 228,  285 => 227,  282 => 226,  273 => 221,  264 => 219,  257 => 218,  251 => 216,  242 => 214,  239 => 213,  236 => 212,  233 => 206,  230 => 205,  222 => 201,  217 => 198,  212 => 193,  205 => 192,  202 => 191,  198 => 189,  193 => 183,  190 => 182,  181 => 180,  178 => 179,  172 => 175,  167 => 165,  164 => 164,  160 => 162,  156 => 160,  153 => 159,  148 => 34,  138 => 32,  132 => 147,  123 => 146,  111 => 144,  107 => 142,  102 => 136,  98 => 25,  92 => 23,  87 => 132,  80 => 19,  76 => 127,  70 => 123,  67 => 122,  64 => 121,  60 => 119,  56 => 110,  52 => 108,  48 => 14,  45 => 96,  37 => 95,  32 => 92,  30 => 10,  28 => 8,  26 => 5,  24 => 3,);
    }
}
