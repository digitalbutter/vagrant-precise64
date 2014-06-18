<?php

/* _components/fieldtypes/Matrix/settings */
class __TwigTemplate_6928fe7c6dc9bd30239e366927e02ae77f05a377f74a23a4735ce7840f3ba029 extends Craft\BaseTemplate
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
        // line 4
        ob_start();
        // line 5
        echo "\t<div class=\"mc-sidebar block-types\">
\t\t<div class=\"col-inner-container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 8
        echo twig_escape_filter($this->env, \Craft\Craft::t("Block Types"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t";
        // line 11
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_settings_, "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 12
            echo "\t\t\t\t\t<div class=\"matrixconfigitem mci-blocktype";
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            if ($this->getAttribute($_blockType_, "hasFieldErrors")) {
                echo " error";
            }
            echo "\" data-id=\"";
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "id"), "html", null, true);
            echo "\"";
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            if ($this->getAttribute($_blockType_, "hasErrors", array(), "method")) {
                echo " data-errors=\"";
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_blockType_, "getErrors", array(), "method")), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t\t\t<div class=\"name\">";
            // line 13
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            if ($this->getAttribute($_blockType_, "name")) {
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "name"), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
\t\t\t\t\t\t<div class=\"handle code\">";
            // line 14
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            if ($this->getAttribute($_blockType_, "handle")) {
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "handle"), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<a class=\"move icon\" title=\"";
            // line 16
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t\t\t<a class=\"settings icon";
            // line 17
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            if ($this->getAttribute($_blockType_, "hasErrors", array(), "method")) {
                echo " error";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input class=\"hidden\" name=\"blockTypes[";
            // line 19
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "id"), "html", null, true);
            echo "][name]\" value=\"";
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "name"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<input class=\"hidden\" name=\"blockTypes[";
            // line 20
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "id"), "html", null, true);
            echo "][handle]\" value=\"";
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "handle"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t<div class=\"btn add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New block type"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"mc-sidebar fields\">
\t\t<div class=\"col-inner-container hidden\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 30
        echo twig_escape_filter($this->env, \Craft\Craft::t("Fields"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t";
        // line 33
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_settings_, "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 34
            echo "\t\t\t\t\t<div data-id=\"";
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "id"), "html", null, true);
            echo "\" class=\"hidden\">
\t\t\t\t\t\t";
            // line 35
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blockType_, "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<div class=\"matrixconfigitem mci-field";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "hasErrors", array(), "method")) {
                    echo " error";
                }
                echo "\" data-id=\"";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"name";
                // line 37
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "required")) {
                    echo " required";
                }
                echo "\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "name"), "html", null, true);
                echo "&nbsp;</div>
\t\t\t\t\t\t\t\t<div class=\"handle code\">";
                // line 38
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_field_, "handle"), "html", null, true);
                echo "&nbsp;</div>
\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t<a class=\"move icon\" title=\"";
                // line 40
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t<div class=\"btn add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New field"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"field-settings\">
\t\t<div class=\"col-inner-container hidden\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 53
        echo twig_escape_filter($this->env, \Craft\Craft::t("Field Settings"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t";
        // line 56
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_settings_, "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 57
            echo "\t\t\t\t\t<div data-id=\"";
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_blockType_, "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 58
            if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_blockType_, "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 59
                echo "\t\t\t\t\t\t\t";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                $context["fieldId"] = $this->getAttribute($_field_, "id");
                // line 60
                echo "\t\t\t\t\t\t\t<div data-id=\"";
                if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
                echo twig_escape_filter($this->env, $_fieldId_, "html", null, true);
                echo "\" class=\"hidden\">
\t\t\t\t\t\t\t\t";
                // line 61
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Name"), "id" => ($_fieldId_ . "-name"), "name" => (((("blockTypes[" . $this->getAttribute($_blockType_, "id")) . "][fields][") . $_fieldId_) . "][name]"), "value" => $this->getAttribute($_field_, "name"), "errors" => $this->getAttribute($_field_, "getErrors", array(0 => "name"), "method"), "required" => true, "translatable" => true, "autofocus" => true));
                // line 70
                echo "

\t\t\t\t\t\t\t\t";
                // line 72
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Handle"), "id" => ($_fieldId_ . "-handle"), "class" => "code", "name" => (((("blockTypes[" . $this->getAttribute($_blockType_, "id")) . "][fields][") . $_fieldId_) . "][handle]"), "maxlength" => 64, "value" => $this->getAttribute($_field_, "handle"), "errors" => $this->getAttribute($_field_, "getErrors", array(0 => "handle"), "method"), "required" => true));
                // line 81
                echo "

\t\t\t\t\t\t\t\t";
                // line 83
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("This field is required"), "name" => (((("blockTypes[" . $this->getAttribute($_blockType_, "id")) . "][fields][") . $_fieldId_) . "][required]"), "checked" => $this->getAttribute($_field_, "required")));
                // line 87
                echo "

\t\t\t\t\t\t\t\t";
                // line 89
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                if ($this->getAttribute($_craft_, "isLocalized", array(), "method")) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                    if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                    if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("This field is translatable"), "name" => (((("blockTypes[" . $this->getAttribute($_blockType_, "id")) . "][fields][") . $_fieldId_) . "][translatable]"), "checked" => $this->getAttribute($_field_, "translatable")));
                    // line 94
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t";
                // line 99
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                $context["fieldType"] = $this->getAttribute($_field_, "getFieldType", array(), "method");
                // line 100
                echo "\t\t\t\t\t\t\t\t";
                if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
                $context["isFieldTypeMissing"] = (!$_fieldType_);
                // line 101
                echo "
