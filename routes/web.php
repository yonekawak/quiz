<?php

use App\Http\Controllers\ategoryController;
use Illuminate\Support\Facades\Route;
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
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category}/show', 'CategoryController@show');

Route::get('/admins', 'QuizController@index')->middleware('admin');
Route::get('/admins/create', 'QuizController@create');
Route::post('/admins', 'QuizController@store');
Route::get('/admins/quizzes/{quiz}','QuizController@show');
Route::get('/admins/quizzes/{quiz}/edit', 'QuizController@edit');
Route::put('/admins/quizzes/{quiz}', 'QuizController@update');
Route::delete('/admins/quizzes/{quiz}', 'QuizController@delete');

Route::post('/results', 'ResultController@index');
Route::get('/studies', 'StudyController@index');


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');