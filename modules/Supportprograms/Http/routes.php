<?php

Route::group(['prefix' => 'supportprograms', 'namespace' => 'Modules\Supportprograms\Http\Controllers'], function()
{

	get('/', ['as'=>'supportprograms.index','uses'=>'SupportprogramsController@index','middleware'=>'permission:index.supportprograms']);
	get('create', ['as'=>'supportprograms.create','uses'=>'SupportprogramsController@create','middleware'=>'permission:create.supportprograms']);
	get('edit/{spid}', ['as'=>'supportprograms.edit','uses'=>'SupportprogramsController@edit','middleware'=>'permission:edit.supportprograms']);
	post('store', ['as'=>'supportprograms.store','uses'=>'SupportprogramsController@store','middleware'=>'permission:create.supportprograms']);
	post('update/{spid}', ['as'=>'supportprograms.update','uses'=>'SupportprogramsController@update','middleware'=>'permission:edit.supportprograms']);
	get('delete/{spid}', ['as'=>'supportprograms.delete','uses'=>'SupportprogramsController@delete','middleware'=>'permission:delete.supportprograms']);
	post('deletebulk', ['as'=>'supportprograms.deletebulk','uses'=>'SupportprogramsController@deletebulk','middleware'=>'permission:delete.supportprograms']);
});