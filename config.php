<?php
return [
    'connections' => [
        'live'=> [
            'webservices' => [
                'host' => 'https://connect.holidaytaxis.com',
                'verify_ssl' => true,
                'log_enabled' => false,
            ],
            'soap' => [
                'host'=> 'https://secure.holidaytaxis.com',
                'verify_ssl' => true,
                'log_enabled' => false,
            ],
            'token' => [
                'host'=> 'https://secure.holidaytaxis.com',
                'verify_ssl' => true,
                'log_enabled' => false,
            ]
        ],
        'test'=> [
            'webservices' => [
                'host' => 'https://connect.htxdev.com',
                'verify_ssl' => true,
                'log_enabled' => false,
            ],
            'soap' => [
                'host'=> 'https://secure.htxdev.com',
                'verify_ssl' => true,
                'log_enabled' => false,
            ],
            'token' => [
                'host'=> 'https://secure.holidaytaxis.com',
                'verify_ssl' => true,
                'log_enabled' => false,
            ]
        ]
    ]
];
