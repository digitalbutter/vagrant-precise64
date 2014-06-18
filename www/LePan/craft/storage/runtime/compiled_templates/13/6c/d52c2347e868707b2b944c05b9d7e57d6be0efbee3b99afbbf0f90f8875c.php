<?php

/* dashboard */
class __TwigTemplate_136cd52c2347e868707b2b944c05b9d7e57d6be0efbee3b99afbbf0f90f8875c extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Dashboard");
        // line 3
        \Craft\craft()->templates->includeCssResource("css/dashboard.css");
        // line 6
        ob_start();
        // line 7
        echo "\t<a class=\"btn settings icon\" href=\"";
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard/settings"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
        echo "\"></a>
";
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"grid\">
\t\t";
        // line 13
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (($this->getAttribute($_currentUser_, "admin") && $this->getAttribute($this->getAttribute($_craft_, "deprecator"), "getTotalLogs", array(), "method"))) {
            // line 14
            echo "\t\t\t<div class=\"item\" data-colspan=\"4\">
\t\t\t\t<div class=\"pane\">
\t\t\t\t\t<p id=\"deprecationnotice\" data-icon=\"alert\">";
            // line 16
            echo \Craft\Craft::t("New deprecation errors have been logged. Please take a minute to <a class=\"go\" href=\"{url}\">review them</a>", array("url" => \Craft\UrlHelper::getUrl("utils/deprecationerrors")));
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 20
        echo "
\t\t";
        // line 21
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "dashboard"), "getUserWidgets"));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 22
            echo "\t\t\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
            $context["widgetType"] = $this->getAttribute($this->getAttribute($_craft_, "dashboard"), "populateWidgetType", array(0 => $_widget_), "method");
            // line 23
            echo "\t\t\t";
            if (isset($context["widgetType"])) { $_widgetType_ = $context["widgetType"]; } else { $_widgetType_ = null; }
            if ($_widgetType_) {
                // line 24
                echo "\t\t\t\t";
                if (isset($context["widgetType"])) { $_widgetType_ = $context["widgetType"]; } else { $_widgetType_ = null; }
                $context["body"] = $this->getAttribute($_widgetType_, "getBodyHtml", array(), "method");
                // line 25
                echo "\t\t\t\t";
                if (isset($context["body"])) { $_body_ = $context["body"]; } else { $_body_ = null; }
                if ((!($_body_ === false))) {
                    // line 26
                    echo "\t\t\t\t\t<div class=\"item\" data-colspan=\"";
                    if (isset($context["widgetType"])) { $_widgetType_ = $context["widgetType"]; } else { $_widgetType_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_widgetType_, "getColspan", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<div id=\"widget";
                    // line 27
                    if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_widget_, "id"), "html", null, true);
                    echo "\" class=\"pane widget ";
                    if (isset($context["widgetType"])) { $_widgetType_ = $context["widgetType"]; } else { $_widgetType_ = null; }
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($_widgetType_, "classHandle")), "html", null, true);
                    echo "\" data-id=\"";
                    if (isset($context["widget"])) { $_widget_ = $context["widget"]; } else { $_widget_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_widget_, "id"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"spinner body-loading\"></div>
\t\t\t\t\t\t\t<h2>";
                    // line 29
                    if (isset($context["widgetType"])) { $_widgetType_ = $context["widgetType"]; } else { $_widgetType_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_widgetType_, "title"), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t\t<div class=\"body\">";
                    // line 30
                    if (isset($context["body"])) { $_body_ = $context["body"]; } else { $_body_ = null; }
                    echo $_body_;
                    echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t";
            }
            // line 35
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  122 => 35,  119 => 34,  111 => 30,  106 => 29,  94 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  71 => 22,  66 => 21,  63 => 20,  56 => 16,  52 => 14,  48 => 13,  45 => 12,  42 => 11,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
