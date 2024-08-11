<?php

return [
    'antrean' => [
        'url' => env('BPJS_BRIDGING_ANTREAN_URL'),
        'consumer_id' => env('BPJS_BRIDGING_ANTREAN_CONS_ID'),
        'consumer_secret' => env('BPJS_BRIDGING_ANTREAN_SECRET_KEY'),
        'user_key' => env('BPJS_BRIDGING_ANTREAN_USER_KEY'),
    ],
    'apotek' => [
        'url' => env('BPJS_BRIDGING_APOTEK_URL'),
        'consumer_id' => env('BPJS_BRIDGING_APOTEK_CONS_ID'),
        'consumer_secret' => env('BPJS_BRIDGING_APOTEK_SECRET_KEY'),
        'user_key' => env('BPJS_BRIDGING_APOTEK_USER_KEY'),
    ],
    'pcare' => [
        'url' => env('BPJS_BRIDGING_PCARE_URL'),
        'consumer_id' => env('BPJS_BRIDGING_PCARE_CONS_ID'),
        'consumer_secret' => env('BPJS_BRIDGING_PCARE_SECRET_KEY'),
        'user_key' => env('BPJS_BRIDGING_PCARE_USER_KEY'),
        'username' => env('BPJS_BRIDGING_PCARE_USERNAME'),
        'password' => env('BPJS_BRIDGING_PCARE_PASSWORD'),
        'kd_aplikasi' => env('BPJS_BRIDGING_PCARE_KD_APLIKASI'),
    ],
    'antreanFktp' => [
        'url' => env('BPJS_BRIDGING_PCARE_URL'),
        'consumer_id' => env('BPJS_BRIDGING_PCARE_CONS_ID'),
        'consumer_secret' => env('BPJS_BRIDGING_PCARE_SECRET_KEY'),
        'user_key' => env('BPJS_BRIDGING_PCARE_USER_KEY'),
        'username' => env('BPJS_BRIDGING_PCARE_USERNAME'),
        'password' => env('BPJS_BRIDGING_PCARE_PASSWORD'),
        'kd_aplikasi' => env('BPJS_BRIDGING_PCARE_KD_APLIKASI'),
    ],
    'icare' => [
        'url' => env('BPJS_BRIDGING_ICARE_URL'),
        'consumer_id' => env('BPJS_BRIDGING_ICARE_CONS_ID'),
        'consumer_secret' => env('BPJS_BRIDGING_ICARE_SECRET_KEY'),
        'user_key' => env('BPJS_BRIDGING_ICARE_USER_KEY'),
        'username' => env('BPJS_BRIDGING_ICARE_USERNAME'),
        'password' => env('BPJS_BRIDGING_ICARE_PASSWORD'),
        'kd_aplikasi' => env('BPJS_BRIDGING_ICARE_KD_APLIKASI'),
        'pcare' => env('BPJS_BRIDGING_ICARE_PCARE', false),
    ]
];
