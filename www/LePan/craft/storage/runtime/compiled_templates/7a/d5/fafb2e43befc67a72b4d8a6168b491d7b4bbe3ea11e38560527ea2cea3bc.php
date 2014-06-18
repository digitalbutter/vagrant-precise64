<?php

/* _elements/tableview/elements */
class __TwigTemplate_7ad5fafb2e43befc67a72b4d8a6168b491d7b4bbe3ea11e38560527ea2cea3bc extends Craft\BaseTemplate
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
        if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_elements_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 2
            echo "\t<tr";
            if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
            if (isset($context["disabledElementIds"])) { $_disabledElementIds_ = $context["disabledElementIds"]; } else { $_disabledElementIds_ = null; }
            if (twig_in_filter($this->getAttribute($_element_, "id"), $_disabledElementIds_)) {
                echo " class=\"disabled\"";
            }
            echo ">
\t\t";
            // line 3
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
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
            foreach ($context['_seq'] as $context["attribute"] => $context["label"]) {
                // line 4
                echo "\t\t\t";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if (($this->getAttribute($_loop_, "index") == 1)) {
                    // line 5
                    echo "\t\t\t\t<td scope=\"row\" data-title=\"";
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo twig_escape_filter($this->env, $_label_, "html", null, true);
                    echo "\">
\t\t\t\t\t";
                    // line 6
                    $this->env->loadTemplate("_elements/element")->display($context);
                    // line 7
                    echo "\t\t\t\t</td>
\t\t\t";
                } else {
                    // line 9
                    echo "\t\t\t\t<td data-title=\"";
                    if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                    echo twig_escape_filter($this->env, $_label_, "html", null, true);
                    echo "\">";
                    if (isset($context["elementType"])) { $_elementType_ = $context["elementType"]; } else { $_elementType_ = null; }
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                    echo $this->getAttribute($_elementType_, "getTableAttributeHtml", array(0 => $_element_, 1 => $_attribute_), "method");
                    echo "</td>
\t\t\t";
                }
                // line 11
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
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_elements/tableview/elements";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 12,  92 => 11,  80 => 9,  76 => 7,  74 => 6,  68 => 5,  64 => 4,  46 => 3,  37 => 2,  61 => 11,  59 => 10,  55 => 8,  34 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
