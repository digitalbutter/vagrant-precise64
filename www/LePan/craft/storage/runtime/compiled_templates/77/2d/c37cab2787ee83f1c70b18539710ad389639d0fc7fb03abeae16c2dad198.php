<?php

/* _upgrademodal */
class __TwigTemplate_772dc37cab2787ee83f1c70b18539710ad389639d0fc7fb03abeae16c2dad198 extends Craft\BaseTemplate
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
        // line 31
        echo "
";
        // line 32
        $context["__internal_1e4732394096939222f49f201221a1e30e85ff8f7f529d9a207b49a4ebf3d7c3"] = $this;
        // line 33
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 34
        echo "

<div id=\"upgrademodal-compare\" class=\"body\">
\t<table class=\"data fullwidth\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<th scope=\"col\"><h1 class=\"logo craftclient\">Craft Client</h1></th>
\t\t\t\t<th scope=\"col\"><h1 class=\"logo craftpro\">Craft Pro</h1></th>
\t\t\t</tr>
\t\t\t<tr class=\"buybtns\">
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 46
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (isset($context["editions"])) { $_editions_ = $context["editions"]; } else { $_editions_ = null; }
        if (isset($context["licensedEdition"])) { $_licensedEdition_ = $context["licensedEdition"]; } else { $_licensedEdition_ = null; }
        if (isset($context["canTestEditions"])) { $_canTestEditions_ = $context["canTestEditions"]; } else { $_canTestEditions_ = null; }
        echo $context["__internal_1e4732394096939222f49f201221a1e30e85ff8f7f529d9a207b49a4ebf3d7c3"]->getbuybtn($_CraftClient_, $this->getAttribute($_editions_, $_CraftClient_, array(), "array"), $_licensedEdition_, $_canTestEditions_);
        echo "</td>
