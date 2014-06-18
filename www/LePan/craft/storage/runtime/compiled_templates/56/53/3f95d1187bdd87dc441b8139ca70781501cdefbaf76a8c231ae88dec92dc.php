<?php

/* wines */
class __TwigTemplate_56533f95d1187bdd87dc441b8139ca70781501cdefbaf76a8c231ae88dec92dc extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["title"] = "Wines";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
\t";
        // line 18
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "entries"), "section", array(0 => "wines"), "method"), "limit", array(), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 19
            echo "\t<article>
\t\t<div class=\"header-row\">
\t\t\t<div class=\"wine-details\">
\t\t\t\t<p><strong>Name, Vantage, Location:</strong><br>
\t\t\t\t\t";
            // line 23
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "wineName"), "html", null, true);
            echo ", 
\t\t\t\t\t";
            // line 24
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "vintage"), "html", null, true);
            echo ", 
\t\t\t\t\t";
            // line 25
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "district"), "html", null, true);
            echo ", 
\t\t\t\t\t";
            // line 26
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "subRegion"), "html", null, true);
            echo ", 
\t\t\t\t\t";
            // line 27
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "region"), "html", null, true);
            echo ", 
\t\t\t\t\t";
            // line 28
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "country"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\"wine-details\">
\t\t\t\t<p><strong>Color:</strong><br> ";
            // line 31
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "color"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\"wine-details\">
\t\t\t\t<p><strong>Style:</strong><br> ";
            // line 34
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "style"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\"wine-details\">
\t\t\t\t<p><strong>Grape Variety:</strong><br>";
            // line 37
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "grapeVariety"), "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t</div>
\t</article>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "wines";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  86 => 34,  79 => 31,  72 => 28,  67 => 27,  62 => 26,  57 => 25,  52 => 24,  47 => 23,  41 => 19,  36 => 18,  33 => 17,  30 => 16,  25 => 14,);
    }
}
