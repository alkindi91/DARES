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

get('/', ['uses'=>'HomeController@index' ,'as'=>'welcome','middleware'=>'auth']);

// Authentication routes...
get('auth/login', ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
post('auth/login', ['as'=>'login','uses'=>'Auth\AuthController@postLogin']);
get('auth/logout', ['as'=>'logout','uses'=>'Auth\AuthController@getLogout','middleware'=>'auth']);

// Registration routes...
// get('auth/register', 'Auth\AuthController@getRegister');
// post('auth/register', 'Auth\AuthController@postRegister');


if(!function_exists('user')) {
	function user() {
		return Auth::user();
	}
}