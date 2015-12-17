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

            get('edit/{academycycleYear}', [
                'as'=>'academycycle.years.edit',
                'uses'=>'YearsController@edit',
                'middleware'=>'permission:edit.academycycle.years'
                ]);

            get('show/{academycycleYear}', [
                'as'=>'academycycle.years.show',
                'uses'=>'YearsController@show',
                'middleware'=>'permission:view.academycycle.years'
                ]);

            get('delete/{academycycleYear}', [
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

            post('update/{academycycleYear}', [
                'as'=>'academycycle.years.update',
                'uses'=>'YearsController@update',
                'middleware'=>'permission:edit.academycycle.years'
                ]);
    
        });
	Route::group(['prefix'=>'semesters'], function () {

            get('/{acYear}', [
                'as'=>'ac.semesters.index',
                'uses'=>'SemestersController@index' ,
                'middleware'=>'permission:view.academycycle.semesters'
                ]);

            get('create/{acYear}', [
                'as'=>'ac.semesters.create',
                'uses'=>'SemestersController@create',
                'middleware'=>'permission:create.academycycle.semesters'
                ]);

            get('edit/{acSemester}', [
                'as'=>'ac.semesters.edit',
                'uses'=>'SemestersController@edit',
                'middleware'=>'permission:edit.academycycle.semesters'
                ]);
            
            post('store', [
                'as'=>'ac.semesters.store',
                'uses'=>'SemestersController@store',
                'middleware'=>'permission:create.academycycle.semesters'
                ]);

            post('update/{acSemester}', [
                'as'=>'ac.semesters.update',
                'uses'=>'SemestersController@update',
                'middleware'=>'permission:edit.academycycle.semesters'
                ]);
				
            get('delete/{acSemester}', [
                'as'=>'ac.semesters.delete',
                'uses'=>'SemestersController@delete',
                'middleware'=>'permission:delete.academycycle.semesters'
                ]);

            get('delete-bulk', [
                'as'=>'ac.semesters.delete-bulk' ,
                'uses'=>'SemestersController@deleteBulk',
                'middleware'=>'permission:delete.academycycle.semesters'
                ]);
    
        });
});