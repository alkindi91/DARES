<?php

Route::group(['prefix' => 'subject','middleware'=>'auth', 'namespace' => 'Modules\Subject\Http\Controllers'], function()

{
	get('/', ['as'=>'subject.index','uses'=>"LessonsController@index"]);
	get('create', ['as'=>'subject.create','uses'=>'LessonsController@create']);
	post('store', ['as'=>'subject.store','uses'=>'LessonsController@store']);
	get('edit/{lesson}', ['as'=>'subject.edit','uses'=>'LessonsController@edit']);
	post('update/{lesson}', ['as'=>'subject.update','uses'=>'LessonsController@update']);
	get('delete/{lesson}', ['as'=>'subject.delete','uses'=>'LessonsController@delete']);
	

Route::group(['prefix'=>'elements'] ,function() {
    get('/{lessonid}', ['as'=>'elements.index','uses'=>"ElementsController@index"]);
	get('create/{lessonid}', ['as'=>'elements.create','uses'=>'ElementsController@create']);
	post('store/{lessonid}', ['as'=>'elements.store','uses'=>'ElementsController@store']);
	get('edit/{element}', ['as'=>'elements.edit','uses'=>'ElementsController@edit']);
	post('update/{element}', ['as'=>'elements.update','uses'=>'ElementsController@update']);
	get('delete/{element}', ['as'=>'elements.delete','uses'=>'ElementsController@delete']);
	
});

});