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
})->name('home');

/*
Route::get('/about', function () {
    return view('about_us');  // daabrunebs imas rac miweria about_us.blade.php
});
*/

Route::get('post_login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'getLogin'])->name('Login');
Route::get('/registration', [\App\Http\Controllers\LoginController::class, 'registration'])->name('user.registration');
Route::get('/registration/save', [\App\Http\Controllers\LoginController::class, 'registration_save'])->name('user.registration.save');
Route::middleware('auth')->group(function (){
    Route::get('/posts',[\App\Http\Controllers\PostsController::class, 'index'])->name('posts.show');
    Route::get('posts/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('post.create');
    Route::get('/posts/{id}', [\App\Http\Controllers\PostsController::class, 'show'])->name('post.show');
    Route::post('posts/savepost', [\App\Http\Controllers\PostsController::class, 'save'])->name('posts.save');
    Route::get('posts/{id}/edit', [\App\Http\Controllers\PostsController::class, 'edit'])->name('post.edit');
    Route::put('posts/{id}/update', [\App\Http\Controllers\PostsController::class, 'update'])->name('post.update');
    Route::delete('posts/{id}/delete', [\App\Http\Controllers\PostsController::class, 'delete'])->name('post.delete');
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::get('/Uinfo', [\App\Http\Controllers\PostsController::class, 'Uinfo'])->name('Uinfo');
});















