<?php

Route::group([
    'prefix'=>'registration' ,
    'namespace'=>'Modules\Registration\Http\Controllers'
    ], function () {

        Route::group(['prefix'=>'radmin', 'middleware'=>'auth'], function (){

       
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

            get('edit/{registrationStep}', [
                'as'=>'registration.steps.edit',
                'uses'=>'StepsController@edit',
                'middleware'=>'permission:edit.registration.steps'
                ]);

            get('show/{registrationStep}', [
                'as'=>'registration.steps.show',
                'uses'=>'StepsController@show',
                'middleware'=>'permission:view.registration.steps'
                ]);

            get('delete/{registrationStep}', [
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

            post('update/{registrationStep}', [
                'as'=>'registration.steps.update',
                'uses'=>'StepsController@update',
                'middleware'=>'permission:edit.registration.steps'
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

            get('edit/{registrationPeriod}', [
                'as'=>'registration.periods.edit',
                'uses'=>'PeriodsController@edit',
                'middleware'=>'permission:edit.registration.periods'
                ]);

            get('show/{registrationPeriod}', [
                'as'=>'registration.periods.show',
                'uses'=>'PeriodsController@show',
                'middleware'=>'permission:view.registration.periods'
                ]);

            get('delete/{registrationPeriod}', [
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

            post('update/{registrationPeriod}', [
                'as'=>'registration.periods.update',
                'uses'=>'PeriodsController@update',
                'middleware'=>'permission:edit.registration.periods'
                ]);
    
        });

        Route::group(['prefix'=>'notes'], function () {

            get('/{registrationStep}', [
                'as'=>'registration.notes.index',
                'uses'=>'NotesController@index' ,
                'middleware'=>'permission:view.registration.notes'
                ]);

            get('create/{registrationStep}', [
                'as'=>'registration.notes.create',
                'uses'=>'NotesController@create',
                'middleware'=>'permission:create.registration.notes'
                ]);

            get('edit/{registrationNote}', [
                'as'=>'registration.notes.edit',
                'uses'=>'NotesController@edit',
                'middleware'=>'permission:edit.registration.notes'
                ]);

            get('show/{registrationNote}', [
                'as'=>'registration.notes.show',
                'uses'=>'NotesController@show',
                'middleware'=>'permission:view.registration.notes'
                ]);

            get('delete/{registrationNote}', [
                'as'=>'registration.notes.delete',
                'uses'=>'NotesController@delete',
                'middleware'=>'permission:delete.registration.notes'
                ]);

            get('delete-bulk/{registrationStep}', [
                'as'=>'registration.notes.delete-bulk' ,
                'uses'=>'NotesController@deleteBulk',
                'middleware'=>'permission:delete.registration.notes'
                ]);
            
            post('store/{registrationStep}', [
                'as'=>'registration.notes.store',
                'uses'=>'NotesController@store',
                'middleware'=>'permission:create.registration.notes'
                ]);

            post('update/registrationNnote}', [
                'as'=>'registration.notes.update',
                'uses'=>'NotesController@update',
                'middleware'=>'permission:edit.registration.notes'
                ]);
    
        });
         });

        Route::group(['prefix'=>'registrar'] ,function() {
            get('/' ,['as'=>'registration.registrar.index' ,'uses'=>'RegistrarController@index']);
            get('apply' ,['as'=>'registration.registrar.apply' ,'uses'=>'RegistrarController@apply']);
            post('apply' ,['as'=>'registration.registrar.apply' ,'uses'=>'RegistrarController@store']);
        });

    });
