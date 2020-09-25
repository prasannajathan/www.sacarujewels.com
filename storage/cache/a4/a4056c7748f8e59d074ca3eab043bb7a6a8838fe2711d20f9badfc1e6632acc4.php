<?php

/* journal3/template/journal3/manufacturer_grid.twig */
class __TwigTemplate_0b4d3dfb095c5ffcc752f23e26dd2964701ee8908bba4ec76612ab5644c3e65f extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["manufacturers"]) ? $context["manufacturers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 2
            echo "  <div class=\"manufacturer-layout";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["manufacturer"], "classes", array())), "method");
            echo "\">
    <div class=\"manufacturer-thumb\">
      <div class=\"image\">
        <a href=\"";
            // line 5
            echo $this->getAttribute($context["manufacturer"], "href", array());
            echo "\">";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                // line 7
                echo "            <img src=\"";
                echo (isset($context["dummy_image"]) ? $context["dummy_image"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["manufacturer"], "thumb", array());
                echo "\"";
                if ($this->getAttribute($context["manufacturer"], "thumb2x", array())) {
                    echo "data-srcset=\"";
                    echo $this->getAttribute($context["manufacturer"], "thumb", array());
                    echo " 1x,";
                    echo $this->getAttribute($context["manufacturer"], "thumb2x", array());
                    echo " 2x\"";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "\" class=\"lazyload\"/>";
            } else {
                // line 9
                echo "            <img src=\"";
                echo $this->getAttribute($context["manufacturer"], "thumb", array());
                echo "\"";
                if ($this->getAttribute($context["manufacturer"], "thumb2x", array())) {
                    echo " srcset=\"";
                    echo $this->getAttribute($context["manufacturer"], "thumb", array());
                    echo " 1x,";
                    echo $this->getAttribute($context["manufacturer"], "thumb2x", array());
                    echo " 2x\"";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "\"/>";
            }
            // line 11
            echo "        </a>
      </div>

      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 15
            echo $this->getAttribute($context["manufacturer"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["manufacturer"], "name", array());
            echo "</a></div>
      </div>
    </div>
  </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/manufacturer_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  79 => 11,  58 => 9,  35 => 7,  33 => 6,  30 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% for manufacturer in manufacturers %}*/
/*   <div class="manufacturer-layout {{ j3.classes(manufacturer.classes) }}">*/
/*     <div class="manufacturer-thumb">*/
/*       <div class="image">*/
/*         <a href="{{ manufacturer.href }}">*/
/*           {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*             <img src="{{ dummy_image }}" data-src="{{ manufacturer.thumb }}" {% if manufacturer.thumb2x %}data-srcset="{{ manufacturer.thumb }} 1x, {{ manufacturer.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ manufacturer.name }}" title="{{ manufacturer.name }}" class="lazyload"/>*/
/*           {% else %}*/
/*             <img src="{{ manufacturer.thumb }}" {% if manufacturer.thumb2x %} srcset="{{ manufacturer.thumb }} 1x, {{ manufacturer.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ manufacturer.name }}" title="{{ manufacturer.name }}"/>*/
/*           {% endif %}*/
/*         </a>*/
/*       </div>*/
/* */
/*       <div class="caption">*/
/*         <div class="name"><a href="{{ manufacturer.href }}">{{ manufacturer.name }}</a></div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
/* */
