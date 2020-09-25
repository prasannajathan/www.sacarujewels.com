<?php

/* journal3/journal3.twig */
class __TwigTemplate_e00216138035a71a41e4fbd133937b7d8b7bdf0da6bbf601aa91661db2f961af extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page\">
    <div class=\"j-header\">
      <div class=\"j-logo\"><span>";
        // line 5
        echo ((array_key_exists("j3", $context)) ? (twig_constant("JOURNAL3_VERSION")) : (""));
        echo "</span></div>
      <div class=\"j-title\"></div>
      <div class=\"j-buttons\"><a class=\"button fs-button\"><i class=\"icon icon-fullscreen\"></i></a></div>
    </div>
    <div class=\"j-content\">
      <div class=\"loading\">
        <i class=\"fa fa-spin icon-uniE92F\"></i>
        <span>Loading...</span>
      </div>
    </div>
  </div>
</div>";
        // line 17
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/journal3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 17,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page">*/
/*     <div class="j-header">*/
/*       <div class="j-logo"><span>{{ j3 is defined ? constant('JOURNAL3_VERSION') : '' }}</span></div>*/
/*       <div class="j-title"></div>*/
/*       <div class="j-buttons"><a class="button fs-button"><i class="icon icon-fullscreen"></i></a></div>*/
/*     </div>*/
/*     <div class="j-content">*/
/*       <div class="loading">*/
/*         <i class="fa fa-spin icon-uniE92F"></i>*/
/*         <span>Loading...</span>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
