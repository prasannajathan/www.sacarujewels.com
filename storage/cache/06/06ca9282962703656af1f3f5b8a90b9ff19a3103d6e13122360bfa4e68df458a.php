<?php

/* journal3/template/common/language.twig */
class __TwigTemplate_7cda31ce1ee56c2b209f1abe781e195ac52f62da134a1db56f86a82267e6ecb2 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogLanguageStatus"), "method")) {
            // line 2
            if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
                // line 3
                $context["current_language"] = null;
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 5
                    if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                        // line 6
                        $context["current_language"] = $context["language"];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "  <div id=\"language\" class=\"language\">
    <form action=\"";
                // line 10
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
      <div class=\"dropdown drop-menu\">
        <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"language-flag-title\">
            <span class=\"symbol\"><img src=\"";
                // line 14
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "imageToBase64", array(0 => (((("catalog/language/" . $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "code", array())) . "/") . $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "code", array())) . ".png")), "method");
                echo "\" width=\"16\" height=\"11\" alt=\"";
                echo $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "name", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "name", array());
                echo "\"/></span>
            <span class=\"language-title\">";
                // line 15
                echo $this->getAttribute((isset($context["current_language"]) ? $context["current_language"] : null), "name", array());
                echo "</span>
          </span>
        </button>
        <div class=\"dropdown-menu j-dropdown\">
          <ul class=\"j-menu\">";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 21
                    echo "              <li>
                <a class=\"language-select\" data-name=\"";
                    // line 22
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "\">
                  <span class=\"language-flag\"><img src=\"";
                    // line 23
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "imageToBase64", array(0 => (((("catalog/language/" . $this->getAttribute($context["language"], "code", array())) . "/") . $this->getAttribute($context["language"], "code", array())) . ".png")), "method");
                    echo "\" width=\"16\" height=\"11\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\"/></span>
                  <span class=\"language-title-dropdown\">";
                    // line 24
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</span>
                </a>
              </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "          </ul>
        </div>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 32
                echo (isset($context["redirect"]) ? $context["redirect"] : null);
                echo "\"/>
    </form>
  </div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  91 => 28,  82 => 24,  74 => 23,  70 => 22,  67 => 21,  63 => 20,  56 => 15,  48 => 14,  41 => 10,  38 => 9,  31 => 6,  29 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if j3.settings.get('catalogLanguageStatus') %}*/
/* {% if languages|length > 1 %}*/
/*   {% set current_language = null %}*/
/*   {% for language in languages %}*/
/*     {% if language.code == code %}*/
/*       {% set current_language = language %}*/
/*     {% endif %}*/
/*   {% endfor %}*/
/*   <div id="language" class="language">*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*       <div class="dropdown drop-menu">*/
/*         <button type="button" class="dropdown-toggle" data-toggle="dropdown">*/
/*           <span class="language-flag-title">*/
/*             <span class="symbol"><img src="{{ j3.imageToBase64('catalog/language/' ~ current_language.code ~ '/' ~ current_language.code ~ '.png') }}" width="16" height="11" alt="{{ current_language.name }}" title="{{ current_language.name }}"/></span>*/
/*             <span class="language-title">{{ current_language.name }}</span>*/
/*           </span>*/
/*         </button>*/
/*         <div class="dropdown-menu j-dropdown">*/
/*           <ul class="j-menu">*/
/*             {% for language in languages %}*/
/*               <li>*/
/*                 <a class="language-select" data-name="{{ language.code }}">*/
/*                   <span class="language-flag"><img src="{{ j3.imageToBase64('catalog/language/' ~ language.code ~ '/' ~ language.code ~ '.png') }}" width="16" height="11" alt="{{ language.name }}" title="{{ language.name }}"/></span>*/
/*                   <span class="language-title-dropdown">{{ language.name }}</span>*/
/*                 </a>*/
/*               </li>*/
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
