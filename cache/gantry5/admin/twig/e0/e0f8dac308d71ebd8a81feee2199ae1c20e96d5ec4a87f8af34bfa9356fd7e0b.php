<?php

/* menu/list.html.twig */
class __TwigTemplate_324edf18624f8038cc446e3a4c97eff59182661412aa15367d2fe8e15eb2f74f extends Twig_Template
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
        $context["children"] = ((($this->getAttribute(($context["item"] ?? null), "level", array()) == 1)) ? ($this->getAttribute(($context["item"] ?? null), "group", array(0 => ($context["group"] ?? null)), "method")) : ($this->getAttribute(($context["item"] ?? null), "children", array())));
        // line 2
        echo "
<div class=\"submenu-level\">Level ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "level", array()), "html", null, true);
        echo "</div>
<ul class=\"submenu-items\" data-mm-base=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "path", array()), "html", null, true);
        echo "\" data-mm-base-level=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "level", array()), "html", null, true);
        echo "\">";
        // line 5
        if (($this->getAttribute(($context["item"] ?? null), "level", array()) > 1)) {
            // line 6
            echo "        <li>
            <a class=\"menu-item menu-item-back\"
               data-g5-ajaxify=\"\"
               data-g5-ajaxify-params=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("inline" => 1, "group" => ($context["group"] ?? null))), "html_attr");
            echo "\"
               data-g5-ajaxify-target-parent=\".submenu-column\"
               href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "menu", 1 => ($context["id"] ?? null), 2 => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "parent", array()), "path", array())), "method"), "html", null, true);
            echo "\"
            >
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute(($context["item"] ?? null), "level", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "                <i class=\"fa fa-fw fa-chevron-left\" aria-hidden=\"true\"></i> &nbsp;
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </a>
        </li>
    ";
        }
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 20
            echo "        <li data-mm-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "path", array()), "html", null, true);
            echo "\"
            data-mm-level=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "level", array()), "html", null, true);
            echo "\"
            ";
            // line 22
            if ((($this->getAttribute($context["child"], "type", array()) == "particle") || ($this->getAttribute($context["child"], "type", array()) == "module"))) {
                // line 23
                echo "            class=\"g-menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "type", array()), "html", null, true);
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "options", array()), "particle", array()), "enabled", array()) == false)) {
                    echo " g-menu-item-disabled";
                }
                echo "\"
            data-mm-original-type=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "type", array()), "html", null, true);
                echo "\"
            ";
            } else {
                // line 26
                echo "                class=\"";
                if (($this->getAttribute($context["child"], "enabled", array()) == false)) {
                    echo "g-menu-item-disabled";
                }
                echo "\"
            ";
            }
            // line 28
            echo "        >
            ";
            // line 29
            $this->loadTemplate("menu/item.html.twig", "menu/list.html.twig", 29)->display(array_merge($context, array("item" => $context["child"], "target" => ("list-" . ($context["group"] ?? null)))));
            // line 30
            echo "        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</ul>
<span class=\"submenu-reorder\"><i class=\"fa fa-fw fa-arrows-h\" aria-hidden=\"true\"></i></span>
";
    }

    public function getTemplateName()
    {
        return "menu/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  120 => 30,  118 => 29,  115 => 28,  107 => 26,  102 => 24,  94 => 23,  92 => 22,  88 => 21,  83 => 20,  66 => 19,  61 => 16,  54 => 14,  50 => 13,  45 => 11,  40 => 9,  35 => 6,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/list.html.twig", "/usr/share/nginx/html/user/plugins/gantry5/admin/templates/menu/list.html.twig");
    }
}
