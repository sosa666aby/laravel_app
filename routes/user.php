<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PostController;


Route::prefix('user')->group(function () {

    Route::redirect('/', '/user/posts')->name('user');

    Route::get('/posts', [PostController::class, 'index'])->name('user.posts');

    Route::get('/posts/create', [PostController::class, 'create'])->name('user.posts.create');

    Route::post('/posts', [PostController::class, 'store'])->name('user.posts.store');

    Route::get('/posts/{post}', [PostController::class, 'show'])->name('user.posts.show');

    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');

    Route::put('/posts/{post}', [PostController::class, 'update'])->name('user.posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');
});
