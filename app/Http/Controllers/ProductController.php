<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showAll(){
        return view("dashboard", ["products"=> Product::all()]);
    }
}
