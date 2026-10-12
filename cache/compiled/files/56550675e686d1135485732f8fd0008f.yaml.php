<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/drmohsingillani/user/config/system.yaml',
    'modified' => 1791797226,
    'size' => 462,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'drmohsin',
            'markdown' => [
                'extra' => true
            ],
            'redirect_default_route' => true
        ],
        'timezone' => 'Asia/Karachi',
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ]
        ],
        'assets' => [
            'css_pipeline' => false,
            'js_pipeline' => false,
            'enable_asset_timestamp' => true
        ],
        'errors' => [
            'display' => false,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'provider' => 'clockwork'
        ],
        'gpm' => [
            'releases' => 'stable',
            'verify_peer' => true
        ],
        'updates' => [
            'safe_upgrade' => true,
            'safe_upgrade_snapshot_limit' => 5
        ]
    ]
];
