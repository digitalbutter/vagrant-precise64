<?php

/* _includes/forms/editableTable */
class __TwigTemplate_3e66478b84bc6526d8874683b4ee87435b76788eebf6f01913c3fa0bf08cebd1 extends Craft\BaseTemplate
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
        if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
        $context["static"] = ((array_key_exists("static", $context)) ? ($_static_) : (false));
        // line 2
        if (isset($context["cols"])) { $_cols_ = $context["cols"]; } else { $_cols_ = null; }
        $context["cols"] = ((array_key_exists("cols", $context)) ? ($_cols_) : (array()));
        // line 3
        if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
        $context["rows"] = ((array_key_exists("rows", $context)) ? ($_rows_) : (array()));
        // line 5
        echo "<table id=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\" class=\"shadow-box editable\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 8
        if (isset($context["cols"])) { $_cols_ = $context["cols"]; } else { $_cols_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_cols_);
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 9
            echo "\t\t\t\t<th scope=\"col\" class=\"header\">";
            if (isset($context["col"])) { $_col_ = $context["col"]; } else { $_col_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_col_, "heading")) ? ($this->getAttribute($_col_, "heading")) : (" ")), "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t";
        if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
        if ((!$_static_)) {
            // line 12
            echo "\t\t\t\t<th class=\"header\" colspan=\"2\"></th>
\t\t\t";
        }
        // line 14
        echo "\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 17
        if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_rows_);
        foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
            // line 18
            echo "\t\t\t<tr data-id=\"";
            if (isset($context["rowId"])) { $_rowId_ = $context["rowId"]; } else { $_rowId_ = null; }
            echo twig_escape_filter($this->env, $_rowId_, "html", null, true);
            echo "\">
\t\t\t\t";
            // line 19
            if (isset($context["cols"])) { $_cols_ = $context["cols"]; } else { $_cols_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_cols_);
            foreach ($context['_seq'] as $context["colId"] => $context["col"]) {
                // line 20
                echo "\t\t\t\t\t";
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                if (isset($context["rowId"])) { $_rowId_ = $context["rowId"]; } else { $_rowId_ = null; }
                if (isset($context["colId"])) { $_colId_ = $context["colId"]; } else { $_colId_ = null; }
                $context["cellName"] = ((((($_name_ . "[") . $_rowId_) . "][") . $_colId_) . "]");
                // line 21
                echo "\t\t\t\t\t";
                if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                if (isset($context["colId"])) { $_colId_ = $context["colId"]; } else { $_colId_ = null; }
                $context["value"] = (($this->getAttribute($_row_, $_colId_, array(), "array", true, true)) ? ($this->getAttribute($_row_, $_colId_, array(), "array")) : (null));
                // line 22
                echo "\t\t\t\t\t";
                if (isset($context["col"])) { $_col_ = $context["col"]; } else { $_col_ = null; }
                $context["textual"] = twig_in_filter($this->getAttribute($_col_, "type"), array(0 => "singleline", 1 => "multiline", 2 => "number"));
                // line 23
                echo "\t\t\t\t\t<td class=\"";
                if (isset($context["textual"])) { $_textual_ = $context["textual"]; } else { $_textual_ = null; }
                if ($_textual_) {
                    echo "textual";
                }
                echo " ";
                if (isset($context["col"])) { $_col_ = $context["col"]; } else { $_col_ = null; }
                if ($this->getAttribute($_col_, "class", array(), "any", true, true)) {
                    if (isset($context["col"])) { $_col_ = $context["col"]; } else { $_col_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_col_, "class"), "html", null, true);
                }
                echo "\"";
                if (isset($context["col"])) { $_col_ = $context["col"]; } else { $_col_ = null; }
                if ($this->getAttribute($_col_, "width", array(), "any", true, true)) {
                    echo " width=\"";
                    if (isset($context["col"])) { $_col_ = $context["col"]; } else { $_col_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_col_, "width"), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 24
                if (isset($context["col"])) { $_col_ = $context["col"]; } else { $_col_ = null; }
                if (($this->getAttribute($_col_, "type") == "select")) {
                    // line 25
                    if (isset($context["cellName"])) { $_cellName_ = $context["cellName"]; } else { $_cellName_ = null; }
                    if (isset($context["col"])) { $_col_ = $context["col"]; } else { $_col_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
                    $this->env->loadTemplate("_includes/forms/select")->display(array("class" => "small", "name" => $_cellName_, "options" => $this->getAttribute($_col_, "options"), "value" => $_value_, "disabled" => $_static_));
                } elseif (($this->getAttribute($_col_, "type") == "checkbox")) {
                    // line 33
                    echo "<input type=\"hidden\" name=\"";
                    if (isset($context["cellName"])) { $_cellName_ = $context["cellName"]; } else { $_cellName_ = null; }
                    echo twig_escape_filter($this->env, $_cellName_, "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                    // line 34
                    if (isset($context["cellName"])) { $_cellName_ = $context["cellName"]; } else { $_cellName_ = null; }
                    echo twig_escape_filter($this->env, $_cellName_, "html", null, true);
                    echo "\" value=\"1\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    if ($_value_) {
                        echo " checked";
                    }
                    if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
                    if ($_static_) {
                        echo " disabled";
                    }
                    echo ">";
                } else {
                    // line 36
                    echo "<textarea name=\"";
                    if (isset($context["cellName"])) { $_cellName_ = $context["cellName"]; } else { $_cellName_ = null; }
                    echo twig_escape_filter($this->env, $_cellName_, "html", null, true);
                    echo "\" rows=\"1\"";
                    if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
                    if ($_static_) {
                        echo " disabled";
                    }
                    echo ">";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "</textarea>";
                }
                // line 38
                echo "</td>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['colId'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t";
            if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
            if ((!$_static_)) {
                // line 41
                echo "\t\t\t\t\t<td class=\"thin action\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\"></a></td>
\t\t\t\t\t<td class=\"thin action\"><a class=\"delete icon\" title=\"";
                // line 42
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\"></a></td>
\t\t\t\t";
            }
            // line 44
            echo "\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t</tbody>
</table>
";
        // line 48
        if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
        if ((!$_static_)) {
            // line 49
            echo "\t<div class=\"btn add icon\">";
            if (isset($context["addRowLabel"])) { $_addRowLabel_ = $context["addRowLabel"]; } else { $_addRowLabel_ = null; }
            echo twig_escape_filter($this->env, ((array_key_exists("addRowLabel", $context)) ? ($_addRowLabel_) : (\Craft\Craft::t("Add a row"))), "html", null, true);
            echo "</div>
";
        }
        // line 51
        echo "
";
        // line 52
        if (isset($context["static"])) { $_static_ = $context["static"]; } else { $_static_ = null; }
        if (isset($context["initJs"])) { $_initJs_ = $context["initJs"]; } else { $_initJs_ = null; }
        if (((!$_static_) && ((!array_key_exists("initJs", $context)) || $_initJs_))) {
            // line 53
            echo "\t";
            ob_start();
            // line 54
            echo "\t\tnew Craft.EditableTable(
\t\t\t\"";
            // line 55
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId($_id_), "js"), "html", null, true);
            echo "\",
\t\t\t\"";
            // line 56
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName($_name_), "js"), "html", null, true);
            echo "\",
