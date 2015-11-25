<?php

Route::group(['prefix' => 'academystructure', 'namespace' => 'Modules\Academystructure\Http\Controllers'], function()
{ 
	///////////////////faculty/////////////////////////
	Route::get('/',  ['as' =>'faculty.index', 'uses' =>'FacultyController@index']);
	
	Route::get('create', ['as' =>'faculty.create', 'uses' =>'FacultyController@create_faculty']);
	post('store', ['as' =>'faculty.store', 'uses' =>'FacultyController@store_faculty']);

	Route::get('edit/{asFaculty}', ['as' =>'faculty.edit', 'uses' =>'FacultyController@edit_faculty']);
	post('update/{asFaculty}', ['as' =>'faculty.update', 'uses' =>'FacultyController@update_faculty']);
	
	Route::get('delete/{asFaculty}', ['as' =>'faculty.delete', 'uses' =>'FacultyController@delete_faculty']);
	
	////////////////////Year///////////////////////////
	Route::group(['prefix' => 'year'], function()
	{
		Route::get('/{asFaculty}',  ['as' =>'year.index', 'uses' =>'YearController@index']);
		
		Route::get('create/{asFaculty}', ['as' =>'year.create', 'uses' =>'YearController@create_year']);
		post('store', ['as' =>'year.store', 'uses' =>'YearController@store_year']);
	
		Route::get('edit/{asYear}', ['as' =>'year.edit', 'uses' =>'YearController@edit_year']);
		post('update/{asYear}', ['as' =>'year.update', 'uses' =>'YearController@update_year']);
		
		Route::get('delete/{asYear}', ['as' =>'year.delete', 'uses' =>'YearController@delete_year']);
	});
	
	////////////////////Term///////////////////////////
	Route::group(['prefix' => 'term'], function()
	{
		Route::get('/{asYear}',  ['as' =>'term.index', 'uses' =>'TermController@index']);
		
		Route::get('create/{asYear}', ['as' =>'term.create', 'uses' =>'TermController@create_term']);
		post('store', ['as' =>'term.store', 'uses' =>'TermController@store_year']);
	
		Route::get('edit/{asTerm}', ['as' =>'term.edit', 'uses' =>'TermController@edit_term']);
		post('update/{asTerm}', ['as' =>'term.update', 'uses' =>'TermController@update_term']);
		
		Route::get('delete/{asYear}', ['as' =>'term.delete', 'uses' =>'TermController@delete_term']);
	});
	
});