<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublisherController extends Controller
{
    public function index(){
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }
    public function show($id){
        $publishers = Publisher::find($id);
        return view('publisherdetail', compact('publishers'));
    }
}
