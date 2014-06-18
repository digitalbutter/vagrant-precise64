<?php

/* settings/plugins */
class __TwigTemplate_af905caefc8e35287f46ee116e64918d60035a0dd7073987054615204c022bb3 extends Craft\BaseTemplate
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
        // line 2
        $context["title"] = \Craft\Craft::t("Plugins");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 8
        $context["docsUrl"] = "http://buildwithcraft.com/docs/plugins/introduction";
        // line 11
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["plugins"] = $this->getAttribute($this->getAttribute($_craft_, "plugins"), "getPlugins", array(0 => false), "method");
        // line 14
        ob_start();
        // line 15
        echo "\t";
        if (isset($context["plugins"])) { $_plugins_ = $context["plugins"]; } else { $_plugins_ = null; }
        if (twig_length_filter($this->env, $_plugins_)) {
            // line 16
            echo "\t\t<table id=\"plugins\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 18
            echo twig_escape_filter($this->env, \Craft\Craft::t("Plugin"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Developer"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Status"), "html", null, true);
            echo "</th>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 24
            if (isset($context["plugins"])) { $_plugins_ = $context["plugins"]; } else { $_plugins_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_plugins_);
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 25
                echo "\t\t\t\t\t";
                if (isset($context["plugin"])) { $_plugin_ = $context["plugin"]; } else { $_plugin_ = null; }
                $context["name"] = $this->getAttribute($_plugin_, "getName", array(), "method");
                // line 26
                if (isset($context["plugin"])) { $_plugin_ = $context["plugin"]; } else { $_plugin_ = null; }
                $context["classHandle"] = $this->getAttribute($_plugin_, "getClassHandle", array(), "method");
                // line 27
                if (isset($context["plugin"])) { $_plugin_ = $context["plugin"]; } else { $_plugin_ = null; }
                $context["isInstalled"] = $this->getAttribute($_plugin_, "isInstalled", array(), "method");
                // line 28
                if (isset($context["plugin"])) { $_plugin_ = $context["plugin"]; } else { $_plugin_ = null; }
                $context["isEnabled"] = $this->getAttribute($_plugin_, "isEnabled", array(), "method");
                // line 29
                if (isset($context["isEnabled"])) { $_isEnabled_ = $context["isEnabled"]; } else { $_isEnabled_ = null; }
                if (isset($context["plugin"])) { $_plugin_ = $context["plugin"]; } else { $_plugin_ = null; }
                $context["settingsUrl"] = (($_isEnabled_) ? ($this->getAttribute($_plugin_, "getSettingsUrl", array(), "method")) : (""));
                // line 30
                if (isset($context["plugin"])) { $_plugin_ = $context["plugin"]; } else { $_plugin_ = null; }
                $context["developerUrl"] = $this->getAttribute($_plugin_, "getDeveloperUrl", array(), "method");
                // line 32
                echo "<tr data-name=\"";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\">
\t\t\t\t\t\t<th data-title=\"";
                // line 33
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 34
                if (isset($context["settingsUrl"])) { $_settingsUrl_ = $context["settingsUrl"]; } else { $_settingsUrl_ = null; }
                if ($_settingsUrl_) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["settingsUrl"])) { $_settingsUrl_ = $context["settingsUrl"]; } else { $_settingsUrl_ = null; }
                    echo twig_escape_filter($this->env, $_settingsUrl_, "html", null, true);
                    echo "\">";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t<span class=\"light\">";
                if (isset($context["plugin"])) { $_plugin_ = $context["plugin"]; } else { $_plugin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_plugin_, "getVersion", array(), "method"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<td data-title=\"";
                // line 41
                echo twig_escape_filter($this->env, \Craft\Craft::t("Developer"), "html", null, true);
                echo "\"><a";
                if (isset($context["developerUrl"])) { $_developerUrl_ = $context["developerUrl"]; } else { $_developerUrl_ = null; }
                if ($_developerUrl_) {
                    echo " href=\"";
                    if (isset($context["developerUrl"])) { $_developerUrl_ = $context["developerUrl"]; } else { $_developerUrl_ = null; }
                    echo twig_escape_filter($this->env, $_developerUrl_, "html", null, true);
                    echo "\" target=\"_blank\"";
                }
                echo ">";
                if (isset($context["plugin"])) { $_plugin_ = $context["plugin"]; } else { $_plugin_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_plugin_, "getDeveloper", array(), "method"), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 42
                echo twig_escape_filter($this->env, \Craft\Craft::t("Status"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<form method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"pluginClass\" value=\"";
                // line 44
                if (isset($context["classHandle"])) { $_classHandle_ = $context["classHandle"]; } else { $_classHandle_ = null; }
                echo twig_escape_filter($this->env, $_classHandle_, "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 45
                if (isset($context["isEnabled"])) { $_isEnabled_ = $context["isEnabled"]; } else { $_isEnabled_ = null; }
                if (isset($context["isInstalled"])) { $_isInstalled_ = $context["isInstalled"]; } else { $_isInstalled_ = null; }
                if ($_isEnabled_) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"status on\"></span> ";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Enabled"), "html", null, true);
                    echo " 
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
                    // line 47
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Disable"), "html", null, true);
                    echo "\" class=\"btn small formsubmit\" data-action=\"plugins/disablePlugin\">
\t\t\t\t\t\t\t\t";
                } elseif ($_isInstalled_) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"status off\"></span> ";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
                    echo " 
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
                    // line 50
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Enable"), "html", null, true);
                    echo "\" class=\"btn small formsubmit\" data-action=\"plugins/enablePlugin\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"status\"></span> <span class=\"light\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Not installed"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"thin rightalign nowrap\">
\t\t\t\t\t\t\t<form method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"pluginClass\" value=\"";
                // line 58
                if (isset($context["classHandle"])) { $_classHandle_ = $context["classHandle"]; } else { $_classHandle_ = null; }
                echo twig_escape_filter($this->env, $_classHandle_, "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 59
                if (isset($context["isInstalled"])) { $_isInstalled_ = $context["isInstalled"]; } else { $_isInstalled_ = null; }
                if ($_isInstalled_) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Uninstall"), "html", null, true);
                    echo "\" class=\"btn small formsubmit\" data-action=\"plugins/uninstallPlugin\" data-confirm=\"";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to uninstall {plugin}? You will lose all of its associated data.", array("plugin" => $_name_)), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Install"), "html", null, true);
                    echo "\" class=\"btn small formsubmit\" data-action=\"plugins/installPlugin\">
\t\t\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 71
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("There are no available plugins."), "html", null, true);
            echo "
\t";
        }
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/plugins";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 71,  213 => 68,  204 => 64,  198 => 62,  189 => 60,  186 => 59,  181 => 58,  175 => 54,  169 => 52,  164 => 50,  159 => 49,  154 => 47,  149 => 46,  145 => 45,  140 => 44,  135 => 42,  120 => 41,  113 => 39,  106 => 37,  96 => 35,  93 => 34,  89 => 33,  83 => 32,  80 => 30,  76 => 29,  73 => 28,  70 => 27,  67 => 26,  63 => 25,  58 => 24,  51 => 20,  47 => 19,  43 => 18,  39 => 16,  35 => 15,  33 => 14,  30 => 11,  28 => 8,  26 => 4,  24 => 2,);
    }
}
