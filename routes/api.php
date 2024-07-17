<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InteractionController;

Route::middleware('auth.token')->group(function () {
    // Blog routes
    Route::get('blogs', [BlogController::class, 'index']);
    Route::post('blogs', [BlogController::class, 'store']);
    Route::get('blogs/{blog}', [BlogController::class, 'show']);
    Route::post('blogs/{blog}', [BlogController::class, 'update']);
    Route::delete('blogs/{blog}', [BlogController::class, 'destroy']);

    // Post routes under a specific blog
    Route::get('blogs/{blog_id}/posts', [PostController::class, 'index']);
    Route::post('blogs/{blog_id}/posts', [PostController::class, 'store']);
    Route::get('blogs/{blog_id}/posts/{post}', [PostController::class, 'show']);
    Route::post('blogs/{blog_id}/posts/{post}', [PostController::class, 'update']);
    Route::delete('blogs/{blog_id}/posts/{post}', [PostController::class, 'destroy']);

    // Interaction routes
    Route::post('blogs/{blog_id}/posts/{post}/like', [InteractionController::class, 'likePost']);
    Route::post('blogs/{blog_id}/posts/{post}/comment', [InteractionController::class, 'commentPost']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
