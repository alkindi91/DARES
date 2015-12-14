<?php

Route::group(['prefix' => 'faq', 'namespace' => 'Modules\FAQ\Http\Controllers'], function()
{
	Route::get('/', 'FAQController@index');
});