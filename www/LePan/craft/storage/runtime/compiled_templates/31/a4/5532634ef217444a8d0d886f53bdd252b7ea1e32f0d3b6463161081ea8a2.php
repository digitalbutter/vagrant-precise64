<?php

/* _includes/forms/hidden */
class __TwigTemplate_31a45532634ef217444a8d0d886f53bdd252b7ea1e32f0d3b6463161081ea8a2 extends Craft\BaseTemplate
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
        echo "<input type=\"hidden\"";
        // line 2
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"";
        }
        // line 3
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"";
        }
        // line 4
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/hidden";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  148 => 109,  145 => 108,  141 => 105,  138 => 104,  134 => 102,  130 => 98,  124 => 94,  114 => 86,  110 => 81,  105 => 78,  103 => 77,  99 => 75,  95 => 65,  91 => 63,  83 => 51,  79 => 48,  76 => 47,  60 => 36,  56 => 29,  49 => 25,  45 => 23,  41 => 15,  37 => 13,  33 => 5,  25 => 2,  19 => 1,  216 => 73,  209 => 68,  206 => 63,  201 => 60,  198 => 59,  177 => 57,  168 => 56,  165 => 55,  158 => 53,  154 => 52,  147 => 50,  140 => 48,  136 => 47,  126 => 52,  119 => 89,  112 => 48,  108 => 47,  100 => 46,  90 => 45,  87 => 53,  82 => 43,  77 => 42,  73 => 40,  68 => 32,  65 => 39,  63 => 30,  59 => 28,  55 => 27,  51 => 26,  47 => 15,  43 => 13,  35 => 4,  30 => 4,  28 => 3,  26 => 5,  24 => 3,);
    }
}
