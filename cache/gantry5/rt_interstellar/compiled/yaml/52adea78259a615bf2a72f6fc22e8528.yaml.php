<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/themes/rt_interstellar/gantry/theme.yaml',
    'modified' => 1498110486,
    'data' => [
        'details' => [
            'name' => 'Interstellar',
            'version' => '1.0.6',
            'icon' => 'paper-plane',
            'date' => 'June 22, 2017',
            'author' => [
                'name' => 'RocketTheme, LLC',
                'email' => 'support@rockettheme.com',
                'link' => 'http://www.rockettheme.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/interstellar.yaml'
            ],
            'copyright' => '(C) 2007 - 2016 RocketTheme, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Interstellar Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'grav',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'rt_interstellar',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'lato' => [
                    900 => 'gantry-theme://fonts/lato/lato-black/Lato-Black',
                    700 => 'gantry-theme://fonts/lato/lato-bold/Lato-Bold',
                    400 => 'gantry-theme://fonts/lato/lato-regular/Lato-Regular',
                    200 => 'gantry-theme://fonts/lato/lato-light/Lato-Light'
                ],
                'droidserif' => [
                    '400italic' => 'gantry-theme://fonts/droidserif/droidserif-italic/droidserif-italic-webfont',
                    400 => 'gantry-theme://fonts/droidserif/droidserif-regular/droidserif-webfont'
                ],
                'pt_sans' => [
                    700 => 'gantry-theme://fonts/pt_sans/pt_sans-bold/pt_sans-web-bold-webfont',
                    '400italic' => 'gantry-theme://fonts/pt_sans/pt_sans-italic/pt_sans-web-italic-webfont',
                    400 => 'gantry-theme://fonts/pt_sans/pt_sans-regular/pt_sans-web-regular-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'interstellar',
                    1 => 'interstellar-grav',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'interstellar'
                ],
                'overrides' => [
                    0 => 'interstellar-grav',
                    1 => 'custom'
                ]
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title3' => 'Title 3',
                    'title4' => 'Title 4',
                    'title5' => 'Title 5',
                    'title6' => 'Title 6',
                    'title-grey' => 'Title Grey',
                    'title-pink' => 'Title Pink',
                    'title-red' => 'Title Red',
                    'title-purple' => 'Title Purple',
                    'title-orange' => 'Title Orange',
                    'title-blue' => 'Title Blue',
                    'title-underline' => 'Title Underline',
                    'title-rounded' => 'Title Rounded'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4',
                    'box5' => 'Box 5',
                    'box6' => 'Box 6',
                    'box-white' => 'Box White',
                    'box-grey' => 'Box Grey',
                    'box-pink' => 'Box Pink',
                    'box-red' => 'Box Red',
                    'box-purple' => 'Box Purple',
                    'box-orange' => 'Box Orange',
                    'box-blue' => 'Box Blue'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'bordered' => 'Bordered',
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'equal-height' => 'Equal Height',
                    'g-outer-box' => 'Outer Box',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'title-center' => 'Centered Title',
                    'center' => 'Center',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'overlay',
                    1 => 'top',
                    2 => 'navigation',
                    3 => 'slideshow',
                    4 => 'header',
                    5 => 'above',
                    6 => 'showcase',
                    7 => 'utility',
                    8 => 'feature',
                    9 => 'aside',
                    10 => 'mainbar',
                    11 => 'sidebar',
                    12 => 'expanded',
                    13 => 'extension',
                    14 => 'bottom',
                    15 => 'footer',
                    16 => 'copyright',
                    17 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
