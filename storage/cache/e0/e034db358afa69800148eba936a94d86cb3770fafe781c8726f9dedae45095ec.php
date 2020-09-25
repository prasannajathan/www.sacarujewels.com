<?php

/* journal3/template/journal3/side_products.twig */
class __TwigTemplate_eb51bbc229022d1474ee6347716cfe1c260af64e37b69824f20a5939f222db21 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            $context["classes"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => array("out-of-stock" =>  !$this->getAttribute(            // line 3
$context["product"], "quantity", array()), "has-zero-price" =>  !$this->getAttribute(            // line 4
$context["product"], "price_value", array()))), "method");
            // line 6
            echo "  <div class=\"product-layout";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["product"], "classes", array())), "method");
            echo (isset($context["classes"]) ? $context["classes"] : null);
            echo "\">
    <div class=\"side-product\">
      <div class=\"image\">
        <a href=\"";
            // line 9
            echo $this->getAttribute($context["product"], "href", array());
            echo "\" class=\"product-img\">";
            // line 10
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                // line 11
                echo "            <img src=\"";
                echo (isset($context["dummy_image"]) ? $context["dummy_image"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\"";
                if ($this->getAttribute($context["product"], "thumb2x", array())) {
                    echo "data-srcset=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo " 1x,";
                    echo $this->getAttribute($context["product"], "thumb2x", array());
                    echo " 2x\"";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-first lazyload\"/>";
            } else {
                // line 13
                echo "            <img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\"";
                if ($this->getAttribute($context["product"], "thumb2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo " 1x,";
                    echo $this->getAttribute($context["product"], "thumb2x", array());
                    echo " 2x\"";
                }
                echo " width=\"";
                echo (isset($context["image_width"]) ? $context["image_width"] : null);
                echo "\" height=\"";
                echo (isset($context["image_height"]) ? $context["image_height"] : null);
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-first\"/>";
            }
            // line 15
            echo "        </a>";
            // line 17
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewStatus"), "method")) {
                // line 18
                echo "          <div class=\"quickview-button\">
            <a class=\"btn btn-quickview\"";
                // line 19
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "SideProductQuickviewTooltipStatus", 1 => $context), "method")) {
                    echo "data-toggle=\"tooltip\" data-tooltip-class=\"";
                    echo ("module-side_products-" . (isset($context["module_id"]) ? $context["module_id"] : null));
                    echo " quickview-tooltip\" data-placement=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "SideProductQuickviewTooltipPosition", 1 => $context), "method");
                    echo "\" title=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewText"), "method");
                    echo "\"";
                }
                echo " onclick=\"quickview('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "')\"><span class=\"btn-text\">";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewText"), "method");
                echo "</span></a>
          </div>";
            }
            // line 22
            echo "      </div>

      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 25
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></div>";
            // line 27
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 28
                echo "          <div class=\"price\">";
                // line 29
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 30
                    echo "              <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>";
                } else {
                    // line 32
                    echo "              <span class=\"price-normal\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>";
                }
                // line 34
                echo "          </div>";
                // line 35
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 36
                    echo "            <div class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</div>";
                }
            }
            // line 40
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 41
                echo "          <div class=\"rating\">
            <div class=\"rating-stars\">";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 44
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 45
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    } else {
                        // line 47
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "            </div>
          </div>";
            } else {
                // line 53
                echo "          <div class=\"rating no-rating\">
            <div class=\"rating-stars\">";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 57
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    } else {
                        // line 59
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "            </div>
          </div>";
            }
            // line 66
            if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method"))) {
                // line 67
                echo "          <div class=\"button-group\">";
                // line 68
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method")) {
                    // line 69
                    echo "              <a class=\"btn btn-cart\"";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "SideProductCartTooltipStatus", 1 => $context), "method")) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ("module-side_products-" . (isset($context["module_id"]) ? $context["module_id"] : null));
                        echo " cart-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "SideProductCartTooltipPosition", 1 => $context), "method");
                        echo "\" title=\"";
                        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                        echo "\"";
                    }
                    echo " onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span>\"><span class=\"btn-text\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></a>";
                }
                // line 71
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) {
                    // line 72
                    echo "              <a class=\"btn btn-wishlist\"";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "SideProductWishlistTooltipStatus", 1 => $context), "method")) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ("module-side_products-" . (isset($context["module_id"]) ? $context["module_id"] : null));
                        echo " wishlist-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "SideProductWishlistTooltipPosition", 1 => $context), "method");
                        echo "\" title=\"";
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\"";
                    }
                    echo " onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "')\"><span class=\"btn-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a>";
                }
                // line 74
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) {
                    // line 75
                    echo "              <a class=\"btn btn-compare\"";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "SideProductCompareTooltipStatus", 1 => $context), "method")) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo ("module-side_products-" . (isset($context["module_id"]) ? $context["module_id"] : null));
                        echo " compare-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => "SideProductCompareTooltipPosition", 1 => $context), "method");
                        echo "\" title=\"";
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "\"";
                    }
                    echo " onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "')\"><span class=\"btn-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a>";
                }
                // line 77
                echo "          </div>";
            }
            // line 79
            echo "
      </div>
    </div>
  </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/side_products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 79,  258 => 77,  241 => 75,  239 => 74,  222 => 72,  220 => 71,  201 => 69,  199 => 68,  197 => 67,  195 => 66,  191 => 62,  184 => 59,  181 => 57,  179 => 56,  175 => 55,  172 => 53,  168 => 50,  161 => 47,  158 => 45,  156 => 44,  152 => 43,  149 => 41,  147 => 40,  140 => 36,  138 => 35,  136 => 34,  131 => 32,  124 => 30,  122 => 29,  120 => 28,  118 => 27,  113 => 25,  108 => 22,  91 => 19,  88 => 18,  86 => 17,  84 => 15,  63 => 13,  40 => 11,  38 => 10,  35 => 9,  27 => 6,  25 => 4,  24 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for product in products %}*/
