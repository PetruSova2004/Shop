<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommandProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Command', 'App\Http\Services\Pub\CommandService');
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
