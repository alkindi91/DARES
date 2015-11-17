<?php

Route::group(['prefix' => 'structure','middleware'=>'auth', 'namespace' => 'Modules\AcademyStructure\Http\Controllers'], function()
{
	get('/', ['as'=>'academystructure.index','uses'=>'AcademyStructureController@index']);
	get('create', ['as'=>'academystructure.create','uses'=>'AcademyStructureController@create']);
	post('store', ['as'=>'academystructure.store','uses'=>'AcademyStructureController@store']);
	
});