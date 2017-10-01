<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '59d03fccc6a528.23806316',
    'content' => '<div id="owlcarousel-3975-particle" class="g-content g-particle">            <div class=" g-owlcarousel-layout-testimonial">

            <h2 class="g-title">Testimonials</h2>
            <div id="g-owlcarousel-owlcarousel-3975" class="g-owlcarousel owl-carousel g-owlcarousel-fullwidth">

                                                            <div class="g-owlcarousel-item-desc">
                            
                            The template styling is built with SCSS, a programmable stylesheet language for CSS, making the CSS more dynamic and adaptable. You can easily enable and disable automatic recompilation of SCSS files.

                                                            <div class="g-owlcarousel-item-title">Harper Collins</div>
                                                    </div>
                                                                                <div class="g-owlcarousel-item-desc">
                            
                            Set up and configure page layouts with Gantry 5\'s new Layout Manager. Featuring drag-and-drop functionality that gives you the power to place content blocks, resize them, and configure their unique settings in seconds. 

                                                            <div class="g-owlcarousel-item-title">Jim Conroy</div>
                                                    </div>
                                                                                <div class="g-owlcarousel-item-desc">
                            
                            Configuration in Gantry 5 features sophisticated built-in fields such as Icon Picker, Image Picker, Font Picker, Collections, and much more. You can change almost any aspect of a theme without breaking out a single editor.

                                                            <div class="g-owlcarousel-item-title">Pat Harrison</div>
                                                    </div>
                                    
            </div>
        </div>
            </div>',
    'scripts' => [
        'footer' => [
            'a8714d8d59e96aa8bf7e6c4eb72a2ec5650971eff9b85c095c7977d3b25a8ba1567cfabe' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/user/themes/rt_interstellar/js/owlcarousel.js',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ],
            '65ba252717d24f6f03433b758853e6a5f8797e08a284d3d3a1e89182d427724c3851b4c2' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            var owlowlcarousel_3975 = jQuery(\'#g-owlcarousel-owlcarousel-3975\');
            owlowlcarousel_3975.owlCarousel({
                items: 1,
                rtl: false,
                                                                nav: false,
                                                dots: true,
                                                loop: true,
                                                autoplay: true,
                autoplayTimeout: 5000,
                                autoplayHoverPause: true,
                                            })

                    });
    ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
