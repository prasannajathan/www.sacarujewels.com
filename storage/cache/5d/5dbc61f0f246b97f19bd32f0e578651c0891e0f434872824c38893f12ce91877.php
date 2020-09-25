<?php

/* journal3/template/journal3/module/catalog.twig */
class __TwigTemplate_9f9b28437d6f3c132810536a18e69f5f50a38c4028c23829fa4189308809186e extends Twig_Template
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
        // line 34
        $context["self"] = $this;
        // line 35
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">";
        // line 36
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 37
            echo "    <h3 class=\"title module-title\">";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h3>";
        }
        // line 39
        echo "  <div class=\"module-body\">";
        // line 40
        if ((isset($context["carousel"]) ? $context["carousel"] : null)) {
            // line 41
            echo "      <div class=\"swiper\" data-items-per-row='";
            echo twig_jsonencode_filter((isset($context["itemsPerRow"]) ? $context["itemsPerRow"] : null), twig_constant("JSON_FORCE_OBJECT"));
            echo "' data-options='";
            echo twig_jsonencode_filter((isset($context["carouselOptions"]) ? $context["carouselOptions"] : null));
            echo "'>
        <div class=\"swiper-container\"";
            // line 42
            if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                echo "dir=\"rtl\"";
            }
            echo ">
          <div class=\"swiper-wrapper\">";
            // line 44
            echo $context["self"]->getrenderCatalog((isset($context["j3"]) ? $context["j3"] : null), $context);
            echo "
          </div>
        </div>
        <div class=\"swiper-buttons\">
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>";
        } else {
            // line 54
            echo $context["self"]->getrenderCatalog((isset($context["j3"]) ? $context["j3"] : null), $context);
        }
        // line 56
        echo "  </div>
</div>

