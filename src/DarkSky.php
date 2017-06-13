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
    protected $params = '?';


    public function __construct()
    {
        $this->apiKey = config('darksky.apikey');
        $this->endpoint = $this->endpoint . $this->apiKey . '/';
    }

    public function location($lat, $lon)
    {
        $this->endpoint = $this->endpoint . $lat . ',' . $lon;
        return $this;
    }

    public function get()
    {
        $client = new \GuzzleHttp\Client();
        return json_decode($client->get($this->endpoint . $this->params)->getBody());
    }

    public function exclude($blocks)
    {
        $this->params .= 'exclude=';

        foreach ($blocks as $block) {
            $this->params .= $block . ',';
        }

        return $this;
    }
}