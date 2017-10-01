<?php

/* @particles/owlcarousel.html.twig */
class __TwigTemplate_52476f21d74da3510abdf094d2e8835a3709022b5e220658324f851ecd951506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
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
    ";
        // line 5
        if (($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "showcase")) {
            // line 6
            echo "        <div class=\"g-container-wrapper-panel\">
            <div class=\"g-container carousel\">

                ";
            // line 9
            if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
                echo "<h2 class=\"g-title\">";
                echo $this->getAttribute(($context["particle"] ?? null), "title", array());
                echo "</h2>";
            }
            // line 10
            echo "
                <div class=\"g-owlcarousel-panel-container\" id=\"g-owlcarousel-panel-";
            // line 11
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">

                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "                        <div class=\"g-owlcarousel-panel ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "selected";
                }
                echo "\" id=\"g-owlcarousel-panel-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                ";
                // line 15
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<span class=\"g-owlcarousel-panel-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</span>";
                }
                // line 16
                echo "                                ";
                if ($this->getAttribute($context["item"], "subtitle", array())) {
                    echo "<span class=\"g-owlcarousel-panel-subtitle\">";
                    echo $this->getAttribute($context["item"], "subtitle", array());
                    echo "</span>";
                }
                // line 17
                echo "                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
                </div>
            </div>
        </div>

        <div class=\"g-container-wrapper\">
        <div class=\"g-container carousel\">
            <div class=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
            echo " g-owlcarousel-layout-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "\">

                <div id=\"g-owlcarousel-panel-indicator-";
            // line 28
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g-owlcarousel-panel-indicator\">
                    <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"95.13px\" height=\"45.44px\" viewBox=\"0 0 95.13 45.44\" enable-background=\"new 0 0 95.13 45.44\" xml:space=\"preserve\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" fill=\"#FFFFFF\" d=\"M0,14.75c28.5-1.13,22.56,30.69,48.25,30.69c20.44,0.03,24.25-32.69,46.88-30.69V0H0V14.75z\"/>
                    </svg>
                </div>

                <div id=\"g-owlcarousel-";
            // line 34
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g-owlcarousel owl-carousel ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "width", array()));
            echo "\">

                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "                        <div class=\"item\">
                            <div class=\"g-owlcarousel-content-left\">
                                <div class=\"g-owlcarousel-content-padding\">
                                    ";
                // line 40
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-owlcarousel-item-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</div>";
                }
                // line 41
                echo "                                    ";
                if ($this->getAttribute($context["item"], "desc", array())) {
                    echo "<div class=\"g-owlcarousel-item-desc\">";
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "</div>";
                }
                // line 42
                echo "                                    ";
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 43
                    echo "                                        <div class=\"g-owlcarousel-item-link\">
                                            <a target=\"";
                    // line 44
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" class=\"g-owlcarousel-item-button button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">
                                                ";
                    // line 45
                    echo $this->getAttribute($context["item"], "linktext", array());
                    echo "
                                            </a>
                                        </div>
                                    ";
                }
                // line 49
                echo "                                </div>
                            </div>

                            <div class=\"g-owlcarousel-content-right\">
                                <div class=\"g-owlcarousel-content-padding\">
                                ";
                // line 54
                if ($this->getAttribute($context["item"], "icon", array())) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 55
                echo "                                ";
                if ($this->getAttribute($context["item"], "icon2", array())) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon2", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 56
                echo "                                ";
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 57
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                    echo "\" />
                                ";
                }
                // line 59
                echo "                            </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
                </div>
            </div>
        </div>
        </div>

    ";
        } elseif (($this->getAttribute(        // line 69
($context["particle"] ?? null), "layout", array()) == "standard")) {
            // line 70
            echo "
        <div class=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
            echo " g-owlcarousel-layout-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "\">

            ";
            // line 73
            if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
                echo "<h2 class=\"g-title\">";
                echo $this->getAttribute(($context["particle"] ?? null), "title", array());
                echo "</h2>";
            }
            // line 74
            echo "
            <div id=\"g-owlcarousel-";
            // line 75
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g-owlcarousel owl-carousel ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "width", array()));
            echo "\">

                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 78
                echo "                    <div>
                        ";
                // line 79
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 80
                    echo "                            <div class=\"image\">
                                <img src=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                    echo "\" />
                            </div>
                        ";
                }
                // line 84
                echo "                        ";
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-owlcarousel-item-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</div>";
                }
                // line 85
                echo "                        ";
                if ($this->getAttribute($context["item"], "desc", array())) {
                    echo "<div class=\"g-owlcarousel-item-desc\">";
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "</div>";
                }
                // line 86
                echo "                        ";
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 87
                    echo "                            <div class=\"g-owlcarousel-item-link\">
                                <a target=\"";
                    // line 88
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" class=\"g-owlcarousel-item-button button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">
                                    ";
                    // line 89
                    echo $this->getAttribute($context["item"], "linktext", array());
                    echo "
                                </a>
                            </div>
                        ";
                }
                // line 93
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "
            </div>
        </div>

    ";
        } elseif (($this->getAttribute(        // line 99
($context["particle"] ?? null), "layout", array()) == "testimonial")) {
            // line 100
            echo "
        <div class=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
            echo " g-owlcarousel-layout-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
            echo "\">

            ";
            // line 103
            if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
                echo "<h2 class=\"g-title\">";
                echo $this->getAttribute(($context["particle"] ?? null), "title", array());
                echo "</h2>";
            }
            // line 104
            echo "
            <div id=\"g-owlcarousel-";
            // line 105
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g-owlcarousel owl-carousel ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "width", array()));
            echo "\">

                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 108
                echo "                    ";
                if ($this->getAttribute($context["item"], "desc", array())) {
                    // line 109
                    echo "                        <div class=\"g-owlcarousel-item-desc\">
                            ";
                    // line 110
                    if ($this->getAttribute($context["item"], "icon", array())) {
                        echo "<i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 111
                    echo "
                            ";
                    // line 112
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "

                            ";
                    // line 114
                    if ($this->getAttribute($context["item"], "title", array())) {
                        // line 115
                        echo "                                <div class=\"g-owlcarousel-item-title\">";
                        echo $this->getAttribute($context["item"], "title", array());
                        echo "</div>
                            ";
                    }
                    // line 117
                    echo "                        </div>
                    ";
                }
                // line 119
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "
            </div>
        </div>

    ";
        }
        // line 125
        echo "
