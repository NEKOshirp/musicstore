<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{
    public function index() 
    {
        
        $top_product = Product::all();
        return view('home.index',compact('top_product')); 
    }

}