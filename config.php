<?php
return [
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
            'port'     => 25, // for GMail 465 or 587
            'username' => '',
            'password' => '',
            'auth'     => false, //Enable SMTP authentication
            //'secure'   => 'ssl', //Set the encryption system to use - ssl (deprecated) or tls
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
        'workingTimes' => '#a4db79' //        rgb(164, 219, 121)
    ],

    'environment' => 'development',
    'timezone'    => 'Asia/Yerevan',
    'template'    => 'sprypay',
];