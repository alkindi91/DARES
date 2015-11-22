<?php

Route::group(['prefix' => 'academystructure', 'namespace' => 'Modules\Academystructure\Http\Controllers'], function()
{
	Route::get('/', 'AcademystructureController@index');
});