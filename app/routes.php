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

Route::get('/hello/{id}', 'HomeController@showWelcome');
Route::post('/TestA', 'HomeController@testA');
Route::post('/TestB', 'HomeController@testB');
Route::post('/TestJS', 'HomeController@testJS');
Route::post('/Temp/{id}', 'HomeController@getWebDIV');
Route::post('/Module/{id}', 'HomeController@getModuleCode');
Route::post('/Like/Promo/{type}', 'HomeController@getLike');

Route::get('/ShowSetting/{t_id}/{type}', 'General@showSettingLayout');
Route::post('/GetTemplateSetting/{t_id}', 'General@getSettingDiv');

//Like
Route::post('/Like/Setting/{type}', 'LikeSetting@getSettingDiv');
