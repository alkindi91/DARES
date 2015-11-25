<?php

Route::group(['prefix' => 'supportprograms', 'namespace' => 'Modules\Supportprograms\Http\Controllers'], function()
{
	Route::get('/', 'SupportprogramsController@index');
});