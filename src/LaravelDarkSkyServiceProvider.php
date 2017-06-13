<?php

namespace Naughtonium\LaravelDarkSky;

use Illuminate\Support\ServiceProvider;

class LaravelDarkSkyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LaravelDarkSky::class, function () {
            return new LaravelDarkSky();
        });

        $this->app->alias(LaravelDarkSky::class, 'laravel-dark-sky');
    }
}