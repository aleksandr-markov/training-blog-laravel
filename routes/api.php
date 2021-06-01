<?php

use App\Http\Controllers\API\PostRatingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('post/{id}/isLiked', [PostRatingController::class, 'isLiked']);
Route::get('post/{id}/like', [PostRatingController::class, 'like']);
Route::get('post/{id}/getLikes', [PostRatingController::class, 'getLikesByPostId']);
Route::get('post/mostPopular', [PostRatingController::class, 'getMostPopular']);