\t\t\t\t<td>";
        // line 47
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (isset($context["editions"])) { $_editions_ = $context["editions"]; } else { $_editions_ = null; }
        if (isset($context["licensedEdition"])) { $_licensedEdition_ = $context["licensedEdition"]; } else { $_licensedEdition_ = null; }
        if (isset($context["canTestEditions"])) { $_canTestEditions_ = $context["canTestEditions"]; } else { $_canTestEditions_ = null; }
        echo $context["__internal_1e4732394096939222f49f201221a1e30e85ff8f7f529d9a207b49a4ebf3d7c3"]->getbuybtn($_CraftPro_, $this->getAttribute($_editions_, $_CraftPro_, array(), "array"), $_licensedEdition_, $_canTestEditions_);
        echo "</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"section\">";
        // line 52
        echo twig_escape_filter($this->env, \Craft\Craft::t("Content Publishing"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 55
        echo twig_escape_filter($this->env, \Craft\Craft::t("Unlimited Singles and Channels"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("Structure sections"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 65
        echo twig_escape_filter($this->env, \Craft\Craft::t("Entry versioning"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 70
        echo twig_escape_filter($this->env, \Craft\Craft::t("Entry drafts"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"users\">";
        // line 76
        echo twig_escape_filter($this->env, \Craft\Craft::t("User Accounts"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 79
        echo twig_escape_filter($this->env, \Craft\Craft::t("Additional user accounts"), "html", null, true);
        echo "</th>
\t\t\t\t<td>";
        // line 80
        echo twig_escape_filter($this->env, \Craft\Craft::t("One “Client” account"), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 81
        echo twig_escape_filter($this->env, \Craft\Craft::t("Unlimited"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 84
        echo twig_escape_filter($this->env, \Craft\Craft::t("User groups"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 89
        echo twig_escape_filter($this->env, \Craft\Craft::t("User permissions"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 94
        echo twig_escape_filter($this->env, \Craft\Craft::t("Public user registration"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"brush\">";
        // line 100
        echo twig_escape_filter($this->env, \Craft\Craft::t("System Branding"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 103
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom login screen logo"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 108
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom HTML email template"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 113
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom email message wording"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"assets\">";
        // line 119
        echo twig_escape_filter($this->env, \Craft\Craft::t("Assets"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 122
        echo twig_escape_filter($this->env, \Craft\Craft::t("Amazon S3 support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 127
        echo twig_escape_filter($this->env, \Craft\Craft::t("Rackspace Cloud Files support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 132
        echo twig_escape_filter($this->env, \Craft\Craft::t("Google Cloud Storage support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"language\">";
        // line 138
        echo twig_escape_filter($this->env, \Craft\Craft::t("Localization and Translation"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 141
        echo twig_escape_filter($this->env, \Craft\Craft::t("Section and entry locale targeting"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 146
        echo twig_escape_filter($this->env, \Craft\Craft::t("Content translations"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 151
        echo twig_escape_filter($this->env, \Craft\Craft::t("Locale-specific user permissions"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr class=\"buybtns\">
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 157
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (isset($context["editions"])) { $_editions_ = $context["editions"]; } else { $_editions_ = null; }
        if (isset($context["licensedEdition"])) { $_licensedEdition_ = $context["licensedEdition"]; } else { $_licensedEdition_ = null; }
        if (isset($context["canTestEditions"])) { $_canTestEditions_ = $context["canTestEditions"]; } else { $_canTestEditions_ = null; }
        echo $context["__internal_1e4732394096939222f49f201221a1e30e85ff8f7f529d9a207b49a4ebf3d7c3"]->getbuybtn($_CraftClient_, $this->getAttribute($_editions_, $_CraftClient_, array(), "array"), $_licensedEdition_, $_canTestEditions_);
        echo "</td>
\t\t\t\t<td>";
        // line 158
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (isset($context["editions"])) { $_editions_ = $context["editions"]; } else { $_editions_ = null; }
        if (isset($context["licensedEdition"])) { $_licensedEdition_ = $context["licensedEdition"]; } else { $_licensedEdition_ = null; }
        if (isset($context["canTestEditions"])) { $_canTestEditions_ = $context["canTestEditions"]; } else { $_canTestEditions_ = null; }
        echo $context["__internal_1e4732394096939222f49f201221a1e30e85ff8f7f529d9a207b49a4ebf3d7c3"]->getbuybtn($_CraftPro_, $this->getAttribute($_editions_, $_CraftPro_, array(), "array"), $_licensedEdition_, $_canTestEditions_);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>


<div id=\"upgrademodal-checkout\" class=\"body hidden\">
\t<h1 class=\"logo\"></h1>

\t<form class=\"pane\">
\t\t<div class=\"header\">
\t\t\t<p class=\"price\"></p>
\t\t</div>

\t\t";
        // line 173
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Name on the card"), "id" => "cc-name"));
        // line 176
        echo "

\t\t";
        // line 178
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("Credit card number"), "id" => "cc-num", "autocomplete" => false));
        // line 182
        echo "

\t\t<table class=\"inputs fullwidth\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"cc-month\">
\t\t\t\t\t\t";
        // line 188
        ob_start();
        // line 189
        echo "\t\t\t\t\t\t\t<div class=\"select fullwidth\">
\t\t\t\t\t\t\t\t<select id=\"cc-month\">
\t\t\t\t\t\t\t\t\t";
        // line 191
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context["localeData"] = $this->getAttribute($this->getAttribute($_craft_, "i18n"), "getLocaleData", array(), "method");
        // line 192
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
            $context["month2"] = sprintf("%02d", $_month_);
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            if (isset($context["month2"])) { $_month2_ = $context["month2"]; } else { $_month2_ = null; }
            echo twig_escape_filter($this->env, $_month2_, "html", null, true);
            echo "\">";
            if (isset($context["month2"])) { $_month2_ = $context["month2"]; } else { $_month2_ = null; }
            echo twig_escape_filter($this->env, $_month2_, "html", null, true);
            echo " - ";
            if (isset($context["localeData"])) { $_localeData_ = $context["localeData"]; } else { $_localeData_ = null; }
            if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_localeData_, "getMonthName", array(0 => $_month_), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        $context["monthInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 199
        echo "
\t\t\t\t\t\t";
        // line 200
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["monthInput"])) { $_monthInput_ = $context["monthInput"]; } else { $_monthInput_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Expiration month"), "id" => "cc-month"), $_monthInput_);
        // line 203
        echo "
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"thin cc-year\">
\t\t\t\t\t\t";
        // line 207
        ob_start();
        // line 208
        echo "\t\t\t\t\t\t\t<div class=\"select fullwidth\">
\t\t\t\t\t\t\t\t<select id=\"cc-year\">
\t\t\t\t\t\t\t\t\t";
        // line 210
        if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($_now_, "year"), ($this->getAttribute($_now_, "year") + 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 211
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            if (isset($context["year"])) { $_year_ = $context["year"]; } else { $_year_ = null; }
            echo twig_escape_filter($this->env, $_year_, "html", null, true);
            echo "\">";
            if (isset($context["year"])) { $_year_ = $context["year"]; } else { $_year_ = null; }
            echo twig_escape_filter($this->env, $_year_, "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        $context["yearInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 216
        echo "
\t\t\t\t\t\t";
        // line 217
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["yearInput"])) { $_yearInput_ = $context["yearInput"]; } else { $_yearInput_ = null; }
        echo $_forms_->getfield(array("label" => \Craft\Craft::t("Exp. year"), "id" => "cc-year"), $_yearInput_);
        // line 220
        echo "
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"thin cc-cvc\">
\t\t\t\t\t\t";
        // line 224
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        echo $_forms_->gettextField(array("label" => \Craft\Craft::t("CVC"), "id" => "cc-cvc", "size" => 5, "autocomplete" => false));
        // line 229
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t\t<div class=\"footer\">
\t\t\t<div class=\"buttons right\">
\t\t\t\t<div id=\"upgrademodal-cancelcheckout\" class=\"btn\">";
        // line 237
        echo twig_escape_filter($this->env, \Craft\Craft::t("Cancel"), "html", null, true);
        echo "</div>
\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 238
        echo twig_escape_filter($this->env, \Craft\Craft::t("Purchase"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"spinner hidden\"></div>
\t\t\t</div>
\t\t</div>
\t</form>

\t<p class=\"secure icon light centeralign\">";
        // line 244
        echo \Craft\Craft::t("Your payment is safe and secure with {stripe}.", array("stripe" => "<a href=\"https://stripe.com/\" target=\"_blank\">Stripe</a>"));
        echo "
</div>


<div id=\"upgrademodal-success\" class=\"body hidden\">
\t<div class=\"message\">
\t\t<p>";
        // line 250
        echo "Craft has been upgraded successfully!";
        echo "</p>
\t\t<div class=\"btn\">";
        // line 251
        echo twig_escape_filter($this->env, \Craft\Craft::t("Reload"), "html", null, true);
        echo "</div>
\t</div>
</div>
";
    }

    // line 1
    public function getbuybtn($_edition = null, $_info = null, $_licensedEdition = null, $_canTestEditions = null)
    {
        $context = $this->env->mergeGlobals(array(
            "edition" => $_edition,
            "info" => $_info,
            "licensedEdition" => $_licensedEdition,
            "canTestEditions" => $_canTestEditions,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "\t\t";
            // line 4
            echo "\t\t";
            if (isset($context["edition"])) { $_edition_ = $context["edition"]; } else { $_edition_ = null; }
            if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
            if (($_edition_ == $_CraftEdition_)) {
                // line 5
                echo "\t\t\t<div class=\"installed\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Installed"), "html", null, true);
                echo "</div><br>
\t\t";
            }
            // line 7
            echo "
\t\t<div class=\"btngroup\">
\t\t\t";
            // line 10
            echo "\t\t\t";
            if (isset($context["edition"])) { $_edition_ = $context["edition"]; } else { $_edition_ = null; }
            if (isset($context["licensedEdition"])) { $_licensedEdition_ = $context["licensedEdition"]; } else { $_licensedEdition_ = null; }
            if (($_edition_ > $_licensedEdition_)) {
                // line 11
                echo "\t\t\t\t<div class=\"btn buybtn\" data-edition=\"";
                if (isset($context["edition"])) { $_edition_ = $context["edition"]; } else { $_edition_ = null; }
                echo twig_escape_filter($this->env, $_edition_, "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 12
                if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                if ($this->getAttribute($_info_, "salePrice")) {
                    // line 13
                    echo "\t\t\t\t\t\t<span class=\"listedprice\">";
                    if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_info_, "formattedPrice"), "html", null, true);
                    echo "</span> ";
                    if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_info_, "formattedSalePrice"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t";
                    if (isset($context["info"])) { $_info_ = $context["info"]; } else { $_info_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_info_, "formattedPrice"), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 19
            echo "
\t\t\t";
            // line 21
            echo "\t\t\t";
            if (isset($context["canTestEditions"])) { $_canTestEditions_ = $context["canTestEditions"]; } else { $_canTestEditions_ = null; }
            if ($_canTestEditions_) {
                // line 22
                echo "\t\t\t\t";
                if (isset($context["edition"])) { $_edition_ = $context["edition"]; } else { $_edition_ = null; }
                if (isset($context["CraftEdition"])) { $_CraftEdition_ = $context["CraftEdition"]; } else { $_CraftEdition_ = null; }
                if (($_edition_ == $_CraftEdition_)) {
                    // line 23
                    echo "\t\t\t\t\t<div class=\"btn test\" data-edition=\"0\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Uninstall"), "html", null, true);
                    echo "</div>
\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t<div class=\"btn test\" data-edition=\"";
                    if (isset($context["edition"])) { $_edition_ = $context["edition"]; } else { $_edition_ = null; }
                    echo twig_escape_filter($this->env, $_edition_, "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Test"), "html", null, true);
                    echo "</div>
\t\t\t\t";
                }
                // line 27
                echo "\t\t\t";
            }
            // line 28
            echo "\t\t</div>
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_upgrademodal";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 28,  522 => 27,  513 => 25,  507 => 23,  502 => 22,  498 => 21,  495 => 19,  491 => 17,  484 => 15,  474 => 13,  471 => 12,  465 => 11,  460 => 10,  456 => 7,  450 => 5,  445 => 4,  443 => 3,  441 => 2,  427 => 1,  419 => 251,  415 => 250,  406 => 244,  397 => 238,  393 => 237,  383 => 229,  380 => 224,  374 => 220,  370 => 217,  367 => 216,  362 => 213,  349 => 211,  344 => 210,  340 => 208,  338 => 207,  332 => 203,  328 => 200,  325 => 199,  320 => 196,  303 => 194,  299 => 193,  294 => 192,  291 => 191,  287 => 189,  285 => 188,  277 => 182,  274 => 178,  270 => 176,  267 => 173,  245 => 158,  237 => 157,  228 => 151,  220 => 146,  212 => 141,  206 => 138,  197 => 132,  189 => 127,  181 => 122,  175 => 119,  166 => 113,  158 => 108,  150 => 103,  144 => 100,  135 => 94,  127 => 89,  119 => 84,  113 => 81,  109 => 80,  105 => 79,  99 => 76,  90 => 70,  82 => 65,  74 => 60,  66 => 55,  60 => 52,  48 => 47,  40 => 46,  26 => 34,  24 => 33,  22 => 32,  19 => 31,);
    }
}
