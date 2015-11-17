<?php

Route::group(['prefix' => 'structure', 'namespace' => 'Modules\Structure\Http\Controllers'], function()
{
	Route::get('/', 'StructureController@index');
});