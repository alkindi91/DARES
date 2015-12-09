<?php

Route::group(['prefix' => 'users','middleware'=>'auth', 'namespace' => 'Modules\Users\Http\Controllers'], function()
{

	get('/', ['as'=>'users.index','uses'=>'UsersController@index' ,'middleware'=>'permission:view.users']);
	get('create' ,['as'=>'users.create' ,'uses'=>'UsersController@create','middleware'=>'permission:create.users']);
	get('edit/{uuser}' ,['as'=>'users.edit' ,'uses'=>'UsersController@edit','middleware'=>'permission:edit.users']);
	get('show/{uuser}' ,['as'=>'users.show' ,'uses'=>'UsersController@show','middleware'=>'permission:view.users']);
	get('delete/{uuser?}' ,['as'=>'users.delete' ,'uses'=>'UsersController@delete','middleware'=>'permission:delete.users']);
	get('delete-bulk' ,['as'=>'users.delete-bulk' ,'uses'=>'UsersController@deleteBulk','middleware'=>'permission:delete.users']);

	
	post('store' ,['as'=>'users.store' ,'uses'=>'UsersController@store','middleware'=>'permission:create.users']);
	post('update/{uuser}' ,['as'=>'users.update' ,'uses'=>'UsersController@update','middleware'=>'permission:edit.users']);
	
	Route::group(['prefix'=>'roles'] ,function() {
		get('/', ['as'=>'roles.index','uses'=>'RolesController@index','middleware'=>'permission:view.roles']);
		get('create' ,['as'=>'roles.create' ,'uses'=>'RolesController@create','middleware'=>'permission:create.roles']);
		get('edit/{urole}' ,['as'=>'roles.edit' ,'uses'=>'RolesController@edit','middleware'=>'permission:edit.roles']);
		get('show/{urole}' ,['as'=>'roles.show' ,'uses'=>'RolesController@show','middleware'=>'permission:view.roles']);
		get('delete/{urole?}' ,['as'=>'roles.delete' ,'uses'=>'RolesController@delete','middleware'=>'permission:delete.users']);
		get('delete-bulk' ,['as'=>'roles.delete-bulk' ,'uses'=>'RolesController@deleteBulk','middleware'=>'permission:delete.users']);
		
		post('store' ,['as'=>'roles.store' ,'uses'=>'RolesController@store','middleware'=>'permission:create.roles']);
		post('update/{urole}' ,['as'=>'roles.update' ,'uses'=>'RolesController@update','middleware'=>'permission:edit.roles']);
	});
	
});



