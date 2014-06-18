<?php

/* _elements/indexcontainer */
class __TwigTemplate_1b8de79f2d98170bd7fa75d64cf1a1f6ec4814a5bb1d7e166084db21a7e1e847 extends Craft\BaseTemplate
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
        $context["__internal_114f3730dc3636564245c686e7677be38096e2adb62b7d22ed0e3c38881ef696"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        \Craft\craft()->templates->includeTranslations(
        	"Display in a table",
        	"Display hierarchically",
        	"Display as thumbnails"
        );
        // line 8
        echo "
";
        // line 9
        if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
        $context["context"] = ((array_key_exists("context", $context)) ? ($_context_) : ("index"));
        // line 10
        if (isset($context["showStatusMenu"])) { $_showStatusMenu_ = $context["showStatusMenu"]; } else { $_showStatusMenu_ = null; }
        if (isset($context["elementType"])) { $_elementType_ = $context["elementType"]; } else { $_elementType_ = null; }
        $context["showStatusMenu"] = (((array_key_exists("showStatusMenu", $context) && ($_showStatusMenu_ != "auto"))) ? ($_showStatusMenu_) : ($this->getAttribute($_elementType_, "hasStatuses", array(), "method")));
        // line 11
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
        if (isset($context["showLocaleMenu"])) { $_showLocaleMenu_ = $context["showLocaleMenu"]; } else { $_showLocaleMenu_ = null; }
        if (isset($context["elementType"])) { $_elementType_ = $context["elementType"]; } else { $_elementType_ = null; }
        $context["showLocaleMenu"] = ((($this->getAttribute($_craft_, "isLocalized", array(), "method") && ($_context_ == "index"))) ? ((((array_key_exists("showLocaleMenu", $context) && ($_showLocaleMenu_ != "auto"))) ? ($_showLocaleMenu_) : ($this->getAttribute($_elementType_, "isLocalized", array(), "method")))) : (false));
        // line 12
        echo "
<div class=\"main\">
\t<div class=\"toolbar\">
\t\t<table class=\"inputs fullwidth\">
\t\t\t<tr>
\t\t\t\t";
        // line 17
        if (isset($context["showStatusMenu"])) { $_showStatusMenu_ = $context["showStatusMenu"]; } else { $_showStatusMenu_ = null; }
        if ($_showStatusMenu_) {
            // line 18
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn statusmenubtn\"><span class=\"status\"></span>";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t<li><a data-status=\"\" class=\"sel\"><span class=\"status\"></span>";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
            // line 23
            if (isset($context["elementType"])) { $_elementType_ = $context["elementType"]; } else { $_elementType_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_elementType_, "getStatuses", array(), "method"));
            foreach ($context['_seq'] as $context["status"] => $context["label"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t<li><a data-status=\"";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo twig_escape_filter($this->env, $_status_, "html", null, true);
                echo "\"><span class=\"status ";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo twig_escape_filter($this->env, $_status_, "html", null, true);
                echo "\"></span> ";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t";
        if (isset($context["showLocaleMenu"])) { $_showLocaleMenu_ = $context["showLocaleMenu"]; } else { $_showLocaleMenu_ = null; }
        if ($_showLocaleMenu_) {
            // line 31
            echo "\t\t\t\t\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context["editableLocaleIds"] = $this->getAttribute($this->getAttribute($_craft_, "i18n"), "getEditableLocaleIds", array(), "method");
            // line 32
            echo "\t\t\t\t\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["editableLocaleIds"])) { $_editableLocaleIds_ = $context["editableLocaleIds"]; } else { $_editableLocaleIds_ = null; }
            if (twig_in_filter($this->getAttribute($_craft_, "locale"), $_editableLocaleIds_)) {
                // line 33
                echo "\t\t\t\t\t\t";
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                $context["initialLocale"] = $this->getAttribute($this->getAttribute($_craft_, "i18n"), "getCurrentLocale", array(), "method");
                // line 34
                echo "\t\t\t\t\t";
            } elseif (twig_length_filter($this->env, $_editableLocaleIds_)) {
                // line 35
                echo "\t\t\t\t\t\t";
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                if (isset($context["editableLocaleIds"])) { $_editableLocaleIds_ = $context["editableLocaleIds"]; } else { $_editableLocaleIds_ = null; }
                $context["initialLocale"] = $this->getAttribute($this->getAttribute($_craft_, "i18n"), "getLocaleById", array(0 => twig_first($this->env, $_editableLocaleIds_)), "method");
                // line 36
                echo "\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t";
                $context["initialLocale"] = null;
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t<div class=\"btn menubtn localemenubtn\">";
            // line 40
            if (isset($context["initialLocale"])) { $_initialLocale_ = $context["initialLocale"]; } else { $_initialLocale_ = null; }
            echo twig_escape_filter($this->env, (($_initialLocale_) ? ($this->getAttribute($_initialLocale_, "getName", array(), "method")) : ("")), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t";
            // line 43
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "i18n"), "getEditableLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t<li><a";
                if (isset($context["initialLocale"])) { $_initialLocale_ = $context["initialLocale"]; } else { $_initialLocale_ = null; }
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                if (($_initialLocale_ && ($this->getAttribute($_locale_, "getId", array(), "method") == $this->getAttribute($_initialLocale_, "getId", array(), "method")))) {
                    echo " class=\"sel\"";
                }
                echo " data-locale=\"";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "getId", array(), "method"), "html", null, true);
                echo "\">";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "getName", array(), "method"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t<td>
\t\t\t\t\t<div class=\"texticon search icon\">
\t\t\t\t\t\t";
        // line 52
        echo $context["__internal_114f3730dc3636564245c686e7677be38096e2adb62b7d22ed0e3c38881ef696"]->gettext(array("placeholder" => \Craft\Craft::t("Search")));
        // line 54
        echo "
\t\t\t\t\t\t<div class=\"clear hidden\" title=\"";
        // line 55
        echo twig_escape_filter($this->env, \Craft\Craft::t("Clear"), "html", null, true);
        echo "\"></div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"thin viewbtns hidden\"></td>
\t\t\t</tr>
\t\t</table>
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t<div class=\"elements\"></div>

\t<div class=\"centeralign\">
\t\t<div class=\"spinner loadingmore hidden\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/indexcontainer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 55,  173 => 54,  171 => 52,  167 => 50,  161 => 46,  142 => 44,  137 => 43,  130 => 40,  127 => 39,  124 => 38,  121 => 37,  118 => 36,  110 => 34,  106 => 33,  101 => 32,  93 => 30,  66 => 23,  62 => 22,  56 => 19,  53 => 18,  50 => 17,  37 => 11,  30 => 9,  21 => 3,  19 => 1,  102 => 35,  97 => 31,  92 => 33,  87 => 26,  78 => 30,  72 => 18,  70 => 17,  67 => 16,  63 => 15,  60 => 14,  55 => 40,  51 => 26,  49 => 25,  46 => 24,  44 => 23,  41 => 11,  38 => 8,  35 => 7,  33 => 10,  26 => 3,  120 => 34,  117 => 33,  113 => 35,  104 => 29,  99 => 26,  86 => 24,  81 => 31,  74 => 20,  71 => 24,  68 => 18,  64 => 17,  61 => 16,  54 => 39,  52 => 38,  43 => 12,  39 => 10,  34 => 9,  32 => 7,  29 => 4,  27 => 8,  25 => 2,);
    }
}
