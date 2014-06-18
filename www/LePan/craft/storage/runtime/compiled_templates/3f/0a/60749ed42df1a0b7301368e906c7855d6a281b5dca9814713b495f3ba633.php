<?php

/* lj_dynamicfields/settings/radiobuttons */
class __TwigTemplate_3f0a60749ed42df1a0b7301368e906c7855d6a281b5dca9814713b495f3ba633 extends Craft\BaseTemplate
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
        $context["__internal_0392ae40a911d2a2a0bb623540d9d7ef4046c5b95084c6e2a266110f3d19807d"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $context["__internal_0392ae40a911d2a2a0bb623540d9d7ef4046c5b95084c6e2a266110f3d19807d"]->gettextareaField(array("id" => $_name_, "name" => $_name_, "label" => "Radio Button Options", "instructions" => "JSON format. Twig code is <del>allowed</del> encouraged :)", "rows" => 7, "class" => "code", "value" => $this->getAttribute($_settings_, "json")));
        // line 10
        echo "
";
        // line 43
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
        return "lj_dynamicfields/settings/radiobuttons";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 43,  25 => 10,  21 => 2,  19 => 1,);
    }
}
