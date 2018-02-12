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

//Route::get('/quizz', function () {
//    return view('Main.quizz');
//})->name('quizz_route');

Route::get('/quizz/{id}', 'Main\HomeController@quizz')
    ->where('id', '[0-9]+')
    ->name('quizz_route');