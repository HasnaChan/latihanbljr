<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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

Route::get('/home', [BookController::class,'index']);
Route::get('/detail/{id}', [BookController::class,'show']);
Route::get('/publisher', [PublisherController::class,'index']);
Route::get('/category/{id}', [CategoryController::class,'show']);
Route::get('/publisherdetail/{id}', [PublisherController::class,'show']);
Route::get('/contact', function () {
    return view('contact');
});
