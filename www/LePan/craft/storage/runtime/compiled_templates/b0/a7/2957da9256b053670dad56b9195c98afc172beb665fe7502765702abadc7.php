<?php

/* entries */
class __TwigTemplate_b0a72957da9256b053670dad56b9195c98afc172beb665fe7502765702abadc7 extends Craft\BaseTemplate
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
        // line 2
        $context["title"] = \Craft\Craft::t("Entries");
        // line 3
        $context["elementType"] = "Entry";
        // line 6
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["sections"] = $this->getAttribute($this->getAttribute($_craft_, "sections"), "getEditableSections", array(), "method");
        // line 7
        $context["newEntrySections"] = array();
        // line 9
        if (isset($context["sections"])) { $_sections_ = $context["sections"]; } else { $_sections_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_sections_);
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 10
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if ((($this->getAttribute($_section_, "type") != "single") && $this->getAttribute($_currentUser_, "can", array(0 => ("createEntries:" . $this->getAttribute($_section_, "id"))), "method"))) {
                // line 11
                if (isset($context["newEntrySections"])) { $_newEntrySections_ = $context["newEntrySections"]; } else { $_newEntrySections_ = null; }
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                $context["newEntrySections"] = twig_array_merge($_newEntrySections_, array(0 => $_section_));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        if (array_key_exists("sectionHandle", $context)) {
            // line 39
            if (isset($context["sectionHandle"])) { $_sectionHandle_ = $context["sectionHandle"]; } else { $_sectionHandle_ = null; }
            \Craft\craft()->templates->includeJs((("window.defaultSectionHandle = \"" . $_sectionHandle_) . "\";"));
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if (isset($context["newEntrySections"])) { $_newEntrySections_ = $context["newEntrySections"]; } else { $_newEntrySections_ = null; }
        if (twig_length_filter($this->env, $_newEntrySections_)) {
            // line 18
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 19
            if (isset($context["newEntrySections"])) { $_newEntrySections_ = $context["newEntrySections"]; } else { $_newEntrySections_ = null; }
            if ((twig_length_filter($this->env, $_newEntrySections_) > 1)) {
                // line 20
                echo "\t\t\t\t<div class=\"btn submit menubtn add icon\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry"), "html", null, true);
                echo "</div>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 23
                if (isset($context["newEntrySections"])) { $_newEntrySections_ = $context["newEntrySections"]; } else { $_newEntrySections_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_newEntrySections_);
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("entries/" . $this->getAttribute($_section_, "handle")) . "/new")), "html", null, true);
                    echo "\">";
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_section_, "name")), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t<a class=\"btn submit add icon\" href=\"";
                if (isset($context["newEntrySections"])) { $_newEntrySections_ = $context["newEntrySections"]; } else { $_newEntrySections_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("entries/" . $this->getAttribute($this->getAttribute($_newEntrySections_, 0, array(), "array"), "handle")) . "/new")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 31
            echo "\t\t</div>
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  117 => 33,  113 => 31,  104 => 29,  99 => 26,  86 => 24,  81 => 23,  74 => 20,  71 => 19,  68 => 18,  64 => 17,  61 => 16,  54 => 39,  52 => 38,  43 => 11,  39 => 10,  34 => 9,  32 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
