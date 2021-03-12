<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    public function index() {
        /**
         * load all books and relations with eager laoding
         */
        $books = Book::with(['authors','images','user'])->get();
        return $books;
    }

    public function findByISBN(string $isbn){
        $book = Book::where('isbn',$isbn)->
                        with(['authors','images','user'])->first();
        return $book;
    }

    public function checkISBN(string $isbn){
        $book = Book::where('isbn',$isbn)->first();
        return $book != null ? response()->json(true,200) : response()->json(false,200);
    }
}
