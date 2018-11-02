<?php

/* @particles/sidemenu.html.twig */
class __TwigTemplate_e02f88195f43a58d7ad0baf2d46fa81d472896abcd516f509e076f6da2e86b16 extends Twig_Template
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
        try {            // line 2
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", array()), "instance", array(0 => ($context["particle"] ?? null)), "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            GANTRY_DEBUGGER && method_exists('Gantry\Debugger', 'addException') && \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", array()), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 16
        echo "
";
        // line 27
        echo "
";
        // line 36
        echo "
";
        // line 83
        echo "
";
        // line 100
        echo "
";
        // line 108
        echo "
";
        // line 119
        echo "
";
        // line 120
        if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", array()), "count", array(), "method")) {
            // line 121
            echo "<nav class=\"g-main-nav\" role=\"navigation\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "mobileTarget", array())) ? (" data-g-mobile-target") : (""));
            echo ">
    <ul class=\"g-toplevel\">
        ";
            // line 123
            echo $this->getAttribute($this, "displayItems", array(0 => $this->getAttribute(($context["menu"] ?? null), "root", array()), 1 => ($context["menu"] ?? null), 2 => $context), "method");
            echo "
    </ul>
</nav>
";
        }
    }

    // line 7
    public function getgetCustomWidth($__item__ = null, $__menu__ = null, $__mode__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "menu" => $__menu__,
            "mode" => $__mode__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            if ((((($this->getAttribute(($context["item"] ?? null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", array()), "auto")) : ("auto")) != "auto") &&  !((($context["dropdown_type"] ?? null) == "fullwidth") && ($this->getAttribute(($context["item"] ?? null), "level", array()) > 1)))) {
                // line 9
                if ((($context["mode"] ?? null) == "item")) {
                    // line 10
                    echo "style=\"position: relative;\"";
                } elseif ((                // line 11
($context["mode"] ?? null) == "submenu")) {
                    // line 12
                    echo "style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", array()));
                    echo ";\" data-g-item-width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", array()));
                    echo "\"";
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 17
    public function getdisplayParticle($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "    ";
            if (((null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", array()), "particle", array()), "enabled", array())) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", array()), "particle", array()), "enabled", array()))) {
                // line 19
                echo "        ";
                $context["context"] = twig_array_merge(($context["context"] ?? null), array("particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", array()), "particle", array())));
                // line 20
                echo "        ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", array()), "block", array()), "class", array());
                // line 21
                echo "        <div class=\"menu-item-particle";
                echo twig_escape_filter($this->env, ((($context["classes"] ?? null)) ? ((" " . ($context["classes"] ?? null))) : ("")), "html", null, true);
                echo "\">
        ";
                // line 22
                try {
                    $this->loadTemplate(array(0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", array())) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", array())) . ".html.twig")), "@particles/sidemenu.html.twig", 22)->display(                    // line 23
($context["context"] ?? null));
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 24
                echo "        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", array()) ||  !($this->getAttribute(($context["item"] ?? null), "image", array()) || $this->getAttribute(($context["item"] ?? null), "icon", array())))) {
                // line 30
                echo "        <span class=\"g-menu-item-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", array()));
                echo "</span>
        ";
                // line 31
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", array())) {
                    // line 32
                    echo "            <span class=\"g-menu-item-subtitle\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", array()));
                    echo "</span>
        ";
                }
                // line 34
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "    ";
            $context["SELF"] = $this;
            // line 39
            echo "    ";
            if ($this->getAttribute(($context["item"] ?? null), "visible", array())) {
                // line 40
                echo "        ";
                $context["title"] = (($this->getAttribute(($context["item"] ?? null), "icon_only", array())) ? (((" title=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", array()))) . "\"")) : (""));
                // line 41
                echo "        ";
                $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", array(0 => ($context["item"] ?? null)), "method")) ? (" active") : (""));
                // line 42
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", array()) == 1)) ? ((" g-" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "getDropdown", array(), "method")))) : (""));
                // line 43
                echo "        ";
                $context["parent"] = (($this->getAttribute(($context["item"] ?? null), "children", array())) ? (" g-parent") : (""));
                // line 44
                echo "        ";
                $context["target"] = ((($this->getAttribute(($context["item"] ?? null), "target", array()) != "_self")) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", array()))) . "\"")) : (""));
                // line 45
                echo "
        <li class=\"g-menu-item g-menu-item-type-";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", array()));
                echo " g-menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", array()));
                if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", array())) {
                    echo ($context["parent"] ?? null);
                }
                echo ($context["active"] ?? null);
                echo ($context["dropdown"] ?? null);
                echo " ";
                if (($this->getAttribute(($context["item"] ?? null), "url", array()) && $this->getAttribute(($context["item"] ?? null), "children", array()))) {
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", array())) {
                        echo "g-menu-item-link-parent";
                    }
                }
                echo " ";
                echo twig_escape_filter($this->env, _twig_default_filter(twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "class", array())), ""), "html", null, true);
                echo "\"";
                // line 47
                echo $context["SELF"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                // line 48
                if ((($this->getAttribute(($context["particle"] ?? null), "renderTitles", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "renderTitles", array()), 0)) : (0))) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", array()));
                    echo "\"";
                }
                echo ">
            ";
                // line 49
                if ($this->getAttribute(($context["item"] ?? null), "url", array())) {
                    echo "<a class=\"g-menu-item-container";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "anchor_class", array())) ? ((" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", array()))) : ("")), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", array()));
                    echo (($this->getAttribute(($context["item"] ?? null), "hash", array())) ? (twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", array()))) : (""));
                    echo "\"";
                    echo (($context["title"] ?? null) . ($context["target"] ?? null));
                    echo ">
            ";
                } else {
                    // line 50
                    echo "<div class=\"g-menu-item-container";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "anchor_class", array())) ? ((" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", array()))) : ("")), "html", null, true);
                    echo "\" data-g-menuparent=\"\">";
                }
                // line 51
                echo "                ";
                if ($this->getAttribute(($context["item"] ?? null), "image", array())) {
                    // line 52
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", array())));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", array()));
                    echo "\" />
                ";
                } elseif ($this->getAttribute(                // line 53
($context["item"] ?? null), "icon", array())) {
                    // line 54
                    echo "                    <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", array()));
                    echo "\"></i>
                ";
                }
                // line 56
                echo "                ";
                if ($this->getAttribute(($context["item"] ?? null), "url", array())) {
                    // line 57
                    echo "                    <span class=\"g-menu-item-content\">
                        ";
                    // line 58
                    echo $context["SELF"]->getdisplayTitle(($context["item"] ?? null));
                    echo "
                    </span>
                    ";
                    // line 60
                    if (($this->getAttribute(($context["item"] ?? null), "children", array()) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", array()))) {
                        // line 61
                        echo "<span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>";
                    }
                    // line 63
                    echo "                ";
                } else {
                    // line 64
                    echo "                    ";
                    if (($this->getAttribute(($context["item"] ?? null), "type", array()) == "particle")) {
                        // line 65
                        echo "                        ";
                        echo $context["SELF"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                        echo "
                    ";
                    } elseif (($this->getAttribute(                    // line 66
($context["item"] ?? null), "type", array()) == "heading")) {
                        // line 67
                        echo "                        <span class=\"g-nav-header g-menu-item-content\"";
                        echo ($context["title"] ?? null);
                        echo ">";
                        echo $context["SELF"]->getdisplayTitle(($context["item"] ?? null));
                        echo "</span>
                    ";
                    } else {
                        // line 69
                        echo "                        <span class=\"g-separator g-menu-item-content\"";
                        echo ($context["title"] ?? null);
                        echo ">";
                        echo $context["SELF"]->getdisplayTitle(($context["item"] ?? null));
                        echo "</span>
                    ";
                    }
                    // line 71
                    echo "                        ";
                    if (($this->getAttribute(($context["item"] ?? null), "children", array()) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", array()))) {
                        // line 72
                        echo "<span class=\"g-menu-parent-indicator\"></span>";
                    }
                    // line 74
                    echo "                ";
                }
                // line 75
                echo "            ";
                if ($this->getAttribute(($context["item"] ?? null), "url", array())) {
                    echo "</a>
            ";
                } else {
                    // line 76
                    echo "</div>";
                }
                // line 77
                echo "            ";
                if ($this->getAttribute(($context["item"] ?? null), "children", array())) {
                    // line 78
                    echo $context["SELF"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                }
                // line 80
                echo "        </li>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 84
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 85
            echo "    ";
            $context["SELF"] = $this;
            // line 86
            echo "    <div class=\"g-grid\">
        ";
            // line 87
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", array(), "method") == "standard")) ? (array(0 => ($context["item"] ?? null))) : ($this->getAttribute(($context["item"] ?? null), "groups", array())));
            // line 88
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                // line 89
                echo "        <div class=\"g-block ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('toGrid')->getCallable(), array($this->getAttribute(($context["item"] ?? null), "columnWidth", array(0 => $context["column"]), "method"))));
                echo "\">
            <ul class=\"g-sublevel\">
                <li class=\"g-level-";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "level", array()));
                echo " g-go-back\">
                    <a class=\"g-menu-item-container\" href=\"#\" data-g-menuparent=\"\"><span>Back</span></a>
                </li>
                ";
                // line 94
                echo $context["SELF"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
            </ul>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 101
    public function getdisplayItems($__items__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 102
            echo "    ";
            $context["SELF"] = $this;
            // line 103
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 104
                echo "        ";
                if (($this->getAttribute($context["item"], "level", array()) == 1)) {
                    $context["dropdown_type"] = $this->getAttribute($context["item"], "dropdown", array());
                }
                // line 105
                echo "        ";
                echo $context["SELF"]->getdisplayItem($context["item"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            $context["SELF"] = $this;
            // line 111
            echo "    ";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", array())) {
                // line 112
                echo "        <ul class=\"g-dropdown g-inactive ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", array(), "any", false, true), "config", array(), "any", false, true), "get", array(0 => "styles.menu.animation"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", array(), "any", false, true), "config", array(), "any", false, true), "get", array(0 => "styles.menu.animation"), "method"), "g-fade")) : ("g-fade")), "html", null, true);
                echo "\"";
                echo $context["SELF"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null));
                echo ">
            <li class=\"g-dropdown-column\">
                ";
                // line 114
                echo $context["SELF"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
            </li>
        </ul>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/sidemenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 114,  538 => 112,  535 => 111,  532 => 110,  517 => 109,  495 => 105,  490 => 104,  485 => 103,  482 => 102,  467 => 101,  451 => 98,  441 => 94,  435 => 91,  429 => 89,  424 => 88,  422 => 87,  419 => 86,  416 => 85,  401 => 84,  384 => 80,  381 => 78,  378 => 77,  375 => 76,  369 => 75,  366 => 74,  363 => 72,  360 => 71,  352 => 69,  344 => 67,  342 => 66,  337 => 65,  334 => 64,  331 => 63,  328 => 61,  326 => 60,  321 => 58,  318 => 57,  315 => 56,  309 => 54,  307 => 53,  300 => 52,  297 => 51,  292 => 50,  280 => 49,  272 => 48,  270 => 47,  252 => 46,  249 => 45,  246 => 44,  243 => 43,  240 => 42,  237 => 41,  234 => 40,  231 => 39,  228 => 38,  213 => 37,  197 => 34,  191 => 32,  189 => 31,  184 => 30,  181 => 29,  169 => 28,  152 => 24,  146 => 23,  144 => 22,  139 => 21,  136 => 20,  133 => 19,  130 => 18,  117 => 17,  96 => 12,  94 => 11,  92 => 10,  90 => 9,  88 => 8,  73 => 7,  64 => 123,  58 => 121,  56 => 120,  53 => 119,  50 => 108,  47 => 100,  44 => 83,  41 => 36,  38 => 27,  35 => 16,  32 => 6,  26 => 4,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/sidemenu.html.twig", "C:\\xampp\\htdocs\\dauster\\public\\web\\templates\\rt_kraken\\particles\\sidemenu.html.twig");
    }
}
