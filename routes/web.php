<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OffersController;
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

Route::resource('/',HomeController::class);
Route::resource('/menu', MenuController::class);
Route::resource('/offers', OffersController::class);


Route::get('/contact_us',[ContactUsController::class,'index']);
Route::post('/contact_us',[ContactUsController::class,'store']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
