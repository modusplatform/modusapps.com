<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_b6c996cbd322519a25e64a6b728000534f9f1c145469034817c78fca00fb7fa1 extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_77ef1a6dd1b3a94e95eecad10912a7d2c003923d96a4413c0c46a1221da8f3cd = ($context["php_version"] ?? null)) && is_string($__internal_23a4bdd9b4ecf45ae2cd3d20f9b0f4f668d5c41f34c62ec7ccf9e9b27a9232fd = "5.4") && ('' === $__internal_23a4bdd9b4ecf45ae2cd3d20f9b0f4f668d5c41f34c62ec7ccf9e9b27a9232fd || 0 === strpos($__internal_77ef1a6dd1b3a94e95eecad10912a7d2c003923d96a4413c0c46a1221da8f3cd, $__internal_23a4bdd9b4ecf45ae2cd3d20f9b0f4f668d5c41f34c62ec7ccf9e9b27a9232fd)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/usr/share/nginx/html/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
