<?php

use App\Http\Controllers\PostsController;
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
    return view('welcome'); // daabrunebs imas rac weria welcome.blade.php
});

/*
Route::get('/about', function () {
    return view('about_us');  // daabrunebs imas rac miweria about_us.blade.php
});
*/

//Route::get('/about_us',[AboutUsController::class,'index1']);
Route::get('/posts',[PostsController::class,'index']);

Route::get('/posts/create',[PostsController::class,'create'])->name('post.create');

Route::get('/posts/{id}',[PostsController::class,'show']);

Route::post('/posts/save_post',[PostsController::class,'save'])->name('posts.save');

Route::get('posts/{id}/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('post.edit');

Route::put('posts/{id}/update', [\App\Http\Controllers\PostsController::class, 'update'])->name('post.update');

Route::delete('posts/{id}/delete', [\App\Http\Controllers\PostsController::class, 'delete'])->name('post.delete');
