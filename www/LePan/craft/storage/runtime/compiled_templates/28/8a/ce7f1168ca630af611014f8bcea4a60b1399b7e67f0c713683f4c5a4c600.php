<?php

/* _components/assetsourcetypes/Rackspace/settings */
class __TwigTemplate_288ace7f1168ca630af611014f8bcea4a60b1399b7e67f0c713683f4c5a4c600 extends Craft\BaseTemplate
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
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (\Craft\craft()->getEdition() < $_CraftPro_)
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
";
        // line 3
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 4
        echo "
";
        // line 5
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Username"), "id" => "username", "name" => "username", "value" => $this->getAttribute($_settings_, "username"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "username"), "method"), "class" => "rackspace-username", "required" => true));
        // line 13
        echo "

";
        // line 15
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("API Key"), "id" => "apiKey", "name" => "apiKey", "value" => $this->getAttribute($_settings_, "apiKey"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "apiKey"), "method"), "class" => "racskspace-api-key", "required" => true));
        // line 23
        echo "

";
        // line 25
        ob_start();
        // line 26
        echo "<table class=\"inputs\">
\t<tr>
\t\t<td>
\t\t\t";
        // line 29
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getselect(array("id" => "region", "name" => "region", "options" => array($this->getAttribute($_settings_, "region") => $this->getAttribute($_settings_, "region")), "value" => $this->getAttribute($_settings_, "region"), "disabled" => true, "class" => "rackspace-region-select"));
        // line 36
        echo "
\t\t</td>
\t\t<td>
\t\t\t<div class=\"btn rackspace-refresh-regions\">";
        // line 39
        echo twig_escape_filter($this->env, \Craft\Craft::t("Refresh"), "html", null, true);
        echo "</div>
\t\t</td>
\t\t<td>
\t\t\t<div class=\"spinner hidden\"></div>
\t\t</td>
\t</tr>
</table>
";
        $context["regionInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
";
        // line 48
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["regionInput"])) { $_regionInput_ = $context["regionInput"]; } else { $_regionInput_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Region"), "id" => "region"), $_regionInput_);
        // line 51
        echo "

";
        // line 53
        ob_start();
        // line 54
        echo "    <table class=\"inputs\">
        <tr>
            <td>
                ";
        // line 57
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getselect(array("id" => "container", "name" => "container", "options" => array($this->getAttribute($_settings_, "container") => $this->getAttribute($_settings_, "container")), "value" => $this->getAttribute($_settings_, "container"), "disabled" => true, "class" => "rackspace-container-select"));
        // line 64
        echo "
            </td>
            <td>
                <div class=\"btn rackspace-refresh-containers\">";
        // line 67
        echo twig_escape_filter($this->env, \Craft\Craft::t("Refresh"), "html", null, true);
        echo "</div>
            </td>
            <td>
                <div class=\"spinner hidden\"></div>
            </td>
        </tr>
    </table>
";
        $context["containerInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
";
        // line 76
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["containerInput"])) { $_containerInput_ = $context["containerInput"]; } else { $_containerInput_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Container"), "id" => "container"), $_containerInput_);
        // line 79
        echo "

";
        // line 81
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Subfolder"), "instructions" => \Craft\Craft::t("If you want to use a container’s subfolder as a Source, specify the path to use here."), "id" => "subfolder", "class" => "ltr", "name" => "subfolder", "value" => $this->getAttribute($_settings_, "subfolder"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "subfolder"), "method"), "required" => false, "placeholder" => \Craft\Craft::t("path/to/subfolder")));
        // line 91
        echo "

";
        // line 93
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("URL Prefix "), "instructions" => \Craft\Craft::t("If you have set up a CNAME record pointing to this container, you can enter it here. Otherwise leave this setting alone."), "id" => "urlPrefix", "class" => "ltr", "name" => "urlPrefix", "value" => $this->getAttribute($_settings_, "urlPrefix"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "url_prefix"), "method"), "required" => true, "class" => "rackspace-url-prefix"));
        // line 103
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/assetsourcetypes/Rackspace/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 103,  133 => 93,  129 => 91,  125 => 81,  121 => 79,  117 => 76,  98 => 64,  94 => 57,  89 => 54,  34 => 25,  31 => 15,  27 => 13,  21 => 2,  148 => 109,  145 => 108,  141 => 105,  138 => 104,  134 => 102,  130 => 98,  124 => 94,  114 => 75,  110 => 81,  105 => 78,  103 => 67,  99 => 75,  95 => 65,  91 => 63,  83 => 51,  79 => 48,  76 => 47,  60 => 36,  56 => 29,  49 => 25,  45 => 23,  41 => 15,  37 => 13,  33 => 5,  25 => 2,  19 => 1,  216 => 73,  209 => 68,  206 => 63,  201 => 60,  198 => 59,  177 => 57,  168 => 56,  165 => 55,  158 => 53,  154 => 52,  147 => 50,  140 => 48,  136 => 47,  126 => 52,  119 => 89,  112 => 48,  108 => 47,  100 => 46,  90 => 45,  87 => 53,  82 => 43,  77 => 42,  73 => 40,  68 => 32,  65 => 39,  63 => 30,  59 => 28,  55 => 27,  51 => 26,  47 => 15,  43 => 13,  35 => 4,  30 => 4,  28 => 3,  26 => 5,  24 => 3,);
    }
}
