<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('form.start');
});

Route::get('question/firstquestion', 'QuestionController@firstquestion');
Route::post('question/firstquestion', 'QuestionController@firstquestion_save');

Route::get('question/secondquestion', 'QuestionController@secondquestion');
Route::post('question/secondquestion', 'QuestionController@secondquestion_save');

Route::get('question/thirdquestion', 'QuestionController@thirdquestion');
Route::post('question/thirdquestion', 'QuestionController@thirdquestion_save');

Route::get('question/fourthquestion', 'QuestionController@fourthquestion');
Route::post('question/fourthquestion', 'QuestionController@fourthquestion_save');

Route::get('question/lastquestion', 'QuestionController@lastquestion');
Route::post('question/lastquestion', 'QuestionController@lastquestion_save');

Route::get('answer/#', 'AnswerController@#');

Route::get('form/contact', 'contactController@contact');


