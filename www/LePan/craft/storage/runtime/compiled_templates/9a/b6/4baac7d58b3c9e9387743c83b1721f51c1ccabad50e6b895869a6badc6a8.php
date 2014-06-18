<?php

/* _components/widgets/GetHelp/body */
class __TwigTemplate_9ab64baac7d58b3c9e9387743c83b1721f51c1ccabad50e6b895869a6badc6a8 extends Craft\BaseTemplate
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
<form method=\"post\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
\t";
        // line 4
        if (isset($context["getHelp"])) { $_getHelp_ = $context["getHelp"]; } else { $_getHelp_ = null; }
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        $context["fromEmail"] = ((array_key_exists("getHelp", $context)) ? ($this->getAttribute($_getHelp_, "fromEmail")) : ($this->getAttribute($_currentUser_, "email")));
        // line 5
        echo "\t";
        if (isset($context["fromEmail"])) { $_fromEmail_ = $context["fromEmail"]; } else { $_fromEmail_ = null; }
        if ((($_fromEmail_ == "support@pixelandtonic.com") || ($_fromEmail_ == "support@buildwithcraft.com"))) {
            // line 6
            echo "\t\t";
            $context["fromEmail"] = "";
            // line 7
            echo "\t";
        }
        // line 8
        echo "
\t";
        // line 9
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["fromEmail"])) { $_fromEmail_ = $context["fromEmail"]; } else { $_fromEmail_ = null; }
        if (isset($context["getHelp"])) { $_getHelp_ = $context["getHelp"]; } else { $_getHelp_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Your Email"), "class" => "fromEmail", "name" => "fromEmail", "value" => $_fromEmail_, "errors" => ((array_key_exists("getHelp", $context)) ? ($this->getAttribute($_getHelp_, "getErrors", array(0 => "fromEmail"), "method")) : (""))));
        // line 15
        echo "

\t";
        // line 17
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        echo $_forms_->gettextareaField(array("label" => \Craft\Craft::t("Message"), "class" => "message", "name" => "message", "placeholder" => \Craft\Craft::t("Tell us about your problems."), "rows" => 4));
        // line 23
        echo "

\t<a class=\"fieldtoggle\" data-target=\"gethelp-more\">";
        // line 25
        echo twig_escape_filter($this->env, \Craft\Craft::t("More"), "html", null, true);
        echo "</a>

\t<div id=\"gethelp-more\" class=\"hidden\">
\t\t";
        // line 28
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Attach error logs?"), "class" => "attachLogs", "name" => "attachLogs", "checked" => true));
        // line 33
        echo "

\t\t";
        // line 35
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Attach a database backup?"), "class" => "attachDbBackup", "name" => "attachDbBackup", "checked" => $this->getAttribute($this->getAttribute($_craft_, "config"), "backupDbOnUpdate")));
        // line 40
        echo "

\t\t";
        // line 42
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        echo $_forms_->getcheckboxField(array("name" => "attachTemplates", "checked" => true, "class" => "attachTemplates", "label" => \Craft\Craft::t("Include your template files?")));
        // line 47
        echo "

\t\t";
        // line 49
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        echo $_forms_->getfileField(array("label" => \Craft\Craft::t("Attach an additional file?"), "class" => "attachAdditionalFile", "name" => "attachAdditionalFile"));
        // line 53
        echo "
\t</div>

\t<div class=\"buttons last\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, \Craft\Craft::t("Send"), "html", null, true);
        echo "\">
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t";
        // line 61
        $context["email"] = ('' === $tmp = "<a href=\"mailto:support@buildwithcraft.com\">support@buildwithcraft.com</a>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        echo "\t<p class=\"error hidden\">";
        if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
        echo \Craft\Craft::t("Couldn’t send your message. Please email it to {email} instead.", array("email" => $_email_));
        echo "</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/GetHelp/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 62,  89 => 53,  75 => 40,  67 => 33,  64 => 28,  58 => 25,  54 => 23,  51 => 17,  47 => 15,  39 => 8,  36 => 7,  87 => 23,  81 => 21,  77 => 19,  33 => 6,  86 => 49,  82 => 47,  79 => 42,  70 => 14,  62 => 12,  49 => 10,  46 => 9,  37 => 7,  32 => 5,  22 => 2,  116 => 29,  112 => 27,  108 => 26,  102 => 61,  99 => 24,  95 => 57,  90 => 18,  74 => 16,  68 => 15,  65 => 13,  61 => 13,  50 => 17,  38 => 14,  34 => 8,  23 => 3,  21 => 2,  19 => 1,  739 => 227,  736 => 226,  728 => 233,  719 => 231,  716 => 230,  713 => 229,  711 => 226,  708 => 225,  701 => 222,  698 => 221,  695 => 220,  684 => 219,  681 => 218,  678 => 217,  675 => 216,  672 => 215,  666 => 211,  662 => 210,  658 => 209,  654 => 208,  651 => 207,  645 => 201,  638 => 198,  635 => 197,  633 => 196,  630 => 195,  623 => 193,  620 => 192,  617 => 191,  612 => 188,  599 => 186,  594 => 185,  590 => 183,  586 => 182,  583 => 181,  574 => 267,  568 => 265,  565 => 264,  560 => 263,  554 => 260,  549 => 259,  545 => 257,  542 => 256,  537 => 253,  529 => 251,  524 => 250,  512 => 247,  501 => 245,  498 => 244,  491 => 243,  480 => 242,  474 => 238,  472 => 207,  467 => 204,  465 => 181,  459 => 177,  453 => 176,  443 => 174,  439 => 173,  434 => 172,  430 => 171,  420 => 163,  412 => 160,  406 => 158,  403 => 157,  400 => 156,  391 => 155,  385 => 154,  380 => 153,  367 => 149,  354 => 143,  346 => 141,  341 => 140,  335 => 139,  329 => 136,  325 => 134,  320 => 131,  313 => 129,  297 => 127,  292 => 126,  285 => 124,  280 => 123,  275 => 121,  267 => 118,  264 => 117,  261 => 116,  258 => 115,  255 => 114,  252 => 113,  249 => 112,  246 => 111,  238 => 107,  231 => 106,  223 => 105,  220 => 104,  216 => 103,  213 => 102,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  166 => 88,  161 => 87,  158 => 86,  152 => 82,  149 => 81,  146 => 80,  143 => 79,  139 => 77,  129 => 75,  124 => 74,  121 => 73,  117 => 72,  113 => 71,  110 => 70,  107 => 69,  101 => 67,  96 => 66,  93 => 65,  30 => 4,  28 => 4,  128 => 36,  122 => 35,  119 => 34,  111 => 30,  106 => 29,  94 => 27,  88 => 26,  84 => 17,  80 => 24,  76 => 23,  71 => 35,  66 => 21,  63 => 20,  56 => 12,  52 => 10,  48 => 13,  45 => 12,  42 => 9,  31 => 7,  29 => 5,  27 => 3,  25 => 4,);
    }
}
