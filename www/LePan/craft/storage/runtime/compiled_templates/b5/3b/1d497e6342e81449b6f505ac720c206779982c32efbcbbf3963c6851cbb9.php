<?php

/* users */
class __TwigTemplate_b53b1d497e6342e81449b6f505ac720c206779982c32efbcbbf3963c6851cbb9 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/elementindex");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (($_CraftEdition_ != $_CraftPro_)) {
            // line 2
            throw new \Craft\HttpException(404);
        }
        // line 5
        \Craft\craft()->userSession->requirePermission("editUsers");
        // line 8
        $context["title"] = \Craft\Craft::t("Users");
        // line 9
        $context["elementType"] = "User";
        // line 11
        $context["docsUrl"] = "http://buildwithcraft.com/docs/users";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_sidebar($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if ($this->getAttribute($_currentUser_, "can", array(0 => "registerUsers"), "method")) {
            // line 15
            echo "\t\t<div class=\"buttons\">
\t\t\t<a class=\"btn submit add icon\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("users/new"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New User"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        // line 19
        echo "
\t";
        // line 20
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "users";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  61 => 19,  53 => 16,  50 => 15,  46 => 14,  43 => 13,  38 => 11,  36 => 9,  34 => 8,  32 => 5,  29 => 2,  25 => 1,);
    }
}
