<?php

Route::group(['prefix' => 'shabantest', 'namespace' => 'Modules\ShabanTest\Http\Controllers'], function()
{
	Route::get('/', 'ShabanTestController@index');
});