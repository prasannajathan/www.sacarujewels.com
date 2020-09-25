<?php

/* journal3/template/journal3/product_card.twig */
class __TwigTemplate_c303a7583c9a558fc5045b1a22df7d9351ec988eb3e92d235c87f61f222359a4 extends Twig_Template
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
        $context["prefix"] = ((((isset($context["display"]) ? $context["display"] : null) == "grid")) ? ("ProductGrid") : ("ProductList"));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            $context["classes"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => array("out-of-stock" => ($this->getAttribute(            // line 4
$context["product"], "quantity", array()) <= 0), "has-countdown" => $this->getAttribute(            // line 5
$context["product"], "date_end", array()), "has-zero-price" =>  !$this->getAttribute(            // line 6
$context["product"], "price_value", array()), "has-extra-button" => $this->getAttribute(            // line 7
$context["product"], "extra_buttons", array()))), "method");
            // line 9
            echo "  <div class=\"product-layout";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["product"], "classes", array())), "method");
            echo (isset($context["classes"]) ? $context["classes"] : null);
            echo "\">
    <div class=\"product-thumb\">";
            // line 11
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "NamePosition"), 1 => $context), "method") == "image")) {
                // line 12
                echo "        <div class=\"name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></div>";
            }
            // line 14
            echo "      <div class=\"image\">";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "quickviewStatus"), "method")) {
                // line 16
                echo "          <div class=\"quickview-button\">
            <a class=\"btn btn-quickview\"";
                // line 17
                if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "QuickviewDisplay"), 1 => $context), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "QuickviewTooltipStatus"), 1 => $context), "method"))) {
                    echo "data-toggle=\"tooltip\" data-tooltip-class=\"";
                    echo (((isset($context["module_id"]) ? $context["module_id"] : null)) ? ((("module-products-" . (isset($context["module_id"]) ? $context["module_id"] : null)) . " module-products-grid")) : ("product-grid"));
                    echo " quickview-tooltip\" data-placement=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "QuickviewTooltipPosition"), 1 => $context), "method");
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
            // line 20
            echo "
        <a href=\"";
            // line 21
            echo $this->getAttribute($context["product"], "href", array());
            echo "\" class=\"product-img";
            if ($this->getAttribute($context["product"], "second_thumb", array())) {
                echo "has-second-image";
            }
            echo "\">
          <div>";
            // line 23
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                // line 24
                echo "              <img src=\"";
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
                echo "\" class=\"img-responsive img-first lazyload\"/>";
            } else {
                // line 26
                echo "              <img src=\"";
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
                echo "\" class=\"img-responsive img-first\"/>";
            }
            // line 29
            if ($this->getAttribute($context["product"], "second_thumb", array())) {
                // line 30
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method")) {
                    // line 31
                    echo "                <img src=\"";
                    echo (isset($context["dummy_image"]) ? $context["dummy_image"] : null);
                    echo "\" data-src=\"";
                    echo $this->getAttribute($context["product"], "second_thumb", array());
                    echo "\"";
                    if ($this->getAttribute($context["product"], "second_thumb2x", array())) {
                        echo "data-srcset=\"";
                        echo $this->getAttribute($context["product"], "second_thumb", array());
                        echo " 1x,";
                        echo $this->getAttribute($context["product"], "second_thumb2x", array());
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
                    echo "\" class=\"img-responsive img-second lazyload\"/>";
                } else {
                    // line 33
                    echo "                <img src=\"";
                    echo $this->getAttribute($context["product"], "second_thumb", array());
                    echo "\"";
                    if ($this->getAttribute($context["product"], "second_thumb2x", array())) {
                        echo "srcset=\"";
                        echo $this->getAttribute($context["product"], "second_thumb", array());
                        echo " 1x,";
                        echo $this->getAttribute($context["product"], "second_thumb2x", array());
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
                    echo "\" class=\"img-responsive img-second\"/>";
                }
            }
            // line 36
            echo "
          </div>
        </a>";
            // line 40
            if ($this->getAttribute($context["product"], "labels", array())) {
                // line 41
                echo "          <div class=\"product-labels\">";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 43
                    echo "              <span class=\"product-label product-label-";
                    echo $context["id"];
                    echo " product-label-";
                    echo $this->getAttribute($context["label"], "display", array());
                    echo "\"><b>";
                    echo $this->getAttribute($context["label"], "label", array());
                    echo "</b></span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </div>";
            }
            // line 48
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "countdownStatus"), "method") && $this->getAttribute($context["product"], "date_end", array()))) {
                // line 49
                echo "          <div class=\"countdown\" data-date=\"";
                echo $this->getAttribute($context["product"], "date_end", array());
                echo "\"></div>";
            }
            // line 51
            echo "      </div>

      <div class=\"caption\">";
            // line 54
            if (($this->getAttribute($context["product"], "stat1", array()) || $this->getAttribute($context["product"], "stat2", array()))) {
                // line 55
                echo "          <div class=\"stats\">";
                // line 56
                if ($this->getAttribute($context["product"], "stat1", array())) {
                    // line 57
                    echo "              <span class=\"stat-1\"><span class=\"stats-label\">";
                    echo $this->getAttribute($this->getAttribute($context["product"], "stat1", array()), "label", array());
                    echo ":</span> <span>";
                    echo $this->getAttribute($this->getAttribute($context["product"], "stat1", array()), "text", array());
                    echo "</span></span>";
                }
                // line 59
                if ($this->getAttribute($context["product"], "stat2", array())) {
                    // line 60
                    echo "              <span class=\"stat-2\"><span class=\"stats-label\">";
                    echo $this->getAttribute($this->getAttribute($context["product"], "stat2", array()), "label", array());
                    echo ":</span> <span>";
                    echo $this->getAttribute($this->getAttribute($context["product"], "stat2", array()), "text", array());
                    echo "</span></span>";
                }
                // line 62
                echo "          </div>";
            }
            // line 65
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "NamePosition"), 1 => $context), "method") == "default")) {
                // line 66
                echo "          <div class=\"name\"><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></div>";
            }
            // line 68
            echo "
        <div class=\"description\">";
            // line 69
            echo $this->getAttribute($context["product"], "description", array());
            echo "</div>";
            // line 71
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 72
                echo "          <div class=\"price\">
            <div>";
                // line 74
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 75
                    echo "                <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>";
                } else {
                    // line 77
                    echo "                <span class=\"price-normal\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>";
                }
                // line 79
                echo "            </div>";
                // line 80
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 81
                    echo "              <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>";
                }
                // line 83
                echo "          </div>";
            }
            // line 86
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 87
                echo "          <div class=\"rating";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "RatingPosition"), 1 => $context), "method") == "hover")) {
                    echo "rating-hover";
                }
                echo "\">
            <div class=\"rating-stars\">";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 90
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 91
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    } else {
                        // line 93
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "            </div>
          </div>";
            } else {
                // line 99
                echo "          <div class=\"rating no-rating";
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "RatingPosition"), 1 => $context), "method") == "hover")) {
                    echo "rating-hover";
                }
                echo "\">
            <div class=\"rating-stars\">";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 102
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 103
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    } else {
                        // line 105
                        echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "            </div>
          </div>";
            }
            // line 112
            if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method"))) {
                // line 113
                echo "        <div class=\"buttons-wrapper\">
          <div class=\"button-group\">";
                // line 115
                if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCartStatus"), "method")) {
                    // line 116
                    echo "            <div class=\"cart-group\">
              <div class=\"stepper\">
                <input type=\"text\" name=\"quantity\" value=\"";
                    // line 118
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "\" data-minimum=\"";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "\" class=\"form-control\"/>
                <input type=\"hidden\" name=\"product_id\" value=\"";
                    // line 119
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\"/>
                <span>
                <i class=\"fa fa-angle-up\"></i>
                <i class=\"fa fa-angle-down\"></i>
              </span>
              </div>
              <a class=\"btn btn-cart\"";
                    // line 125
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "CartDisplay"), 1 => $context), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "CartTooltipStatus"), 1 => $context), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo (((isset($context["module_id"]) ? $context["module_id"] : null)) ? ((("module-products-" . (isset($context["module_id"]) ? $context["module_id"] : null)) . " module-products-grid")) : ("product-grid"));
                        echo " cart-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "CartTooltipPosition"), 1 => $context), "method");
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
                    echo "</span></a>
            </div>";
                }
                // line 129
                if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method") || $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method"))) {
                    // line 130
                    echo "            <div class=\"wish-group\">";
                    // line 131
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogWishlistStatus"), "method")) {
                        // line 132
                        echo "              <a class=\"btn btn-wishlist\"";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "WishlistDisplay"), 1 => $context), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "WishlistTooltipStatus"), 1 => $context), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo (((isset($context["module_id"]) ? $context["module_id"] : null)) ? ((("module-products-" . (isset($context["module_id"]) ? $context["module_id"] : null)) . " module-products-grid")) : ("product-grid"));
                            echo " wishlist-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "WishlistTooltipPosition"), 1 => $context), "method");
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
                    // line 135
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCompareStatus"), "method")) {
                        // line 136
                        echo "              <a class=\"btn btn-compare\"";
                        if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "CompareDisplay"), 1 => $context), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "CompareTooltipStatus"), 1 => $context), "method"))) {
                            echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                            echo (((isset($context["module_id"]) ? $context["module_id"] : null)) ? ((("module-products-" . (isset($context["module_id"]) ? $context["module_id"] : null)) . " module-products-grid")) : ("product-grid"));
                            echo " compare-tooltip\" data-placement=\"";
                            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "CompareTooltipPosition"), 1 => $context), "method");
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
                    // line 138
                    echo "            </div>";
                }
                // line 140
                echo "          </div>
        </div>";
            }
            // line 144
            if ($this->getAttribute($context["product"], "extra_buttons", array())) {
                // line 145
                echo "          <div class=\"extra-group\">
            <div>";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "extra_buttons", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 148
                    echo "                <a class=\"btn btn-extra btn-extra-";
                    echo $context["id"];
                    echo "\"";
                    // line 149
                    if ((($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => (((isset($context["prefix"]) ? $context["prefix"] : null) . "ExtraButtonDisplay") . $this->getAttribute($context["loop"], "index", array())), 1 => $context), "method") == "icon") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "ExtraButtonTooltipStatus"), 1 => $context), "method"))) {
                        echo " data-toggle=\"tooltip\" data-tooltip-class=\"";
                        echo (((isset($context["module_id"]) ? $context["module_id"] : null)) ? ((("module-products-" . (isset($context["module_id"]) ? $context["module_id"] : null)) . " module-products-grid")) : ("product-grid"));
                        echo " extra-tooltip\" data-placement=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "getIn", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "ExtraButtonTooltipPosition"), 1 => $context), "method");
                        echo "\" title=\"";
                        echo $this->getAttribute($context["extra_button"], "label", array());
                        echo "\"";
                    }
                    // line 150
                    if (($this->getAttribute($context["extra_button"], "action", array()) == "quickbuy")) {
                        echo "onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\"";
                    }
                    // line 151
                    if ((($this->getAttribute($context["extra_button"], "action", array()) == "link") && $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array()))) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($context["extra_button"], "link", array()), "href", array());
                        echo "\"";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["extra_button"], "link", array())), "method");
                        echo " data-product_id=\"";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "\" data-product_url=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\"";
                    }
                    // line 152
                    echo "                   data-loading-text=\"<span class='btn-text'>";
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span>\">
                  <span class=\"btn-text\">";
                    // line 153
                    echo $this->getAttribute($context["extra_button"], "label", array());
                    echo "</span>
                </a>";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "            </div>
          </div>";
            }
            // line 159
            echo "      </div>
    </div>
  </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/product_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 159,  511 => 156,  495 => 153,  490 => 152,  478 => 151,  472 => 150,  462 => 149,  458 => 148,  441 => 147,  438 => 145,  436 => 144,  432 => 140,  429 => 138,  412 => 136,  410 => 135,  393 => 132,  391 => 131,  389 => 130,  387 => 129,  368 => 125,  359 => 119,  353 => 118,  349 => 116,  347 => 115,  344 => 113,  342 => 112,  338 => 108,  331 => 105,  328 => 103,  326 => 102,  322 => 101,  315 => 99,  311 => 96,  304 => 93,  301 => 91,  299 => 90,  295 => 89,  288 => 87,  286 => 86,  283 => 83,  277 => 81,  275 => 80,  273 => 79,  268 => 77,  261 => 75,  259 => 74,  256 => 72,  254 => 71,  251 => 69,  248 => 68,  241 => 66,  239 => 65,  236 => 62,  229 => 60,  227 => 59,  220 => 57,  218 => 56,  216 => 55,  214 => 54,  210 => 51,  205 => 49,  203 => 48,  200 => 45,  188 => 43,  184 => 42,  182 => 41,  180 => 40,  176 => 36,  154 => 33,  131 => 31,  129 => 30,  127 => 29,  106 => 26,  83 => 24,  81 => 23,  73 => 21,  70 => 20,  53 => 17,  50 => 16,  48 => 15,  46 => 14,  39 => 12,  37 => 11,  31 => 9,  29 => 7,  28 => 6,  27 => 5,  26 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set prefix = display == 'grid' ? 'ProductGrid' : 'ProductList' %}*/
