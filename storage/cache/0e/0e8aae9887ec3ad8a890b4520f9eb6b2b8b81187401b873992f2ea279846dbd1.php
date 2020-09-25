<?php

/* journal3/template/common/cart.twig */
class __TwigTemplate_48c7ad1964dcd91c51aee073e7f237af7ec241ac36f280a7ee8fd61c31cf1374 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogMiniCartStatus"), "method")) {
            // line 2
            echo "<div id=\"cart\" class=\"dropdown\">
  <a data-toggle=\"dropdown\" data-loading-text=\"";
            // line 3
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"dropdown-toggle cart-heading\"";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "cartStyleCartCheckoutLink"), "method")) {
                echo "href=\"";
                echo (isset($context["cart"]) ? $context["cart"] : null);
                echo "\"";
            }
            echo ">";
            // line 4
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "cartStyleCartCustomText"), "method") == "default")) {
                // line 5
                echo "    <span id=\"cart-total\">";
                echo (isset($context["text_items"]) ? $context["text_items"] : null);
                echo "</span>";
            }
            // line 7
            echo "    <i class=\"fa fa-shopping-cart\">";
            // line 8
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "cartStyleCartCustomText"), "method") == "custom")) {
                // line 9
                echo "        <span class=\"cart-label\">";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "cartStyleCartLabel"), "method");
                echo "</span>";
            }
            // line 11
            echo "    </i>
    <span id=\"cart-items\" class=\"count-badge";
            // line 12
            if ( !(isset($context["items_count"]) ? $context["items_count"] : null)) {
                echo "count-zero";
            }
            echo "\">";
            echo (isset($context["items_count"]) ? $context["items_count"] : null);
            echo "</span>
  </a>
  <div id=\"cart-content\" class=\"dropdown-menu cart-content j-dropdown\">
    <ul>";
            // line 16
            if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
                // line 17
                echo "      <li class=\"cart-products\">
        <table class=\"table\">";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    echo "          <tr>
            <td class=\"text-center td-image\">";
                    // line 21
                    if ($this->getAttribute($context["product"], "thumb", array())) {
                        // line 22
                        echo "              <a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\"><img src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"/></a>";
                    }
                    // line 24
                    echo "            <td class=\"text-left td-name\"><a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a><br />";
                    if ($this->getAttribute($context["product"], "option", array())) {
                        // line 25
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 26
                            echo "            <span>";
                            echo $this->getAttribute($context["option"], "name", array());
                            echo "</span><small>";
                            echo $this->getAttribute($context["option"], "value", array());
                            echo "</small><br />";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 28
                    if ($this->getAttribute($context["product"], "recurring", array())) {
                        // line 29
                        echo "            <span>";
                        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                        echo "</span><small>";
                        echo $this->getAttribute($context["product"], "recurring", array());
                        echo "</small>";
                    }
                    echo "</td>
            <td class=\"text-right td-qty\">x";
                    // line 30
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</td>
            <td class=\"text-right td-total\">";
                    // line 31
                    echo $this->getAttribute($context["product"], "total", array());
                    echo "</td>
            <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 32
                    echo $this->getAttribute($context["product"], "cart_id", array());
                    echo "');\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"cart-remove\"><i class=\"fa fa-times-circle\"></i></button></td>
          </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 36
                    echo "          <tr>
            <td class=\"text-center\"></td>
            <td class=\"text-left\">";
                    // line 38
                    echo $this->getAttribute($context["voucher"], "description", array());
                    echo "</td>
            <td class=\"text-right\">x&nbsp;1</td>
            <td class=\"text-right\">";
                    // line 40
                    echo $this->getAttribute($context["voucher"], "amount", array());
                    echo "</td>
            <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 41
                    echo $this->getAttribute($context["voucher"], "key", array());
                    echo "');\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "        </table>
      </li>
      <li class=\"cart-totals\">
        <div>
          <table class=\"table table-bordered\">";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 50
                    echo "            <tr>
              <td class=\"text-right td-total-title\">";
                    // line 51
                    echo $this->getAttribute($context["total"], "title", array());
                    echo "</td>
              <td class=\"text-right td-total-text\">";
                    // line 52
                    echo $this->getAttribute($context["total"], "text", array());
                    echo "</td>
            </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "          </table>
          <div class=\"cart-buttons\">
            <a class=\"btn-cart btn\" href=\"";
                // line 57
                echo (isset($context["cart"]) ? $context["cart"] : null);
                echo "\"><i class=\"fa\"></i><span>";
                echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
                echo "</span></a>
            <a class=\"btn-checkout btn\" href=\"";
                // line 58
                echo (isset($context["checkout"]) ? $context["checkout"] : null);
                echo "\"><i class=\"fa\"></i><span>";
                echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
                echo "</span></a>
          </div>
        </div>
      </li>";
            } else {
                // line 63
                echo "      <li>
        <p class=\"text-center cart-empty\">";
                // line 64
                echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
                echo "</p>
      </li>";
            }
            // line 67
            echo "    </ul>
  </div>
