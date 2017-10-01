<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/themes/rt_interstellar/blueprints/styles/footer.yaml',
    'modified' => 1498110484,
    'data' => [
        'name' => 'Footer Styles',
        'description' => 'Footer styles for the Interstellar theme',
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
