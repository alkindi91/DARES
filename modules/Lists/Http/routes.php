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
	get('edit/{lCountry}' ,['as'=>'countries.edit' ,'uses'=>'CountriesController@edit','middleware'=>'permission:edit.countries']);
	get('show/{lCountry}' ,['as'=>'countries.show' ,'uses'=>'CountriesController@show','middleware'=>'permission:view.countries']);
	get('delete/{lCountry}' ,['as'=>'countries.delete' ,'uses'=>'CountriesController@delete','middleware'=>'permission:delete.countries']);
	get('delete-bulk' ,['as'=>'countries.delete-bulk' ,'uses'=>'CountriesController@deleteBulk','middleware'=>'permission:delete.countries']);
	
	post('store' ,['as'=>'countries.store' ,'uses'=>'CountriesController@store','middleware'=>'permission:create.countries']);
	post('update/{lCountry}' ,['as'=>'countries.update' ,'uses'=>'CountriesController@update','middleware'=>'permission:edit.countries']);
	
	});

	Route::group(['prefix'=>'cities'] ,function() {

	get('/{lCountry}', ['as'=>'cities.index','uses'=>'CitiesController@index' ,'middleware'=>'permission:view.cities']);
	get('create/{lCountry}' ,['as'=>'cities.create' ,'uses'=>'CitiesController@create','middleware'=>'permission:create.cities']);
	get('edit/{lCity}' ,['as'=>'cities.edit' ,'uses'=>'CitiesController@edit','middleware'=>'permission:edit.cities']);
	get('show/{lCity}' ,['as'=>'cities.show' ,'uses'=>'CitiesController@show','middleware'=>'permission:view.cities']);
	get('delete/{lCity}' ,['as'=>'cities.delete' ,'uses'=>'CitiesController@delete','middleware'=>'permission:delete.cities']);
	get('delete-bulk/{lCountry}' ,['as'=>'cities.delete-bulk' ,'uses'=>'CitiesController@deleteBulk','middleware'=>'permission:delete.cities']);
	
	post('store/{lCountry}' ,['as'=>'cities.store' ,'uses'=>'CitiesController@store','middleware'=>'permission:create.cities']);
	post('update/{lCity}' ,['as'=>'cities.update' ,'uses'=>'CitiesController@update','middleware'=>'permission:edit.cities']);
	
	});

	Route::group(['prefix'=>'states'] ,function() {

	get('/{lCity}', ['as'=>'states.index','uses'=>'StatesController@index' ,'middleware'=>'permission:view.states']);
	get('create/{lCity}' ,['as'=>'states.create' ,'uses'=>'StatesController@create','middleware'=>'permission:create.states']);
	get('edit/{lState}' ,['as'=>'states.edit' ,'uses'=>'StatesController@edit','middleware'=>'permission:edit.states']);
	get('show/{lState}' ,['as'=>'states.show' ,'uses'=>'StatesController@show','middleware'=>'permission:view.states']);
	get('delete/{lState}' ,['as'=>'states.delete' ,'uses'=>'StatesController@delete','middleware'=>'permission:delete.states']);
	get('delete-bulk/{lCity}' ,['as'=>'states.delete-bulk' ,'uses'=>'StatesController@deleteBulk','middleware'=>'permission:delete.states']);
	
	post('store/{lCity}' ,['as'=>'states.store' ,'uses'=>'StatesController@store','middleware'=>'permission:create.states']);
	post('update/{lState}' ,['as'=>'states.update' ,'uses'=>'StatesController@update','middleware'=>'permission:edit.states']);
	
	});
});