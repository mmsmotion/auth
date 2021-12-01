<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test",function (){
    return "I'm test";
})->middleware('auth');

Auth::routes();

Route::view("/article/create",'article.create')->name('article.create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category',\App\Http\Controllers\CategoryController::class);
Route::resource('article',\App\Http\Controllers\ArticleController::class);
