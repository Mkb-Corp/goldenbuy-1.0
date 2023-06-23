<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();

        return view('admin.categories.subcategories', [
            'categories' => $categories,
            'sub_categories' => $sub_categories
        ]);
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'unique:sub_categories,name'],
            'category_id' => 'required'
        ]);

        SubCategory::create($request->post());

        return redirect()->route('subcategories.index')->with('message', 'Success');
    }
}
