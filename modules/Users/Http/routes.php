<?php

Route::group(['prefix' => 'users','middleware'=>'auth', 'namespace' => 'Modules\Users\Http\Controllers'], function()
{
	get('/', ['as'=>'users.index','uses'=>'UsersController@index' ,'middleware'=>'permission:view.users']);
	get('create' ,['as'=>'users.create' ,'uses'=>'UsersController@create','middleware'=>'permission:create.users']);
	get('edit/{user}' ,['as'=>'users.edit' ,'uses'=>'UsersController@edit','middleware'=>'permission:edit.users']);
	get('show/{user}' ,['as'=>'users.show' ,'uses'=>'UsersController@show','middleware'=>'permission:view.users']);
	get('delete/{user?}' ,['as'=>'users.delete' ,'uses'=>'UsersController@delete','middleware'=>'permission:delete.users']);
	get('delete-bulk' ,['as'=>'users.delete-bulk' ,'uses'=>'UsersController@deleteBulk','middleware'=>'permission:delete.users']);
	
	post('store' ,['as'=>'users.store' ,'uses'=>'UsersController@store','middleware'=>'permission:create.users']);
	post('update/{user}' ,['as'=>'users.update' ,'uses'=>'UsersController@update','middleware'=>'permission:edit.users']);
	
	Route::group(['prefix'=>'roles'] ,function() {
		get('/', ['as'=>'roles.index','uses'=>'RolesController@index','middleware'=>'permission:view.roles']);
		get('create' ,['as'=>'roles.create' ,'uses'=>'RolesController@create','middleware'=>'permission:create.roles']);
		get('edit/{role}' ,['as'=>'roles.edit' ,'uses'=>'RolesController@edit','middleware'=>'permission:edit.roles']);
		get('show/{role}' ,['as'=>'roles.show' ,'uses'=>'RolesController@show','middleware'=>'permission:view.roles']);
		get('delete/{role?}' ,['as'=>'roles.delete' ,'uses'=>'RolesController@delete','middleware'=>'permission:delete.users']);
		get('delete-bulk' ,['as'=>'roles.delete-bulk' ,'uses'=>'RolesController@deleteBulk','middleware'=>'permission:delete.users']);
		
		post('store' ,['as'=>'roles.store' ,'uses'=>'RolesController@store','middleware'=>'permission:create.roles']);
		post('update/{role}' ,['as'=>'roles.update' ,'uses'=>'RolesController@update','middleware'=>'permission:edit.roles']);
	});
	
});



