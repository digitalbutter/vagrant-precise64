<?php

/* _components/widgets/QuickPost/body */
class __TwigTemplate_351e11bdcb1621c2a3d991fcaa8c41b1d98f981ff58304f9aab256b7eecd5abd extends Craft\BaseTemplate
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
        $context["fieldNamespace"] = ("fields" . twig_random($this->env));
        // line 3
        echo "

<form method=\"post\" accept-charset=\"UTF-8\">
\t<input type=\"hidden\" name=\"fieldsLocation\" value=\"";
        // line 6
        if (isset($context["fieldNamespace"])) { $_fieldNamespace_ = $context["fieldNamespace"]; } else { $_fieldNamespace_ = null; }
        echo twig_escape_filter($this->env, $_fieldNamespace_, "html", null, true);
        echo "\">

\t";
        // line 8
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t($this->getAttribute($_entryType_, "titleLabel")), "id" => "title", "name" => "title", "required" => true, "first" => true));
        // line 14
        echo "

\t";
        // line 16
        if (isset($context["fieldNamespace"])) { $_fieldNamespace_ = $context["fieldNamespace"]; } else { $_fieldNamespace_ = null; }
        $_namespace = $_fieldNamespace_;
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 17
                echo "\t\t";
                if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_entryType_, "getFieldLayout", array(), "method"), "getFields", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 18
                    echo "\t\t\t";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if (($this->getAttribute($_field_, "required") || twig_in_filter($this->getAttribute($_field_, "fieldId"), $this->getAttribute($_settings_, "fields")))) {
                        // line 19
                        echo "\t\t\t\t";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute($_field_, "getField", array(), "method"), "required" => $this->getAttribute($_field_, "required"), "entry" => null));
                        // line 24
                        echo "\t\t\t";
                    }
                    // line 25
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t";
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 17
            echo "\t\t";
            if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_entryType_, "getFieldLayout", array(), "method"), "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 18
                echo "\t\t\t";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($_field_, "required") || twig_in_filter($this->getAttribute($_field_, "fieldId"), $this->getAttribute($_settings_, "fields")))) {
                    // line 19
                    echo "\t\t\t\t";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute($_field_, "getField", array(), "method"), "required" => $this->getAttribute($_field_, "required"), "entry" => null));
                    // line 24
                    echo "\t\t\t";
                }
                // line 25
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t";
        }
        unset($_originalNamespace, $_namespace);
        // line 27
        echo "
\t<div class=\"buttons\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, \Craft\Craft::t("Post"), "html", null, true);
        echo "\">
\t\t<div class=\"spinner hidden\"></div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/QuickPost/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  112 => 27,  108 => 26,  102 => 25,  99 => 24,  95 => 19,  90 => 18,  74 => 26,  68 => 25,  65 => 24,  61 => 19,  50 => 17,  38 => 14,  34 => 8,  23 => 3,  21 => 2,  19 => 1,  739 => 227,  736 => 226,  728 => 233,  719 => 231,  716 => 230,  713 => 229,  711 => 226,  708 => 225,  701 => 222,  698 => 221,  695 => 220,  684 => 219,  681 => 218,  678 => 217,  675 => 216,  672 => 215,  666 => 211,  662 => 210,  658 => 209,  654 => 208,  651 => 207,  645 => 201,  638 => 198,  635 => 197,  633 => 196,  630 => 195,  623 => 193,  620 => 192,  617 => 191,  612 => 188,  599 => 186,  594 => 185,  590 => 183,  586 => 182,  583 => 181,  574 => 267,  568 => 265,  565 => 264,  560 => 263,  554 => 260,  549 => 259,  545 => 257,  542 => 256,  537 => 253,  529 => 251,  524 => 250,  512 => 247,  501 => 245,  498 => 244,  491 => 243,  480 => 242,  474 => 238,  472 => 207,  467 => 204,  465 => 181,  459 => 177,  453 => 176,  443 => 174,  439 => 173,  434 => 172,  430 => 171,  420 => 163,  412 => 160,  406 => 158,  403 => 157,  400 => 156,  391 => 155,  385 => 154,  380 => 153,  367 => 149,  354 => 143,  346 => 141,  341 => 140,  335 => 139,  329 => 136,  325 => 134,  320 => 131,  313 => 129,  297 => 127,  292 => 126,  285 => 124,  280 => 123,  275 => 121,  267 => 118,  264 => 117,  261 => 116,  258 => 115,  255 => 114,  252 => 113,  249 => 112,  246 => 111,  238 => 107,  231 => 106,  223 => 105,  220 => 104,  216 => 103,  213 => 102,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  166 => 88,  161 => 87,  158 => 86,  152 => 82,  149 => 81,  146 => 80,  143 => 79,  139 => 77,  129 => 75,  124 => 74,  121 => 73,  117 => 72,  113 => 71,  110 => 70,  107 => 69,  101 => 67,  96 => 66,  93 => 65,  30 => 4,  28 => 6,  128 => 36,  122 => 35,  119 => 34,  111 => 30,  106 => 29,  94 => 27,  88 => 26,  84 => 17,  80 => 24,  76 => 23,  71 => 22,  66 => 21,  63 => 20,  56 => 18,  52 => 14,  48 => 13,  45 => 12,  42 => 16,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
