<?php

/* journal3/template/common/currency.twig */
class __TwigTemplate_c3df0258334520340154e9905d36e60a9574137ffc675e77b39ae9687de10573 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogCurrencyStatus"), "method")) {
            // line 2
            if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
                // line 3
                $context["current_currency"] = null;
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 5
                    if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                        // line 6
                        $context["current_currency"] = $context["currency"];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "  <div id=\"currency\" class=\"currency\">
    <form action=\"";
                // line 10
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
      <div class=\"dropdown drop-menu\">
        <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"currency-symbol-title\">";
                // line 14
                if ($this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "symbol_left", array())) {
                    // line 15
                    echo "              <span class=\"symbol\">";
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "symbol_left", array());
                    echo "</span>
              <span class=\"currency-title\">";
                    // line 16
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "title", array());
                    echo "</span>
              <span class=\"currency-code\">";
                    // line 17
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "code", array());
                    echo "</span>";
                } else {
                    // line 19
                    echo "              <span class=\"symbol\">";
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "symbol_right", array());
                    echo "</span>
              <span class=\"currency-title\">";
                    // line 20
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "title", array());
                    echo "</span>
              <span class=\"currency-code\">";
                    // line 21
                    echo $this->getAttribute((isset($context["current_currency"]) ? $context["current_currency"] : null), "code", array());
                    echo "</span>";
                }
                // line 23
                echo "          </span>
        </button>
        <div class=\"dropdown-menu j-dropdown\">
          <ul class=\"j-menu\">";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 28
                    if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                        // line 29
                        echo "                <li>
                  <a class=\"currency-select\" data-name=\"";
                        // line 30
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "\">
                    <span class=\"currency-symbol\">";
                        // line 31
                        echo $this->getAttribute($context["currency"], "symbol_left", array());
                        echo "</span>
                    <span class=\"currency-title-dropdown\">";
                        // line 32
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</span>
                    <span class=\"currency-code-dropdown\">";
                        // line 33
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "</span>
                  </a>
                </li>";
                    } else {
                        // line 37
                        echo "                <li>
                  <a class=\"currency-select\" data-name=\"";
                        // line 38
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "\">
                    <span class=\"currency-symbol\">";
                        // line 39
                        echo $this->getAttribute($context["currency"], "symbol_right", array());
                        echo "</span>
                    <span class=\"currency-title-dropdown\">";
                        // line 40
                        echo $this->getAttribute($context["currency"], "title", array());
                        echo "</span>
                    <span class=\"currency-code-dropdown\">";
                        // line 41
                        echo $this->getAttribute($context["currency"], "code", array());
                        echo "</span>
                  </a>
                </li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "          </ul>
        </div>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 50
                echo (isset($context["redirect"]) ? $context["redirect"] : null);
                echo "\"/>
    </form>
  </div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 50,  132 => 46,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  107 => 37,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  86 => 29,  84 => 28,  80 => 27,  75 => 23,  71 => 21,  67 => 20,  62 => 19,  58 => 17,  54 => 16,  49 => 15,  47 => 14,  41 => 10,  38 => 9,  31 => 6,  29 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if j3.settings.get('catalogCurrencyStatus') %}*/
/* {% if currencies|length > 1 %}*/
/*   {% set current_currency = null %}*/
/*   {% for currency in currencies %}*/
/*     {% if currency.code == code %}*/
/*       {% set current_currency = currency %}*/
/*     {% endif %}*/
/*   {% endfor %}*/
/*   <div id="currency" class="currency">*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*       <div class="dropdown drop-menu">*/
/*         <button type="button" class="dropdown-toggle" data-toggle="dropdown">*/
/*           <span class="currency-symbol-title">*/
/*             {% if current_currency.symbol_left %}*/
/*               <span class="symbol">{{ current_currency.symbol_left }}</span>*/
/*               <span class="currency-title">{{ current_currency.title }}</span>*/
/*               <span class="currency-code">{{ current_currency.code }}</span>*/
/*             {% else %}*/
/*               <span class="symbol">{{ current_currency.symbol_right }}</span>*/
/*               <span class="currency-title">{{ current_currency.title }}</span>*/
/*               <span class="currency-code">{{ current_currency.code }}</span>*/
/*             {% endif %}*/
/*           </span>*/
/*         </button>*/
/*         <div class="dropdown-menu j-dropdown">*/
/*           <ul class="j-menu">*/
/*             {% for currency in currencies %}*/
/*               {% if currency.symbol_left %}*/
/*                 <li>*/
/*                   <a class="currency-select" data-name="{{ currency.code }}">*/
/*                     <span class="currency-symbol">{{ currency.symbol_left }}</span>*/
/*                     <span class="currency-title-dropdown">{{ currency.title }}</span>*/
/*                     <span class="currency-code-dropdown">{{ currency.code }}</span>*/
/*                   </a>*/
/*                 </li>*/
/*               {% else %}*/
/*                 <li>*/
/*                   <a class="currency-select" data-name="{{ currency.code }}">*/
/*                     <span class="currency-symbol">{{ currency.symbol_right }}</span>*/
/*                     <span class="currency-title-dropdown">{{ currency.title }}</span>*/
/*                     <span class="currency-code-dropdown">{{ currency.code }}</span>*/
/*                   </a>*/
/*                 </li>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <input type="hidden" name="code" value=""/>*/
/*       <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*     </form>*/
/*   </div>*/
/* {% endif %}*/
/* {% endif %}*/
/* */
