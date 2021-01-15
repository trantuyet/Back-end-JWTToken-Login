<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\APIController;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//
//Route::prefix('posts')->group(function () {
//    Route::get('', [PostController::class, 'index']);
//    Route::post('/create', [PostController::class, 'store']);
//    Route::delete('/{id}/destroy', [PostController::class, 'destroy']);
//});

Route::post('login', [AuthController::class, 'login']);
//
Route::group(['middleware' => 'auth.jwt'], function () {
//    Route::get('logout', [AuthController::class, 'logout');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index']);
});
