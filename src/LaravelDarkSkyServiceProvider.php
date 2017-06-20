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
        $source = dirname(__DIR__).'/config/darksky.php';

        $this->publishes([$source => config_path('darksky.php')]);

        $this->mergeConfigFrom($source, 'darksky');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('darksky',function($app)
        {
            return new DarkSky();
        });
    }
}