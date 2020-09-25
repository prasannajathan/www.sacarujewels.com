<?php

/* journal3/template/journal3/headers/desktop/compact.twig */
class __TwigTemplate_d8f6c8595ff17c7085b633968e6b045fc3d99e96bd9da1e8bd34a6dc6d09dd4a extends Twig_Template
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
        echo "<div class=\"header header-compact header-sm\">
  <div class=\"top-bar navbar-nav\">";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_top_menu"), "method");
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "langPosition"), "method") == "top")) {
            // line 6
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">";
            // line 8
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">";
            // line 11
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "
        </div>
      </div>";
        }
        // line 15
        echo "    <div class=\"third-menu\">";
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_top_menu_3"), "method");
        echo "</div>";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "secondaryMenuPosition"), "method") == "top")) {
            // line 17
            echo "      <div class=\"top-menu secondary-menu\">";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_top_menu_2"), "method");
            echo "</div>";
        }
        // line 19
        echo "  </div>
  <div class=\"mid-bar navbar-nav\">
    <div class=\"desktop-logo-wrapper\">
      <div id=\"logo\">";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method")) {
            // line 24
            echo "          <a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">
            <img src=\"";
            // line 25
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method");
            echo "\"";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo2x_src"), "method")) {
                echo "srcset=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_src"), "method");
                echo " 1x,";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo2x_src"), "method");
                echo " 2x\"";
            }
            echo " width=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_width"), "method");
            echo "\" height=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "logo_height"), "method");
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\"/>
          </a>";
        } else {
            // line 28
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>";
        }
        // line 30
        echo "      </div>
    </div>
    <div class=\"desktop-main-menu-wrapper navbar-nav\">";
        // line 33
        echo (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method")) ? ("") : ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_main_menu"), "method")));
        echo "
    </div>

    <div class=\"header-cart-group\">";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "langPosition"), "method") == "search")) {
            // line 38
            echo "        <div class=\"language-currency top-menu\">
          <div class=\"desktop-language-wrapper\">";
            // line 40
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "
          </div>
          <div class=\"desktop-currency-wrapper\">";
            // line 43
            echo (isset($context["currency"]) ? $context["currency"] : null);
            echo "
          </div>
        </div>";
        }
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "secondaryMenuPosition"), "method") == "cart")) {
            // line 48
            echo "        <div class=\"top-menu secondary-menu\">";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "desktop_top_menu_2"), "method");
            echo "</div>";
        }
        // line 50
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogSearchStatus"), "method")) {
            // line 51
            echo "      <div class=\"desktop-search-wrapper mini-search\">";
            // line 52
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "
      </div>";
        }
        // line 55
        echo "      <div class=\"desktop-cart-wrapper\">";
        // line 56
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/compact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 56,  133 => 55,  128 => 52,  126 => 51,  124 => 50,  119 => 48,  117 => 47,  111 => 43,  106 => 40,  103 => 38,  101 => 37,  95 => 33,  91 => 30,  84 => 28,  63 => 25,  58 => 24,  56 => 23,  51 => 19,  46 => 17,  44 => 16,  40 => 15,  34 => 11,  29 => 8,  26 => 6,  24 => 5,  22 => 3,  19 => 1,);
    }
}
/* <div class="header header-compact header-sm">*/
/*   <div class="top-bar navbar-nav">*/
/*     {{ j3.settings.get('desktop_top_menu') }}*/
/* */
/*     {% if j3.settings.get('langPosition') == 'top' %}*/
/*       <div class="language-currency top-menu">*/
/*         <div class="desktop-language-wrapper">*/
/*           {{ language }}*/
/*         </div>*/
/*         <div class="desktop-currency-wrapper">*/
/*           {{ currency }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="third-menu">{{ j3.settings.get('desktop_top_menu_3') }}</div>*/
/*     {% if j3.settings.get('secondaryMenuPosition') == 'top' %}*/
/*       <div class="top-menu secondary-menu">{{ j3.settings.get('desktop_top_menu_2') }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="mid-bar navbar-nav">*/
/*     <div class="desktop-logo-wrapper">*/
/*       <div id="logo">*/
/*         {% if j3.settings.get('logo_src') %}*/
/*           <a href="{{ home }}">*/
/*             <img src="{{ j3.settings.get('logo_src') }}" {% if j3.settings.get('logo2x_src') %}srcset="{{ j3.settings.get('logo_src') }} 1x, {{ j3.settings.get('logo2x_src') }} 2x"{% endif %} width="{{ j3.settings.get('logo_width') }}" height="{{ j3.settings.get('logo_height') }}" alt="{{ name }}" title="{{ name }}"/>*/
/*           </a>*/
/*         {% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     <div class="desktop-main-menu-wrapper navbar-nav">*/
/*       {{ j3.document.hasClass('mobile-header-active') ? '' : j3.settings.get('desktop_main_menu') }}*/
/*     </div>*/
/* */
/*     <div class="header-cart-group">*/
/*       {% if j3.settings.get('langPosition') == 'search' %}*/
/*         <div class="language-currency top-menu">*/
/*           <div class="desktop-language-wrapper">*/
/*             {{ language }}*/
/*           </div>*/
/*           <div class="desktop-currency-wrapper">*/
/*             {{ currency }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if j3.settings.get('secondaryMenuPosition') == 'cart' %}*/
/*         <div class="top-menu secondary-menu">{{ j3.settings.get('desktop_top_menu_2') }}</div>*/
/*       {% endif %}*/
/*       {% if j3.settings.get('catalogSearchStatus') %}*/
/*       <div class="desktop-search-wrapper mini-search">*/
/*         {{ search }}*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="desktop-cart-wrapper">*/
/*         {{ cart }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