";
    }

    // line 1
    public function getrenderCatalog($__j3__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "j3" => $__j3__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["self"] = $this;
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "    <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
      <div class=\"item-content\">
        <a href=\"";
                // line 6
                echo $this->getAttribute($context["item"], "href", array());
                echo "\" class=\"catalog-title\">";
                echo $this->getAttribute($context["item"], "name", array());
                echo "</a>
        <div class=\"item-assets image-left\">";
                // line 8
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 9
                    echo "            <a href=\"";
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\" class=\"catalog-image\">";
                    // line 10
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                        // line 11
                        echo "                <img src=\"";
                        echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "dummy_image", array());
                        echo "\" data-src=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo "\" data-image=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo "\"";
                        if ($this->getAttribute($context["item"], "image2x", array())) {
                            echo "data-srcset=\"";
                            echo $this->getAttribute($context["item"], "image", array());
                            echo " 1x,";
                            echo $this->getAttribute($context["item"], "image2x", array());
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "\" width=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "height", array());
                        echo "\" class=\"lazyload\"/>";
                    } else {
                        // line 13
                        echo "                <img src=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo "\" data-image=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo "\"";
                        if ($this->getAttribute($context["item"], "image2x", array())) {
                            echo "srcset=\"";
                            echo $this->getAttribute($context["item"], "image", array());
                            echo " 1x,";
                            echo $this->getAttribute($context["item"], "image2x", array());
                            echo " 2x\" data-image2x=\"";
                            echo $this->getAttribute($context["item"], "image2x", array());
                            echo "\"";
                        }
                        echo " alt=\"";
                        echo $this->getAttribute($context["item"], "name", array());
                        echo "\" width=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "imageDimensions", array()), "height", array());
                        echo "\"/>";
                    }
                    // line 15
                    echo "            </a>";
                }
                // line 17
                echo "          <div class=\"subitems\">";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                    // line 19
                    echo "              <div class=\"subitem\" data-image=\"";
                    echo $this->getAttribute($context["sub_item"], "image", array());
                    echo "\"";
                    if ($this->getAttribute($context["item"], "image2x", array())) {
                        echo "data-image2x=\"";
                        echo $this->getAttribute($context["sub_item"], "image", array());
                        echo " 1x,";
                        echo $this->getAttribute($context["sub_item"], "image2x", array());
                        echo " 2x\"";
                    }
                    echo ">
                <a href=\"";
                    // line 20
                    echo $this->getAttribute($context["sub_item"], "href", array());
                    echo "\"><span>";
                    echo $this->getAttribute($context["sub_item"], "name", array());
                    echo "</span></a>
              </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                if (($this->getAttribute($context["item"], "total", array()) > twig_length_filter($this->env, $this->getAttribute($context["item"], "items", array())))) {
                    // line 24
                    echo "              <div class=\"subitem view-more\">
                <a href=\"";
                    // line 25
                    echo $this->getAttribute($context["item"], "href", array());
                    echo "\"><span>";
                    echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "viewMoreText", array());
                    echo "</span></a>
              </div>";
                }
                // line 28
                echo "          </div>
        </div>
      </div>
    </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 28,  193 => 25,  190 => 24,  188 => 23,  178 => 20,  165 => 19,  161 => 18,  159 => 17,  156 => 15,  133 => 13,  110 => 11,  108 => 10,  104 => 9,  102 => 8,  96 => 6,  90 => 4,  86 => 3,  84 => 2,  71 => 1,  64 => 56,  61 => 54,  49 => 44,  43 => 42,  36 => 41,  34 => 40,  32 => 39,  27 => 37,  25 => 36,  21 => 35,  19 => 34,);
    }
}
/* {% macro renderCatalog(j3, context) %}*/
/*   {% import _self as self %}*/
/*   {% for item in context.items %}*/
/*     <div class="{{ j3.classes(item.classes) }}">*/
/*       <div class="item-content">*/
/*         <a href="{{ item.href }}" class="catalog-title">{{ item.name }}</a>*/
/*         <div class="item-assets image-left">*/
/*           {% if item.image %}*/
/*             <a href="{{ item.href }}" class="catalog-image">*/
/*               {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*                 <img src="{{ context.dummy_image }}" data-src="{{ item.image }}" data-image="{{ item.image }}" {% if item.image2x %}data-srcset="{{ item.image }} 1x, {{ item.image2x }} 2x"{% endif %} alt="{{ item.name }}" width="{{ context.imageDimensions.width }}" height="{{ context.imageDimensions.height }}" class="lazyload"/>*/
/*               {% else %}*/
/*                 <img src="{{ item.image }}" data-image="{{ item.image }}" {% if item.image2x %}srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" data-image2x="{{ item.image2x }}"{% endif %} alt="{{ item.name }}" width="{{ context.imageDimensions.width }}" height="{{ context.imageDimensions.height }}"/>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% endif %}*/
/*           <div class="subitems">*/
/*             {% for sub_item in item.items %}*/
/*               <div class="subitem" data-image="{{ sub_item.image }}" {% if item.image2x %}data-image2x="{{ sub_item.image }} 1x, {{ sub_item.image2x }} 2x"{% endif %}>*/
/*                 <a href="{{ sub_item.href }}"><span>{{ sub_item.name }}</span></a>*/
/*               </div>*/
/*             {% endfor %}*/
/*             {% if item.total > item.items|length %}*/
/*               <div class="subitem view-more">*/
/*                 <a href="{{ item.href }}"><span>{{ context.viewMoreText }}</span></a>*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   {% if title %}*/
/*     <h3 class="title module-title">{{ title }}</h3>*/
/*   {% endif %}*/
/*   <div class="module-body">*/
/*     {% if carousel %}*/
/*       <div class="swiper" data-items-per-row='{{ itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}' data-options='{{ carouselOptions|json_encode }}'>*/
/*         <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*           <div class="swiper-wrapper">*/
/*             {{ self.renderCatalog(j3, _context) }}*/
/*           </div>*/
/*         </div>*/
/*         <div class="swiper-buttons">*/
/*           <div class="swiper-button-prev"></div>*/
/*           <div class="swiper-button-next"></div>*/
/*         </div>*/
/*         <div class="swiper-pagination"></div>*/
/*       </div>*/
/*     {% else %}*/
/*       {{ self.renderCatalog(j3, _context) }}*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
/* */
