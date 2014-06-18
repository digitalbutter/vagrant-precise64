<?php

/* _includes/forms/elementSelect */
class __TwigTemplate_19d4c2dfcefa896d0d5d9d6a772836c4f94bb397fa906015ea133d913377f530 extends Craft\BaseTemplate
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
        if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
        $context["elements"] = ((array_key_exists("elements", $context)) ? ($_elements_) : (array()));
        // line 6
        if (isset($context["jsClass"])) { $_jsClass_ = $context["jsClass"]; } else { $_jsClass_ = null; }
        $context["jsClass"] = (((array_key_exists("jsClass", $context) && $_jsClass_)) ? ($_jsClass_) : ("Craft.BaseElementSelectInput"));
        // line 7
        if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
        $context["sources"] = (((array_key_exists("sources", $context) && $_sources_)) ? ($_sources_) : (null));
        // line 8
        if (isset($context["criteria"])) { $_criteria_ = $context["criteria"]; } else { $_criteria_ = null; }
        $context["criteria"] = (((array_key_exists("criteria", $context) && $_criteria_)) ? ($_criteria_) : (null));
        // line 9
        if (isset($context["sourceElementId"])) { $_sourceElementId_ = $context["sourceElementId"]; } else { $_sourceElementId_ = null; }
        $context["sourceElementId"] = (((array_key_exists("sourceElementId", $context) && $_sourceElementId_)) ? ($_sourceElementId_) : (null));
        // line 10
        if (isset($context["storageKey"])) { $_storageKey_ = $context["storageKey"]; } else { $_storageKey_ = null; }
        $context["storageKey"] = (((array_key_exists("storageKey", $context) && $_storageKey_)) ? ($_storageKey_) : (null));
        // line 12
        echo "<div id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t";
        // line 14
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
            // line 15
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 16
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</div>

\t<div class=\"btn add icon dashed\">";
        // line 19
        if (isset($context["addButtonLabel"])) { $_addButtonLabel_ = $context["addButtonLabel"]; } else { $_addButtonLabel_ = null; }
        echo twig_escape_filter($this->env, $_addButtonLabel_, "html", null, true);
        echo "</div>
</div>

";
        // line 22
        ob_start();
        // line 23
        echo "\tnew ";
        if (isset($context["jsClass"])) { $_jsClass_ = $context["jsClass"]; } else { $_jsClass_ = null; }
        echo twig_escape_filter($this->env, $_jsClass_, "html", null, true);
        echo "(
\t\t\"";
        // line 24
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId($_id_), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 25
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName($_name_), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 26
        if (isset($context["elementType"])) { $_elementType_ = $context["elementType"]; } else { $_elementType_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_elementType_, "getClassHandle", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 27
        if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
        echo twig_jsonencode_filter($_sources_);
        echo ",
\t\t";
        // line 28
        if (isset($context["criteria"])) { $_criteria_ = $context["criteria"]; } else { $_criteria_ = null; }
        echo twig_jsonencode_filter($_criteria_);
        echo ",
\t\t";
        // line 29
        if (isset($context["sourceElementId"])) { $_sourceElementId_ = $context["sourceElementId"]; } else { $_sourceElementId_ = null; }
        echo twig_escape_filter($this->env, (($_sourceElementId_) ? ($_sourceElementId_) : ("null")), "html", null, true);
        echo ",
\t\t";
        // line 30
        if (isset($context["limit"])) { $_limit_ = $context["limit"]; } else { $_limit_ = null; }
        echo twig_escape_filter($this->env, (($_limit_) ? ($_limit_) : ("null")), "html", null, true);
        echo ",
\t\t\"";
        // line 31
        if (isset($context["storageKey"])) { $_storageKey_ = $context["storageKey"]; } else { $_storageKey_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_storageKey_, "js"), "html", null, true);
        echo "\"
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
    }

    public function getTemplateName()
    {
        return "_includes/forms/elementSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 35,  150 => 34,  143 => 31,  138 => 30,  123 => 27,  108 => 24,  102 => 23,  100 => 22,  89 => 17,  75 => 16,  72 => 15,  54 => 14,  47 => 12,  44 => 10,  41 => 9,  29 => 5,  22 => 2,  188 => 45,  183 => 44,  181 => 43,  176 => 42,  173 => 41,  169 => 39,  166 => 38,  162 => 36,  152 => 33,  147 => 32,  133 => 29,  128 => 28,  122 => 28,  118 => 26,  113 => 25,  110 => 25,  107 => 24,  103 => 22,  93 => 19,  88 => 18,  74 => 17,  69 => 16,  63 => 14,  60 => 13,  46 => 10,  38 => 8,  35 => 7,  32 => 6,  28 => 3,  25 => 2,  19 => 1,);
    }
}
