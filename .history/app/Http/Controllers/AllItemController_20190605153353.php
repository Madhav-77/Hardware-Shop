<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllItemController extends Controller
{
    public function index(){
        return view('all_items');
    }
}