/*   {% set classes = j3.classes({*/
/*     'out-of-stock': not product.quantity,*/
/*     'has-zero-price': not product.price_value,*/
/*   }) %}*/
/*   <div class="product-layout {{ j3.classes(product.classes) }} {{ classes }}">*/
/*     <div class="side-product">*/
/*       <div class="image">*/
/*         <a href="{{ product.href }}" class="product-img">*/
/*           {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*             <img src="{{ dummy_image }}" data-src="{{ product.thumb }}" {% if product.thumb2x %}data-srcset="{{ product.thumb }} 1x, {{ product.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-first lazyload"/>*/
/*           {% else %}*/
/*             <img src="{{ product.thumb }}" {% if product.thumb2x %}srcset="{{ product.thumb }} 1x, {{ product.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-first"/>*/
/*           {% endif %}*/
/*         </a>*/
/* */
/*         {% if j3.settings.get('quickviewStatus') %}*/
/*           <div class="quickview-button">*/
/*             <a class="btn btn-quickview" {% if j3.settings.getIn('SideProductQuickviewTooltipStatus', _context) %}data-toggle="tooltip" data-tooltip-class="{{ 'module-side_products-' ~ module_id }} quickview-tooltip" data-placement="{{ j3.settings.getIn('SideProductQuickviewTooltipPosition', _context) }}" title="{{ j3.settings.get('quickviewText') }}"{% endif %} onclick="quickview('{{ product.product_id }}')"><span class="btn-text">{{ j3.settings.get('quickviewText') }}</span></a>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <div class="caption">*/
/*         <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/* */
/*         {% if product.price %}*/
/*           <div class="price">*/
/*             {% if product.special %}*/
/*               <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*             {% else %}*/
/*               <span class="price-normal">{{ product.price }}</span>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% if product.tax %}*/
/*             <div class="price-tax">{{ text_tax }}{{ product.tax }}</div>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if product.rating %}*/
/*           <div class="rating">*/
/*             <div class="rating-stars">*/
/*               {% for i in 1..5 %}*/
/*                 {% if product.rating < i %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                 {% else %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*         {% else %}*/
/*           <div class="rating no-rating">*/
/*             <div class="rating-stars">*/
/*               {% for i in 1..5 %}*/
/*                 {% if product.rating < i %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                 {% else %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         {% if j3.settings.get('catalogCartStatus') or j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}*/
/*           <div class="button-group">*/
/*             {% if j3.settings.get('catalogCartStatus') %}*/
/*               <a class="btn btn-cart" {% if j3.settings.getIn('SideProductCartTooltipStatus', _context) %} data-toggle="tooltip" data-tooltip-class="{{ 'module-side_products-' ~ module_id }} cart-tooltip" data-placement="{{ j3.settings.getIn('SideProductCartTooltipPosition', _context) }}" title="{{ button_cart }}" {% endif %} onclick="cart.add('{{ product.product_id }}', $(this).closest('.product-thumb').find('.button-group input[name=\'quantity\']').val());" data-loading-text="<span class='btn-text'>{{ button_cart }}</span>"><span class="btn-text">{{ button_cart }}</span></a>*/
/*             {% endif %}*/
/*             {% if j3.settings.get('catalogWishlistStatus') %}*/
/*               <a class="btn btn-wishlist" {% if j3.settings.getIn('SideProductWishlistTooltipStatus', _context) %} data-toggle="tooltip" data-tooltip-class="{{ 'module-side_products-' ~ module_id }} wishlist-tooltip" data-placement="{{ j3.settings.getIn('SideProductWishlistTooltipPosition', _context) }}" title="{{ button_wishlist }}" {% endif %} onclick="wishlist.add('{{ product.product_id }}')"><span class="btn-text">{{ button_wishlist }}</span></a>*/
/*             {% endif %}*/
/*             {% if j3.settings.get('catalogCompareStatus') %}*/
/*               <a class="btn btn-compare" {% if j3.settings.getIn('SideProductCompareTooltipStatus', _context) %} data-toggle="tooltip" data-tooltip-class="{{ 'module-side_products-' ~ module_id }} compare-tooltip" data-placement="{{ j3.settings.getIn('SideProductCompareTooltipPosition', _context) }}" title="{{ button_compare }}" {% endif %} onclick="compare.add('{{ product.product_id }}')"><span class="btn-text">{{ button_compare }}</span></a>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
/* */
