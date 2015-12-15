<?php

Route::group(['prefix' => 'subject','middleware'=>'auth', 'namespace' => 'Modules\Subject\Http\Controllers'], function()

{
	get('/', ['as'=>'subject.index','uses'=>'SubjectsController@index','middleware'=>'permission:subject.view.subject']);
	get('create', ['as'=>'subject.create','uses'=>'SubjectsController@create','middleware'=>'permission:subject.create.subject']);
	post('store', ['as'=>'subject.store','uses'=>'SubjectsController@store','middleware'=>'permission:subject.create.subject']);
	get('edit/{sSubject}', ['as'=>'subject.edit','uses'=>'SubjectsController@edit','middleware'=>'permission:subject.edit.subject']);
	post('update/{sSubjectsSubject}', ['as'=>'subject.update','uses'=>'SubjectsController@update','middleware'=>'permission:subject.edit.subject']);
	get('delete/{sSubject}', ['as'=>'subject.delete','uses'=>'SubjectsController@delete','middleware'=>'permission:subject.delete.subject']);
	get('detail/{sSubject}', ['as'=>'subject.detail','uses'=>'SubjectsController@detail','middleware'=>'permission:subject.detail.subject']);
	
	post('delete-bulk', ['as'=>'subject.deleteBulk','uses'=>'SubjectsController@deleteBulk','middleware'=>'permission:subject.delete.subject']);

Route::group(['prefix'=>'lessons'] ,function() {
	get('/{sid}', ['as'=>'lessons.index','uses'=>"LessonsController@index",'middleware'=>'permission:subject.view.lesson']);
	get('create/{sid}', ['as'=>'lessons.create','uses'=>'LessonsController@create','middleware'=>'permission:subject.create.lesson']);
	post('store/{sid}', ['as'=>'lessons.store','uses'=>'LessonsController@store','middleware'=>'permission:subject.create.lesson']);
	get('edit/{sLessons}', ['as'=>'lessons.edit','uses'=>'LessonsController@edit','middleware'=>'permission:subject.edit.lesson']);
	post('update/{sLessons}', ['as'=>'lessons.update','uses'=>'LessonsController@update','middleware'=>'permission:subject.edit.lesson']);
	get('delete/{sLessons}', ['as'=>'lessons.delete','uses'=>'LessonsController@delete','middleware'=>'permission:subject.delete.lesson']);
	
	post('delete-bulk/{slessons}', ['as'=>'lessons.deleteBulk','uses'=>'LessonsController@deleteBulk','middleware'=>'permission:subject.delete.lesson']);
	
});
Route::group(['prefix'=>'elements'] ,function() {
    get('/{sElements}', ['as'=>'elements.index','uses'=>"ElementsController@index",'middleware'=>'permission:subject.view.element']);
	get('create/{sElements}', ['as'=>'elements.create','uses'=>'ElementsController@create','middleware'=>'permission:subject.create.element']);
	post('store/{sElements}', ['as'=>'elements.store','uses'=>'ElementsController@store','middleware'=>'permission:subject.create.element']);
	get('edit/{sElements}', ['as'=>'elements.edit','uses'=>'ElementsController@edit','middleware'=>'permission:subject.edit.element']);
	post('update/{sElements}', ['as'=>'elements.update','uses'=>'ElementsController@update','middleware'=>'permission:subject.edit.element']);
	get('delete/{sElements}', ['as'=>'elements.delete','uses'=>'ElementsController@delete','middleware'=>'permission:subject.delete.element']);
	post('delete-bulk/{sElements}', ['as'=>'elements.deleteBulk','uses'=>'ElementsController@deleteBulk','middleware'=>'permission:subject.delete.element']);
});


});