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
//レッスン画面
Route::get('/categories', 'CategoryController@index');
//クイズ選択
Route::get('/categories/{category}/show', 'CategoryController@show');
//回答データ
Route::post('/results', 'ResultController@index');

//管理者画面
Route::get('/admins', 'QuizController@index')->middleware('admin');
Route::get('/admins/create', 'QuizController@create');
Route::post('/admins', 'QuizController@store');
Route::get('/admins/quizzes/{quiz}','QuizController@show');
Route::get('/admins/quizzes/{quiz}/edit', 'QuizController@edit');
Route::put('/admins/quizzes/{quiz}', 'QuizController@update');
Route::delete('/admins/quizzes/{quiz}', 'QuizController@delete');


//マイページ画面
Route::get('/wrongs', 'ResultController@wrongIndex');
//クイズ選択
Route::get('/wrongs/show', 'QuizController@wrongShow');
//回答データ
Route::put('/results', 'ResultController@update');

//ログイン画面
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');