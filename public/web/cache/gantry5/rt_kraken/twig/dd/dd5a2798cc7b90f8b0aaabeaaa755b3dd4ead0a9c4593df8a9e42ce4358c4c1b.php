<?php

/* @particles/swiper.html.twig */
class __TwigTemplate_fe1c98103e54973f494364534911449cbdfeaca576c2a30afb65ee14adbfd8ed extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css\">

";
        // line 6
        if ((($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "g-horizontal-slides") || ($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "g-vertical-slides"))) {
            // line 7
            echo "<style media=\"screen\">
    #";
            // line 8
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .swiper-container {
        height: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementHeight", array()));
            echo ";
    }

    @media only all and (max-width: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => "styles.breakpoints.tablet-container"), "method"), "html", null, true);
            echo ") {
        #";
            // line 13
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .swiper-container {
            height: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementHeightMobile", array()));
            echo ";
        }
    }
</style>
";
        }
        // line 19
        echo "
";
    }

    // line 22
    public function block_javascript($context, array $blocks = array())
    {
        // line 23
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        echo " 
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/swiper.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 27
    public function block_particle($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
\t";
        // line 29
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 30
        echo "    <div class=\"g-swiper\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    \t<div class=\"swiper-container ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
        echo "\">
    \t\t<div class=\"swiper-wrapper\">
\t\t        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "\t\t            <div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"swiper-slide-content\">
\t\t\t            \t";
            // line 36
            if ($this->getAttribute($context["item"], "image", array())) {
                // line 37
                echo "\t\t\t            \t<div class=\"swiper-slide-content-image\">
\t\t\t            \t\t<img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" alt=\"";
                echo $this->getAttribute($context["item"], "title", array());
                echo "\">
\t\t\t            \t</div>
\t\t\t            \t";
            }
            // line 41
            echo "\t\t\t            \t<div class=\"swiper-slide-content-text\">
\t\t\t\t\t\t\t\t";
            // line 42
            if ($this->getAttribute($context["item"], "subtitle", array())) {
                echo "<div class=\"g-swiper-slide-content-subtitle\">";
                echo $this->getAttribute($context["item"], "subtitle", array());
                echo "</div>";
            }
            // line 43
            echo "\t\t\t            \t\t";
            if ($this->getAttribute($context["item"], "title", array())) {
                echo "<div class=\"g-swiper-slide-content-title\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</div>";
            }
            // line 44
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "desc", array())) {
                echo "<div class=\"g-swiper-slide-content-desc\">";
                echo $this->getAttribute($context["item"], "desc", array());
                echo "</div>";
            }
            // line 45
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["item"], "link", array())) {
                echo "<a class=\"g-swiper-slide-content-link button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                echo "\">";
                echo $this->getAttribute($context["item"], "linktext", array());
                echo "</a>";
            }
            // line 46
            echo "\t\t\t            \t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t    </div>
\t\t    ";
        // line 51
        if ((($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "g-horizontal-slides") || ($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "g-vertical-slides"))) {
            // line 52
            echo "\t\t    <div class=\"swiper-pagination ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "-pagination ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "-pagination-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "\"></div>
\t\t    ";
        } elseif (($this->getAttribute(        // line 53
($context["particle"] ?? null), "layout", array()) == "g-carousel")) {
            // line 54
            echo "\t        <div class=\"swiper-button-next ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "-button-next ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "-button-next-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "\"><i class=\"fa fa-2x fa-arrow-circle-right\"></i></div>
\t        <div class=\"swiper-button-prev ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "-button-prev ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "-button-prev-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "\"><i class=\"fa fa-2x fa-arrow-circle-left\"></i></div>
\t        ";
        }
        // line 57
        echo "\t\t</div>
\t</div>
</div>

<script>
";
        // line 62
        if (($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "g-horizontal-slides")) {
            // line 63
            echo "new Swiper('.g-horizontal-slides-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "', {
    pagination: '.g-horizontal-slides-pagination-";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "',
    paginationClickable: true,
    loop: true
});
";
        }
        // line 69
        if (($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "g-vertical-slides")) {
            // line 70
            echo "new Swiper('.g-vertical-slides-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "', {
    pagination: '.g-vertical-slides-pagination-";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "',
    paginationClickable: true,
    direction: 'vertical',
    loop: true
});
";
        }
        // line 77
        if (($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "g-carousel")) {
            // line 78
            echo "new Swiper('.g-carousel-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "', {
    pagination: '.g-carousel-pagination-";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "',
    paginationClickable: true,
    slidesPerView: ";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "slidesPerView", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "slidesPerView", array()), 2)) : (2)), "html", null, true);
            echo ",
    breakpoints: {
        768: {
            slidesPerView: ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "slidesPerViewMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "slidesPerViewMobile", array()), 1)) : (1)), "html", null, true);
            echo ",
        },
    },
    spaceBetween: 30,
    nextButton: '.g-carousel-button-next-";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "',
    prevButton: '.g-carousel-button-prev-";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "elementID", array()));
            echo "',
    loop: true
});
 ";
        }
        // line 93
        echo "</script>
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
        return array (  284 => 93,  277 => 89,  273 => 88,  266 => 84,  260 => 81,  255 => 79,  250 => 78,  248 => 77,  239 => 71,  234 => 70,  232 => 69,  224 => 64,  219 => 63,  217 => 62,  210 => 57,  201 => 55,  192 => 54,  190 => 53,  181 => 52,  179 => 51,  176 => 50,  167 => 46,  158 => 45,  151 => 44,  144 => 43,  138 => 42,  135 => 41,  127 => 38,  124 => 37,  122 => 36,  118 => 34,  114 => 33,  105 => 31,  100 => 30,  94 => 29,  89 => 28,  86 => 27,  80 => 24,  76 => 23,  73 => 22,  68 => 19,  60 => 14,  56 => 13,  52 => 12,  46 => 9,  42 => 8,  39 => 7,  37 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/swiper.html.twig", "C:\\xampp\\htdocs\\dauster\\public\\web\\templates\\rt_kraken\\particles\\swiper.html.twig");
    }
}
