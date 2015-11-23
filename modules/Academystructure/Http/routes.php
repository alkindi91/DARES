<?php

Route::group(['prefix' => 'academystructure', 'namespace' => 'Modules\Academystructure\Http\Controllers'], function()
{
	///////////////////faculty/////////////////////////
	Route::get('/',  ['as' =>'faculty.index', 'uses' =>'FacultyController@index']);
	Route::get('create', ['as' =>'faculty.create', 'uses' =>'FacultyController@create_faculty']);

	post('store', ['as' =>'faculty.store', 'uses' =>'FacultyController@store_faculty']);

	Route::get('edit', ['as' =>'faculty.edit', 'uses' =>'FacultyController@edit_faculty']);
	Route::get('delete', ['as' =>'faculty.delete', 'uses' =>'FacultyController@delete_faculty']);
	////////////////////Year///////////////////////////
});