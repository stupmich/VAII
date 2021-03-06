<?php

use Illuminate\Support\Facades\Auth;
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
    return view('articles.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/classes', [App\Http\Controllers\MenuController::class, 'classes'])->name('menu.classes');
Route::get('/howToStart', [App\Http\Controllers\MenuController::class, 'howToStart'])->name('menu.howToStart');
Route::get('/races', [App\Http\Controllers\MenuController::class, 'races'])->name('menu.races');
Route::get('/lore', [App\Http\Controllers\MenuController::class, 'lore'])->name('menu.lore');

Route::get('/profile',[App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::get('/users',[App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/editProfile',[App\Http\Controllers\UserController::class, 'edit'])->name('user.editProfile');
Route::post('/editProfile',[App\Http\Controllers\UserController::class, 'update'])->name('user.updateProfile');
Route::get('/user/{user}/delete',[App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');



Route::get('/article/create/{category?}/{subcategory?}',[App\Http\Controllers\ArticlesController::class, 'create'])->name('articles.create');
Route::post('/article/{category?}/{subcategory?}',[App\Http\Controllers\ArticlesController::class, 'store'])->name('articles.store');

Route::get('/article/index',[App\Http\Controllers\ArticlesController::class, 'index'])->name('articles.index');
Route::get('/article/topics/{category?}/{subcategory?}',[App\Http\Controllers\ArticlesController::class, 'topics'])->name('articles.topics');
Route::get('/article/topicsAjax/{subcategory?}',[App\Http\Controllers\ArticlesController::class, 'topicsAjax'])->name('articles.topicsAjax');
Route::get('/article/topic/{id?}',[App\Http\Controllers\ArticlesController::class, 'topic'])->name('articles.topic');
Route::get('/article/topicAjax/{id?}',[App\Http\Controllers\ArticlesController::class, 'topicAjax'])->name('articles.topicAjax');
Route::get('/article/topicUserAjax/{id?}',[App\Http\Controllers\ArticlesController::class, 'topicUserAjax'])->name('articles.topicUserAjax');

Route::post('/article/topic/{id?}/comment',[App\Http\Controllers\CommentsController::class, 'store'])->name('comment.store');
Route::get('/article/commentsAjax/{id?}',[App\Http\Controllers\CommentsController::class, 'commentsAjax'])->name('comment.ajax');
Route::get('/article/commentsUserAjax/{id?}',[App\Http\Controllers\CommentsController::class, 'commentsUserAjax'])->name('comment.UserAjax');


Route::group(['middleware'=>['auth']],function (){
    Route::resource('user',\App\Http\Controllers\UserController::class);
});

