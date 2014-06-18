<?php

/* _elements/sources */
class __TwigTemplate_a241047dde30c92b2aba4dedc8ae5038e7b0dc88d68cb4683fcdc2cb02e0180e extends Craft\BaseTemplate
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
        if (isset($context["sourceLevel"])) { $_sourceLevel_ = $context["sourceLevel"]; } else { $_sourceLevel_ = null; }
        $context["sourceLevel"] = ((array_key_exists("sourceLevel", $context)) ? ($_sourceLevel_) : (1));
        // line 3
        echo "<ul data-level=\"";
        if (isset($context["sourceLevel"])) { $_sourceLevel_ = $context["sourceLevel"]; } else { $_sourceLevel_ = null; }
        echo twig_escape_filter($this->env, $_sourceLevel_, "html", null, true);
        echo "\">
\t";
        // line 4
        if (isset($context["sources"])) { $_sources_ = $context["sources"]; } else { $_sources_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_sources_);
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
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 5
            echo "\t\t";
            if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
            if ($this->getAttribute($_source_, "heading", array(), "any", true, true)) {
                // line 6
                echo "\t\t\t<li class=\"heading\"><span>";
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_source_, "heading"), "html", null, true);
                echo "</span></li>
\t\t";
            } else {
                // line 8
                echo "\t\t\t<li>
\t\t\t\t<a data-key=\"";
                // line 9
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"";
                // line 10
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                if (($this->getAttribute($_source_, "hasThumbs", array(), "any", true, true) && $this->getAttribute($_source_, "hasThumbs"))) {
                    echo " data-has-thumbs=\"1\"";
                }
                // line 11
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                if (($this->getAttribute($_source_, "structureId", array(), "any", true, true) && $this->getAttribute($_source_, "structureId"))) {
                    echo " data-has-structure=\"1\" data-structure-id=\"";
                    if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_source_, "structureId"), "html", null, true);
                    echo "\"";
                }
                // line 12
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                if ($this->getAttribute($_source_, "data", array(), "any", true, true)) {
                    // line 13
                    if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_source_, "data"));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        if (isset($context["dataKey"])) { $_dataKey_ = $context["dataKey"]; } else { $_dataKey_ = null; }
                        echo twig_escape_filter($this->env, $_dataKey_, "html", null, true);
                        echo "=\"";
                        if (isset($context["dataVal"])) { $_dataVal_ = $context["dataVal"]; } else { $_dataVal_ = null; }
                        echo twig_escape_filter($this->env, $_dataVal_, "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 15
                echo ">";
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_source_, "label"), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 16
                if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                if (($this->getAttribute($_source_, "nested", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_source_, "nested"))))) {
                    // line 17
                    echo "\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t";
                    // line 18
                    if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
                    if (isset($context["sourceLevel"])) { $_sourceLevel_ = $context["sourceLevel"]; } else { $_sourceLevel_ = null; }
                    $this->env->loadTemplate("_elements/sources")->display(array_merge($context, array("sources" => $this->getAttribute($_source_, "nested"), "sourceLevel" => ($_sourceLevel_ + 1))));
                    // line 22
                    echo "\t\t\t\t";
                }
                // line 23
                echo "\t\t\t</li>
\t\t";
            }
            // line 25
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 26,  116 => 23,  109 => 18,  103 => 16,  80 => 13,  77 => 12,  69 => 11,  57 => 8,  28 => 4,  22 => 3,  176 => 55,  173 => 54,  171 => 52,  167 => 50,  161 => 46,  142 => 44,  137 => 43,  130 => 40,  127 => 39,  124 => 38,  121 => 37,  118 => 36,  110 => 34,  106 => 17,  101 => 32,  93 => 30,  66 => 23,  62 => 22,  56 => 19,  53 => 18,  50 => 6,  37 => 11,  30 => 9,  21 => 3,  19 => 1,  102 => 35,  97 => 15,  92 => 33,  87 => 26,  78 => 30,  72 => 18,  70 => 17,  67 => 16,  63 => 15,  60 => 9,  55 => 40,  51 => 26,  49 => 25,  46 => 5,  44 => 23,  41 => 11,  38 => 8,  35 => 7,  33 => 10,  26 => 3,  120 => 25,  117 => 33,  113 => 22,  104 => 29,  99 => 26,  86 => 24,  81 => 31,  74 => 20,  71 => 24,  68 => 18,  64 => 10,  61 => 16,  54 => 39,  52 => 38,  43 => 12,  39 => 10,  34 => 9,  32 => 7,  29 => 4,  27 => 8,  25 => 2,);
    }
}
