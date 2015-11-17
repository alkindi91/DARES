<?php

Route::group(['prefix' => 'users','middleware'=>'auth', 'namespace' => 'Modules\Users\Http\Controllers'], function()
{
	get('/', ['as'=>'users.index','uses'=>'UsersController@index']);
	get('create' ,['as'=>'users.create' ,'uses'=>'UsersController@create']);
	get('edit/{user}' ,['as'=>'users.edit' ,'uses'=>'UsersController@edit']);
	get('show/{user}' ,['as'=>'users.show' ,'uses'=>'UsersController@show']);
	get('delete/{user?}' ,['as'=>'users.delete' ,'uses'=>'UsersController@delete']);
	get('delete-bulk' ,['as'=>'users.delete-bulk' ,'uses'=>'UsersController@deleteBulk']);
	
	post('store' ,['as'=>'users.store' ,'uses'=>'UsersController@store']);
	post('update/{user}' ,['as'=>'users.update' ,'uses'=>'UsersController@update']);
	

});



