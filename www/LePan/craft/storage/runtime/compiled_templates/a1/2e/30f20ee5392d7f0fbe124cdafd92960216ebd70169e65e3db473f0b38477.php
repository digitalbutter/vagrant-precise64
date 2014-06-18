<?php

/* _includes/forms/checkboxSelect */
class __TwigTemplate_a12e30f20ee5392d7f0fbe124cdafd92960216ebd70169e65e3db473f0b38477 extends Craft\BaseTemplate
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
        if (isset($context["allLabel"])) { $_allLabel_ = $context["allLabel"]; } else { $_allLabel_ = null; }
        $context["allLabel"] = ((array_key_exists("allLabel", $context)) ? ($_allLabel_) : (\Craft\Craft::t("All")));
        // line 2
        if (isset($context["allValue"])) { $_allValue_ = $context["allValue"]; } else { $_allValue_ = null; }
        $context["allValue"] = ((array_key_exists("allValue", $context)) ? ($_allValue_) : ("*"));
        // line 3
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["options"] = ((array_key_exists("options", $context)) ? ($_options_) : (array()));
        // line 4
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context["values"] = ((array_key_exists("values", $context)) ? ($_values_) : (array()));
        // line 5
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["allValue"])) { $_allValue_ = $context["allValue"]; } else { $_allValue_ = null; }
        $context["allChecked"] = (twig_test_empty($_values_) || ($_values_ == $_allValue_));
        // line 6
        echo "
<div class=\"checkbox-select";
        // line 7
        if (array_key_exists("class", $context)) {
            echo " ";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
        }
        echo "\">
\t<div>
\t\t";
        // line 9
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        if (isset($context["allLabel"])) { $_allLabel_ = $context["allLabel"]; } else { $_allLabel_ = null; }
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["allValue"])) { $_allValue_ = $context["allValue"]; } else { $_allValue_ = null; }
        if (isset($context["allChecked"])) { $_allChecked_ = $context["allChecked"]; } else { $_allChecked_ = null; }
        if (isset($context["autofocus"])) { $_autofocus_ = $context["autofocus"]; } else { $_autofocus_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $this->env->loadTemplate("_includes/forms/checkbox")->display(array("id" => ((array_key_exists("id", $context)) ? ($_id_) : (null)), "class" => "all", "label" => (("<b>" . ((array_key_exists("allLabel", $context)) ? ($_allLabel_) : (\Craft\Craft::t("All")))) . "</b>"), "name" => ((array_key_exists("name", $context)) ? ($_name_) : (null)), "value" => $_allValue_, "checked" => $_allChecked_, "autofocus" => ((array_key_exists("autofocus", $context) && $_autofocus_) && (!$this->getAttribute($this->getAttribute($_craft_, "request"), "isMobileBrowser", array(0 => true), "method")))));
        // line 18
        echo "\t</div>";
        // line 19
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_options_);
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 20
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            $context["optionLabel"] = (($this->getAttribute($_option_, "label", array(), "any", true, true)) ? ($this->getAttribute($_option_, "label")) : ($_option_));
            // line 21
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            $context["optionValue"] = (($this->getAttribute($_option_, "value", array(), "any", true, true)) ? ($this->getAttribute($_option_, "value")) : ($_key_));
            // line 22
            if (isset($context["optionValue"])) { $_optionValue_ = $context["optionValue"]; } else { $_optionValue_ = null; }
            if (isset($context["allValue"])) { $_allValue_ = $context["allValue"]; } else { $_allValue_ = null; }
            if (($_optionValue_ != $_allValue_)) {
                // line 23
                echo "\t\t\t<div>
\t\t\t\t";
                // line 24
                if (isset($context["optionLabel"])) { $_optionLabel_ = $context["optionLabel"]; } else { $_optionLabel_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (isset($context["optionValue"])) { $_optionValue_ = $context["optionValue"]; } else { $_optionValue_ = null; }
                if (isset($context["allChecked"])) { $_allChecked_ = $context["allChecked"]; } else { $_allChecked_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                $this->env->loadTemplate("_includes/forms/checkbox")->display(array("label" => $_optionLabel_, "name" => ((array_key_exists("name", $context)) ? (($_name_ . "[]")) : (null)), "value" => $_optionValue_, "checked" => ($_allChecked_ || twig_in_filter($_optionValue_, $_values_)), "disabled" => $_allChecked_));
                // line 31
                echo "\t\t\t</div>
\t\t";
            }
            // line 33
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 34,  88 => 33,  84 => 31,  77 => 24,  74 => 23,  70 => 22,  66 => 21,  63 => 20,  58 => 19,  56 => 18,  47 => 9,  38 => 7,  31 => 5,  25 => 3,  22 => 2,  19 => 1,  113 => 28,  107 => 27,  104 => 26,  92 => 25,  87 => 24,  81 => 21,  78 => 20,  69 => 16,  53 => 14,  48 => 13,  40 => 10,  35 => 6,  32 => 8,  30 => 7,  28 => 4,  26 => 4,  24 => 2,);
    }
}
