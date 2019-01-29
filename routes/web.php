<?php

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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/control/addteam', 'ControlController@index')->name('control.index');

Route::post('/home/control/addteam', 'ControlController@store')->name('control.store');

Route::get('/home/control/addscore', 'ControlController@manage')->name('control.manage');

Route::post('/home/control/addscore', 'ControlController@update')->name('control.update');

Route::get('/home/scorecard', 'ScoreCardController@index')->name('ScoreCard.index');