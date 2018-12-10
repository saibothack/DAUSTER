<?php

/* @particles/iconmenu.html.twig */
class __TwigTemplate_2bd6a1f25a71423e0f406f6246d897bd8e993869ea600e54fb988d4aea931f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/iconmenu.html.twig", 1);
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
\t";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        echo "\t
    <div class=\"g-iconmenu\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "            <a target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "target", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
            echo "\" class=\"g-iconmenu-item\">
               ";
            // line 9
            if ($this->getAttribute($context["item"], "icon", array())) {
                echo "<span class=\"g-iconmenu-icon ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                echo "\"></span>";
            }
            // line 10
            echo "               ";
            if ($this->getAttribute($context["item"], "text", array())) {
                echo "<span class=\"g-iconmenu-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                echo "</span>";
            }
            // line 11
            echo "               ";
            if ($this->getAttribute($context["item"], "subtext", array())) {
                echo "<span class=\"g-iconmenu-subtext\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subtext", array()), "html", null, true);
                echo "</span>";
            }
            // line 12
            echo "            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/iconmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 14,  78 => 12,  71 => 11,  64 => 10,  58 => 9,  49 => 8,  45 => 7,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/iconmenu.html.twig", "C:\\xampp\\htdocs\\dauster\\public\\web\\templates\\rt_kraken\\particles\\iconmenu.html.twig");
    }
}
