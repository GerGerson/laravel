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

Route::get('/setting', function()
{
	return "ABC";
	//return View::make('test_setting', array('$tid'=>1,'type'=>0));
});

Route::post('/GetTemplateSetting/{t_id}/{type}', 'General@getSettingDiv');

//Like
Route::post('/like/setting/{type}', 'LikeSetting@getSettingToDiv');
