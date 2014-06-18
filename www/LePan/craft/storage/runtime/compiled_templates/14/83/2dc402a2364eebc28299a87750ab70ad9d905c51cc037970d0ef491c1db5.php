<?php

/* globals/_edit */
class __TwigTemplate_14832dc402a2364eebc28299a87750ab70ad9d905c51cc037970d0ef491c1db5 extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Globals");
        // line 5
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if ($this->getAttribute($_craft_, "isLocalized", array(), "method")) {
            // line 6
            ob_start();
            // line 7
            echo "\t\t<div class=\"select\">
\t\t\t<select onchange=\"document.location.href='";
            // line 8
            if (isset($context["globalSetHandle"])) { $_globalSetHandle_ = $context["globalSetHandle"]; } else { $_globalSetHandle_ = null; }
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("globals/{locale}/" . $_globalSetHandle_)), "html", null, true);
            echo "'.replace('{locale}', this.value);\">
\t\t\t\t";
            // line 9
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "i18n"), "getEditableLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 10
                echo "\t\t\t\t\t<option value=\"";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "id"), "html", null, true);
                echo "\"";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                if (isset($context["localeId"])) { $_localeId_ = $context["localeId"]; } else { $_localeId_ = null; }
                if (($this->getAttribute($_locale_, "id") == $_localeId_)) {
                    echo " selected";
                }
                echo ">";
                if (isset($context["locale"])) { $_locale_ = $context["locale"]; } else { $_locale_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_locale_, "name"), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t\t</select>
\t\t</div>
\t";
            $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 18
        ob_start();
        // line 19
        echo "\t<nav>
\t\t<ul>
\t\t\t";
        // line 21
        if (isset($context["globalSets"])) { $_globalSets_ = $context["globalSets"]; } else { $_globalSets_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_globalSets_);
        foreach ($context['_seq'] as $context["_key"] => $context["theGlobalSet"]) {
            // line 22
            echo "\t\t\t\t<li><a";
            if (isset($context["theGlobalSet"])) { $_theGlobalSet_ = $context["theGlobalSet"]; } else { $_theGlobalSet_ = null; }
            if (isset($context["globalSetHandle"])) { $_globalSetHandle_ = $context["globalSetHandle"]; } else { $_globalSetHandle_ = null; }
            if (($this->getAttribute($_theGlobalSet_, "handle") == $_globalSetHandle_)) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            if (isset($context["theGlobalSet"])) { $_theGlobalSet_ = $context["theGlobalSet"]; } else { $_theGlobalSet_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_theGlobalSet_, "cpEditUrl"), "html", null, true);
            echo "\">";
            if (isset($context["theGlobalSet"])) { $_theGlobalSet_ = $context["theGlobalSet"]; } else { $_theGlobalSet_ = null; }
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($_theGlobalSet_, "name")), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theGlobalSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</ul>
\t</nav>
";
        $context["sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        ob_start();
        // line 30
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"globals/saveContent\">
\t\t<input type=\"hidden\" name=\"setId\" value=\"";
        // line 32
        if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_globalSet_, "id"), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"locale\" value=\"";
        // line 33
        if (isset($context["localeId"])) { $_localeId_ = $context["localeId"]; } else { $_localeId_ = null; }
        echo twig_escape_filter($this->env, $_localeId_, "html", null, true);
        echo "\">

\t\t";
        // line 35
        if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_globalSet_, "getFieldLayout", array(), "method"), "getFields", array(), "method"))) {
            // line 36
            echo "\t\t\t<div>
\t\t\t\t";
            // line 37
            if (isset($context["globalSet"])) { $_globalSet_ = $context["globalSet"]; } else { $_globalSet_ = null; }
            $this->env->loadTemplate("_includes/fields")->display(array("fields" => $this->getAttribute($this->getAttribute($_globalSet_, "getFieldLayout", array(), "method"), "getFields", array(), "method"), "element" => $_globalSet_));
            // line 41
            echo "\t\t\t</div>

\t\t\t<div class=\"buttons\">
\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t";
        } else {
            // line 47
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("This global set doesn’t have any fields assigned to it in it’s field layout."), "html", null, true);
            echo "
\t\t";
        }
        // line 49
        echo "\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "globals/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  141 => 47,  135 => 44,  130 => 41,  127 => 37,  124 => 36,  121 => 35,  115 => 33,  110 => 32,  106 => 30,  104 => 29,  99 => 24,  80 => 22,  75 => 21,  71 => 19,  69 => 18,  63 => 12,  44 => 10,  39 => 9,  34 => 8,  31 => 7,  29 => 6,  26 => 5,  24 => 2,);
    }
}
