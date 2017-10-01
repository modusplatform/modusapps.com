<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/usr/share/nginx/html/user/config/site.yaml',
    'modified' => 1506819123,
    'data' => [
        'title' => 'modusapps.com',
        'default_lang' => 'en',
        'author' => [
            'name' => 'ModusApps Team',
            'email' => 'kris@moosequest.net'
        ],
        'taxonomies' => [
            0 => 'mobile',
            1 => 'apps'
        ],
        'metadata' => [
            'description' => 'modusapps enable you to use different modes of transit to better our planet.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
