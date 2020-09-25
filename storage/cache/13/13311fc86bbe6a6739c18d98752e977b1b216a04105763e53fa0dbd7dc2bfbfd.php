<?php

/* journal3/template/common/footer.twig */
class __TwigTemplate_5fb8657222a9eec9aefeb3582cf890499437f47af403c775dd8f2f4a3bccbee6 extends Twig_Template
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
        if ( !array_key_exists("j3", $context)) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>";
        }
        // line 11
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "bottom"), "method");
        // line 13
        if ( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method")) {
            // line 14
            echo "
<footer>";
            // line 16
            echo (isset($context["footer_menu"]) ? $context["footer_menu"] : null);
            echo "
</footer>";
        }
        // line 20
        echo "</div><!-- .site-wrapper -->";
        // line 22
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "bottom_menu"), "method");
        // line 24
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "side_menu"), "method");
        // line 26
        echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "loadController", array(0 => "journal3/layout", 1 => "notification"), "method");
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "getScripts", array(0 => "footer"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 29
            echo "<script src=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "staticUrl", array(0 => $context["script"], 1 => false), "method");
            echo "\"";
            if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceJSDefer"), "method")) {
                echo " defer";
            }
            echo "></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        if ($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "canLiveReload", array(), "method")) {
            // line 33
            echo "<script src=\"http://";
            echo $this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "getHost", array(), "method");
            echo ":35729/livereload.js?snipver=1\" async></script>";
        }
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customJS"), "method")) {
            // line 37
            echo "<script type=\"text/javascript\">";
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customJS"), "method");
            echo "</script>";
        }
        // line 40
        if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCodeFooter"), "method"))) {
            // line 41
            echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "customCodeFooter"), "method");
        }
        // line 44
        if (( !$this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "isPopup", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "scrollTop"), "method"))) {
            // line 45
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>";
        }
        // line 50
        if (($this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "document", array()), "hasFonts", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "performanceAsyncFontsStatus"), "method"))) {
            // line 51
            echo "  <script>
    (function () {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>";
        }
        // line 62
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 62,  95 => 51,  93 => 50,  88 => 45,  86 => 44,  83 => 41,  81 => 40,  76 => 37,  74 => 36,  69 => 33,  67 => 32,  55 => 29,  51 => 28,  49 => 26,  47 => 24,  45 => 22,  43 => 20,  38 => 16,  35 => 14,  33 => 13,  31 => 11,  21 => 2,  19 => 1,);
    }
}
/* {% if j3 is not defined %}*/
/*   <style>*/
/*     body {*/
/*       display: none !important;*/
/*     }*/
/*   </style>*/
/*   <script>*/
/*     window.location = 'index.php?route=journal3/startup/error';*/
/*   </script>*/
/* {% endif %}*/
/* {{ j3.loadController('journal3/layout', 'bottom') }}*/
/* */
/* {% if not j3.document.isPopup() %}*/
/* */
/* <footer>*/
/*   {{ footer_menu }}*/
/* </footer>*/
/* */
/* {% endif %}*/
/* </div><!-- .site-wrapper -->*/
/* */
/* {{ j3.loadController('journal3/layout', 'bottom_menu') }}*/
/* */
/* {{ j3.loadController('journal3/layout', 'side_menu') }}*/
/* */
/* {{ j3.loadController('journal3/layout', 'notification') }}*/
/* */
/* {% for script in j3.document.getScripts('footer') %}*/
/* <script src="{{ j3.document.staticUrl(script, false) }}" {% if j3.settings.get('performanceJSDefer') %} defer {% endif %}></script>*/
/* {% endfor %}*/
/* */
/* {% if j3.canLiveReload() %}*/
/* <script src="http://{{ j3.getHost() }}:35729/livereload.js?snipver=1" async></script>*/
/* {% endif %}*/
/* */
/* {% if j3.settings.get('customJS') %}*/
/* <script type="text/javascript">{{ j3.settings.get('customJS') }}</script>*/
/* {% endif %}*/
/* */
/* {% if not j3.document.isPopup() and j3.settings.get('customCodeFooter') %}*/
/* {{ j3.settings.get('customCodeFooter') }}*/
/* {% endif %}*/
/* */
/* {% if not j3.document.isPopup() and j3.settings.get('scrollTop') %}*/
/* <div class="scroll-top">*/
/*   <i class="fa fa-angle-up"></i>*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if j3.document.hasFonts() and j3.settings.get('performanceAsyncFontsStatus') %}*/
/*   <script>*/
/*     (function () {*/
/*       var wf = document.createElement('script');*/
/*       wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';*/
/*       wf.type = 'text/javascript';*/
/*       wf.async = 'true';*/
/*       var s = document.getElementsByTagName('script')[0];*/
/*       s.parentNode.insertBefore(wf, s);*/
/*     })();*/
/*   </script>*/
/* {% endif %}*/
/* */
/* </body>*/
/* </html>*/
/* */
