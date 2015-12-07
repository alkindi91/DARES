<?php

Route::group([
    'prefix'=>'registration' ,
    'middleware'=>'auth',
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

            get('edit/{year}', [
                'as'=>'registration.years.edit',
                'uses'=>'YearsController@edit',
                'middleware'=>'permission:edit.registration.years'
                ]);

            get('show/{year}', [
                'as'=>'registration.years.show',
                'uses'=>'YearsController@show',
                'middleware'=>'permission:view.registration.years'
                ]);

            get('delete/{year}', [
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

            post('update/{year}', [
                'as'=>'registration.years.update',
                'uses'=>'YearsController@update',
                'middleware'=>'permission:edit.registration.years'
                ]);
    
        });

        Route::group(['prefix'=>'periods'], function () {

            get('/{year}', [
                'as'=>'registration.periods.index',
                'uses'=>'PeriodsController@index' ,
                'middleware'=>'permission:view.registration.periods'
                ]);

            get('create/{year}', [
                'as'=>'registration.periods.create',
                'uses'=>'PeriodsController@create',
                'middleware'=>'permission:create.registration.periods'
                ]);

            get('edit/{period}', [
                'as'=>'registration.periods.edit',
                'uses'=>'PeriodsController@edit',
                'middleware'=>'permission:edit.registration.periods'
                ]);

            get('show/{period}', [
                'as'=>'registration.periods.show',
                'uses'=>'PeriodsController@show',
                'middleware'=>'permission:view.registration.periods'
                ]);

            get('delete/{period}', [
                'as'=>'registration.periods.delete',
                'uses'=>'PeriodsController@delete',
                'middleware'=>'permission:delete.registration.periods'
                ]);

            get('delete-bulk/{year}', [
                'as'=>'registration.periods.delete-bulk' ,
                'uses'=>'PeriodsController@deleteBulk',
                'middleware'=>'permission:delete.registration.periods'
                ]);
            
            post('store/{year}', [
                'as'=>'registration.periods.store',
                'uses'=>'PeriodsController@store',
                'middleware'=>'permission:create.registration.periods'
                ]);

            post('update/{period}', [
                'as'=>'registration.periods.update',
                'uses'=>'PeriodsController@update',
                'middleware'=>'permission:edit.registration.periods'
                ]);
    
        });

        Route::group(['prefix'=>'notes'], function () {

            get('/{step}', [
                'as'=>'registration.notes.index',
                'uses'=>'NotesController@index' ,
                'middleware'=>'permission:view.registration.notes'
                ]);

            get('create/{step}', [
                'as'=>'registration.notes.create',
                'uses'=>'NotesController@create',
                'middleware'=>'permission:create.registration.notes'
                ]);

            get('edit/{note}', [
                'as'=>'registration.notes.edit',
                'uses'=>'NotesController@edit',
                'middleware'=>'permission:edit.registration.notes'
                ]);

            get('show/{note}', [
                'as'=>'registration.notes.show',
                'uses'=>'NotesController@show',
                'middleware'=>'permission:view.registration.notes'
                ]);

            get('delete/{note}', [
                'as'=>'registration.notes.delete',
                'uses'=>'NotesController@delete',
                'middleware'=>'permission:delete.registration.notes'
                ]);

            get('delete-bulk/{step}', [
                'as'=>'registration.notes.delete-bulk' ,
                'uses'=>'NotesController@deleteBulk',
                'middleware'=>'permission:delete.registration.notes'
                ]);
            
            post('store/{step}', [
                'as'=>'registration.notes.store',
                'uses'=>'NotesController@store',
                'middleware'=>'permission:create.registration.notes'
                ]);

            post('update/{note}', [
                'as'=>'registration.notes.update',
                'uses'=>'NotesController@update',
                'middleware'=>'permission:edit.registration.notes'
                ]);
    
        });

        Route::group(['prefix'=>'registrar'] ,function() {
            get('/' ,['as'=>'registration.registrar.index' ,'uses'=>'RegistrarController@index']);
            get('apply' ,['as'=>'registration.registrar.apply' ,'uses'=>'RegistrarController@apply']);
            post('apply' ,['as'=>'registration.registrar.apply' ,'uses'=>'RegistrarController@store']);
        });

    });
