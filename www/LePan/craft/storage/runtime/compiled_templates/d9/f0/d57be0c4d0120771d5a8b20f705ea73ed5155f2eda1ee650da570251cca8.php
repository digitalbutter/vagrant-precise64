<?php

/* css/lepan.css */
class __TwigTemplate_d9f0d57be0c4d0120771d5a8b20f705ea73ed5155f2eda1ee650da570251cca8 extends Craft\BaseTemplate
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
        echo "
div.wine-details {
\tdisplay: inline-block;
\tfont-size: 13px;
\tpadding-left: 5px;
\tpadding-right: 5px;
\tmargin-right: -5px;
\theight: 50px;
\tvertical-align: top;
\ttext-align: center;
}

div.wine-details>p>strong {
\tfont-size: 14px;
\tcolor: #70e84c;
\tmargin-bottom: 5px;
}

div.wine-details>p {
\tmargin: 0px;
}

div.note-details {
\tdisplay: inline-block;
\tfont-size: 13px;
\theight: 50px;
\tmargin-right: -5px;
}

div.notes-row .note-details {
\twidth: 25%;
}

div.header-row {
\twidth: 100%;
\tborder: solid 1px #d1cccc;
\tmargin-bottom: 3px;
}

div.second-col>div.wine-details {
\tborder-left: solid 1px #d1cccc;
\twidth: 33%;
\ttext-align: left;
}

div.notes-row {
  width: 100%;
  border: solid 1px #d1cccc;
}

div.notes-inner-row {
\twidth: 100%;
  \tborder: solid 1px #d1cccc;
  \theight: 50px;
  \tmargin-bottom: 3px;
}

.inner-row {
\twidth: 100%;
}

p {
\tmargin: 5px;
}

html, body {
\theight : 100%;
}

#container {
\theight: 100%;
\tmin-height: 100%;
}

#content {
\tpadding-bottom:150px;
\toverflow: auto;
}

#footer {
\tposition: relative;
  \tmargin-top: -150px; /* negative value of footer height */
  \theight: 150px;
  \tclear:both;
  \tpadding-top:20px;
}

img.star-img {
\theight: 20px;
\twidth: 20px;
}

span.note-label {
\tfont-weight: bold;
\tdisplay: block;
\tborder-bottom: 1px solid #d1cccc;
\tpadding-right: 5px;
\tpadding-left: 5px;
}

span.note-value {
\tpadding-right: 5px;
\tpadding-left: 5px;
\tcolor: #777777;
}

.comments {
\twidth: 100%;
\tcolor: #777777;
}

.note-select {
\tborder-right: 1px solid #d1cccc;
\theight: 100%;
\tdisplay: inline-block;
}

div.second-col>div.note-details
{
\tborder-left: 1px solid #d1cccc;
\tborder-right: 1px solid #d1cccc;
}

div.notes-row>div.second-col {
\tpadding-right: 0px;
}

div.notes-row>div.first-col {
\tpadding-left: 0px;
}

div.first-col>div.note-details {
\tborder-right: 1px solid #d1cccc;
}";
    }

    public function getTemplateName()
    {
        return "css/lepan.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
