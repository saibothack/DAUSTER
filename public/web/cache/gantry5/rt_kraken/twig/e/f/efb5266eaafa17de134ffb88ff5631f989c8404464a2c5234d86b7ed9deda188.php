<?php

/* @particles/mobile-menu.html.twig */
class __TwigTemplate_35c0ef0e69c74c032392e7111d25ba0a90ec513d1531013981d26e03f19697b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/mobile-menu.html.twig", 1);
        $this->blocks = array(
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
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"g-mobilemenu-container\" data-g-menu-breakpoint=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method"), "48rem")) : ("48rem")), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "@particles/mobile-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/*     <div id="g-mobilemenu-container" data-g-menu-breakpoint="{{ gantry.config.get('styles.breakpoints.mobile-menu-breakpoint')|default('48rem') }}"></div>*/
/* {% endblock %}*/
/* */
