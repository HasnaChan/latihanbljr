<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        $categories = Category::all();
        return view('home', compact('books','categories'));
    }
    public function show($id){
        $books = Book::find($id);
        $categories = $books->Category;
        return view('bookdetail', compact('books', 'categories'));
    }
}
