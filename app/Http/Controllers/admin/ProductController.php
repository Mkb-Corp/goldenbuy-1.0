<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     *
     */
    public function index()
    {
        return view('admin.products.index');
    }

     /**
     * return @View
     */
    public function add()
    {
        $categories = Category::all();

        return view('dashboard.products.add', [
            'categories' => $categories
        ]);
    }

    public function new(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'main_picture' => 'required|mimes:png,jpg,jpeg',
            'description' => 'required',
            'sub_category_id' => 'required',
            'price' => 'required',
            'qty' => '',
            'tags' => '',
        ]);

        if ($request->file()) {
            $filePath = $request->file('main_picture')->store('products', 'public');

            $product = new Product([
                'name' => $request->post('name'),
                'main_picture' => $filePath,
                'description' => $request->post('description'),
                'sub_category_id' => $request->post('sub_category_id'),
                'price' => $request->post('price'),
                'qty' => $request->post('qty'),
                'tags' => $request->post('tags'),
            ]);

            $product->save();

            return back()->with('success','Produit ajouté avec succés');
        }

    }
}
