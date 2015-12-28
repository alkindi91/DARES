<?php

Route::group(['prefix' => 'paymentgateway', 'namespace' => 'Modules\Paymentgateway\Http\Controllers'], function()
{
	Route::get('/', 'PaymentgatewayController@index');
});