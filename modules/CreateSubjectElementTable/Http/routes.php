<?php

Route::group(['prefix' => 'createsubjectelementtable', 'namespace' => 'Modules\CreateSubjectElementTable\Http\Controllers'], function()
{
	Route::get('/', 'CreateSubjectElementTableController@index');
});