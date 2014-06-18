<?php

/* lj_dynamicfields/settings/multiselect */
class __TwigTemplate_f66684b89aaa952e99d0980ea77ccb0e22b98c41fdb69347da43b68c6be56850 extends Craft\BaseTemplate
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
        $context["__internal_2235dca740dbdcd0a8eeacb5d515408d610dd24d58c38be395747b9fe6b5e154"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $context["__internal_2235dca740dbdcd0a8eeacb5d515408d610dd24d58c38be395747b9fe6b5e154"]->gettextareaField(array("id" => $_name_, "name" => $_name_, "label" => "Multi-select Options", "instructions" => "JSON format. Twig code is <del>allowed</del> encouraged :)", "rows" => 7, "class" => "code", "value" => $this->getAttribute($_settings_, "json")));
        // line 10
        echo "
";
        // line 44
        echo "
    <h2>Quick start</h2>
    <p>'Copy &amp; Paste' one of the following examples into the textarea above.</p>
    <h3>1. Simple example</h3>
    <p>
    <pre class=\"code\">{ \"value\":\"jim\" , \"label\":\"Jim Beam\" },
{ \"value\":\"jack\" , \"label\":\"Jack Daniels\" , \"default\":true },
{ \"value\":\"mark\" , \"label\":\"Maker's Mark\" },
{ \"value\":\"rebel\" , \"label\":\"Rebel Yell\" , \"default\":true }
</pre>
    </p>
    <h3>2. Twig example</h3>
    <p>
    <pre class=\"code\">{% for entry in craft.entries.limit(null).order('title') %}
    { \"value\":\"{{ entry.id }}\" , \"label\":\"{{ entry | raw }}\"
        {% if entry.uri == '__home__' %} , \"default\":true{% endif %}
    }{% if not loop.last %},{% endif %}
{% endfor %}
</pre>
    </p>
    <h3>3. Template example</h3>
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
        return "lj_dynamicfields/settings/multiselect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 44,  25 => 10,  21 => 2,  19 => 1,);
    }
}
