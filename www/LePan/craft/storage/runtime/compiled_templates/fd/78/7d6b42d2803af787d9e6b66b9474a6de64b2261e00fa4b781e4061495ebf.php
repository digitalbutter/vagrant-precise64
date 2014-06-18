<?php

/* _includes/permissions */
class __TwigTemplate_fd787d6b42d2803af787d9e6b66b9474a6de64b2261e00fa4b781e4061495ebf extends Craft\BaseTemplate
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
";
        // line 32
        echo "
";
        // line 33
        if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_craft_, "userPermissions"), "getAllPermissions", array(), "method"));
        foreach ($context['_seq'] as $context["category"] => $context["catPermissions"]) {
            // line 34
            echo "\t<h3>";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo twig_escape_filter($this->env, $_category_, "html", null, true);
            echo "</h3>

\t";
            // line 36
            if (isset($context["catPermissions"])) { $_catPermissions_ = $context["catPermissions"]; } else { $_catPermissions_ = null; }
            echo $this->getAttribute($this, "permissionList", array(0 => $context, 1 => $_catPermissions_), "method");
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['catPermissions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 3
    public function getpermissionList($_context = null, $_permissions = null, $_id = null, $_hidden = null)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $_context,
            "permissions" => $_permissions,
            "id" => $_id,
            "hidden" => $_hidden,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "\t";
            $context["__internal_4d71090e41c4f6e9c0f6e4869683553bf70e52667d865d088c487a97bc5ee53f"] = $this->env->loadTemplate("_includes/forms");
            // line 5
            echo "\t<ul";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if ($_id_) {
                echo " id=\"";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->replaceFilter($_id_, ":", "-"), "html", null, true);
                echo "\"";
            }
            echo " class=\"indent";
            if (isset($context["hidden"])) { $_hidden_ = $context["hidden"]; } else { $_hidden_ = null; }
            if ($_hidden_) {
                echo " hidden";
            }
            echo "\">
\t\t";
            // line 6
            if (isset($context["permissions"])) { $_permissions_ = $context["permissions"]; } else { $_permissions_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_permissions_);
            foreach ($context['_seq'] as $context["permissionName"] => $context["props"]) {
                // line 7
                echo "\t\t\t";
                if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                if (isset($context["permissionName"])) { $_permissionName_ = $context["permissionName"]; } else { $_permissionName_ = null; }
                $context["isInGroupPermissions"] = ($this->getAttribute($_context_, "groupPermissions", array(), "any", true, true) && twig_in_filter(twig_lower_filter($this->env, $_permissionName_), $this->getAttribute($_context_, "groupPermissions")));
                // line 8
                echo "\t\t\t";
                if (isset($context["isInGroupPermissions"])) { $_isInGroupPermissions_ = $context["isInGroupPermissions"]; } else { $_isInGroupPermissions_ = null; }
                if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                if (isset($context["permissionName"])) { $_permissionName_ = $context["permissionName"]; } else { $_permissionName_ = null; }
                if (isset($context["craft"])) { $_craft_ = $context["craft"]; } else { $_craft_ = null; }
                $context["checked"] = (($_isInGroupPermissions_) ? (true) : ((((!twig_test_empty($this->getAttribute($_context_, "userOrGroup")))) ? ((($this->getAttribute($this->getAttribute($_context_, "userOrGroup"), "hasErrors")) ? (twig_in_filter($_permissionName_, $this->getAttribute($this->getAttribute($_craft_, "request"), "getPost", array(0 => "permissions", 1 => array()), "method"))) : ($this->getAttribute($this->getAttribute($_context_, "userOrGroup"), "can", array(0 => $_permissionName_), "method")))) : (false))));
                // line 15
                echo "\t\t\t";
                if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                $context["hasNestedPermissions"] = ($this->getAttribute($_props_, "nested", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_props_, "nested"))));
                // line 16
                echo "\t\t\t<li>
\t\t\t\t";
                // line 17
                if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                if (isset($context["permissionName"])) { $_permissionName_ = $context["permissionName"]; } else { $_permissionName_ = null; }
                if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
                if (isset($context["isInGroupPermissions"])) { $_isInGroupPermissions_ = $context["isInGroupPermissions"]; } else { $_isInGroupPermissions_ = null; }
                if (isset($context["hasNestedPermissions"])) { $_hasNestedPermissions_ = $context["hasNestedPermissions"]; } else { $_hasNestedPermissions_ = null; }
                echo $context["__internal_4d71090e41c4f6e9c0f6e4869683553bf70e52667d865d088c487a97bc5ee53f"]->getcheckbox(array("label" => $this->getAttribute($_props_, "label"), "name" => "permissions[]", "value" => $_permissionName_, "checked" => $_checked_, "disabled" => $_isInGroupPermissions_, "toggle" => (($_hasNestedPermissions_) ? (($this->env->getExtension('craft')->replaceFilter($_permissionName_, ":", "-") . "-nested")) : (null))));
                // line 24
                echo "
\t\t\t\t";
                // line 25
                if (isset($context["hasNestedPermissions"])) { $_hasNestedPermissions_ = $context["hasNestedPermissions"]; } else { $_hasNestedPermissions_ = null; }
                if ($_hasNestedPermissions_) {
                    // line 26
                    echo "\t\t\t\t\t";
                    if (isset($context["context"])) { $_context_ = $context["context"]; } else { $_context_ = null; }
                    if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                    if (isset($context["permissionName"])) { $_permissionName_ = $context["permissionName"]; } else { $_permissionName_ = null; }
                    if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
                    echo $this->getAttribute($this, "permissionList", array(0 => $_context_, 1 => $this->getAttribute($_props_, "nested"), 2 => ($_permissionName_ . "-nested"), 3 => (!$_checked_)), "method");
                    echo "
\t\t\t\t";
                }
                // line 28
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['permissionName'], $context['props'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t</ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_includes/permissions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  134 => 28,  124 => 26,  121 => 25,  111 => 17,  97 => 8,  92 => 7,  87 => 6,  71 => 5,  68 => 4,  54 => 3,  43 => 36,  31 => 33,  28 => 32,  25 => 2,  19 => 1,  118 => 24,  115 => 71,  108 => 16,  104 => 15,  101 => 62,  96 => 60,  90 => 56,  86 => 49,  82 => 47,  78 => 37,  75 => 36,  67 => 35,  62 => 32,  60 => 31,  56 => 27,  53 => 25,  50 => 24,  48 => 21,  42 => 17,  38 => 16,  36 => 34,  34 => 12,  32 => 6,  30 => 4,  24 => 1,);
    }
}
