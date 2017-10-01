<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '59d04a4142a7e4.60037604',
    'content' => '<div id="owlcarousel-7547-particle" class="g-content g-particle">            <div class="g-container-wrapper-panel">
            <div class="g-container carousel">

                <h2 class="g-title">ModusApps</h2>
                <div class="g-owlcarousel-panel-container" id="g-owlcarousel-panel-owlcarousel-7547">

                                            <div class="g-owlcarousel-panel selected" id="g-owlcarousel-panel-1">
                                <span class="g-owlcarousel-panel-title">Pennsylvania Go</span>                                <span class="g-owlcarousel-panel-subtitle">Play with history with our interactive AR App</span>                        </div>
                                            <div class="g-owlcarousel-panel " id="g-owlcarousel-panel-2">
                                <span class="g-owlcarousel-panel-title">Modes</span>                                <span class="g-owlcarousel-panel-subtitle">A new type of transit app.</span>                        </div>
                    
                </div>
            </div>
        </div>

        <div class="g-container-wrapper">
        <div class="g-container carousel">
            <div class=" g-owlcarousel-layout-showcase">

                <div id="g-owlcarousel-panel-indicator-owlcarousel-7547" class="g-owlcarousel-panel-indicator">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="95.13px" height="45.44px" viewBox="0 0 95.13 45.44" enable-background="new 0 0 95.13 45.44" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M0,14.75c28.5-1.13,22.56,30.69,48.25,30.69c20.44,0.03,24.25-32.69,46.88-30.69V0H0V14.75z"/>
                    </svg>
                </div>

                <div id="g-owlcarousel-owlcarousel-7547" class="g-owlcarousel owl-carousel g-owlcarousel-fullwidth">

                                            <div class="item">
                            <div class="g-owlcarousel-content-left">
                                <div class="g-owlcarousel-content-padding">
                                    <div class="g-owlcarousel-item-title">Pennsylvania Go</div>                                    <div class="g-owlcarousel-item-desc">Navigate "Penn\'s Woodlands" with multiple data sources from Pennsylvania.</div>                                                                    </div>
                            </div>

                            <div class="g-owlcarousel-content-right">
                                <div class="g-owlcarousel-content-padding">
                                <i class="fa fa-mobile"></i>                                <i class="fa fa-tablet"></i>                                                            </div>
                            </div>
                        </div>
                                            <div class="item">
                            <div class="g-owlcarousel-content-left">
                                <div class="g-owlcarousel-content-padding">
                                    <div class="g-owlcarousel-item-title">Modes</div>                                    <div class="g-owlcarousel-item-desc">Navigate and track your movement with public modes of transportation.</div>                                                                    </div>
                            </div>

                            <div class="g-owlcarousel-content-right">
                                <div class="g-owlcarousel-content-padding">
                                <i class="fa fa-adjust"></i>                                <i class="fa fa-ambulance"></i>                                                            </div>
                            </div>
                        </div>
                    
                </div>
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
            '5e09c4d3e8db3dbc9d1a01be1b728cf97cdb7c2d8877572baa174f364f1aba2dddf316cb' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            var owlowlcarousel_7547 = jQuery(\'#g-owlcarousel-owlcarousel-7547\');
            owlowlcarousel_7547.owlCarousel({
                items: 1,
                rtl: false,
                                                                nav: false,
                                                dots: false,
                                                loop: false,
                                                autoplay: true,
                autoplayTimeout: 5000,
                                autoplayHoverPause: true,
                                            })

                        owlowlcarousel_7547.on(\'changed.owl.carousel\', function(event) {
                var currentItem_owlcarousel_7547 = "#g-owlcarousel-panel-owlcarousel-7547 #g-owlcarousel-panel-" + (event.item.index + 1);
                jQuery(currentItem_owlcarousel_7547).trigger("click");
            })
                    });
    ',
                'type' => 'text/javascript'
            ],
            '290876fa65c5cce63ac3918ba0159324ee110d1671d607289d19c23535ea23ac27210795' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
     indicator_owlcarousel_7547 = jQuery(\'#g-owlcarousel-panel-indicator-owlcarousel-7547\');
    var owlPanelItemsowlcarousel_7547 = jQuery(\'#g-owlcarousel-panel-owlcarousel-7547 .g-owlcarousel-panel\');
        jQuery("#g-owlcarousel-panel-owlcarousel-7547 #g-owlcarousel-panel-1").click(function(event) {
        var owlowlcarousel_7547 = jQuery(\'#g-owlcarousel-owlcarousel-7547\');
        owlPanelItemsowlcarousel_7547.removeClass(\'selected\');
        var toIndex = 1 - 1;
        owlowlcarousel_7547.trigger(\'to.owl.carousel\', [toIndex, 500, true]);
        jQuery(this).addClass(\'selected\');
        indicator_owlcarousel_7547.css({
            left: jQuery(this).position().left + \'px\',
        });
    });
        jQuery("#g-owlcarousel-panel-owlcarousel-7547 #g-owlcarousel-panel-2").click(function(event) {
        var owlowlcarousel_7547 = jQuery(\'#g-owlcarousel-owlcarousel-7547\');
        owlPanelItemsowlcarousel_7547.removeClass(\'selected\');
        var toIndex = 2 - 1;
        owlowlcarousel_7547.trigger(\'to.owl.carousel\', [toIndex, 500, true]);
        jQuery(this).addClass(\'selected\');
        indicator_owlcarousel_7547.css({
            left: jQuery(this).position().left + \'px\',
        });
    });
        ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
