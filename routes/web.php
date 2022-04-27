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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';



// Route::get('home', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('aboutgame');
// });



Route::controller(StaticController::class)->group(function () {
    Route::get('aboutgame', 'aboutgame')->name('aboutgame');
    Route::get('aboutus', 'aboutus')->name('aboutus');
    Route::get('download', 'download')->name('download');
    Route::get('technologies', 'technologies')->name('technologies');
});

Route::controller(CommentController::class)->group(function () {
    Route::get('admin_comments', 'admin_comments')->name('admin_comments');
    Route::get('comments_feedback', 'comments_feedback')->middleware(['auth'])->name('comments_feedback');
});

Route::controller(RankingController::class)->group(function () {
    Route::get('ranking_results', 'ranking_results')->name('ranking_results');
});

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
