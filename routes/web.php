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