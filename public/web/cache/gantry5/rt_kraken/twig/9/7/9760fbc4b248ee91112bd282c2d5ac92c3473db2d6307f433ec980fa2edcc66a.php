<?php

/* @particles/blockcontent.html.twig */
class __TwigTemplate_321ad3b8e0b1eb8a6c427c093903740469e3bb2fe35effd5ddda56b473a23597 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
  <div class=\"g-blockcontent\">
    ";
        // line 6
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        echo " 

    ";
        // line 8
        if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "headline", array())) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array())) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "linktext", array()))) {
            // line 9
            echo "    <div class=\"g-grid\">
      <div class=\"g-block\">
        <div class=\"g-content\">
          ";
            // line 12
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())), "html", null, true);
                echo "\" class=\"logo-large\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "headline", array()));
                echo "\" />";
            }
            // line 13
            echo "          ";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "headline", array())) {
                echo "<h2 class=\"g-blockcontent-headline\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "headline", array());
                echo "</h2>";
            }
            // line 14
            echo "          ";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array())) {
                echo "<div class=\"g-blockcontent-description\">";
                echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "description", array());
                echo "</div>";
            }
            // line 15
            echo "          ";
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "linktext", array())) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array()));
                echo "\" class=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "linktext", array()));
                echo "</a></p>";
            }
            // line 16
            echo "        </div>
      </div>
    </div>
    ";
        }
        // line 20
        echo "    <div class=\"g-grid g-blockcontent-subcontent\">
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "subcontents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcontent"]) {
            // line 22
            echo "        <div class=\"g-block ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "class", array()), "html", null, true);
            echo "\">
          <div class=\"g-content\">
            ";
            // line 24
            if ($this->getAttribute($context["subcontent"], "rokboximage", array())) {
                echo "<a data-rokbox=\"\" data-rokbox-caption=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "rokboxcaption", array()));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["subcontent"], "rokboximage", array())), "html", null, true);
                echo "\">";
            }
            // line 25
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "img", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["subcontent"], "img", array())), "html", null, true);
                echo "\" class=\"g-blockcontent-subcontent-img\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "title", array()));
                echo "\" />";
            }
            // line 26
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "rokboximage", array())) {
                echo "</a>";
            }
            // line 27
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "subtitle", array())) {
                echo " <div class=\"g-blockcontent-subcontent-subtitle\">";
                echo $this->getAttribute($context["subcontent"], "subtitle", array());
                echo "</div> ";
            }
            // line 28
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
            // line 29
            echo "            ";
            if ($this->getAttribute($context["subcontent"], "description", array())) {
                echo "<div class=\"g-blockcontent-subcontent-desc\">";
                echo $this->getAttribute($context["subcontent"], "description", array());
                echo "</div>";
            }
            // line 30
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
            // line 31
            echo "          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return array (  170 => 34,  162 => 31,  151 => 30,  144 => 29,  132 => 28,  125 => 27,  120 => 26,  111 => 25,  103 => 24,  97 => 22,  93 => 21,  90 => 20,  84 => 16,  75 => 15,  68 => 14,  61 => 13,  53 => 12,  48 => 9,  46 => 8,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* <div class="{{ particle.class|e }}">*/
/*   <div class="g-blockcontent">*/
/*     {% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %} */
/* */
/*     {% if particle.image or particle.headline or particle.description or particle.linktext %}*/
/*     <div class="g-grid">*/
/*       <div class="g-block">*/
/*         <div class="g-content">*/
/*           {% if particle.image %}<img src="{{ url(particle.image) }}" class="logo-large" alt="{{ particle.headline|e }}" />{% endif %}*/
/*           {% if particle.headline %}<h2 class="g-blockcontent-headline">{{ particle.headline|raw }}</h2>{% endif %}*/
/*           {% if particle.description %}<div class="g-blockcontent-description">{{ particle.description|raw }}</div>{% endif %}*/
/*           {% if particle.linktext %}<p><a href="{{ particle.link|e }}" class="button">{{ particle.linktext|e }}</a></p>{% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="g-grid g-blockcontent-subcontent">*/
/*       {% for subcontent in particle.subcontents %}*/
/*         <div class="g-block {{ subcontent.class }}">*/
/*           <div class="g-content">*/
/*             {% if subcontent.rokboximage %}<a data-rokbox="" data-rokbox-caption="{{ subcontent.rokboxcaption|e }}" href="{{ url(subcontent.rokboximage) }}">{% endif %}*/
/*             {% if subcontent.img %}<img src="{{ url(subcontent.img) }}" class="g-blockcontent-subcontent-img" alt="{{ subcontent.title|e }}" />{% endif %}*/
/*             {% if subcontent.rokboximage %}</a>{% endif %}*/
/*             {% if subcontent.subtitle %} <div class="g-blockcontent-subcontent-subtitle">{{ subcontent.subtitle|raw }}</div> {% endif %}*/
/*             {% if subcontent.name %}<h4 class="g-blockcontent-subcontent-title">{% if subcontent.icon %}<i class="{{ subcontent.icon }} g-blockcontent-icons"></i> {% endif %}{{ subcontent.name|raw }}</h4>{% endif %}*/
/*             {% if subcontent.description %}<div class="g-blockcontent-subcontent-desc">{{ subcontent.description|raw }}</div>{% endif %}*/
/*             {% if subcontent.button %}<p><a href="{{ subcontent.buttonlink|e }}" class="button {{ subcontent.buttonclass|e }}">{{ subcontent.button|e }}</a></p>{% endif %}*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
