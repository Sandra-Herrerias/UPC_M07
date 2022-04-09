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
Route::get('/aboutgame', function () {
    return view('aboutgame');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/admin_comments', function () {
    return view('admin_comments');
});
Route::get('/comments_feedback', function () {
    return view('comments_feedback');
});
Route::get('/download', function () {
    return view('download');
});
Route::get('/ranking_results', function () {
    return view('ranking_results');
});
Route::get('/technologies', function () {
    return view('technologies');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
