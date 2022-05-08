<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RankingController;
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

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

Route::get('admin_comments', [CommentController::class, 'admin_comments']);
Route::get('comments', [CommentController::class, 'comments']);
Route::post('update', [CommentController::class, 'update']);
Route::post('store', [CommentController::class, 'store']);
Route::delete('destroy', [CommentController::class, 'destroy']);

Route::get('show', [RankingController::class, 'show']);
