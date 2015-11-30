<?php

Route::group(['prefix' => 'supportprograms','middleware'=>'auth', 'namespace' => 'Modules\Supportprograms\Http\Controllers'], function()
{
	Route::get('/', 'SupportprogramsController@index');

	get('/', ['as'=>'supportprograms.index','uses'=>'SupportprogramsController@index','middleware'=>'permission:index.supportprograms']);
	get('create', ['as'=>'supportprograms.create','uses'=>'SupportprogramsController@create','middleware'=>'permission:create.supportprograms']);
	get('edit', ['as'=>'supportprograms.edit','uses'=>'SupportprogramsController@edit','middleware'=>'permission:edit.supportprograms']);
	get('show', ['as'=>'supportprograms.show','uses'=>'SupportprogramsController@show','middleware'=>'permission:show.supportprograms']);
	get('delete', ['as'=>'supportprograms.delete','uses'=>'SupportprogramsController@delete','middleware'=>'permission:delete.supportprograms']);
	get('delete-bulk', ['as'=>'supportprograms.delete-bulk','uses'=>'SupportprogramsController@delete','middleware'=>'permission:delete-bulk.supportprograms']);
});