<?php

/* _special/install/site */
class __TwigTemplate_5b0eec6f5c6b73f3a29ce5963a890fdfcbd2df385994b674f7d39d7fdafb26de extends Craft\BaseTemplate
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

<div id=\"site\" class=\"modal\">
\t<h1>";
        // line 5
        echo twig_escape_filter($this->env, \Craft\Craft::t("Setup your site"), "html", null, true);
        echo "</h1>

\t<form id=\"siteform\" accept-charset=\"UTF-8\">
\t\t";
        // line 8
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site Name"), "id" => "siteName", "value" => $this->getContext($context, "defaultSiteName"), "maxlength" => 255));
        echo "
\t\t";
        // line 9
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site URL"), "id" => "siteUrl", "value" => $this->getContext($context, "defaultSiteUrl"), "maxlength" => 255));
        echo "

\t\t";
        // line 11
        ob_start();
        // line 12
        echo "\t\t\t<div class=\"select\">
\t\t\t\t<select id=\"locale\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "getAllLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 15
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "locale"), "id"), "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getContext($context, "locale"), "id") == $this->getAttribute($this->getContext($context, "craft"), "locale"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "locale"), "id"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "locale"), "name"), "html", null, true);
            echo ")</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
        $context["localeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "\t\t";
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Locale"), "id" => "locale"), $this->getContext($context, "localeInput"));
        echo "

\t\t<div class=\"buttons\">
\t\t\t<div id=\"sitesubmit\" class=\"btn big submit\">";
        // line 23
        echo twig_escape_filter($this->env, \Craft\Craft::t("Finish up"), "html", null, true);
        echo "
\t\t\t\t<input type=\"submit\" tabindex=\"-1\">
\t\t\t</div>
\t\t</div>
\t</form>

\t";
        // line 29
        $this->env->loadTemplate("_special/install/dots")->display(array_merge($context, array("dot" => 2)));
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/site";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  36 => 9,  37 => 6,  92 => 23,  90 => 22,  85 => 20,  74 => 17,  68 => 17,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  87 => 87,  79 => 23,  23 => 3,  62 => 22,  51 => 15,  40 => 7,  34 => 4,  32 => 8,  21 => 2,  19 => 1,  80 => 23,  75 => 22,  64 => 13,  60 => 21,  56 => 10,  53 => 9,  47 => 14,  44 => 23,  38 => 21,  33 => 14,  28 => 3,  26 => 5,  24 => 3,  22 => 2,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 1,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  91 => 30,  86 => 24,  83 => 82,  78 => 19,  73 => 20,  71 => 21,  69 => 29,  67 => 20,  65 => 14,  63 => 19,  61 => 25,  59 => 11,  55 => 47,  50 => 18,  45 => 9,  43 => 12,  41 => 11,  35 => 22,  57 => 18,  54 => 18,  52 => 19,  46 => 14,  42 => 8,  39 => 15,  31 => 17,  29 => 6,  27 => 6,  25 => 4,);
    }
}
