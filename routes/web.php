<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts/create', [PostController::class, 'store']);
Route::delete('/posts/delete', [PostController::class, 'destroy']);
Route::patch('/posts/edit', [PostController::class, 'update']);
Route::put('/posts/pu/edit', [PostController::class, 'put']);
