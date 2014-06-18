<?php

/* _includes/forms/radioGroup */
class __TwigTemplate_4ae581de91ece114914ee2ea3f03ced236cace151e34b9251b7d74215e138309 extends Craft\BaseTemplate
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
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["options"] = ((array_key_exists("options", $context)) ? ($_options_) : (array()));
        // line 2
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        $context["value"] = ((array_key_exists("value", $context)) ? ($_value_) : (null));
        // line 4
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
            // line 5
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            $context["optionLabel"] = (($this->getAttribute($_option_, "label", array(), "any", true, true)) ? ($this->getAttribute($_option_, "label")) : ($_option_));
            // line 6
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            $context["optionValue"] = (($this->getAttribute($_option_, "value", array(), "any", true, true)) ? ($this->getAttribute($_option_, "value")) : ($_key_));
            // line 7
            echo "<div>
\t\t";
            // line 8
            if (isset($context["optionLabel"])) { $_optionLabel_ = $context["optionLabel"]; } else { $_optionLabel_ = null; }
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["optionValue"])) { $_optionValue_ = $context["optionValue"]; } else { $_optionValue_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["autofocus"])) { $_autofocus_ = $context["autofocus"]; } else { $_autofocus_ = null; }
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $this->env->loadTemplate("_includes/forms/radio")->display(array("label" => $_optionLabel_, "id" => (((array_key_exists("id", $context) && $this->getAttribute($_loop_, "first"))) ? ($_id_) : (null)), "name" => ((array_key_exists("name", $context)) ? ($_name_) : (null)), "value" => $_optionValue_, "checked" => ($_optionValue_ == $_value_), "autofocus" => (((array_key_exists("autofocus", $context) && $_autofocus_) && $this->getAttribute($_loop_, "first")) && (!$this->getAttribute($this->getAttribute($_craft_, "request"), "isMobileBrowser", array(0 => true), "method")))));
            // line 16
            echo "\t</div>
";
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
        return "_includes/forms/radioGroup";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  43 => 5,  234 => 60,  231 => 59,  225 => 57,  220 => 56,  215 => 55,  212 => 54,  202 => 51,  195 => 49,  192 => 48,  176 => 42,  171 => 41,  167 => 40,  160 => 38,  146 => 36,  132 => 34,  119 => 25,  91 => 22,  86 => 21,  64 => 17,  55 => 12,  51 => 11,  25 => 4,  22 => 2,  81 => 40,  75 => 19,  72 => 31,  66 => 29,  63 => 16,  59 => 14,  54 => 24,  49 => 21,  42 => 14,  38 => 12,  31 => 5,  188 => 46,  179 => 13,  174 => 8,  166 => 4,  148 => 105,  143 => 97,  137 => 95,  133 => 93,  126 => 33,  120 => 85,  115 => 84,  108 => 83,  104 => 81,  100 => 73,  83 => 65,  73 => 58,  69 => 18,  65 => 54,  61 => 52,  57 => 50,  40 => 41,  36 => 8,  32 => 30,  29 => 29,  27 => 4,  21 => 2,  19 => 1,  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 144,  230 => 143,  219 => 142,  214 => 141,  209 => 53,  205 => 52,  198 => 129,  193 => 126,  189 => 124,  184 => 16,  181 => 44,  177 => 117,  173 => 108,  169 => 5,  165 => 96,  161 => 94,  157 => 84,  153 => 3,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 67,  116 => 24,  111 => 63,  109 => 62,  105 => 58,  102 => 57,  99 => 54,  95 => 23,  92 => 51,  90 => 66,  87 => 48,  84 => 44,  80 => 20,  78 => 62,  74 => 35,  71 => 31,  67 => 30,  62 => 26,  58 => 24,  56 => 23,  53 => 8,  50 => 7,  47 => 42,  44 => 16,  41 => 9,  37 => 10,  34 => 9,  30 => 8,  28 => 5,  26 => 5,  24 => 3,);
    }
}