\t\t\t\t\t\t\t\t";
                // line 102
                if (isset($context["isFieldTypeMissing"])) { $_isFieldTypeMissing_ = $context["isFieldTypeMissing"]; } else { $_isFieldTypeMissing_ = null; }
                if ($_isFieldTypeMissing_) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                    $context["fieldType"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getFieldType", array(0 => "PlainText"), "method");
                    // line 104
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 105
                echo "
\t\t\t\t\t\t\t\t";
                // line 106
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                if (isset($context["fieldTypes"])) { $_fieldTypes_ = $context["fieldTypes"]; } else { $_fieldTypes_ = null; }
                if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
                if (isset($context["isFieldTypeMissing"])) { $_isFieldTypeMissing_ = $context["isFieldTypeMissing"]; } else { $_isFieldTypeMissing_ = null; }
                echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Field Type"), "instructions" => (($this->getAttribute($_field_, "isNew", array(), "method")) ? (null) : ((("<span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>"))), "id" => ($_fieldId_ . "-type"), "name" => (((("blockTypes[" . $this->getAttribute($_blockType_, "id")) . "][fields][") . $_fieldId_) . "][type]"), "options" => $_fieldTypes_, "value" => $this->getAttribute($_fieldType_, "getClassHandle", array(), "method"), "errors" => (($_isFieldTypeMissing_) ? (array(0 => \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute($_field_, "type"))))) : (null))));
                // line 114
                echo "

\t\t\t\t\t\t\t\t<div class=\"fieldtype-settings\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 118
                if (isset($context["blockType"])) { $_blockType_ = $context["blockType"]; } else { $_blockType_ = null; }
                if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
                $_namespace = (((("blockTypes[" . $this->getAttribute($_blockType_, "id")) . "][fields][") . $_fieldId_) . "][typesettings]");
                if ($_namespace) {
                    $_originalNamespace = \Craft\craft()->templates->getNamespace();
                    \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
                        echo $this->getAttribute($_fieldType_, "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                    \Craft\craft()->templates->setNamespace($_originalNamespace);
                } else {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
                    echo $this->getAttribute($_fieldType_, "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                unset($_originalNamespace, $_namespace);
                // line 121
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<a class=\"error delete\">";
                // line 126
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        $context["blockTypeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 135
        echo "
<div class=\"matrix-configurator\">
\t";
        // line 137
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["blockTypeInput"])) { $_blockTypeInput_ = $context["blockTypeInput"]; } else { $_blockTypeInput_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Configuration"), "instructions" => \Craft\Craft::t("Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of."), "name" => "config"), $_blockTypeInput_);
        // line 141
        echo "
</div>

";
        // line 144
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Max Blocks"), "instructions" => \Craft\Craft::t("The maximum number of blocks the field is allowed to have."), "id" => "maxBlocks", "name" => "maxBlocks", "value" => $this->getAttribute($_settings_, "maxBlocks"), "size" => 3, "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "maxBlocks"), "method")));
        // line 152
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 152,  397 => 144,  392 => 141,  388 => 137,  384 => 135,  378 => 131,  371 => 129,  362 => 126,  355 => 121,  334 => 119,  325 => 118,  319 => 114,  310 => 106,  307 => 105,  304 => 104,  300 => 103,  297 => 102,  294 => 101,  290 => 100,  287 => 99,  282 => 96,  278 => 94,  271 => 90,  268 => 89,  264 => 87,  258 => 83,  254 => 81,  248 => 72,  244 => 70,  232 => 60,  228 => 59,  223 => 58,  217 => 57,  206 => 53,  178 => 40,  172 => 38,  162 => 37,  151 => 36,  140 => 34,  135 => 33,  129 => 30,  97 => 19,  52 => 18,  45 => 15,  33 => 14,  68 => 32,  46 => 6,  43 => 12,  234 => 60,  231 => 59,  225 => 57,  220 => 56,  215 => 55,  212 => 56,  202 => 51,  195 => 46,  192 => 48,  176 => 42,  171 => 41,  167 => 40,  160 => 38,  146 => 35,  132 => 34,  119 => 25,  91 => 22,  86 => 21,  64 => 26,  55 => 19,  51 => 11,  25 => 4,  22 => 3,  81 => 40,  75 => 19,  72 => 14,  66 => 29,  63 => 16,  59 => 23,  54 => 24,  49 => 21,  42 => 14,  38 => 11,  31 => 6,  188 => 44,  179 => 13,  174 => 8,  166 => 4,  148 => 105,  143 => 97,  137 => 95,  133 => 93,  126 => 33,  120 => 85,  115 => 84,  108 => 83,  104 => 81,  100 => 73,  83 => 16,  73 => 12,  69 => 18,  65 => 54,  61 => 40,  57 => 33,  40 => 21,  36 => 19,  32 => 8,  29 => 12,  27 => 5,  21 => 2,  19 => 1,  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 61,  230 => 143,  219 => 142,  214 => 141,  209 => 53,  205 => 52,  198 => 129,  193 => 126,  189 => 124,  184 => 16,  181 => 44,  177 => 117,  173 => 108,  169 => 5,  165 => 96,  161 => 94,  157 => 84,  153 => 3,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 23,  116 => 24,  111 => 63,  109 => 62,  105 => 20,  102 => 57,  99 => 54,  95 => 23,  92 => 51,  90 => 66,  87 => 17,  84 => 44,  80 => 20,  78 => 62,  74 => 35,  71 => 31,  67 => 30,  62 => 13,  58 => 24,  56 => 23,  53 => 8,  50 => 32,  47 => 42,  44 => 28,  41 => 24,  37 => 11,  34 => 9,  30 => 8,  28 => 5,  26 => 5,  24 => 3,);
    }
}
