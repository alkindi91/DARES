<?php

Route::group(['prefix' => 'ahmedtest', 'namespace' => 'Modules\AhmedTest\Http\Controllers'], function()
{
	Route::get('/', 'AhmedTestController@index');
	get('create', ['as'=>'ahmedtest.create','uses'=>'AhmedTestController@create']);
	get('show/{hhhhdfhgfg}', ['as'=>'ahmedtest.show','uses'=>'AhmedTestController@show']);
	get('edit/{id}', ['as'=>'ahmedtest.edit','uses'=>'AhmedTestController@edit']);
	post('store', ['as'=>'ahmedtest.store','uses'=>'AhmedTestController@store']);

});