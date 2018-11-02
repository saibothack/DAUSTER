<?php

/* @particles/logo.html.twig */
class __TwigTemplate_1822be0be86e15cddddb68e927a43282f4bb977f27f5cbc66f26bf91a569be59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/logo.html.twig", 1);
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "url", array())), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", array(), "method")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", array()));
        echo "\" rel=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "rel", array()));
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
    ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "image", array())) {
            // line 6
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", array())));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "alt", array()));
            echo "\" />
    ";
        }
        // line 8
        echo "    <span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", array()));
        echo "</span>
</a>
";
    }

    public function getTemplateName()
    {
        return "@particles/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  44 => 6,  42 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/logo.html.twig", "C:\\xampp\\htdocs\\dauster\\public\\web\\templates\\rt_kraken\\particles\\logo.html.twig");
    }
}
