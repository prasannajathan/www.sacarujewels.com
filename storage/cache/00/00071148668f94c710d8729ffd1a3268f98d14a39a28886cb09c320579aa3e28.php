<?php

/* journal3/template/journal3/module/links_menu.twig */
class __TwigTemplate_b2287bb8e3b977dc372d6fae72cb16135b35adf3e45af1d0c8ed237097a34295 extends Twig_Template
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
        // line 21
        $context["self"] = $this;
        // line 22
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 23
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">";
            // line 24
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 25
                echo "      <h3 class=\"title module-title\">";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "</h3>";
            }
            // line 27
            echo "    <ul class=\"module-body\">";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo $context["self"]->getrenderLinksMenu((isset($context["j3"]) ? $context["j3"] : null), $context["item"]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </ul>
  </div>";
        }
    }

    // line 1
    public function getrenderLinksMenu($__j3__ = null, $__item__ = null, $__display__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "j3" => $__j3__,
            "item" => $__item__,
            "display" => $__display__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["self"] = $this;
            // line 3
            echo "  <li class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "classes", array())), "method");
            echo "\">";
            // line 4
            if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array())) {
                // line 5
                echo "      <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array());
                echo "\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array())), "method");
                echo ">";
                // line 6
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                // line 7
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array())) {
                    // line 8
                    echo "          <span class=\"menu-label\">";
                    echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array());
                    echo "</span>";
                }
                // line 10
                echo "      </a>";
            } else {
                // line 12
                echo "      <a>";
                // line 13
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                // line 14
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array())) {
                    // line 15
                    echo "          <span class=\"menu-label\">";
                    echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array());
                    echo "</span>";
                }
                // line 17
                echo "      </a>";
            }
            // line 19
            echo "  </li>";
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
        return "journal3/template/journal3/module/links_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  103 => 17,  98 => 15,  96 => 14,  94 => 13,  92 => 12,  89 => 10,  84 => 8,  82 => 7,  80 => 6,  74 => 5,  72 => 4,  68 => 3,  66 => 2,  52 => 1,  46 => 31,  40 => 29,  36 => 28,  34 => 27,  29 => 25,  27 => 24,  23 => 23,  21 => 22,  19 => 21,);
    }
}
/* {% macro renderLinksMenu(j3, item, display) %}*/
/*   {% import _self as self %}*/
/*   <li class="{{ j3.classes(item.classes) }}">*/
/*     {% if item.link.href %}*/
/*       <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>*/
/*         {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*         {% if item.label %}*/
/*           <span class="menu-label">{{ item.label }}</span>*/
/*         {% endif %}*/
/*       </a>*/
/*     {% else %}*/
/*       <a>*/
/*         {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*         {% if item.label %}*/
/*           <span class="menu-label">{{ item.label }}</span>*/
/*         {% endif %}*/
/*       </a>*/
/*     {% endif %}*/
/*   </li>*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* {% if items %}*/
/*   <div class="{{ j3.classes(classes) }}">*/
/*     {% if title %}*/
/*       <h3 class="title module-title">{{ title }}</h3>*/
/*     {% endif %}*/
/*     <ul class="module-body">*/
/*       {% for item in items %}*/
/*         {{ self.renderLinksMenu(j3, item) }}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
