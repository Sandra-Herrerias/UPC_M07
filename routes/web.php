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
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('index', 'index')->name('index');
    Route::get('aboutgame', 'aboutgame')->name('aboutgame');
    Route::get('aboutus', 'aboutus')->name('aboutus');
    Route::get('download', 'download')->name('download');
    Route::get('technologies', 'technologies')->name('technologies');
});

Route::controller(App\Http\Controllers\CommentController::class)->group(function () {
    Route::get('admin_comments', 'admin_comments')->name('admin_comments')->middleware('auth');
    Route::post('admin_comments/{id}', 'find_comment')->name('admin_comments.find_comment')->middleware('auth');
    Route::delete('admin_comments/{comment}', 'destroy')->name('admin_comments.destroy')->middleware('auth');
    Route::put('admin_comments/{comment}', 'update')->name('admin_comments.update')->middleware('auth');
    Route::post('admin_comments', 'store')->name('admin_comments.store')->middleware('auth');
    Route::get('comments', 'comments')->name('comments');
    Route::post('comments', 'store')->name('comments.store')->middleware('auth');
});

Route::controller(App\Http\Controllers\RankingController::class)->group(function () {
    Route::get('ranking', 'show')->name('ranking');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

