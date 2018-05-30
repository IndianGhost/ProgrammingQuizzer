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

Route::get('/', 'Main\HomeController@index')
    ->name('home_route');

Route::get('/quizz/{language}', 'Main\HomeController@quizz')
    ->where('language', '[a-zA-Z]+')
    ->name('quizz_route');

Route::post('/answers/{language}', 'Main\ScoreController@answers')
    ->where('language', '[a-zA-Z]+')
    ->name('answers_route');
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

/*
 * CRUD Application : Create post, Read get, Update put, Delete delete
 */

//post request later
Route::get('admin/quiz/create', 'HomeController@createQuiz')->name('createQuiz');

Route::get('admin/quiz', 'HomeController@readQuiz')->name('readQuiz');

//put request later
Route::get('admin/quiz/update/{id}', 'HomeController@updateQuiz')
    ->where('id', '[0-9]+')
    ->name('updateQuiz');

//delete request later
Route::get('admin/quiz/delete', 'HomeController@deleteQuiz')->name('deleteQuiz');

Route::get('admin/quiz/{id}', 'HomeController@questionQuiz')
	->where('id', '[0-9]+')
	->name('quizzQuestion');