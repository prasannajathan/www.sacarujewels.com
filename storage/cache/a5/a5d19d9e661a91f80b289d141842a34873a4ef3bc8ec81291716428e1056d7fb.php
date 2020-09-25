<?php

/* journal3/template/journal3/module/main_menu.twig */
class __TwigTemplate_0bae5e3b9a2ec7a84734dc83919afc8a75af24db772a43f14a82d8d00cfc9640 extends Twig_Template
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
        // line 33
        $context["self"] = $this;
        // line 34
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 35
            $context["isMobile"] = $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "mobile-header-active"), "method");
            // line 36
            if ((isset($context["first"]) ? $context["first"] : null)) {
                // line 37
                echo "  <div class=\"menu-trigger menu-item main-menu-item\"><ul class=\"j-menu\"><li><a>";
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "menuTriggerText"), "method");
                echo "</a></li></ul></div>";
            }
            // line 39
            echo "  <div id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
            echo "\">
    <ul class=\"j-menu\">";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                $context["cid"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "uniqueId", array(0 => "collapse-"), "method");
                // line 42
                echo "      <li class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
                if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                    echo "open";
                }
                echo "\"";
                if ($this->getAttribute($context["item"], "isOpen", array())) {
                    echo "data-is-open";
                }
                echo ">";
                // line 43
                if ($this->getAttribute($context["item"], "items", array())) {
                    // line 44
                    if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                        // line 45
                        echo "            <a href=\"";
                        echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                        echo "\"";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                        if (((isset($context["display"]) ? $context["display"] : null) == "dropdown")) {
                            echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\"";
                        } else {
                            echo " class=\"collapse-toggle\"";
                        }
                        echo ">";
                        // line 46
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                        echo "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 47
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\"";
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "aria-expanded=\"true\"";
                        }
                        echo "><i class=\"fa fa-plus\"></i></span>";
                        // line 48
                        if ($this->getAttribute($context["item"], "label", array())) {
                            // line 49
                            echo "                <span class=\"menu-label\">";
                            echo $this->getAttribute($context["item"], "label", array());
                            echo "</span>";
                        }
                        // line 51
                        echo "            </a>";
                    } else {
                        // line 53
                        echo "            <a";
                        if (((isset($context["display"]) ? $context["display"] : null) == "dropdown")) {
                            echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\"";
                        } else {
                            echo " class=\"collapse-toggle\"";
                        }
                        echo ">";
                        // line 54
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                        echo "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 55
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\"";
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "aria-expanded=\"true\"";
                        }
                        echo "><i class=\"fa fa-plus\"></i></span>";
                        // line 56
                        if ($this->getAttribute($context["item"], "label", array())) {
                            // line 57
                            echo "                <span class=\"menu-label\">";
                            echo $this->getAttribute($context["item"], "label", array());
                            echo "</span>";
                        }
                        // line 59
                        echo "            </a>";
                    }
                    // line 61
                    if (($this->getAttribute($context["item"], "type", array()) == "multilevel")) {
                        // line 62
                        echo "            <div class=\"";
                        echo ((((isset($context["display"]) ? $context["display"] : null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\">
              <ul class=\"j-menu\">";
                        // line 64
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 65
                            echo $context["self"]->getrenderMenu((isset($context["j3"]) ? $context["j3"] : null), $context["subitem"], (isset($context["display"]) ? $context["display"] : null));
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "              </ul>
            </div>";
                    }
                    // line 70
                    if (($this->getAttribute($context["item"], "type", array()) == "megamenu")) {
                        // line 71
                        echo "            <div class=\"";
                        echo ((((isset($context["display"]) ? $context["display"] : null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\">
              <div class=\"mega-menu-content\">";
                        // line 72
                        echo $this->getAttribute($context["item"], "items", array());
                        echo "</div>
            </div>";
                    }
                    // line 75
                    if (($this->getAttribute($context["item"], "type", array()) == "flyout")) {
                        // line 76
                        echo "            <div class=\"";
                        echo ((((isset($context["display"]) ? $context["display"] : null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        if (((isset($context["isMobile"]) ? $context["isMobile"] : null) && $this->getAttribute($context["item"], "isOpen", array()))) {
                            echo "in";
                        }
                        echo "\" id=\"";
                        echo (isset($context["cid"]) ? $context["cid"] : null);
                        echo "\">";
                        // line 77
                        echo $this->getAttribute($context["item"], "items", array());
                        echo "
            </div>";
                    }
                } else {
                    // line 81
                    if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                        // line 82
                        echo "            <a href=\"";
                        echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                        echo "\"";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                        echo ">";
                        // line 83
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                        // line 84
                        if ($this->getAttribute($context["item"], "label", array())) {
                            // line 85
                            echo "                <span class=\"menu-label\">";
                            echo $this->getAttribute($context["item"], "label", array());
                            echo "</span>";
                        }
                        // line 87
                        echo "            </a>";
                    } else {
                        // line 89
                        echo "            <a>";
                        // line 90
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute($context["item"], "link", array()), "classes", array())), "method");
                        // line 91
                        if ($this->getAttribute($context["item"], "label", array())) {
                            // line 92
                            echo "                <span class=\"menu-label\">";
                            echo $this->getAttribute($context["item"], "label", array());
                            echo "</span>";
                        }
                        // line 94
                        echo "            </a>";
                    }
                }
                // line 97
                echo "      </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    </ul>
  </div>";
        }
    }

    // line 1
    public function getrenderMenu($__j3__ = null, $__item__ = null, $__display__ = null, ...$__varargs__)
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
            $context["cid"] = $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "uniqueId", array(0 => "collapse-"), "method");
            // line 4
            echo "  <li class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "classes", array())), "method");
            echo "\">";
            // line 5
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array())) {
                // line 6
                if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array())) {
                    // line 7
                    echo "        <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array());
                    echo "\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array())), "method");
                    if (((isset($context["display"]) ? $context["display"] : null) == "dropdown")) {
                        echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\"";
                    } else {
                        echo " class=\"collapse-toggle\"";
                    }
                    echo ">";
                    // line 8
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 9
                    echo (isset($context["cid"]) ? $context["cid"] : null);
                    echo "\"><i class=\"fa fa-plus\"></i></span>
        </a>";
                } else {
                    // line 12
                    echo "        <a";
                    if (((isset($context["display"]) ? $context["display"] : null) == "dropdown")) {
                        echo " class=\"dropdown-toggle\" data-toggle=\"dropdown\"";
                    } else {
                        echo " class=\"collapse-toggle\"";
                    }
                    echo ">";
                    // line 13
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 14
                    echo (isset($context["cid"]) ? $context["cid"] : null);
                    echo "\"><i class=\"fa fa-plus\"></i></span>
        </a>";
                }
                // line 17
                echo "     <div class=\"";
                echo ((((isset($context["display"]) ? $context["display"] : null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                echo "\" id=\"";
                echo (isset($context["cid"]) ? $context["cid"] : null);
                echo "\">
       <ul class=\"j-menu\">";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 20
                    echo $context["self"]->getrenderMenu((isset($context["j3"]) ? $context["j3"] : null), $context["subitem"], (isset($context["display"]) ? $context["display"] : null));
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "       </ul>
     </div>";
            } else {
                // line 25
                if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array())) {
                    // line 26
                    echo "        <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "href", array());
                    echo "\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array())), "method");
                    echo ">";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "</a>";
                } else {
                    // line 28
                    echo "        <a>";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "countBadge", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "total", array()), 2 => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "classes", array())), "method");
                    echo "</a>";
                }
            }
            // line 31
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
        return "journal3/template/journal3/module/main_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 31,  323 => 28,  314 => 26,  312 => 25,  308 => 22,  302 => 20,  298 => 19,  291 => 17,  286 => 14,  282 => 13,  274 => 12,  269 => 9,  265 => 8,  254 => 7,  252 => 6,  250 => 5,  246 => 4,  244 => 3,  242 => 2,  228 => 1,  222 => 99,  216 => 97,  212 => 94,  207 => 92,  205 => 91,  203 => 90,  201 => 89,  198 => 87,  193 => 85,  191 => 84,  189 => 83,  183 => 82,  181 => 81,  175 => 77,  166 => 76,  164 => 75,  159 => 72,  149 => 71,  147 => 70,  143 => 67,  137 => 65,  133 => 64,  123 => 62,  121 => 61,  118 => 59,  113 => 57,  111 => 56,  104 => 55,  100 => 54,  92 => 53,  89 => 51,  84 => 49,  82 => 48,  75 => 47,  71 => 46,  60 => 45,  58 => 44,  56 => 43,  45 => 42,  43 => 41,  39 => 40,  32 => 39,  27 => 37,  25 => 36,  23 => 35,  21 => 34,  19 => 33,);
    }
}
/* {% macro renderMenu(j3, item, display) %}*/
/*   {% import _self as self %}*/
/*   {% set cid = j3.uniqueId('collapse-') %}*/
/*   <li class="{{ j3.classes(item.classes) }}">*/
/*     {% if item.items %}*/
/*       {% if item.link.href %}*/
/*         <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }} {% if display == 'dropdown' %} class="dropdown-toggle" data-toggle="dropdown" {% else %} class="collapse-toggle"{% endif %}>*/
/*           {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*           <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ cid }}"><i class="fa fa-plus"></i></span>*/
/*         </a>*/
/*       {% else %}*/
/*         <a {% if display == 'dropdown' %} class="dropdown-toggle" data-toggle="dropdown" {% else %} class="collapse-toggle"{% endif %}>*/
/*           {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*           <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ cid }}"><i class="fa fa-plus"></i></span>*/
/*         </a>*/
/*       {% endif %}*/
/*      <div class="{{ display == 'dropdown' ? 'dropdown-menu j-dropdown': 'collapse' }}" id="{{ cid }}">*/
/*        <ul class="j-menu">*/
/*          {% for subitem in item.items %}*/
/*            {{ self.renderMenu(j3, subitem, display) }}*/
/*          {% endfor %}*/
/*        </ul>*/
/*      </div>*/
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
/*   {% set isMobile = j3.document.hasClass('mobile-header-active') %}*/
/*   {% if first %}*/
/*   <div class="menu-trigger menu-item main-menu-item"><ul class="j-menu"><li><a>{{ j3.settings.get('menuTriggerText') }}</a></li></ul></div>*/
/*   {% endif %}*/
/*   <div id="{{ id }}" class="{{ j3.classes(classes) }}">*/
/*     <ul class="j-menu">{% for item in items %}*/
/*       {% set cid = j3.uniqueId('collapse-') %}*/
/*       <li class="{{ j3.classes(item.classes) }} {% if isMobile and item.isOpen %}open{% endif %}" {% if item.isOpen %}data-is-open{% endif %}>*/
/*         {% if item.items %}*/
/*           {% if item.link.href %}*/
/*             <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }} {% if display == 'dropdown' %} class="dropdown-toggle" data-toggle="dropdown" {% else %} class="collapse-toggle"{% endif %}>*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*               <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ cid }}" {% if isMobile and item.isOpen %}aria-expanded="true"{% endif %}><i class="fa fa-plus"></i></span>*/
/*               {% if item.label %}*/
/*                 <span class="menu-label">{{ item.label }}</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% else %}*/
/*             <a {% if display == 'dropdown' %} class="dropdown-toggle" data-toggle="dropdown" {% else %} class="collapse-toggle"{% endif %}>*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*               <span class="open-menu collapsed" data-toggle="collapse" data-target="#{{ cid }}" {% if isMobile and item.isOpen %}aria-expanded="true"{% endif %}><i class="fa fa-plus"></i></span>*/
/*               {% if item.label %}*/
/*                 <span class="menu-label">{{ item.label }}</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% endif %}*/
/*           {% if item.type == 'multilevel' %}*/
/*             <div class="{{ display == 'dropdown' ? 'dropdown-menu j-dropdown': 'collapse' }} {% if isMobile and item.isOpen %}in{% endif %}" id="{{ cid }}">*/
/*               <ul class="j-menu">*/
/*                 {% for subitem in item.items %}*/
/*                   {{ self.renderMenu(j3, subitem, display) }}*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if item.type == 'megamenu' %}*/
/*             <div class="{{ display == 'dropdown' ? 'dropdown-menu j-dropdown': 'collapse' }} {% if isMobile and item.isOpen %}in{% endif %}" id="{{ cid }}">*/
/*               <div class="mega-menu-content">{{ item.items }}</div>*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if item.type == 'flyout' %}*/
/*             <div class="{{ display == 'dropdown' ? 'dropdown-menu j-dropdown': 'collapse' }} {% if isMobile and item.isOpen %}in{% endif %}" id="{{ cid }}">*/
/*               {{ item.items }}*/
/*             </div>*/
/*           {% endif %}*/
/*         {% else %}*/
/*           {% if item.link.href %}*/
/*             <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}>*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*               {% if item.label %}*/
/*                 <span class="menu-label">{{ item.label }}</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% else %}*/
/*             <a>*/
/*               {{ j3.countBadge(item.title, item.link.total, item.link.classes) }}*/
/*               {% if item.label %}*/
/*                 <span class="menu-label">{{ item.label }}</span>*/
/*               {% endif %}*/
/*             </a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
