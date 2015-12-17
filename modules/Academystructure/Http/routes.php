<?php

Route::group(['prefix' => 'academystructure', 'namespace' => 'Modules\Academystructure\Http\Controllers'], function()
{ 
	///////////////////faculty/////////////////////////
	Route::get('/',  ['as' =>'as.faculties.index','middleware'=>'permission:show.academystructure.faculties', 'uses' =>'FacultyController@index']);
	
	Route::get('create', ['as' =>'as.faculties.create','middleware'=>'permission:create.academystructure.faculties', 'uses' =>'FacultyController@create']);
	post('store', ['as' =>'as.faculties.store', 'uses' =>'FacultyController@store']);

	Route::get('edit/{asFaculty}', ['as' =>'as.faculties.edit','middleware'=>'permission:edit.academystructure.faculties', 'uses' =>'FacultyController@edit']);
	post('update/{asFaculty}', ['as' =>'as.faculties.update', 'uses' =>'FacultyController@update']);
	
	Route::get('delete/{asFaculty}', ['as' =>'as.faculties.delete','middleware'=>'permission:delete.academystructure.faculties' ,'uses' =>'FacultyController@delete']);
	
	////////////////////Year///////////////////////////
	Route::group(['prefix' => 'year'], function()
	{
		Route::get('/{asFaculty}',  ['as' =>'as.years.index','middleware'=>'permission:show.academystructure.years', 'uses' =>'YearController@index']);
		
		Route::get('create/{asFaculty}', ['as' =>'as.years.create','middleware'=>'permission:create.academystructure.years', 'uses' =>'YearController@create']);
		post('store', ['as' =>'as.years.store', 'uses' =>'YearController@store']);
	
		Route::get('edit/{asYear}', ['as' =>'as.years.edit','middleware'=>'permission:edit.academystructure.years', 'uses' =>'YearController@edit']);
		post('update/{asYear}', ['as' =>'as.years.update', 'uses' =>'YearController@update']);
		
		Route::get('delete/{asYear}', ['as' =>'as.years.delete','middleware'=>'permission:delete.academystructure.years', 'uses' =>'YearController@delete']);
	});
	
	////////////////////Term///////////////////////////
	Route::group(['prefix' => 'term'], function()
	{
		Route::get('/{asYear}',  ['as' =>'as.terms.index','middleware'=>'permission:show.academystructure.terms', 'uses' =>'TermController@index']);
		
		Route::get('create/{asYear}', ['as' =>'as.terms.create','middleware'=>'permission:create.academystructure.terms', 'uses' =>'TermController@create']);
		post('store', ['as' =>'as.terms.store', 'uses' =>'TermController@store']);
	
		Route::get('edit/{asTerm}', ['as' =>'as.terms.edit','middleware'=>'permission:edit.academystructure.terms', 'uses' =>'TermController@edit']);
		post('update/{asTerm}', ['as' =>'as.terms.update', 'uses' =>'TermController@update']);
		
		Route::get('delete/{asTerm}', ['as' =>'as.terms.delete','middleware'=>'permission:delete.academystructure.terms', 'uses' =>'TermController@delete']);
	});	
	////////////////////Department///////////////////////////
	Route::group(['prefix' => 'Department'], function()
	{
		Route::get('/{asTerm}',  ['as' =>'as.departments.index','middleware'=>'permission:show.academystructure.departments', 'uses' =>'DepartmentController@index']);
		
		Route::get('create/{asTerm}', ['as' =>'as.departments.create','middleware'=>'permission:create.academystructure.departments', 'uses' =>'DepartmentController@create']);
		post('store', ['as' =>'as.departments.store', 'uses' =>'DepartmentController@store']);
	
		Route::get('edit/{asDepart}', ['as' =>'as.departments.edit','middleware'=>'permission:edit.academystructure.departments', 'uses' =>'DepartmentController@edit']);
		post('update/{asDepart}', ['as' =>'as.departments.update', 'uses' =>'DepartmentController@update']);
		
		Route::get('delete/{asDepart}', ['as' =>'as.departments.delete','middleware'=>'permission:delete.academystructure.departments', 'uses' =>'DepartmentController@delete']);
	});
	
	////////////////////Specialty///////////////////////////
	Route::group(['prefix' => 'Specialty'], function()
	{
		Route::get('/',  ['as' =>'as.specialties.index','middleware'=>'permission:show.academystructure.specialties', 'uses' =>'SpecialtyController@index']);
		
		Route::get('create', ['as' =>'as.specialties.create','middleware'=>'permission:create.academystructure.specialties', 'uses' =>'SpecialtyController@create']);
		post('store', ['as' =>'as.specialties.store', 'uses' =>'SpecialtyController@store']);
	
		Route::get('edit/{asSpec}', ['as' =>'as.specialties.edit','middleware'=>'permission:edit.academystructure.specialties', 'uses' =>'SpecialtyController@edit']);
		post('update/{asSpec}', ['as' =>'as.specialties.update', 'uses' =>'SpecialtyController@update']);
		
		Route::get('delete/{asSpec}', ['as' =>'as.specialties.delete','middleware'=>'permission:delete.academystructure.specialties', 'uses' =>'SpecialtyController@delete']);
	});
	
});