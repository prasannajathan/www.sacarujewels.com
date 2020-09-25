<?php

/* journal3/template/common/search.twig */
class __TwigTemplate_caff08bca65f4d6e8e54a056039e04aed9a94ba08fa5d5c3531954f20f84f1f9 extends Twig_Template
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
        // line 9
        $context["self"] = $this;
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "catalogSearchStatus"), "method")) {
            // line 11
            echo "<div id=\"search\" class=\"dropdown\">
  <button class=\"dropdown-toggle search-trigger\" data-toggle=\"dropdown\"></button>
  <div class=\"dropdown-menu j-dropdown\">
    <div class=\"header-search\">";
            // line 15
            if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "searchStyleSearchCategoriesSelectorStatus"), "method") && (isset($context["categories"]) ? $context["categories"] : null))) {
                // line 16
                echo "        <div class=\"search-categories dropdown drop-menu\">
          <div class=\"search-categories-button dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 17
                echo (((isset($context["category_id"]) ? $context["category_id"] : null)) ? ((isset($context["category"]) ? $context["category"] : null)) : ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "searchStyleSearchCategories"), "method")));
                echo "</div>

          <div class=\"dropdown-menu j-dropdown\">
              <ul class=\"j-menu\">
                <li data-category_id=\"0\" class=\"category-level-1\"><a>";
                // line 21
                echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "searchStyleSearchCategories"), "method");
                echo "</a></li>";
                // line 22
                echo $context["self"]->getrenderSearchCategories((isset($context["j3"]) ? $context["j3"] : null), (isset($context["categories"]) ? $context["categories"] : null), (isset($context["category_id"]) ? $context["category_id"] : null), 1);
                echo "
              </ul>
          </div>
        </div>";
            }
            // line 27
            echo "      <input type=\"text\" name=\"search\" value=\"";
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "\" placeholder=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "searchStyleSearchPlaceholder"), "method");
            echo "\" class=\"search-input\" data-category_id=\"";
            echo (isset($context["category_id"]) ? $context["category_id"] : null);
            echo "\"/>
      <button type=\"button\" class=\"search-button\" data-search-url=\"";
            // line 28
            echo (isset($context["search_url"]) ? $context["search_url"] : null);
            echo "\"></button>
    </div>
  </div>
</div>";
        }
    }

    // line 1
    public function getrenderSearchCategories($__j3__ = null, $__categories__ = null, $__category_id__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "j3" => $__j3__,
            "categories" => $__categories__,
            "category_id" => $__category_id__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["self"] = $this;
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                $context["classes"] = array("selected" => ($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null)));
                // line 5
                echo "    <li data-category_id=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" class=\"";
                echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "classes", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
                echo " category-level-";
                echo (isset($context["index"]) ? $context["index"] : null);
                echo "\"><a>";
                echo $this->getAttribute($context["category"], "title", array());
                echo "</a></li>";
                // line 6
                echo $context["self"]->getrenderSearchCategories((isset($context["j3"]) ? $context["j3"] : null), $this->getAttribute($context["category"], "items", array()), (isset($context["category_id"]) ? $context["category_id"] : null), ((isset($context["index"]) ? $context["index"] : null) + 1));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "journal3/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 6,  91 => 5,  89 => 4,  85 => 3,  83 => 2,  68 => 1,  59 => 28,  50 => 27,  43 => 22,  40 => 21,  33 => 17,  30 => 16,  28 => 15,  23 => 11,  21 => 10,  19 => 9,);
    }
}
/* {% macro renderSearchCategories(j3, categories, category_id, index) %}*/
/*   {% import _self as self %}*/
/*   {% for category in categories %}*/
/*     {% set classes = {'selected': category.category_id == category_id} %}*/
/*     <li data-category_id="{{ category.category_id }}" class="{{ j3.classes(classes) }} category-level-{{ index }}"><a>{{ category.title }}</a></li>*/
/*     {{ self.renderSearchCategories(j3, category.items, category_id, index + 1) }}*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* {% import _self as self %}*/
/* {% if j3.settings.get('catalogSearchStatus') %}*/
/* <div id="search" class="dropdown">*/
/*   <button class="dropdown-toggle search-trigger" data-toggle="dropdown"></button>*/
/*   <div class="dropdown-menu j-dropdown">*/
/*     <div class="header-search">*/
/*       {% if j3.settings.get('searchStyleSearchCategoriesSelectorStatus') and categories %}*/
/*         <div class="search-categories dropdown drop-menu">*/
/*           <div class="search-categories-button dropdown-toggle" data-toggle="dropdown">{{ category_id ? category : j3.settings.get('searchStyleSearchCategories') }}</div>*/
/* */
/*           <div class="dropdown-menu j-dropdown">*/
/*               <ul class="j-menu">*/
/*                 <li data-category_id="0" class="category-level-1"><a>{{ j3.settings.get('searchStyleSearchCategories') }}</a></li>*/
/*                 {{ self.renderSearchCategories(j3, categories, category_id, 1) }}*/
/*               </ul>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <input type="text" name="search" value="{{ search }}" placeholder="{{ j3.settings.get('searchStyleSearchPlaceholder') }}" class="search-input" data-category_id="{{ category_id }}"/>*/
/*       <button type="button" class="search-button" data-search-url="{{ search_url }}"></button>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* */
