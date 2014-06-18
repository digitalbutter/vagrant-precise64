<?php

/* users/_edit */
class __TwigTemplate_58975d1a3a1bb2377a00609e0cde7f4216343bd3717790e0123cccd323c24db9 extends Craft\BaseTemplate
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
        // line 3
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (($_CraftEdition_ == $_CraftPro_)) {
            // line 4
            $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Users"), "url" => \Craft\UrlHelper::getUrl("users")));
        }
        // line 9
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 11
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (($_CraftEdition_ == $_CraftPro_)) {
            // line 12
            \Craft\craft()->templates->includeTranslations(
            	"Are you sure you want to delete this photo?"
            );
            // line 16
            \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.ui.widget.js");
            // line 17
            \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.fileupload.js");
            // line 18
            \Craft\craft()->templates->includeJsResource("lib/imgareaselect/jquery.imgareaselect.pack.js");
            // line 19
            \Craft\craft()->templates->includeJsResource("js/profile.js");
            // line 20
            \Craft\craft()->templates->includeCssResource("lib/imgareaselect/imgareaselect-animated.css");
            // line 21
            \Craft\craft()->templates->includeCssResource("css/profile.css");
            // line 24
            ob_start();
            // line 25
            echo "\t\t";
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            $this->env->loadTemplate("users/_userphoto")->display(array("account" => $_account_));
            // line 26
            echo "\t";
            $context["photoInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 29
        ob_start();
        // line 30
        echo "
\t";
        // line 31
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (((!$this->getAttribute($_currentUser_, "can", array(0 => "registerUsers"), "method")) || ($_CraftEdition_ != $_CraftPro_))) {
            // line 32
            echo "\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
\t";
        } else {
            // line 34
            echo "\t\t<div class=\"btngroup submit\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"users/{id}\">";
            // line 39
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"users/new\">";
            // line 40
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 45
        echo "
";
        $context["saveUserButtons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["requireEmailVerification"] = $this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "systemSettings"), "users"), "requireEmailVerification");
        // line 50
        ob_start();
        // line 51
        echo "\t";
        if (isset($context["isNewAccount"])) { $_isNewAccount_ = $context["isNewAccount"]; } else { $_isNewAccount_ = null; }
        if ((!$_isNewAccount_)) {
            // line 52
            echo "<input type=\"hidden\" name=\"userId\" value=\"";
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_account_, "id"), "html", null, true);
            echo "\">";
        }
        $context["hiddenInputs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 57
    public function block_main($context, array $blocks = array())
    {
        // line 58
        echo "\t<div class=\"grid\">
\t\t<div class=\"item\" data-position=\"left\">
\t\t\t<form id=\"userform\" class=\"pane\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"users/saveUser\">
\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
        // line 62
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        echo (((($_CraftEdition_ == $_CraftPro_) && $this->getAttribute($_currentUser_, "can", array(0 => "editUsers"), "method"))) ? ("users") : ("dashboard"));
        echo "\">
\t\t\t\t";
        // line 63
        if (isset($context["hiddenInputs"])) { $_hiddenInputs_ = $context["hiddenInputs"]; } else { $_hiddenInputs_ = null; }
        echo twig_escape_filter($this->env, $_hiddenInputs_, "html", null, true);
        echo "

\t\t\t\t";
        // line 65
        $this->env->loadTemplate("_includes/tabs")->display($context);
        // line 66
        echo "
\t\t\t\t<div id=\"account\">
\t\t\t\t\t";
        // line 68
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_craft_, "config"), "useEmailAsUsername"))) {
            // line 69
            echo "\t\t\t\t\t\t";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            if (isset($context["isNewAccount"])) { $_isNewAccount_ = $context["isNewAccount"]; } else { $_isNewAccount_ = null; }
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            echo $_forms_->gettextField(array("first" => true, "label" => \Craft\Craft::t("Username"), "id" => "username", "name" => "username", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "username")) : (null)), "autofocus" => true, "required" => ((($_isNewAccount_ || ($this->getAttribute($_currentUser_, "admin") || $this->getAttribute($_account_, "isCurrent")))) ? (true) : (false)), "disabled" => ((($_isNewAccount_ || ($this->getAttribute($_currentUser_, "admin") || $this->getAttribute($_account_, "isCurrent")))) ? (false) : (true)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "getErrors", array(0 => "username"), "method")) : (null))));
            // line 79
            echo "
