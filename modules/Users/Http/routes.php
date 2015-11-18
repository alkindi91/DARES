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
	
	Route::group(['prefix'=>'roles'] ,function() {
		get('/', ['as'=>'roles.index','uses'=>'RolesController@index']);
		get('create' ,['as'=>'roles.create' ,'uses'=>'RolesController@create']);
		get('edit/{role}' ,['as'=>'roles.edit' ,'uses'=>'RolesController@edit']);
		get('show/{role}' ,['as'=>'roles.show' ,'uses'=>'RolesController@show']);
		get('delete/{role?}' ,['as'=>'roles.delete' ,'uses'=>'RolesController@delete']);
		get('delete-bulk' ,['as'=>'roles.delete-bulk' ,'uses'=>'RolesController@deleteBulk']);
		
		post('store' ,['as'=>'roles.store' ,'uses'=>'RolesController@store']);
		post('update/{role}' ,['as'=>'roles.update' ,'uses'=>'RolesController@update']);
	});
	
});



