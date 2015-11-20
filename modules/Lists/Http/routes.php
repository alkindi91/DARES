<?php

use Modules\Lists\Http\Controllers\CitiesController;

Route::group(['prefix' => 'lists', 'namespace' => 'Modules\Lists\Http\Controllers'], function()
{
	Route::get('/', [
		'uses'=>'ListsController@index',
		'as'=>'lists.index'
		]);

	Route::group(['prefix'=>'countries'] ,function() {

	get('/', ['as'=>'countries.index','uses'=>'CountriesController@index' ,'middleware'=>'permission:view.countries']);
	get('create' ,['as'=>'countries.create' ,'uses'=>'CountriesController@create','middleware'=>'permission:create.countries']);
	get('edit/{country}' ,['as'=>'countries.edit' ,'uses'=>'CountriesController@edit','middleware'=>'permission:edit.countries']);
	get('show/{country}' ,['as'=>'countries.show' ,'uses'=>'CountriesController@show','middleware'=>'permission:view.countries']);
	get('delete/{country}' ,['as'=>'countries.delete' ,'uses'=>'CountriesController@delete','middleware'=>'permission:delete.countries']);
	get('delete-bulk' ,['as'=>'countries.delete-bulk' ,'uses'=>'CountriesController@deleteBulk','middleware'=>'permission:delete.countries']);
	
	post('store' ,['as'=>'countries.store' ,'uses'=>'CountriesController@store','middleware'=>'permission:create.countries']);
	post('update/{country}' ,['as'=>'countries.update' ,'uses'=>'CountriesController@update','middleware'=>'permission:edit.countries']);
	
	});

	Route::group(['prefix'=>'cities'] ,function() {

	get('/{country}', ['as'=>'cities.index','uses'=>'CitiesController@index' ,'middleware'=>'permission:view.cities']);
	get('create/{country}' ,['as'=>'cities.create' ,'uses'=>'CitiesController@create','middleware'=>'permission:create.cities']);
	get('edit/{city}' ,['as'=>'cities.edit' ,'uses'=>'CitiesController@edit','middleware'=>'permission:edit.cities']);
	get('show/{city}' ,['as'=>'cities.show' ,'uses'=>'CitiesController@show','middleware'=>'permission:view.cities']);
	get('delete/{city}' ,['as'=>'cities.delete' ,'uses'=>'CitiesController@delete','middleware'=>'permission:delete.cities']);
	get('delete-bulk/{country}' ,['as'=>'cities.delete-bulk' ,'uses'=>'CitiesController@deleteBulk','middleware'=>'permission:delete.cities']);
	
	post('store/{country}' ,['as'=>'cities.store' ,'uses'=>'CitiesController@store','middleware'=>'permission:create.cities']);
	post('update/{city}' ,['as'=>'cities.update' ,'uses'=>'CitiesController@update','middleware'=>'permission:edit.cities']);
	
	});
});