";
    }

    // line 128
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 129
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owlcarousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(window).load(function() {
            var owl";
        // line 132
        echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
        echo " = jQuery('#g-owlcarousel-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "');
            owl";
        // line 133
        echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
        echo ".owlCarousel({
                items: 1,
                rtl: ";
        // line 135
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "direction", array()) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                ";
        // line 136
        if (($this->getAttribute(($context["particle"] ?? null), "animateOut", array()) && ($this->getAttribute(($context["particle"] ?? null), "animateOut", array()) != "default"))) {
            // line 137
            echo "                animateOut: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animateOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animateOut", array()), "fadeOut")) : ("fadeOut")));
            echo "',
                ";
        }
        // line 139
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "animateIn", array()) && ($this->getAttribute(($context["particle"] ?? null), "animateIn", array()) != "default"))) {
            // line 140
            echo "                animateIn: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animateIn", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animateIn", array()), "fadeIn")) : ("fadeIn")));
            echo "',
                ";
        }
        // line 142
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "nav", array()) == "enabled")) {
            // line 143
            echo "                nav: true,
                navText: ['";
            // line 144
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "prevText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "prevText", array()), "<i class=\"fa fa-chevron-circle-left\"></i>")) : ("<i class=\"fa fa-chevron-circle-left\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "nextText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "nextText", array()), "<i class=\"fa fa-chevron-circle-right\"></i>")) : ("<i class=\"fa fa-chevron-circle-right\"></i>")), "js"), "html", null, true);
            echo "'],
                ";
        } else {
            // line 146
            echo "                nav: false,
                ";
        }
        // line 148
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "dots", array()) == "enabled")) {
            // line 149
            echo "                dots: true,
                ";
        } else {
            // line 151
            echo "                dots: false,
                ";
        }
        // line 153
        echo "                ";
        if ((($this->getAttribute(($context["particle"] ?? null), "loop", array()) == "enabled") && ($this->getAttribute(($context["particle"] ?? null), "layout", array()) != "showcase"))) {
            // line 154
            echo "                loop: true,
                ";
        } else {
            // line 156
            echo "                loop: false,
                ";
        }
        // line 158
        echo "                ";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", array()) == "enabled")) {
            // line 159
            echo "                autoplay: true,
                autoplayTimeout: ";
            // line 160
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", array()), "5000")) : ("5000")), "html", null, true);
            echo ",
                ";
            // line 161
            if (($this->getAttribute(($context["particle"] ?? null), "pauseOnHover", array()) == "enabled")) {
                // line 162
                echo "                autoplayHoverPause: true,
                ";
            } else {
                // line 164
                echo "                autoplayHoverPause: false,
                ";
            }
            // line 166
            echo "                ";
        } else {
            // line 167
            echo "                autoplay: false,
                ";
        }
        // line 169
        echo "            })

            ";
        // line 171
        if (($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "showcase")) {
            // line 172
            echo "            owl";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
            echo ".on('changed.owl.carousel', function(event) {
                var currentItem_";
            // line 173
            echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
            echo " = \"#g-owlcarousel-panel-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " #g-owlcarousel-panel-\" + (event.item.index + 1);
                jQuery(currentItem_";
            // line 174
            echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
            echo ").trigger(\"click\");
            })
            ";
        }
        // line 177
        echo "        });
    </script>

    ";
        // line 180
        if (($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "showcase")) {
            // line 181
            echo "    ";
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "
    <script type=\"text/javascript\">
     indicator_";
            // line 183
            echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
            echo " = jQuery('#g-owlcarousel-panel-indicator-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
    var owlPanelItems";
            // line 184
            echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
            echo " = jQuery('#g-owlcarousel-panel-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .g-owlcarousel-panel');
    ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 186
                echo "    jQuery(\"#g-owlcarousel-panel-";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " #g-owlcarousel-panel-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\").click(function(event) {
        var owl";
                // line 187
                echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
                echo " = jQuery('#g-owlcarousel-";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "');
        owlPanelItems";
                // line 188
                echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
                echo ".removeClass('selected');
        var toIndex = ";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " - 1;
        owl";
                // line 190
                echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
                echo ".trigger('to.owl.carousel', [toIndex, 500, true]);
        jQuery(this).addClass('selected');
        indicator_";
                // line 192
                echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
                echo ".css({
            left: jQuery(this).position().left";
                // line 193
                if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "direction", array()) == "rtl")) {
                    echo " + 200";
                }
                echo " + 'px',
        });
    });
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "    </script>
    ";
        }
        // line 199
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 199,  638 => 197,  618 => 193,  614 => 192,  609 => 190,  605 => 189,  601 => 188,  595 => 187,  588 => 186,  571 => 185,  565 => 184,  559 => 183,  553 => 181,  551 => 180,  546 => 177,  540 => 174,  534 => 173,  529 => 172,  527 => 171,  523 => 169,  519 => 167,  516 => 166,  512 => 164,  508 => 162,  506 => 161,  502 => 160,  499 => 159,  496 => 158,  492 => 156,  488 => 154,  485 => 153,  481 => 151,  477 => 149,  474 => 148,  470 => 146,  463 => 144,  460 => 143,  457 => 142,  451 => 140,  448 => 139,  442 => 137,  440 => 136,  432 => 135,  427 => 133,  421 => 132,  414 => 129,  411 => 128,  406 => 125,  399 => 120,  393 => 119,  389 => 117,  383 => 115,  381 => 114,  376 => 112,  373 => 111,  367 => 110,  364 => 109,  361 => 108,  357 => 107,  350 => 105,  347 => 104,  341 => 103,  334 => 101,  331 => 100,  329 => 99,  323 => 95,  316 => 93,  309 => 89,  301 => 88,  298 => 87,  295 => 86,  288 => 85,  281 => 84,  273 => 81,  270 => 80,  268 => 79,  265 => 78,  261 => 77,  254 => 75,  251 => 74,  245 => 73,  238 => 71,  235 => 70,  233 => 69,  225 => 63,  216 => 59,  208 => 57,  205 => 56,  198 => 55,  192 => 54,  185 => 49,  178 => 45,  170 => 44,  167 => 43,  164 => 42,  157 => 41,  151 => 40,  146 => 37,  142 => 36,  135 => 34,  126 => 28,  119 => 26,  110 => 19,  95 => 17,  88 => 16,  82 => 15,  73 => 14,  56 => 13,  51 => 11,  48 => 10,  42 => 9,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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

    {% if particle.layout == \"showcase\" %}
        <div class=\"g-container-wrapper-panel\">
            <div class=\"g-container carousel\">

                {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

                <div class=\"g-owlcarousel-panel-container\" id=\"g-owlcarousel-panel-{{ id }}\">

                    {% for item in particle.items %}
                        <div class=\"g-owlcarousel-panel {% if loop.first %}selected{% endif %}\" id=\"g-owlcarousel-panel-{{ loop.index }}\">
                                {% if item.title %}<span class=\"g-owlcarousel-panel-title\">{{ item.title|raw }}</span>{% endif %}
                                {% if item.subtitle %}<span class=\"g-owlcarousel-panel-subtitle\">{{ item.subtitle|raw }}</span>{% endif %}
                        </div>
                    {% endfor %}

                </div>
            </div>
        </div>

        <div class=\"g-container-wrapper\">
        <div class=\"g-container carousel\">
            <div class=\"{{ particle.class|e }} g-owlcarousel-layout-{{ particle.layout|e }}\">

                <div id=\"g-owlcarousel-panel-indicator-{{ id }}\" class=\"g-owlcarousel-panel-indicator\">
                    <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"95.13px\" height=\"45.44px\" viewBox=\"0 0 95.13 45.44\" enable-background=\"new 0 0 95.13 45.44\" xml:space=\"preserve\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" fill=\"#FFFFFF\" d=\"M0,14.75c28.5-1.13,22.56,30.69,48.25,30.69c20.44,0.03,24.25-32.69,46.88-30.69V0H0V14.75z\"/>
                    </svg>
                </div>

                <div id=\"g-owlcarousel-{{ id }}\" class=\"g-owlcarousel owl-carousel {{ particle.width|e }}\">

                    {% for item in particle.items %}
                        <div class=\"item\">
                            <div class=\"g-owlcarousel-content-left\">
                                <div class=\"g-owlcarousel-content-padding\">
                                    {% if item.title %}<div class=\"g-owlcarousel-item-title\">{{ item.title|raw }}</div>{% endif %}
                                    {% if item.desc %}<div class=\"g-owlcarousel-item-desc\">{{ item.desc|raw }}</div>{% endif %}
                                    {% if item.link %}
                                        <div class=\"g-owlcarousel-item-link\">
                                            <a target=\"{{ item.buttontarget|default('_self')|e }}\" class=\"g-owlcarousel-item-button button {{ item.buttonclass|e }}\" href=\"{{ item.link|e }}\">
                                                {{ item.linktext|raw }}
                                            </a>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"g-owlcarousel-content-right\">
                                <div class=\"g-owlcarousel-content-padding\">
                                {% if item.icon %}<i class=\"{{ item.icon }}\"></i>{% endif %}
                                {% if item.icon2 %}<i class=\"{{ item.icon2 }}\"></i>{% endif %}
                                {% if item.image %}
                                    <img src=\"{{ url(item.image)|e }}\" alt=\"{{ item.title|e }}\" />
                                {% endif %}
                            </div>
                            </div>
                        </div>
                    {% endfor %}

                </div>
            </div>
        </div>
        </div>

    {% elseif particle.layout == \"standard\" %}

        <div class=\"{{ particle.class|e }} g-owlcarousel-layout-{{ particle.layout|e }}\">

            {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

            <div id=\"g-owlcarousel-{{ id }}\" class=\"g-owlcarousel owl-carousel {{ particle.width|e }}\">

                {% for item in particle.items %}
                    <div>
                        {% if item.image %}
                            <div class=\"image\">
                                <img src=\"{{ url(item.image)|e }}\" alt=\"{{ item.title|e }}\" />
                            </div>
                        {% endif %}
                        {% if item.title %}<div class=\"g-owlcarousel-item-title\">{{ item.title|raw }}</div>{% endif %}
                        {% if item.desc %}<div class=\"g-owlcarousel-item-desc\">{{ item.desc|raw }}</div>{% endif %}
                        {% if item.link %}
                            <div class=\"g-owlcarousel-item-link\">
                                <a target=\"{{ item.buttontarget|default('_self')|e }}\" class=\"g-owlcarousel-item-button button {{ item.buttonclass|e }}\" href=\"{{ item.link|e }}\">
                                    {{ item.linktext|raw }}
                                </a>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}

            </div>
        </div>

    {% elseif particle.layout == \"testimonial\" %}

        <div class=\"{{ particle.class|e }} g-owlcarousel-layout-{{ particle.layout|e }}\">

            {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

            <div id=\"g-owlcarousel-{{ id }}\" class=\"g-owlcarousel owl-carousel {{ particle.width|e }}\">

                {% for item in particle.items %}
                    {% if item.desc %}
                        <div class=\"g-owlcarousel-item-desc\">
                            {% if item.icon %}<i class=\"{{ item.icon }}\"></i>{% endif %}

                            {{ item.desc|raw }}

                            {% if item.title %}
                                <div class=\"g-owlcarousel-item-title\">{{ item.title|raw }}</div>
                            {% endif %}
                        </div>
                    {% endif %}
                {% endfor %}

            </div>
        </div>

    {% endif %}

{% endblock %}

{% block javascript_footer %}
    <script src=\"{{ url('gantry-theme://js/owlcarousel.js') }}\"></script>
    <script type=\"text/javascript\">
        jQuery(window).load(function() {
            var owl{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-{{ id }}');
            owl{{ id|replace({'-':'_'}) }}.owlCarousel({
                items: 1,
                rtl: {% if gantry.page.direction == 'rtl' %}true{% else %}false{% endif %},
                {% if particle.animateOut and particle.animateOut != 'default' %}
                animateOut: '{{ particle.animateOut|default('fadeOut')|e }}',
                {% endif %}
                {% if particle.animateIn and particle.animateIn != 'default' %}
                animateIn: '{{ particle.animateIn|default('fadeIn')|e }}',
                {% endif %}
                {% if particle.nav == 'enabled' %}
                nav: true,
                navText: ['{{ particle.prevText|default('<i class=\"fa fa-chevron-circle-left\"></i>')|e('js') }}', '{{ particle.nextText|default('<i class=\"fa fa-chevron-circle-right\"></i>')|e('js') }}'],
                {% else %}
                nav: false,
                {% endif %}
                {% if particle.dots == 'enabled' %}
                dots: true,
                {% else %}
                dots: false,
                {% endif %}
                {% if particle.loop == 'enabled' and particle.layout != \"showcase\" %}
                loop: true,
                {% else %}
                loop: false,
                {% endif %}
                {% if particle.autoplay == 'enabled' %}
                autoplay: true,
                autoplayTimeout: {{ particle.autoplaySpeed|default('5000') }},
                {% if particle.pauseOnHover == 'enabled' %}
                autoplayHoverPause: true,
                {% else %}
                autoplayHoverPause: false,
                {% endif %}
                {% else %}
                autoplay: false,
                {% endif %}
            })

            {% if particle.layout == \"showcase\" %}
            owl{{ id|replace({'-':'_'}) }}.on('changed.owl.carousel', function(event) {
                var currentItem_{{ id|replace({'-':'_'}) }} = \"#g-owlcarousel-panel-{{ id }} #g-owlcarousel-panel-\" + (event.item.index + 1);
                jQuery(currentItem_{{ id|replace({'-':'_'}) }}).trigger(\"click\");
            })
            {% endif %}
        });
    </script>

    {% if particle.layout == \"showcase\" %}
    {{ parent() }}
    <script type=\"text/javascript\">
     indicator_{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-panel-indicator-{{ id }}');
    var owlPanelItems{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-panel-{{ id }} .g-owlcarousel-panel');
    {% for item in particle.items %}
    jQuery(\"#g-owlcarousel-panel-{{ id }} #g-owlcarousel-panel-{{ loop.index }}\").click(function(event) {
        var owl{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-{{ id }}');
        owlPanelItems{{ id|replace({'-':'_'}) }}.removeClass('selected');
        var toIndex = {{ loop.index }} - 1;
        owl{{ id|replace({'-':'_'}) }}.trigger('to.owl.carousel', [toIndex, 500, true]);
        jQuery(this).addClass('selected');
        indicator_{{ id|replace({'-':'_'}) }}.css({
            left: jQuery(this).position().left{% if gantry.page.direction == 'rtl' %} + 200{% endif %} + 'px',
        });
    });
    {% endfor %}
    </script>
    {% endif %}

{% endblock %}
", "@particles/owlcarousel.html.twig", "/usr/share/nginx/html/user/themes/rt_interstellar/particles/owlcarousel.html.twig");
    }
}
