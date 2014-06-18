<?php

/* _includes/fieldlayoutdesigner */
class __TwigTemplate_ffcde36ce58fc63e2aa8aa41043fb92247c62fe9b0fd6d7810bc952628a1b026 extends Craft\BaseTemplate
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
        if ((!array_key_exists("customizableTabs", $context))) {
            $context["customizableTabs"] = true;
        }
        // line 2
        if (isset($context["customizableTabs"])) { $_customizableTabs_ = $context["customizableTabs"]; } else { $_customizableTabs_ = null; }
        if (((!$_customizableTabs_) && (!array_key_exists("pretendTabName", $context)))) {
            // line 3
            echo "\t";
            $context["pretendTabName"] = \Craft\Craft::t("Content");
        }
        // line 5
        echo "
";
        // line 6
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["groups"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getAllGroups", array(0 => "id"), "method");
        // line 7
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["fields"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getAllFields", array(0 => "id"), "method");
        // line 8
        echo "
";
        // line 9
        \Craft\craft()->templates->includeTranslations(
        	"Rename",
        	"Delete",
        	"Make required",
        	"Make not required",
        	"Remove",
        	"Give your tab a name."
        );
        // line 17
        echo "
";
        // line 18
        \Craft\craft()->templates->includeCssFile("//fonts.googleapis.com/css?family=Coming+Soon");
        // line 19
        echo "
";
        // line 42
        echo "


<div id=\"fieldlayoutform\" class=\"fieldlayoutform\">

\t<h2>";
        // line 47
        echo twig_escape_filter($this->env, \Craft\Craft::t("Design your field layout"), "html", null, true);
        echo "</h2>

\t";
        // line 49
        if (array_key_exists("instructions", $context)) {
            // line 50
            echo "\t\t<div class=\"instructions\">";
            if (isset($context["instructions"])) { $_instructions_ = $context["instructions"]; } else { $_instructions_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter($_instructions_), "html", null, true);
            echo "</div>
\t";
        }
        // line 52
        echo "
\t<div class=\"fld-tabs\">
\t\t";
        // line 54
        if (isset($context["fieldLayout"])) { $_fieldLayout_ = $context["fieldLayout"]; } else { $_fieldLayout_ = null; }
        if ($_fieldLayout_) {
            // line 55
            echo "\t\t\t";
            $context["macros"] = $this;
            // line 56
            echo "
\t\t\t";
            // line 57
            if (isset($context["customizableTabs"])) { $_customizableTabs_ = $context["customizableTabs"]; } else { $_customizableTabs_ = null; }
            if ($_customizableTabs_) {
                // line 58
                echo "\t\t\t\t";
                if (isset($context["fieldLayout"])) { $_fieldLayout_ = $context["fieldLayout"]; } else { $_fieldLayout_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_fieldLayout_, "getTabs", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 59
                    echo "\t\t\t\t\t";
                    if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
                    if (isset($context["customizableTabs"])) { $_customizableTabs_ = $context["customizableTabs"]; } else { $_customizableTabs_ = null; }
                    if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
                    echo $_macros_->gettab($_customizableTabs_, $this->getAttribute($_tab_, "name"), $this->getAttribute($_tab_, "getFields", array(), "method"));
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t";
                if (isset($context["macros"])) { $_macros_ = $context["macros"]; } else { $_macros_ = null; }
                if (isset($context["customizableTabs"])) { $_customizableTabs_ = $context["customizableTabs"]; } else { $_customizableTabs_ = null; }
                if (isset($context["pretendTabName"])) { $_pretendTabName_ = $context["pretendTabName"]; } else { $_pretendTabName_ = null; }
                if (isset($context["fieldLayout"])) { $_fieldLayout_ = $context["fieldLayout"]; } else { $_fieldLayout_ = null; }
                echo $_macros_->gettab($_customizableTabs_, $_pretendTabName_, $this->getAttribute($_fieldLayout_, "getFields", array(), "method"));
                echo "
\t\t\t";
            }
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t</div>

\t";
        // line 67
        if (isset($context["customizableTabs"])) { $_customizableTabs_ = $context["customizableTabs"]; } else { $_customizableTabs_ = null; }
        if ($_customizableTabs_) {
            // line 68
            echo "\t\t<div class=\"buttons\">
\t\t\t<div id=\"newtabbtn\" class=\"btn add icon\">";
            // line 69
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Tab"), "html", null, true);
            echo "</div>
\t\t\t<h3>";
            // line 70
            echo twig_escape_filter($this->env, \Craft\Craft::t("…Or use one of your field groups as a starting point:"), "html", null, true);
            echo "</h3>
\t\t</div>
\t";
        }
        // line 73
        echo "
\t<div class=\"unusedfields\">
\t\t";
        // line 75
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 76
            echo "\t\t\t";
            $context["totalUnselected"] = 0;
            // line 77
            echo "\t\t\t";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 78
                echo "\t\t\t\t";
                if (isset($context["fieldLayout"])) { $_fieldLayout_ = $context["fieldLayout"]; } else { $_fieldLayout_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if (((!$_fieldLayout_) || !twig_in_filter($this->getAttribute($_field_, "id"), $this->getAttribute($_fieldLayout_, "getFieldIds", array(), "method")))) {
                    // line 79
                    echo "\t\t\t\t\t";
                    if (isset($context["totalUnselected"])) { $_totalUnselected_ = $context["totalUnselected"]; } else { $_totalUnselected_ = null; }
                    $context["totalUnselected"] = ($_totalUnselected_ + 1);
                    // line 80
                    echo "\t\t\t\t";
                }
                // line 81
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
\t\t\t<div class=\"fld-tab unused";
            // line 83
            if (isset($context["totalUnselected"])) { $_totalUnselected_ = $context["totalUnselected"]; } else { $_totalUnselected_ = null; }
            if (($_totalUnselected_ == 0)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"tab sel\"><span>";
            // line 85
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"), "html", null, true);
            echo "</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"fld-tabcontent\">
\t\t\t\t\t";
            // line 88
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 89
                echo "\t\t\t\t\t\t";
                if (isset($context["fieldLayout"])) { $_fieldLayout_ = $context["fieldLayout"]; } else { $_fieldLayout_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                $context["selected"] = ($_fieldLayout_ && twig_in_filter($this->getAttribute($_field_, "id"), $this->getAttribute($_fieldLayout_, "getFieldIds", array(), "method")));
                // line 90
                echo "\t\t\t\t\t\t<div class=\"fld-field unused";
                if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
                if ($_selected_) {
                    echo " hidden";
                }
                echo "\" data-id=\"";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span>";
                // line 91
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "name"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t</div>

</div>

";
        // line 101
        ob_start();
        // line 102
        echo "\tvar initFLD = function() {
\t\tnew Craft.FieldLayoutDesigner('#fieldlayoutform', {
\t\t\tcustomizableTabs: ";
        // line 104
        if (isset($context["customizableTabs"])) { $_customizableTabs_ = $context["customizableTabs"]; } else { $_customizableTabs_ = null; }
        echo (($_customizableTabs_) ? ("true") : ("false"));
        echo "
\t\t});
\t};

\t";
        // line 108
        if (array_key_exists("tab", $context)) {
            // line 109
            echo "
\t\tvar \$fldTab = \$('#tab-";
            // line 110
            if (isset($context["tab"])) { $_tab_ = $context["tab"]; } else { $_tab_ = null; }
            echo twig_escape_filter($this->env, $_tab_, "html", null, true);
            echo "');

\t\tif (\$fldTab.hasClass('sel'))
\t\t{
\t\t\tinitFLD();
\t\t}
\t\telse
\t\t{
\t\t\t\$fldTab.on('activate.fld', function() {
\t\t\t\tinitFLD();
\t\t\t\t\$fldTab.off('activate.fld');
\t\t\t});
\t\t}

\t";
        } else {
            // line 125
            echo "
\t\tinitFLD();

\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 130
        echo "
";
        // line 131
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
    }

    // line 20
    public function gettab($_customizableTabs = null, $_tabName = null, $_tabFields = null)
    {
        $context = $this->env->mergeGlobals(array(
            "customizableTabs" => $_customizableTabs,
            "tabName" => $_tabName,
            "tabFields" => $_tabFields,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t<div class=\"fld-tab\">
\t\t<div class=\"tabs\">
\t\t\t<div class=\"tab sel";
            // line 23
            if (isset($context["customizableTabs"])) { $_customizableTabs_ = $context["customizableTabs"]; } else { $_customizableTabs_ = null; }
            if ($_customizableTabs_) {
                echo " draggable";
            }
            echo "\">
\t\t\t\t<span>";
            // line 24
            if (isset($context["tabName"])) { $_tabName_ = $context["tabName"]; } else { $_tabName_ = null; }
            echo twig_escape_filter($this->env, $_tabName_, "html", null, true);
            echo "</span>
\t\t\t\t";
            // line 25
            if (isset($context["customizableTabs"])) { $_customizableTabs_ = $context["customizableTabs"]; } else { $_customizableTabs_ = null; }
            if ($_customizableTabs_) {
                // line 26
                echo "\t\t\t\t\t<a class=\"settings icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"fld-tabcontent\">
\t\t\t";
            // line 31
            if (isset($context["tabFields"])) { $_tabFields_ = $context["tabFields"]; } else { $_tabFields_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_tabFields_);
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "\t\t\t\t<div class=\"fld-field";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "required")) {
                    echo " fld-required";
                }
                echo "\" data-id=\"";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldId"), "html", null, true);
                echo "\">
\t\t\t\t\t<a class=\"settings icon\" title=\"";
                // line 33
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<span>";
                // line 34
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "getField", array(), "method"), "name"), "html", null, true);
                echo "</span>
\t\t\t\t\t<input class=\"id-input\" type=\"hidden\" name=\"fieldLayout[";
                // line 35
                if (isset($context["tabName"])) { $_tabName_ = $context["tabName"]; } else { $_tabName_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_tabName_, "url"), "html", null, true);
                echo "][]\" value=\"";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldId"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 36
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "required")) {
                    echo "<input class=\"required-input\" type=\"hidden\" name=\"requiredFields[]\" value=\"";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fieldId"), "html", null, true);
                    echo "\">";
                }
                // line 37
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_includes/fieldlayoutdesigner";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 39,  386 => 37,  378 => 36,  370 => 35,  365 => 34,  361 => 33,  350 => 32,  345 => 31,  340 => 28,  334 => 26,  331 => 25,  326 => 24,  319 => 23,  315 => 21,  302 => 20,  297 => 131,  294 => 130,  287 => 125,  268 => 110,  265 => 109,  263 => 108,  255 => 104,  251 => 102,  249 => 101,  243 => 97,  235 => 94,  225 => 91,  214 => 90,  209 => 89,  204 => 88,  197 => 85,  189 => 83,  186 => 82,  180 => 81,  177 => 80,  173 => 79,  168 => 78,  162 => 77,  159 => 76,  154 => 75,  144 => 70,  137 => 68,  130 => 65,  127 => 64,  114 => 61,  102 => 59,  96 => 58,  93 => 57,  87 => 55,  84 => 54,  80 => 52,  73 => 50,  66 => 47,  59 => 42,  56 => 19,  54 => 18,  51 => 17,  42 => 9,  36 => 7,  33 => 6,  30 => 5,  23 => 2,  19 => 1,  150 => 73,  147 => 91,  140 => 69,  134 => 67,  131 => 78,  126 => 75,  121 => 72,  117 => 62,  110 => 63,  105 => 60,  101 => 52,  94 => 51,  90 => 56,  86 => 43,  82 => 41,  79 => 40,  75 => 38,  71 => 49,  67 => 27,  63 => 17,  60 => 16,  52 => 15,  46 => 14,  39 => 8,  35 => 10,  32 => 9,  28 => 7,  26 => 3,  24 => 3,);
    }
}
