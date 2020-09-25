<?php

/* journal3/template/journal3/module/master_slider.twig */
class __TwigTemplate_719d9d6fffacda28d903c2fe1ea5fdb1df880fd3b85ada0acaf08ea73d51062e extends Twig_Template
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
        echo "<div class=\"";
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        echo "\" style=\"background-image:url('";
        echo (isset($context["first_image"]) ? $context["first_image"] : null);
        echo "')\">
  <div class=\"journal-loading\"><i class=\"fa fa-spinner fa-spin\"></i></div>";
        // line 3
        if (((isset($context["staticText"]) ? $context["staticText"] : null) && $this->getAttribute((isset($context["staticTextLink"]) ? $context["staticTextLink"] : null), "href", array()))) {
            // line 4
            echo "    <a href=\"";
            echo $this->getAttribute((isset($context["staticTextLink"]) ? $context["staticTextLink"] : null), "href", array());
            echo "\" class=\"slider-static-text static-text-1\"><span>";
            echo (isset($context["staticText"]) ? $context["staticText"] : null);
            echo "</span></a>";
        } elseif (        // line 5
(isset($context["staticText"]) ? $context["staticText"] : null)) {
            // line 6
            echo "    <div class=\"slider-static-text static-text-1\"><span>";
            echo (isset($context["staticText"]) ? $context["staticText"] : null);
            echo "</span></div>";
        }
        // line 8
        if (((isset($context["static2Text"]) ? $context["static2Text"] : null) && $this->getAttribute((isset($context["static2TextLink"]) ? $context["static2TextLink"] : null), "href", array()))) {
            // line 9
            echo "    <a href=\"";
            echo $this->getAttribute((isset($context["static2TextLink"]) ? $context["static2TextLink"] : null), "href", array());
            echo "\" class=\"slider-static-text static-text-2\"><span>";
            echo (isset($context["static2Text"]) ? $context["static2Text"] : null);
            echo "</span></a>";
        } elseif (        // line 10
(isset($context["static2Text"]) ? $context["static2Text"] : null)) {
            // line 11
            echo "    <div class=\"slider-static-text static-text-2\"><span>";
            echo (isset($context["static2Text"]) ? $context["static2Text"] : null);
            echo "</span></div>";
        }
        // line 13
        echo "  <img src=\"";
        echo (isset($context["first_image"]) ? $context["first_image"] : null);
        echo "\"";
        if ((isset($context["first_image2x"]) ? $context["first_image2x"] : null)) {
            echo "srcset=\"";
            echo (isset($context["first_image"]) ? $context["first_image"] : null);
            echo " 1x,";
            echo (isset($context["first_image2x"]) ? $context["first_image2x"] : null);
            echo " 2x\"";
        }
        echo " alt=\"";
        echo (isset($context["first_alt"]) ? $context["first_alt"] : null);
        echo "\" width=\"";
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" height=\"";
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" />";
        // line 15
        echo "  <div class=\"master-slider ms-skin-minimal\" data-options='";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null), twig_constant("JSON_FORCE_OBJECT"));
        echo "'";
        if ((isset($context["parallaxMode"]) ? $context["parallaxMode"] : null)) {
            echo "data-parallax=\"";
            echo (isset($context["parallax"]) ? $context["parallax"] : null);
            echo "\"";
        }
        echo ">";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "      <div class=\"";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["item"], "classes", array())), "method");
            echo "\"";
            if ($this->getAttribute($context["item"], "delay", array())) {
                echo "data-delay=\"";
                echo $this->getAttribute($context["item"], "delay", array());
                echo "\"";
            }
            echo ">";
            // line 18
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceLazyLoadImagesStatus"), "method") && (isset($context["lazyLoad"]) ? $context["lazyLoad"] : null))) {
                // line 19
                echo "          <img src=\"";
                echo (isset($context["dummy_image"]) ? $context["dummy_image"] : null);
                echo "\" data-src=\"";
                echo $this->getAttribute($context["item"], "image", array());
                echo "\"";
                if ($this->getAttribute($context["item"], "image2x", array())) {
                    echo " data-srcset=\"";
                    echo $this->getAttribute($context["item"], "image", array());
                    echo " 1x,";
                    echo $this->getAttribute($context["item"], "image2x", array());
                    echo " 2x\"";
                }
                echo " alt=\"";
                echo $this->getAttribute($context["item"], "alt", array());
                echo "\" width=\"";
                echo (isset($context["width"]) ? $context["width"] : null);
                echo "\" height=\"";
                echo (isset($context["height"]) ? $context["height"] : null);
                echo "\" class=\"lazyload\"/>";
            } else {
                // line 21
                echo "          <img src=\"";
                echo $this->getAttribute($context["item"], "image", array());
                echo "\"";
                if ($this->getAttribute($context["item"], "image2x", array())) {
                    echo " srcset=\"";
                    echo $this->getAttribute($context["item"], "image", array());
                    echo " 1x,";
                    echo $this->getAttribute($context["item"], "image2x", array());
                    echo " 2x\"";
                }
                echo " alt=\"";
                echo $this->getAttribute($context["item"], "alt", array());
                echo "\" width=\"";
                echo (isset($context["width"]) ? $context["width"] : null);
                echo "\" height=\"";
                echo (isset($context["height"]) ? $context["height"] : null);
                echo "\"/>";
            }
            // line 24
            if (((isset($context["thumbnails"]) ? $context["thumbnails"] : null) && $this->getAttribute($context["item"], "thumb", array()))) {
                // line 25
                echo "          <img src=\"";
                echo $this->getAttribute($context["item"], "thumb", array());
                echo "\"";
                if ($this->getAttribute($context["item"], "thumb2x", array())) {
                    echo "srcset=\"";
                    echo $this->getAttribute($context["item"], "thumb", array());
                    echo " 1x,";
                    echo $this->getAttribute($context["item"], "thumb2x", array());
                    echo " 2x\"";
                }
                echo " alt=\"";
                echo $this->getAttribute($context["item"], "alt", array());
                echo "\" class=\"ms-thumb\"/>";
            }
            // line 28
            if ($this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array())) {
                // line 29
                echo "          <a href=\"";
                echo $this->getAttribute($this->getAttribute($context["item"], "link", array()), "href", array());
                echo "\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["item"], "link", array())), "method");
                echo "></a>";
            }
            // line 32
            if (($this->getAttribute($context["item"], "type", array()) == "video")) {
                // line 33
                if (($this->getAttribute($context["item"], "videoType", array()) == "html5")) {
                    // line 34
                    echo "            <video data-autopause=\"true\"";
                    if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasClass", array(0 => "ios"), "method")) {
                        echo "playsinline";
                    }
                    echo ">";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "videoSrc", array()));
                    foreach ($context['_seq'] as $context["type"] => $context["src"]) {
                        // line 36
                        echo "                <source src=\"";
                        echo $context["src"];
                        echo "\" type=\"video/";
                        echo $context["type"];
                        echo "\"/>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['type'], $context['src'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "            </video>";
                } elseif (($this->getAttribute(                // line 39
$context["item"], "videoType", array()) == "youtube")) {
                    // line 40
                    echo "            <a href=\"https://www.youtube.com/embed/";
                    echo $this->getAttribute($context["item"], "videoSrc", array());
                    echo "?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1\" data-type=\"video\"></a>";
                } elseif (($this->getAttribute(                // line 41
$context["item"], "videoType", array()) == "vimeo")) {
                    // line 42
                    echo "            <a href=\"https://player.vimeo.com/video/";
                    echo $this->getAttribute($context["item"], "videoSrc", array());
                    echo "\" data-type=\"video\"></a>";
                }
            }
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 47
                if (($this->getAttribute($context["subitem"], "type", array()) == "text")) {
                    // line 48
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\"";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo ">";
                    echo $this->getAttribute($context["subitem"], "text", array());
                    echo "</div>";
                } elseif (($this->getAttribute(                // line 49
$context["subitem"], "type", array()) == "hotspot")) {
                    // line 50
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\"";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo "><div class=\"product-tt\">";
                    echo $this->getAttribute($context["subitem"], "text", array());
                    echo "</div></div>";
                } elseif (($this->getAttribute(                // line 51
$context["subitem"], "type", array()) == "shape")) {
                    // line 52
                    echo "            <img class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\"";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" alt=\"";
                    echo $this->getAttribute($context["subitem"], "alt", array());
                    echo "\"/>";
                } elseif (($this->getAttribute(                // line 53
$context["subitem"], "type", array()) == "button")) {
                    // line 54
                    echo "            <a class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\"";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    if ($this->getAttribute($this->getAttribute($context["subitem"], "link", array()), "href", array())) {
                        echo "href=\"";
                        echo $this->getAttribute($this->getAttribute($context["subitem"], "link", array()), "href", array());
                        echo "\"";
                        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "linkAttrs", array(0 => $this->getAttribute($context["subitem"], "link", array())), "method");
                    }
                    echo "><span>";
                    echo $this->getAttribute($context["subitem"], "text", array());
                    echo "</span></a>";
                } elseif (($this->getAttribute(                // line 55
$context["subitem"], "type", array()) == "image")) {
                    // line 56
                    echo "            <img class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\"";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" data-src=\"";
                    echo $this->getAttribute($context["subitem"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["subitem"], "alt", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["subitem"], "width", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["subitem"], "height", array());
                    echo "\"/>";
                } elseif (($this->getAttribute(                // line 57
$context["subitem"], "type", array()) == "video")) {
                    // line 58
                    echo "            <div class=\"";
                    echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => $this->getAttribute($context["subitem"], "classes", array())), "method");
                    echo "\"";
                    echo twig_join_filter($this->getAttribute($context["subitem"], "data", array()), " ");
                    echo ">";
                    // line 59
                    if (($this->getAttribute($context["subitem"], "videoType", array()) == "html5")) {
                        // line 60
                        echo "                <video controls>";
                        // line 61
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subitem"], "videoSrc", array()));
                        foreach ($context['_seq'] as $context["type"] => $context["src"]) {
                            // line 62
                            echo "                    <source src=\"";
                            echo $context["src"];
                            echo "\" type=\"video/";
                            echo $context["type"];
                            echo "\"/>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['type'], $context['src'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "                </video>";
                    } elseif (($this->getAttribute(                    // line 65
$context["subitem"], "videoType", array()) == "youtube")) {
                        // line 66
                        echo "                <iframe src=\"https://www.youtube.com/embed/";
                        echo $this->getAttribute($context["subitem"], "videoSrc", array());
                        echo "?hd=1&wmode=opaque&controls=1&showinfo=0\"></iframe>";
                    } elseif (($this->getAttribute(                    // line 67
$context["subitem"], "videoType", array()) == "vimeo")) {
                        // line 68
                        echo "                <iframe src=\"https://player.vimeo.com/video/";
                        echo $this->getAttribute($context["subitem"], "videoSrc", array());
                        echo "\"></iframe>";
                    }
                    // line 70
                    echo "            </div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/master_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 75,  320 => 73,  313 => 70,  308 => 68,  306 => 67,  302 => 66,  300 => 65,  298 => 64,  288 => 62,  284 => 61,  282 => 60,  280 => 59,  274 => 58,  272 => 57,  258 => 56,  256 => 55,  242 => 54,  240 => 53,  232 => 52,  230 => 51,  222 => 50,  220 => 49,  212 => 48,  210 => 47,  206 => 46,  200 => 42,  198 => 41,  194 => 40,  192 => 39,  190 => 38,  180 => 36,  176 => 35,  170 => 34,  168 => 33,  166 => 32,  159 => 29,  157 => 28,  142 => 25,  140 => 24,  121 => 21,  100 => 19,  98 => 18,  88 => 17,  84 => 16,  74 => 15,  56 => 13,  51 => 11,  49 => 10,  43 => 9,  41 => 8,  36 => 6,  34 => 5,  28 => 4,  26 => 3,  19 => 1,);
    }
}
/* <div class="{{ j3.classes(classes) }}" style="background-image:url('{{ first_image }}')">*/
/*   <div class="journal-loading"><i class="fa fa-spinner fa-spin"></i></div>*/
/*   {% if staticText and staticTextLink.href %}*/
/*     <a href="{{ staticTextLink.href }}" class="slider-static-text static-text-1"><span>{{ staticText }}</span></a>*/
/*   {% elseif staticText %}*/
/*     <div class="slider-static-text static-text-1"><span>{{ staticText }}</span></div>*/
/*   {% endif %}*/
/*   {% if static2Text and static2TextLink.href %}*/
/*     <a href="{{ static2TextLink.href }}" class="slider-static-text static-text-2"><span>{{ static2Text }}</span></a>*/
/*   {% elseif static2Text %}*/
/*     <div class="slider-static-text static-text-2"><span>{{ static2Text }}</span></div>*/
/*   {% endif %}*/
/*   <img src="{{ first_image }}" {% if first_image2x %}srcset="{{ first_image }} 1x, {{ first_image2x }} 2x"{% endif %} alt="{{ first_alt }}" width="{{ width }}" height="{{ height }}" />*/
/*   {#<img src="{{ first_image }}" alt="{{ first_alt }}" class="img-2">#}*/
/*   <div class="master-slider ms-skin-minimal" data-options='{{ options|json_encode(constant('JSON_FORCE_OBJECT')) }}' {% if parallaxMode %}data-parallax="{{ parallax }}"{% endif %}>*/
/*     {% for item in items %}*/
/*       <div class="{{ j3.classes(item.classes) }}" {% if item.delay %}data-delay="{{ item.delay }}"{% endif %}>*/
/*         {% if j3.settings.get('performanceLazyLoadImagesStatus') and lazyLoad %}*/
/*           <img src="{{ dummy_image }}" data-src="{{ item.image }}" {% if item.image2x %} data-srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} alt="{{ item.alt }}" width="{{ width }}" height="{{ height }}" class="lazyload"/>*/
/*         {% else %}*/
/*           <img src="{{ item.image }}" {% if item.image2x %} srcset="{{ item.image }} 1x, {{ item.image2x }} 2x" {% endif %} alt="{{ item.alt }}" width="{{ width }}" height="{{ height }}"/>*/
/*         {% endif %}*/
/* */
/*         {% if thumbnails and item.thumb %}*/
/*           <img src="{{ item.thumb }}" {% if item.thumb2x %}srcset="{{ item.thumb }} 1x, {{ item.thumb2x }} 2x"{% endif %} alt="{{ item.alt }}" class="ms-thumb"/>*/
/*         {% endif %}*/
/* */
/*         {% if item.link.href %}*/
/*           <a href="{{ item.link.href }}" {{ j3.linkAttrs(item.link) }}></a>*/
/*         {% endif %}*/
/* */
/*         {% if item.type == 'video' %}*/
/*           {% if item.videoType == 'html5' %}*/
/*             <video data-autopause="true" {% if j3.document.hasClass('ios') %}playsinline{% endif %}>*/
/*               {% for type, src in item.videoSrc %}*/
/*                 <source src="{{ src }}" type="video/{{ type }}"/>*/
/*               {% endfor %}*/
/*             </video>*/
/*           {% elseif item.videoType == 'youtube' %}*/
/*             <a href="https://www.youtube.com/embed/{{ item.videoSrc }}?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1" data-type="video"></a>*/
/*           {% elseif item.videoType == 'vimeo' %}*/
/*             <a href="https://player.vimeo.com/video/{{ item.videoSrc }}" data-type="video"></a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% for subitem in item.items %}*/
/*           {% if subitem.type == 'text' %}*/
/*             <div class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }}>{{ subitem.text }}</div>*/
/*           {% elseif subitem.type == 'hotspot' %}*/
/*             <div class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }}><div class="product-tt">{{ subitem.text }}</div></div>*/
/*           {% elseif subitem.type == 'shape' %}*/
/*             <img class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }} src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="{{ subitem.alt }}"/>*/
/*           {% elseif subitem.type == 'button' %}*/
/*             <a class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }} {% if subitem.link.href %}href="{{ subitem.link.href }}" {{ j3.linkAttrs(subitem.link) }} {% endif %}><span>{{ subitem.text }}</span></a>*/
/*           {% elseif subitem.type == 'image' %}*/
/*             <img class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }} src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="{{ subitem.image }}" alt="{{ subitem.alt }}" width="{{ subitem.width }}" height="{{ subitem.height }}"/>*/
/*           {% elseif subitem.type == 'video' %}*/
/*             <div class="{{ j3.classes(subitem.classes) }}" {{ subitem.data|join(' ') }}>*/
/*               {% if subitem.videoType == 'html5' %}*/
/*                 <video controls>*/
/*                   {% for type, src in subitem.videoSrc %}*/
/*                     <source src="{{ src }}" type="video/{{ type }}"/>*/
/*                   {% endfor %}*/
/*                 </video>*/
/*               {% elseif subitem.videoType == 'youtube' %}*/
/*                 <iframe src="https://www.youtube.com/embed/{{ subitem.videoSrc }}?hd=1&wmode=opaque&controls=1&showinfo=0"></iframe>*/
/*               {% elseif subitem.videoType == 'vimeo' %}*/
/*                 <iframe src="https://player.vimeo.com/video/{{ subitem.videoSrc }}"></iframe>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