</div>";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 67,  212 => 64,  209 => 63,  200 => 58,  194 => 57,  190 => 55,  182 => 52,  178 => 51,  175 => 50,  171 => 49,  165 => 44,  155 => 41,  151 => 40,  146 => 38,  142 => 36,  138 => 35,  128 => 32,  124 => 31,  120 => 30,  111 => 29,  109 => 28,  98 => 26,  94 => 25,  87 => 24,  76 => 22,  74 => 21,  71 => 20,  67 => 19,  64 => 17,  62 => 16,  52 => 12,  49 => 11,  44 => 9,  42 => 8,  40 => 7,  35 => 5,  33 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if j3.settings.get('catalogMiniCartStatus') %}*/
/* <div id="cart" class="dropdown">*/
/*   <a data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="dropdown-toggle cart-heading" {% if j3.settings.get('cartStyleCartCheckoutLink') %}href="{{ cart }}"{% endif %}>*/
/*     {% if j3.settings.get('cartStyleCartCustomText') == 'default' %}*/
/*     <span id="cart-total">{{ text_items }}</span>*/
/*     {% endif %}*/
/*     <i class="fa fa-shopping-cart">*/
/*       {% if j3.settings.get('cartStyleCartCustomText') == 'custom' %}*/
/*         <span class="cart-label">{{ j3.settings.get('cartStyleCartLabel') }}</span>*/
/*       {% endif %}*/
/*     </i>*/
/*     <span id="cart-items" class="count-badge {% if not items_count %}count-zero{% endif %}">{{ items_count }}</span>*/
/*   </a>*/
/*   <div id="cart-content" class="dropdown-menu cart-content j-dropdown">*/
/*     <ul>*/
/*       {% if products or vouchers %}*/
/*       <li class="cart-products">*/
/*         <table class="table">*/
/*           {% for product in products %}*/
/*           <tr>*/
/*             <td class="text-center td-image">{% if product.thumb %}*/
/*               <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"/></a>*/
/*               {% endif %}*/
/*             <td class="text-left td-name"><a href="{{ product.href }}">{{ product.name }}</a><br /> {% if product.option %}*/
/*             {% for option in product.option %}*/
/*             <span>{{ option.name }}</span><small> {{ option.value }}</small><br /> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %}*/
/*             <span>{{ text_recurring }}</span><small> {{ product.recurring }}</small> {% endif %}</td>*/
/*             <td class="text-right td-qty">x {{ product.quantity }}</td>*/
/*             <td class="text-right td-total">{{ product.total }}</td>*/
/*             <td class="text-center td-remove"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="cart-remove"><i class="fa fa-times-circle"></i></button></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% for voucher in vouchers %}*/
/*           <tr>*/
/*             <td class="text-center"></td>*/
/*             <td class="text-left">{{ voucher.description }}</td>*/
/*             <td class="text-right">x&nbsp;1</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*       </li>*/
/*       <li class="cart-totals">*/
/*         <div>*/
/*           <table class="table table-bordered">*/
/*             {% for total in totals %}*/
/*             <tr>*/
/*               <td class="text-right td-total-title">{{ total.title }}</td>*/
/*               <td class="text-right td-total-text">{{ total.text }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </table>*/
/*           <div class="cart-buttons">*/
/*             <a class="btn-cart btn" href="{{ cart }}"><i class="fa"></i><span>{{ text_cart }}</span></a>*/
/*             <a class="btn-checkout btn" href="{{ checkout }}"><i class="fa"></i><span>{{ text_checkout }}</span></a>*/
/*           </div>*/
/*         </div>*/
/*       </li>*/
/*       {% else %}*/
/*       <li>*/
/*         <p class="text-center cart-empty">{{ text_empty }}</p>*/
/*       </li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* */
