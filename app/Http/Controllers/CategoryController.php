<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id){
        $categories = Category::find($id);
        $books = $categories->Book();
        return view('category', compact('categories','books'));
    }
}
