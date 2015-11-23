<?php

Route::group(['prefix' => 'academystructure', 'namespace' => 'Modules\Academystructure\Http\Controllers'], function()
{
	///////////////////faculty/////////////////////////
	Route::get('/',  ['as' =>'faculty.index' , 'uses' =>'AcademystructureController@index']);
	Route::get('create', ['as' =>'faculty.create' , 'uses' =>'AcademystructureController@create_faculty']);
<<<<<<< HEAD
	post('store', ['as' =>'faculty.store' , 'uses' =>'AcademystructureController@store_faculty']);
=======
	Route::get('store', ['as' =>'faculty.store' , 'uses' =>'AcademystructureController@store_faculty']);
>>>>>>> f4baa81b2b66ce366d36153487ca42b782a5de6a
	Route::get('edit', ['as' =>'faculty.edit' , 'uses' =>'AcademystructureController@edit_faculty']);
	Route::get('delete', ['as' =>'faculty.delete' , 'uses' =>'AcademystructureController@delete_faculty']);
	////////////////////Year///////////////////////////
});