\t\t\t\t\t";
        }
        // line 81
        echo "
\t\t\t\t\t<div class=\"grid\" data-cols=\"2\" data-mode=\"pct\">
\t\t\t\t\t\t<div class=\"item\" data-colspan=\"1\">
\t\t\t\t\t\t\t";
        // line 84
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("First Name"), "id" => "firstName", "name" => "firstName", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "firstName")) : (null)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "getErrors", array(0 => "firstName"), "method")) : (null))));
        // line 90
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\" data-colspan=\"1\">
\t\t\t\t\t\t\t";
        // line 93
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Last Name"), "id" => "lastName", "name" => "lastName", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "lastName")) : (null)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "getErrors", array(0 => "lastName"), "method")) : (null))));
        // line 99
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 103
        if (isset($context["isNewAccount"])) { $_isNewAccount_ = $context["isNewAccount"]; } else { $_isNewAccount_ = null; }
        if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if ($_isNewAccount_) {
            // line 104
            echo "
\t\t\t\t\t\t";
            // line 105
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["requireEmailVerification"])) { $_requireEmailVerification_ = $context["requireEmailVerification"]; } else { $_requireEmailVerification_ = null; }
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Email"), "instructions" => ((($_requireEmailVerification_ && (!$this->getAttribute($_currentUser_, "admin")))) ? (\Craft\Craft::t("A verification email will be sent automatically.")) : ("")), "id" => "email", "name" => "email", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "email")) : (null)), "required" => true, "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "getErrors", array(0 => "email"), "method")) : (null))));
            // line 113
            echo "

\t\t\t\t\t\t";
            // line 115
            if (isset($context["requireEmailVerification"])) { $_requireEmailVerification_ = $context["requireEmailVerification"]; } else { $_requireEmailVerification_ = null; }
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (($_requireEmailVerification_ && $this->getAttribute($_currentUser_, "admin"))) {
                // line 116
                echo "\t\t\t\t\t\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Send a verification email?"), "name" => "verificationRequired", "checked" => true));
                // line 120
                echo "
\t\t\t\t\t\t";
            }
            // line 122
            echo "
\t\t\t\t\t";
        } elseif (($this->getAttribute($_account_, "isCurrent") || $this->getAttribute($_currentUser_, "admin"))) {
            // line 124
            echo "
\t\t\t\t\t\t";
            // line 125
            ob_start();
            // line 126
            echo "\t\t\t\t\t\t\t<table class=\"fullwidth inputs\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 129
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            echo $_forms_->gettext(array("id" => "email", "name" => "email", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute($_account_, "email")) : (null)), "required" => true, "disabled" => true));
            // line 135
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t\t\t\t<div id=\"emailLockBtn\" class=\"btn lock\" data-icon=\"secure\" title=\"";
            // line 138
            echo twig_escape_filter($this->env, \Craft\Craft::t("Click to change the email address."), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t";
            // line 143
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            echo $_forms_->geterrorList($this->getAttribute($_account_, "getErrors", array(0 => "email"), "method"));
            echo "
\t\t\t\t\t\t";
            $context["emailInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 145
            echo "
\t\t\t\t\t\t";
            // line 146
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["requireEmailVerification"])) { $_requireEmailVerification_ = $context["requireEmailVerification"]; } else { $_requireEmailVerification_ = null; }
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (isset($context["emailInput"])) { $_emailInput_ = $context["emailInput"]; } else { $_emailInput_ = null; }
            echo $_forms_->getfield(array("label" => \Craft\Craft::t("Email"), "instructions" => ((($_requireEmailVerification_ && (!$this->getAttribute($_currentUser_, "admin")))) ? (\Craft\Craft::t("New email addresses must be verified before taking effect.")) : ("")), "id" => "email"), $_emailInput_);
            // line 150
            echo "

