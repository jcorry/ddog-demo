<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    //
    public function ddtest()
    {
        $statsd = new \Graze\DogStatsD\Client();
        $statsd->configure([
            'host' => '95ff205ad463',
            'port' => 8125,
            'namespace' => 'laravel_test'
        ]);

        $statsd->increment('ddtest');
    }
}
