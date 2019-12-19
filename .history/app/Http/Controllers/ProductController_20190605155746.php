<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('all_items');
    }
    public function store(){
        return view('add_items');
    }
}
