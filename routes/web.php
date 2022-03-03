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
Route::get('/categories/quizzes', 'CategoryController@show');
Route::post('/quizzes/answer', 'QuizController@show');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
// 「最強」のユーザーしか使えない機能
//Route::group(['middleware' => ['auth', 'can:saikyou_only']], function () {
    //処理
//});

// 「最強」と「普通」のユーザーが使える機能
//Route::group(['middleware' => ['auth', 'can:saikyou_and_futsuu']], function () {
    //処理
//});

//全てのユーザーが使える機能
//Route::group(['middleware' => ['auth', 'can:all']], function () {
    //処理
//});

