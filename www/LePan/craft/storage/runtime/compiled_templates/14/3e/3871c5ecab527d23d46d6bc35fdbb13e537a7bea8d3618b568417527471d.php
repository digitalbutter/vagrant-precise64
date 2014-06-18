<?php

/* _layouts/base */
class __TwigTemplate_143e3871c5ecab527d23d46d6bc35fdbb13e537a7bea8d3618b568417527471d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->templates->includeCssResource("css/craft.css", true);
        // line 3
        $context["siteName"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getSiteName", array(), "method");
        // line 4
        $context["docTitle"] = ((array_key_exists("docTitle", $context)) ? ($this->getContext($context, "docTitle")) : (strip_tags($this->getContext($context, "title"))));
        // line 6
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "</head>
<body class=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "getLocaleData", array(), "method"), "getOrientation", array(), "method"), "html", null, true);
        echo "\">
\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "\t";
        $this->displayBlock('foot', $context, $blocks);
        // line 24
        echo "</body>
</html>
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta charset=\"utf-8\">
\t<title>";
        // line 12
        echo twig_escape_filter($this->env, (($this->getContext($context, "docTitle") . ((($this->getContext($context, "docTitle") && $this->getContext($context, "siteName"))) ? (" - ") : (""))) . $this->getContext($context, "siteName")), "html", null, true);
        echo "</title>
\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getHeadHtmlFunction(), "html", null, true);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<script type=\"text/javascript\">
\t\t// Fix for Firefox autofocus CSS bug
\t\t// See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
\t</script>
\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_foot($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  75 => 22,  64 => 13,  60 => 12,  56 => 10,  53 => 9,  47 => 24,  44 => 23,  38 => 21,  33 => 9,  28 => 6,  26 => 4,  24 => 3,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  63 => 26,  61 => 25,  59 => 24,  55 => 22,  50 => 18,  45 => 12,  43 => 11,  41 => 10,  35 => 20,  57 => 23,  54 => 18,  52 => 19,  46 => 14,  42 => 22,  39 => 11,  31 => 6,  29 => 6,  27 => 3,  25 => 4,);
    }
}