\t\t\t\t\t\t";
            // line 152
            ob_start();
            // line 153
            echo "\t\t\t\t\t\t\t<table class=\"fullwidth inputs\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 156
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            echo $_forms_->getpassword(array("id" => "newPassword", "name" => "newPassword", "disabled" => true));
            // line 160
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t\t\t\t<div id=\"newPasswordLockBtn\" class=\"btn lock\" data-icon=\"secure\" title=\"";
            // line 163
            echo twig_escape_filter($this->env, \Craft\Craft::t("Click to set a new password."), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t";
            // line 168
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            echo $_forms_->geterrorList($this->getAttribute($_account_, "getErrors", array(0 => "newPassword"), "method"));
            echo "
\t\t\t\t\t\t";
            $context["newPasswordInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 170
            echo "
\t\t\t\t\t\t";
            // line 171
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["newPasswordInput"])) { $_newPasswordInput_ = $context["newPasswordInput"]; } else { $_newPasswordInput_ = null; }
            echo $_forms_->getfield(array("label" => \Craft\Craft::t("New Password"), "id" => "newPassword"), $_newPasswordInput_);
            // line 174
            echo "

\t\t\t\t\t\t";
            // line 176
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if ($this->getAttribute($_currentUser_, "admin")) {
                // line 177
                echo "\t\t\t\t\t\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                echo $_forms_->getcheckboxField(array("label" => \Craft\Craft::t("Require a password reset on next login"), "name" => "passwordResetRequired", "checked" => $this->getAttribute($_account_, "passwordResetRequired")));
                // line 181
                echo "
\t\t\t\t\t\t";
            }
            // line 183
            echo "
\t\t\t\t\t";
        }
        // line 185
        echo "
\t\t\t\t\t";
        // line 186
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($_craft_, "isLocalized", array(), "method")) {
            // line 187
            echo "\t\t\t\t\t\t";
            ob_start();
            // line 188
            echo "\t\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t\t<select id=\"preferredLocale\" name=\"preferredLocale\">
\t\t\t\t\t\t\t\t\t";
            // line 190
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context["allSiteLocales"] = $this->getAttribute($this->getAttribute($_craft_, "i18n"), "getSiteLocales");
            // line 191
            echo "\t\t\t\t\t\t\t\t\t";
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["allSiteLocales"])) { $_allSiteLocales_ = $context["allSiteLocales"]; } else { $_allSiteLocales_ = null; }
            $context["userLocale"] = (((array_key_exists("account", $context) && $this->getAttribute($_account_, "preferredLocale"))) ? ($this->getAttribute($_account_, "preferredLocale")) : ((((array_key_exists("account", $context) && $this->getAttribute($_account_, "isCurrent"))) ? ($this->getAttribute($_craft_, "locale")) : ($this->getAttribute($_allSiteLocales_, 0, array(), "array")))));
            // line 192
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 193
            if (isset($context["allSiteLocales"])) { $_allSiteLocales_ = $context["allSiteLocales"]; } else { $_allSiteLocales_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_allSiteLocales_);
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                echo "\" ";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                if (isset($context["userLocale"])) { $_userLocale_ = $context["userLocale"]; } else { $_userLocale_ = null; }
                if (($this->getAttribute($_locale_, "id") == $_userLocale_)) {
                    echo "selected";
                }
                echo ">";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "getName", array(), "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            $context["localeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 199
            echo "
\t\t\t\t\t\t";
            // line 200
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["localeInput"])) { $_localeInput_ = $context["localeInput"]; } else { $_localeInput_ = null; }
            echo $_forms_->getfield(array("id" => "preferredLocale", "label" => \Craft\Craft::t("Preferred Locale")), $_localeInput_);
            // line 203
            echo "
\t\t\t\t\t";
        }
        // line 205
        echo "
