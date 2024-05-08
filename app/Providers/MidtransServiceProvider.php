<?php

namespace App\Providers;

use Midtrans\Config;
use Illuminate\Support\ServiceProvider;

class MidtransServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.sanitized');
        Config::$is3ds = config('midtrans.3ds');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
