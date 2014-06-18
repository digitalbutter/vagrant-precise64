<?php

/* settings/sections/_edit */
class __TwigTemplate_68625a78764c207f71122e8c5c22e8d2658f237bd77fbe057d85ca70c97e7f4f extends Craft\BaseTemplate
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/sections-and-entries#sections";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 89
        $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"] = $this;
        // line 91
        ob_start();
        // line 92
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveSection\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">
\t\t";
        // line 95
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if ($this->getAttribute($_section_, "id")) {
            echo "<input type=\"hidden\" name=\"sectionId\" value=\"";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_section_, "id"), "html", null, true);
            echo "\">";
        }
        // line 96
        echo "
\t\t";
        // line 97
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo $_forms_->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this section will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute($_section_, "name"), "errors" => $this->getAttribute($_section_, "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 108
        echo "

\t\t";
        // line 110
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this section in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute($_section_, "handle"), "errors" => $this->getAttribute($_section_, "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 119
        echo "

\t\t";
        // line 121
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($_craft_, "isLocalized", array(), "method")) {
            // line 122
            echo "\t\t\t";
            ob_start();
            // line 123
            echo "\t\t\t\t<table class=\"data\" style=\"width: auto;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 127
            echo twig_escape_filter($this->env, \Craft\Craft::t("Locale"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 128
            echo twig_escape_filter($this->env, \Craft\Craft::t("Default Status"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 132
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "i18n"), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 133
                echo "\t\t\t\t\t\t\t";
                if (isset($context["brandNewSection"])) { $_brandNewSection_ = $context["brandNewSection"]; } else { $_brandNewSection_ = null; }
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                $context["localeSelected"] = ($_brandNewSection_ || $this->getAttribute($this->getAttribute($_section_, "locales", array(), "any", false, true), $this->getAttribute($_locale_, "id"), array(), "array", true, true));
                // line 134
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 136
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                if (isset($context["localeSelected"])) { $_localeSelected_ = $context["localeSelected"]; } else { $_localeSelected_ = null; }
                echo $_forms_->getcheckbox(array("id" => ("locale-" . $this->getAttribute($_locale_, "id")), "name" => "locales[]", "value" => $this->getAttribute($_locale_, "id"), "checked" => $_localeSelected_, "toggle" => (".for-locale-" . $this->getAttribute($_locale_, "id"))));
                // line 142
                echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><label for=\"locale-";
                // line 144
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "name"), "html", null, true);
                echo " (";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                echo ")</label></td>
\t\t\t\t\t\t\t\t<td class=\"centeralign\">
\t\t\t\t\t\t\t\t\t<div class=\"for-locale-";
                // line 146
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                if (isset($context["localeSelected"])) { $_localeSelected_ = $context["localeSelected"]; } else { $_localeSelected_ = null; }
                if ((!$_localeSelected_)) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 147
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                if (isset($context["brandNewSection"])) { $_brandNewSection_ = $context["brandNewSection"]; } else { $_brandNewSection_ = null; }
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                echo $_forms_->getlightswitch(array("name" => (("defaultLocaleStatuses[" . $this->getAttribute($_locale_, "id")) . "]"), "on" => (($_brandNewSection_ || (!$this->getAttribute($this->getAttribute($_section_, "locales", array(), "any", false, true), $this->getAttribute($_locale_, "id"), array(), "array", true, true))) || $this->getAttribute($this->getAttribute($this->getAttribute($_section_, "locales"), $this->getAttribute($_locale_, "id"), array(), "array"), "enabledByDefault")), "small" => true));
                // line 151
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
            $context["localesInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
\t\t\t";
            // line 160
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["localesInput"])) { $_localesInput_ = $context["localesInput"]; } else { $_localesInput_ = null; }
            echo $_forms_->getfield(array("label" => \Craft\Craft::t("Which locales should entries in this section target?")), $_localesInput_);
            // line 162
            echo "
\t\t";
        }
        // line 164
        echo "
\t\t";
        // line 165
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (isset($context["typeOptions"])) { $_typeOptions_ = $context["typeOptions"]; } else { $_typeOptions_ = null; }
        echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Section Type"), "instructions" => (\Craft\Craft::t("What type of section is this?") . (($this->getAttribute($_section_, "id")) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" => $_typeOptions_, "value" => $this->getAttribute($_section_, "type"), "toggle" => true, "targetPrefix" => "type-", "errors" => $this->getAttribute($_section_, "getErrors", array(0 => "type"), "method")));
        // line 175
        echo "

