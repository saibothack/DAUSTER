<?php

/* @particles/swiper.html.twig */
class __TwigTemplate_83bf6e7224853e69dc9324dad8ae516911c3bdf4a63192505c7615745bb0d6f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/swiper.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/css/swiper.min.css\">
";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/swiper.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 11
    public function block_particle($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t";
        // line 14
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 15
        echo "
    <div class=\"g-swiper\">
    \t<div class=\"swiper-container ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "\" ";
        if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "g-horizontal-slides") || ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "g-vertical-slides"))) {
            echo "style=\"height: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementHeight", array()));
            echo ";\"";
        }
        echo ">
    \t\t<div class=\"swiper-wrapper\">
\t\t        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "\t\t            <div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"swiper-slide-content\">
\t\t\t            \t";
            // line 22
            if ($this->getAttribute($context["item"], "image", array())) {
                // line 23
                echo "\t\t\t            \t<div class=\"swiper-slide-content-image\">
\t\t\t            \t\t<img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" alt=\"";
                echo $this->getAttribute($context["item"], "title", array());
                echo "\">
\t\t\t            \t</div>
\t\t\t            \t";
            }
            // line 26
            echo "\t\t\t
\t\t\t            \t<div class=\"swiper-slide-content-text\">
\t\t\t\t\t\t\t\t";
            // line 28
            if ($this->getAttribute($context["item"], "subtitle", array())) {
                echo "<div class=\"g-swiper-slide-content-subtitle\">";
                echo $this->getAttribute($context["item"], "subtitle", array());
                echo "</div>";
            }
            // line 29
            echo "\t\t\t            \t\t";
            if ($this->getAttribute($context["item"], "title", array())) {
                echo "<div class=\"g-swiper-slide-content-title\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</div>";
            }
            // line 30
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "desc", array())) {
                echo "<div class=\"g-swiper-slide-content-desc\">";
                echo $this->getAttribute($context["item"], "desc", array());
                echo "</div>";
            }
            echo "\t\t
\t\t\t\t\t\t\t\t";
            // line 31
            if ($this->getAttribute($context["item"], "link", array())) {
                echo "<a class=\"g-swiper-slide-content-link button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                echo "\">";
                echo $this->getAttribute($context["item"], "linktext", array());
                echo "</a>";
            }
            echo "\t\t\t            \t\t
