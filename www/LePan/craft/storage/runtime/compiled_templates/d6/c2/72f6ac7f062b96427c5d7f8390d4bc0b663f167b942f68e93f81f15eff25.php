<?php

/* settings/assets/sources/_edit */
class __TwigTemplate_d6c272f6ac7f062b96427c5d7f8390d4bc0b663f167b942f68e93f81f15eff25 extends Craft\BaseTemplate
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/assets";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 8
        ob_start();
        // line 9
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"assetSources/saveSource\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/assets\">
\t\t";
        // line 12
        if (isset($context["isNewSource"])) { $_isNewSource_ = $context["isNewSource"]; } else { $_isNewSource_ = null; }
        if ((!$_isNewSource_)) {
            echo "<input type=\"hidden\" name=\"sourceId\" value=\"";
            if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_source_, "id"), "html", null, true);
            echo "\">";
        }
        // line 13
        echo "
\t\t<div id=\"assetsource-settings\">
\t\t\t";
        // line 15
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
        echo $_forms_->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "id" => "name", "name" => "name", "value" => ((array_key_exists("source", $context)) ? ($this->getAttribute($_source_, "name")) : (null)), "errors" => ((array_key_exists("source", $context)) ? ($this->getAttribute($_source_, "getErrors", array(0 => "name"), "method")) : (null)), "autofocus" => true, "required" => true, "translatable" => true));
        // line 25
        echo "

\t\t\t";
        // line 27
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (($_CraftEdition_ == $_CraftPro_)) {
            // line 28
            echo "\t\t\t\t<hr>

\t\t\t\t";
            // line 30
            \Craft\craft()->templates->includeJsResource("js/asseteditsourcesettings.js");
            // line 31
            echo "
\t\t\t\t";
            // line 32
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["sourceTypes"])) { $_sourceTypes_ = $context["sourceTypes"]; } else { $_sourceTypes_ = null; }
            if (isset($context["sourceType"])) { $_sourceType_ = $context["sourceType"]; } else { $_sourceType_ = null; }
            echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Type"), "instructions" => \Craft\Craft::t("What type of source is this?"), "id" => "type", "name" => "type", "options" => $_sourceTypes_, "value" => $this->getAttribute($_sourceType_, "getClassHandle", array(), "method"), "toggle" => true));
            // line 40
            echo "

\t\t\t\t";
            // line 42
            if (isset($context["sourceTypes"])) { $_sourceTypes_ = $context["sourceTypes"]; } else { $_sourceTypes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_sourceTypes_);
            foreach ($context['_seq'] as $context["_key"] => $context["_sourceType"]) {
                // line 43
                echo "\t\t\t\t\t";
                if (isset($context["_sourceType"])) { $__sourceType_ = $context["_sourceType"]; } else { $__sourceType_ = null; }
                if (isset($context["sourceType"])) { $_sourceType_ = $context["sourceType"]; } else { $_sourceType_ = null; }
                $context["isCurrent"] = ($this->getAttribute($__sourceType_, "getClassHandle", array(), "method") == $this->getAttribute($_sourceType_, "getClassHandle", array(), "method"));
                // line 44
                echo "
\t\t\t\t\t<div id=\"";
                // line 45
                if (isset($context["_sourceType"])) { $__sourceType_ = $context["_sourceType"]; } else { $__sourceType_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($__sourceType_, "getClassHandle", array(), "method"), "html", null, true);
                echo "\"";
                if (isset($context["isCurrent"])) { $_isCurrent_ = $context["isCurrent"]; } else { $_isCurrent_ = null; }
                if ((!$_isCurrent_)) {
                    echo " class=\"hidden\"";
                }
                echo ">
\t\t\t\t\t\t";
                // line 46
                if (isset($context["_sourceType"])) { $__sourceType_ = $context["_sourceType"]; } else { $__sourceType_ = null; }
                $_namespace = (("types[" . $this->getAttribute($__sourceType_, "getClassHandle", array(), "method")) . "]");
                if ($_namespace) {
                    $_originalNamespace = \Craft\craft()->templates->getNamespace();
                    \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                        if (isset($context["isCurrent"])) { $_isCurrent_ = $context["isCurrent"]; } else { $_isCurrent_ = null; }
                        if ($_isCurrent_) {
                            // line 48
                            echo "\t\t\t\t\t\t\t\t";
                            if (isset($context["sourceType"])) { $_sourceType_ = $context["sourceType"]; } else { $_sourceType_ = null; }
                            echo $this->getAttribute($_sourceType_, "getSettingsHtml", array(), "method");
                            echo "
\t\t\t\t\t\t\t";
                        } else {
                            // line 50
                            echo "\t\t\t\t\t\t\t\t";
                            if (isset($context["_sourceType"])) { $__sourceType_ = $context["_sourceType"]; } else { $__sourceType_ = null; }
                            echo $this->getAttribute($__sourceType_, "getSettingsHtml", array(), "method");
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 52
                        echo "\t\t\t\t\t\t";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                    \Craft\craft()->templates->setNamespace($_originalNamespace);
                } else {
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["isCurrent"])) { $_isCurrent_ = $context["isCurrent"]; } else { $_isCurrent_ = null; }
                    if ($_isCurrent_) {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["sourceType"])) { $_sourceType_ = $context["sourceType"]; } else { $_sourceType_ = null; }
                        echo $this->getAttribute($_sourceType_, "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["_sourceType"])) { $__sourceType_ = $context["_sourceType"]; } else { $__sourceType_ = null; }
                        echo $this->getAttribute($__sourceType_, "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t\t";
                }
                unset($_originalNamespace, $_namespace);
                // line 53
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_sourceType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t";
            if (isset($context["sourceType"])) { $_sourceType_ = $context["sourceType"]; } else { $_sourceType_ = null; }
            $_namespace = (("types[" . $this->getAttribute($_sourceType_, "getClassHandle", array(), "method")) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 57
                    echo "\t\t\t\t\t";
                    if (isset($context["sourceType"])) { $_sourceType_ = $context["sourceType"]; } else { $_sourceType_ = null; }
                    echo $this->getAttribute($_sourceType_, "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                echo "\t\t\t\t\t";
                if (isset($context["sourceType"])) { $_sourceType_ = $context["sourceType"]; } else { $_sourceType_ = null; }
                echo $this->getAttribute($_sourceType_, "getSettingsHtml", array(), "method");
                echo "
\t\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 59
            echo "\t\t\t";
        }
        // line 60
        echo "\t\t</div>

\t\t<div id=\"assetsource-fieldlayout\" class=\"hidden\">
\t\t\t";
        // line 63
        if (isset($context["source"])) { $_source_ = $context["source"]; } else { $_source_ = null; }
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute($_source_, "getFieldLayout", array(), "method"), "customizableTabs" => false, "tab" => "fieldlayout"));
        // line 68
        echo "\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/sources/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 73,  209 => 68,  206 => 63,  201 => 60,  198 => 59,  177 => 57,  168 => 56,  165 => 55,  158 => 53,  154 => 52,  147 => 50,  140 => 48,  136 => 47,  126 => 52,  119 => 50,  112 => 48,  108 => 47,  100 => 46,  90 => 45,  87 => 44,  82 => 43,  77 => 42,  73 => 40,  68 => 32,  65 => 31,  63 => 30,  59 => 28,  55 => 27,  51 => 25,  47 => 15,  43 => 13,  35 => 12,  30 => 9,  28 => 8,  26 => 5,  24 => 3,);
    }
}
