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

    });