\t\t\t            \t</div>\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t    </div>
\t\t    ";
        // line 37
        if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "g-horizontal-slides") || ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "g-vertical-slides"))) {
            // line 38
            echo "\t\t    <div class=\"swiper-pagination ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
            echo "-pagination ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
            echo "-pagination-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
            echo "\"></div>
\t\t    ";
        } elseif (($this->getAttribute(        // line 39
(isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "g-carousel")) {
            // line 40
            echo "\t        <div class=\"swiper-button-next ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
            echo "-button-next ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
            echo "-button-next-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
            echo "\"><i class=\"fa fa-2x fa-arrow-circle-right\"></i></div>
\t        <div class=\"swiper-button-prev ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
            echo "-button-prev ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
            echo "-button-prev-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
            echo "\"><i class=\"fa fa-2x fa-arrow-circle-left\"></i></div>\t
\t        ";
        }
        // line 42
        echo "\t    
\t\t</div>\t\t\t
\t</div>\t
</div> 

<script>
new Swiper('.g-horizontal-slides-";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "', {
    pagination: '.g-horizontal-slides-pagination-";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "',
    paginationClickable: true,   
    loop: true
});
new Swiper('.g-vertical-slides-";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "', {
    pagination: '.g-vertical-slides-pagination-";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "',
    paginationClickable: true,
    direction: 'vertical',       
    loop: true
});
new Swiper('.g-carousel-";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "', {
    pagination: '.g-carousel-pagination-";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "',
    paginationClickable: true,
    slidesPerView: ";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "slidesPerView", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "slidesPerView", array()), 2)) : (2)), "html", null, true);
        echo ",\t 
    spaceBetween: 30,
    nextButton: '.g-carousel-button-next-";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "',
    prevButton: '.g-carousel-button-prev-";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "elementID", array()));
        echo "',\t \t        
    loop: true
});
</script> 
";
    }

    public function getTemplateName()
    {
        return "@particles/swiper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 65,  226 => 64,  221 => 62,  216 => 60,  212 => 59,  204 => 54,  200 => 53,  193 => 49,  189 => 48,  181 => 42,  172 => 41,  163 => 40,  161 => 39,  152 => 38,  150 => 37,  147 => 36,  130 => 31,  121 => 30,  114 => 29,  108 => 28,  104 => 26,  96 => 24,  93 => 23,  91 => 22,  87 => 20,  83 => 19,  68 => 17,  64 => 15,  58 => 14,  54 => 13,  51 => 12,  48 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/css/swiper.min.css">*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* <script src="{{ url('gantry-theme://js/swiper.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block particle %}*/
/* */
/* <div class="{{ particle.class|e }}">*/
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/*     <div class="g-swiper">*/
/*     	<div class="swiper-container {{ particle.layout|e }} {{ particle.layout|e }}-{{ particle.elementID|e }}" {% if particle.layout == "g-horizontal-slides" or particle.layout == "g-vertical-slides" %}style="height: {{ particle.elementHeight|e }};"{% endif %}>*/
/*     		<div class="swiper-wrapper">*/
/* 		        {% for item in particle.items %}*/
/* 		            <div class="swiper-slide">*/
/* 						<div class="swiper-slide-content">*/
/* 			            	{% if item.image %}*/
/* 			            	<div class="swiper-slide-content-image">*/
/* 			            		<img src="{{ url(item.image)|e }}" alt="{{ item.title|raw }}">*/
/* 			            	</div>*/
/* 			            	{% endif %}			*/
/* 			            	<div class="swiper-slide-content-text">*/
/* 								{% if item.subtitle %}<div class="g-swiper-slide-content-subtitle">{{ item.subtitle|raw }}</div>{% endif %}*/
/* 			            		{% if item.title %}<div class="g-swiper-slide-content-title">{{ item.title|raw }}</div>{% endif %}*/
/* 								{% if item.desc %}<div class="g-swiper-slide-content-desc">{{ item.desc|raw }}</div>{% endif %}		*/
/* 								{% if item.link %}<a class="g-swiper-slide-content-link button" href="{{ item.link|e }}">{{ item.linktext|raw }}</a>{% endif %}			            		*/
/* 			            	</div>			*/
/* 					</div>*/
/* 				</div>	*/
/* 		        {% endfor %}*/
/* 		    </div>*/
/* 		    {% if particle.layout == "g-horizontal-slides" or particle.layout == "g-vertical-slides" %}*/
/* 		    <div class="swiper-pagination {{ particle.layout|e }}-pagination {{ particle.layout|e }}-pagination-{{ particle.elementID|e }}"></div>*/
/* 		    {% elseif particle.layout == "g-carousel" %}*/
/* 	        <div class="swiper-button-next {{ particle.layout|e }}-button-next {{ particle.layout|e }}-button-next-{{ particle.elementID|e }}"><i class="fa fa-2x fa-arrow-circle-right"></i></div>*/
/* 	        <div class="swiper-button-prev {{ particle.layout|e }}-button-prev {{ particle.layout|e }}-button-prev-{{ particle.elementID|e }}"><i class="fa fa-2x fa-arrow-circle-left"></i></div>	*/
/* 	        {% endif %}	    */
/* 		</div>			*/
/* 	</div>	*/
/* </div> */
/* */
/* <script>*/
/* new Swiper('.g-horizontal-slides-{{ particle.elementID|e }}', {*/
/*     pagination: '.g-horizontal-slides-pagination-{{ particle.elementID|e }}',*/
/*     paginationClickable: true,   */
/*     loop: true*/
/* });*/
/* new Swiper('.g-vertical-slides-{{ particle.elementID|e }}', {*/
/*     pagination: '.g-vertical-slides-pagination-{{ particle.elementID|e }}',*/
/*     paginationClickable: true,*/
/*     direction: 'vertical',       */
/*     loop: true*/
/* });*/
/* new Swiper('.g-carousel-{{ particle.elementID|e }}', {*/
/*     pagination: '.g-carousel-pagination-{{ particle.elementID|e }}',*/
/*     paginationClickable: true,*/
/*     slidesPerView: {{ particle.slidesPerView|default(2) }},	 */
/*     spaceBetween: 30,*/
/*     nextButton: '.g-carousel-button-next-{{ particle.elementID|e }}',*/
/*     prevButton: '.g-carousel-button-prev-{{ particle.elementID|e }}',	 	        */
/*     loop: true*/
/* });*/
/* </script> */
/* {% endblock %}*/
