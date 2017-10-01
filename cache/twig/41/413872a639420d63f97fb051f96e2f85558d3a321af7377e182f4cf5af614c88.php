<?php

/* @particles/copyright.html.twig */
class __TwigTemplate_628cb51ed58f0a6ea06cb78027e29e06a1757b96a09ad5dd04e6a3874742da10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/copyright.html.twig", 1);
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
        $context["start_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", array()), "start", array())), array(0 => "now", 1 => ""))) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", array()), "start", array()))));
        // line 4
        $context["end_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", array()), "end", array())), array(0 => "now", 1 => ""))) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", array()), "end", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_particle($context, array $blocks = array())
    {
        // line 7
        echo "    &copy;
    ";
        // line 8
        if ((($context["start_date"] ?? null) != ($context["end_date"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["start_date"] ?? null));
            echo " - ";
        }
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, ($context["end_date"] ?? null));
        echo "
    ";
        // line 10
        echo $this->getAttribute(($context["particle"] ?? null), "owner", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  44 => 9,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
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

{% set start_date = particle.date.start|trim in ['now', ''] ? 'now'|date('Y') : particle.date.start|e %}
{% set end_date = particle.date.end|trim in ['now', ''] ? 'now'|date('Y') : particle.date.end|e %}

{% block particle %}
    &copy;
    {% if (start_date != end_date) %}{{ start_date|e }} - {% endif %}
    {{ end_date|e }}
    {{ particle.owner|raw }}
{% endblock %}
", "@particles/copyright.html.twig", "/usr/share/nginx/html/user/plugins/gantry5/engines/nucleus/particles/copyright.html.twig");
    }
}
