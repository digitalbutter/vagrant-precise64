<?php

/* entries/_revisions */
class __TwigTemplate_fc2d4c8f7756174e3543724e0e4dcef7d36350130c4fdf318978849eb730f72b extends Craft\BaseTemplate
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
        if (isset($context["CraftClient"])) { $_CraftClient_ = $context["CraftClient"]; } else { $_CraftClient_ = null; }
        if (\Craft\craft()->getEdition() < $_CraftClient_)
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
";
        // line 3
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        $context["drafts"] = $this->getAttribute($this->getAttribute($_craft_, "entryRevisions"), "getEditableDraftsByEntryId", array(0 => $this->getAttribute($_entry_, "id"), 1 => $this->getAttribute($_entry_, "locale")), "method");
        // line 4
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        $context["baseUrl"] = (((("entries/" . $this->getAttribute($this->getAttribute($_entry_, "getSection", array(), "method"), "handle")) . "/") . $this->getAttribute($_entry_, "id")) . "/");
        // line 5
        echo "
<div id=\"revision-btn\" class=\"btn menubtn\">";
        // line 6
        if (isset($context["revisionLabel"])) { $_revisionLabel_ = $context["revisionLabel"]; } else { $_revisionLabel_ = null; }
        echo twig_escape_filter($this->env, $_revisionLabel_, "html", null, true);
        echo "</div>

<div class=\"menu\">
\t<ul class=\"padded\">
\t\t<li><a";
        // line 10
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        if (($this->getAttribute($_entry_, "getClassHandle", array(), "method") == "Entry")) {
            echo " class=\"sel\"";
        }
        echo " href=\"";
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entry_, "cpEditUrl"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Current"), "html", null, true);
        echo "</a></li>
\t</ul>

\t";
        // line 13
        if (isset($context["drafts"])) { $_drafts_ = $context["drafts"]; } else { $_drafts_ = null; }
        if ($_drafts_) {
            // line 14
            echo "\t\t<h6>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Drafts"), "html", null, true);
            echo "</h6>
\t\t<ul class=\"padded\">
\t\t\t";
            // line 16
            if (isset($context["drafts"])) { $_drafts_ = $context["drafts"]; } else { $_drafts_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_drafts_);
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 17
                echo "\t\t\t\t<li><a";
                if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                if (isset($context["draft"])) { $_draft_ = $context["draft"]; } else { $_draft_ = null; }
                if (isset($context["draftId"])) { $_draftId_ = $context["draftId"]; } else { $_draftId_ = null; }
                if ((($this->getAttribute($_entry_, "getClassHandle", array(), "method") == "EntryDraft") && ($this->getAttribute($_draft_, "draftId") == $_draftId_))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                if (isset($context["baseUrl"])) { $_baseUrl_ = $context["baseUrl"]; } else { $_baseUrl_ = null; }
                if (isset($context["draft"])) { $_draft_ = $context["draft"]; } else { $_draft_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((($_baseUrl_ . "drafts/") . $this->getAttribute($_draft_, "draftId"))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 18
                if (isset($context["draft"])) { $_draft_ = $context["draft"]; } else { $_draft_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_draft_, "name"), "html", null, true);
                echo "
\t\t\t\t\t<span class=\"light\">";
                // line 19
                if (isset($context["draft"])) { $_draft_ = $context["draft"]; } else { $_draft_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t("by {creator}", array("creator" => $this->getAttribute($_draft_, "creator"))), "html", null, true);
                echo "</span>
\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t</ul>
\t";
        }
        // line 24
        echo "
\t";
        // line 25
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        if ($this->getAttribute($_section_, "enableVersioning")) {
            // line 26
            echo "\t\t";
            if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            $context["versions"] = $this->getAttribute($this->getAttribute($_craft_, "entryRevisions"), "getVersionsByEntryId", array(0 => $this->getAttribute($_entry_, "id"), 1 => $this->getAttribute($_entry_, "locale")), "method");
            // line 27
            echo "\t\t";
            if (isset($context["versions"])) { $_versions_ = $context["versions"]; } else { $_versions_ = null; }
            if ($_versions_) {
                // line 28
                echo "\t\t\t<h6>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Recent Versions"), "html", null, true);
                echo "</h6>
\t\t\t<ul class=\"padded\">
\t\t\t\t";
                // line 30
                if (isset($context["versions"])) { $_versions_ = $context["versions"]; } else { $_versions_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_versions_);
                foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                    // line 31
                    echo "\t\t\t\t\t<li><a";
                    if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    if (isset($context["versionId"])) { $_versionId_ = $context["versionId"]; } else { $_versionId_ = null; }
                    if ((($this->getAttribute($_entry_, "getClassHandle", array(), "method") == "EntryVersion") && ($this->getAttribute($_version_, "versionId") == $_versionId_))) {
                        echo " class=\"sel\"";
                    }
                    echo " href=\"";
                    if (isset($context["baseUrl"])) { $_baseUrl_ = $context["baseUrl"]; } else { $_baseUrl_ = null; }
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((($_baseUrl_ . "versions/") . $this->getAttribute($_version_, "versionId"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 32
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Version {num}", array("num" => $this->getAttribute($_version_, "num"))), "html", null, true);
                    echo "
\t\t\t\t\t\t<span class=\"light\">";
                    // line 33
                    if (isset($context["version"])) { $_version_ = $context["version"]; } else { $_version_ = null; }
                    echo twig_escape_filter($this->env, \Craft\Craft::t("by {creator} on {date}", array("creator" => $this->getAttribute($_version_, "creator"), "date" => $this->getAttribute($this->getAttribute($_version_, "dateCreated"), "localeDate", array(), "method"))), "html", null, true);
                    echo "</span>
\t\t\t\t\t</a></li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t</ul>
\t\t";
            }
            // line 38
            echo "\t";
        }
        // line 39
        echo "</div>

";
        // line 41
        if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
        if (($this->getAttribute($_entry_, "getClassHandle", array(), "method") == "EntryDraft")) {
            // line 42
            echo "\t<a id=\"editdraft-btn\" class=\"btn edit icon\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Edit Draft Settings"), "html", null, true);
            echo "\"></a>
\t";
            // line 43
            \Craft\craft()->templates->includeJsResource("js/EntryDraftEditor.js");
            // line 44
            echo "\t";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            if (isset($context["revisionLabel"])) { $_revisionLabel_ = $context["revisionLabel"]; } else { $_revisionLabel_ = null; }
            \Craft\craft()->templates->includeJs((((((("new Craft.EntryDraftEditor(" . $this->getAttribute($_entry_, "draftId")) . ", \"") . twig_escape_filter($this->env, $_revisionLabel_, "js")) . "\", \"") . twig_escape_filter($this->env, $this->getAttribute($_entry_, "revisionNotes"), "js")) . "\");"));
            // line 45
            echo "\t";
            \Craft\craft()->templates->includeTranslations(
            	"Draft Name",
            	"Notes"
            );
        }
    }

    public function getTemplateName()
    {
        return "entries/_revisions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 45,  183 => 44,  181 => 43,  176 => 42,  173 => 41,  169 => 39,  166 => 38,  162 => 36,  152 => 33,  147 => 32,  133 => 31,  128 => 30,  122 => 28,  118 => 27,  113 => 26,  110 => 25,  107 => 24,  103 => 22,  93 => 19,  88 => 18,  74 => 17,  69 => 16,  63 => 14,  60 => 13,  46 => 10,  38 => 6,  35 => 5,  32 => 4,  28 => 3,  25 => 2,  19 => 1,);
    }
}
