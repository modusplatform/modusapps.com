<?php

/* @gantry-admin/menu/columns.html.twig */
class __TwigTemplate_cb95505ee92d4d54caa638da863ab79e824d9e99e51467a01d3400ed7867a6a1 extends Twig_Template
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
        echo "<section class=\"g-grid submenu-selector\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "groups", array()));
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
        foreach ($context['_seq'] as $context["group"] => $context["children"]) {
            // line 3
            echo "        ";
            $context["width"] = twig_number_format_filter($this->env, $this->getAttribute(($context["item"] ?? null), "columnWidth", array(0 => $context["group"]), "method"), 1);
            // line 4
            echo "        ";
            $context["special"] = (array_key_exists("column", $context) && ($context["group"] == ($context["column"] ?? null)));
            // line 5
            echo "        ";
            $context["target"] = ("list-" . $context["group"]);
            // line 6
            echo "        <div class=\"g-block\" data-mm-id=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? null));
            echo "\" style=\"flex: 0 1 ";
            echo twig_escape_filter($this->env, twig_round(($context["width"] ?? null), 1), "html", null, true);
            echo "%\">
            <div class=\"submenu-column\">
                ";
            // line 8
            $this->loadTemplate("menu/list.html.twig", "@gantry-admin/menu/columns.html.twig", 8)->display(array_merge($context, array("item" => ((($context["special"] ?? null)) ? (($context["override"] ?? null)) : (($context["item"] ?? null))), "group" => $context["group"])));
            // line 9
            echo "                ";
            $context["size"] = twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", array()));
            // line 10
            echo "            </div>
            <div class=\"submenu-ratio\">
                <span class=\"percentage\"><input type=\"text\" class=\"column-pc\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_round(($context["width"] ?? null), 1), "html", null, true);
            echo "\" tabindex=\"";
            echo twig_escape_filter($this->env, ($context["group"] + 1), "html", null, true);
            echo "\" min=\"5\" max=\"95\" />%</span>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['children'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</section>
<span class=\"fa fa-plus add-column\" aria-hidden=\"true\"></span>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/menu/columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  65 => 12,  61 => 10,  58 => 9,  56 => 8,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/menu/columns.html.twig", "/usr/share/nginx/html/user/plugins/gantry5/admin/templates/menu/columns.html.twig");
    }
}
