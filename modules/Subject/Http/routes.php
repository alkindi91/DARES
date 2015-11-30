<?php

Route::group(['prefix' => 'subject','middleware'=>'auth', 'namespace' => 'Modules\Subject\Http\Controllers'], function()

{
	get('/', ['as'=>'subject.index','uses'=>"LessonsController@index"]);
	get('create_lesson', ['as'=>'subject.create_lesson','uses'=>'LessonsController@create_lesson']);
	post('store_lesson', ['as'=>'subject.store_lesson','uses'=>'LessonsController@store_lesson']);
	get('edit_lesson/{lesson}', ['as'=>'subject.edit_lesson','uses'=>'LessonsController@edit_lesson']);
	post('update_lesson/{lesson}', ['as'=>'subject.update_lesson','uses'=>'LessonsController@update_lesson']);
	get('delete_lesson/{lesson}', ['as'=>'subject.delete_lesson','uses'=>'LessonsController@delete_lesson']);
	


    get('element/{lessonid}', ['as'=>'subject.element','uses'=>"ElementsController@element"]);
	get('create_element/{lessonid}', ['as'=>'subject.create_element','uses'=>'ElementsController@create_element']);
	post('store_element/{lessonid}', ['as'=>'subject.store_element','uses'=>'ElementsController@store_element']);
	get('edit_element/{element}', ['as'=>'subject.edit_element','uses'=>'ElementsController@edit_element']);
	post('update_element/{element}', ['as'=>'subject.update_element','uses'=>'ElementsController@update_element']);
	get('delete_element/{element}', ['as'=>'subject.delete_element','uses'=>'ElementsController@delete_element']);
	

});