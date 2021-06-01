<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\HomeController;
use \App\Http\Controllers\Admin\CategoryController;

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
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/', [BlogController::class, 'index']);
Route::get('category/{id}', [BlogController::class, 'category'])->name('category');
Route::get('post/{id}', [BlogController::class, 'post'])->name('post');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('homePage');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});


