<?php

Route::group(['prefix' => 'ahmedtest', 'namespace' => 'Modules\AhmedTest\Http\Controllers'], function()
{
	get('/', ['as'=>'ahmedtest.index','uses'=>'AhmedTestController@index']);
	get('create', ['as'=>'ahmedtest.create','uses'=>'AhmedTestController@create']);
	get('show/{id}', ['as'=>'ahmedtest.show','uses'=>'AhmedTestController@show']);
	get('edit/{id}', ['as'=>'ahmedtest.edit','uses'=>'AhmedTestController@edit']);
	post('update/{id}', ['as'=>'ahmedtest.update','uses'=>'AhmedTestController@update']);
	post('store', ['as'=>'ahmedtest.store','uses'=>'AhmedTestController@store']);

});