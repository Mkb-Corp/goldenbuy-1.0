<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        # code...
        $products = Product::all();

        $categories = Category::all();

        return view('home', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
