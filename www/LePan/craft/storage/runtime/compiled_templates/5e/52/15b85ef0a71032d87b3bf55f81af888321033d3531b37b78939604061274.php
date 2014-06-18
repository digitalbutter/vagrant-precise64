<?php

/* settings/fields/_edit */
class __TwigTemplate_5e5215b85ef0a71032d87b3bf55f81af888321033d3531b37b78939604061274 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields#field-layouts";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 7
        if (((!array_key_exists("field", $context)) && array_key_exists("fieldId", $context))) {
            // line 8
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
            $context["field"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getFieldById", array(0 => $_fieldId_), "method");
            // line 9
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if ((!$_field_)) {
                // line 10
                throw new \Craft\HttpException(404);
            }
        }
        // line 15
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["groups"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getAllGroups", array(0 => "id"), "method");
        // line 16
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        if ((!$_groups_)) {
            // line 17
            throw new \Craft\HttpException(404);
        }
        // line 20
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["groupId"] = $this->getAttribute($this->getAttribute($_craft_, "request"), "getQuery", array(0 => "groupId"), "method");
        // line 22
        if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
        if ((!$_groupId_)) {
            // line 23
            if (array_key_exists("field", $context)) {
                // line 24
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                $context["groupId"] = $this->getAttribute($_field_, "groupId");
            } else {
                // line 26
                if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                $context["groupId"] = $this->getAttribute(twig_get_array_keys_filter($_groups_), 0, array(), "array");
            }
        }
        // line 30
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
        if ((!$this->getAttribute($_groups_, $_groupId_, array(), "array", true, true))) {
            // line 31
            throw new \Craft\HttpException(404);
        }
        // line 35
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")), 1 => array("label" => \Craft\Craft::t("Fields"), "url" => \Craft\UrlHelper::getUrl("settings/fields")), 2 => array("label" => $this->getAttribute($this->getAttribute($_groups_, $_groupId_, array(), "array"), "name"), "url" => \Craft\UrlHelper::getUrl(("settings/fields/" . $_groupId_))));
        // line 41
        if (array_key_exists("fieldId", $context)) {
            // line 42
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            $context["title"] = $this->getAttribute($_field_, "name");
        } else {
            // line 44
            $context["title"] = \Craft\Craft::t("Create a new field");
        }
        // line 48
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["fieldTypes"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getAllFieldTypes", array(), "method");
        // line 50
        if (array_key_exists("field", $context)) {
            // line 51
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            $context["fieldType"] = $this->getAttribute($_field_, "getFieldType", array(), "method");
            // line 52
            if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
            $context["isFieldTypeMissing"] = (!$_fieldType_);
        } else {
            // line 54
            $context["isFieldTypeMissing"] = false;
        }
        // line 57
        if (isset($context["isFieldTypeMissing"])) { $_isFieldTypeMissing_ = $context["isFieldTypeMissing"]; } else { $_isFieldTypeMissing_ = null; }
        if (((!array_key_exists("fieldType", $context)) || $_isFieldTypeMissing_)) {
            // line 58
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context["fieldType"] = $this->getAttribute($this->getAttribute($_craft_, "fields"), "getFieldType", array(0 => "PlainText"), "method");
        }
        // line 62
        ob_start();
        // line 63
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"fields/saveField\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/fields/{groupId}\">
\t\t";
        // line 66
        if (array_key_exists("fieldId", $context)) {
            // line 67
            echo "\t\t\t<input type=\"hidden\" name=\"fieldId\" value=\"";
            if (isset($context["fieldId"])) { $_fieldId_ = $context["fieldId"]; } else { $_fieldId_ = null; }
            echo twig_escape_filter($this->env, $_fieldId_, "html", null, true);
            echo "\">
\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        $context["groupOptions"] = array();
        // line 71
        echo "\t\t";
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 72
            echo "\t\t\t";
            if (isset($context["groupOptions"])) { $_groupOptions_ = $context["groupOptions"]; } else { $_groupOptions_ = null; }
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context["groupOptions"] = twig_array_merge($_groupOptions_, array(0 => array("label" => $this->getAttribute($_group_, "name"), "value" => $this->getAttribute($_group_, "id"))));
            // line 73
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t";
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["groupOptions"])) { $_groupOptions_ = $context["groupOptions"]; } else { $_groupOptions_ = null; }
        if (isset($context["groupId"])) { $_groupId_ = $context["groupId"]; } else { $_groupId_ = null; }
        echo $_forms_->getselectField(array("first" => true, "label" => \Craft\Craft::t("Group"), "instructions" => \Craft\Craft::t("Which group should this field be displayed in?"), "id" => "group", "name" => "group", "options" => $_groupOptions_, "value" => $_groupId_));
        // line 82
        echo "

\t\t";
        // line 84
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this field will be called in the CP."), "id" => "name", "name" => "name", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute($_field_, "name")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute($_field_, "getErrors", array(0 => "name"), "method")) : (null)), "required" => true, "translatable" => true, "autofocus" => true));
        // line 94
        echo "

\t\t";
        // line 96
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this field in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "maxlength" => 64, "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute($_field_, "handle")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute($_field_, "getErrors", array(0 => "handle"), "method")) : (null)), "required" => true));
        // line 106
        echo "

\t\t";
        // line 108
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        echo $_forms_->gettextareaField(array("label" => \Craft\Craft::t("Instructions"), "instructions" => \Craft\Craft::t("Helper text to guide the author."), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute($_field_, "instructions")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute($_field_, "getErrors", array(0 => "instructions"), "method")) : (null)), "translatable" => true));
        // line 117
        echo "

