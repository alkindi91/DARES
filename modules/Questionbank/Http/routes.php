<?php

Route::group(['prefix' => 'questionbank', 'namespace' => 'Modules\Questionbank\Http\Controllers'], function()
{
    get('/', ['as'=>' .index','uses'=>'QuestionbankController@index']);
    get('index_lesson/{qquestionbank}', ['as'=>'questionbank.index_lesson','uses'=>'QuestionbankController@index_lesson']);

    get('create/{qblessonid}', ['as'=>'questionbank.create','uses'=>'QuestionbankController@create']);
    post('store', ['as'=>'questionbank.store','uses'=>'QuestionbankController@store']);
    get('edit', ['as'=>'questionbank.edit','uses'=>'QuestionbankController@edit']);
    post('update', ['as'=>'questionbank.update','uses'=>'QuestionbankController@update']);
    get('delete', ['as'=>'questionbank.delete','uses'=>'QuestionbankController@delete']);
    get('delete-bulk', ['as'=>'questionbank.delete-bulk','uses'=>'QuestionbankController@delete-bulk']);
   
  });