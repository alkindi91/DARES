<<<<<<< HEAD
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
		
		Route::get('delete/{asTerm}', ['as' =>'as.terms.delete', 'uses' =>'TermController@delete']);
	});
	
>>>>>>> 56d4fbfcdea5edc31146abf799da819fdb3af936
});