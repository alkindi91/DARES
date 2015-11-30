<?php

Route::group(['prefix' => 'subject','middleware'=>'auth', 'namespace' => 'Modules\Subject\Http\Controllers'], function()

{
	get('/', ['as'=>'subject.index','uses'=>"LessonsController@index"]);
	get('create', ['as'=>'subject.create','uses'=>'LessonsController@create']);
	post('store', ['as'=>'subject.store','uses'=>'LessonsController@store']);
	get('edit/{slessonid}', ['as'=>'subject.edit','uses'=>'LessonsController@edit']);
	post('update/{slessonid}', ['as'=>'subject.update','uses'=>'LessonsController@update']);
	get('delete/{slessonid}', ['as'=>'subject.delete','uses'=>'LessonsController@delete']);
	

Route::group(['prefix'=>'elements'] ,function() {
    get('/{selements}', ['as'=>'elements.index','uses'=>"ElementsController@index"]);
	get('create/{selements}', ['as'=>'elements.create','uses'=>'ElementsController@create']);
	post('store/{selements}', ['as'=>'elements.store','uses'=>'ElementsController@store']);
	get('edit/{selements}', ['as'=>'elements.edit','uses'=>'ElementsController@edit']);
	post('update/{selements}', ['as'=>'elements.update','uses'=>'ElementsController@update']);
	get('delete/{selements}', ['as'=>'elements.delete','uses'=>'ElementsController@delete']);
	
});

});