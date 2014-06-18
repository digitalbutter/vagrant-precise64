<?php

/* notes */
class __TwigTemplate_e6e1599b0794c605715e4c22dcf0fe2a2e1aa4298d89d219a5f20fd3173ffd80 extends Craft\BaseTemplate
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
        $context["title"] = "Notes";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "entries"), "section", array(0 => "wines"), "method"), "limit", array(), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 18
            echo "\t<article>
\t\t<div class=\"header-row\">
\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t<p><strong>Name, Vantage, Location:</strong><br>
\t\t\t\t\t\t\t";
            // line 22
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "wineName"), "html", null, true);
            echo ", 
\t\t\t\t\t\t\t";
            // line 23
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "vintage"), "html", null, true);
            echo ", 
\t\t\t\t\t\t\t";
            // line 24
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "district"), "html", null, true);
            echo ", 
\t\t\t\t\t\t\t";
            // line 25
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "subRegion"), "html", null, true);
            echo ", 
\t\t\t\t\t\t\t";
            // line 26
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "region"), "html", null, true);
            echo ", 
\t\t\t\t\t\t\t";
            // line 27
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "country"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t<p><strong>Color:</strong><br> ";
            // line 30
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "color"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t<p><strong>Style:</strong><br> ";
            // line 33
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "style"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t<p><strong>Grape Variety:</strong><br>";
            // line 36
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_block_, "grapeVariety"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t";
            // line 39
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_block_, "notes"));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 40
                echo "\t\t\t<div class=\"notes-row\">
\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<p><strong>Tasting Date:</strong><br>";
                // line 42
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "tastingDate"), "format", array(0 => "d F Y"), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<p><strong>Tasting Place:</strong><br>";
                // line 45
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "tastingPlace"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 47
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if ($this->getAttribute($_entry_, "maturity")) {
                    // line 48
                    echo "\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<p><strong>Maturity:</strong><br>";
                    // line 49
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "maturity"), "html", null, true);
                    echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if ($this->getAttribute($_entry_, "publication")) {
                    // line 53
                    echo "\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t<p><strong>Publication:</strong><br>";
                    // line 54
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "publication"), "html", null, true);
                    echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<p><strong>Author:</strong><br>";
                // line 58
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "author"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<p><strong>Rating:</strong><br>";
                // line 61
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "rating"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 63
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if ($this->getAttribute($_entry_, "price")) {
                    // line 64
                    echo "\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<p><strong>Average Price:</strong><br>";
                    // line 65
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "price"), "html", null, true);
                    echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t<div class=\"inner-row\">
\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<p>";
                // line 70
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "conclusion"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t</article>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "notes";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  180 => 70,  176 => 68,  169 => 65,  166 => 64,  163 => 63,  157 => 61,  150 => 58,  147 => 57,  140 => 54,  137 => 53,  133 => 52,  126 => 49,  123 => 48,  120 => 47,  114 => 45,  107 => 42,  103 => 40,  98 => 39,  91 => 36,  84 => 33,  77 => 30,  70 => 27,  65 => 26,  60 => 25,  55 => 24,  50 => 23,  45 => 22,  39 => 18,  33 => 17,  30 => 16,  25 => 14,);
    }
}
