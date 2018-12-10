<?php

/* @particles/gridstatistic.html.twig */
class __TwigTemplate_428fb507974f86aaba7ebe76673ced4ca65b630e1079e508a2e60585c0ce28a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gridstatistic.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
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
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">

        ";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h3 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h3>";
        }
        // line 8
        echo "
        <div class=\"g-gridstatistic\">
            ";
        // line 10
        if ($this->getAttribute(($context["particle"] ?? null), "desc", array())) {
            echo "<div class=\"g-gridstatistic-desc\">";
            echo $this->getAttribute(($context["particle"] ?? null), "desc", array());
            echo "</div>";
        }
        // line 11
        echo "            ";
        if ($this->getAttribute(($context["particle"] ?? null), "readmore", array())) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "readmorelink", array()));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "readmoreclass", array()));
            echo "\">";
            echo $this->getAttribute(($context["particle"] ?? null), "readmore", array());
            echo "</a>";
        }
        // line 12
        echo "
            <div class=\"g-gridstatistic-wrapper ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", array()));
        echo "\">

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "gridstatisticitems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gridstatisticitem"]) {
            // line 16
            echo "                    <div class=\"g-gridstatistic-item\">
                        <div class=\"g-gridstatistic-item-wrapper\">
                            <div class=\"g-gridstatistic-item-text1 odometer\" data-odometer-value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["gridstatisticitem"], "text1", array()));
            echo "\"></div>
                            <div class=\"g-gridstatistic-item-icon\">";
            // line 19
            if ($this->getAttribute($context["gridstatisticitem"], "icon", array())) {
                echo "<span class=\"g-gridstatistic-item-separator\">x</span> <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gridstatisticitem"], "icon", array()), "html", null, true);
                echo " }}\"></i>";
            }
            echo "</div>
                            <div class=\"g-gridstatistic-item-text2\"><span>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["gridstatisticitem"], "text2", array()));
            echo "</span></div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gridstatisticitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
            </div>

            ";
        // line 27
        if ($this->getAttribute(($context["particle"] ?? null), "footerdesc", array())) {
            echo "<div class=\"g-gridstatistic-footerdesc\">";
            echo $this->getAttribute(($context["particle"] ?? null), "footerdesc", array());
            echo "</div>";
        }
        // line 28
        echo "
        </div>
    </div>

";
    }

    // line 34
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/odometer.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        ;((function() {

            var isElementInViewport = function(el, delta) {
                var rect = jQuery(el).get(0).getBoundingClientRect();
                delta = delta || 0;
                return (
                    rect.top >= -delta &&
                    rect.left >= -delta &&
                    rect.bottom <= (delta + (window.innerHeight || document.documentElement.clientHeight)) &&
                    rect.right <= (delta + (window.innerWidth || document.documentElement.clientWidth))
                );
            }

            jQuery(window).scroll(function() {
                var odometers = jQuery.find('.odometer'), value, instances = {};
                odometers.forEach(function(odometer, idx) {
                    odometer = jQuery(odometer).get(0);
                    if (!instances['o-' + idx] && isElementInViewport(odometer, 100)) {
                        value = jQuery(odometer).attr('data-odometer-value');
                        instances['o-' + idx] = {
                            i: new Odometer({ el: odometer }),
                            v: value
                        };
                        setTimeout(function() {
                            instances['o-' + idx].i.update(instances['o-' + idx].v || 0);
                        }, 100);
                    }
                });
            });

            jQuery(window).ready(function() {
                jQuery(this).trigger('scroll');
            });

        })());
    </script>
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
        return array (  130 => 36,  127 => 35,  124 => 34,  116 => 28,  110 => 27,  105 => 24,  95 => 20,  87 => 19,  83 => 18,  79 => 16,  75 => 15,  70 => 13,  67 => 12,  56 => 11,  50 => 10,  46 => 8,  40 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/gridstatistic.html.twig", "C:\\xampp\\htdocs\\dauster\\public\\web\\templates\\rt_kraken\\particles\\gridstatistic.html.twig");
    }
}
