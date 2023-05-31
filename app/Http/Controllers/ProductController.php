<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_details($id)
    {
        $categories = Category::all();
        $product = Product::where('id', $id)->get()[0];

        return view('products.details', [
            'categories' => $categories,
            'product' => $product
        ]);
    }
}
