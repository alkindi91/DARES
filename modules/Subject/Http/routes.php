<?php

Route::group(['prefix' => 'subject', 'namespace' => 'Modules\Subject\Http\Controllers'], function()

{
	get('/', ['as'=>'subject.index','uses'=>"LessonsController@index"]);
	get('create_lesson', ['as'=>'subject.create_lesson','uses'=>'LessonsController@create_lesson']);
	post('store_lesson', ['as'=>'subject.store_lesson','uses'=>'LessonsController@store_lesson']);
	get('edit_lesson/{lesson}', ['as'=>'subject.edit_lesson','uses'=>'LessonsController@edit_lesson']);
	post('update_lesson/{lesson}', ['as'=>'subject.update_lesson','uses'=>'LessonsController@update_lesson']);
	get('delete_lesson/{lesson}', ['as'=>'subject.delete_lesson','uses'=>'LessonsController@delete_lesson']);
	
});