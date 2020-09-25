<?php

/* journal3/template/journal3/module/icons_menu.twig */
class __TwigTemplate_985e1f6fd49ba12f3a3075173c9fea8ab28a46746d1258a6c670d3bdba81f0e0 extends Twig_Template
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
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 2
            echo "  <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">";
            // line 3
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 4
                echo "      <h3 class=\"title module-title\">";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "</h3>";
            }
            // line 6
            echo "    <ul>";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                echo "\">";
                // line 9
                if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                    // line 10
                    echo "            <a";
                    if ((isset($context["tooltipStatus"]) ? $context["tooltipStatus"] : null)) {
                        echo "data-toggle=\"tooltip\" data-tooltip-class=\"icons-menu-tooltip-";
                        echo (isset($context["module_id"]) ? $context["module_id"] : null);
                        echo "\" data-placement=\"";
                        echo (isset($context["tooltipPosition"]) ? $context["tooltipPosition"] : null);
                        echo "\" title=\"";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "\"";
                    }
                    echo " href=\"";
                    echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                    echo "\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                    echo ">";
                    // line 11
                    if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                        // line 12
                        echo "                <img src=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo "\"";
                        if ($this->getAttribute($context["item"], "image2x", array())) {
                            echo " srcset=\"";
                            echo $this->getAttribute($context["item"], "image", array());
                            echo " 1x,";
                            echo $this->getAttribute($context["item"], "image2x", array());
                            echo " 2x\"";
                        }
                        echo " width=\"";
                        echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "height", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "\" class=\"info-block-img\"/>";
                    }
                    // line 14
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                    echo "
            </a>";
                } else {
                    // line 17
                    echo "            <a>";
                    // line 18
                    if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                        // line 19
                        echo "                <img src=\"";
                        echo $this->getAttribute($context["item"], "image", array());
                        echo "\"";
                        if ($this->getAttribute($context["item"], "image2x", array())) {
                            echo " srcset=\"";
                            echo $this->getAttribute($context["item"], "image", array());
                            echo " 1x,";
                            echo $this->getAttribute($context["item"], "image2x", array());
                            echo " 2x\"";
                        }
                        echo " width=\"";
                        echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute((isset($context["imageDimensions"]) ? $context["imageDimensions"] : null), "height", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "\" class=\"info-block-img\"/>";
                    }
                    // line 21
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                    echo "
            </a>";
                }
                // line 24
                echo "        </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </ul>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/icons_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  114 => 24,  109 => 21,  90 => 19,  88 => 18,  86 => 17,  81 => 14,  62 => 12,  60 => 11,  44 => 10,  42 => 9,  38 => 8,  34 => 7,  32 => 6,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if items %}*/
/*   <div class="{{ j3.classes(classes) }}">*/
/*     {% if title %}*/
/*       <h3 class="title module-title">{{ title }}</h3>*/
/*     {% endif %}*/
/*     <ul>*/
/*       {% for item in items %}*/
/*         <li class="{{ j3.classes(item.classes) }}">*/
/*           {% if item.link.href %}*/
/*             <a {% if tooltipStatus %}data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-{{ module_id }}" data-placement="{{ tooltipPosition }}" title="{{ item.title }}"{% endif %} href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>*/
/*               {% if item.type == 'image' %}*/
/*                 <img src="{{ item.image }}" {% if item.image2x %} srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} width="{{ imageDimensions.width }}" height="{{ imageDimensions.height }}" alt="{{ item.title }}" class="info-block-img"/>*/
/*               {% endif %}*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*             </a>*/
/*           {% else %}*/
/*             <a>*/
/*               {% if item.type == 'image' %}*/
/*                 <img src="{{ item.image }}" {% if item.image2x %} srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} width="{{ imageDimensions.width }}" height="{{ imageDimensions.height }}" alt="{{ item.title }}" class="info-block-img"/>*/
/*               {% endif %}*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*             </a>*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
