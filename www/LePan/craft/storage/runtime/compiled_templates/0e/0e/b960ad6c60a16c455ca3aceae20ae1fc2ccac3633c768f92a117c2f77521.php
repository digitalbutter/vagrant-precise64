<?php

/* _components/assetsourcetypes/Local/settings */
class __TwigTemplate_0e0eb960ad6c60a16c455ca3aceae20ae1fc2ccac3633c768f92a117c2f77521 extends Craft\BaseTemplate
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
        $context["__internal_feda571a3dca9a832e0c6573c87e8099c8e4e37e8d031e87ebd141cc1497266e"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $context["__internal_feda571a3dca9a832e0c6573c87e8099c8e4e37e8d031e87ebd141cc1497266e"]->gettextField(array("label" => \Craft\Craft::t("File System Path"), "instructions" => \Craft\Craft::t("The path to your folder on the file system."), "id" => "path", "class" => "ltr", "name" => "path", "value" => $this->getAttribute($_settings_, "path"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "path"), "method"), "required" => true, "placeholder" => \Craft\Craft::t("/path/to/folder/")));
        // line 13
        echo "

";
        // line 15
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $context["__internal_feda571a3dca9a832e0c6573c87e8099c8e4e37e8d031e87ebd141cc1497266e"]->gettextField(array("label" => \Craft\Craft::t("URL"), "instructions" => \Craft\Craft::t("The URL to your folder."), "id" => "url", "class" => "ltr", "name" => "url", "value" => $this->getAttribute($_settings_, "url"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "url"), "method"), "required" => true, "placeholder" => \Craft\Craft::t("http://example.com/path/to/folder/")));
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/assetsourcetypes/Local/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 25,  31 => 15,  27 => 13,  21 => 2,  148 => 109,  145 => 108,  141 => 105,  138 => 104,  134 => 102,  130 => 98,  124 => 94,  114 => 86,  110 => 81,  105 => 78,  103 => 77,  99 => 75,  95 => 65,  91 => 63,  83 => 51,  79 => 48,  76 => 47,  60 => 36,  56 => 29,  49 => 25,  45 => 23,  41 => 15,  37 => 13,  33 => 5,  25 => 2,  19 => 1,  216 => 73,  209 => 68,  206 => 63,  201 => 60,  198 => 59,  177 => 57,  168 => 56,  165 => 55,  158 => 53,  154 => 52,  147 => 50,  140 => 48,  136 => 47,  126 => 52,  119 => 89,  112 => 48,  108 => 47,  100 => 46,  90 => 45,  87 => 53,  82 => 43,  77 => 42,  73 => 40,  68 => 32,  65 => 39,  63 => 30,  59 => 28,  55 => 27,  51 => 26,  47 => 15,  43 => 13,  35 => 4,  30 => 4,  28 => 3,  26 => 5,  24 => 3,);
    }
}
