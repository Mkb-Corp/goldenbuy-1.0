<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('products.all', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function product_details($slug)
    {
        $categories = Category::all();
        $product = Product::where('slug', $slug)->get()[0];

        return view('products.details', [
            'categories' => $categories,
            'product' => $product
        ]);
    }

    public function products_by_category($categoryUid)
    {
        $categories = Category::all();


        $category = SubCategory::where('uid', $categoryUid)->get()[0];

        $products = Product::where('sub_category_id', $category->id)->get();

        // $category = SubCategory::where('id', $categoryId)->get()[0];

        return view('products.categoryproducts', [
            'categories' => $categories,
            'products' => $products,
            'category' => $category
        ]);
    }
}
