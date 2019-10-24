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

Route::get('question/secondquestion', 'QuestionController@secondquestion');

Route::get('question/thirdquestion', 'QuestionController@thirdquestion');

Route::get('question/fourthquestion', 'QuestionController@fourthquestion');

Route::get('question/lastquestion', 'QuestionController@lastquestion');


