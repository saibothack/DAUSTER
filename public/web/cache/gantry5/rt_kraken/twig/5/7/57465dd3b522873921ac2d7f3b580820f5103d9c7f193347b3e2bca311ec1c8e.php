<?php

/* @particles/gridstatistic.html.twig */
class __TwigTemplate_67252d3cf61e424c395c8c8d944ba60ece18caa3bf76c0aff49d0d5b54f8a121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gridstatistic.html.twig", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/odometer.js"), "html", null, true);
        echo "\"></script>
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "html", array(0 => "behavior.framework"), "method"), "html", null, true);
        echo "
<script>
;((function(){

var isElementInViewport = function(el, delta) {
    var rect = el.getBoundingClientRect();
    delta = delta || 0;
    return (
        rect.top >= -delta &&
        rect.left >= -delta &&
        rect.bottom <= (delta + (window.innerHeight || document.documentElement.clientHeight)) &&
        rect.right <= (delta + (window.innerWidth || document.documentElement.clientWidth))
    );
}

window.addEvents({
    scroll: function(){
        var odometers = document.getElements('.odometer'), value, instances = {};
        odometers.forEach(function(odometer, idx){
            odometer = document.id(odometer);
            if (!instances['o-' + idx] && isElementInViewport(odometer, 100)) {
                value = odometer.getProperty('data-odometer-value');
                instances['o-' + idx] = { i: new Odometer({el: odometer}), v: value };
                setTimeout(function(){
                    instances['o-' + idx].i.update(instances['o-' + idx].v || 0);
                }, 100);
            }
        });
    },
    domready: function(){
        this.fireEvent('scroll');
    }
});

})());
</script>
";
    }

    // line 43
    public function block_particle($context, array $blocks = array())
    {
        // line 44
        echo "  
<div class=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t";
        // line 46
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        echo "\t

\t<div class=\"g-gridstatistic\">
\t\t";
        // line 49
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array())) {
            echo "<div class=\"g-gridstatistic-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array());
            echo "</div>";
        }
        // line 50
        echo "\t\t";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmore", array())) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmorelink", array()));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmoreclass", array()));
            echo "\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmore", array());
            echo "</a>";
        }
        echo "\t
\t\t
\t\t<div class=\"g-gridstatistic-wrapper ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "cols", array()));
        echo "\">
\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "gridstatisticitems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gridstatisticitem"]) {
            // line 54
            echo "\t\t\t    <div class=\"g-gridstatistic-item\">
\t\t\t    \t<div class=\"g-gridstatistic-item-wrapper\">
                <div class=\"g-gridstatistic-item-icon\"><span class=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["gridstatisticitem"], "icon", array()));
            echo "\"></span></div> 
\t\t\t        \t<div class=\"g-gridstatistic-item-text1 odometer\" data-odometer-value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["gridstatisticitem"], "text1", array()));
            echo "\"></div>
\t\t\t        \t<div class=\"g-gridstatistic-item-text2\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["gridstatisticitem"], "text2", array()));
            echo "</div>\t\t
\t\t\t    \t</div>
\t\t\t    </div>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gridstatisticitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo " 
\t\t</div>

\t</div>\t


</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/gridstatistic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  138 => 58,  134 => 57,  130 => 56,  126 => 54,  122 => 53,  118 => 52,  104 => 50,  98 => 49,  88 => 46,  84 => 45,  81 => 44,  78 => 43,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script src="{{ url('gantry-theme://js/odometer.js') }}"></script>*/
/* {{ joomla.html('behavior.framework') }}*/
/* <script>*/
/* ;((function(){*/
/* */
/* var isElementInViewport = function(el, delta) {*/
/*     var rect = el.getBoundingClientRect();*/
/*     delta = delta || 0;*/
/*     return (*/
/*         rect.top >= -delta &&*/
/*         rect.left >= -delta &&*/
/*         rect.bottom <= (delta + (window.innerHeight || document.documentElement.clientHeight)) &&*/
/*         rect.right <= (delta + (window.innerWidth || document.documentElement.clientWidth))*/
/*     );*/
/* }*/
/* */
/* window.addEvents({*/
/*     scroll: function(){*/
/*         var odometers = document.getElements('.odometer'), value, instances = {};*/
/*         odometers.forEach(function(odometer, idx){*/
/*             odometer = document.id(odometer);*/
/*             if (!instances['o-' + idx] && isElementInViewport(odometer, 100)) {*/
/*                 value = odometer.getProperty('data-odometer-value');*/
/*                 instances['o-' + idx] = { i: new Odometer({el: odometer}), v: value };*/
/*                 setTimeout(function(){*/
/*                     instances['o-' + idx].i.update(instances['o-' + idx].v || 0);*/
/*                 }, 100);*/
/*             }*/
/*         });*/
/*     },*/
/*     domready: function(){*/
/*         this.fireEvent('scroll');*/
/*     }*/
/* });*/
/* */
/* })());*/
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block particle %}*/
/*   */
/* <div class="{{ particle.class|e }}">*/
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}	*/
/* */
/* 	<div class="g-gridstatistic">*/
/* 		{% if particle.desc %}<div class="g-gridstatistic-desc">{{ particle.desc|raw }}</div>{% endif %}*/
/* 		{% if particle.readmore %}<a href="{{ particle.readmorelink|e }}" class="button {{ particle.readmoreclass|e }}">{{ particle.readmore|raw }}</a>{% endif %}	*/
/* 		*/
/* 		<div class="g-gridstatistic-wrapper {{ particle.cols|e }}">*/
/* 			{% for gridstatisticitem in particle.gridstatisticitems %}*/
/* 			    <div class="g-gridstatistic-item">*/
/* 			    	<div class="g-gridstatistic-item-wrapper">*/
/*                 <div class="g-gridstatistic-item-icon"><span class="{{ gridstatisticitem.icon|e }}"></span></div> */
/* 			        	<div class="g-gridstatistic-item-text1 odometer" data-odometer-value="{{ gridstatisticitem.text1|e }}"></div>*/
/* 			        	<div class="g-gridstatistic-item-text2">{{ gridstatisticitem.text2|e }}</div>		*/
/* 			    	</div>*/
/* 			    </div>	*/
/* 			{% endfor %} */
/* 		</div>*/
/* */
/* 	</div>	*/
/* */
/* */
/* </div>*/
/* {% endblock %}*/
/* */
