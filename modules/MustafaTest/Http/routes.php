<?php

Route::group(['prefix' => 'mustafatest', 'namespace' => 'Modules\MustafaTest\Http\Controllers'], function()
{
	get('/', ['as'=>'mustafatest.index','uses'=>'MustafaTestController@index']);
	Route::get('create', 'MustafaTestController@create');
	Route::get('store', 'MustafaTestController@store');
});