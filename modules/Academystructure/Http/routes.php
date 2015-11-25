<<<<<<< HEAD
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
	
=======
<?php

Route::group(['prefix' => 'academystructure', 'namespace' => 'Modules\Academystructure\Http\Controllers'], function()
{ 
	///////////////////faculty/////////////////////////
	Route::get('/',  ['as' =>'as.faculties.index', 'uses' =>'FacultyController@index']);
	
	Route::get('create', ['as' =>'as.faculties.create', 'uses' =>'FacultyController@create']);
	post('store', ['as' =>'as.faculties.store', 'uses' =>'FacultyController@store']);

	Route::get('edit/{asFaculty}', ['as' =>'as.faculties.edit', 'uses' =>'FacultyController@edit']);
	post('update/{asFaculty}', ['as' =>'as.faculties.update', 'uses' =>'FacultyController@update']);
	
	Route::get('delete/{asFaculty}', ['as' =>'as.faculties.delete', 'uses' =>'FacultyController@delete']);
	
	////////////////////Year///////////////////////////
	Route::group(['prefix' => 'year'], function()
	{
		Route::get('/{asFaculty}',  ['as' =>'as.years.index', 'uses' =>'YearController@index']);
		
		Route::get('create/{asFaculty}', ['as' =>'as.years.create', 'uses' =>'YearController@create']);
		post('store', ['as' =>'as.years.store', 'uses' =>'YearController@store']);
	
		Route::get('edit/{asYear}', ['as' =>'as.years.edit', 'uses' =>'YearController@edit']);
		post('update/{asYear}', ['as' =>'as.years.update', 'uses' =>'YearController@update']);
		
		Route::get('delete/{asYear}', ['as' =>'as.years.delete', 'uses' =>'YearController@delete']);
	});
	
	////////////////////Term///////////////////////////
	Route::group(['prefix' => 'term'], function()
	{
		Route::get('/{asYear}',  ['as' =>'as.terms.index', 'uses' =>'TermController@index']);
		
		Route::get('create/{asYear}', ['as' =>'as.terms.create', 'uses' =>'TermController@create']);
		post('store', ['as' =>'as.terms.store', 'uses' =>'TermController@store']);
	
		Route::get('edit/{asTerm}', ['as' =>'as.terms.edit', 'uses' =>'TermController@edit']);
		post('update/{asTerm}', ['as' =>'as.terms.update', 'uses' =>'TermController@update']);
		
		Route::get('delete/{asYear}', ['as' =>'as.terms.delete', 'uses' =>'TermController@delete']);
	});
	
>>>>>>> 2b6f9ef3aea52fb6c39c2df7ebd66a02e8ef6d15
});