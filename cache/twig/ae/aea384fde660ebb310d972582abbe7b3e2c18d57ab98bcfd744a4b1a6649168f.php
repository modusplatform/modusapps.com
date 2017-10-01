<?php

/* @nucleus/partials/module.html.twig */
class __TwigTemplate_893a38c3106e903cb7dfbf9fed418e7231c34cd7530a0a51a35d538f28081b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'module' => array($this, 'block_module'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(array(0 => (("@nucleus/module-chrome/" . ($context["style"] ?? null)) . ".html.twig"), 1 => "@nucleus/module-chrome/gantry.html.twig"), "@nucleus/partials/module.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["id"] = (($this->getAttribute(($context["segment"] ?? null), "id", array())) ? ($this->getAttribute(($context["segment"] ?? null), "id", array())) : ((($this->getAttribute(($context["segment"] ?? null), "type", array()) . "-") . rand(1000, 9999))));
        // line 4
        $context["chrome"] = $this->getAttribute(($context["segment"] ?? null), "chrome", array());
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "chrome", array()), "display_title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["segment"] ?? null), "title", array()), "html", null, true);
        }
    }

    // line 10
    public function block_module($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if (twig_in_filter($this->getAttribute(($context["segment"] ?? null), "type", array()), array(0 => "particle", 1 => "spacer"))) {
            // line 12
            echo "        ";
            $context["item"] = array("id" => (($this->getAttribute(($context["position"] ?? null), "key", array())) ? ((($this->getAttribute(($context["position"] ?? null), "key", array()) . "-module-") . ($context["id"] ?? null))) : (($context["id"] ?? null))), "type" => $this->getAttribute(($context["segment"] ?? null), "type", array()), "subtype" => $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", array()), "type", array()), "attributes" => $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", array()), "attributes", array()));
            // line 13
            echo "        ";
            $context["attribs"] = twig_array_merge(array("inContent" => ($context["inContent"] ?? null)), ((($context["ajax"] ?? null)) ? (array("ajax" => ($context["ajax"] ?? null))) : (array())));
            // line 14
            echo "        ";
            echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "renderContent", array(0 => ($context["item"] ?? null), 1 => ($context["attribs"] ?? null)), "method");
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            $this->loadTemplate(array(0 => (((("@nucleus/content/" . $this->getAttribute(            // line 17
($context["segment"] ?? null), "type", array())) . "/") . (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", array(), "any", false, true), "type", array()), "default")) : ("default"))) . ".html.twig"), 1 => (("@nucleus/content/" . $this->getAttribute(            // line 18
($context["segment"] ?? null), "type", array())) . ".html.twig"), 2 => "@nucleus/content/unknown.html.twig"), "@nucleus/partials/module.html.twig", 16)->display(array_merge($context, array("segment" => array("id" =>             // line 20
($context["id"] ?? null), "type" => $this->getAttribute(($context["segment"] ?? null), "type", array()), "subtype" => $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", array()), "type", array()), "options" => $this->getAttribute(($context["segment"] ?? null), "options", array()), "attributes" => $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", array()), "attributes", array())))));
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/partials/module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  65 => 20,  64 => 18,  63 => 17,  61 => 16,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ['@nucleus/module-chrome/' ~ style ~ '.html.twig', '@nucleus/module-chrome/gantry.html.twig'] %}

{% set id = segment.id ?: segment.type ~ '-' ~ rand(1000, 9999) %}
{% set chrome = segment.chrome %}

{% block title %}
    {% if segment.chrome.display_title %}{{ segment.title }}{% endif %}
{% endblock %}

{% block module %}
    {% if segment.type in ['particle', 'spacer'] %}
        {% set item = {id: position.key ? position.key ~ '-module-' ~ id : id, type: segment.type, subtype: segment.options.type, attributes: segment.options.attributes} %}
        {% set attribs = {inContent: inContent}|merge(ajax ? {ajax: ajax} : {}) %}
        {{ gantry.theme.renderContent(item, attribs)|raw }}
    {% else %}
        {% include [
        '@nucleus/content/' ~ segment.type ~ '/' ~ segment.options.type|default('default') ~ '.html.twig',
        '@nucleus/content/' ~ segment.type ~ '.html.twig',
        '@nucleus/content/unknown.html.twig']
        with { segment: {id: id, type: segment.type, subtype: segment.options.type, options: segment.options, attributes: segment.options.attributes }} %}
    {% endif %}
{% endblock %}
", "@nucleus/partials/module.html.twig", "/usr/share/nginx/html/user/plugins/gantry5/engines/nucleus/templates/partials/module.html.twig");
    }
}
