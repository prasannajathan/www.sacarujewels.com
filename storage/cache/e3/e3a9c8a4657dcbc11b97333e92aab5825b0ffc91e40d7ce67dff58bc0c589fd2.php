<?php

/* journal3/template/common/home.twig */
class __TwigTemplate_75606be0377ea65a834aec289c86de4b9d014b25748b2544d9a22509f315f9d9 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        // line 2
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "top"), "method");
        // line 3
        if (((((isset($context["content_top"]) ? $context["content_top"] : null) || (isset($context["content_bottom"]) ? $context["content_bottom"] : null)) || (isset($context["column_left"]) ? $context["column_left"] : null)) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 4
            echo "<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
            // line 5
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            // line 6
            if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 7
                $context["class"] = "col-sm-6";
            } elseif ((            // line 8
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 9
                $context["class"] = "col-sm-9";
            } else {
                // line 11
                $context["class"] = "col-sm-12";
            }
            // line 13
            if (((isset($context["content_top"]) ? $context["content_top"] : null) || (isset($context["content_bottom"]) ? $context["content_bottom"] : null))) {
                // line 14
                echo "    <div id=\"content\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">";
                echo (isset($context["content_top"]) ? $context["content_top"] : null);
                echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
                echo "</div>";
            }
            // line 16
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "</div>
</div>";
        }
        // line 19
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/seo/rich_snippets"), "method");
        // line 20
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  57 => 19,  52 => 16,  44 => 14,  42 => 13,  39 => 11,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ j3.loadController('journal3/layout', 'top') }}*/
/* {% if content_top or content_bottom or column_left or column_right %}*/
/* <div id="common-home" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     {% if content_top or content_bottom %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}{{ content_bottom }}</div>*/
/*     {% endif %}*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/seo/rich_snippets') }}*/
/* {{ footer }}*/
/* */
