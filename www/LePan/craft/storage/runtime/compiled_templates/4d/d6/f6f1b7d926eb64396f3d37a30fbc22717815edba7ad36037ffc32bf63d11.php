<?php

/* _elements/tableview/container */
class __TwigTemplate_4dd6f6f1b7d926eb64396f3d37a30fbc22717815edba7ad36037ffc32bf63d11 extends Craft\BaseTemplate
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
        echo "<div class=\"tableview\">
\t<table class=\"data fullwidth\">
\t\t<thead>
\t\t\t";
        // line 4
        if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_attributes_);
        foreach ($context['_seq'] as $context["attribute"] => $context["label"]) {
            // line 5
            echo "\t\t\t\t";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
            $context["ordered"] = (array_key_exists("order", $context) && ($_order_ == $_attribute_));
            // line 6
            echo "\t\t\t\t<th scope=\"col\" data-attribute=\"";
            if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
            echo twig_escape_filter($this->env, $_attribute_, "html", null, true);
            echo "\"";
            if (isset($context["ordered"])) { $_ordered_ = $context["ordered"]; } else { $_ordered_ = null; }
            if ($_ordered_) {
                echo " class=\"ordered ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                echo twig_escape_filter($this->env, $_sort_, "html", null, true);
                echo "\"";
            }
            echo ">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 10
        $this->env->loadTemplate("_elements/tableview/elements")->display($context);
        // line 11
        echo "\t\t</tbody>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/tableview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  59 => 10,  55 => 8,  34 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
