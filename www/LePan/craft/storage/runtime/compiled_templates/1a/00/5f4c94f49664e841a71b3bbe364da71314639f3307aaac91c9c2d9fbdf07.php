<?php

/* _components/fieldtypes/Assets/settings */
class __TwigTemplate_1a005f4c94f49664e841a71b3bbe364da71314639f3307aaac91c9c2d9fbdf07 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["__internal_c2dc01b5796820e2571d496d431ad0eef9623f1c6910cfe8288b956e7a32186e"] = $this;
        // line 29
        echo "
";
        // line 30
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Restrict uploads to a single folder?"), "id" => "useSingleFolder-toggle", "name" => "useSingleFolder", "class" => "use-single-folder-cb", "value" => 1, "checked" => $this->getAttribute($_settings_, "useSingleFolder"), "toggle" => "single-folder-settings", "reverseToggle" => "multi-folder-settings"));
        // line 39
        echo "

<div id=\"multi-folder-settings\"";
        // line 41
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "useSingleFolder")) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 42
        if (isset($context["folderOptions"])) { $_folderOptions_ = $context["folderOptions"]; } else { $_folderOptions_ = null; }
        if ($_folderOptions_) {
            // line 43
            echo "\t\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["folderOptions"])) { $_folderOptions_ = $context["folderOptions"]; } else { $_folderOptions_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo $_forms_->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env, $_type_))), "id" => "sources", "name" => "sources", "options" => $_folderOptions_, "values" => $this->getAttribute($_settings_, "sources")));
            // line 50
            echo "
\t";
        } else {
            // line 52
            echo "\t\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            echo $_forms_->getfield(array("label" => \Craft\Craft::t("Sources")), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 54
            echo "
\t";
        }
        // line 56
        echo "

\t";
        // line 58
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["sourceOptions"])) { $_sourceOptions_ = $context["sourceOptions"]; } else { $_sourceOptions_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Default Upload Location"), "instructions" => ((\Craft\Craft::t("Where should files be uploaded when they are dragged directly onto the field, or uploaded from the front end?") . " ") . \Craft\Craft::t("Note that the subfolder path can contain variables like <code>{slug}</code> or <code>{author.username}</code>.")), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "defaultUploadLocationSubpath"), "method")), $context["__internal_c2dc01b5796820e2571d496d431ad0eef9623f1c6910cfe8288b956e7a32186e"]->getuploadLocationInput("defaultUploadLocation", $_settings_, $_sourceOptions_));
        // line 62
        echo "
</div>

<div id=\"single-folder-settings\"";
        // line 65
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((!$this->getAttribute($_settings_, "useSingleFolder"))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 66
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["sourceOptions"])) { $_sourceOptions_ = $context["sourceOptions"]; } else { $_sourceOptions_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Upload Location"), "instructions" => \Craft\Craft::t("Note that the subfolder path can contain variables like <code>{slug}</code> or <code>{author.username}</code>."), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "singleUploadLocationSubpath"), "method")), $context["__internal_c2dc01b5796820e2571d496d431ad0eef9623f1c6910cfe8288b956e7a32186e"]->getuploadLocationInput("singleUploadLocation", $_settings_, $_sourceOptions_));
        // line 70
        echo "
</div>

";
        // line 73
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Restrict allowed file types?"), "class" => "restrictFiles", "id" => "", "name" => "restrictFiles", "value" => 1, "checked" => $this->getAttribute($_settings_, "restrictFiles"), "toggle" => "restrict-allowed-types"));
        // line 81
        echo "

<div id=\"restrict-allowed-types\" ";
        // line 83
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((!$this->getAttribute($_settings_, "restrictFiles"))) {
            echo "class=\"hidden indent\"";
        }
        echo ">
\t";
        // line 84
        if (isset($context["fileKindOptions"])) { $_fileKindOptions_ = $context["fileKindOptions"]; } else { $_fileKindOptions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fileKindOptions_);
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 85
            echo "\t\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo $_forms_->getcheckboxField(array("label" => $this->getAttribute($_option_, "label"), "id" => ("allowedKinds-" . $this->getAttribute($_option_, "value")), "name" => "allowedKinds[]", "value" => $this->getAttribute($_option_, "value"), "checked" => twig_in_filter($this->getAttribute($_option_, "value"), $this->getAttribute($_settings_, "allowedKinds"))));
            // line 91
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "</div>

";
        // line 95
        if (isset($context["targetLocaleField"])) { $_targetLocaleField_ = $context["targetLocaleField"]; } else { $_targetLocaleField_ = null; }
        echo twig_escape_filter($this->env, $_targetLocaleField_, "html", null, true);
        echo "

";
        // line 97
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env, $_type_))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute($_settings_, "limit"), "size" => 2, "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "limit"), "method")));
        // line 105
        echo "
