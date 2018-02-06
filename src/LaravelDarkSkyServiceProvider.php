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

        if ($this->app instanceof LaravelApplication) {
            $this->publishes([$source => config_path('darksky.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('darksky');
        }

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