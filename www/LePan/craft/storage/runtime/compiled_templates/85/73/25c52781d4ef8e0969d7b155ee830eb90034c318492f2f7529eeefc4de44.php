<?php

/* notes/_entry */
class __TwigTemplate_857325c52781d4ef8e0969d7b155ee830eb90034c318492f2f7529eeefc4de44 extends Craft\BaseTemplate
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
\t\t\t";
        // line 21
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "entries"), "section", array(0 => "wines"), "method"), "limit", array(0 => 5), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 22
            echo "\t\t\t\t";
            if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (($this->getAttribute($_block_, "id") == $this->getAttribute($_entry_, "wineList"))) {
                // line 23
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t<strong><a href=\"";
                // line 26
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "url"), "html", null, true);
                echo "\">";
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "wineName"), "html", null, true);
                echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
                // line 27
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "vintage"), "html", null, true);
                echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
                // line 28
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "district"), "html", null, true);
                echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
                // line 29
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "subRegion"), "html", null, true);
                echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
                // line 30
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "region"), "html", null, true);
                echo "</a></strong>, 
\t\t\t\t\t\t<strong><a href=\"\">";
                // line 31
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "country"), "html", null, true);
                echo "</a></strong>
\t\t\t\t\t</p>
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
\t\t\t\t\t<img class=\"star-img\" src=\"";
                // line 36
                if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
                echo "\">
\t\t\t\t\t<img class=\"star-img\" src=\"";
                // line 37
                if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
                echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 second-col\">
\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t<p><strong>Color</strong><br> ";
                // line 42
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "color"), "label"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t<p><strong>Style</strong><br> ";
                // line 45
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "style"), "label"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t<p><strong>Grape Variety</strong><br>";
                // line 48
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_block_, "grapeVariety"), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t</div>
\t\t\t<div class=\"row notes-row\">
\t\t\t\t\t\t<div class=\"col-md-6 first-col\">
\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Tasting Date</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
        // line 58
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "tastingDate"), "format", array(0 => "d F Y"), "method"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Tasting Place</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
        // line 62
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "tastingPlace"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 64
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        if ($this->getAttribute($_entry_, "maturity")) {
            // line 65
            echo "\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Maturity</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
            // line 67
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "maturity"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 second-col\">
\t\t\t\t\t\t\t";
        // line 72
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        if ($this->getAttribute($_entry_, "publication")) {
            // line 73
            echo "\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Publication</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
            // line 75
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "publication"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Author</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
        // line 80
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "author"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Rating</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
        // line 84
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "rating"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 86
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        if ($this->getAttribute($_entry_, "price")) {
            // line 87
            echo "\t\t\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t\t\t<span class=\"note-label\">Average Price</span>
\t\t\t\t\t\t\t\t<span class=\"note-value\">";
            // line 89
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "price"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row notes-inner-row\">
\t\t\t\t\t\t<div class=\"note-details comments\">
\t\t\t\t\t\t\t<div class=\"note-select col-md-1\"><input type=\"checkbox\" value=\"select\" name=\"noteSelect\" ></div>
\t\t\t\t\t\t\t<div class=\"note-comment col-md-11\">";
        // line 97
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "conclusion"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t</article>
";
    }

    public function getTemplateName()
    {
        return "notes/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 97,  226 => 92,  219 => 89,  215 => 87,  212 => 86,  206 => 84,  198 => 80,  194 => 78,  187 => 75,  183 => 73,  180 => 72,  176 => 70,  169 => 67,  165 => 65,  162 => 64,  156 => 62,  148 => 58,  141 => 53,  135 => 52,  127 => 48,  120 => 45,  113 => 42,  104 => 37,  99 => 36,  94 => 35,  89 => 34,  84 => 33,  78 => 31,  73 => 30,  68 => 29,  63 => 28,  58 => 27,  50 => 26,  45 => 23,  40 => 22,  35 => 21,  31 => 19,  28 => 18,);
    }
}
