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

        Route::group(['prefix'=>'registrations'], function () {

            get('/', [
                'as'=>'registration.registrations.index',
                'uses'=>'RegistrationsController@index' ,
                'middleware'=>'permission:view.registration.registrations'
                ]);

            get('create', [
                'as'=>'registration.registrations.create',
                'uses'=>'RegistrationsController@create',
                'middleware'=>'permission:create.registration.registrations'
                ]);

            get('edit/{registrationStep}', [
                'as'=>'registration.registrations.edit',
                'uses'=>'RegistrationsController@edit',
                'middleware'=>'permission:edit.registration.registrations'
                ]);

            get('show/{registrationStep}', [
                'as'=>'registration.registrations.show',
                'uses'=>'RegistrationsController@show',
                'middleware'=>'permission:view.registration.registrations'
                ]);

            get('delete/{registrationStep}', [
                'as'=>'registration.registrations.delete',
                'uses'=>'RegistrationsController@delete',
                'middleware'=>'permission:delete.registration.registrations'
                ]);

            get('delete-bulk', [
                'as'=>'registration.registrations.delete-bulk' ,
                'uses'=>'RegistrationsController@deleteBulk',
                'middleware'=>'permission:delete.registration.registrations'
                ]);
            
            post('store', [
                'as'=>'registration.registrations.store',
                'uses'=>'RegistrationsController@store',
                'middleware'=>'permission:create.registration.registrations'
                ]);

            post('update/{registrationStep}', [
                'as'=>'registration.registrations.update',
                'uses'=>'RegistrationsController@update',
                'middleware'=>'permission:edit.registration.registrations'
                ]);
    
        });

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

        Route::group(['prefix'=>'files'], function () {

            get('/{registration_id}', [
                'as'=>'registration.files.index',
                'uses'=>'FilesController@index' ,
                'middleware'=>'permission:view.registration.files'
                ]);

            get('create', [
                'as'=>'registration.files.create',
                'uses'=>'FilesController@create',
                'middleware'=>'permission:create.registration.files'
                ]);

            get('edit/{registrationStep}', [
                'as'=>'registration.files.edit',
                'uses'=>'FilesController@edit',
                'middleware'=>'permission:edit.registration.files'
                ]);

            get('show/{registrationStep}', [
                'as'=>'registration.files.show',
                'uses'=>'FilesController@show',
                'middleware'=>'permission:view.registration.files'
                ]);

            get('delete/{registrationStep}', [
                'as'=>'registration.files.delete',
                'uses'=>'FilesController@delete',
                'middleware'=>'permission:delete.registration.files'
                ]);

            get('delete-bulk', [
                'as'=>'registration.files.delete-bulk' ,
                'uses'=>'FilesController@deleteBulk',
                'middleware'=>'permission:delete.registration.files'
                ]);
            
            post('store', [
                'as'=>'registration.files.store',
                'uses'=>'FilesController@store',
                'middleware'=>'permission:create.registration.files'
                ]);

            post('update/{registrationStep}', [
                'as'=>'registration.files.update',
                'uses'=>'FilesController@update',
                'middleware'=>'permission:edit.registration.files'
                ]);
    
        });

        

        Route::group(['prefix'=>'periods'], function () {

            get('/', [
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

            get('delete-bulk', [
                'as'=>'registration.periods.delete-bulk' ,
                'uses'=>'PeriodsController@deleteBulk',
                'middleware'=>'permission:delete.registration.periods'
                ]);
            
            post('store', [
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

        Route::group(['prefix'=>'registrar','namespace'=>'Registrar'] ,function() {
            get('/' ,['as'=>'registration.registrar.index','middleware'=>'authregister' ,'uses'=>'RegistrarController@index']);

            get('verify-email/{token}' ,['as'=>'registration.registrar.verifyEmail','middleware'=>'guestregister' ,'uses'=>'AuthController@verifyEmail']);
            get('apply' ,['as'=>'registration.registrar.apply' ,'middleware'=>'guestregister','uses'=>'AuthController@apply']);
            post('apply' ,['as'=>'registration.registrar.apply' ,'middleware'=>'guestregister','uses'=>'AuthController@store']);
            get('login' ,['as'=>'registration.registrar.login' ,'middleware'=>'guestregister','uses'=>'AuthController@getLogin']);
            get('logout' ,['as'=>'registration.registrar.logout' ,'middleware'=>'authregister','uses'=>'AuthController@getLogout']);
            post('login' ,['as'=>'registration.registrar.login' ,'middleware'=>'guestregister','uses'=>'AuthController@postLogin']);

            get('portal',['uses'=>'RegistrarController@portal' ,'as'=>'registration.registrar.portal', 'middleware'=>'authregister']);
            get('status',['uses'=>'RegistrarController@status' ,'as'=>'registration.registrar.status', 'middleware'=>'authregister']);
            get('files',['uses'=>'RegistrarController@files' ,'as'=>'registration.registrar.files', 'middleware'=>'authregister']);
            get('form',['uses'=>'RegistrarController@form' ,'as'=>'registration.registrar.form', 'middleware'=>'authregister']);
            get('upload-done',['uses'=>'RegistrarController@uploadDone','as'=>'registration.registrar.uploadDone','middleware'=>'authregister']);
            post('form',['uses'=>'RegistrarController@postForm','as'=>'registration.registrar.form','middleware'=>'authregister']);
            
            Route::group(['prefix'=>'files', 'namespace'=>'Files'], function(){
                post('upload',['uses'=>'FilesController@store' ,'as'=>'registration.registrar.files.store', 'middleware'=>'authregister']);
                get('delete/{id}', ['uses'=>'FilesController@delete', 'as'=>'registration.registrar.files.delete', 'middleware'=>'authregister']);
            });
        });

    });
