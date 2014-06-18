<?php

/* _layouts/cp */
class __TwigTemplate_365067003b8d2747d7f31e318dcf6e79cffdb7f2d4ddc30d8ea9399432616be4 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        \Craft\craft()->templates->includeCssResource("css/cp.css", true);
        // line 4
        \Craft\craft()->templates->includeTranslations(
        	"Pending",
        	"Failed",
        	"Failed task",
        	"Options",
        	"Try again",
        	"Show sidebar",
        	"Hide sidebar",
        	"1 update available",
        	"{num} updates available",
        	"More",
        	"Attempted to get the height of a modal whose container has not been set.",
        	"Attempted to get the width of a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Are you sure you want to transfer your license to this domain?",
        	"License transferred.",
        	"An unknown error occurred.",
        	"Cancel",
        	"Close",
        	"Create",
        	"Done",
        	"Delete",
        	"Handle",
        	"Name",
        	"Move",
        	"New Child",
        	"Remove",
        	"Reorder",
        	"Save",
        	"Settings",
        	"Select",
        	"New order saved.",
        	"Couldn’t save new order.",
        	"Are you sure you want to delete “{name}”?",
        	"“{name}” deleted.",
        	"Couldn’t delete “{name}”.",
        	"Show/hide children",
        	"New child",
        	"Upload failed for {filename}",
        	"View file",
        	"Edit properties",
        	"Rename file",
        	"Copy reference tag",
        	"Delete file",
        	"{ctrl}C to copy.",
        	"Are you sure you want to delete these {number} files?",
        	"New subfolder",
        	"Rename folder",
        	"Delete folder",
        	"Enter the name of the folder",
        	"Really delete folder “{folder}”?",
        	"Upload files",
        	"Select Transform",
        	"Please enter your current password.",
        	"Continue",
        	"Cancel",
        	"Any changes will be lost if you leave this page."
        );
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "\t";
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (($this->getAttribute($_currentUser_, "admin") && $this->getAttribute($this->getAttribute($_craft_, "config"), "devMode"))) {
            // line 67
            echo "\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t";
        }
        // line 69
        echo "
\t";
        // line 70
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($this->getAttribute($_craft_, "cp"), "areAlertsCached", array(), "method")) {
            // line 71
            echo "\t\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context["alerts"] = $this->getAttribute($this->getAttribute($_craft_, "cp"), "getAlerts", array(), "method");
            // line 72
            echo "\t\t";
            if (isset($context["alerts"])) { $_alerts_ = $context["alerts"]; } else { $_alerts_ = null; }
            if ($_alerts_) {
                // line 73
                echo "\t\t\t<ul id=\"alerts\">
\t\t\t\t";
                // line 74
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "cp"), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 75
                    echo "\t\t\t\t\t<li>";
                    if (isset($context["alert"])) { $_alert_ = $context["alert"]; } else { $_alert_ = null; }
                    echo $_alert_;
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "\t\t\t</ul>
\t\t";
            }
            // line 79
            echo "\t";
        } else {
            // line 80
            echo "\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.fetchAlerts();");
            // line 81
            echo "\t";
        }
        // line 82
        echo "