\t\t\t";
            // line 57
            if (isset($context["cols"])) { $_cols_ = $context["cols"]; } else { $_cols_ = null; }
            echo twig_jsonencode_filter($_cols_);
            echo ");
\t";
            $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
\t";
            // line 60
            if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
            \Craft\craft()->templates->includeJs($_js_);
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/editableTable";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 60,  231 => 59,  225 => 57,  220 => 56,  215 => 55,  212 => 54,  202 => 51,  195 => 49,  192 => 48,  176 => 42,  171 => 41,  167 => 40,  160 => 38,  146 => 36,  132 => 34,  119 => 25,  91 => 22,  86 => 21,  64 => 17,  55 => 12,  51 => 11,  25 => 3,  22 => 2,  81 => 40,  75 => 19,  72 => 31,  66 => 29,  63 => 28,  59 => 14,  54 => 24,  49 => 21,  42 => 14,  38 => 12,  31 => 5,  188 => 46,  179 => 13,  174 => 8,  166 => 4,  148 => 105,  143 => 97,  137 => 95,  133 => 93,  126 => 33,  120 => 85,  115 => 84,  108 => 83,  104 => 81,  100 => 73,  83 => 65,  73 => 58,  69 => 18,  65 => 54,  61 => 52,  57 => 50,  40 => 41,  36 => 8,  32 => 30,  29 => 29,  27 => 4,  21 => 2,  19 => 1,  311 => 163,  308 => 162,  301 => 156,  295 => 152,  288 => 150,  284 => 149,  277 => 147,  270 => 145,  266 => 144,  256 => 149,  249 => 147,  242 => 145,  238 => 144,  230 => 143,  219 => 142,  214 => 141,  209 => 53,  205 => 52,  198 => 129,  193 => 126,  189 => 124,  184 => 16,  181 => 44,  177 => 117,  173 => 108,  169 => 5,  165 => 96,  161 => 94,  157 => 84,  153 => 3,  147 => 74,  141 => 73,  136 => 72,  130 => 71,  128 => 70,  125 => 69,  118 => 67,  116 => 24,  111 => 63,  109 => 62,  105 => 58,  102 => 57,  99 => 54,  95 => 23,  92 => 51,  90 => 66,  87 => 48,  84 => 44,  80 => 20,  78 => 62,  74 => 35,  71 => 31,  67 => 30,  62 => 26,  58 => 24,  56 => 23,  53 => 22,  50 => 43,  47 => 42,  44 => 16,  41 => 9,  37 => 10,  34 => 9,  30 => 8,  28 => 5,  26 => 5,  24 => 3,);
    }
}
