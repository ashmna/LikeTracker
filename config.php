<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting( E_ALL );

return [
    'appId' => '5321587',
    'db' => [
        'host' => 'localhost',
        'name' => 'like_tracker',
        'user' => 'root',
        'pass' => '',
    ],

    'definition' => [
        'partner.id'   => 1,
        'partner.name' => 'LikeTracker',
    ],

    'email'              => [
        'smtp'    => [
            'host'     => '192.168.219.19',
            // for GMail 465 or 587
            'port'     => 25,
            'username' => '',
            'password' => '',
            //Enable SMTP authentication
            'auth'     => false,
        ],
        'default' => [
            'email' => 'affiliates@vbet.com',
            'name'  => '',
        ]
    ],

    'workingTimes' => [
        'day' => [
                ['startTime' => '10:00', 'endTime' => '14:00'],
                ['startTime' => '15:00', 'endTime' => '19:00'],
            ],
    ],


    'languages'          => [
        "en_GB" => "English",
        "ru_RU" => "Russian",
    ],


    'languagesCode'      => [
        "en_GB" => "English (Uk)",
        "ru_RU" => "Russian",
        "hy_AM" => "Armenian",
        'de_DE' => 'German',
        'es_ES' => 'Spanish',
        'tr_TR' => 'Turkish',
        'el_GR' => 'Greece',
        'it_IT' => 'Italian',
        'zh_CN' => 'Chinese'
    ],

    'cron' => [
        'playersCasinoBonus' => false,
    ],

    'colors' => [
        // rgb(164, 219, 121)
        'workingTimes' => '#a4db79'
    ],

    'environment' => 'development',
    'timezone'    => 'Asia/Yerevan',
    'template'    => 'sprypay',
];
