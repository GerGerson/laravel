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

Route::get('/{id}', 'HomeController@showWelcome');
Route::post('/TestA', 'HomeController@testA');
Route::post('/TestB', 'HomeController@testB');
Route::post('/TestJS', 'HomeController@testJS');
Route::post('/Temp/{id}', 'HomeController@getWebDIV');
Route::post('/Module/{id}', 'HomeController@getModuleCode');
Route::post('/Like/Promo/{type}', 'HomeController@getLike');
<<<<<<< HEAD
Route::get('/LikeSetting/{t_id}', 'LikeSetting@getDivSetting');

//jason
Route::get('/', function()
{
    return 'Hello World';
});

//Route::post('/Like/Promor/{type}', 'HomeController@getLike');
//Testing ABC
=======

//Route::post('/Like/Promor/{type}', 'HomeController@getLike');
//Testing ABC

>>>>>>> 25411caf4d9eafd815dbb2a746a38ec6dd2ec368
