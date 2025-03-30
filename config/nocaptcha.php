<?php

return [
    'secret' => env('NOCAPTCHA_SECRET'),
    'sitekey' => env('NOCAPTCHA_SITEKEY'),
    'options' => [
        'verify' => [
            'verify' => false,
            'curl' => [
                CURLOPT_CAINFO => 'C:\\wamp64/bin/php/php8.3.6/extras/ssl/cacert.pem',
            ],
        ],
    ],
];
