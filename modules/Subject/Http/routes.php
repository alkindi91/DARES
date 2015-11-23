<?php

Route::group(['prefix' => 'subject', 'namespace' => 'Modules\Subject\Http\Controllers'], function()
{
	get('/', ['as'=>'subject.index','use'=>'SubjectController@index']);
	get('create_lessons', ['as'=>'subject.create_lessons','use'=>'SubjectController@create_lessons']);
	get('store_lessons', ['as'=>'subject.store_lessons','use'=>'SubjectController@store_lessons']);
	get('edit_lessons', ['as'=>'subject.edit_lessons','use'=>'SubjectController@edit_lessons']);
	get('update_lessons', ['as'=>'subject.update_lessons','use'=>'SubjectController@update_lessons']);
	get('delete_lessons', ['as'=>'subject.delete_lessons','use'=>'SubjectController@delete_lessons']);
	
});