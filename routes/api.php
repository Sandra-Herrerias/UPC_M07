<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/home', function () {
//     return view('index');
// });

// Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
//     Route::get('index', 'index')->name('index');
//     Route::get('aboutgame', 'aboutgame')->name('aboutgame');
//     Route::get('aboutus', 'aboutus')->name('aboutus');
//     Route::get('download', 'download')->name('download');
//     Route::get('technologies', 'technologies')->name('technologies');
// });

// Route::controller(App\Http\Controllers\CommentController::class)->group(function () {
//     Route::get('admin_comments', 'admin_comments')->name('admin_comments');
//     Route::post('admin_comments/{id}', 'find_comment')->name('admin_comments.find_comment')->middleware('auth');
//     Route::delete('admin_comments/{comment}', 'destroy')->name('admin_comments.destroy');
//     Route::put('admin_comments/{comment}', 'update')->name('admin_comments.update');
//     Route::post('admin_comments', 'store')->name('admin_comments.store');
//     Route::get('comments', 'comments')->name('comments');
//     Route::post('comments', 'store')->name('comments.store');
// });


// Route::controller(App\Http\Controllers\RankingController::class)->group(function () {
//     Route::get('ranking', 'show')->name('ranking');
// });