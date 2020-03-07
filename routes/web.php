<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    return view('cricketuser.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/team-list','CricketUser\TeamController@index')->name('team-list');
Route::get('/team-player-list/{id}','CricketUser\TeamController@teamPlayer')->name('team-player-list');
Route::get('/team-matches','CricketUser\MatchController@index')->name('team-matches');
Route::get('/team-points','CricketUser\PointController@index')->name('team-points');
Route::get('/player-history/{id}','CricketUser\PlayerController@index')->name('player-history');

