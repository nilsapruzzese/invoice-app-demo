<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mollie\Api\MollieApiClient;

class MollieServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MollieApiClient::class, function () {
            $mollie = new MollieApiClient();
            $mollie->setApiKey('test_Q2uBpWBPvhuqNj7z77ntMzhQMzpVwu');

            return $mollie;
        });
    }
}
