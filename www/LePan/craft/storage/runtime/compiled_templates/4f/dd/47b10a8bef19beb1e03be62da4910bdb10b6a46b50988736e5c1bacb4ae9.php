<?php

/* _components/assetsourcetypes/GoogleCloud/settings */
class __TwigTemplate_4fdd47b10a8bef19beb1e03be62da4910bdb10b6a46b50988736e5c1bacb4ae9 extends Craft\BaseTemplate
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
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Access Key ID"), "id" => "keyId", "name" => "keyId", "value" => $this->getAttribute($_settings_, "keyId"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "keyId"), "method"), "class" => "google-key-id", "required" => true));
        // line 13
        echo "

";
        // line 15
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Secret Access Key"), "id" => "secret", "name" => "secret", "value" => $this->getAttribute($_settings_, "secret"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "secret"), "method"), "class" => "google-secret-key", "required" => true));
        // line 23
        echo "

";
        // line 25
        ob_start();
        // line 26
        echo "    <table class=\"inputs\">
        <tr>
            <td>
                ";
        // line 29
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getselect(array("id" => "bucket", "name" => "bucket", "options" => array($this->getAttribute($_settings_, "bucket") => $this->getAttribute($_settings_, "bucket")), "value" => $this->getAttribute($_settings_, "bucket"), "disabled" => true, "class" => "google-bucket-select"));
        // line 36
        echo "
            </td>
            <td>
                <div class=\"btn google-refresh-buckets\">";
        // line 39
        echo twig_escape_filter($this->env, \Craft\Craft::t("Refresh"), "html", null, true);
        echo "</div>
            </td>
            <td>
                <div class=\"spinner hidden\"></div>
            </td>
        </tr>
    </table>
";
        $context["bucketInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
";
        // line 48
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["bucketInput"])) { $_bucketInput_ = $context["bucketInput"]; } else { $_bucketInput_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Bucket"), "id" => "bucket"), $_bucketInput_);
        // line 51
        echo "

";
        // line 53
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Subfolder"), "instructions" => \Craft\Craft::t("If you want to use a bucket’s subfolder as a Source, specify the path to use here."), "id" => "subfolder", "class" => "ltr", "name" => "subfolder", "value" => $this->getAttribute($_settings_, "subfolder"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "subfolder"), "method"), "required" => false, "placeholder" => \Craft\Craft::t("path/to/subfolder")));
        // line 63
        echo "

";
        // line 65
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("URL Prefix "), "instructions" => \Craft\Craft::t("If you have set up a CNAME record pointing to this bucket, you can enter it here. Otherwise leave this setting alone."), "id" => "urlPrefix", "class" => "ltr", "name" => "urlPrefix", "value" => $this->getAttribute($_settings_, "urlPrefix"), "errors" => $this->getAttribute($_settings_, "getErrors", array(0 => "url_prefix"), "method"), "required" => true, "class" => "google-url-prefix"));
        // line 75
        echo "

";
        // line 77
        ob_start();
        // line 78
        echo "\t<table class=\"inputs\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 81
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gettextField(array("id" => "expiresAmount", "value" => $this->getAttribute($this->getAttribute($_settings_, "expires"), "amount"), "size" => 2, "class" => "expires-amount"));
        // line 86
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
        // line 89
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["periods"])) { $_periods_ = $context["periods"]; } else { $_periods_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->getselect(array("id" => "expiresPeriod", "options" => $_periods_, "value" => $this->getAttribute($this->getAttribute($_settings_, "expires"), "period"), "class" => "expires-period"));
        // line 94
        echo "
\t\t\t</td>
\t\t</tr>
\t</table>
\t";
        // line 98
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_forms_->gethidden(array("name" => "expires", "value" => ($this->getAttribute($this->getAttribute($_settings_, "expires"), "amount") . $this->getAttribute($this->getAttribute($_settings_, "expires"), "period")), "class" => "expires-combined"));
        // line 102
        echo "
";
        $context["cacheInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 104
        echo "
";
        // line 105
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["cacheInput"])) { $_cacheInput_ = $context["cacheInput"]; } else { $_cacheInput_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Cache Duration "), "id" => "cacheDuration"), $_cacheInput_);
        // line 108
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/assetsourcetypes/GoogleCloud/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  148 => 109,  145 => 108,  141 => 105,  138 => 104,  134 => 102,  130 => 98,  124 => 94,  114 => 86,  110 => 81,  105 => 78,  103 => 77,  99 => 75,  95 => 65,  91 => 63,  83 => 51,  79 => 48,  76 => 47,  60 => 36,  56 => 29,  49 => 25,  45 => 23,  41 => 15,  37 => 13,  33 => 5,  25 => 2,  19 => 1,  216 => 73,  209 => 68,  206 => 63,  201 => 60,  198 => 59,  177 => 57,  168 => 56,  165 => 55,  158 => 53,  154 => 52,  147 => 50,  140 => 48,  136 => 47,  126 => 52,  119 => 89,  112 => 48,  108 => 47,  100 => 46,  90 => 45,  87 => 53,  82 => 43,  77 => 42,  73 => 40,  68 => 32,  65 => 39,  63 => 30,  59 => 28,  55 => 27,  51 => 26,  47 => 15,  43 => 13,  35 => 4,  30 => 4,  28 => 3,  26 => 5,  24 => 3,);
    }
}
