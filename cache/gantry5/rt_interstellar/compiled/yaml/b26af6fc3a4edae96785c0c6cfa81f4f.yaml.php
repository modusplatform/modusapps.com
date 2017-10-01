<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/themes/rt_interstellar/blueprints/styles/extension.yaml',
    'modified' => 1498110484,
    'data' => [
        'name' => 'Extension Styles',
        'description' => 'Extension styles for the Interstellar theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f5f5f5'
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
