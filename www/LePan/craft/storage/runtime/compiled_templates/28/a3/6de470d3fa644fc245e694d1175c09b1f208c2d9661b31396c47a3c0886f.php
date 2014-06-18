<?php

/* entries/_edit */
class __TwigTemplate_28a36de470d3fa644fc245e694d1175c09b1f208c2d9661b31396c47a3c0886f extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 4
        ob_start();
        // line 5
        echo "\t";
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (($this->getAttribute($_entry_, "id") && ($_CraftEdition_ >= $_CraftClient_))) {
            // line 6
            echo "\t\t";
            $this->env->loadTemplate("entries/_revisions")->display($context);
            // line 7
            echo "\t";
        }
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        $context["sectionHandle"] = $this->getAttribute($_section_, "handle");
        // line 11
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        $context["isVersion"] = ($this->getAttribute($_entry_, "getClassHandle", array(), "method") == "EntryVersion");
        // line 12
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        $context["isDraft"] = ($this->getAttribute($_entry_, "id") && ($this->getAttribute($_entry_, "getClassHandle", array(), "method") == "EntryDraft"));
        // line 296
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        if ((!$this->getAttribute($_entry_, "slug"))) {
            // line 297
            \Craft\craft()->templates->includeJs("window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "\t<form id=\"entry-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\" data-saveshortcut-redirect=\"";
        if (isset($context["continueEditingUrl"])) { $_continueEditingUrl_ = $context["continueEditingUrl"]; } else { $_continueEditingUrl_ = null; }
        echo twig_escape_filter($this->env, $_continueEditingUrl_, "html", null, true);
        echo "\" data-confirm-unload=\"1\">
\t\t";
        // line 17
        if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
        if ((!$_isVersion_)) {
            // line 18
            echo "\t\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_section_, "id"), "html", null, true);
            echo "\">
\t\t\t";
            // line 19
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if ($this->getAttribute($_entry_, "id")) {
                echo "<input type=\"hidden\" name=\"entryId\" value=\"";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "id"), "html", null, true);
                echo "\">";
            }
            // line 20
            echo "\t\t\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if ($this->getAttribute($_craft_, "isLocalized", array(), "method")) {
                echo "<input type=\"hidden\" name=\"locale\" value=\"";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "locale"), "html", null, true);
                echo "\">";
            }
            // line 21
            echo "\t\t";
        } else {
            // line 22
            echo "\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "versionId"), "html", null, true);
            echo "\">
\t\t";
        }
        // line 24
        echo "
\t\t<div class=\"grid first\">
\t\t\t<div class=\"item\" data-position=\"left\" data-min-colspan=\"2\" data-max-colspan=\"3\">
\t\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t\t";
        // line 28
        $this->env->loadTemplate("_includes/tabs")->display($context);
        // line 29
        echo "\t\t\t\t\t";
        if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
        $this->env->loadTemplate("entries/_fields")->display(array_merge($context, array("static" => $_isVersion_)));
        // line 32
        echo "\t\t\t\t</div>
\t\t\t</div><!--/item-->

\t\t\t<div class=\"item\" data-position=\"right\" data-colspan=\"1\">

