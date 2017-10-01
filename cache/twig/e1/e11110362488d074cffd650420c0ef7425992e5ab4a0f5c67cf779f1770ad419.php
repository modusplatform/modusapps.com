<?php

/* @particles/blockcontent.html.twig */
class __TwigTemplate_d7a3442b3342d2c50872ebf573789cd5423d83eb3a51d8a9ecfa6291968abd8e extends Twig_Template
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
        echo "
    <div class=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
        <div class=\"g-blockcontent\">
            ";
        // line 9
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 10
        echo "
            ";
        // line 11
        if ((((($this->getAttribute(($context["particle"] ?? null), "icon", array()) || $this->getAttribute(($context["particle"] ?? null), "image", array())) || $this->getAttribute(($context["particle"] ?? null), "headline", array())) || $this->getAttribute(($context["particle"] ?? null), "description", array())) || $this->getAttribute(($context["particle"] ?? null), "linktext", array()))) {
            // line 12
            echo "                <div class=\"g-grid\">
                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            ";
            // line 15
            if ($this->getAttribute(($context["particle"] ?? null), "image", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", array())), "html", null, true);
                echo "\" class=\"g-blockcontent-image\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headline", array()));
                echo "\" />";
            }
            // line 16
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "icon", array())) {
                echo "<span class=\"g-blockcontent-title-icon\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon", array()), "html", null, true);
                echo "\"></i></span>";
            }
            // line 17
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "headline", array())) {
                echo "<h2 class=\"g-title g-blockcontent-headline\">";
                echo $this->getAttribute(($context["particle"] ?? null), "headline", array());
                echo "</h2>";
            }
            // line 18
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "description", array())) {
                echo "<div class=\"g-blockcontent-description\">";
                echo $this->getAttribute(($context["particle"] ?? null), "description", array());
                echo "</div>";
            }
            // line 19
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "linktext", array())) {
                // line 20
                echo "                                <p class=\"g-blockcontent-buttons\">
                                    <a target=\"";
                // line 21
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "linktarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "linktarget", array()), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", array()));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linkclass", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", array()));
                echo "</a>
                                </p>
                            ";
            }
            // line 24
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if ( !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "subcontents", array()))) {
            // line 30
            echo "                <div class=\"g-grid g-blockcontent-subcontent\">
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "subcontents", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["subcontent"]) {
                // line 32
                echo "                        <div class=\"g-block g-blockcontent-subcontent-block ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "class", array()), "html", null, true);
                echo "\">
                            <div class=\"g-content g-blockcontent-subcontent-block-content\">
                                ";
                // line 34
                if ($this->getAttribute($context["subcontent"], "rokboximage", array())) {
                    // line 35
                    echo "                                    <a data-rel=\"lightcase\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "rokboxcaption", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["subcontent"], "rokboximage", array())), "html", null, true);
                    echo "\">
                                ";
                }
                // line 37
                echo "                                ";
                if ($this->getAttribute($context["subcontent"], "img", array())) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["subcontent"], "img", array())), "html", null, true);
                    echo "\" class=\"g-blockcontent-subcontent-img\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "title", array()));
                    echo "\" />";
                }
                // line 38
                echo "                                ";
                if ($this->getAttribute($context["subcontent"], "rokboximage", array())) {
                    // line 39
                    echo "                                    </a>
                                ";
                }
                // line 41
                echo "                                ";
                if ($this->getAttribute($context["subcontent"], "name", array())) {
                    // line 42
                    echo "                                    <h4 class=\"g-blockcontent-subcontent-title\">
                                        ";
                    // line 43
                    if ($this->getAttribute($context["subcontent"], "icon", array())) {
                        echo "<span class=\"g-blockcontent-subcontent-title-icon\"><i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "icon", array()), "html", null, true);
                        echo "\"></i></span>";
                    }
                    // line 44
                    echo "                                        <span class=\"g-blockcontent-subcontent-title-text\">";
                    echo $this->getAttribute($context["subcontent"], "name", array());
                    echo "</span>
                                        ";
                    // line 45
                    if ($this->getAttribute($context["subcontent"], "subtitle", array())) {
                        echo " <span class=\"g-blockcontent-subcontent-subtitle\">";
                        echo $this->getAttribute($context["subcontent"], "subtitle", array());
                        echo "</span> ";
                    }
                    // line 46
                    echo "                                    </h4>
                                ";
                }
                // line 48
                echo "                                ";
                if ($this->getAttribute($context["subcontent"], "description", array())) {
                    echo "<div class=\"g-blockcontent-subcontent-desc\">";
                    echo $this->getAttribute($context["subcontent"], "description", array());
                    echo "</div>";
                }
                // line 49
                echo "                                ";
                if ($this->getAttribute($context["subcontent"], "button", array())) {
                    // line 50
                    echo "                                    <p class=\"g-blockcontent-buttons\">
                                        <a target=\"";
                    // line 51
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["subcontent"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["subcontent"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "buttonlink", array()));
                    echo "\" class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "buttonclass", array()));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "button", array()));
                    echo "</a>
                                    </p>
                                ";
                }
                // line 54
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcontent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </div>
            ";
        }
        // line 59
        echo "        </div>
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
        return array (  219 => 59,  215 => 57,  207 => 54,  195 => 51,  192 => 50,  189 => 49,  182 => 48,  178 => 46,  172 => 45,  167 => 44,  161 => 43,  158 => 42,  155 => 41,  151 => 39,  148 => 38,  139 => 37,  131 => 35,  129 => 34,  123 => 32,  119 => 31,  116 => 30,  114 => 29,  111 => 28,  105 => 24,  93 => 21,  90 => 20,  87 => 19,  80 => 18,  73 => 17,  66 => 16,  58 => 15,  53 => 12,  51 => 11,  48 => 10,  42 => 9,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

    <div class=\"{{ particle.class|e }}\">
        <div class=\"g-blockcontent\">
            {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

            {% if particle.icon or particle.image or particle.headline or particle.description or particle.linktext %}
                <div class=\"g-grid\">
                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            {% if particle.image %}<img src=\"{{ url(particle.image) }}\" class=\"g-blockcontent-image\" alt=\"{{ particle.headline|e }}\" />{% endif %}
                            {% if particle.icon %}<span class=\"g-blockcontent-title-icon\"><i class=\"{{ particle.icon }}\"></i></span>{% endif %}
                            {% if particle.headline %}<h2 class=\"g-title g-blockcontent-headline\">{{ particle.headline|raw }}</h2>{% endif %}
                            {% if particle.description %}<div class=\"g-blockcontent-description\">{{ particle.description|raw }}</div>{% endif %}
                            {% if particle.linktext %}
                                <p class=\"g-blockcontent-buttons\">
                                    <a target=\"{{ particle.linktarget|default('_self')|e }}\" href=\"{{ particle.link|e }}\" class=\"button {{ particle.linkclass|e }}\">{{ particle.linktext|e }}</a>
                                </p>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endif %}

            {% if particle.subcontents is not empty %}
                <div class=\"g-grid g-blockcontent-subcontent\">
                    {% for subcontent in particle.subcontents %}
                        <div class=\"g-block g-blockcontent-subcontent-block {{ subcontent.class }}\">
                            <div class=\"g-content g-blockcontent-subcontent-block-content\">
                                {% if subcontent.rokboximage %}
                                    <a data-rel=\"lightcase\" title=\"{{ subcontent.rokboxcaption|e }}\" href=\"{{ url(subcontent.rokboximage) }}\">
                                {% endif %}
                                {% if subcontent.img %}<img src=\"{{ url(subcontent.img) }}\" class=\"g-blockcontent-subcontent-img\" alt=\"{{ subcontent.title|e }}\" />{% endif %}
                                {% if subcontent.rokboximage %}
                                    </a>
                                {% endif %}
                                {% if subcontent.name %}
                                    <h4 class=\"g-blockcontent-subcontent-title\">
                                        {% if subcontent.icon %}<span class=\"g-blockcontent-subcontent-title-icon\"><i class=\"{{ subcontent.icon }}\"></i></span>{% endif %}
                                        <span class=\"g-blockcontent-subcontent-title-text\">{{ subcontent.name|raw }}</span>
                                        {% if subcontent.subtitle %} <span class=\"g-blockcontent-subcontent-subtitle\">{{ subcontent.subtitle|raw }}</span> {% endif %}
                                    </h4>
                                {% endif %}
                                {% if subcontent.description %}<div class=\"g-blockcontent-subcontent-desc\">{{ subcontent.description|raw }}</div>{% endif %}
                                {% if subcontent.button %}
                                    <p class=\"g-blockcontent-buttons\">
                                        <a target=\"{{ subcontent.buttontarget|default('_self')|e }}\" href=\"{{ subcontent.buttonlink|e }}\" class=\"button {{ subcontent.buttonclass|e }}\">{{ subcontent.button|e }}</a>
                                    </p>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>

{% endblock %}
", "@particles/blockcontent.html.twig", "/usr/share/nginx/html/user/themes/rt_interstellar/particles/blockcontent.html.twig");
    }
}