\t<header id=\"header\">
\t\t<div class=\"container\">
\t\t\t<ul id=\"header-actions\">
\t\t\t\t";
        // line 86
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["task"] = $this->getAttribute($this->getAttribute($_craft_, "tasks"), "getRunningTask", array(), "method");
        // line 87
        echo "\t\t\t\t";
        if (isset($context["task"])) { $_task_ = $context["task"]; } else { $_task_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($_task_) {
            // line 88
            echo "\t\t\t\t\t";
            if (isset($context["task"])) { $_task_ = $context["task"]; } else { $_task_ = null; }
            \Craft\craft()->templates->includeJs((("Craft.cp.setRunningTaskInfo(" . twig_jsonencode_filter($this->getAttribute($_task_, "getInfo", array(), "method"))) . ");"));
            // line 89
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.trackTaskProgress();");
            // line 90
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($_craft_, "tasks"), "areTasksPending", array(), "method")) {
            // line 91
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.runPendingTasks();");
            // line 92
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($_craft_, "tasks"), "haveTasksFailed", array(), "method")) {
            // line 93
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.setRunningTaskInfo({ status: \"error\" });");
            // line 94
            echo "\t\t\t\t";
        }
        // line 95
        echo "
\t\t\t\t";
        // line 96
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if ($this->getAttribute($_currentUser_, "can", array(0 => "performUpdates"), "method")) {
            // line 97
            echo "\t\t\t\t\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if ($this->getAttribute($this->getAttribute($_craft_, "app"), "isUpdateInfoCached", array(), "method")) {
                // line 98
                echo "\t\t\t\t\t\t";
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute($_craft_, "app"), "getTotalAvailableUpdates", array(), "method");
                // line 99
                echo "\t\t\t\t\t\t";
                if (isset($context["totalUpdates"])) { $_totalUpdates_ = $context["totalUpdates"]; } else { $_totalUpdates_ = null; }
                if ($_totalUpdates_) {
                    // line 100
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["totalUpdates"])) { $_totalUpdates_ = $context["totalUpdates"]; } else { $_totalUpdates_ = null; }
                    if (($_totalUpdates_ == 1)) {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 102
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["totalUpdates"])) { $_totalUpdates_ = $context["totalUpdates"]; } else { $_totalUpdates_ = null; }
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => $_totalUpdates_));
                        // line 104
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t\t<li class=\"updates";
                    if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                    if ($this->getAttribute($this->getAttribute($_craft_, "app"), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<a data-icon=\"newstamp\" href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["updateText"])) { $_updateText_ = $context["updateText"]; } else { $_updateText_ = null; }
                    echo twig_escape_filter($this->env, $_updateText_, "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 107
                    if (isset($context["totalUpdates"])) { $_totalUpdates_ = $context["totalUpdates"]; } else { $_totalUpdates_ = null; }
                    echo twig_escape_filter($this->env, $_totalUpdates_, "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t";
            } else {
                // line 112
                echo "\t\t\t\t\t\t";
                \Craft\craft()->templates->includeJs("Craft.cp.checkForUpdates();");
                // line 113
                echo "\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t";
        }
        // line 115
        echo "
\t\t\t\t";
        // line 116
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if ($this->getAttribute($_currentUser_, "admin")) {
            // line 117
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settings\" data-icon=\"settings\" href=\"";
            // line 118
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settingsmenu menubtn\" title=\"";
            // line 121
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t<div id=\"settingsmenu\" class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t\t";
            // line 123
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "cp"), "settings", array(), "method"));
            foreach ($context['_seq'] as $context["category"] => $context["items"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t<h6>";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $_category_, "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t\t";
                // line 126
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_items_);
                foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    if (isset($context["handle"])) { $_handle_ = $context["handle"]; } else { $_handle_ = null; }
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . $_handle_)), "html", null, true);
                    echo "\" data-icon=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "icon"), "html", null, true);
                    echo "\">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "label"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 134
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a data-icon=\"user\" class=\"myaccount menubtn\" title=\"";
        // line 136
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 139
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 140
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if ((($_CraftEdition_ == $_CraftClient_) && $this->getAttribute($_currentUser_, "admin"))) {
            // line 141
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("clientaccount"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Client’s Account"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        if (isset($context["logoutUrl"])) { $_logoutUrl_ = $context["logoutUrl"]; } else { $_logoutUrl_ = null; }
        echo twig_escape_filter($this->env, $_logoutUrl_, "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sign out"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<h2><a href=\"";
        // line 149
        if (isset($context["siteUrl"])) { $_siteUrl_ = $context["siteUrl"]; } else { $_siteUrl_ = null; }
        echo twig_escape_filter($this->env, $_siteUrl_, "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["siteName"])) { $_siteName_ = $context["siteName"]; } else { $_siteName_ = null; }
        echo twig_escape_filter($this->env, \Craft\Craft::t($_siteName_), "html", null, true);
        echo "</a></h2>

\t\t\t<nav>
\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t";
        // line 153
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "cp"), "nav", array(), "method"));
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 154
            echo "\t\t\t\t\t\t<li id=\"nav-";
            if (isset($context["handle"])) { $_handle_ = $context["handle"]; } else { $_handle_ = null; }
            echo twig_escape_filter($this->env, $_handle_, "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<a";
            // line 155
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "sel")) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "url"), "html", null, true);
            echo "\">";
            // line 156
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
            // line 157
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "badge", array(), "any", true, true) && $this->getAttribute($_item_, "badge"))) {
                // line 158
                echo "<span class=\"badge\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "badge"), "html", null, true);
                echo "</span>";
            }
            // line 160
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>

