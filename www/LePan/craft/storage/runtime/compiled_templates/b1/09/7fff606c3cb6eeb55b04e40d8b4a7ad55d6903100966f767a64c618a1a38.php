<?php

/* _elements/element */
class __TwigTemplate_b1097fff606c3cb6eeb55b04e40d8b4a7ad55d6903100966f767a64c618a1a38 extends Craft\BaseTemplate
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
        echo \Craft\craft()->templates->invokeHook("cp.elements.element", $context);

    }

    public function getTemplateName()
    {
        return "_elements/element";
    }

    public function getDebugInfo()
    {
        return array (  106 => 12,  92 => 11,  80 => 9,  76 => 7,  74 => 6,  68 => 5,  64 => 4,  46 => 3,  37 => 2,  61 => 11,  59 => 10,  55 => 8,  34 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
