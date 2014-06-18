<?php

/* wines/_entry */
class __TwigTemplate_1e2ee51d33033f2f9d469dac697b3537d6d989a05a6ed2e742191381d606c530 extends Craft\BaseTemplate
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "\t<article>
\t\t<div class=\"row header-row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong><a href=\"";
        // line 24
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "url"), "html", null, true);
        echo "\">";
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "wineName"), "html", null, true);
        echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
        // line 25
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "vintage"), "html", null, true);
        echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
        // line 26
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "district"), "html", null, true);
        echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
        // line 27
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "subRegion"), "html", null, true);
        echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
        // line 28
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "region"), "html", null, true);
        echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
        // line 29
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "country"), "html", null, true);
        echo "</a></strong>
\t\t\t\t\t</p>
\t\t\t\t\t<img class=\"star-img\" src=\"";
        // line 31
        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
        echo "\">
\t\t\t\t\t<img class=\"star-img\" src=\"";
        // line 32
        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
        echo "\">
\t\t\t\t\t<img class=\"star-img\" src=\"";
        // line 33
        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
        echo "\">
\t\t\t\t\t<img class=\"star-img\" src=\"";
        // line 34
        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
        echo "\">
\t\t\t\t\t<img class=\"star-img\" src=\"";
        // line 35
        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 second-col\">
\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t<p><strong>Color</strong><br> ";
        // line 40
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "color"), "label"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t<p><strong>Style</strong><br> ";
        // line 43
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "style"), "label"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t<p><strong>Grape Variety</strong><br>";
        // line 46
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "grapeVariety"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 50
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entry_, "notes"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 51
            echo "\t\t\t\t\t<div class=\"row notes-row\">
\t\t\t\t\t\t<div class=\"col-md-6 first-col\">
\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Tasting Date</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
            // line 55
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "tastingDate"), "format", array(0 => "d F Y"), "method"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Tasting Place</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
            // line 59
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "tastingPlace"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 61
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if ($this->getAttribute($_entry_, "maturity")) {
                // line 62
                echo "\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Maturity</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
                // line 64
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "maturity"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 second-col\">
\t\t\t\t\t\t\t";
            // line 69
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if ($this->getAttribute($_entry_, "publication")) {
                // line 70
                echo "\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Publication</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
                // line 72
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "publication"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Author</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
            // line 77
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "author"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Rating</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
            // line 81
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "rating"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 83
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if ($this->getAttribute($_entry_, "price")) {
                // line 84
                echo "\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Average Price</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
                // line 86
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "price"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row notes-inner-row\">
\t\t\t\t\t\t<div class=\"note-details comments\">
\t\t\t\t\t\t\t<div class=\"note-select col-md-1\"><input type=\"checkbox\" value=\"select\" name=\"noteSelect\" ></div>
\t\t\t\t\t\t\t<div class=\"note-comment col-md-11\">";
            // line 94
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "conclusion"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t</article>
";
    }

    public function getTemplateName()
    {
        return "wines/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 98,  219 => 94,  212 => 89,  205 => 86,  201 => 84,  198 => 83,  192 => 81,  184 => 77,  180 => 75,  173 => 72,  169 => 70,  166 => 69,  162 => 67,  155 => 64,  151 => 62,  148 => 61,  142 => 59,  134 => 55,  128 => 51,  123 => 50,  115 => 46,  108 => 43,  101 => 40,  92 => 35,  87 => 34,  82 => 33,  77 => 32,  72 => 31,  66 => 29,  61 => 28,  56 => 27,  51 => 26,  46 => 25,  38 => 24,  31 => 19,  28 => 18,);
    }
}
