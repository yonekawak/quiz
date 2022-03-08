<?php

use App\Http\Controllers\ategoryController;
use App\Category;
use App\Quiz;
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
Route::get('/admins', 'AdminController@index');
Route::get('/studies', 'StudyController@show');

Route::get('/categories/quizzes', 'CategoryController@show');
Route::post('/quizzes/answer', 'QuizController@show');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');