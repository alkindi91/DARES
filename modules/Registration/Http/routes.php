<?php

Route::group(['prefix' => 'registration', 'namespace' => 'Modules\Registration\Http\Controllers'], function()
{
	Route::get('/', 'RegistrationController@index');
});