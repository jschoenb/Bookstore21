<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('books',[BookController::class,'index']);
Route::get('book/{isbn}',[BookController::class,'findByISBN']);
Route::get('books/checkisbn/{isbn}',[BookController::class,'checkISBN']);
Route::get('books/search/{searchTerm}',[BookController::class,'findBySearchTerm']);
Route::post('book',[BookController::class,'save']);
Route::put('book/{isbn}',[BookController::class,'update']);
Route::delete('book/{isbn}',[BookController::class,'delete']);
