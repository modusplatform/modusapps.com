<?php

/* @particles/gridcontent.html.twig */
class __TwigTemplate_95586c080043337e5227adaff065efa24be9e2222f81558d27c819f6d6eaad05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/gridcontent.html.twig", 1);
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
        echo "
    <div class=\"g-gridcontent ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
        <div class=\"g-grid\">
            <div class=\"g-block g-gridcontent-title-desc\">
                ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 9
        echo "                ";
        if ($this->getAttribute(($context["particle"] ?? null), "desc", array())) {
            echo "<div class=\"g-gridcontent-desc\">";
            echo $this->getAttribute(($context["particle"] ?? null), "desc", array());
            echo "</div>";
        }
        // line 10
        echo "            </div>
            <div class=\"g-block g-gridcontent-readmore\">
                ";
        // line 12
        if ($this->getAttribute(($context["particle"] ?? null), "readmore", array())) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "readmorelink", array()));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "readmoreclass", array()));
            echo "\">";
            echo $this->getAttribute(($context["particle"] ?? null), "readmore", array());
            echo "</a>";
        }
        // line 13
        echo "            </div>
        </div>

        <div class=\"g-gridcontent-wrapper ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", array()));
        echo "\">

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "gridcontentitems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gridcontentitem"]) {
            // line 19
            echo "                <div class=\"g-gridcontent-item\">
                    <div class=\"g-gridcontent-item-wrapper g-gridcontent-";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute($context["gridcontentitem"], "iconcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["gridcontentitem"], "iconcolor", array()), "accent1")) : ("accent1")), "html", null, true);
            echo "\">
                        ";
            // line 21
            if ($this->getAttribute($context["gridcontentitem"], "link", array())) {
                // line 22
                echo "                            <a class=\"g-gridcontent-link\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gridcontentitem"], "link", array()));
                echo "\">
                        ";
            }
            // line 24
            echo "
                        <i class=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["gridcontentitem"], "icon", array()));
            echo "\"></i>
                        ";
            // line 26
            if ($this->getAttribute($context["gridcontentitem"], "title", array())) {
                echo "<span class=\"g-gridcontent-item-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gridcontentitem"], "title", array()));
                echo "</span>";
            }
            // line 27
            echo "                        ";
            if ($this->getAttribute($context["gridcontentitem"], "desc", array())) {
                echo "<div class=\"g-gridcontent-item-desc\">";
                echo $this->getAttribute($context["gridcontentitem"], "desc", array());
                echo "</div>";
            }
            // line 28
            echo "
                        ";
            // line 29
            if ($this->getAttribute($context["gridcontentitem"], "link", array())) {
                // line 30
                echo "                            </a>
                        ";
            }
            // line 32
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gridcontentitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/gridcontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  125 => 32,  121 => 30,  119 => 29,  116 => 28,  109 => 27,  103 => 26,  99 => 25,  96 => 24,  90 => 22,  88 => 21,  84 => 20,  81 => 19,  77 => 18,  72 => 16,  67 => 13,  57 => 12,  53 => 10,  46 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}

    <div class=\"g-gridcontent {{ particle.class|e }}\">
        <div class=\"g-grid\">
            <div class=\"g-block g-gridcontent-title-desc\">
                {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}
                {% if particle.desc %}<div class=\"g-gridcontent-desc\">{{ particle.desc|raw }}</div>{% endif %}
            </div>
            <div class=\"g-block g-gridcontent-readmore\">
                {% if particle.readmore %}<a href=\"{{ particle.readmorelink|e }}\" class=\"button {{ particle.readmoreclass|e }}\">{{ particle.readmore|raw }}</a>{% endif %}
            </div>
        </div>

        <div class=\"g-gridcontent-wrapper {{ particle.cols|e }}\">

            {% for gridcontentitem in particle.gridcontentitems %}
                <div class=\"g-gridcontent-item\">
                    <div class=\"g-gridcontent-item-wrapper g-gridcontent-{{ gridcontentitem.iconcolor|default('accent1') }}\">
                        {% if gridcontentitem.link %}
                            <a class=\"g-gridcontent-link\" href=\"{{ gridcontentitem.link|e }}\">
                        {% endif %}

                        <i class=\"{{ gridcontentitem.icon|e }}\"></i>
                        {% if gridcontentitem.title %}<span class=\"g-gridcontent-item-title\">{{ gridcontentitem.title|e }}</span>{% endif %}
                        {% if gridcontentitem.desc %}<div class=\"g-gridcontent-item-desc\">{{ gridcontentitem.desc|raw }}</div>{% endif %}

                        {% if gridcontentitem.link %}
                            </a>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}
", "@particles/gridcontent.html.twig", "/usr/share/nginx/html/user/themes/rt_interstellar/particles/gridcontent.html.twig");
    }
}
