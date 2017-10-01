<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/themes/rt_interstellar/blueprints/styles/expanded.yaml',
    'modified' => 1498110484,
    'data' => [
        'name' => 'Expanded Styles',
        'description' => 'Expanded styles for the Interstellar theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#949494'
                ]
            ]
        ]
    ]
];
