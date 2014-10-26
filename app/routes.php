<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('404', array('as' => '404', 'uses' => 'ErrorController@missing'));

Route::get('/test', array('as' => 'test', 'uses' => 'HomeController@test'));

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
