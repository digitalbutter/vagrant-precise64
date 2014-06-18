<?php

/* _special/email */
class __TwigTemplate_fc7a401d78d596ffabc5736a854b6f4f9f40846cf84dc5da7356de2218fabb44 extends Craft\BaseTemplate
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
        echo "<html>
<body>
\t<div style=\"max-width: 500px; font-size: 13px; line-height: 18px; font-family: HelveticaNeue, sans-serif; color: #29323d; background: #fff;\">
\t\t";
        // line 4
        if (isset($context["body"])) { $_body_ = $context["body"]; } else { $_body_ = null; }
        echo twig_escape_filter($this->env, $_body_, "html", null, true);
        echo "
\t</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_special/email";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 5,  26 => 3,  24 => 4,  19 => 1,);
    }
}
