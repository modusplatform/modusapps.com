<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/plugins/gantry5/engines/nucleus/admin/blueprints/layout/inheritance/messages/default.yaml',
    'modified' => 1506818882,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Nothing to inherit tab',
        'type' => 'empty.inheritance',
        'form' => [
            'fields' => [
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info blocksize-note',
                    'content' => 'You can inherit sections and particles from Base Outline.'
                ],
                '_note2' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success blocksize-note',
                    'content' => 'No Outline is currently inheriting this item.'
                ]
            ]
        ]
    ]
];
