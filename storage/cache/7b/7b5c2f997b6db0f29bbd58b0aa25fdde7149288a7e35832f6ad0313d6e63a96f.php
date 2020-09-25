<?php

/* journal3/template/journal3/module/blog_posts.twig */
class __TwigTemplate_1368ed79719aee06020783f02db66786557db2776908d4705e1594700bc2be3b extends Twig_Template
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
        // line 23
        $context["self"] = $this;
        // line 24
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\">
  <div class=\"module-body\">";
        // line 27
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "blocks")) {
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "        <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">";
                // line 30
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 31
                    echo "            <h3 class=\"title module-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h3>";
                }
                // line 33
                echo $context["self"]->getrenderPostsItem($context["item"], $context);
                echo "
        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 38
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "tabs")) {
            // line 39
            echo "      <div class=\"tab-container\">
      <ul class=\"nav nav-tabs\">";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 42
                echo "          <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
            <a href=\"#";
                // line 43
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-tab-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" data-toggle=\"tab\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
          </li>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "      </ul>
      <div class=\"tab-content\">";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 49
                echo "          <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-tab-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">";
                // line 50
                echo $context["self"]->getrenderPostsItem($context["item"], $context);
                echo "
          </div>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
      </div>";
        }
        // line 57
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "accordion")) {
            // line 58
            echo "      <div class=\"panel-group\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "-collapse\">";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 60
                echo "          <div class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 63
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse\" aria-expanded=\"false\">";
                // line 64
                echo $this->getAttribute($context["item"], "title", array());
                echo "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 69
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "panel_classes", array())), "method");
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-collapse-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">
              <div class=\"panel-body\">";
                // line 71
                echo $context["self"]->getrenderPostsItem($context["item"], $context);
                echo "
              </div>
            </div>
          </div>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "      </div>";
        }
        // line 79
        if (((isset($context["sectionsDisplay"]) ? $context["sectionsDisplay"] : null) == "isotope")) {
            // line 80
            echo "      <ul class=\"nav nav-tabs\">";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 82
                echo "          <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "tab_classes", array())), "method");
                echo "\">
            <a data-filter=\".";
                // line 83
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "-section-";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</a>
          </li>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "      </ul>
      <div class=\"post-";
            // line 87
            echo (isset($context["display"]) ? $context["display"] : null);
            echo " isotope-grid\">";
            // line 88
            $this->loadTemplate((("journal3/template/journal3/post_" . (isset($context["display"]) ? $context["display"] : null)) . ".twig"), "journal3/template/journal3/module/blog_posts.twig", 88)->display($context);
            // line 89
            echo "      </div>";
        }
        // line 91
        echo "  </div>
