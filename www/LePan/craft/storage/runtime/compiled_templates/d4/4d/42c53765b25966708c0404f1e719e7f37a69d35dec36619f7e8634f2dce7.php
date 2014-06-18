<?php

/* lj_dynamicfields/settings/dropdown */
class __TwigTemplate_d44d42c53765b25966708c0404f1e719e7f37a69d35dec36619f7e8634f2dce7 extends Craft\BaseTemplate
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
        $context["__internal_1eadd2a99114c2e8d57124a0b53c993c49cccc665eaae0547e9cc0dd34ff7188"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $context["__internal_1eadd2a99114c2e8d57124a0b53c993c49cccc665eaae0547e9cc0dd34ff7188"]->gettextareaField(array("id" => $_name_, "name" => $_name_, "label" => "Dropdown Options", "instructions" => "JSON format. Twig code is <del>allowed</del> encouraged :)", "rows" => 7, "class" => "code", "value" => $this->getAttribute($_settings_, "json")));
        // line 10
        echo "
";
        // line 53
        echo "
    <h2>Quick start</h2>
    <p>'Copy &amp; Paste' one of the following examples into the textarea above.</p>
    <h3>1. Simple example</h3>
    <p>
    <pre class=\"code\">{ \"value\":\"jim\" , \"label\":\"Jim Beam\" },
{ \"value\":\"jack\" , \"label\":\"Jack Daniels\" , \"default\":true },
{ \"value\":\"mark\" , \"label\":\"Maker's Mark\" }
</pre>
    </p>
    <h3>2. Option groups example</h3>
    <p>
    <pre class=\"code\">{ \"optgroup\":\"Whiskey\" },
{ \"value\":\"jim\" , \"label\":\"Jim Beam\" },
{ \"value\":\"jack\" , \"label\":\"Jack Daniels\" , \"default\":true },
{ \"optgroup\":\"Vodka\" },
{ \"value\":\"absolut\" , \"label\":\"Absolut\" },
{ \"value\":\"smirnoff\" , \"label\":\"Smirnoff\" }
</pre>
    </p>
    <h3>3. Twig example</h3>
    <p>
    <pre class=\"code\">{% for entry in craft.entries.limit(null).order('title') %}
    { \"value\":\"{{ entry.id }}\" , \"label\":\"{{ entry | raw }}\"
        {% if entry.uri == '__home__' %} , \"default\":true{% endif %}
    }{% if not loop.last %},{% endif %}
{% endfor %}
</pre>
    </p>
    <h3>4. Template example</h3>
    <p>
    <pre class=\"code\">{% include '_dynamicfields/sections' ignore missing %}
</pre>
    </p>
    <p>Example code for /craft/templates/_dynamicfields/sections.html
<pre class=\"code\">
{% for section in craft.sections.getAllSections() %}
    { \"value\":\"{{ section.id }}\" , \"label\":\"{{ section | raw }}\" }
    {% if not loop.last %},{% endif %}
{% endfor %}
</pre>
    </p>
";
    }

    public function getTemplateName()
    {
        return "lj_dynamicfields/settings/dropdown";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 53,  25 => 10,  21 => 2,  19 => 1,);
    }
}
