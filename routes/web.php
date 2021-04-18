<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home');
});

Route::post('/image/upload',[\App\Http\Controllers\ImageController::class,'upload'])->name('image.upload');

Route::get('/image/delete',[\App\Http\Controllers\ImageController::class, 'delete'])->name('image.delete');

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class,'index'])->name('posts.index');
    Route::get('/create', [PostController::class,'create'])->name('posts.create');
    Route::post('/', [PostController::class,'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');
    Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class,'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('posts.destroy');
});