\t\t\t\t\t";
        // line 206
        if (isset($context["saveUserButtons"])) { $_saveUserButtons_ = $context["saveUserButtons"]; } else { $_saveUserButtons_ = null; }
        echo twig_escape_filter($this->env, $_saveUserButtons_, "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t";
        // line 209
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (($_CraftEdition_ == $_CraftPro_)) {
            // line 210
            echo "\t\t\t\t\t<div id=\"profile\" class=\"hidden\">
\t\t\t\t\t\t";
            // line 211
            if (isset($context["isNewAccount"])) { $_isNewAccount_ = $context["isNewAccount"]; } else { $_isNewAccount_ = null; }
            if ((!$_isNewAccount_)) {
                // line 212
                echo "\t\t\t\t\t\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["photoInput"])) { $_photoInput_ = $context["photoInput"]; } else { $_photoInput_ = null; }
                echo $_forms_->getfield(array("label" => \Craft\Craft::t("Photo")), $_photoInput_);
                // line 214
                echo "

\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t";
            }
            // line 218
            echo "
\t\t\t\t\t\t";
            // line 219
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            $this->env->loadTemplate("_includes/fields")->display(array("fields" => $this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "fields"), "getLayoutByType", array(0 => "User"), "method"), "getFields", array(), "method"), "element" => $_account_));
            // line 223
            echo "
