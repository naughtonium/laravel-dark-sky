<?php
namespace Naughtonium\LaravelDarkSky\Facades;

use Illuminate\Support\Facades\Facade;

class DarkSky extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'darksky'; }

}