\t<div class=\"container\">
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 172
            echo "\t\t\t\t\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            $context["message"] = $this->getAttribute($this->getAttribute($_craft_, "session"), "getFlash", array(0 => $_type_), "method");
            // line 173
            echo "\t\t\t\t\t";
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            if ($_message_) {
                // line 174
                echo "\t\t\t\t\t\t<div class=\"notification ";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $_message_, "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t</div>
\t\t</div>

\t\t<header id=\"page-header\">
\t\t\t";
        // line 181
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 204
        echo "\t\t</header>

\t\t<main id=\"main\" role=\"main\">
\t\t\t";
        // line 207
        $this->displayBlock('main', $context, $blocks);
        // line 238
        echo "\t\t</main>

\t\t<div id=\"footer\">
\t\t\t<ul>
\t\t\t\t<li>Craft ";
        // line 242
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_craft_, "app"), "getEditionName", array(), "method"), "html", null, true);
        echo " ";
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_craft_, "app"), "getVersion", array(), "method"), "html", null, true);
        echo ".";
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_craft_, "app"), "getBuild", array(), "method"), "html", null, true);
        echo "</li>
\t\t\t\t<li>";
        // line 243
        echo twig_escape_filter($this->env, \Craft\Craft::t("Released on"), "html", null, true);
        echo " ";
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_craft_, "app"), "releaseDate"), "localeDate"), "html", null, true);
        echo "</li>
\t\t\t\t";
        // line 244
        if (isset($context["currentUser"])) { $_currentUser_ = $context["currentUser"]; } else { $_currentUser_ = null; }
        if ($this->getAttribute($_currentUser_, "can", array(0 => "performUpdates"), "method")) {
            // line 245
            echo "\t\t\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["totalUpdates"])) { $_totalUpdates_ = $context["totalUpdates"]; } else { $_totalUpdates_ = null; }
            if (isset($context["updateText"])) { $_updateText_ = $context["updateText"]; } else { $_updateText_ = null; }
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($_craft_, "app"), "isUpdateInfoCached", array(), "method") && $_totalUpdates_)) ? ($_updateText_) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 247
        echo "\t\t\t\t<li>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Copyright"), "html", null, true);
        echo " ";
        if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_now_, "year"), "html", null, true);
        echo " Pixel &amp; Tonic, Inc. ";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All rights reserved."), "html", null, true);
        echo "</li>
\t\t\t</ul>

\t\t\t";
        // line 250
        if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
        if (isset($context["CraftPersonal"])) { $_CraftPersonal_ = $context["CraftPersonal"]; } else { $_CraftPersonal_ = null; }
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (((($_CraftEdition_ == $_CraftPersonal_) || ($this->getAttribute($this->getAttribute($_craft_, "request"), "getPath") == "settings")) && $this->getAttribute($this->getAttribute($_craft_, "app"), "canUpgradeEdition", array(), "method"))) {
            // line 251
            echo "\t\t\t\t<p id=\"upgradepromo\"><a>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade Craft to take your site to the next level."), "html", null, true);
            echo " <span class=\"go\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Show me"), "html", null, true);
            echo "</span></a></p>
\t\t\t";
        }
        // line 253
        echo "\t\t</div>
\t</div>

