<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', [PostController::class, 'index']); //Get All Post
Route::get('post/{id}', [PostController::class, 'show']); //Get Post By ID
Route::post('posts', [PostController::class, 'store']); //Store Post
Route::put('post/{id}', [PostController::class, 'update']); //Update Post By ID
Route::delete('post/{id}', [PostController::class, 'destroy']); //Delete Post By ID
