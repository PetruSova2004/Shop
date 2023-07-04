<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PubProductProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Pub_Product', 'App\Http\Controllers\Pub\Products\Services\ProductService');
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
