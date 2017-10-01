<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/accounts/moosequest.yaml',
    'modified' => 1506820500,
    'data' => [
        'email' => 'kris@moosequest.net',
        'fullname' => 'Kristerpher',
        'title' => 'Site Administrator',
        'state' => 'enabled',
        'access' => [
            'admin' => [
                'super' => 'true',
                'login' => 'true'
            ],
            'site' => [
                'login' => 'true'
            ]
        ],
        'hashed_password' => '$2y$10$nh/sofSZ0V2nEhZ.o4UXEugy22NEkUNyWpASWgpmPbzmwiLYzYlJa',
        'twofa_secret' => 'THIZ5R42644SJFIYSBBOF6RDW3JI5DVS',
        'language' => 'en',
        'twofa_enabled' => false
    ]
];
