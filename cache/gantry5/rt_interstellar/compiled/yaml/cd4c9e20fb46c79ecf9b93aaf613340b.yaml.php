<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/themes/rt_interstellar/blueprints/styles/font.yaml',
    'modified' => 1498110484,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the Interstellar theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-promo' => [
                    'type' => 'input.fonts',
                    'label' => 'Promo Font',
                    'default' => 'pt_sans, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-subpromo' => [
                    'type' => 'input.fonts',
                    'label' => 'SubPromo Font',
                    'default' => 'pt_sans, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];
