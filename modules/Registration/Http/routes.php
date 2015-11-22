<?php

Route::group([
    'prefix'=>'registration' ,
    'namespace'=>'Modules\Registration\Http\Controllers'
    ], function () {

        get('/', [
            'as'=>'registration.index',
            'uses'=>'RegistrationController@index'
            ]);

        Route::group(['prefix'=>'steps'], function () {

            get('/', [
                'as'=>'registration.steps.index',
                'uses'=>'StepsController@index' ,
                'middleware'=>'permission:view.registration.steps'
                ]);

            get('create', [
                'as'=>'registration.steps.create',
                'uses'=>'StepsController@create',
                'middleware'=>'permission:create.registration.steps'
                ]);

            get('edit/{step}', [
                'as'=>'registration.steps.edit',
                'uses'=>'StepsController@edit',
                'middleware'=>'permission:edit.registration.steps'
                ]);

            get('show/{step}', [
                'as'=>'registration.steps.show',
                'uses'=>'StepsController@show',
                'middleware'=>'permission:view.registration.steps'
                ]);

            get('delete/{step}', [
                'as'=>'registration.steps.delete',
                'uses'=>'StepsController@delete',
                'middleware'=>'permission:delete.registration.steps'
                ]);

            get('delete-bulk', [
                'as'=>'registration.steps.delete-bulk' ,
                'uses'=>'StepsController@deleteBulk',
                'middleware'=>'permission:delete.registration.steps'
                ]);
            
            post('store', [
                'as'=>'registration.steps.store',
                'uses'=>'StepsController@store',
                'middleware'=>'permission:create.registration.steps'
                ]);

            post('update/{step}', [
                'as'=>'registration.steps.update',
                'uses'=>'StepsController@update',
                'middleware'=>'permission:edit.registration.steps'
                ]);
    
        });

        Route::group(['prefix'=>'years'], function () {

            get('/', [
                'as'=>'registration.years.index',
                'uses'=>'YearsController@index' ,
                'middleware'=>'permission:view.registration.years'
                ]);

            get('create', [
                'as'=>'registration.years.create',
                'uses'=>'YearsController@create',
                'middleware'=>'permission:create.registration.years'
                ]);

            get('edit/{step}', [
                'as'=>'registration.years.edit',
                'uses'=>'YearsController@edit',
                'middleware'=>'permission:edit.registration.years'
                ]);

            get('show/{step}', [
                'as'=>'registration.years.show',
                'uses'=>'YearsController@show',
                'middleware'=>'permission:view.registration.years'
                ]);

            get('delete/{step}', [
                'as'=>'registration.years.delete',
                'uses'=>'YearsController@delete',
                'middleware'=>'permission:delete.registration.years'
                ]);

            get('delete-bulk', [
                'as'=>'registration.years.delete-bulk' ,
                'uses'=>'YearsController@deleteBulk',
                'middleware'=>'permission:delete.registration.years'
                ]);
            
            post('store', [
                'as'=>'registration.years.store',
                'uses'=>'YearsController@store',
                'middleware'=>'permission:create.registration.years'
                ]);

            post('update/{step}', [
                'as'=>'registration.years.update',
                'uses'=>'YearsController@update',
                'middleware'=>'permission:edit.registration.years'
                ]);
    
        });

    });
