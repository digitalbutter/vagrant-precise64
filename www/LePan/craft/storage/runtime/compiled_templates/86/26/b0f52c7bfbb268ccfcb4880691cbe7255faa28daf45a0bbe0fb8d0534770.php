<?php

/* settings/index */
class __TwigTemplate_8626b0f52c7bfbb268ccfcb4880691cbe7255faa28daf45a0bbe0fb8d0534770 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Settings");
        // line 4
        \Craft\craft()->templates->includeCssResource("css/settings.css");
        // line 5
        \Craft\craft()->templates->includeJsResource("js/settings.js");
        // line 7
        ob_start();
        // line 8
        echo "
\t";
        // line 9
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "cp"), "settings", array(), "method"));
        foreach ($context['_seq'] as $context["category"] => $context["items"]) {
            // line 10
            echo "\t\t<h2>";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $_category_, "html", null, true);
            echo "</h2>

\t\t<ul class=\"icons\">
\t\t\t";
            // line 13
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
            foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                // line 14
                echo "\t\t\t\t<li><a href=\"";
                if (isset($context["handle"])) { $_handle_ = $context["handle"]; } else { $_handle_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . $_handle_)), "html", null, true);
                echo "\" data-icon=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "icon"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "label"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</ul>

\t\t<hr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t<h2>";
        // line 21
        echo twig_escape_filter($this->env, \Craft\Craft::t("Tools"), "html", null, true);
        echo "</h2>

\t<ul class=\"icons\">
\t\t";
        // line 24
        if (isset($context["tools"])) { $_tools_ = $context["tools"]; } else { $_tools_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tools_);
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 25
            echo "\t\t\t<li><a id=\"tool-";
            if (isset($context["tool"])) { $_tool_ = $context["tool"]; } else { $_tool_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tool_, "getClassHandle", array(), "method"), "html", null, true);
            echo "\" data-icon=\"";
            if (isset($context["tool"])) { $_tool_ = $context["tool"]; } else { $_tool_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tool_, "getIconValue", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["tool"])) { $_tool_ = $context["tool"]; } else { $_tool_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tool_, "getName", array(), "method"), "html", null, true);
            echo "</a></li>
\t\t\t";
            // line 26
            if (isset($context["tool"])) { $_tool_ = $context["tool"]; } else { $_tool_ = null; }
            \Craft\craft()->templates->includeJs((((((("new Craft.Tool(\"" . $this->getAttribute($_tool_, "getClassHandle", array(), "method")) . "\", ") . twig_jsonencode_filter($this->getAttribute($_tool_, "getOptionsHtml", array(), "method"))) . ", \"") . $this->getAttribute($_tool_, "getButtonLabel", array(), "method")) . "\");"));
            // line 27
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t</ul>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  107 => 27,  104 => 26,  92 => 25,  87 => 24,  81 => 21,  78 => 20,  69 => 16,  53 => 14,  48 => 13,  40 => 10,  35 => 9,  32 => 8,  30 => 7,  28 => 5,  26 => 4,  24 => 2,);
    }
}