/* {% for product in products %}*/
/*   {% set classes = j3.classes({*/
/*     'out-of-stock': product.quantity <= 0,*/
/*     'has-countdown': product.date_end,*/
/*     'has-zero-price': not product.price_value,*/
/*     'has-extra-button': product.extra_buttons,*/
/*   }) %}*/
/*   <div class="product-layout {{ j3.classes(product.classes) }} {{ classes }}">*/
/*     <div class="product-thumb">*/
/*       {% if (j3.settings.getIn(prefix ~ 'NamePosition', _context) == "image") %}*/
/*         <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*       {% endif %}*/
/*       <div class="image">*/
/*         {% if j3.settings.get('quickviewStatus') %}*/
/*           <div class="quickview-button">*/
/*             <a class="btn btn-quickview" {% if j3.settings.getIn(prefix ~ 'QuickviewDisplay', _context) == 'icon' and j3.settings.getIn(prefix ~ 'QuickviewTooltipStatus', _context) %}data-toggle="tooltip" data-tooltip-class="{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} quickview-tooltip" data-placement="{{ j3.settings.getIn(prefix ~ 'QuickviewTooltipPosition', _context) }}" title="{{ j3.settings.get('quickviewText') }}"{% endif %} onclick="quickview('{{ product.product_id }}')"><span class="btn-text">{{ j3.settings.get('quickviewText') }}</span></a>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <a href="{{ product.href }}" class="product-img {% if product.second_thumb %}has-second-image{% endif %}">*/
/*           <div>*/
/*             {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*               <img src="{{ dummy_image }}" data-src="{{ product.thumb }}" {% if product.thumb2x %}data-srcset="{{ product.thumb }} 1x, {{ product.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-first lazyload"/>*/
/*             {% else %}*/
/*               <img src="{{ product.thumb }}" {% if product.thumb2x %}srcset="{{ product.thumb }} 1x, {{ product.thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-first"/>*/
/*             {% endif %}*/
/* */
/*             {% if product.second_thumb %}*/
/*               {% if j3.settings.get('performanceLazyLoadImagesStatus') %}*/
/*                 <img src="{{ dummy_image }}" data-src="{{ product.second_thumb }}" {% if product.second_thumb2x %}data-srcset="{{ product.second_thumb }} 1x, {{ product.second_thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-second lazyload"/>*/
/*               {% else %}*/
/*                 <img src="{{ product.second_thumb }}" {% if product.second_thumb2x %}srcset="{{ product.second_thumb }} 1x, {{ product.second_thumb2x }} 2x" {% endif %} width="{{ image_width }}" height="{{ image_height }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive img-second"/>*/
/*               {% endif %}*/
/*             {% endif %}*/
/* */
/*           </div>*/
/*         </a>*/
/* */
/*         {% if product.labels %}*/
/*           <div class="product-labels">*/
/*             {% for id, label in product.labels %}*/
/*               <span class="product-label product-label-{{ id }} product-label-{{ label.display }}"><b>{{ label.label }}</b></span>*/
/*             {% endfor %}*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         {% if j3.settings.get('countdownStatus') and product.date_end %}*/
/*           <div class="countdown" data-date="{{ product.date_end }}"></div>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <div class="caption">*/
/*         {% if product.stat1 or product.stat2 %}*/
/*           <div class="stats">*/
/*             {% if product.stat1 %}*/
/*               <span class="stat-1"><span class="stats-label">{{ product.stat1.label }}:</span> <span>{{ product.stat1.text }}</span></span>*/
/*             {% endif %}*/
/*             {% if product.stat2 %}*/
/*               <span class="stat-2"><span class="stats-label">{{ product.stat2.label }}:</span> <span>{{ product.stat2.text }}</span></span>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         {% if (j3.settings.getIn(prefix ~ 'NamePosition', _context) == "default") %}*/
/*           <div class="name"><a href="{{ product.href }}">{{ product.name }}</a></div>*/
/*         {% endif %}*/
/* */
/*         <div class="description">{{ product.description }}</div>*/
/* */
/*         {% if product.price %}*/
/*           <div class="price">*/
/*             <div>*/
/*               {% if product.special %}*/
/*                 <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*               {% else %}*/
/*                 <span class="price-normal">{{ product.price }}</span>*/
/*               {% endif %}*/
/*             </div>*/
/*             {% if product.tax %}*/
/*               <span class="price-tax">{{ text_tax }}{{ product.tax }}</span>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         {% if product.rating %}*/
/*           <div class="rating {% if (j3.settings.getIn(prefix ~ 'RatingPosition', _context) == "hover") %}rating-hover{% endif %}">*/
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
/*           <div class="rating no-rating {% if (j3.settings.getIn(prefix ~ 'RatingPosition', _context) == "hover") %}rating-hover{% endif %}">*/
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
/*         <div class="buttons-wrapper">*/
/*           <div class="button-group">*/
/*             {% if j3.settings.get('catalogCartStatus') %}*/
/*             <div class="cart-group">*/
/*               <div class="stepper">*/
/*                 <input type="text" name="quantity" value="{{ product.minimum }}" data-minimum="{{ product.minimum }}" class="form-control"/>*/
/*                 <input type="hidden" name="product_id" value="{{ product.product_id }}"/>*/
/*                 <span>*/
/*                 <i class="fa fa-angle-up"></i>*/
/*                 <i class="fa fa-angle-down"></i>*/
/*               </span>*/
/*               </div>*/
/*               <a class="btn btn-cart" {% if (j3.settings.getIn(prefix ~ 'CartDisplay', _context) == "icon") and (j3.settings.getIn(prefix ~ 'CartTooltipStatus', _context)) %} data-toggle="tooltip" data-tooltip-class="{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} cart-tooltip" data-placement="{{ j3.settings.getIn(prefix ~ 'CartTooltipPosition', _context) }}" title="{{ button_cart }}" {% endif %} onclick="cart.add('{{ product.product_id }}', $(this).closest('.product-thumb').find('.button-group input[name=\'quantity\']').val());" data-loading-text="<span class='btn-text'>{{ button_cart }}</span>"><span class="btn-text">{{ button_cart }}</span></a>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             {% if j3.settings.get('catalogWishlistStatus') or j3.settings.get('catalogCompareStatus') %}*/
/*             <div class="wish-group">*/
/*               {% if j3.settings.get('catalogWishlistStatus') %}*/
/*               <a class="btn btn-wishlist" {% if (j3.settings.getIn(prefix ~ 'WishlistDisplay', _context) == "icon") and (j3.settings.getIn(prefix ~ 'WishlistTooltipStatus', _context)) %} data-toggle="tooltip" data-tooltip-class="{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} wishlist-tooltip" data-placement="{{ j3.settings.getIn(prefix ~ 'WishlistTooltipPosition', _context) }}" title="{{ button_wishlist }}" {% endif %} onclick="wishlist.add('{{ product.product_id }}')"><span class="btn-text">{{ button_wishlist }}</span></a>*/
/*               {% endif %}*/
/* */
/*               {% if j3.settings.get('catalogCompareStatus') %}*/
/*               <a class="btn btn-compare" {% if (j3.settings.getIn(prefix ~ 'CompareDisplay', _context) == "icon") and (j3.settings.getIn(prefix ~ 'CompareTooltipStatus', _context)) %} data-toggle="tooltip" data-tooltip-class="{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} compare-tooltip" data-placement="{{ j3.settings.getIn(prefix ~ 'CompareTooltipPosition', _context) }}" title="{{ button_compare }}" {% endif %} onclick="compare.add('{{ product.product_id }}')"><span class="btn-text">{{ button_compare }}</span></a>*/
/*               {% endif %}*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if product.extra_buttons %}*/
/*           <div class="extra-group">*/
/*             <div>*/
/*               {% for id, extra_button in product.extra_buttons %}*/
/*                 <a class="btn btn-extra btn-extra-{{ id }}"*/
/*                   {% if (j3.settings.getIn(prefix ~ 'ExtraButtonDisplay' ~ loop.index, _context) == "icon") and (j3.settings.getIn(prefix ~ 'ExtraButtonTooltipStatus', _context)) %} data-toggle="tooltip" data-tooltip-class="{{ module_id ? 'module-products-' ~ module_id ~ ' module-products-grid' : 'product-grid' }} extra-tooltip" data-placement="{{ j3.settings.getIn(prefix ~ 'ExtraButtonTooltipPosition', _context) }}" title="{{ extra_button.label }}" {% endif %}*/
/*                   {% if extra_button.action == 'quickbuy' %}onclick="cart.add('{{ product.product_id }}', $(this).closest('.product-thumb').find('.button-group input[name=\'quantity\']').val(), true);"{% endif %}*/
/*                   {% if extra_button.action == 'link' and extra_button.link.href %}href="{{ extra_button.link.href }}" {{ j3.linkAttrs(extra_button.link) }} data-product_id="{{ product.product_id }}" data-product_url="{{ product.href }}"{% endif %}*/
/*                    data-loading-text="<span class='btn-text'>{{ extra_button.label }}</span>">*/
/*                   <span class="btn-text">{{ extra_button.label }}</span>*/
/*                 </a>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
/* */
