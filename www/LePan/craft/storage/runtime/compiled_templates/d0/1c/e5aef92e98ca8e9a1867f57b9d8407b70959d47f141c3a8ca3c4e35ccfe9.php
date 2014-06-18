<?php

/* users/_userphoto */
class __TwigTemplate_d01ce5aef92e98ca8e9a1867f57b9d8407b70959d47f141c3a8ca3c4e35ccfe9 extends Craft\BaseTemplate
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
        if (isset($context["CraftPro"])) { $_CraftPro_ = $context["CraftPro"]; } else { $_CraftPro_ = null; }
        if (\Craft\craft()->getEdition() < $_CraftPro_)
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "

<div class=\"user-photo\" data-user=\"";
        // line 4
        if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_account_, "id"), "html", null, true);
        echo "\">
\t<div class=\"current-photo\" style=\"background-image: url(";
        // line 5
        if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_account_, "photo")) ? ($this->getAttribute($_account_, "photoUrl")) : (\Craft\UrlHelper::getResourceUrl("images/user.gif"))), "html", null, true);
        echo ");\"></div>
\t<div class=\"user-photo-controls\">
\t\t";
        // line 7
        if (isset($context["account"])) { $_account_ = $context["account"]; } else { $_account_ = null; }
        if ($this->getAttribute($_account_, "photo")) {
            // line 8
            echo "\t\t\t<div class=\"btn upload-photo\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Change photo"), "html", null, true);
            echo "</div>
\t\t\t<div class=\"btn delete-photo\">";
            // line 9
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete photo"), "html", null, true);
            echo "</div>
\t\t";
        } else {
            // line 11
            echo "\t\t\t<div class=\"btn upload-photo\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upload a photo"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 13
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "users/_userphoto";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  53 => 11,  43 => 8,  40 => 7,  19 => 1,  814 => 353,  810 => 351,  806 => 349,  800 => 347,  796 => 346,  793 => 345,  786 => 343,  782 => 342,  777 => 341,  774 => 340,  771 => 339,  765 => 337,  761 => 336,  755 => 334,  752 => 333,  748 => 332,  744 => 330,  733 => 328,  729 => 327,  718 => 325,  714 => 324,  703 => 322,  699 => 321,  688 => 319,  683 => 318,  680 => 317,  674 => 315,  670 => 314,  667 => 313,  661 => 311,  656 => 310,  652 => 309,  648 => 307,  642 => 305,  639 => 304,  632 => 303,  627 => 302,  624 => 301,  617 => 300,  612 => 299,  609 => 298,  603 => 296,  600 => 295,  596 => 294,  591 => 293,  588 => 292,  583 => 291,  578 => 289,  572 => 287,  568 => 285,  563 => 284,  558 => 281,  550 => 277,  546 => 275,  542 => 271,  535 => 270,  530 => 267,  526 => 265,  521 => 260,  518 => 259,  513 => 257,  508 => 254,  502 => 252,  497 => 249,  489 => 246,  484 => 241,  481 => 240,  476 => 239,  473 => 238,  470 => 237,  465 => 234,  461 => 233,  458 => 232,  453 => 230,  450 => 229,  445 => 228,  442 => 227,  435 => 224,  432 => 223,  428 => 219,  425 => 218,  419 => 214,  414 => 212,  411 => 211,  408 => 210,  404 => 209,  397 => 206,  394 => 205,  390 => 203,  386 => 200,  383 => 199,  378 => 196,  359 => 194,  354 => 193,  351 => 192,  345 => 191,  342 => 190,  338 => 188,  335 => 187,  332 => 186,  329 => 185,  325 => 183,  321 => 181,  316 => 177,  313 => 176,  309 => 174,  305 => 171,  302 => 170,  295 => 168,  287 => 163,  282 => 160,  279 => 156,  274 => 153,  272 => 152,  268 => 150,  262 => 146,  259 => 145,  252 => 143,  244 => 138,  239 => 135,  235 => 129,  230 => 126,  228 => 125,  225 => 124,  221 => 122,  217 => 120,  213 => 116,  209 => 115,  205 => 113,  199 => 105,  196 => 104,  191 => 103,  185 => 99,  181 => 93,  176 => 90,  172 => 84,  167 => 81,  163 => 79,  156 => 69,  153 => 68,  149 => 66,  147 => 65,  141 => 63,  134 => 62,  128 => 58,  125 => 57,  115 => 52,  111 => 51,  109 => 50,  106 => 48,  102 => 45,  94 => 40,  90 => 39,  83 => 35,  80 => 34,  74 => 32,  69 => 31,  66 => 30,  64 => 29,  60 => 26,  56 => 25,  54 => 24,  52 => 21,  50 => 20,  48 => 9,  46 => 18,  44 => 17,  42 => 16,  38 => 12,  34 => 5,  32 => 9,  29 => 4,  25 => 2,);
    }
}
