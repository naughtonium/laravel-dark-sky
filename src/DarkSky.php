<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 6/13/17
 * Time: 3:26 PM
 */

namespace Naughtonium\LaravelDarkSky;


class DarkSky
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('darksky.apikey');
    }

    public function test()
    {
        dd($this->apiKey);
    }

}