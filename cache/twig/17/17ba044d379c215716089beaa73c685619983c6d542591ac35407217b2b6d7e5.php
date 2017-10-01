<?php

/* @particles/imagegrid.html.twig */
class __TwigTemplate_ca8d5b5f37ce32ee8221f03df115f281e9068026b51ef38f8984b6bd07c42008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/imagegrid.html.twig", 1);
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
        echo "
    ";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 8
        echo "
    <div class=\"g-imagegrid ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">

        ";
        // line 11
        if ($this->getAttribute(($context["particle"] ?? null), "desc", array())) {
            echo "<div class=\"g-imagegrid-desc\">";
            echo $this->getAttribute(($context["particle"] ?? null), "desc", array());
            echo "</div>";
        }
        // line 12
        echo "
        <div class=\"g-imagegrid-wrapper ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", array()));
        echo "\">

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "imagegriditems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imagegriditem"]) {
            // line 16
            echo "                <div class=\"g-imagegrid-item\">
                    <a class=\"g-imagegrid-link\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["imagegriditem"], "image", array())));
            echo "\" data-rel=\"lightcase";
            if ($this->getAttribute(($context["particle"] ?? null), "album", array())) {
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "album", array()), "html", null, true);
            }
            echo "\">
                        <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["imagegriditem"], "image", array())));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagegriditem"], "caption", array()));
            echo "\" />
                        <div class=\"indicator\">
                            <div>
                                <i class=\"fa fa-search\"></i>
                            </div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagegriditem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/imagegrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  81 => 18,  72 => 17,  69 => 16,  65 => 15,  60 => 13,  57 => 12,  51 => 11,  46 => 9,  43 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

{% do gantry.load('lightcase.init') %}

{% block particle %}

    {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

    <div class=\"g-imagegrid {{ particle.class|e }}\">

        {% if particle.desc %}<div class=\"g-imagegrid-desc\">{{ particle.desc|raw }}</div>{% endif %}

        <div class=\"g-imagegrid-wrapper {{ particle.cols|e }}\">

            {% for imagegriditem in particle.imagegriditems %}
                <div class=\"g-imagegrid-item\">
                    <a class=\"g-imagegrid-link\" href=\"{{ url(imagegriditem.image)|e }}\" data-rel=\"lightcase{% if particle.album %}:{{ particle.album }}{% endif %}\">
                        <img src=\"{{ url(imagegriditem.image)|e }}\" alt=\"{{ imagegriditem.caption|e }}\" />
                        <div class=\"indicator\">
                            <div>
                                <i class=\"fa fa-search\"></i>
                            </div>
                        </div>
                    </a>
                </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}
", "@particles/imagegrid.html.twig", "/usr/share/nginx/html/user/themes/rt_interstellar/particles/imagegrid.html.twig");
    }
}
