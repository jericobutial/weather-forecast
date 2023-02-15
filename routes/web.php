<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/auth/redirect', function (){
    //     return Socialite::driver('github')->redirect();
    // });
    
// Route::get('/auth/github/callback', function (){
//     $user = Socialite::driver('github')->user();
//     dd($user);
// });

Route::get('/auth/redirect', 'GithubController@redirect')->name('github.login');
Route::get('/auth/github/callback', 'GithubController@callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/get-weather/{city}', 'WeatherController@getDetails')->name('get.weather');
