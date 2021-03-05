<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

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
    $books = DB::table('books')->get();
    //return $books;
    return view('welcome',compact('books'));
});

Route::get('/books', function () {
    $books = Book::all();
    return view('books.index',compact('books'));
});

Route::get('/books/{id}', function ($id) {
    $book = Book::find($id);
    //return $books;
    return view('books.show',compact('book'));
});
