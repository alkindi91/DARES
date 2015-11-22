<?php

Route::group(['prefix' => 'academystructure', 'namespace' => 'Modules\Academystructure\Http\Controllers'], function()
{
	///////////////////faculty/////////////////////////
	Route::get('/',  ['as' =>'faculty.index' , 'uses' =>'AcademystructureController@index']);
	Route::get('create', ['as' =>'faculty.create' , 'uses' =>'AcademystructureController@create']);
	Route::get('edit', ['as' =>'faculty.edit' , 'uses' =>'AcademystructureController@edit']);
	Route::get('delete', ['as' =>'faculty.delete' , 'uses' =>'AcademystructureController@delete']);
	////////////////////Year///////////////////////////
});