<?php

Route::group(['prefix' => 'questionbank', 'namespace' => 'Modules\Questionbank\Http\Controllers'], function()
{
    
    get('/', ['as'=>' .index','uses'=>'QuestionbankController@index']);
    get('index_lesson/{qquestionbank}', ['as'=>'questionbank.index_lesson','uses'=>'QuestionbankController@index_lesson']);
    get('questionlist/{qblessonid}', ['as'=>'questionbank.questionlist','uses'=>'QuestionbankController@questionlist']);
    get('questionlistsub/{qbsubjectid}',['as'=>'questionbank.questionlistsub','uses'=>'QuestionbankController@questionlistsub']);
    
    get('create/{qblessonid}', ['as'=>'questionbank.create','uses'=>'QuestionbankController@create']);
    post('store/{qblessonid}', ['as'=>'questionbank.store','uses'=>'QuestionbankController@store']);
    get('edit', ['as'=>'questionbank.edit','uses'=>'QuestionbankController@edit']);
    post('update', ['as'=>'questionbank.update','uses'=>'QuestionbankController@update']);
    get('delete', ['as'=>'questionbank.delete','uses'=>'QuestionbankController@delete']);
    get('delete-bulk', ['as'=>'questionbank.delete-bulk','uses'=>'QuestionbankController@delete-bulk']);
   
   Route::group(['prefix'=> 'choice'], function()
{
	get('/{chquestionid}',['as'=>'choice.index','uses'=>'ChoiceeController@index']);
	get('create/{chquestionid}',['as'=>'choice.create','uses'=>'ChoiceeController@create']);
	post('store/{chquestionid}',['as'=>'choice.store','uses'=>'ChoiceeController@store']);
	get('edit',['as'=>'choice.edit','uses'=>'ChoiceeController@edit']);
	get('update',['as'=>'choice.update','uses'=>'ChoiceeController@update']);
	get('delete/{chquestionid}',['as'=>'choice.delete','uses'=>'ChoiceeController@delete']);
	post('delete-bulk/{chquestionid}', ['as'=>'choice.deleteBulk','uses'=>'ChoiceeController@deleteBulk']);
}
   	);

  });