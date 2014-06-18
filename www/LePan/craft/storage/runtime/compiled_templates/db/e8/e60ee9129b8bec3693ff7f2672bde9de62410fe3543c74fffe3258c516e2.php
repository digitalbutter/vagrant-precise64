<?php

/* index */
class __TwigTemplate_dbe8e60ee9129b8bec3693ff7f2672bde9de62410fe3543c74fffe3258c516e2 extends Craft\BaseTemplate
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

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
\t";
        // line 24
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "entries"), "section", array(0 => "wines"), "method"), "limit", array(), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 25
            echo "\t<article>
\t\t";
            // line 26
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "entries"), "section", array(0 => "notes"), "method"), "limit", array(), "method"), "find", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 27
                echo "\t\t";
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if (($this->getAttribute($_block_, "id") == $this->getAttribute($_entry_, "wineList"))) {
                    // line 28
                    echo "\t\t";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "index") == 1)) {
                        // line 29
                        echo "\t\t<div class=\"row header-row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong><a href=\"";
                        // line 33
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "url"), "html", null, true);
                        echo "\">";
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "wineName"), "html", null, true);
                        echo "</a></strong>, 
\t\t\t\t\t\t\t\t<strong><a href=\"\">";
                        // line 34
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "vintage"), "html", null, true);
                        echo "</a></strong>, 
\t\t\t\t\t\t\t\t<strong><a href=\"\">";
                        // line 35
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "district"), "html", null, true);
                        echo "</a></strong>, 
\t\t\t\t\t\t\t\t<strong><a href=\"\">";
                        // line 36
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "subRegion"), "html", null, true);
                        echo "</a></strong>, 
\t\t\t\t\t\t\t\t<strong><a href=\"\">";
                        // line 37
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "region"), "html", null, true);
                        echo "</a></strong>, 
\t\t\t\t\t\t\t\t<strong><a href=\"\">";
                        // line 38
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "country"), "html", null, true);
                        echo "</a></strong>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<img class=\"star-img\" src=\"";
                        // line 40
                        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img class=\"star-img\" src=\"";
                        // line 41
                        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img class=\"star-img\" src=\"";
                        // line 42
                        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img class=\"star-img\" src=\"";
                        // line 43
                        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<img class=\"star-img\" src=\"";
                        // line 44
                        if (isset($context["globalUrls"])) { $_globalUrls_ = $context["globalUrls"]; } else { $_globalUrls_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_globalUrls_, "starUrl"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 second-col\">
\t\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t\t<p><strong>Color</strong><br> ";
                        // line 49
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "color"), "label"), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t\t<p><strong>Style</strong><br> ";
                        // line 52
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_block_, "style"), "label"), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wine-details\">
\t\t\t\t\t\t\t<p><strong>Grape Variety</strong><br>";
                        // line 55
                        if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_block_, "grapeVariety"), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
                    }
                    // line 60
                    echo "\t\t\t<div class=\"row notes-row\">
\t\t\t\t<div class=\"col-md-6 first-col\">
\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<span class=\"note-label\">Tasting Date</span>
\t\t\t\t\t\t<span class=\"note-value\">";
                    // line 64
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "tastingDate"), "format", array(0 => "d F Y"), "method"), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<span class=\"note-label\">Tasting Place</span>
\t\t\t\t\t\t<span class=\"note-value\">";
                    // line 68
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "tastingPlace"), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    // line 70
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    if ($this->getAttribute($_entry_, "maturity")) {
                        // line 71
                        echo "\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<span class=\"note-label\">Maturity</span>
\t\t\t\t\t\t<span class=\"note-value\">";
                        // line 73
                        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "maturity"), "html", null, true);
                        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 76
                    echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 second-col\">
\t\t\t\t\t";
                    // line 78
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    if ($this->getAttribute($_entry_, "publication")) {
                        // line 79
                        echo "\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<span class=\"note-label\">Publication</span>
\t\t\t\t\t\t<span class=\"note-value\">";
                        // line 81
                        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "publication"), "html", null, true);
                        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<span class=\"note-label\">Author</span>
\t\t\t\t\t\t<span class=\"note-value\">";
                    // line 86
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "author"), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<span class=\"note-label\">Rating</span>
\t\t\t\t\t\t<span class=\"note-value\">";
                    // line 90
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "rating"), "html", null, true);
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    // line 92
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    if ($this->getAttribute($_entry_, "price")) {
                        // line 93
                        echo "\t\t\t\t\t<div class=\"note-details\">
\t\t\t\t\t\t<span class=\"note-label\">Average Price</span>
\t\t\t\t\t\t<span class=\"note-value\">";
                        // line 95
                        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "price"), "html", null, true);
                        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row notes-inner-row\">
\t\t\t\t<div class=\"note-details comments\">
\t\t\t\t\t<div class=\"note-select col-md-1\"><input type=\"checkbox\" value=\"select\" name=\"noteSelect\" ></div>
\t\t\t\t\t<div class=\"note-comment col-md-11\">";
                    // line 103
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "conclusion"), "html", null, true);
                    echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 107
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t</article>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "

";
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 110,  274 => 108,  260 => 107,  252 => 103,  245 => 98,  238 => 95,  234 => 93,  231 => 92,  225 => 90,  217 => 86,  213 => 84,  206 => 81,  202 => 79,  199 => 78,  195 => 76,  188 => 73,  184 => 71,  181 => 70,  175 => 68,  167 => 64,  161 => 60,  152 => 55,  145 => 52,  138 => 49,  129 => 44,  124 => 43,  119 => 42,  114 => 41,  109 => 40,  103 => 38,  98 => 37,  93 => 36,  88 => 35,  83 => 34,  75 => 33,  69 => 29,  65 => 28,  60 => 27,  42 => 26,  39 => 25,  34 => 24,  31 => 23,  28 => 22,);
    }
}
