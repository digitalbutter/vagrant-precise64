<?php

/* login */
class __TwigTemplate_df30384c9c83a1bc9ce82178580369ffd47247c2b06cab624f53523efa9485bc extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        $context["title"] = \Craft\Craft::t("Login");
        // line 4
        \Craft\craft()->templates->includeCssResource("css/login.css");
        // line 5
        \Craft\craft()->templates->includeJsResource("js/login.js");
        // line 6
        \Craft\craft()->templates->includeTranslations(
        	"Reset Password",
        	"Check your email for instructions to reset your password."
        );
        // line 11
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["username"] = (($this->getAttribute($this->getAttribute($_craft_, "config"), "rememberUsernameDuration")) ? ($this->getAttribute($this->getAttribute($_craft_, "session"), "rememberedUsername")) : (""));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <script type=\"text/javascript\">
\t\tvar cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
\t\tdocument.cookie = cookieTest;
\t\tvar cookiesEnabled = document.cookie.search(cookieTest) != -1;
\t\tif (cookiesEnabled)
\t\t{
\t\t\tdocument.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

\t\t\tdocument.write(
\t\t\t\t'<form id=\"login-form\" method=\"post\" accept-charset=\"UTF-8\" ";
        // line 23
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ((($_CraftEdition_ >= $_CraftClient_) && $this->getAttribute($this->getAttribute($_craft_, "rebrand"), "isLogoUploaded"))) {
            // line 24
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context["logo"] = $this->getAttribute($this->getAttribute($_craft_, "rebrand"), "logo");
            // line 25
            if (isset($context["logo"])) { $_logo_ = $context["logo"]; } else { $_logo_ = null; }
            $context["padding"] = ($this->getAttribute($_logo_, "height") + 30);
            // line 26
            echo "\t\t\t\t\t\tstyle=\"background-image: url(";
            if (isset($context["logo"])) { $_logo_ = $context["logo"]; } else { $_logo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_logo_, "url"), "html", null, true);
            echo "); background-size: ";
            if (isset($context["logo"])) { $_logo_ = $context["logo"]; } else { $_logo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_logo_, "width"), "html", null, true);
            echo "px ";
            if (isset($context["logo"])) { $_logo_ = $context["logo"]; } else { $_logo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_logo_, "height"), "html", null, true);
            echo "px; padding-top: ";
            if (isset($context["padding"])) { $_padding_ = $context["padding"]; } else { $_padding_ = null; }
            echo twig_escape_filter($this->env, $_padding_, "html", null, true);
            echo "px; margin-top: -";
            if (isset($context["padding"])) { $_padding_ = $context["padding"]; } else { $_padding_ = null; }
            echo twig_escape_filter($this->env, round(((156 + $_padding_) / 2)), "html", null, true);
            echo "px\"";
        }
        // line 27
        echo ">' +
\t\t\t\t\t'";
        // line 28
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["placeHolderText"] = (($this->getAttribute($this->getAttribute($_craft_, "config"), "useEmailAsUsername")) ? (\Craft\Craft::t("Email")) : (\Craft\Craft::t("Username or Email")));
        echo "' +
\t\t\t\t\t'";
        // line 29
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["placeHolderText"])) { $_placeHolderText_ = $context["placeHolderText"]; } else { $_placeHolderText_ = null; }
        if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_forms_->gettextField(array("id" => "loginName", "name" => "username", "placeholder" => $_placeHolderText_, "value" => $_username_)), "js"), "html", null, true);
        echo "' +

\t\t\t\t\t'<div id=\"login-fields\" class=\"nested-fields\">' +
\t\t\t\t\t\t'";
        // line 32
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_forms_->getpasswordField(array("id" => "password", "name" => "password", "placeholder" => \Craft\Craft::t("Password"))), "js"), "html", null, true);
        echo "' +
\t\t\t\t\t\t'<a id=\"forgot-password\">";
        // line 33
        echo twig_escape_filter($this->env, \Craft\Craft::t("Forget your password?"), "html", null, true);
        echo "</a>' +
\t\t\t\t\t\t";
        // line 34
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($this->getAttribute($_craft_, "config"), "rememberedUserSessionDuration")) {
            // line 35
            echo "\t\t\t\t\t\t\t'";
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $_forms_->getcheckboxField(array("id" => "rememberMe", "label" => \Craft\Craft::t("Keep me logged in"))), "js"), "html", null, true);
            echo "' +
\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t'</div>' +

\t\t\t\t\t'<div class=\"buttons\">' +
\t\t\t\t\t\t'<div id=\"ssl-icon\" class=\"disabled\"><div class=\"";
        // line 40
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        echo (($this->getAttribute($this->getAttribute($_craft_, "request"), "isSecure")) ? ("secure") : ("insecure"));
        echo " icon\"></div></div>' +
\t\t\t\t\t\t'<input id=\"submit\" class=\"btn submit disabled\" type=\"submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, \Craft\Craft::t("Login"), "html", null, true);
        echo "\">' +
\t\t\t\t\t\t'<div id=\"spinner\" class=\"spinner hidden\"></div>' +
\t\t\t\t\t'</div>' +
\t\t\t\t'</form>'
\t\t\t);

\t\t\t";
        // line 47
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ((!$this->getAttribute($this->getAttribute($_craft_, "request"), "isMobileBrowser", array(0 => true), "method"))) {
            // line 48
            echo "\t\t\t\tdocument.getElementById(\"";
            if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
            echo (($_username_) ? ("password") : ("loginName"));
            echo "\").focus();
\t\t\t";
        }
        // line 50
        echo "\t\t\twindow.returnUrl = '";
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_craft_, "session"), "returnUrl"), "js"), "html", null, true);
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.write(
\t\t\t\t'<div class=\"no-access\">' +
\t\t\t\t\t'<div class=\"pane\">' +
\t\t\t\t\t\t'<div class=\"pane-body\">' +
\t\t\t\t\t\t\t'<div class=\"notice\">' +
\t\t\t\t\t\t\t\t'<div class=\"icon\"></div>' +
\t\t\t\t\t\t\t\t'<p>";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("Cookies must be enabled to access the Craft control panel."), "html", null, true);
        echo "<br>' +
\t\t\t\t\t\t\t\t\t'<a class=\"go\" href=\"\">";
        // line 61
        echo twig_escape_filter($this->env, \Craft\Craft::t("See how"), "html", null, true);
        echo "</a>' +
\t\t\t\t\t\t\t\t'</p>' +
\t\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t'</div>' +
\t\t\t\t'</div>'
\t\t\t);
\t\t}
\t</script>
";
    }

    public function getTemplateName()
    {
        return "login";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  167 => 60,  152 => 50,  145 => 48,  142 => 47,  133 => 41,  128 => 40,  123 => 37,  116 => 35,  113 => 34,  109 => 33,  104 => 32,  95 => 29,  90 => 28,  87 => 27,  69 => 26,  66 => 25,  63 => 24,  58 => 23,  47 => 14,  44 => 13,  38 => 11,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }
}
