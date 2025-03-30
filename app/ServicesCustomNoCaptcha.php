<?php

namespace App\Services;

use Anhskohbo\NoCaptcha\NoCaptcha;
use GuzzleHttp\Client;

class CustomNoCaptcha extends NoCaptcha
{
    protected function getHttpClient()
    {
        return new Client([
            'verify' => 'C:/wamp64/bin/php/php8.3.6/extras/ssl/cacert.pem',
        ]);
    }
}
