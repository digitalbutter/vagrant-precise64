<?php

/* _components/fieldtypes/Tags/input */
class __TwigTemplate_e1171b3b52c202e9b25a83242eba6470b92bec9424938c847463b299700596f5 extends Craft\BaseTemplate
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
        if (isset($context["criteria"])) { $_criteria_ = $context["criteria"]; } else { $_criteria_ = null; }
        $context["criteria"] = (((array_key_exists("criteria", $context) && $_criteria_)) ? ($_criteria_) : (null));
        // line 7
        if (isset($context["sourceElementId"])) { $_sourceElementId_ = $context["sourceElementId"]; } else { $_sourceElementId_ = null; }
        $context["sourceElementId"] = (((array_key_exists("sourceElementId", $context) && $_sourceElementId_)) ? ($_sourceElementId_) : (null));
        // line 9
        $context["__internal_48227781dd095c6f3ae73063dc2054c37d2ec6fd7f762ae14de0d2abf804306b"] = $this->env->loadTemplate("_includes/forms");
        // line 10
        echo "
<div id=\"";
        // line 11
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"elementselect tagselect\">
\t<div class=\"elements\">
\t\t";
        // line 13
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
            // line 14
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 15
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
        // line 16
        echo "\t</div>

\t<div class=\"texticon add icon\">
\t\t";
        // line 19
        echo $context["__internal_48227781dd095c6f3ae73063dc2054c37d2ec6fd7f762ae14de0d2abf804306b"]->gettext(array("width" => "auto", "placeholder" => \Craft\Craft::t("Add a tag")));
        // line 22
        echo "
\t\t<div class=\"spinner hidden\"></div>
\t</div>
</div>

";
        // line 27
        ob_start();
        // line 28
        echo "\tnew Craft.TagSelectInput(
\t\t\"";
        // line 29
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId($_id_), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 30
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName($_name_), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 31
        if (isset($context["tagGroupId"])) { $_tagGroupId_ = $context["tagGroupId"]; } else { $_tagGroupId_ = null; }
        echo twig_escape_filter($this->env, $_tagGroupId_, "html", null, true);
        echo ",
\t\t";
        // line 32
        if (isset($context["sourceElementId"])) { $_sourceElementId_ = $context["sourceElementId"]; } else { $_sourceElementId_ = null; }
        echo twig_escape_filter($this->env, (($_sourceElementId_) ? ($_sourceElementId_) : ("null")), "html", null, true);
        echo "
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "
";
        // line 36
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Tags/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  125 => 35,  118 => 32,  113 => 31,  108 => 30,  103 => 29,  100 => 28,  98 => 27,  91 => 22,  89 => 19,  84 => 16,  70 => 15,  67 => 14,  49 => 13,  43 => 11,  40 => 10,  38 => 9,  35 => 7,  32 => 6,  29 => 5,  22 => 2,  19 => 1,);
    }
}