\t\t\t\t\t\t";
            // line 224
            if (isset($context["saveUserButtons"])) { $_saveUserButtons_ = $context["saveUserButtons"]; } else { $_saveUserButtons_ = null; }
            echo twig_escape_filter($this->env, $_saveUserButtons_, "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 227
        echo "
\t\t\t\t";
        // line 228
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if ((($_CraftEdition_ == $_CraftPro_) && $this->getAttribute($_currentUser_, "can", array(0 => "assignUserPermissions"), "method"))) {
            // line 229
            echo "\t\t\t\t\t<div id=\"perms\" class=\"hidden\">
\t\t\t\t\t\t<h2>";
            // line 230
            echo twig_escape_filter($this->env, \Craft\Craft::t("User Groups"), "html", null, true);
            echo "</h2>

\t\t\t\t\t\t";
            // line 232
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context["allGroups"] = $this->getAttribute($this->getAttribute($_craft_, "userGroups"), "getAllGroups", array(), "method");
            // line 233
            echo "\t\t\t\t\t\t";
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            $context["userGroups"] = $this->getAttribute($_account_, "getGroups", array(0 => "id"), "method");
            // line 234
            echo "
\t\t\t\t\t\t<input type=\"hidden\" name=\"groups\" value=\"\">

\t\t\t\t\t\t";
            // line 237
            if (isset($context["allGroups"])) { $_allGroups_ = $context["allGroups"]; } else { $_allGroups_ = null; }
            if ($_allGroups_) {
                // line 238
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 239
                if (isset($context["allGroups"])) { $_allGroups_ = $context["allGroups"]; } else { $_allGroups_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_allGroups_);
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 240
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
                    // line 241
                    if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    if (isset($context["userGroups"])) { $_userGroups_ = $context["userGroups"]; } else { $_userGroups_ = null; }
                    echo $_forms_->getcheckbox(array("label" => $this->getAttribute($_group_, "name"), "name" => "groups[]", "value" => $this->getAttribute($_group_, "id"), "checked" => twig_in_filter($this->getAttribute($_group_, "id"), twig_get_array_keys_filter($_userGroups_))));
                    // line 246
                    echo "
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t";
            } else {
                // line 252
                echo "\t\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("No user groups exist yet."), "html", null, true);
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 254
            echo "
\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<h2>";
            // line 257
            echo twig_escape_filter($this->env, \Craft\Craft::t("Permissions"), "html", null, true);
            echo "</h2>

\t\t\t\t\t\t";
            // line 259
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if ($this->getAttribute($_currentUser_, "admin")) {
                // line 260
                echo "\t\t\t\t\t\t\t";
                if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                echo $_forms_->getcheckboxField(array("label" => (("<strong>" . \Craft\Craft::t("Admin")) . "</strong>"), "name" => "admin", "checked" => $this->getAttribute($_account_, "admin"), "reverseToggle" => "permissions"));
                // line 265
                echo "
\t\t\t\t\t\t";
            }
            // line 267
            echo "
\t\t\t\t\t\t<input type=\"hidden\" name=\"permissions\" value=\"\">

\t\t\t\t\t\t<div id=\"permissions\" class=\"field";
            // line 270
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            if ($this->getAttribute($_account_, "admin")) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t\t\t";
            // line 271
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $this->env->loadTemplate("_includes/permissions")->display(array("userOrGroup" => (($this->getAttribute($_account_, "admin")) ? (null) : ($_account_)), "groupPermissions" => $this->getAttribute($this->getAttribute($_craft_, "userPermissions"), "getGroupPermissionsByUserId", array(0 => $this->getAttribute($_account_, "id")), "method")));
            // line 275
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 277
            if (isset($context["saveUserButtons"])) { $_saveUserButtons_ = $context["saveUserButtons"]; } else { $_saveUserButtons_ = null; }
            echo twig_escape_filter($this->env, $_saveUserButtons_, "html", null, true);
            echo "

\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 281
        echo "\t\t\t</form>
\t\t</div><!--/item-->

\t\t";
        // line 284
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (isset($context["isNewAccount"])) { $_isNewAccount_ = $context["isNewAccount"]; } else { $_isNewAccount_ = null; }
        if ((($_CraftEdition_ >= $_CraftClient_) && (!$_isNewAccount_))) {
            // line 285
            echo "\t\t\t<div class=\"item\" data-position=\"right\" data-colspan=\"1\">
\t\t\t\t<form class=\"pane\" method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t";
            // line 287
            if (isset($context["hiddenInputs"])) { $_hiddenInputs_ = $context["hiddenInputs"]; } else { $_hiddenInputs_ = null; }
            echo twig_escape_filter($this->env, $_hiddenInputs_, "html", null, true);
            echo "

\t\t\t\t\t<h5 class=\"first\">";
            // line 289
            echo twig_escape_filter($this->env, \Craft\Craft::t("Account Status"), "html", null, true);
            echo "</h5>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"status ";
            // line 291
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_account_, "status"), "html", null, true);
            echo "\"></span>
\t\t\t\t\t\t";
            // line 292
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            if (($this->getAttribute($_account_, "status") == "pending")) {
                // line 293
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Unverified"), "html", null, true);
                echo " 
\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                // line 294
                echo twig_escape_filter($this->env, \Craft\Craft::t("Resend verification email"), "html", null, true);
                echo "\" data-action=\"users/sendActivationEmail\">
\t\t\t\t\t\t\t";
                // line 295
                if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
                if ($this->getAttribute($_currentUser_, "admin")) {
                    // line 296
                    echo "\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Activate user"), "html", null, true);
                    echo "\" data-action=\"users/activateUser\">
\t\t\t\t\t\t\t";
                }
                // line 298
                echo "\t\t\t\t\t\t";
            } elseif (($this->getAttribute($_account_, "status") == "locked")) {
                // line 299
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Locked"), "html", null, true);
                echo " 
\t\t\t\t\t\t\t";
                // line 300
                if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
                if ($this->getAttribute($_currentUser_, "can", array(0 => "administrateUsers"), "method")) {
                    echo "<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Unlock"), "html", null, true);
                    echo "\" data-action=\"users/unlockUser\">";
                }
                // line 301
                echo "\t\t\t\t\t\t";
            } elseif (($this->getAttribute($_account_, "status") == "suspended")) {
                // line 302
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Suspended"), "html", null, true);
                echo " 
\t\t\t\t\t\t\t";
                // line 303
                if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
                if ($this->getAttribute($_currentUser_, "can", array(0 => "administrateUsers"), "method")) {
                    echo "<input type=\"submit\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Unsuspend"), "html", null, true);
                    echo "\" data-action=\"users/unsuspendUser\">";
                }
                // line 304
                echo "\t\t\t\t\t\t";
            } else {
                // line 305
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Active"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 307
            echo "\t\t\t\t\t</p>

\t\t\t\t\t";
            // line 309
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if ((($this->getAttribute($_account_, "status") == "locked") && $this->getAttribute($this->getAttribute($_craft_, "config"), "cooldownDuration"))) {
                // line 310
                echo "\t\t\t\t\t\t<h5>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Cooldown Time Remaining"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 311
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_account_, "remainingCooldownTime"), "humanDuration"), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            }
            // line 313
            echo "
