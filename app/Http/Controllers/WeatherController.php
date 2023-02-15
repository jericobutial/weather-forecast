<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDetails($city)
    {
        return view('weather.details',[
            'city' => $city
        ]);
    }
}
