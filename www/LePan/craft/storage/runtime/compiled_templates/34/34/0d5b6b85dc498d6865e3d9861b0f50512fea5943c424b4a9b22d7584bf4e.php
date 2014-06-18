<?php

/* news */
class __TwigTemplate_34340d5b6b85dc498d6865e3d9861b0f50512fea5943c424b4a9b22d7584bf4e extends Craft\BaseTemplate
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
        $context["title"] = "News";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "\t<h1>News</h1>

\t";
        // line 19
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "entries"), "section", array(0 => "news"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 20
            echo "\t\t<article>
\t\t\t<h3><a href=\"";
            // line 21
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "url"), "html", null, true);
            echo "\">";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "title"), "html", null, true);
            echo "</a></h3>
\t\t\t<p>Posted on ";
            // line 22
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "postDate"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
            echo "</p>
\t\t\t";
            // line 23
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entry_, "body"), "getPage", array(0 => 1), "method"), "html", null, true);
            echo "
\t\t\t<p><a href=\"";
            // line 24
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "url"), "html", null, true);
            echo "\">Continue reading</a></p>
\t\t</article>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "news";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  58 => 23,  53 => 22,  45 => 21,  42 => 20,  37 => 19,  33 => 17,  30 => 16,  25 => 14,);
    }
}