\t\t\t\t";
        // line 37
        if (isset($context["showPreviewBtn"])) { $_showPreviewBtn_ = $context["showPreviewBtn"]; } else { $_showPreviewBtn_ = null; }
        if ($_showPreviewBtn_) {
            // line 38
            echo "\t\t\t\t\t";
            if (array_key_exists("shareUrl", $context)) {
                // line 39
                echo "\t\t\t\t\t\t<div id=\"view-btns\" class=\"btngroup\">
\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t<div id=\"livepreview-btn\" class=\"btn big\" data-icon=\"view\">
\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, \Craft\Craft::t("Live Preview"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<div id=\"livepreview-spinner\" class=\"spinner hidden\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 45
            if (array_key_exists("shareUrl", $context)) {
                // line 46
                echo "\t\t\t\t\t\t\t<a href=\"";
                if (isset($context["shareUrl"])) { $_shareUrl_ = $context["shareUrl"]; } else { $_shareUrl_ = null; }
                echo twig_escape_filter($this->env, $_shareUrl_, "html", null, true);
                echo "\" id=\"share-btn\" class=\"btn big\" data-icon=\"share\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("View this entry on your website"), "html", null, true);
                echo "\" target=\"_blank\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t";
        }
        // line 50
        echo "
\t\t\t\t";
        // line 51
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($this->getAttribute($_craft_, "isLocalized", array(), "method") && (twig_length_filter($this->env, $this->getAttribute($_section_, "getLocales", array(), "method")) > 1))) {
            // line 52
            echo "\t\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t\t";
            // line 53
            if (isset($context["localeIds"])) { $_localeIds_ = $context["localeIds"]; } else { $_localeIds_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_localeIds_);
            foreach ($context['_seq'] as $context["_key"] => $context["localeId"]) {
                // line 54
                echo "\t\t\t\t\t\t\t";
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                if (isset($context["localeId"])) { $_localeId_ = $context["localeId"]; } else { $_localeId_ = null; }
                $context["localeName"] = $this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "i18n"), "getLocaleById", array(0 => $_localeId_), "method"), "name");
                // line 55
                echo "\t\t\t\t\t\t\t<li";
                if (isset($context["localeId"])) { $_localeId_ = $context["localeId"]; } else { $_localeId_ = null; }
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if (($_localeId_ == $this->getAttribute($_entry_, "locale"))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                // line 56
                if (isset($context["localeId"])) { $_localeId_ = $context["localeId"]; } else { $_localeId_ = null; }
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if (($_localeId_ == $this->getAttribute($_entry_, "locale"))) {
                    // line 57
                    if (isset($context["localeName"])) { $_localeName_ = $context["localeName"]; } else { $_localeName_ = null; }
                    echo twig_escape_filter($this->env, $_localeName_, "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 58
                    if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    echo $_forms_->getlightswitch(array("name" => "localeEnabled", "on" => $this->getAttribute($_entry_, "localeEnabled"), "small" => true));
                } else {
                    // line 64
                    echo "<a href=\"";
                    if (isset($context["sectionHandle"])) { $_sectionHandle_ = $context["sectionHandle"]; } else { $_sectionHandle_ = null; }
                    if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                    if (isset($context["localeId"])) { $_localeId_ = $context["localeId"]; } else { $_localeId_ = null; }
                    echo twig_escape_filter($this->env, ((\Craft\UrlHelper::getUrl(((("entries/" . $_sectionHandle_) . "/") . $this->getAttribute($this->getAttribute($_craft_, "request"), "getSegment", array(0 => 3), "method"))) . "/") . $_localeId_), "html", null, true);
                    echo "\">";
                    if (isset($context["localeName"])) { $_localeName_ = $context["localeName"]; } else { $_localeName_ = null; }
                    echo twig_escape_filter($this->env, $_localeName_, "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"status ";
                    // line 65
                    if (isset($context["localeId"])) { $_localeId_ = $context["localeId"]; } else { $_localeId_ = null; }
                    if (isset($context["enabledLocales"])) { $_enabledLocales_ = $context["enabledLocales"]; } else { $_enabledLocales_ = null; }
                    echo ((twig_in_filter($_localeId_, $_enabledLocales_)) ? ("enabled") : ("disabled"));
                    echo "\"></div>";
                }
                // line 67
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 71
        echo "
\t\t\t\t";
        // line 72
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if (($this->getAttribute($_section_, "type") != "single")) {
            // line 73
            echo "\t\t\t\t\t<div id=\"settings\" class=\"pane\">

\t\t\t\t\t\t";
            // line 75
            if (isset($context["showEntryTypes"])) { $_showEntryTypes_ = $context["showEntryTypes"]; } else { $_showEntryTypes_ = null; }
            if ($_showEntryTypes_) {
                // line 76
                echo "\t\t\t\t\t\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["entryType"])) { $_entryType_ = $context["entryType"]; } else { $_entryType_ = null; }
                if (isset($context["entryTypeOptions"])) { $_entryTypeOptions_ = $context["entryTypeOptions"]; } else { $_entryTypeOptions_ = null; }
                echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "id" => "entryType", "name" => "typeId", "value" => $this->getAttribute($_entryType_, "id"), "options" => $_entryTypeOptions_));
                // line 82
                echo "
\t\t\t\t\t\t";
            }
            // line 84
            echo "
\t\t\t\t\t\t";
            // line 85
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
            echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Slug"), "id" => "slug", "name" => "slug", "value" => $this->getAttribute($_entry_, "slug"), "errors" => (((!$_isVersion_)) ? (twig_array_merge($this->getAttribute($_entry_, "getErrors", array(0 => "slug"), "method"), $this->getAttribute($_entry_, "getErrors", array(0 => "uri"), "method"))) : ("")), "disabled" => $_isVersion_));
            // line 92
            echo "

\t\t\t\t\t\t";
            // line 94
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (isset($context["parentOptions"])) { $_parentOptions_ = $context["parentOptions"]; } else { $_parentOptions_ = null; }
            if ((($this->getAttribute($_section_, "type") == "structure") && (twig_length_filter($this->env, $_parentOptions_) > 1))) {
                // line 95
                echo "\t\t\t\t\t\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["parentOptions"])) { $_parentOptions_ = $context["parentOptions"]; } else { $_parentOptions_ = null; }
                if (isset($context["parentId"])) { $_parentId_ = $context["parentId"]; } else { $_parentId_ = null; }
                if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
                echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Parent Entry"), "id" => "parentId", "name" => "parentId", "options" => $_parentOptions_, "value" => $_parentId_, "disabled" => $_isVersion_));
                // line 102
                echo "
\t\t\t\t\t\t";
            }
            // line 104
            echo "
\t\t\t\t\t\t";
            // line 105
            if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
            if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
            if (($_CraftEdition_ >= $_CraftClient_)) {
                // line 106
                echo "\t\t\t\t\t\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["authorOptions"])) { $_authorOptions_ = $context["authorOptions"]; } else { $_authorOptions_ = null; }
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
                echo $_forms_->getselectField(array("label" => \Craft\Craft::t("Author"), "id" => "author", "name" => "author", "options" => $_authorOptions_, "value" => $this->getAttribute($_entry_, "authorId"), "disabled" => $_isVersion_));
                // line 113
                echo "
\t\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t\t\t\t";
            // line 116
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
            echo $_forms_->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "id" => "postDate", "name" => "postDate", "value" => (($this->getAttribute($_entry_, "postDate")) ? ($this->getAttribute($_entry_, "postDate")) : (null)), "errors" => $this->getAttribute($_entry_, "getErrors", array(0 => "postDate"), "method"), "disabled" => $_isVersion_));
            // line 123
            echo "

\t\t\t\t\t\t";
            // line 125
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
            echo $_forms_->getdateTimeField(array("label" => \Craft\Craft::t("Expiration Date"), "id" => "expiryDate", "name" => "expiryDate", "value" => (($this->getAttribute($_entry_, "expiryDate")) ? ($this->getAttribute($_entry_, "expiryDate")) : (null)), "errors" => $this->getAttribute($_entry_, "getErrors", array(0 => "expiryDate"), "method"), "disabled" => $_isVersion_));
            // line 132
            echo "

\t\t\t\t\t\t";
            // line 134
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (isset($context["permissionSuffix"])) { $_permissionSuffix_ = $context["permissionSuffix"]; } else { $_permissionSuffix_ = null; }
            $context["canPublish"] = $this->getAttribute($_currentUser_, "can", array(0 => ("publishEntries" . $_permissionSuffix_)), "method");
            // line 135
            echo "\t\t\t\t\t\t";
            if (isset($context["canPublish"])) { $_canPublish_ = $context["canPublish"]; } else { $_canPublish_ = null; }
            if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
            if (isset($context["canDeleteEntry"])) { $_canDeleteEntry_ = $context["canDeleteEntry"]; } else { $_canDeleteEntry_ = null; }
            if (($_canPublish_ || ((!$_isVersion_) && $_canDeleteEntry_))) {
                // line 136
                echo "
\t\t\t\t\t\t\t";
                // line 137
                ob_start();
                // line 138
                echo "\t\t\t\t\t\t\t\t";
                if (isset($context["canPublish"])) { $_canPublish_ = $context["canPublish"]; } else { $_canPublish_ = null; }
                if ($_canPublish_) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 140
                    if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
                    echo $_forms_->getlightswitch(array("id" => "enabled", "name" => "enabled", "on" => $this->getAttribute($_entry_, "enabled"), "disabled" => $_isVersion_));
                    // line 145
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 148
                echo "
\t\t\t\t\t\t\t\t";
                // line 149
                if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
                if (isset($context["canDeleteEntry"])) { $_canDeleteEntry_ = $context["canDeleteEntry"]; } else { $_canDeleteEntry_ = null; }
                if (((!$_isVersion_) && $_canDeleteEntry_)) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    // line 151
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                    echo "\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\t\t\t\t\t\tdata-confirm=\"";
                    // line 152
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this entry?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t";
                $context["statusInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 157
                echo "
\t\t\t\t\t\t\t";
                // line 158
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["canPublish"])) { $_canPublish_ = $context["canPublish"]; } else { $_canPublish_ = null; }
                if (isset($context["statusInput"])) { $_statusInput_ = $context["statusInput"]; } else { $_statusInput_ = null; }
                echo $_forms_->getfield(array("label" => (($_canPublish_) ? (\Craft\Craft::t("Status")) : ("")), "id" => "enabled"), $_statusInput_);
                // line 161
                echo "
\t\t\t\t\t\t";
            }
            // line 163
            echo "
\t\t\t\t\t</div><!--/pane-->

\t\t\t\t\t";
            // line 166
            if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (($_isVersion_ && $this->getAttribute($_entry_, "revisionNotes"))) {
                // line 167
                echo "\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t<h6>";
                // line 168
                echo twig_escape_filter($this->env, \Craft\Craft::t("Version Notes"), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t<p class=\"light\">";
                // line 169
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "revisionNotes"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 172
            echo "
\t\t\t\t";
        }
        // line 174
        echo "
\t\t\t\t";
        // line 176
        echo "
\t\t\t\t";
        // line 177
        if (isset($context["isDraft"])) { $_isDraft_ = $context["isDraft"]; } else { $_isDraft_ = null; }
        if (isset($context["isVersion"])) { $_isVersion_ = $context["isVersion"]; } else { $_isVersion_ = null; }
        if ($_isDraft_) {
            // line 178
            echo "
\t\t\t\t\t<hr>

\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 182
            if (isset($context["baseCpEditUrl"])) { $_baseCpEditUrl_ = $context["baseCpEditUrl"]; } else { $_baseCpEditUrl_ = null; }
            echo twig_escape_filter($this->env, $_baseCpEditUrl_, "html", null, true);
            echo "/drafts/";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "draftId"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"draftId\" value=\"";
            // line 183
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "draftId"), "html", null, true);
            echo "\">

\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 186
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save draft"), "html", null, true);
            echo "\">

\t\t\t\t\t\t";
            // line 189
            echo "\t\t\t\t\t\t";
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (isset($context["permissionSuffix"])) { $_permissionSuffix_ = $context["permissionSuffix"]; } else { $_permissionSuffix_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if ((($this->getAttribute($_currentUser_, "can", array(0 => ("publishEntries" . $_permissionSuffix_)), "method") && ((($this->getAttribute($_section_, "type") == "single") || ($this->getAttribute($_entry_, "authorId") == $this->getAttribute($_currentUser_, "id"))) || $this->getAttribute($_currentUser_, "can", array(0 => ("publishPeerEntries" . $_permissionSuffix_)), "method"))) && (($this->getAttribute($_entry_, "creatorId") == $this->getAttribute($_currentUser_, "id")) || $this->getAttribute($_currentUser_, "can", array(0 => ("publishPeerEntryDrafts" . $_permissionSuffix_)), "method")))) {
                // line 194
                echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Publish draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/publishDraft\" data-redirect=\"";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "cpEditUrl"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 196
            echo "
\t\t\t\t\t\t";
            // line 198
            echo "\t\t\t\t\t\t";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (isset($context["permissionSuffix"])) { $_permissionSuffix_ = $context["permissionSuffix"]; } else { $_permissionSuffix_ = null; }
            if ((($this->getAttribute($_entry_, "creatorId") == $this->getAttribute($_currentUser_, "id")) || $this->getAttribute($_currentUser_, "can", array(0 => ("deletePeerEntryDrafts" . $_permissionSuffix_)), "method"))) {
                // line 199
                echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t\t\t   data-confirm=\"";
                // line 200
                echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this draft?"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t   data-redirect=\"";
                // line 201
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "cpEditUrl"), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t";
            }
            // line 203
            echo "\t\t\t\t\t</div>

\t\t\t\t";
        } elseif ($_isVersion_) {
            // line 206
            echo "
\t\t\t\t\t";
            // line 208
            echo "\t\t\t\t\t";
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (isset($context["permissionSuffix"])) { $_permissionSuffix_ = $context["permissionSuffix"]; } else { $_permissionSuffix_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (($this->getAttribute($_currentUser_, "can", array(0 => ("publishEntries" . $_permissionSuffix_)), "method") && ((($this->getAttribute($_section_, "type") == "single") || ($this->getAttribute($_entry_, "authorId") == $this->getAttribute($_currentUser_, "id"))) || $this->getAttribute($_currentUser_, "can", array(0 => ("publishPeerEntries" . $_permissionSuffix_)), "method")))) {
                // line 212
                echo "
\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/revertEntryToVersion\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 216
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "cpEditUrl"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
                // line 217
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "versionId"), "html", null, true);
                echo "\">

\t\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                // line 220
                echo twig_escape_filter($this->env, \Craft\Craft::t("Revert entry to this version"), "html", null, true);
                echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 223
            echo "
\t\t\t\t";
        } else {
            // line 225
            echo "
\t\t\t\t\t";
            // line 227
            echo "\t\t\t\t\t";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (isset($context["permissionSuffix"])) { $_permissionSuffix_ = $context["permissionSuffix"]; } else { $_permissionSuffix_ = null; }
            if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
            if (((($this->getAttribute($_entry_, "id") || $this->getAttribute($_currentUser_, "can", array(0 => ("createEntries" . $_permissionSuffix_)), "method")) && (((!$this->getAttribute($_entry_, "id")) || (!$this->getAttribute($_entry_, "enabled"))) || $this->getAttribute($_currentUser_, "can", array(0 => ("publishEntries" . $_permissionSuffix_)), "method"))) && ((($this->getAttribute($_section_, "type") == "single") || ($this->getAttribute($_entry_, "authorId") == $this->getAttribute($_currentUser_, "id"))) || $this->getAttribute($_currentUser_, "can", array(0 => ("publishPeerEntries" . $_permissionSuffix_)), "method")))) {
                // line 232
                echo "\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries/";
                // line 235
                if (isset($context["sectionHandle"])) { $_sectionHandle_ = $context["sectionHandle"]; } else { $_sectionHandle_ = null; }
                echo twig_escape_filter($this->env, $_sectionHandle_, "html", null, true);
                echo "\">

\t\t\t\t\t\t<table class=\"inputs fullwidth\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t\t\t<div class=\"btngroup submit first\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
                // line 241
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"";
                // line 246
                if (isset($context["continueEditingUrl"])) { $_continueEditingUrl_ = $context["continueEditingUrl"]; } else { $_continueEditingUrl_ = null; }
                echo twig_escape_filter($this->env, $_continueEditingUrl_, "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
                echo "</a></li>

\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 248
                $context["nextEntryParams"] = array();
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (isset($context["showEntryTypes"])) { $_showEntryTypes_ = $context["showEntryTypes"]; } else { $_showEntryTypes_ = null; }
                if ($_showEntryTypes_) {
                    // line 250
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["nextEntryParams"])) { $_nextEntryParams_ = $context["nextEntryParams"]; } else { $_nextEntryParams_ = null; }
                    $context["nextEntryParams"] = twig_array_merge($_nextEntryParams_, array(0 => "typeId={type.id}"));
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 252
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                if (isset($context["parentOptions"])) { $_parentOptions_ = $context["parentOptions"]; } else { $_parentOptions_ = null; }
                if ((($this->getAttribute($_section_, "type") == "structure") && (twig_length_filter($this->env, $_parentOptions_) > 1))) {
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["nextEntryParams"])) { $_nextEntryParams_ = $context["nextEntryParams"]; } else { $_nextEntryParams_ = null; }
                    $context["nextEntryParams"] = twig_array_merge($_nextEntryParams_, array(0 => "parentId={parent.id}"));
                    // line 254
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 255
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 256
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                if (($this->getAttribute($_section_, "type") != "single")) {
                    // line 257
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/";
                    if (isset($context["sectionHandle"])) { $_sectionHandle_ = $context["sectionHandle"]; } else { $_sectionHandle_ = null; }
                    echo twig_escape_filter($this->env, $_sectionHandle_, "html", null, true);
                    echo "/new";
                    if (isset($context["nextEntryParams"])) { $_nextEntryParams_ = $context["nextEntryParams"]; } else { $_nextEntryParams_ = null; }
                    if ($_nextEntryParams_) {
                        echo "?";
                        if (isset($context["nextEntryParams"])) { $_nextEntryParams_ = $context["nextEntryParams"]; } else { $_nextEntryParams_ = null; }
                        echo twig_escape_filter($this->env, twig_join_filter($_nextEntryParams_, "&"), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 259
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 260
                if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
                if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
                if (($_CraftEdition_ >= $_CraftClient_)) {
                    // line 261
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"";
                    if (isset($context["baseCpEditUrl"])) { $_baseCpEditUrl_ = $context["baseCpEditUrl"]; } else { $_baseCpEditUrl_ = null; }
                    echo twig_escape_filter($this->env, $_baseCpEditUrl_, "html", null, true);
                    echo "/drafts/{draftId}\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                // line 267
                if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
                if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
                if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
                if ((($_CraftEdition_ >= $_CraftClient_) && $this->getAttribute($_section_, "enableVersioning"))) {
                    // line 268
                    echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"revisionNotes\" class=\"fullwidth textline\" placeholder=\"";
                    // line 269
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Notes about your changes"), "html", null, true);
                    echo "\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                // line 272
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t";
            } else {
                // line 275
                echo "\t\t\t\t\t\t";
                if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
                if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
                if (($_CraftEdition_ >= $_CraftClient_)) {
                    // line 276
                    echo "
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                    // line 280
                    if (isset($context["baseCpEditUrl"])) { $_baseCpEditUrl_ = $context["baseCpEditUrl"]; } else { $_baseCpEditUrl_ = null; }
                    echo twig_escape_filter($this->env, $_baseCpEditUrl_, "html", null, true);
                    echo "/drafts/{draftId}\">

\t\t\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
                    // line 283
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 286
                echo "\t\t\t\t\t";
            }
            // line 287
            echo "
\t\t\t\t";
        }
        // line 289
        echo "
\t\t\t</div><!--/item-->
\t\t</div><!--/grid-->
\t</form>
";
    }

    public function getTemplateName()
    {
        return "entries/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 289,  687 => 287,  684 => 286,  678 => 283,  671 => 280,  665 => 276,  660 => 275,  655 => 272,  649 => 269,  646 => 268,  641 => 267,  635 => 263,  626 => 261,  622 => 260,  619 => 259,  603 => 257,  600 => 256,  597 => 255,  594 => 254,  590 => 253,  585 => 252,  582 => 251,  578 => 250,  574 => 249,  572 => 248,  564 => 246,  556 => 241,  546 => 235,  541 => 232,  534 => 227,  531 => 225,  527 => 223,  521 => 220,  514 => 217,  509 => 216,  503 => 212,  496 => 208,  493 => 206,  488 => 203,  482 => 201,  478 => 200,  473 => 199,  467 => 198,  464 => 196,  455 => 194,  448 => 189,  443 => 186,  436 => 183,  428 => 182,  422 => 178,  418 => 177,  415 => 176,  412 => 174,  408 => 172,  401 => 169,  397 => 168,  394 => 167,  390 => 166,  385 => 163,  381 => 161,  376 => 158,  373 => 157,  370 => 156,  363 => 152,  359 => 151,  356 => 150,  352 => 149,  349 => 148,  344 => 145,  339 => 140,  336 => 139,  332 => 138,  330 => 137,  327 => 136,  321 => 135,  317 => 134,  313 => 132,  308 => 125,  304 => 123,  299 => 116,  296 => 115,  292 => 113,  285 => 106,  281 => 105,  278 => 104,  274 => 102,  267 => 95,  263 => 94,  259 => 92,  254 => 85,  251 => 84,  247 => 82,  241 => 76,  238 => 75,  234 => 73,  231 => 72,  228 => 71,  224 => 69,  217 => 67,  211 => 65,  200 => 64,  195 => 58,  190 => 57,  186 => 56,  178 => 55,  173 => 54,  168 => 53,  165 => 52,  161 => 51,  158 => 50,  155 => 49,  145 => 46,  143 => 45,  137 => 42,  134 => 41,  130 => 39,  127 => 38,  124 => 37,  117 => 32,  113 => 29,  111 => 28,  105 => 24,  98 => 22,  95 => 21,  86 => 20,  78 => 19,  72 => 18,  69 => 17,  63 => 16,  60 => 15,  54 => 297,  51 => 296,  48 => 12,  45 => 11,  42 => 10,  38 => 7,  35 => 6,  29 => 5,  27 => 4,  25 => 2,);
    }
}
