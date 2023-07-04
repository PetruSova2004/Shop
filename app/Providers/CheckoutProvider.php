<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CheckoutProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Checkout', 'App\Http\Controllers\Pub\Checkout\Services\CheckoutService');
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