\t";
        // line 256
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($this->getAttribute($_craft_, "app"), "hasWrongEdition", array(), "method")) {
            // line 257
            echo "\t\t<div id=\"wrongedition-modal\" class=\"modal fitted hidden\">
\t\t\t<div class=\"body\">
\t\t\t\t<p>";
            // line 259
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            echo twig_escape_filter($this->env, \Craft\Craft::t("You’re running Craft {edition} with a Craft {licensedEdition} license.", array("edition" => $this->getAttribute($this->getAttribute($_craft_, "app"), "getEditionName", array(), "method"), "licensedEdition" => $this->getAttribute($this->getAttribute($_craft_, "app"), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 260
            echo twig_escape_filter($this->env, \Craft\Craft::t("What would you like to do?"), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"btngroup\">
\t\t\t\t\t\t<div id=\"wrongedition-switchbtn\" class=\"btn\">";
            // line 263
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            echo twig_escape_filter($this->env, \Craft\Craft::t("Switch to Craft {edition}", array("edition" => $this->getAttribute($this->getAttribute($_craft_, "app"), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
            // line 264
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (($this->getAttribute($this->getAttribute($_craft_, "app"), "getEdition", array(), "method") > $this->getAttribute($this->getAttribute($_craft_, "app"), "getLicensedEdition", array(), "method"))) {
                // line 265
                echo "\t\t\t\t\t\t\t<div id=\"wrongedition-upgradebtn\" class=\"btn\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade your license"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 267
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 181
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 182
        echo "\t\t\t\t";
        if (isset($context["crumbs"])) { $_crumbs_ = $context["crumbs"]; } else { $_crumbs_ = null; }
        if ((array_key_exists("crumbs", $context) && $_crumbs_)) {
            // line 183
            echo "\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 185
            if (isset($context["crumbs"])) { $_crumbs_ = $context["crumbs"]; } else { $_crumbs_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_crumbs_);
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 186
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_crumb_, "url"), "html", null, true);
                echo "\">";
                if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_crumb_, "label"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 191
        echo "
\t\t\t\t";
        // line 192
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ((array_key_exists("title", $context) && $_title_)) {
            // line 193
            echo "\t\t\t\t\t<h1>";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo $_title_;
            echo "</h1>
\t\t\t\t";
        }
        // line 195
        echo "
\t\t\t\t";
        // line 196
        if (array_key_exists("extraPageHeaderHtml", $context)) {
            // line 197
            echo "\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t";
            // line 198
            if (isset($context["extraPageHeaderHtml"])) { $_extraPageHeaderHtml_ = $context["extraPageHeaderHtml"]; } else { $_extraPageHeaderHtml_ = null; }
            echo twig_escape_filter($this->env, $_extraPageHeaderHtml_, "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 201
        echo "
\t\t\t\t<div class=\"clear\"></div>
\t\t\t";
    }

    // line 207
    public function block_main($context, array $blocks = array())
    {
        // line 208
        echo "\t\t\t\t";
        if (isset($context["sidebar"])) { $_sidebar_ = $context["sidebar"]; } else { $_sidebar_ = null; }
        $context["sidebar"] = ((array_key_exists("sidebar", $context)) ? ($_sidebar_) : (trim($this->renderBlock("sidebar", $context, $blocks))));
        // line 209
        echo "\t\t\t\t";
        if (isset($context["sidebar"])) { $_sidebar_ = $context["sidebar"]; } else { $_sidebar_ = null; }
        $context["hasSidebar"] = (!twig_test_empty($_sidebar_));
        // line 210
        echo "\t\t\t\t";
        if (isset($context["docsUrl"])) { $_docsUrl_ = $context["docsUrl"]; } else { $_docsUrl_ = null; }
        $context["hasHelp"] = (array_key_exists("docsUrl", $context) && (!twig_test_empty($_docsUrl_)));
        // line 211
        echo "
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t";
        // line 215
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        if ((array_key_exists("tabs", $context) && $_tabs_)) {
            // line 216
            echo "\t\t\t\t\t\t\t\t";
            $this->env->loadTemplate("_includes/tabs")->display($context);
            // line 217
            echo "\t\t\t\t\t\t\t";
        }
        // line 218
        echo "
\t\t\t\t\t\t\t<div id=\"content\" class=\"content";
        // line 219
        if (isset($context["hasSidebar"])) { $_hasSidebar_ = $context["hasSidebar"]; } else { $_hasSidebar_ = null; }
        if ($_hasSidebar_) {
            echo " has-sidebar";
        }
        if (isset($context["hasHelp"])) { $_hasHelp_ = $context["hasHelp"]; } else { $_hasHelp_ = null; }
        if ($_hasHelp_) {
            echo " has-help";
        }
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 220
        if (isset($context["hasSidebar"])) { $_hasSidebar_ = $context["hasSidebar"]; } else { $_hasSidebar_ = null; }
        if ($_hasSidebar_) {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t";
            // line 222
            if (isset($context["sidebar"])) { $_sidebar_ = $context["sidebar"]; } else { $_sidebar_ = null; }
            echo $_sidebar_;
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 225
        echo "
\t\t\t\t\t\t\t\t";
        // line 226
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "
\t\t\t\t\t\t\t\t";
        // line 230
        if (isset($context["hasHelp"])) { $_hasHelp_ = $context["hasHelp"]; } else { $_hasHelp_ = null; }
        if ($_hasHelp_) {
            // line 231
            echo "\t\t\t\t\t\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            if (isset($context["docsUrl"])) { $_docsUrl_ = $context["docsUrl"]; } else { $_docsUrl_ = null; }
            echo twig_escape_filter($this->env, $_docsUrl_, "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t\t\t\t\t\t";
        }
        // line 233
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 226
    public function block_content($context, array $blocks = array())
    {
        // line 227
        echo "\t\t\t\t\t\t\t\t\t";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("content", $context)) ? ($_content_) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  739 => 227,  736 => 226,  728 => 233,  719 => 231,  716 => 230,  713 => 229,  711 => 226,  708 => 225,  701 => 222,  698 => 221,  695 => 220,  684 => 219,  681 => 218,  678 => 217,  675 => 216,  672 => 215,  666 => 211,  662 => 210,  658 => 209,  654 => 208,  651 => 207,  645 => 201,  638 => 198,  635 => 197,  633 => 196,  630 => 195,  623 => 193,  620 => 192,  617 => 191,  612 => 188,  599 => 186,  594 => 185,  590 => 183,  586 => 182,  583 => 181,  574 => 267,  568 => 265,  565 => 264,  560 => 263,  554 => 260,  549 => 259,  545 => 257,  542 => 256,  537 => 253,  529 => 251,  524 => 250,  512 => 247,  501 => 245,  498 => 244,  491 => 243,  480 => 242,  474 => 238,  472 => 207,  467 => 204,  465 => 181,  459 => 177,  453 => 176,  443 => 174,  439 => 173,  434 => 172,  430 => 171,  420 => 163,  412 => 160,  406 => 158,  403 => 157,  400 => 156,  391 => 155,  385 => 154,  380 => 153,  367 => 149,  354 => 143,  346 => 141,  341 => 140,  335 => 139,  329 => 136,  325 => 134,  320 => 131,  313 => 129,  297 => 127,  292 => 126,  285 => 124,  280 => 123,  275 => 121,  267 => 118,  264 => 117,  261 => 116,  258 => 115,  255 => 114,  252 => 113,  249 => 112,  246 => 111,  238 => 107,  231 => 106,  223 => 105,  220 => 104,  216 => 103,  213 => 102,  210 => 101,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  166 => 88,  161 => 87,  158 => 86,  152 => 82,  149 => 81,  146 => 80,  143 => 79,  139 => 77,  129 => 75,  124 => 74,  121 => 73,  117 => 72,  113 => 71,  110 => 70,  107 => 69,  101 => 67,  96 => 66,  93 => 65,  30 => 4,  28 => 3,  128 => 36,  122 => 35,  119 => 34,  111 => 30,  106 => 29,  94 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  71 => 22,  66 => 21,  63 => 20,  56 => 16,  52 => 14,  48 => 13,  45 => 12,  42 => 11,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
