<?php

/* @nucleus/module-chrome/gantry.html.twig */
class __TwigTemplate_a736e91b014fa206dddd8110d5770256e94eeb33dfcf1b046fd9455ee3d88473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'module' => array($this, 'block_module'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        ob_start();
        // line 6
        echo "    ";
        $this->displayBlock('module', $context, $blocks);
        $context["module"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        if (twig_trim_filter(($context["module"] ?? null))) {
            // line 10
            echo "<div class=\"moduletable";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["chrome"] ?? null), "class", array())) ? ((" " . $this->getAttribute(($context["chrome"] ?? null), "class", array()))) : ("")), "html", null, true);
            echo "\">
    ";
            // line 11
            if (twig_trim_filter(($context["title"] ?? null))) {
                // line 12
                echo "        <h2 class=\"g-title\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</h2>
    ";
            }
            // line 14
            echo "
    ";
            // line 15
            echo twig_escape_filter($this->env, ($context["module"] ?? null), "html", null, true);
            echo "
</div>
";
        }
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_module($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@nucleus/module-chrome/gantry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  59 => 2,  51 => 15,  48 => 14,  42 => 12,  40 => 11,  35 => 10,  33 => 9,  29 => 6,  27 => 5,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set title %}
    {% block title %}{% endblock %}
{%- endset -%}

{% set module %}
    {% block module %}{% endblock %}
{%- endset -%}

{% if module|trim %}
<div class=\"moduletable{{ chrome.class ? ' ' ~ chrome.class }}\">
    {% if title|trim %}
        <h2 class=\"g-title\">{{ title }}</h2>
    {% endif %}

    {{ module }}
</div>
{% endif %}", "@nucleus/module-chrome/gantry.html.twig", "/usr/share/nginx/html/user/plugins/gantry5/engines/nucleus/templates/module-chrome/gantry.html.twig");
    }
}
