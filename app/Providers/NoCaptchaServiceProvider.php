<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CustomNoCaptcha;

class NoCaptchaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('captcha', function ($app) {
            return new CustomNoCaptcha(
                config('captcha.secret'),
                config('captcha.sitekey')
            );
        });
    }
}
