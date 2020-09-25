<?php

/* journal3/template/journal3/layout.twig */
class __TwigTemplate_2dee772a8cce938e6cbe85f31b56281a1509764efe6277f0224a8b0eb6b1ec2c extends Twig_Template
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
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 2
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["grid_classes"]) ? $context["grid_classes"] : null)), "method");
            echo "\">";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["grid_row"]) {
                // line 4
                echo "      <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["grid_row"], "classes", array())), "method");
                echo "\">";
                // line 5
                if ($this->getAttribute($context["grid_row"], "waveStatus", array())) {
                    // line 6
                    echo "          <svg viewBox=\"0 0 100 20\" class=\"wave wave-top\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25";
                    // line 7
                    echo $this->getAttribute($context["grid_row"], "waveDirection", array());
                    echo " 55 10 T 100 10 V 30 Z\"></path>
          </svg>";
                }
                // line 10
                echo "        <div class=\"grid-cols\">";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["grid_row"], "columns", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["grid_column"]) {
                    // line 12
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["grid_column"], "classes", array())), "method");
                    echo "\">
              <div class=\"grid-items\">";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["grid_column"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["grid_item"]) {
                        // line 15
                        echo "                  <div class=\"";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["grid_item"], "classes", array())), "method");
                        echo "\">";
                        // line 16
                        echo $this->getAttribute($context["grid_item"], "item", array());
                        echo "
                  </div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "              </div>
            </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        </div>";
                // line 23
                if ($this->getAttribute($context["grid_row"], "wave2Status", array())) {
                    // line 24
                    echo "          <svg viewBox=\"0 0 100 20\" class=\"wave wave-bottom\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25";
                    // line 25
                    echo $this->getAttribute($context["grid_row"], "wave2Direction", array());
                    echo " 55 10 T 100 10 V 30 Z\"></path>
          </svg>";
                }
                // line 28
                if (($this->getAttribute($context["grid_row"], "videoBgStatus", array()) && $this->getAttribute($context["grid_row"], "videoBg", array()))) {
                    // line 29
                    echo "          <div class=\"video-row\">
            <video class=\"video-bg\" loop muted";
                    // line 30
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "desktop"), "method")) {
                        echo "autoplay";
                    }
                    if (($this->getAttribute($context["grid_row"], "videoInline", array()) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "android"), "method"))) {
                        echo "autoplay";
                    }
                    if (($this->getAttribute($context["grid_row"], "videoInline", array()) && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "ios"), "method"))) {
                        echo "playsinline";
                    }
                    echo " data-src=\"";
                    echo $this->getAttribute($context["grid_row"], "videoBg", array());
                    echo "\"></video>
          </div>";
                }
                // line 33
                echo "      </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grid_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </div>";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  109 => 33,  94 => 30,  91 => 29,  89 => 28,  84 => 25,  81 => 24,  79 => 23,  77 => 22,  70 => 19,  62 => 16,  58 => 15,  54 => 14,  49 => 12,  45 => 11,  43 => 10,  38 => 7,  35 => 6,  33 => 5,  29 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if rows %}*/
/*   <div class="{{ j3.classes(grid_classes) }}">*/
/*     {% for grid_row in rows %}*/
/*       <div class="{{ j3.classes(grid_row.classes) }}">*/
/*         {% if grid_row.waveStatus %}*/
/*           <svg viewBox="0 0 100 20" class="wave wave-top" preserveAspectRatio="none">*/
/*             <path fill="white" d="M 0 30 V 10 Q 25 {{ grid_row.waveDirection }} 55 10 T 100 10 V 30 Z"></path>*/
/*           </svg>*/
/*         {% endif %}*/
/*         <div class="grid-cols">*/
/*           {% for grid_column in grid_row.columns %}*/
/*             <div class="{{ j3.classes(grid_column.classes) }}">*/
/*               <div class="grid-items">*/
/*                 {% for grid_item in grid_column.items %}*/
/*                   <div class="{{ j3.classes(grid_item.classes) }}">*/
/*                     {{ grid_item.item }}*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% if grid_row.wave2Status %}*/
/*           <svg viewBox="0 0 100 20" class="wave wave-bottom" preserveAspectRatio="none">*/
/*             <path fill="white" d="M 0 30 V 10 Q 25 {{ grid_row.wave2Direction }} 55 10 T 100 10 V 30 Z"></path>*/
/*           </svg>*/
/*         {% endif %}*/
/*         {% if grid_row.videoBgStatus and grid_row.videoBg %}*/
/*           <div class="video-row">*/
/*             <video class="video-bg" loop muted {% if j3.document.hasClass('desktop') %}autoplay{% endif %} {% if grid_row.videoInline and j3.document.hasClass('android') %}autoplay{% endif %} {% if grid_row.videoInline and j3.document.hasClass('ios') %}playsinline{% endif %} data-src="{{ grid_row.videoBg }}"></video>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
