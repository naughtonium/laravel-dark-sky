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
    protected $endpoint = 'https://api.darksky.net/forecast/';

    public function __construct()
    {
        $this->apiKey = config('darksky.apikey');
        $this->endpoint = $this->endpoint . $this->apiKey . '/';
    }

    public function location($lat, $lon)
    {
        $this->endpoint = $this->endpoint . $lat . ',' . $lon;
    }

    public function get()
    {

    }
}