\t\t";
        // line 119
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($_craft_, "isLocalized", array(), "method")) {
            // line 120
            echo "\t\t\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("This field is translatable"), "name" => "translatable", "checked" => ((array_key_exists("field", $context)) ? ($this->getAttribute($_field_, "translatable")) : (false))));
            // line 124
            echo "
\t\t";
        }
        // line 126
        echo "
\t\t<hr>

\t\t";
        // line 129
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["fieldTypes"])) { $_fieldTypes_ = $context["fieldTypes"]; } else { $_fieldTypes_ = null; }
        if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
        if (isset($context["isFieldTypeMissing"])) { $_isFieldTypeMissing_ = $context["isFieldTypeMissing"]; } else { $_isFieldTypeMissing_ = null; }
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Field Type"), "instructions" => (\Craft\Craft::t("What type of field is this?") . ((array_key_exists("fieldId", $context)) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" => $_fieldTypes_, "value" => $this->getAttribute($_fieldType_, "getClassHandle", array(), "method"), "errors" => (($_isFieldTypeMissing_) ? (array(0 => \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute($_field_, "type"))))) : (null)), "toggle" => true));
        // line 138
        echo "

\t\t";
        // line 140
        if (isset($context["fieldTypes"])) { $_fieldTypes_ = $context["fieldTypes"]; } else { $_fieldTypes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fieldTypes_);
        foreach ($context['_seq'] as $context["_key"] => $context["_fieldType"]) {
            // line 141
            echo "\t\t\t";
            if (isset($context["_fieldType"])) { $__fieldType_ = $context["_fieldType"]; } else { $__fieldType_ = null; }
            if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
            $context["isCurrent"] = ($this->getAttribute($__fieldType_, "getClassHandle", array(), "method") == $this->getAttribute($_fieldType_, "getClassHandle", array(), "method"));
            // line 142
            echo "\t\t\t<div id=\"";
            if (isset($context["_fieldType"])) { $__fieldType_ = $context["_fieldType"]; } else { $__fieldType_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($__fieldType_, "getClassHandle", array(), "method"), "html", null, true);
            echo "\"";
            if (isset($context["isCurrent"])) { $_isCurrent_ = $context["isCurrent"]; } else { $_isCurrent_ = null; }
            if ((!$_isCurrent_)) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 143
            if (isset($context["_fieldType"])) { $__fieldType_ = $context["_fieldType"]; } else { $__fieldType_ = null; }
            $_namespace = (("types[" . $this->getAttribute($__fieldType_, "getClassHandle", array(), "method")) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 144
                    echo "\t\t\t\t\t";
                    if (isset($context["isCurrent"])) { $_isCurrent_ = $context["isCurrent"]; } else { $_isCurrent_ = null; }
                    if ($_isCurrent_) {
                        // line 145
                        echo "\t\t\t\t\t\t";
                        if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
                        echo $this->getAttribute($_fieldType_, "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 147
                        echo "\t\t\t\t\t\t";
                        if (isset($context["_fieldType"])) { $__fieldType_ = $context["_fieldType"]; } else { $__fieldType_ = null; }
                        echo $this->getAttribute($__fieldType_, "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    }
                    // line 149
                    echo "\t\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                // line 144
                echo "\t\t\t\t\t";
                if (isset($context["isCurrent"])) { $_isCurrent_ = $context["isCurrent"]; } else { $_isCurrent_ = null; }
                if ($_isCurrent_) {
                    // line 145
                    echo "\t\t\t\t\t\t";
                    if (isset($context["fieldType"])) { $_fieldType_ = $context["fieldType"]; } else { $_fieldType_ = null; }
                    echo $this->getAttribute($_fieldType_, "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                } else {
                    // line 147
                    echo "\t\t\t\t\t\t";
                    if (isset($context["_fieldType"])) { $__fieldType_ = $context["_fieldType"]; } else { $__fieldType_ = null; }
                    echo $this->getAttribute($__fieldType_, "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 150
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_fieldType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 162
        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
        if (((!array_key_exists("field", $context)) || (!$this->getAttribute($_field_, "handle")))) {
            // line 163
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/fields/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 144,  230 => 143,  219 => 142,  214 => 141,  209 => 140,  205 => 138,  198 => 129,  193 => 126,  189 => 124,  184 => 120,  181 => 119,  177 => 117,  173 => 108,  169 => 106,  165 => 96,  161 => 94,  157 => 84,  153 => 82,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 67,  116 => 66,  111 => 63,  109 => 62,  105 => 58,  102 => 57,  99 => 54,  95 => 52,  92 => 51,  90 => 50,  87 => 48,  84 => 44,  80 => 42,  78 => 41,  74 => 35,  71 => 31,  67 => 30,  62 => 26,  58 => 24,  56 => 23,  53 => 22,  50 => 20,  47 => 17,  44 => 16,  41 => 15,  37 => 10,  34 => 9,  30 => 8,  28 => 7,  26 => 5,  24 => 3,);
    }
}
