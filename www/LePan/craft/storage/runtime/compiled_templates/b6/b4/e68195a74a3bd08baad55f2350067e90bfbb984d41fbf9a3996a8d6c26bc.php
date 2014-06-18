<?php

/* _layouts/elementindex */
class __TwigTemplate_b6b4e68195a74a3bd08baad55f2350067e90bfbb984d41fbf9a3996a8d6c26bc extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'initJs' => array($this, 'block_initJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (isset($context["elementType"])) { $_elementType_ = $context["elementType"]; } else { $_elementType_ = null; }
        $context["elementTypeClass"] = $_elementType_;
        // line 4
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (isset($context["elementTypeClass"])) { $_elementTypeClass_ = $context["elementTypeClass"]; } else { $_elementTypeClass_ = null; }
        $context["elementType"] = $this->getAttribute($this->getAttribute($_craft_, "elements"), "getElementType", array(0 => $_elementTypeClass_), "method");
        // line 5
        $context["context"] = "index";
        // line 7
        if (isset($context["elementType"])) { $_elementType_ = $context["elementType"]; } else { $_elementType_ = null; }
        if ((!$_elementType_)) {
            // line 8
            throw new \Craft\HttpException(404);
        }
        // line 11
        if (isset($context["elementType"])) { $_elementType_ = $context["elementType"]; } else { $_elementType_ = null; }
        $context["sources"] = $this->getAttribute($_elementType_, "getSources", array(0 => "index"), "method");
        // line 23
        ob_start();
        // line 24
        echo "\t<div class=\"elementindex\">
\t\t";
        // line 25
        $this->env->loadTemplate("_elements/indexcontainer")->display($context);
        // line 26
        echo "\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        \Craft\craft()->templates->includeJs($this->renderBlock("initJs", $context, $blocks));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
        if ((!twig_test_empty($_sources_))) {
            // line 16
            echo "\t\t<nav>
\t\t\t";
            // line 17
            $this->env->loadTemplate("_elements/sources")->display($context);
            // line 18
            echo "\t\t</nav>
\t";
        }
    }

    // line 30
    public function block_initJs($context, array $blocks = array())
    {
        // line 31
        echo "\tCraft.createElementIndex('";
        if (isset($context["elementTypeClass"])) { $_elementTypeClass_ = $context["elementTypeClass"]; } else { $_elementTypeClass_ = null; }
        echo twig_escape_filter($this->env, $_elementTypeClass_, "html", null, true);
        echo "', \$('#main'), {
\t\tcontext:        '";
        // line 32
        if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
        echo twig_escape_filter($this->env, $_context_, "html", null, true);
        echo "',
\t\tshowStatusMenu: ";
        // line 33
        if (isset($context["showStatusMenu"])) { $_showStatusMenu_ = $context["showStatusMenu"]; } else { $_showStatusMenu_ = null; }
        echo ((array_key_exists("showStatusMenu", $context)) ? (twig_jsonencode_filter($_showStatusMenu_)) : ("'auto'"));
        echo ",
\t\tshowLocaleMenu: ";
        // line 34
        if (isset($context["showLocaleMenu"])) { $_showLocaleMenu_ = $context["showLocaleMenu"]; } else { $_showLocaleMenu_ = null; }
        echo ((array_key_exists("showLocaleMenu", $context)) ? (twig_jsonencode_filter($_showLocaleMenu_)) : ("'auto'"));
        echo ",
\t\tstorageKey:     'elementindex.";
        // line 35
        if (isset($context["elementTypeClass"])) { $_elementTypeClass_ = $context["elementTypeClass"]; } else { $_elementTypeClass_ = null; }
        echo twig_escape_filter($this->env, $_elementTypeClass_, "html", null, true);
        echo "',
\t\tcriteria:       { localeEnabled: null }
\t});
";
    }

    public function getTemplateName()
    {
        return "_layouts/elementindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  97 => 34,  92 => 33,  87 => 32,  78 => 30,  72 => 18,  70 => 17,  67 => 16,  63 => 15,  60 => 14,  55 => 40,  51 => 26,  49 => 25,  46 => 24,  44 => 23,  41 => 11,  38 => 8,  35 => 7,  33 => 5,  26 => 3,  120 => 34,  117 => 33,  113 => 31,  104 => 29,  99 => 26,  86 => 24,  81 => 31,  74 => 20,  71 => 19,  68 => 18,  64 => 17,  61 => 16,  54 => 39,  52 => 38,  43 => 11,  39 => 10,  34 => 9,  32 => 7,  29 => 4,  27 => 3,  25 => 2,);
    }
}
