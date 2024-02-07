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
];