</div>
";
    }

    // line 1
    public function getrenderPostsItem($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["self"] = $this;
            // line 3
            $context["posts"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "posts", array());
            // line 4
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "carousel", array())) {
                // line 5
                echo "    <div class=\"swiper\"";
                if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array()) == "grid")) {
                    echo "data-items-per-row='";
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "itemsPerRow", array()), twig_constant("JSON_FORCE_OBJECT"));
                    echo "'";
                }
                echo " data-options='";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "carouselOptions", array()), twig_constant("JSON_FORCE_OBJECT"));
                echo "'>
      <div class=\"swiper-container\"";
                // line 6
                if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "isRTL", array(), "method")) {
                    echo "dir=\"rtl\"";
                }
                echo ">
        <div class=\"swiper-wrapper post-";
                // line 7
                echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array());
                echo "\">";
                // line 8
                $this->loadTemplate((("journal3/template/journal3/post_" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array())) . ".twig"), "journal3/template/journal3/module/blog_posts.twig", 8)->display(array_merge($context, (isset($context["context"]) ? $context["context"] : null)));
                // line 9
                echo "        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>";
            } else {
                // line 18
                echo "    <div class=\"post-";
                echo $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array());
                echo "\">";
                // line 19
                $this->loadTemplate((("journal3/template/journal3/post_" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "display", array())) . ".twig"), "journal3/template/journal3/module/blog_posts.twig", 19)->display(array_merge($context, (isset($context["context"]) ? $context["context"] : null)));
                // line 20
                echo "    </div>";
            }
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
        return "journal3/template/journal3/module/blog_posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 20,  339 => 19,  335 => 18,  325 => 9,  323 => 8,  320 => 7,  314 => 6,  303 => 5,  301 => 4,  299 => 3,  297 => 2,  284 => 1,  278 => 91,  275 => 89,  273 => 88,  270 => 87,  267 => 86,  247 => 83,  242 => 82,  225 => 81,  223 => 80,  221 => 79,  218 => 76,  200 => 71,  192 => 69,  184 => 64,  177 => 63,  170 => 60,  153 => 59,  149 => 58,  147 => 57,  143 => 53,  127 => 50,  119 => 49,  102 => 48,  99 => 46,  79 => 43,  74 => 42,  57 => 41,  54 => 39,  52 => 38,  43 => 33,  38 => 31,  36 => 30,  32 => 29,  28 => 28,  26 => 27,  21 => 24,  19 => 23,);
    }
}
/* {% macro renderPostsItem(item, context) %}*/
/*   {% import _self as self %}*/
/*   {% set posts = item.posts %}*/
/*   {% if context.carousel %}*/
/*     <div class="swiper" {% if context.display == 'grid' %}data-items-per-row='{{ context.itemsPerRow|json_encode(constant('JSON_FORCE_OBJECT')) }}'{% endif %} data-options='{{ context.carouselOptions|json_encode(constant('JSON_FORCE_OBJECT')) }}'>*/
/*       <div class="swiper-container" {% if j3.isRTL() %}dir="rtl"{% endif %}>*/
/*         <div class="swiper-wrapper post-{{ context.display }}">*/
/*           {% include "journal3/template/journal3/post_" ~ context.display ~ ".twig" with context %}*/
/*         </div>*/
/*       </div>*/
/*       <div class="swiper-buttons">*/
/*         <div class="swiper-button-prev"></div>*/
/*         <div class="swiper-button-next"></div>*/
/*       </div>*/
/*       <div class="swiper-pagination"></div>*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="post-{{ context.display }}">*/
/*       {% include "journal3/template/journal3/post_" ~ context.display ~ ".twig" with context %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* <div class="{{ j3.classes(classes) }}">*/
/*   <div class="module-body">*/
/*     {# grid #}*/
/*     {% if sectionsDisplay == 'blocks' %}*/
/*       {% for item in items %}*/
/*         <div class="{{ j3.classes(item.classes) }}">*/
/*           {% if item.title %}*/
/*             <h3 class="title module-title">{{ item.title }}</h3>*/
/*           {% endif %}*/
/*           {{ self.renderPostsItem(item, _context) }}*/
/*         </div>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*     {# tabs #}*/
/*     {% if sectionsDisplay == 'tabs' %}*/
/*       <div class="tab-container">*/
/*       <ul class="nav nav-tabs">*/
/*         {% for item in items %}*/
/*           <li class="{{ j3.classes(item.tab_classes) }}">*/
/*             <a href="#{{ id }}-tab-{{ loop.index }}" data-toggle="tab">{{ item.title }}</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="tab-content">*/
/*         {% for item in items %}*/
/*           <div class="{{ j3.classes(item.classes) }}" id="{{ id }}-tab-{{ loop.index }}">*/
/*             {{ self.renderPostsItem(item, _context) }}*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {# accordion #}*/
/*     {% if sectionsDisplay == 'accordion' %}*/
/*       <div class="panel-group" id="{{ id }}-collapse">*/
/*         {% for item in items %}*/
/*           <div class="{{ j3.classes(item.classes) }}">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">*/
/*                 <a href="#{{ id }}-collapse-{{ loop.index }}" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#{{ id }}-collapse" aria-expanded="false">*/
/*                   {{ item.title }}*/
/*                   <i class="fa fa-caret-down"></i>*/
/*                 </a>*/
/*               </h4>*/
/*             </div>*/
/*             <div class="{{ j3.classes(item.panel_classes) }}" id="{{ id }}-collapse-{{ loop.index }}">*/
/*               <div class="panel-body">*/
/*                 {{ self.renderPostsItem(item, _context) }}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endif %}*/
/*     {# isotope #}*/
/*     {% if sectionsDisplay == 'isotope' %}*/
/*       <ul class="nav nav-tabs">*/
/*         {% for item in items %}*/
/*           <li class="{{ j3.classes(item.tab_classes) }}">*/
/*             <a data-filter=".{{ id }}-section-{{ loop.index }}">{{ item.title }}</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="post-{{ display }} isotope-grid">*/
/*         {% include "journal3/template/journal3/post_" ~ display ~ ".twig" %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