";
    }

    // line 3
    public function getuploadLocationInput($_name = null, $_settings = null, $_sourceOptions = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "settings" => $_settings,
            "sourceOptions" => $_sourceOptions,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "\t";
            $context["__internal_3c5d90b0c836b9b2fbeb51e0049e9a35abe8713be1a1c75b276690d8958e0e8d"] = $this->env->loadTemplate("_includes/forms");
            // line 5
            echo "\t<table class=\"inputs fullwidth\">
\t\t<tr>
\t\t\t<td class=\"thin\">
\t\t\t\t";
            // line 8
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["sourceOptions"])) { $_sourceOptions_ = $context["sourceOptions"]; } else { $_sourceOptions_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo $context["__internal_3c5d90b0c836b9b2fbeb51e0049e9a35abe8713be1a1c75b276690d8958e0e8d"]->getselect(array("id" => ($_name_ . "Source"), "name" => ($_name_ . "Source"), "options" => $_sourceOptions_, "value" => $this->getAttribute($_settings_, ($_name_ . "Source"), array(), "array")));
            // line 13
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 16
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo $context["__internal_3c5d90b0c836b9b2fbeb51e0049e9a35abe8713be1a1c75b276690d8958e0e8d"]->gettext(array("id" => ($_name_ . "Subpath"), "class" => "ltr", "name" => ($_name_ . "Subpath"), "value" => $this->getAttribute($_settings_, ($_name_ . "Subpath"), array(), "array"), "placeholder" => \Craft\Craft::t("path/to/subfolder")));
            // line 22
            echo "
\t\t\t</td>
\t\t</tr>
\t</table>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 22,  179 => 13,  174 => 8,  166 => 4,  148 => 105,  143 => 97,  137 => 95,  133 => 93,  126 => 91,  120 => 85,  115 => 84,  108 => 83,  104 => 81,  100 => 73,  83 => 65,  73 => 58,  69 => 56,  65 => 54,  61 => 52,  57 => 50,  40 => 41,  36 => 39,  32 => 30,  29 => 29,  27 => 28,  21 => 2,  19 => 1,  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 144,  230 => 143,  219 => 142,  214 => 141,  209 => 140,  205 => 138,  198 => 129,  193 => 126,  189 => 124,  184 => 16,  181 => 119,  177 => 117,  173 => 108,  169 => 5,  165 => 96,  161 => 94,  157 => 84,  153 => 3,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 67,  116 => 66,  111 => 63,  109 => 62,  105 => 58,  102 => 57,  99 => 54,  95 => 70,  92 => 51,  90 => 66,  87 => 48,  84 => 44,  80 => 42,  78 => 62,  74 => 35,  71 => 31,  67 => 30,  62 => 26,  58 => 24,  56 => 23,  53 => 22,  50 => 43,  47 => 42,  44 => 16,  41 => 15,  37 => 10,  34 => 9,  30 => 8,  28 => 7,  26 => 5,  24 => 27,);
    }
}