\t\t<hr>

\t\t";
        // line 179
        if (isset($context["canBeSingle"])) { $_canBeSingle_ = $context["canBeSingle"]; } else { $_canBeSingle_ = null; }
        if ($_canBeSingle_) {
            // line 180
            echo "\t\t\t<div id=\"type-single\"";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (($this->getAttribute($_section_, "type") != "single")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 182
            if (isset($context["canBeHomepage"])) { $_canBeHomepage_ = $context["canBeHomepage"]; } else { $_canBeHomepage_ = null; }
            if ($_canBeHomepage_) {
                // line 183
                echo "\t\t\t\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("This is for the homepage"), "id" => "single-homepage", "name" => "types[single][homepage]", "checked" => $this->getAttribute($_section_, "isHomepage", array(), "method"), "reverseToggle" => "single-uri-container"));
                // line 189
                echo "
\t\t\t\t";
            }
            // line 191
            echo "
\t\t\t\t<div id=\"single-uri-container\"";
            // line 192
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if ($this->getAttribute($_section_, "isHomepage", array(), "method")) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t\t";
            // line 193
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (isset($context["brandNewSection"])) { $_brandNewSection_ = $context["brandNewSection"]; } else { $_brandNewSection_ = null; }
            echo $_forms_->getfield(array("label" => \Craft\Craft::t("URI"), "instructions" => \Craft\Craft::t("What the entry URI should be."), "required" => true, "errors" => $this->getAttribute($_section_, "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"]->geturlFormatInput("single", $_brandNewSection_, $_section_));
            // line 198
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 201
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"]->gettemplateField("single", $_section_);
            echo "

\t\t\t</div>
\t\t";
        }
        // line 205
        echo "
\t\t";
        // line 206
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        $context["urlFormatParams"] = array("label" => \Craft\Craft::t("Entry URL Format"), "instructions" => \Craft\Craft::t("What the entry URLs should look like. You can include tags that output entry properties, such as {ex1} or {ex2}.", array("ex1" => "<code>{slug}</code>", "ex2" => "<code>{postDate|date(\"Y\")}</code>")), "required" => true, "errors" => $this->getAttribute($_section_, "getErrors", array(0 => "urlFormat"), "method"));
        // line 212
        echo "
\t\t";
        // line 213
        if (isset($context["canBeChannel"])) { $_canBeChannel_ = $context["canBeChannel"]; } else { $_canBeChannel_ = null; }
        if ($_canBeChannel_) {
            // line 214
            echo "\t\t\t<div id=\"type-channel\"";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (($this->getAttribute($_section_, "type") != "channel")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 216
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"]->gethasUrlsField("channel", $_section_);
            echo "

\t\t\t\t<div id=\"channel-url-settings\" class=\"nested-fields";
            // line 218
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if ((!$this->getAttribute($_section_, "hasUrls"))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 219
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["urlFormatParams"])) { $_urlFormatParams_ = $context["urlFormatParams"]; } else { $_urlFormatParams_ = null; }
            if (isset($context["brandNewSection"])) { $_brandNewSection_ = $context["brandNewSection"]; } else { $_brandNewSection_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $_forms_->getfield($_urlFormatParams_, $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"]->geturlFormatInput("channel", $_brandNewSection_, $_section_));
            echo "

\t\t\t\t\t";
            // line 221
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"]->gettemplateField("channel", $_section_);
            echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        // line 226
        echo "
\t\t";
        // line 227
        if (isset($context["canBeStructure"])) { $_canBeStructure_ = $context["canBeStructure"]; } else { $_canBeStructure_ = null; }
        if ($_canBeStructure_) {
            // line 228
            echo "\t\t\t<div id=\"type-structure\"";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (($this->getAttribute($_section_, "type") != "structure")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 230
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"]->gethasUrlsField("structure", $_section_);
            echo "

\t\t\t\t<div id=\"structure-url-settings\" class=\"nested-fields";
            // line 232
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if ((!$this->getAttribute($_section_, "hasUrls"))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 233
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["urlFormatParams"])) { $_urlFormatParams_ = $context["urlFormatParams"]; } else { $_urlFormatParams_ = null; }
            if (isset($context["brandNewSection"])) { $_brandNewSection_ = $context["brandNewSection"]; } else { $_brandNewSection_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $_forms_->getfield($_urlFormatParams_, $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"]->geturlFormatInput("structure", $_brandNewSection_, $_section_));
            echo "

\t\t\t\t\t";
            // line 235
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $context["__internal_6668a13465be31d28be97b4e8c7fead1cda37e61f7b74ff9729adec807d57e0a"]->gettemplateField("structure", $_section_);
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 238
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Max Levels"), "instructions" => \Craft\Craft::t("The maximum number of levels this section can have. Leave blank if you don’t care."), "id" => "structure-maxLevels", "name" => "types[structure][maxLevels]", "value" => $this->getAttribute($_section_, "maxLevels"), "size" => 5, "errors" => $this->getAttribute($_section_, "getErrors", array(0 => "maxLevels"), "method")));
            // line 246
            echo "

\t\t\t</div>
\t\t";
        }
        // line 250
        echo "
\t\t<hr>

\t\t";
        // line 253
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (($_CraftEdition_ >= $_CraftClient_)) {
            // line 254
            echo "\t\t\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Enable versioning for entries in this section?"), "id" => "enableVersioning", "name" => "enableVersioning", "checked" => $this->getAttribute($_section_, "enableVersioning")));
            // line 259
            echo "
\t\t";
        }
        // line 261
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 263
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 269
        ob_start();
        // line 270
        echo "\t";
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if ((!$this->getAttribute($_section_, "handle"))) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 271
        echo "
\t";
        // line 272
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "i18n"), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 273
            echo "\t\t";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
            if (((!$this->getAttribute($this->getAttribute($_section_, "locales", array(), "any", false, true), $this->getAttribute($_locale_, "id"), array(), "array", true, true)) || (!$this->getAttribute($this->getAttribute($this->getAttribute($_section_, "locales"), $this->getAttribute($_locale_, "id"), array(), "array"), "urlFormat")))) {
                // line 274
                echo "\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-urlFormat-";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                echo "');
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-urlFormat-";
                // line 275
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                echo "',   { suffix: '/{slug}' });
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-urlFormat-";
                // line 276
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                echo "', { suffix: '/{slug}' });
\t\t";
            }
            // line 278
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "
\t";
        // line 280
        if (isset($context["brandNewSection"])) { $_brandNewSection_ = $context["brandNewSection"]; } else { $_brandNewSection_ = null; }
        if ($_brandNewSection_) {
            // line 281
            echo "\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-template');
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-template',   { suffix: '/_entry' });
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-template', { suffix: '/_entry' });
\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 286
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function geturlFormatText($_sectionType = null, $_locale = null, $_section = null, $_name = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "locale" => $_locale,
            "section" => $_section,
            "name" => $_name,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "\t";
            $context["__internal_d77f64bf378211e3cecb29a54cd4e29470ac8fbe6de192b4a6e88a9670b8804f"] = $this->env->loadTemplate("_includes/forms");
            // line 9
            echo "\t";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
            $context["errors"] = $this->getAttribute($_section_, "getErrors", array(0 => (($_name_ . "-") . $this->getAttribute($_locale_, "id"))), "method");
            // line 10
            echo "
\t<div class=\"input";
            // line 11
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ($_errors_) {
                echo " errors";
            }
            echo "\">
\t\t";
            // line 12
            if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo $context["__internal_d77f64bf378211e3cecb29a54cd4e29470ac8fbe6de192b4a6e88a9670b8804f"]->gettext(array("id" => (((($_sectionType_ . "-") . $_name_) . "-") . $this->getAttribute($_locale_, "id")), "class" => "code ltr", "name" => (((((("types[" . $_sectionType_) . "][") . $_name_) . "][") . $this->getAttribute($_locale_, "id")) . "]"), "value" => ((($_value_ != "__home__")) ? ($_value_) : (null)), "errors" => $_errors_));
            // line 18
            echo "
\t</div>

\t";
            // line 21
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo $context["__internal_d77f64bf378211e3cecb29a54cd4e29470ac8fbe6de192b4a6e88a9670b8804f"]->geterrorList($_errors_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function geturlFormatInput($_sectionType = null, $_brandNewSection = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "brandNewSection" => $_brandNewSection,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
            if (($this->getAttribute($_craft_, "isLocalized", array(), "method") || ($_sectionType_ == "structure"))) {
                // line 26
                echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
                // line 27
                if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
                if (($_sectionType_ == "structure")) {
                    // line 28
                    echo "\t\t\t\t<thead>
\t\t\t\t\t";
                    // line 29
                    if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                    if ($this->getAttribute($_craft_, "isLocalized", array(), "method")) {
                        // line 30
                        echo "\t\t\t\t\t\t<th></th>
\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t<th scope=\"col\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Top-Level Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th scope=\"col\">";
                    // line 33
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Nested Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t</thead>
\t\t\t";
                }
                // line 36
                echo "\t\t\t<tbody>
\t\t\t\t";
                // line 37
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "i18n"), "getSiteLocales", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 38
                    echo "\t\t\t\t\t<tr class=\"for-locale-";
                    if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                    if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                    if (isset($context["brandNewSection"])) { $_brandNewSection_ = $context["brandNewSection"]; } else { $_brandNewSection_ = null; }
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                    if ((($this->getAttribute($_craft_, "isLocalized", array(), "method") && (!$_brandNewSection_)) && (!$this->getAttribute($this->getAttribute($_section_, "locales", array(), "any", false, true), $this->getAttribute($_locale_, "id"), array(), "array", true, true)))) {
                        echo " hidden";
                    }
                    echo "\">
\t\t\t\t\t\t";
                    // line 39
                    if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                    if ($this->getAttribute($_craft_, "isLocalized", array(), "method")) {
                        // line 40
                        echo "\t\t\t\t\t\t\t<th class=\"thin nowrap\">";
                        if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                        echo "</th>
\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                    // line 43
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
                    if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                    $context["value"] = ((((($this->getAttribute($_section_, "type") == $_sectionType_) || ($_sectionType_ != "single")) && $this->getAttribute($this->getAttribute($_section_, "locales", array(), "any", false, true), $this->getAttribute($_locale_, "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($_section_, "locales"), $this->getAttribute($_locale_, "id"), array(), "array"), "urlFormat")) : (null));
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
                    if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                    if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo $this->getAttribute($this, "urlFormatText", array(0 => $_sectionType_, 1 => $_locale_, 2 => $_section_, 3 => "urlFormat", 4 => $_value_), "method");
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    // line 46
                    if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
                    if (($_sectionType_ == "structure")) {
                        // line 47
                        echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                        // line 48
                        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                        if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                        $context["value"] = (((($this->getAttribute($_section_, "type") == "structure") && $this->getAttribute($this->getAttribute($_section_, "locales", array(), "any", false, true), $this->getAttribute($_locale_, "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($_section_, "locales"), $this->getAttribute($_locale_, "id"), array(), "array"), "nestedUrlFormat")) : ("{parent.uri}/{slug}"));
                        // line 49
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
                        if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo $this->getAttribute($this, "urlFormatText", array(0 => $_sectionType_, 1 => $_locale_, 2 => $_section_, 3 => "nestedUrlFormat", 4 => $_value_), "method");
                        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 57
                echo "\t\t";
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                $context["locale"] = $this->getAttribute($this->getAttribute($_craft_, "i18n"), "getPrimarySiteLocale", array(), "method");
                // line 58
                echo "\t\t";
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                $context["value"] = ((((($this->getAttribute($_section_, "type") == $_sectionType_) || ($_sectionType_ != "single")) && $this->getAttribute($this->getAttribute($_section_, "locales", array(), "any", false, true), $this->getAttribute($_locale_, "id"), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($_section_, "locales"), $this->getAttribute($_locale_, "id"), array(), "array"), "urlFormat")) : (null));
                // line 59
                echo "\t\t";
                if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo $this->getAttribute($this, "urlFormatText", array(0 => $_sectionType_, 1 => $_locale_, 2 => $_section_, 3 => "urlFormat", 4 => $_value_), "method");
                echo "
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function gethasUrlsField($_sectionType = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            echo "\t";
            $context["__internal_e0538639e8f65909d57c210b0fdf4dc6685cdbf037c4475269696f267d66118b"] = $this->env->loadTemplate("_includes/forms");
            // line 65
            echo "
\t";
            // line 66
            if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $context["__internal_e0538639e8f65909d57c210b0fdf4dc6685cdbf037c4475269696f267d66118b"]->getcheckboxField(array("label" => \Craft\Craft::t("Entries in this section have their own URLs"), "id" => ($_sectionType_ . "-hasUrls"), "name" => (("types[" . $_sectionType_) . "][hasUrls]"), "checked" => $this->getAttribute($_section_, "hasUrls"), "toggle" => ($_sectionType_ . "-url-settings")));
            // line 72
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function gettemplateField($_sectionType = null, $_section = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $_sectionType,
            "section" => $_section,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "\t";
            $context["__internal_d3022e589a3dbac2301cb6818a9f8e77a90b108b4ae760dfad95ffa77b8650f1"] = $this->env->loadTemplate("_includes/forms");
            // line 77
            echo "
\t";
            // line 78
            if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo $context["__internal_d3022e589a3dbac2301cb6818a9f8e77a90b108b4ae760dfad95ffa77b8650f1"]->gettextField(array("label" => \Craft\Craft::t("Entry Template"), "instructions" => ((($_sectionType_ == "single")) ? (\Craft\Craft::t("The template to use when the entry’s URL is requested.")) : (\Craft\Craft::t("The template to use when an entry’s URL is requested."))), "id" => ($_sectionType_ . "-template"), "class" => "ltr", "name" => (("types[" . $_sectionType_) . "][template]"), "value" => $this->getAttribute($_section_, "template"), "errors" => $this->getAttribute($_section_, "getErrors", array(0 => "template"), "method")));
            // line 86
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settings/sections/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 86,  696 => 78,  693 => 77,  690 => 76,  678 => 75,  666 => 72,  662 => 66,  659 => 65,  656 => 64,  644 => 63,  625 => 59,  619 => 58,  615 => 57,  610 => 54,  603 => 52,  592 => 49,  588 => 48,  585 => 47,  582 => 46,  572 => 44,  567 => 43,  564 => 42,  557 => 40,  554 => 39,  541 => 38,  536 => 37,  533 => 36,  527 => 33,  522 => 32,  518 => 30,  515 => 29,  512 => 28,  509 => 27,  506 => 26,  501 => 25,  488 => 24,  474 => 21,  469 => 18,  462 => 12,  455 => 11,  452 => 10,  446 => 9,  443 => 8,  428 => 7,  422 => 286,  415 => 281,  412 => 280,  409 => 279,  403 => 278,  397 => 276,  392 => 275,  386 => 274,  381 => 273,  376 => 272,  373 => 271,  367 => 270,  365 => 269,  358 => 263,  354 => 261,  350 => 259,  345 => 254,  341 => 253,  336 => 250,  330 => 246,  326 => 238,  319 => 235,  310 => 233,  303 => 232,  297 => 230,  288 => 228,  285 => 227,  282 => 226,  273 => 221,  264 => 219,  257 => 218,  251 => 216,  242 => 214,  239 => 213,  236 => 212,  233 => 206,  230 => 205,  222 => 201,  217 => 198,  212 => 193,  205 => 192,  202 => 191,  198 => 189,  193 => 183,  190 => 182,  181 => 180,  178 => 179,  172 => 175,  167 => 165,  164 => 164,  160 => 162,  156 => 160,  153 => 159,  148 => 156,  138 => 151,  132 => 147,  123 => 146,  111 => 144,  107 => 142,  102 => 136,  98 => 134,  92 => 133,  87 => 132,  80 => 128,  76 => 127,  70 => 123,  67 => 122,  64 => 121,  60 => 119,  56 => 110,  52 => 108,  48 => 97,  45 => 96,  37 => 95,  32 => 92,  30 => 91,  28 => 89,  26 => 5,  24 => 3,);
    }
}
