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

Route::group(['prefix'=>'api'], function() {
	Route::get('departments', 'ApiController@getDepartments');
	Route::get('officers', 'ApiController@getOfficers');
	
	Route::get('check-version', 'ApiController@checkVersion');
	Route::post('register-gcm', 'ApiController@registerGCM');

});
