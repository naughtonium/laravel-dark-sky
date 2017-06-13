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
        $source = dirname(__DIR__).'/../../config/darksky.php';

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('geocode.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('geocode');
        }
        $this->mergeConfigFrom($source, 'geocode');
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

        $this->app->booting(function ()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('DarkSky', \Naughtonium\LaravelDarkSky\Facades\DarkSky::class);
        });

    }
}