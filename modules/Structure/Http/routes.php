<?php

Route::group(['prefix' => 'structure', 'namespace' => 'Modules\Structure\Http\Controllers'], function()
{
	Route::get('/', 'StructureController@index');

	Route::group(['prefix'=>'faculties'] ,function() {
		get('create' ,['uses'=>'FacultiesController@create' ,'as'=>'faculties.create']);
		post('store' ,['uses'=>'FacultiesController@store' ,'as'=>'faculties.store']);
	});

});