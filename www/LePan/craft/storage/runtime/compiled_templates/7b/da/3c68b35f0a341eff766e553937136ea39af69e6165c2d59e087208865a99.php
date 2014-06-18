<?php

/* 40ae61d6d7575db0490511038c1e3cfa */
class __TwigTemplate_7bda3c68b35f0a341eff766e553937136ea39af69e6165c2d59e087208865a99 extends Craft\BaseTemplate
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
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "entries"), "section", array(0 => "wines"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "    { \"value\":\"";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "wineName"), "html", null, true);
            echo "\" , \"label\":\"";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "wineName"), "html", null, true);
            echo "\"
        }
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "40ae61d6d7575db0490511038c1e3cfa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
