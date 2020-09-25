<?php

/* journal3/template/journal3/module/newsletter.twig */
class __TwigTemplate_797da4500a283145eab8986c814f0de6574d071f6dafd4a7d51dbe93b977c935 extends Twig_Template
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
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">";
        // line 2
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 3
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>";
        }
        // line 5
        echo "  <div class=\"module-body\">";
        // line 6
        if ((isset($context["text"]) ? $context["text"] : null)) {
            // line 7
            echo "      <div class=\"newsletter-text\">";
            echo (isset($context["text"]) ? $context["text"] : null);
            echo "</div>";
        }
        // line 9
        echo "    <div class=\"newsletter-form\">
      <form action=\"";
        // line 10
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"email\" placeholder=\"";
        // line 12
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" class=\"form-control newsletter-email\"/>
          <span class=\"input-group-btn\">
              <button class=\"btn btn-primary\"";
        // line 14
        if ((((isset($context["buttonType"]) ? $context["buttonType"] : null) == "icon") && (isset($context["tooltipStatus"]) ? $context["tooltipStatus"] : null))) {
            echo "data-toggle=\"tooltip\" data-tooltip-class=\"newsletter-tooltip-";
            echo (isset($context["module_id"]) ? $context["module_id"] : null);
            echo "\" data-placement=\"";
            echo (isset($context["tooltipPosition"]) ? $context["tooltipPosition"] : null);
            echo "\" title=\"";
            echo (isset($context["tooltipText"]) ? $context["tooltipText"] : null);
            echo "\"";
        }
        echo " data-loading-text=\"<span>";
        echo (isset($context["buttonText"]) ? $context["buttonText"] : null);
        echo "</span>\"><span>";
        echo (isset($context["buttonText"]) ? $context["buttonText"] : null);
        echo "</span></button>
            </span>
        </div>";
        // line 17
        if ((isset($context["captcha"]) ? $context["captcha"] : null)) {
            // line 18
            echo "        <div class=\"input-captcha\">";
            echo (isset($context["captcha"]) ? $context["captcha"] : null);
            echo "</div>";
        }
        // line 20
        if ((isset($context["agree_data"]) ? $context["agree_data"] : null)) {
            // line 21
            echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"agree\" value=\"1\"/>";
            // line 24
            echo $this->getAttribute((isset($context["agree_data"]) ? $context["agree_data"] : null), "text", array());
            echo "
            </label>
          </div>";
        }
        // line 28
        echo "      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  82 => 24,  78 => 21,  76 => 20,  71 => 18,  69 => 17,  52 => 14,  47 => 12,  42 => 10,  39 => 9,  34 => 7,  32 => 6,  30 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*     {% if text %}*/
/*       <div class="newsletter-text">{{ text }}</div>*/
/*     {% endif %}*/
/*     <div class="newsletter-form">*/
/*       <form action="{{ action }}">*/
/*         <div class="input-group">*/
/*           <input type="text" name="email" placeholder="{{ placeholder }}" class="form-control newsletter-email"/>*/
/*           <span class="input-group-btn">*/
/*               <button class="btn btn-primary" {% if (buttonType == "icon") and (tooltipStatus) %}data-toggle="tooltip" data-tooltip-class="newsletter-tooltip-{{ module_id }}" data-placement="{{ tooltipPosition }}" title="{{ tooltipText }}"{% endif %} data-loading-text="<span>{{ buttonText }}</span>"><span>{{ buttonText }}</span></button>*/
/*             </span>*/
/*         </div>*/
/*         {% if captcha %}*/
/*         <div class="input-captcha">{{ captcha }}</div>*/
/*         {% endif %}*/
/*         {% if agree_data %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="agree" value="1"/>*/
/*               {{ agree_data.text }}*/
/*             </label>*/
/*           </div>*/
/*         {% endif %}*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
