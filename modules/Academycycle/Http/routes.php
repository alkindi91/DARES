<?php

Route::group(['prefix' => 'academycycle', 'namespace' => 'Modules\Academycycle\Http\Controllers'], function()
{
	Route::get('/', ['uses'=>'AcademycycleController@index' ,'as'=>'academycycle.index']);

	Route::group(['prefix'=>'years'], function () {

            get('/', [
                'as'=>'academycycle.years.index',
                'uses'=>'YearsController@index' ,
                'middleware'=>'permission:view.academycycle.years'
                ]);

            get('create', [
                'as'=>'academycycle.years.create',
                'uses'=>'YearsController@create',
                'middleware'=>'permission:create.academycycle.years'
                ]);

            get('edit/{year}', [
                'as'=>'academycycle.years.edit',
                'uses'=>'YearsController@edit',
                'middleware'=>'permission:edit.academycycle.years'
                ]);

            get('show/{year}', [
                'as'=>'academycycle.years.show',
                'uses'=>'YearsController@show',
                'middleware'=>'permission:view.academycycle.years'
                ]);

            get('delete/{year}', [
                'as'=>'academycycle.years.delete',
                'uses'=>'YearsController@delete',
                'middleware'=>'permission:delete.academycycle.years'
                ]);

            get('delete-bulk', [
                'as'=>'academycycle.years.delete-bulk' ,
                'uses'=>'YearsController@deleteBulk',
                'middleware'=>'permission:delete.academycycle.years'
                ]);
            
            post('store', [
                'as'=>'academycycle.years.store',
                'uses'=>'YearsController@store',
                'middleware'=>'permission:create.academycycle.years'
                ]);

            post('update/{year}', [
                'as'=>'academycycle.years.update',
                'uses'=>'YearsController@update',
                'middleware'=>'permission:edit.academycycle.years'
                ]);
    
        });
});