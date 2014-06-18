<?php

/* blueprint/_index */
class __TwigTemplate_6630bbf49ab41a3625ec779d1d2065d32f5fc919b97b248dddae49f882364e5b extends Craft\BaseTemplate
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
        $context["centered"] = true;
        // line 4
        $context["title"] = \Craft\Craft::t("Blueprint");
        // line 41
        $context["macros"] = $this;
        // line 44
        ob_start();
        // line 45
        echo "<h2>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Filter"), "html", null, true);
        echo "</h2>
<input type=\"search\" id=\"bp-search\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, \Craft\Craft::t("Search"), "html", null, true);
        echo "\">

<nav class=\"bp-nav\">
  <ul data-level=\"1\">
    <li class=\"heading\"><span>";
        // line 50
        echo twig_escape_filter($this->env, \Craft\Craft::t("Show"), "html", null, true);
        echo "</span></li>
    <li><a href=\"#all\" class=\"bp-showall\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 51
        echo twig_escape_filter($this->env, \Craft\Craft::t("All"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#sections-structure\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 52
        echo twig_escape_filter($this->env, \Craft\Craft::t("Structures"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#sections-channel\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 53
        echo twig_escape_filter($this->env, \Craft\Craft::t("Channels"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#sections-single\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 54
        echo twig_escape_filter($this->env, \Craft\Craft::t("Singles"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#globalsets\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 55
        echo twig_escape_filter($this->env, \Craft\Craft::t("Global Sets"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#assetsources\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 56
        echo twig_escape_filter($this->env, \Craft\Craft::t("Asset Sources"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#assettransforms\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 57
        echo twig_escape_filter($this->env, \Craft\Craft::t("Asset Transforms"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#categorygroups\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 58
        echo twig_escape_filter($this->env, \Craft\Craft::t("Category Groups"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#taggroups\"><span class=\"checkmark\"><span class=\"mark\"></span></span>";
        // line 59
        echo twig_escape_filter($this->env, \Craft\Craft::t("Tag Groups"), "html", null, true);
        echo "</a></li>
  </ul>
</nav>

<div class=\"small-info\">
  Shift-Click: scroll to section<br>
  Alt-Click: show this/hide others
</div>

";
        $context["sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 71
        ob_start();
        // line 72
        echo "
<div class=\"blueprint\" id=\"all\">

  <div id=\"sections\">

      ";
        // line 77
        if (isset($context["bp"])) { $_bp_ = $context["bp"]; } else { $_bp_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('craft')->groupFilter($this->getAttribute($_bp_, "sections"), "type"));
        foreach ($context['_seq'] as $context["sectionType"] => $context["sections"]) {
            // line 78
            echo "
      <section id=\"sections-";
            // line 79
            if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
            echo twig_escape_filter($this->env, $_sectionType_, "html", null, true);
            echo "\">

      <h2>";
            // line 81
            echo twig_escape_filter($this->env, \Craft\Craft::t("Sections"), "html", null, true);
            echo " / ";
            if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
            echo twig_escape_filter($this->env, $_sectionType_, "html", null, true);
            echo "s <span class=\"number\"></span></h2>


      <table id=\"sets\" class=\"data fullwidth collapsible\">
        <thead>
          <th scope=\"col\" width=\"25%\">";
            // line 86
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
          <th scope=\"col\" width=\"15%\">";
            // line 87
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
          <th scope=\"col\" width=\"20%\">";
            // line 88
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
          <th scope=\"col\" width=\"40%\">";
            // line 89
            echo twig_escape_filter($this->env, \Craft\Craft::t("Twig Variable"), "html", null, true);
            echo "</th>
        </thead>

        <tbody>

        ";
            // line 94
            if (isset($context["sections"])) { $_sections_ = $context["sections"]; } else { $_sections_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('craft')->groupFilter($_sections_, "name"));
            foreach ($context['_seq'] as $context["sectionName"] => $context["sectionsByName"]) {
                // line 95
                echo "
        <tr class=\"first level tint\">
          <th scope=\"row\"><a href=\"";
                // line 97
                if (isset($context["sectionsByName"])) { $_sectionsByName_ = $context["sectionsByName"]; } else { $_sectionsByName_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/sections/" . $this->getAttribute($this->getAttribute($_sectionsByName_, 0, array(), "array"), "id"))), "html", null, true);
                echo "\">";
                if (isset($context["sectionName"])) { $_sectionName_ = $context["sectionName"]; } else { $_sectionName_ = null; }
                echo twig_escape_filter($this->env, $_sectionName_, "html", null, true);
                echo "</a></th>
          <td>";
                // line 98
                if (isset($context["sectionType"])) { $_sectionType_ = $context["sectionType"]; } else { $_sectionType_ = null; }
                echo twig_escape_filter($this->env, $_sectionType_, "html", null, true);
                echo "</td>
          <td class=\"code\">";
                // line 99
                if (isset($context["sectionsByName"])) { $_sectionsByName_ = $context["sectionsByName"]; } else { $_sectionsByName_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_sectionsByName_, 0, array(), "array"), "handle"), "html", null, true);
                echo "</td>
          <td> </td>
        </tr>

          ";
                // line 103
                if (isset($context["sectionsByName"])) { $_sectionsByName_ = $context["sectionsByName"]; } else { $_sectionsByName_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('craft')->groupFilter($_sectionsByName_, "etName"));
                foreach ($context['_seq'] as $context["sectionEntryType"] => $context["sectionsByEntryType"]) {
                    // line 104
                    echo "
            <tr class=\"second level compact\">
              <td class=\"name\"><strong><a href=\"";
                    // line 106
                    if (isset($context["sectionsByName"])) { $_sectionsByName_ = $context["sectionsByName"]; } else { $_sectionsByName_ = null; }
                    if (isset($context["sectionsByEntryType"])) { $_sectionsByEntryType_ = $context["sectionsByEntryType"]; } else { $_sectionsByEntryType_ = null; }
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(((("settings/sections/" . $this->getAttribute($this->getAttribute($_sectionsByName_, 0, array(), "array"), "id")) . "/entrytypes/") . $this->getAttribute($this->getAttribute($_sectionsByEntryType_, 0, array(), "array"), "etId"))), "html", null, true);
                    echo "\">";
                    if (isset($context["sectionEntryType"])) { $_sectionEntryType_ = $context["sectionEntryType"]; } else { $_sectionEntryType_ = null; }
                    echo twig_escape_filter($this->env, $_sectionEntryType_, "html", null, true);
                    echo "</a></strong> <span class=\"items-num\">";
                    if (isset($context["sectionsByEntryType"])) { $_sectionsByEntryType_ = $context["sectionsByEntryType"]; } else { $_sectionsByEntryType_ = null; }
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $_sectionsByEntryType_), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("field(s)"), "html", null, true);
                    echo "</span></td>
              <td>";
                    // line 107
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Entry Type"), "html", null, true);
                    echo "</td>
              <td class=\"code\">";
                    // line 108
                    if (isset($context["sectionsByEntryType"])) { $_sectionsByEntryType_ = $context["sectionsByEntryType"]; } else { $_sectionsByEntryType_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_sectionsByEntryType_, 0, array(), "array"), "etHandle"), "html", null, true);
                    echo "</td>
              <td> </td>
            </tr>

            ";
                    // line 112
                    if (isset($context["sectionsByEntryType"])) { $_sectionsByEntryType_ = $context["sectionsByEntryType"]; } else { $_sectionsByEntryType_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_sectionsByEntryType_);
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 113
                        echo "
              <tr class=\"compact fields third level searchable\">
                  <td class=\"name\">
                    <a href=\"";
                        // line 116
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/edit/" . $this->getAttribute($_field_, "fId"))), "html", null, true);
                        echo "\">";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fName"), "html", null, true);
                        echo "</a>
                  </td>

                  <td>
                    ";
                        // line 120
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fType"), "html", null, true);
                        echo "
                  </td>

                  <td class=\"code\">
                    ";
                        // line 124
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fHandle"), "html", null, true);
                        echo "
                  </td>

                  <td class=\"code\">
                    ";
                        // line 128
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_field_, "handle"), "html", null, true);
                        echo ".";
                        if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fHandle"), "html", null, true);
                        echo "
                  </td>

                </tr>

            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sectionEntryType'], $context['sectionsByEntryType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sectionName'], $context['sectionsByName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "
      </tbody>
      </table>
    </section>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sectionType'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "
</div>


</div>

";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 152
        $context["myCss"] = ('' === $tmp = "    .compact td, .compact th { padding-top:1px !important; padding-bottom:1px !important; font-size: 90% }
    .tint th, .tint td { background-color: #fff;border-top: 1px solid gray !important;   }


    .second.level .name { padding-left: 20px !important }
    .third.level .name { padding-left: 40px !important }

    .first.level a { color: #333f4d }

    .blueprint section {padding-top: 20px; margin-bottom: 40px}
    .blueprint h2 {text-transform:capitalize; font-size: 16px; color: #da5a47}
    .blueprint .found td, .blueprint .found th { background-color: #ff8 }

    .bp-nav .hidden-target { color: gray !important}

    .small-info {
      font-size: 85%;
      color: #222;
      padding: 5px;
      background:rgb(255,255,200);
      margin:10px 0;
    }

    .items-num {
      display: inline-block;
      background-color: lightgray;
      color: white;
      border-radius: 10px;
      padding: 0px 4px;
      text-align:center;
      font-size: 80%;
      min-width: 10px;
      font-weight: normal;
    }

    .bp-nav .checkmark {
      display:block;
      float:left;
      width: 15px;
      margin-right:5px;
      background-color: #eee;
      background-colorx: rgb(0, 176, 7);

      border-radius: 10px;
      height: 10px;
      padding: 1px;
      border: 1px solid #ddd;

      box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 2px inset;
    }

    .bp-nav .mark {
      display:block;
      width: 10px;
      margin-right:5px;
      background-color:rgb(0, 176, 7);
      border-radius: 10px;
      height: 10px;
      margin-left:5px;

      -webkit-transition: all 0.05s;
      transition: all 0.05s;
    }

    .bp-nav .hidden-target .mark {
        margin-left:0;
        background-color: #aaa;
    }
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 222
        if (isset($context["myCss"])) { $_myCss_ = $context["myCss"]; } else { $_myCss_ = null; }
        \Craft\craft()->templates->includeCss($_myCss_);
        // line 225
        $context["js"] = ('' === $tmp = "
    \$(function() {

    // INIT from stored settings
    var hidden = [];
    try { hidden = JSON.parse(localStorage.getItem('bp.hidden'));} catch(e) {}
    \$(\".bp-nav a\").each(function() {
      var target = \$(this).attr('href');
      if (\$.inArray(target, hidden) > -1) {
        \$(this).addClass('hidden-target');
        if (target !='#all') { \$(target).hide(); }
      }
    });

    // SHOW section, respond to click
    \$(\".bp-nav a\").click(function (e) {
      // var target = '#' + \$(this).data('key');
      e.preventDefault();
      var target = \$(this).attr('href');
      // SHIFT-CLICK scroll to target
      if (e.shiftKey) {

         \$('body').animate({
            scrollTop: \$(target).offset().top
        }, 300);

        return;
      }

      if (target == '#all') {
        \$('.blueprint section').show();
        \$('.bp-nav a').removeClass('hidden-target');
      }
      else {

        // ALT key is pressed - show this, hide others
        if (e.altKey) {
          \$('.blueprint section').fadeOut('fast');
          \$(target).fadeIn('fast');
          \$('.bp-nav a').addClass('hidden-target');
          \$(this).removeClass('hidden-target');
        }
        else {
          \$(target).fadeToggle('fast');
          \$(this).toggleClass('hidden-target');

          // change \"all\" too
          if (\$(\".bp-nav li:gt(1) a.hidden-target\").length) {
            \$('.bp-showall').addClass('hidden-target');
          }
          else {
            \$('.bp-showall').removeClass('hidden-target');
          }
        }
      }

      // save current settings to localstorage
      var hidden = \$('.bp-nav a.hidden-target').map( function (val,i) {
        return \$(this).attr('href');
      }).get(); // use .get() to get array not \$ objects
      try { localStorage.setItem('bp.hidden', JSON.stringify(hidden)); } catch (e) {}

    });

    // SEARCH field changed
    \$('#bp-search').on('input', function() {
        filterTables(\$(this).val());
    });

    // TODO: make it smarter, display structured data?
    function filterTables(find) {

      if (!find.length) {
        \$('.blueprint tr, .blueprint table').removeClass('found').show();
        \$('.blueprint .number').text('');
        return;
      }

      \$('.blueprint tr').each(function() {
        if ( \$(this).text().toLowerCase().indexOf(find.toLowerCase()) == -1 ) {
          if (\$(this).hasClass('searchable')) {
            \$(this).hide();
          }
          \$(this).removeClass('found');
        }
        else {
          \$(this).show();
          \$(this).addClass('found');
        }
      });


      \$('.blueprint table').each(function() {
        var numberOfFound = \$(this).find('.found').length;
        if (!numberOfFound ) {
          \$(this).hide();
        }
        else {
          \$(this).show();
        }

        \$(this).parent().find('h2 .number').text('('+numberOfFound+')');

      });

    }

  });

") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 336
        if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
        \Craft\craft()->templates->includeJs($_js_);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function gettable3col($_data = null, $_url = null)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $_data,
            "url" => $_url,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "
    <table class=\"data fullwidth collapsible\">
      <thead>
        <th scope=\"col\">";
            // line 11
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
        <th scope=\"col\">";
            // line 12
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
        <th scope=\"col\">";
            // line 13
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
      </thead>


      <tbody>

      ";
            // line 19
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('craft')->groupFilter($_data_, "name"));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 20
                echo "        ";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                $context["first"] = $this->getAttribute($_values_, 0, array(), "array");
                // line 21
                echo "        <tr class=\"first level tint\">
          <th scope=\"row\" width=\"25%\"><a href=\"";
                // line 22
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(($_url_ . $this->getAttribute($_first_, "id"))), "html", null, true);
                echo "\">";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, \Craft\Craft::t($_key_), "html", null, true);
                echo "</a> <span class=\"items-num\">";
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $_values_), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, \Craft\Craft::t("field(s)"), "html", null, true);
                echo "</span></th>
          <td width=\"35%\">";
                // line 23
                if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
                if ($this->getAttribute($_first_, "type", array(), "any", true, true)) {
                    if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_first_, "type"), "html", null, true);
                }
                echo "</td>
          <td width=\"40%\">";
                // line 24
                if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
                if ($this->getAttribute($_first_, "handle", array(), "any", true, true)) {
                    if (isset($context["first"])) { $_first_ = $context["first"]; } else { $_first_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_first_, "handle"), "html", null, true);
                }
                echo "</td>
        </tr>

        ";
                // line 27
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_values_);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 28
                    echo "          <tr class=\"compact fields second level searchable\">
              <td class=\"name\"><a href=\"";
                    // line 29
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/edit/" . $this->getAttribute($_field_, "fId"))), "html", null, true);
                    echo "\">";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fName"), "html", null, true);
                    echo "</a></td>
              <td>";
                    // line 30
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fType"), "html", null, true);
                    echo "</td>
              <td class=\"code\">";
                    // line 31
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "fHandle"), "html", null, true);
                    echo "</td>
          </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
      </tbody>
    </table>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "blueprint/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 35,  597 => 34,  587 => 31,  582 => 30,  574 => 29,  571 => 28,  566 => 27,  556 => 24,  548 => 23,  534 => 22,  531 => 21,  527 => 20,  522 => 19,  513 => 13,  509 => 12,  505 => 11,  500 => 8,  488 => 7,  482 => 336,  371 => 225,  368 => 222,  298 => 152,  289 => 143,  278 => 137,  272 => 136,  265 => 134,  249 => 128,  241 => 124,  233 => 120,  222 => 116,  217 => 113,  212 => 112,  204 => 108,  200 => 107,  186 => 106,  182 => 104,  177 => 103,  169 => 99,  164 => 98,  156 => 97,  152 => 95,  147 => 94,  139 => 89,  135 => 88,  131 => 87,  127 => 86,  116 => 81,  110 => 79,  107 => 78,  102 => 77,  95 => 72,  93 => 71,  80 => 59,  76 => 58,  72 => 57,  68 => 56,  64 => 55,  60 => 54,  56 => 53,  52 => 52,  48 => 51,  44 => 50,  37 => 46,  32 => 45,  30 => 44,  28 => 41,  26 => 4,  24 => 2,);
    }
}
