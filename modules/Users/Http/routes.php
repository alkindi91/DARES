<?php

Route::group(['prefix' => 'users','middleware'=>'auth', 'namespace' => 'Modules\Users\Http\Controllers'], function()
{
	get('/', ['as'=>'users.index','uses'=>'UsersController@index']);


});