\t\t\t\t\t<h5>";
            // line 314
            echo twig_escape_filter($this->env, \Craft\Craft::t("Registration Date"), "html", null, true);
            echo "</h5>
\t\t\t\t\t<p>";
            // line 315
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_account_, "dateCreated"), "nice"), "html", null, true);
            echo "</p>

\t\t\t\t\t";
            // line 317
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            if (($this->getAttribute($_account_, "status") != "pending")) {
                // line 318
                echo "\t\t\t\t\t\t<h5>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Last Login Date"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 319
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                if ($this->getAttribute($_account_, "lastLoginDate")) {
                    if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_account_, "lastLoginDate"), "nice"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Never"), "html", null, true);
                }
                echo "</p>

\t\t\t\t\t\t<h5>";
                // line 321
                echo twig_escape_filter($this->env, \Craft\Craft::t("Last Invalid Login Date"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 322
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                if ($this->getAttribute($_account_, "lastInvalidLoginDate")) {
                    if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_account_, "lastInvalidLoginDate"), "nice"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Never"), "html", null, true);
                }
                echo "</p>

\t\t\t\t\t\t<h5>";
                // line 324
                echo twig_escape_filter($this->env, \Craft\Craft::t("Last Password Change Date"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 325
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                if ($this->getAttribute($_account_, "lastPasswordChangeDate")) {
                    if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_account_, "lastPasswordChangeDate"), "nice"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Never"), "html", null, true);
                }
                echo "</p>

\t\t\t\t\t\t<h5>";
                // line 327
                echo twig_escape_filter($this->env, \Craft\Craft::t("Invalid Login Count"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 328
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                if ($this->getAttribute($_account_, "invalidLoginCount")) {
                    if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_account_, "invalidLoginCount"), "html", null, true);
                } else {
                    echo "0";
                }
                echo "</p>
\t\t\t\t\t";
            }
            // line 330
            echo "\t\t\t\t</form>

\t\t\t\t";
            // line 332
            if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
            if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
            if (((!$this->getAttribute($_account_, "isCurrent")) && ($this->getAttribute($_currentUser_, "can", array(0 => "deleteUsers"), "method") || $this->getAttribute($_currentUser_, "can", array(0 => "administrateUsers"), "method")))) {
                // line 333
                echo "\t\t\t\t\t<form class=\"pane\" method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t\t";
                // line 334
                if (isset($context["hiddenInputs"])) { $_hiddenInputs_ = $context["hiddenInputs"]; } else { $_hiddenInputs_ = null; }
                echo twig_escape_filter($this->env, $_hiddenInputs_, "html", null, true);
                echo "

\t\t\t\t\t\t";
                // line 336
                if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                if (($this->getAttribute($_currentUser_, "can", array(0 => "administrateUsers"), "method") && ($this->getAttribute($_account_, "status") != "suspended"))) {
                    // line 337
                    echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Suspend"), "html", null, true);
                    echo "\" data-action=\"users/suspendUser\">
\t\t\t\t\t\t";
                }
                // line 339
                echo "
\t\t\t\t\t\t";
                // line 340
                if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
                if ($this->getAttribute($_currentUser_, "can", array(0 => "deleteUsers"), "method")) {
                    // line 341
                    echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                    echo "\" data-action=\"users/deleteUser\"
\t\t\t\t\t\t\t\t\t   data-confirm=\"";
                    // line 342
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this account and all associated content?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t   data-redirect=\"";
                    // line 343
                    if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
                    if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
                    echo ((($_CraftEdition_ == $_CraftPro_)) ? ("users") : ("dashboard"));
                    echo "\">
\t\t\t\t\t\t";
                }
                // line 345
                echo "
\t\t\t\t\t\t";
                // line 346
                if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
                if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
                if (($this->getAttribute($_currentUser_, "admin") && (!$this->getAttribute($_account_, "isCurrent")))) {
                    // line 347
                    echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Login as user"), "html", null, true);
                    echo "\" data-action=\"users/impersonate\">
\t\t\t\t\t\t";
                }
                // line 349
                echo "\t\t\t\t\t</form>
\t\t\t\t";
            }
            // line 351
            echo "\t\t\t</div><!--/item-->
\t\t";
        }
        // line 353
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "users/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  814 => 353,  810 => 351,  806 => 349,  800 => 347,  796 => 346,  793 => 345,  786 => 343,  782 => 342,  777 => 341,  774 => 340,  771 => 339,  765 => 337,  761 => 336,  755 => 334,  752 => 333,  748 => 332,  744 => 330,  733 => 328,  729 => 327,  718 => 325,  714 => 324,  703 => 322,  699 => 321,  688 => 319,  683 => 318,  680 => 317,  674 => 315,  670 => 314,  667 => 313,  661 => 311,  656 => 310,  652 => 309,  648 => 307,  642 => 305,  639 => 304,  632 => 303,  627 => 302,  624 => 301,  617 => 300,  612 => 299,  609 => 298,  603 => 296,  600 => 295,  596 => 294,  591 => 293,  588 => 292,  583 => 291,  578 => 289,  572 => 287,  568 => 285,  563 => 284,  558 => 281,  550 => 277,  546 => 275,  542 => 271,  535 => 270,  530 => 267,  526 => 265,  521 => 260,  518 => 259,  513 => 257,  508 => 254,  502 => 252,  497 => 249,  489 => 246,  484 => 241,  481 => 240,  476 => 239,  473 => 238,  470 => 237,  465 => 234,  461 => 233,  458 => 232,  453 => 230,  450 => 229,  445 => 228,  442 => 227,  435 => 224,  432 => 223,  428 => 219,  425 => 218,  419 => 214,  414 => 212,  411 => 211,  408 => 210,  404 => 209,  397 => 206,  394 => 205,  390 => 203,  386 => 200,  383 => 199,  378 => 196,  359 => 194,  354 => 193,  351 => 192,  345 => 191,  342 => 190,  338 => 188,  335 => 187,  332 => 186,  329 => 185,  325 => 183,  321 => 181,  316 => 177,  313 => 176,  309 => 174,  305 => 171,  302 => 170,  295 => 168,  287 => 163,  282 => 160,  279 => 156,  274 => 153,  272 => 152,  268 => 150,  262 => 146,  259 => 145,  252 => 143,  244 => 138,  239 => 135,  235 => 129,  230 => 126,  228 => 125,  225 => 124,  221 => 122,  217 => 120,  213 => 116,  209 => 115,  205 => 113,  199 => 105,  196 => 104,  191 => 103,  185 => 99,  181 => 93,  176 => 90,  172 => 84,  167 => 81,  163 => 79,  156 => 69,  153 => 68,  149 => 66,  147 => 65,  141 => 63,  134 => 62,  128 => 58,  125 => 57,  115 => 52,  111 => 51,  109 => 50,  106 => 48,  102 => 45,  94 => 40,  90 => 39,  83 => 35,  80 => 34,  74 => 32,  69 => 31,  66 => 30,  64 => 29,  60 => 26,  56 => 25,  54 => 24,  52 => 21,  50 => 20,  48 => 19,  46 => 18,  44 => 17,  42 => 16,  38 => 12,  34 => 11,  32 => 9,  29 => 4,  25 => 3,);
    }
}
