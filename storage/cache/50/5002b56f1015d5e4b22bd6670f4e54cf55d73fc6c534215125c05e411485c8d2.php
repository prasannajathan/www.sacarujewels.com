<?php

/* journal3/template/journal3/module/top_menu.twig */
class __TwigTemplate_59aa8a30bca3b404b6a281f2a8581ea8fc69da8cc60c423f711906b6b6ca46d2 extends Twig_Template
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
        // line 26
        $context["self"] = $this;
        // line 27
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 28
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    <ul class=\"j-menu\">";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo $context["self"]->getrenderTopMenu((isset($context["j3"]) ? $context["j3"] : null), $context["item"]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </ul>
  </div>";
        }
    }

    // line 1
    public function getrenderTopMenu($__j3__ = null, $__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "j3" => $__j3__,
            "item" => $__item__,
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
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array())) {
                // line 5
                if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array())) {
                    // line 6
                    echo "        <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array());
                    echo "\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array())), "method");
                    echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "</a>";
                } else {
                    // line 8
                    echo "        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "</a>";
                }
                // line 10
                echo "      <div class=\"dropdown-menu j-dropdown\">
        <ul class=\"j-menu\">";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 13
                    echo $context["self"]->getrenderTopMenu((isset($context["j3"]) ? $context["j3"] : null), $context["subitem"]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </ul>
      </div>";
            } else {
                // line 18
                if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array())) {
                    // line 19
                    echo "        <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array());
                    echo "\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array())), "method");
                    echo ">";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "</a>";
                } else {
                    // line 21
                    echo "        <a>";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "</a>";
                }
            }
            // line 24
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
        return "journal3/template/journal3/module/top_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 24,  109 => 21,  100 => 19,  98 => 18,  94 => 15,  88 => 13,  84 => 12,  81 => 10,  76 => 8,  67 => 6,  65 => 5,  63 => 4,  59 => 3,  57 => 2,  44 => 1,  38 => 33,  32 => 31,  28 => 30,  23 => 28,  21 => 27,  19 => 26,);
    }
}
/* {% macro renderTopMenu(j3, item) %}*/
/*   {% import _self as self %}*/
/*   <li class="{{ j3.classes(item.classes) }}">*/
/*     {% if item.items %}*/
/*       {% if item.link.href %}*/
/*         <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }} class="dropdown-toggle" data-toggle="dropdown">{{ j3.countBadge(item.title, item.link.total, item.link.classes) }}</a>*/
/*       {% else %}*/
/*         <a class="dropdown-toggle" data-toggle="dropdown">{{ j3.countBadge(item.title, item.link.total, item.link.classes) }}</a>*/
/*       {% endif %}*/
/*       <div class="dropdown-menu j-dropdown">*/
/*         <ul class="j-menu">*/
/*           {% for subitem in item.items %}*/
/*             {{ self.renderTopMenu(j3, subitem) }}*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     {% else %}*/
/*       {% if item.link.href %}*/
/*         <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>{{ j3.countBadge(item.title, item.link.total, item.link.classes) }}</a>*/
/*       {% else %}*/
/*         <a>{{ j3.countBadge(item.title, item.link.total, item.link.classes) }}</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </li>*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* {% if items %}*/
/*   <div class="{{ j3.classes(classes) }}">*/
/*     <ul class="j-menu">*/
/*       {% for item in items %}*/
/*         {{ self.renderTopMenu(j3, item) }}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
