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
    protected $lat;
    protected $lon;
    protected $timestamp = null;
    protected $params = [];
    protected $excludeables = ['currently', 'minutely', 'hourly', 'daily', 'alerts', 'flags'];

    public function __construct()
    {
        $this->apiKey = config('darksky.apikey');
        $this->endpoint = $this->endpoint . $this->apiKey;
    }

    public function location($lat, $lon)
    {
        $this->lat = $lat;
        $this->lon = $lon;
        return $this;
    }

    public function get()
    {
        $url = $this->endpoint  . '/' . $this->lat . ',' . $this->lon;

        if ($this->timestamp) {
            $url .= ',' . $this->timestamp;
        }

        $client = new \GuzzleHttp\Client();
        return json_decode($client->get($url, [
            'query' => $this->params,
        ])->getBody());
    }

    public function excludes($blocks)
    {
        $this->params['exclude'] = implode(',', $blocks);
        return $this;
    }

    public function includes($blocks)
    {
        $this->params['exclude'] = implode(',', array_diff($this->excludeables, $blocks));
        return $this;
    }

    public function atTime($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

}