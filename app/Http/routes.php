<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
# route page
Route::get('/', 'WelcomeController@index');
Route::get('about', 'WelcomeController@about');
Route::get('services', 'WelcomeController@services');
Route::get('portfolio', 'WelcomeController@portfolio');
Route::get('contact', 'WelcomeController@contact');
