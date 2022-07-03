<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [UserController::class, 'login']);

Route::post('register', [UserController::class, 'register']);

Route::post('forget_password', [UserController::class, 'resetPassword']);


Route::get('product', [ProductController::class, 'getAllProducts']);

Route::get('offers', [OffersController::class, 'getAllOffers']);

Route::get('home', [HomeController::class, 'getHome']);

Route::get('product/{id}',[ProductController::class,"getProductById"]);





