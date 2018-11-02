<?php

/* @particles/blockcontent.html.twig */
class __TwigTemplate_2eea04e93f583b5c187f51120715d92e1103a96c82230f397cc582fba0a8c966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/blockcontent.html.twig", 1);
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
        // line 3
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "lightcase.init"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_particle($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
  <div class=\"g-blockcontent\">
    ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 9
        echo "
    ";
        // line 10
        if (((($this->getAttribute(($context["particle"] ?? null), "image", array()) || $this->getAttribute(($context["particle"] ?? null), "headline", array())) || $this->getAttribute(($context["particle"] ?? null), "description", array())) || $this->getAttribute(($context["particle"] ?? null), "linktext", array()))) {
            // line 11
            echo "    <div class=\"g-grid\">
      <div class=\"g-block\">
        <div class=\"g-content\">
          ";
            // line 14
            if ($this->getAttribute(($context["particle"] ?? null), "image", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", array())), "html", null, true);
                echo "\" class=\"logo-large\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headline", array()));
                echo "\" />";
            }
            // line 15
            echo "          ";
            if ($this->getAttribute(($context["particle"] ?? null), "headline", array())) {
                echo "<h2 class=\"g-blockcontent-headline\">";
                echo $this->getAttribute(($context["particle"] ?? null), "headline", array());
                echo "</h2>";
            }
            // line 16
            echo "          ";
            if ($this->getAttribute(($context["particle"] ?? null), "description", array())) {
                echo "<div class=\"g-blockcontent-description\">";
                echo $this->getAttribute(($context["particle"] ?? null), "description", array());
                echo "</div>";
            }
            // line 17
            echo "          ";
            if ($this->getAttribute(($context["particle"] ?? null), "linktext", array())) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", array()));
                echo "\" class=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", array()));
                echo "</a></p>";
            }
            // line 18
            echo "        </div>
      </div>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"g-grid g-blockcontent-subcontent\">
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "subcontents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcontent"]) {
            // line 24
            echo "        <div class=\"g-block ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "class", array()), "html", null, true);
            echo "\">
          <div class=\"g-content\">
            ";
            // line 26
            if ($this->getAttribute($context["subcontent"], "rokboximage", array())) {
                echo "<a data-rel=\"lightcase\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "rokboxcaption", array()));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["subcontent"], "rokboximage", array())), "html", null, true);
                echo "\">";
            }
            // line 27
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "img", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["subcontent"], "img", array())), "html", null, true);
                echo "\" class=\"g-blockcontent-subcontent-img\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "subtitle", array()));
                echo "\" />";
            }
            // line 28
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "rokboximage", array())) {
                echo "</a>";
            }
            // line 29
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "subtitle", array())) {
                echo " <div class=\"g-blockcontent-subcontent-subtitle\">";
                echo $this->getAttribute($context["subcontent"], "subtitle", array());
                echo "</div> ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "name", array())) {
                echo "<h4 class=\"g-blockcontent-subcontent-title\">";
                if ($this->getAttribute($context["subcontent"], "icon", array())) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "icon", array()), "html", null, true);
                    echo " g-blockcontent-icons\"></i> ";
                }
                echo $this->getAttribute($context["subcontent"], "name", array());
                echo "</h4>";
            }
            // line 31
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "description", array())) {
                echo "<div class=\"g-blockcontent-subcontent-desc\">";
                echo $this->getAttribute($context["subcontent"], "description", array());
                echo "</div>";
            }
            // line 32
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "button", array())) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "buttonlink", array()));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "buttonclass", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "button", array()));
                echo "</a></p>";
            }
            // line 33
            echo "          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/blockcontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 36,  165 => 33,  154 => 32,  147 => 31,  135 => 30,  128 => 29,  123 => 28,  114 => 27,  106 => 26,  100 => 24,  96 => 23,  93 => 22,  87 => 18,  78 => 17,  71 => 16,  64 => 15,  56 => 14,  51 => 11,  49 => 10,  46 => 9,  40 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/blockcontent.html.twig", "C:\\xampp\\htdocs\\dauster\\public\\web\\templates\\rt_kraken\\particles\\blockcontent.html.twig");
    }
}
