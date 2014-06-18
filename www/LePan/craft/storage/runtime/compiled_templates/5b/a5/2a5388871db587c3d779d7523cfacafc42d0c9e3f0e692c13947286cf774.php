<?php

/* _layout */
class __TwigTemplate_5ba52a5388871db587c3d779d7523cfacafc42d0c9e3f0e692c13947286cf774 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\"/>
\t<title>";
        // line 16
        if (array_key_exists("title", $context)) {
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            echo " - ";
        }
        echo "</title>
\t<link rel=\"home\" href=\"";
        // line 17
        if (isset($context["siteUrl"])) { $_siteUrl_ = $context["siteUrl"]; } else { $_siteUrl_ = null; }
        echo twig_escape_filter($this->env, $_siteUrl_, "html", null, true);
        echo "\" />

\t<link href=\"";
        // line 19
        if (isset($context["siteUrl"])) { $_siteUrl_ = $context["siteUrl"]; } else { $_siteUrl_ = null; }
        echo twig_escape_filter($this->env, $_siteUrl_, "html", null, true);
        echo "/css/lepan.css\" rel=\"stylesheet\">

\t<!-- Bootstrap -->
    <link href=\"";
        // line 22
        if (isset($context["siteUrl"])) { $_siteUrl_ = $context["siteUrl"]; } else { $_siteUrl_ = null; }
        echo twig_escape_filter($this->env, $_siteUrl_, "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">

</head>

<body>
\t<div id=\"container\" class=\"container\">
\t\t<header id=\"header\">
\t\t\t<h1><a href=\"";
        // line 29
        if (isset($context["siteUrl"])) { $_siteUrl_ = $context["siteUrl"]; } else { $_siteUrl_ = null; }
        echo twig_escape_filter($this->env, $_siteUrl_, "html", null, true);
        echo "\">";
        if (isset($context["siteName"])) { $_siteName_ = $context["siteName"]; } else { $_siteName_ = null; }
        echo twig_escape_filter($this->env, $_siteName_, "html", null, true);
        echo "</a></h1>
\t\t</header>

\t\t<main id=\"content\" role=\"main\" class=\"container\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "\t\t</main>

\t\t<footer id=\"footer\">
\t\t\tCopyright ";
        // line 40
        if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_now_, "year"), "html", null, true);
        echo " LePan. All rights reserved.
\t\t</footer>
\t</div>

\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 47
        if (isset($context["siteUrl"])) { $_siteUrl_ = $context["siteUrl"]; } else { $_siteUrl_ = null; }
        echo twig_escape_filter($this->env, $_siteUrl_, "html", null, true);
        echo "/js/bootstrap.min.js\"></script>

    ";
        // line 49
        $this->displayBlock('javascript', $context, $blocks);
        // line 52
        echo "</body>
</html>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t<p>If you see me, you haven’t set your <code>";
        echo "{% block content %}…{% endblock %}";
        echo "</code> yet.</p>
\t\t\t\t<p>See Twig’s <a href=\"http://twig.sensiolabs.org/doc/templates.html#template-inheritance\">Template Inheritance</a> documentation for an explanation.</p>
\t\t\t";
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        // line 50
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 50,  114 => 49,  106 => 34,  103 => 33,  97 => 52,  95 => 49,  89 => 47,  78 => 40,  73 => 37,  71 => 33,  60 => 29,  49 => 22,  42 => 19,  36 => 17,  28 => 16,  21 => 11,);
    }
}
